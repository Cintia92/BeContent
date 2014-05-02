<?php

session_start();
require_once "include/beContent.inc.php";
require_once(realpath(dirname(__FILE__)).'/include/view/template/InitGraphic.php');

$main = new Skin();
InitGraphic::getInstance()->createGraphic($main);



$homeBottom = new Skinlet('home-bottom');
$home = new Skinlet("home");



$slider = new Content($sliderEntity, $imageSliderRelation, $imageEntity);
$slider->forceSingle();
$slider->setFilter('id', '2');
$slider->apply($home, 'slider');

$main->setContent('body', $home->get());
$main->setContent('homeBottom', $homeBottom->get());


$main->close();