<?php
session_set_cookie_params([
    'lifetime' => 0,
    'path' => '/',
    'domain' => '',
    'secure' => true,  // Only allow over HTTPS
    'httponly' => true, // Prevent JavaScript access
    'samesite' => 'Strict'
]);
session_start();
?>