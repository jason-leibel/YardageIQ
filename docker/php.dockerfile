ARG version=8.1

FROM wodby/php:${version}

USER root

RUN apk add --no-cache bash git

# Optional: Set up Git safe directory
RUN git config --global --add safe.directory /var/www/html
