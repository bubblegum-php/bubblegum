FROM php:8.2-fpm

ARG UID=1000
ARG GID=1000
ARG INSTALL_XDEBUG=false

RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    vim \
    unzip \
    libicu-dev \
    libpq-dev

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN docker-php-ext-configure intl
RUN docker-php-ext-install intl pdo pdo_pgsql

RUN if [ ${INSTALL_XDEBUG} = true ]; \
    then \
        pecl install xdebug && docker-php-ext-enable xdebug; \
    fi;

RUN groupmod -o -g ${GID} www-data && \
    usermod -o -u ${UID} -g www-data www-data

USER $USERNAME

COPY xdebug.ini "${PHP_INI_DIR}/conf.d"