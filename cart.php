<?php

session_start();
require_once "include/beContent.inc.php";
require_once(realpath(dirname(__FILE__)).'/include/view/template/InitGraphic.php');

$main = new Skin();
InitGraphic::getInstance()->createGraphic($main);



$homeCart = new Skinlet('cart');
$main->setContent('body', $homeCart->get());


$main->close();