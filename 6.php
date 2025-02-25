<?php
// Vulnerable code
$file = $_GET['file'];
readfile("uploads/" . $file);
?>