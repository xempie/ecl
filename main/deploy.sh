#!/bin/bash

echo "=== Laravel Production Deployment Script ==="
echo "Target: empathiccomputing.com/new/"
echo "==========================================="

# Set production environment
echo "Setting production environment..."
cp .env.production .env

# Install production dependencies
echo "Installing production dependencies..."
composer install --optimize-autoloader --no-dev

# Clear and cache configuration
echo "Optimizing Laravel for production..."
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear

php artisan config:cache
php artisan route:cache
php artisan view:cache

# Run database migrations (if needed)
echo "Running database migrations..."
php artisan migrate --force

# Set proper permissions for storage and cache
echo "Setting proper permissions..."
chmod -R 775 storage
chmod -R 775 bootstrap/cache

# Create symbolic link for storage (if needed)
php artisan storage:link

echo "=== Deployment preparation complete! ==="
echo "Upload all files to public_html/new/ folder"
echo "Make sure to:"
echo "1. Copy .env.production to .env on server"
echo "2. Set proper folder permissions (755 for folders, 644 for files)"
echo "3. Point document root to public/ folder or create .htaccess"
echo "========================================================"
