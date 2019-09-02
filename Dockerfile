FROM siwecos/dockered-laravel:7.2

LABEL maintainer="Sascha Brendel <mail@lednerb.eu>"

ENV ARTISAN_MIGRATE true
ENV USE_SCHEDULER true

# Install wkhtmltopdf dependencies
RUN apt-get update -y \
    && apt-get install -y xvfb libxrender1 libfontconfig1 libx11-dev libjpeg62 libxtst6 \
    && apt-get clean \
    && rm -r /var/lib/apt/lists/*

# Copy application
COPY . .
COPY .env.example .env

# Install all PHP dependencies and change ownership of our applications
RUN composer install --no-dev --no-interaction \
    && chown -R www-data:www-data .

EXPOSE 80
