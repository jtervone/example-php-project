FROM debian:buster

ENV DEBIAN_FRONTEND noninteractive

RUN apt-get update && apt-get install -y --no-install-recommends apt-utils
RUN apt-get -qy dist-upgrade
RUN apt-get -qy install --no-install-recommends sudo \
  apt-transport-https

RUN apt-get update -qy && \
  apt-get install -qy \
  ca-certificates \
  php-fpm

EXPOSE 9000

COPY ./entrypoint.sh /usr/local/bin/entrypoint.sh

ENTRYPOINT [ "/usr/local/bin/entrypoint.sh" ]
