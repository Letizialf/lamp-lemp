FROM ubuntu:22.04
ARG DEBIAN_FRONTEND=noninteractive

RUN apt update && apt install -y \
    curl \
    wget \
    git \
    && rm -rf /var/lib/apt/lists/* /var/cache/apt/*

RUN apt update && apt install -y php8.1 php8.1-fpm
# Actualizamos paquetes e instalamos Nginx y PHP-FPM con las extensiones necesarias para PrestaShop
RUN apt update && apt install -y \
    nginx \
    php8.1-fpm \
    php8.1-curl \
    php8.1-dom \
    php8.1-fileinfo \
    php8.1-gd \
    php8.1-iconv \
    php8.1-intl \
    php8.1-mbstring \
    php8.1-pdo \
    php8.1-mysql \
    php8.1-simplexml \
    php8.1-zip


# Exponer los puertos para HTTP y HTTPS
EXPOSE 9000 

# Comando para ejecutar Nginx y PHP-FPM en primer plano
# ENTRYPOINT ["php-fpm8.1", "-F"]
CMD ["php-fpm8.1", "-F"]
