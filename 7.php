<?php
$filename = basename($_GET['file']); // Remove directory traversal characters
$filepath = "uploads/" . $filename;
if (file_exists($filepath)) {
    readfile($filepath);
} else {
    die("File not found");
}
?>