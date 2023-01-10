FROM php:8.0-apache

RUN apt-get update && \
    apt-get install -y --no-install-recommends git zip openssh-client sqlite3 libsqlite3-dev

# This is copied from the official Docker "drupal" image's Dockerfile.
# install the PHP extensions we need
RUN set -ex; \
  \
  if command -v a2enmod; then \
    a2enmod rewrite; \
  fi; \
  \
  savedAptMark="$(apt-mark showmanual)"; \
  \
  apt-get update; \
  apt-get install -y --no-install-recommends \
    libjpeg-dev \
    libpng-dev \
    libpq-dev \
  ; \
  \
  docker-php-ext-configure gd --with-png-dir=/usr --with-jpeg-dir=/usr; \
  docker-php-ext-install -j "$(nproc)" \
    gd \
    opcache \
    pdo_mysql \
    pdo_pgsql \
    zip \
  ; \
  \
# reset apt-mark's "manual" list so that "purge --auto-remove" will remove all build dependencies
  apt-mark auto '.*' > /dev/null; \
  apt-mark manual $savedAptMark; \
  ldd "$(php -r 'echo ini_get("extension_dir");')"/*.so \
    | awk '/=>/ { print $3 }' \
    | sort -u \
    | xargs -r dpkg-query -S \
    | cut -d: -f1 \
    | sort -u \
    | xargs -rt apt-mark manual; \
  \
  apt-get purge -y --auto-remove -o APT::AutoRemove::RecommendsImportant=false; \
  rm -rf /var/lib/apt/lists/*

# set recommended PHP.ini settings
# see https://secure.php.net/manual/en/opcache.installation.php
RUN { \
    echo 'opcache.memory_consumption=128'; \
    echo 'opcache.interned_strings_buffer=8'; \
    echo 'opcache.max_accelerated_files=4000'; \
    echo 'opcache.revalidate_freq=60'; \
    echo 'opcache.fast_shutdown=1'; \
    echo 'opcache.enable_cli=1'; \
  } > /usr/local/etc/php/conf.d/opcache-recommended.ini

# Install Drush Launcher
RUN curl -OL https://github.com/drush-ops/drush-launcher/releases/download/0.5.1/drush.phar && \
    chmod +x drush.phar && \
    mv drush.phar /usr/local/bin/drush

ENV COMPOSER_ALLOW_SUPERUSER 1

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Setup repository
COPY --chown=www-data:www-data . /var/www
WORKDIR /var/www

# Configure apache root.
ENV APACHE_DOCUMENT_ROOT /var/www/web

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Install site.
RUN composer install && \
    drush tome:install -y

# Set an admin password.
RUN drush upwd admin $(cat /etc/secrets/tome_pass) -y && \
    git checkout content

# Set up SSH keys.
RUN mkdir /var/www/.ssh && \
    ssh-keyscan github.com >> /var/www/.ssh/known_hosts && \
    cp /etc/secrets/tome_id_rsa /var/www/.ssh/tome_id_rsa && \
    echo "" >> /var/www/.ssh/tome_id_rsa && \
    chmod 400 /var/www/.ssh/tome_id_rsa

# Set up Git.
RUN git remote add origin <your origin> && \
    git branch --set-upstream-to=origin/master master && \
    git checkout master && \
    git config user.email "your@name.com" && \
    git config user.name "Example Name"

# Change file permissions.
RUN chown -R www-data:www-data content config html web/sites/default/files .git /var/www/.ssh
