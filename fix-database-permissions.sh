#!/bin/bash
# Script to fix MySQL user permissions for Docker network access
# This script connects to the MySQL container and grants the necessary permissions

echo "Fixing MySQL user permissions..."

# Check if MySQL container is running
MYSQL_CONTAINER=$(docker ps --filter "name=clinic" --filter "ancestor=mysql:8.0" --format "{{.Names}}")
if [ -z "$MYSQL_CONTAINER" ]; then
    echo "Error: MySQL container is not running. Please start it with: docker-compose up -d mysql"
    exit 1
fi

echo "MySQL container found: $MYSQL_CONTAINER"

# Execute the fix permissions SQL script
echo "Executing permission fix script..."
docker exec -i $MYSQL_CONTAINER mysql -uroot -proot < docker/mysql/fix-permissions.sql

if [ $? -eq 0 ]; then
    echo "Permissions fixed successfully!"
    echo "You can now try accessing the application again."
else
    echo "Error: Failed to fix permissions. Please check the error messages above."
    exit 1
fi

