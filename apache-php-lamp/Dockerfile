FROM ubuntu:22.04
ARG DEBIAN_FRONTEND=noninteractive


# Instalamos todas las extensiones requeridas por PrestaShop y actualizamos los repositorios ya existentes
RUN apt update && apt install -y \
    apache2 \
    php8.1 \
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

# Habilitamos los módulos de apache 
####Para que las urls se muestren amigables
RUN a2enmod rewrite 
####Para los certificados
RUN a2enmod ssl
####No es necesario
RUN a2enmod headers


#Exponemos los puertos en los que trabaja HTTP y HTTPS para poder programar con ambos protocolos
EXPOSE 80
EXPOSE 443 

#Instrución para arrancar apache
ENTRYPOINT [ "apachectl", "-D", "FOREGROUND"]