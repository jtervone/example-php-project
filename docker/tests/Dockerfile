FROM debian:bullseye

ENV DEBIAN_FRONTEND noninteractive

RUN apt-get update && apt-get install -y --no-install-recommends apt-utils
RUN apt-get -qy dist-upgrade
RUN apt-get -qy install --no-install-recommends sudo \
  apt-transport-https

RUN apt-get update -qy && \
  apt-get install -qy \
  ca-certificates \
  git \
  unzip \
  php-cli \
  php-dom \
  php-opcache \
  php-pdo \
  php-calendar \
  php-ctype \
  php-exif \
  php-fileinfo \
  php-ftp \
#  php-gettext \
  php-iconv \
  php-json \
  php-phar \
  php-posix \
  php-readline \
  php-shmop \
  php-simplexml \
  php-sockets \
  php-sysvmsg \
  php-sysvsem \
  php-sysvshm \
  php-tokenizer \
#  php-wddx \
  php-xmlreader \
  php-xmlwriter \
  php-xsl \
  php-mbstring \
  php-zip \
  php-xdebug \
  php-soap \
  php-dev \
  graphviz

RUN pecl channel-update pecl.php.net

RUN pecl install pcov
RUN echo "extension=pcov.so" > /etc/php/7.4/cli/conf.d/20-pcov.ini

# Note: The uopz extension ignores exit calls and may not work with all Composer commands.
# Disabling it when using Composer is recommended.
# RUN pecl install uopz
# RUN echo "extension=uopz.so" > /etc/php/7.3/cli/conf.d/20-uopz.ini

COPY ./conf/php.ini /etc/php/7.4/cli/php.ini
COPY ./entrypoint.sh /usr/local/bin/entrypoint.sh

ENTRYPOINT [ "/usr/local/bin/entrypoint.sh" ]
