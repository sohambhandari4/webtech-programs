//Write a PHP script to display source code of a webpage
<?php
// URL of the webpage whose source code you want to display
$url = "https://example.com";

// Get the source code of the webpage
$html = file_get_contents($url);

// Output the source code
echo "<pre>" . htmlspecialchars($html) . "</pre>";
?>
