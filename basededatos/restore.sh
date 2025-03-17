#!/bin/bash

# Cargar variables de entorno desde .env.prod
ENV_FILE="/home/letizia/lamp-lemp/.env.prod"

if [ -f "$ENV_FILE" ]; then
    export $(grep -v '^#' "$ENV_FILE" | sed 's/=\(.*\)/="\1"/' | xargs)
else
    echo "❌ Error: No se encontró el archivo '$ENV_FILE'."
    exit 1
fi

# Configuración de conexión a Aiven
DB_HOST="${PMA_HOST}"
DB_PORT="${PORTO_BD}"
DB_USER="${PMA_USER}"
DB_PASSWORD="${PMA_PASSWORD}"
DB_NAME="${MYSQL_DATABASE}"
BACKUP_FILE="backup-bd.sql"

# Verificar si el archivo backup.sql existe
if [ ! -f "$BACKUP_FILE" ]; then
    echo "❌ Error: No se encontró el archivo '$BACKUP_FILE'."
    exit 1
fi

# Verificar conexión a la base de datos en Aiven
echo "🔍 Probando conexión con la base de datos en Aiven..."
mysql -h "$DB_HOST" -P "$DB_PORT" -u "$DB_USER" --password="$DB_PASSWORD" --ssl-mode=REQUIRED -e "SELECT 1" &> /dev/null

if [ $? -ne 0 ]; then
    echo "❌ Error: No se pudo conectar a la base de datos en Aiven. Verifica credenciales y SSL."
    exit 1
fi

# Restaurar la base de datos en Aiven
echo "🔄 Restaurando la base de datos en Aiven..."
mysql -h "$DB_HOST" -P "$DB_PORT" -u "$DB_USER" --password="$DB_PASSWORD" --ssl-mode=REQUIRED "$DB_NAME" < "$BACKUP_FILE"

# Verificar si la restauración fue exitosa
if [ $? -eq 0 ]; then
    echo "✅ Restauración completada con éxito en Aiven 🎉"
else
    echo "❌ Error en la restauración de la base de datos."
    exit 1
fi
