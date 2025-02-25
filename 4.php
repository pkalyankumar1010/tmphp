<?php
$allowed_pages = ['home', 'about', 'contact'];
$page = $_GET['page'];
if (in_array($page, $allowed_pages)) {
    include($page . ".php");
} else {
    die("Invalid page");
}

?>