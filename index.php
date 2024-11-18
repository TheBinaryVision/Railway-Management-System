<?php
// Determine if HTTPS or HTTP is used
if (!empty($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] === 'on')) {
    $uri = 'https://';
} else {
    $uri = 'http://';
}

// Append the host to the URI
$uri .= $_SERVER['HTTP_HOST'];

// Redirect to the /dashboard/ directory
header('Location: ' . $uri . '/dashboard/');
exit;

// Fallback message in case redirection fails
?>
Something is wrong with the XAMPP installation :-(
