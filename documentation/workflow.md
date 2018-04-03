# Workflow Business Logic Siwecos

## Overview

### Tables
- user table
    - all users will be created inside this table
    - reference to core api token
    - organisation info 
- log table
    - all requests will be tracked inside log table
    - errors are stored for debugging purpose
- scan results
    - all information about scan results are saved
    - referenced with domain name and user_id 
- salutations
    - base salutations are saved, referenced and seeded
- org_sizes
    - org_sizes are saved, referenced and seeded
- danger_level
    - information in logtable are referenced by a danger_level
    - danger_level are saved, referenced and seeded
- acl_level
    - different access level are saved, referenced and seeded

### Installation
- Install all necessary packages and create an .env file for settings
```bash
$ composer install
```

- Enter database setting in .env file
```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=siwecos_business_api
DB_USERNAME=siwecos
DB_PASSWORD=siwecos
```

- Enter core api setting in .env file
```dotenv
CORE_URL=coreapi.dev
CORE_MASTER_TOKEN=wDV2gKXp+IJMuicqWNQ6d8rO
```

- Database Migration and Seeding
```bash
$ php artisan migrate --seed
```

- Creating a master token for communicate with BL Api
```bash
$ php artisan create:mastertoken
```

### Unit Tests
- For connection with CoreApi please see information in phpunit.xml
```xml
 <env name='CORE_URL' value="http://coreapi.dev"/>
 <env name="CORE_MASTER_TOKEN" value="OdcWJ8loZCyeWsUaCTYjgfhF"/>
```

### Swagger Annotations inside Laravel
[Local URL](http://siwecos-business-layer.dev/api/documentation)
```bash
$ php artisan l5-swagger:publish
$ php artisan l5-swagger:generate
```

### Middlewares

#### Mastertoken
Without the mastertoken set in the request header, no request can be made.
    - create user
    - get token from existing user
    - activate user

#### Usertoken
There are two levels of middlware in the user authentication
- one is checking the "userToken" inside the header.
    - get user data
    - update user data
    - delete user data
- the other one checks if the given user is activated
    - get token credits
    - update token credits

### Userflow

#### New User
1. Create User with given Schema
    1. user is inserted as inactive inside DB
    1. token is created by coreapi and saved in user DB (50 credits)
1. Activate user 

#### Delete User
1. Call delete Endpoint with userToken inside header
    1. Token and domains will be removed from coreapi
    
    
#### Add Domains
1. Create domain with authenticated user
    1. call verify procedure