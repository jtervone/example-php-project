FROM debian:buster

ENV DEBIAN_FRONTEND noninteractive

RUN apt-get update && apt-get install -y --no-install-recommends apt-utils
RUN apt-get -qy dist-upgrade
RUN apt-get -qy install --no-install-recommends sudo \
  apt-transport-https

RUN apt-get update -qy && \
  apt-get install -qy \
  ca-certificates \
  nginx

EXPOSE 80
EXPOSE 443

CMD $(which nginx) -c /etc/nginx/nginx.conf -g "daemon off;"
