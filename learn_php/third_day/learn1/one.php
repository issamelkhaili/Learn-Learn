<?php
// Attempt to open google.com
$file = fopen("https://intrapy.intra.42.fr/api/v1/features/useV3/isel-kha", "r");

if ($file) {
    // Read the content
    $content = "";
    while (!feof($file)) {
        $content .= fgets($file);
    }
    fclose($file);
    
    // Output first 500 characters
    echo substr($content, 0, 500);
} else {
    echo "Failed to open the URL";
}
?>
