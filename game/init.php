<?php

$site_adi 	= "https://agarprivateservers.org/";

$keykode = substr(md5($_SERVER['HTTP_USER_AGENT']),0,7);
$keykode2 = substr(md5(md5($_SERVER['HTTP_USER_AGENT'])),0,7);

$getAdress = isset($_SERVER['HTTP_CLIENT_IP'])
    ? $_SERVER['HTTP_CLIENT_IP']
    : (isset($_SERVER['HTTP_X_FORWARDED_FOR'])
        ? $_SERVER['HTTP_X_FORWARDED_FOR']
        : $_SERVER['REMOTE_ADDR']);
$phrase = "::ffff:". $getAdress . "z2Eypio";
$md5Adress = md5($phrase);
$keyCode3 = substr($md5Adress,23,32);

if(!empty($_COOKIE['userName'])){
    $nick_agario =  $_COOKIE['userName'];
}
else
{
    $nick_agario = 'A-G-S';
}

$userClan =  @$_COOKIE['userClan'];
$darkTheme =  @$_COOKIE['darkTheme'];
$skin_agario =  @$_COOKIE['userSkin'];

require "clan-list.php";
require "servers.php";