FROM siwecos/php-apache:7.2

LABEL maintainer="Sascha Brendel <mail@lednerb.eu>"

# Copy application
COPY . .
COPY .env.example .env

#  Update translation files with latest release
ADD https://github.com/SIWECOS/translations/releases/download/latest/translation-files.zip /tmp/translation-files.zip
RUN unzip -o -d resources/lang /tmp/translation-files.zip \
    && rm /tmp/translation-files.zip

# Install all PHP dependencies and change ownership of our applications
RUN composer install --no-dev --no-interaction \
    && chown -R www-data:www-data .

EXPOSE 80
