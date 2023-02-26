FROM alpine:3.15
COPY src /app
RUN export PHP_VERSION=8 && apk update && apk add nginx curl php$PHP_VERSION-fpm php$PHP_VERSION-opcache && \
    ln -s /etc/php$PHP_VERSION /etc/php && \
    ln -s /usr/bin/php$PHP_VERSION /usr/bin/php && \
    ln -s /usr/sbin/php-fpm$PHP_VERSION /usr/sbin/php-fpm && \
    mv /app/nginx.conf /etc/nginx/nginx.conf && \
    echo "clear_env = no" >> /etc/php/php-fpm.d/www.conf && \
    nginx -t && \
    echo "#!/bin/sh"              >> /run.sh && \
    echo "php-fpm -R"             >> /run.sh && \
    echo "nginx -g 'daemon off;'" >> /run.sh && \
    chmod +x /run.sh
EXPOSE 80
CMD ["/run.sh"]
