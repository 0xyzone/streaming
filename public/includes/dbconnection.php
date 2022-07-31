<?php
date_default_timezone_set("Asia/Kathmandu");
$db = mysqli_connect("localhost","vidantac_vcasu","malaiktha1290","vidantac_streaming");

if(!$db){
    die("Connection failed: " . mysqli_connect_error());
}
?>