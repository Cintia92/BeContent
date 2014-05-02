<?php

session_start();
require_once "include/beContent.inc.php";
require_once(realpath(dirname(__FILE__)).'/include/view/template/InitGraphic.php');

$main = new Skin();
InitGraphic::getInstance()->createGraphic($main);



$homeOrder = new Skinlet('order');
$main->setContent('body', $homeOrder->get());


$main->close();