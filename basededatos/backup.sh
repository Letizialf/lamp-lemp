#!/bin/bash

# Creamos variables que apunten ás variables de entorno porque traballamos con env.files
db_name="${MYSQL_DATABASE}"
db_password="${MYSQL_ROOT_PASSWORD}"
# Especificamos o comando que deberá executar o script pasando as variables en lugar dos datos concretos
mysqldump -u root -p"$db_password" "$db_name" > backup-bd.sql
