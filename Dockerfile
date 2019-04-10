FROM siwecos/php-apache:7.2

LABEL maintainer="Sascha Brendel <mail@lednerb.eu>"

# Copy configuration files
COPY ./docker/php.ini /usr/local/etc/php/
COPY ./docker/supervisord.conf /etc/supervisor/supervisord.conf

# Copy application
COPY . .
COPY .env.example .env

# Install all PHP dependencies and change ownership of our applications
RUN composer install --no-dev --no-interaction \
    && chown -R www-data:www-data $APP_HOME

CMD supervisord --nodaemon --configuration /etc/supervisor/supervisord.conf

EXPOSE 80
