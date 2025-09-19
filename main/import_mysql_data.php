<?php
echo "Starting MySQL to SQLite data import...\n";

// Read the MySQL dump
$sqlFile = 'database_export.sql';
if (!file_exists($sqlFile)) {
    echo "Error: {$sqlFile} not found\n";
    exit(1);
}

$sql = file_get_contents($sqlFile);

// Extract INSERT statements only
preg_match_all('/INSERT INTO `([^`]+)` VALUES (.+);/i', $sql, $matches, PREG_SET_ORDER);

if (empty($matches)) {
    echo "No INSERT statements found\n";
    exit(1);
}

echo "Found " . count($matches) . " INSERT statements\n";

// Connect to SQLite database
$db = new PDO('sqlite:database/database.sqlite');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Begin transaction
$db->beginTransaction();

try {
    $imported = 0;
    foreach ($matches as $match) {
        $tableName = $match[1];
        $values = $match[2];

        // Skip migrations table
        if ($tableName === 'migrations') {
            continue;
        }

        // Clean up the INSERT statement for SQLite
        $insertSql = "INSERT INTO {$tableName} VALUES {$values}";

        echo "Importing data into: {$tableName}\n";
        $db->exec($insertSql);
        $imported++;
    }

    $db->commit();
    echo "\nSuccess! Imported data into {$imported} tables\n";

} catch (Exception $e) {
    $db->rollback();
    echo "Error: " . $e->getMessage() . "\n";
    exit(1);
}
?>