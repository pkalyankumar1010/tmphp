<?php
$url = filter_var($_GET['url'], FILTER_VALIDATE_URL);
if ($url) {
    header("Location: " . $url);
} else {
    die("Invalid URL");
}
?>