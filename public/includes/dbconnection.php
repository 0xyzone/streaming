<?php
date_default_timezone_set("Asia/Kathmandu");
$db = mysqli_connect("168.119.191.106","vidantac_streamu","malaiktha1290","vidantac_streaming");

if(!$db){
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "success";
}
?>