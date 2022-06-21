FROM registry.access.redhat.com/ubi8/php-74:latest
MAINTAINER Chris Jenkins "chrisj@redhat.com"
EXPOSE 8000
COPY . /opt/app-root/src
CMD /bin/bash -c 'php -S 0.0.0.0:8000'
