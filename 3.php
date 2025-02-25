<?php
// Vulnerable code
$page = $_GET['page'];
include($page . ".php");
?>