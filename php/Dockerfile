FROM ubuntu:18.04
ENV DEBIAN_FRONTEND noninteractive
WORKDIR /root
RUN apt-get update && \
apt-get -y upgrade && \
apt-get -y install git unzip vim curl wget lsb-release gnupg

RUN curl -OL https://dev.mysql.com/get/mysql-apt-config_0.8.10-1_all.deb && \
dpkg -i mysql-apt-config_0.8.10-1_all.deb

RUN apt-get update && \
apt-get -y upgrade && \
apt-get -y install \
php7.2 \
php7.2-fpm \
php7.2-json \
php7.2-mysql \
php7.2-opcache \
php7.2-tidy \
php7.2-xml \
php7.2-curl \
php7.2-gd \
nginx \
mysql-client

RUN apt-get install -y --no-install-recommends apt-utils
CMD ["/usr/sbin/nginx", "-g", "daemon off;"]