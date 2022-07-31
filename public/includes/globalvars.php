<?php
$protocol = (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] === 'on') ? "https" : "http";
$site = $protocol . "://" . $_SERVER['SERVER_NAME'] . '/streaming/public/';
define("link", $site);
?>