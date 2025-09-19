<?php
// Test database connection for production deployment

$host = '43.250.142.24';  // or 'localhost' when on server
$database = 'empathi1_db';
$username = 'empathi1_admin';
$password = 'PVu}ru1DqS@)';

echo "Testing database connection...\n";
echo "Host: $host\n";
echo "Database: $database\n";
echo "Username: $username\n";
echo "----------------------------------------\n";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "✅ Connection successful!\n";

    // Test a simple query
    $stmt = $pdo->query("SELECT VERSION() as version");
    $version = $stmt->fetch(PDO::FETCH_ASSOC);
    echo "MySQL Version: " . $version['version'] . "\n";

    // List tables (if any)
    $stmt = $pdo->query("SHOW TABLES");
    $tables = $stmt->fetchAll(PDO::FETCH_COLUMN);
    echo "Tables in database: " . count($tables) . "\n";

    if (count($tables) > 0) {
        echo "Existing tables:\n";
        foreach ($tables as $table) {
            echo "  - $table\n";
        }
    }

} catch (PDOException $e) {
    echo "❌ Connection failed: " . $e->getMessage() . "\n";

    // Try localhost instead
    echo "\nTrying localhost connection...\n";
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=$database", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "✅ Localhost connection successful!\n";
    } catch (PDOException $e2) {
        echo "❌ Localhost connection also failed: " . $e2->getMessage() . "\n";
    }
}
?>