<?php
echo "PHP Version: " . phpversion() . "\n";
echo "Configuration File: " . php_ini_loaded_file() . "\n";
echo "GD Extension Loaded: " . (extension_loaded('gd') ? 'YES' : 'NO') . "\n";
echo "Extensions: " . implode(', ', get_loaded_extensions()) . "\n";
?>