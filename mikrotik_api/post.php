<?php
require ('routeros_api.class.php');

$API = new RouterosAPI();
$user = "admin";
$pw = "";
$ip = "192.168.100.16";

$API->debug = false;
$API->connect($ip, $user , $pw);
$rand = rand(12,275654);

$API->comm("/ip/hotspot/user/add", array (
    "server"    => "all",
    "name"      => "adin",
    "password"  => $rand,
    "profile"   => "default"
));

?>