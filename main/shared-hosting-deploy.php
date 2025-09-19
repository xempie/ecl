<?php
/**
 * Shared Hosting Deployment Script for Laravel
 * Upload this file to your hosting and run it to deploy without Composer
 */

set_time_limit(0);
ini_set('memory_limit', '1G');

echo "<h1>Laravel Shared Hosting Deployment</h1>";
echo "<p>Target: empathiccomputing.com/new/</p>";
echo "<pre>";

function log_message($message) {
    echo "[" . date('Y-m-d H:i:s') . "] " . $message . "\n";
}

// Configuration
$target_directory = '/home/empathi1/public_html/new/';
$backup_directory = '/home/empathi1/public_html/backup_' . date('Y-m-d_H-i-s') . '/';

// Database configuration
$db_config = [
    'host' => 'localhost',
    'database' => 'empathi1_db',
    'username' => 'empathi1_admin',
    'password' => 'PVu}ru1DqS@)'
];

log_message("=== SHARED HOSTING DEPLOYMENT START ===");

// Step 1: Check PHP version
$php_version = phpversion();
log_message("PHP Version: $php_version");

if (version_compare($php_version, '8.1.0', '<')) {
    log_message("❌ PHP 8.1+ required. Current: $php_version");
    echo "<div style='color: red; background: #ffe6e6; padding: 10px; margin: 10px 0;'>";
    echo "<strong>ERROR:</strong> Laravel 11 requires PHP 8.1 or higher. Your hosting has PHP $php_version.";
    echo "</div>";
    exit(1);
} else {
    log_message("✅ PHP version compatible");
}

// Step 2: Check required PHP extensions
$required_extensions = [
    'mbstring', 'xml', 'curl', 'pdo', 'pdo_mysql',
    'tokenizer', 'openssl', 'fileinfo', 'json'
];

$missing_extensions = [];
foreach ($required_extensions as $ext) {
    if (!extension_loaded($ext)) {
        $missing_extensions[] = $ext;
    }
}

if (!empty($missing_extensions)) {
    log_message("❌ Missing PHP extensions: " . implode(', ', $missing_extensions));
    echo "<div style='color: red; background: #ffe6e6; padding: 10px; margin: 10px 0;'>";
    echo "<strong>ERROR:</strong> Missing required PHP extensions: " . implode(', ', $missing_extensions);
    echo "<br>Contact your hosting provider to enable these extensions.";
    echo "</div>";
    exit(1);
} else {
    log_message("✅ All required PHP extensions available");
}

// Step 3: Create directories if they don't exist
log_message("Creating directory structure...");
$directories = [
    $target_directory,
    $target_directory . 'storage/app/',
    $target_directory . 'storage/framework/cache/',
    $target_directory . 'storage/framework/sessions/',
    $target_directory . 'storage/framework/views/',
    $target_directory . 'storage/logs/',
    $target_directory . 'bootstrap/cache/'
];

foreach ($directories as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
        log_message("✅ Created directory: $dir");
    }
}

// Step 4: Set proper permissions (shared hosting safe)
log_message("Setting shared hosting permissions...");
$permission_commands = [
    "chmod 755 {$target_directory}",
    "chmod -R 755 {$target_directory}storage/",
    "chmod -R 755 {$target_directory}bootstrap/cache/",
    "find {$target_directory} -type f -name '*.php' -exec chmod 644 {} \;",
    "chmod 644 {$target_directory}.env"
];

foreach ($permission_commands as $command) {
    exec($command . " 2>&1", $output, $return_code);
    if ($return_code === 0) {
        log_message("✅ Permission set successfully");
    } else {
        log_message("⚠️  Permission command may have failed (normal on some shared hosts)");
    }
    $output = [];
}

// Step 5: Configure environment
log_message("Configuring environment for shared hosting...");
$env_content = 'APP_NAME="Empathic Computing Lab"
APP_ENV=production
APP_KEY=base64:pbC8eZec5zxB68KE9JBwT4fS7ksiIAXfYfRd9OtUYo0=
APP_DEBUG=false
APP_URL=https://empathiccomputing.com/new

APP_LOCALE=en
APP_FALLBACK_LOCALE=en
APP_FAKER_LOCALE=en_US

APP_MAINTENANCE_DRIVER=file

PHP_CLI_SERVER_WORKERS=4

BCRYPT_ROUNDS=12

LOG_CHANNEL=stack
LOG_STACK=single
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=error

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=empathi1_db
DB_USERNAME=empathi1_admin
DB_PASSWORD=PVu}ru1DqS@)

SESSION_DRIVER=file
SESSION_LIFETIME=120
SESSION_ENCRYPT=false
SESSION_PATH=/new
SESSION_DOMAIN=empathiccomputing.com

BROADCAST_CONNECTION=log
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync

CACHE_STORE=file

MAIL_MAILER=smtp
MAIL_HOST=mail.empathiccomputing.com
MAIL_PORT=587
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_FROM_ADDRESS="noreply@empathiccomputing.com"
MAIL_FROM_NAME="Empathic Computing Lab"

VITE_APP_NAME="${APP_NAME}"';

file_put_contents($target_directory . '.env', $env_content);
log_message("✅ Environment file configured for shared hosting");

// Step 6: Test database connection
log_message("Testing database connection...");
try {
    $pdo = new PDO(
        "mysql:host={$db_config['host']};dbname={$db_config['database']}",
        $db_config['username'],
        $db_config['password']
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->query("SELECT VERSION() as version");
    $version = $stmt->fetch(PDO::FETCH_ASSOC);
    log_message("✅ Database connected successfully - MySQL " . $version['version']);

} catch (PDOException $e) {
    log_message("❌ Database connection failed: " . $e->getMessage());
    echo "<div style='color: red; background: #ffe6e6; padding: 10px; margin: 10px 0;'>";
    echo "<strong>Database Error:</strong> " . $e->getMessage();
    echo "</div>";
}

// Step 7: Create .htaccess for subdirectory
log_message("Creating .htaccess for subdirectory hosting...");
$htaccess_content = '# Laravel Application .htaccess for subdirectory deployment
<IfModule mod_rewrite.c>
    RewriteEngine On

    # Redirect to public folder
    RewriteCond %{REQUEST_URI} !^/new/public/
    RewriteRule ^(.*)$ /new/public/$1 [L,QSA]
</IfModule>

# Security headers
<IfModule mod_headers.c>
    Header always set X-Content-Type-Options nosniff
    Header always set X-Frame-Options DENY
    Header always set X-XSS-Protection "1; mode=block"
</IfModule>

# Prevent access to sensitive files
<FilesMatch "^\.">
    Order allow,deny
    Deny from all
</FilesMatch>

<FilesMatch "\.(env|log|md)$">
    Order allow,deny
    Deny from all
</FilesMatch>';

file_put_contents($target_directory . '.htaccess', $htaccess_content);
log_message("✅ .htaccess configured");

// Step 8: Create public/.htaccess for Laravel routing
$public_htaccess = '<IfModule mod_rewrite.c>
    <IfModule mod_negotiation.c>
        Options -MultiViews -Indexes
    </IfModule>

    RewriteEngine On

    # Handle Authorization Header
    RewriteCond %{HTTP:Authorization} .
    RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]

    # Redirect Trailing Slashes If Not A Folder...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_URI} (.+)/$
    RewriteRule ^ %1 [L,R=301]

    # Send Requests To Front Controller...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [L]
</IfModule>';

file_put_contents($target_directory . 'public/.htaccess', $public_htaccess);
log_message("✅ Laravel public/.htaccess configured");

// Step 9: Generate application key if needed
if (file_exists($target_directory . 'artisan')) {
    log_message("Generating application key...");
    exec("cd {$target_directory} && php artisan key:generate --force 2>&1", $output, $return_code);
    if ($return_code === 0) {
        log_message("✅ Application key generated");
    } else {
        log_message("⚠️  Could not generate key automatically");
    }
}

log_message("=== DEPLOYMENT COMPLETE ===");
log_message("Next steps:");
log_message("1. Upload all Laravel files to: $target_directory");
log_message("2. Visit: https://empathiccomputing.com/new/");
log_message("3. Run database migrations if needed");

echo "</pre>";
echo "<h2>Deployment Summary</h2>";
echo "<div style='background: #e6ffe6; padding: 15px; margin: 10px 0; border-left: 4px solid #4CAF50;'>";
echo "<strong>✅ Shared hosting environment configured!</strong><br>";
echo "<strong>Target URL:</strong> <a href='https://empathiccomputing.com/new/' target='_blank'>https://empathiccomputing.com/new/</a><br>";
echo "<strong>PHP Version:</strong> $php_version<br>";
echo "<strong>Environment:</strong> Production ready<br>";
echo "<strong>Database:</strong> " . (isset($pdo) ? "Connected" : "Check configuration") . "<br>";
echo "</div>";

echo "<h3>Manual Upload Instructions:</h3>";
echo "<ol>";
echo "<li>Download/copy ALL files from your Laravel project</li>";
echo "<li>Upload to <code>public_html/new/</code> via cPanel File Manager</li>";
echo "<li>Make sure <code>vendor/</code> folder is included</li>";
echo "<li>Verify <code>.env</code> file is properly configured</li>";
echo "<li>Test the site at the URL above</li>";
echo "</ol>";
?>