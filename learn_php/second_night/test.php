<?php
// Create a file called server_info.php with this content

// 1. Start with some basic formatting
echo "<pre>";

// 2. Print the entire $_SERVER array to see all available values
echo "<h2>All SERVER Variables:</h2>";
print_r($_SERVER);

// 3. Test specific useful variables with checks
echo "\n\n<h2>Commonly Used SERVER Variables:</h2>";

// Script information
echo "Script Path: " . $_SERVER['SCRIPT_FILENAME'] . "\n";

// Server information
echo "Server Software: " . $_SERVER['SERVER_SOFTWARE'] . "\n";

// Request information (only available in web context)
echo "Request Method: " . $_SERVER['REQUEST_METHOD'] . "\n";

// Client information (with safety checks)
echo "IP Address: " . $_SERVER['REMOTE_ADDR'] ?? "Not available" . "\n";

if (isset($_SERVER['HTTP_USER_AGENT'])) {
    echo "Browser: " . $_SERVER['HTTP_USER_AGENT'] . "\n";
} else {
    echo "Browser: Not available (running from CLI)\n";
}

// 4. Detect if running from command line or web server
if (php_sapi_name() === 'cli') {
    echo "\nYou are running this script from the command line!";
} else {
    echo "\nYou are running this script from a web server!";
}

echo "</pre>";
?>
