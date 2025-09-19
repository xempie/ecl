<?php
/**
 * Laravel Deployment Uploader
 * Upload this file to your cPanel hosting and run it to deploy the Laravel app
 */

set_time_limit(0);
ini_set('memory_limit', '512M');

// Configuration
$deployment_zip_url = 'http://localhost/deployment.zip'; // Update this URL
$target_directory = '/home/empathi1/public_html/new/';
$backup_directory = '/home/empathi1/public_html/backup_' . date('Y-m-d_H-i-s') . '/';

// Database configuration
$db_config = [
    'host' => 'localhost',
    'database' => 'empathi1_db',
    'username' => 'empathi1_admin',
    'password' => 'PVu}ru1DqS@)'
];

echo "<h1>Laravel Deployment Script</h1>";
echo "<pre>";

function log_message($message) {
    echo "[" . date('Y-m-d H:i:s') . "] " . $message . "\n";
}

// Step 1: Create backup of existing files
if (is_dir($target_directory)) {
    log_message("Creating backup of existing files...");
    if (!is_dir($backup_directory)) {
        mkdir($backup_directory, 0755, true);
    }

    $backup_command = "cp -r {$target_directory}* {$backup_directory}";
    exec($backup_command, $output, $return_code);

    if ($return_code === 0) {
        log_message("✅ Backup created successfully at: $backup_directory");
    } else {
        log_message("❌ Backup failed");
    }
}

// Step 2: Download deployment package
log_message("Downloading deployment package...");
$zip_content = file_get_contents($deployment_zip_url);

if ($zip_content === false) {
    log_message("❌ Failed to download deployment package from: $deployment_zip_url");
    exit(1);
}

$temp_zip = '/tmp/laravel_deployment.zip';
file_put_contents($temp_zip, $zip_content);
log_message("✅ Downloaded deployment package");

// Step 3: Extract files
log_message("Extracting files to target directory...");

$zip = new ZipArchive();
if ($zip->open($temp_zip) === TRUE) {
    if (!is_dir($target_directory)) {
        mkdir($target_directory, 0755, true);
    }

    $zip->extractTo($target_directory);
    $zip->close();
    log_message("✅ Files extracted successfully");
} else {
    log_message("❌ Failed to extract ZIP file");
    exit(1);
}

// Step 4: Set proper permissions
log_message("Setting file permissions...");
$permission_commands = [
    "chmod -R 755 {$target_directory}",
    "chmod -R 775 {$target_directory}storage/",
    "chmod -R 775 {$target_directory}bootstrap/cache/",
    "find {$target_directory} -type f -exec chmod 644 {} \;"
];

foreach ($permission_commands as $command) {
    exec($command, $output, $return_code);
    if ($return_code === 0) {
        log_message("✅ Permission set: $command");
    } else {
        log_message("❌ Permission failed: $command");
    }
}

// Step 5: Configure environment
log_message("Configuring environment...");
$env_production = $target_directory . '.env.production';
$env_file = $target_directory . '.env';

if (file_exists($env_production)) {
    copy($env_production, $env_file);
    log_message("✅ Environment file configured");
} else {
    log_message("❌ .env.production file not found");
}

// Step 6: Test database connection
log_message("Testing database connection...");
try {
    $pdo = new PDO(
        "mysql:host={$db_config['host']};dbname={$db_config['database']}",
        $db_config['username'],
        $db_config['password']
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    log_message("✅ Database connection successful");
} catch (PDOException $e) {
    log_message("❌ Database connection failed: " . $e->getMessage());
}

// Step 7: Run Laravel optimization commands
log_message("Running Laravel optimization...");
$laravel_commands = [
    "cd {$target_directory} && php artisan config:cache",
    "cd {$target_directory} && php artisan route:cache",
    "cd {$target_directory} && php artisan view:cache",
    "cd {$target_directory} && php artisan migrate --force",
    "cd {$target_directory} && php artisan storage:link"
];

foreach ($laravel_commands as $command) {
    exec($command . " 2>&1", $output, $return_code);
    if ($return_code === 0) {
        log_message("✅ Command successful: $command");
    } else {
        log_message("❌ Command failed: $command");
        log_message("Output: " . implode("\n", $output));
    }
    $output = []; // Clear output array
}

// Step 8: Cleanup
log_message("Cleaning up temporary files...");
unlink($temp_zip);
log_message("✅ Temporary files removed");

log_message("=== DEPLOYMENT COMPLETE ===");
log_message("Visit: https://empathiccomputing.com/new/");
log_message("Backup location: $backup_directory");

echo "</pre>";
echo "<h2>Deployment Summary</h2>";
echo "<ul>";
echo "<li><strong>Target URL:</strong> <a href='https://empathiccomputing.com/new/' target='_blank'>https://empathiccomputing.com/new/</a></li>";
echo "<li><strong>Backup Location:</strong> $backup_directory</li>";
echo "<li><strong>Log File:</strong> Check above for any errors</li>";
echo "</ul>";
?>