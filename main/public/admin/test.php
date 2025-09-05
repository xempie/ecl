<?php
echo "<h1>Admin Panel Test</h1>";
echo "<p>PHP is working!</p>";
echo "<p>Path: " . __DIR__ . "</p>";
echo "<p>URL: " . $_SERVER['REQUEST_URI'] . "</p>";
phpinfo();
?>