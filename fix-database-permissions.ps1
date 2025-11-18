# Script to fix MySQL user permissions for Docker network access
# This script connects to the MySQL container and grants the necessary permissions

Write-Host "Fixing MySQL user permissions..." -ForegroundColor Yellow

# Check if MySQL container is running
$mysqlContainer = docker ps --filter "name=clinic" --filter "ancestor=mysql:8.0" --format "{{.Names}}"
if (-not $mysqlContainer) {
    Write-Host "Error: MySQL container is not running. Please start it with: docker-compose up -d mysql" -ForegroundColor Red
    exit 1
}

Write-Host "MySQL container found: $mysqlContainer" -ForegroundColor Green

# Execute the fix permissions SQL script
Write-Host "Executing permission fix script..." -ForegroundColor Yellow
docker exec -i $mysqlContainer mysql -uroot -proot < docker/mysql/fix-permissions.sql

if ($LASTEXITCODE -eq 0) {
    Write-Host "Permissions fixed successfully!" -ForegroundColor Green
    Write-Host "You can now try accessing the application again." -ForegroundColor Green
} else {
    Write-Host "Error: Failed to fix permissions. Please check the error messages above." -ForegroundColor Red
    exit 1
}

