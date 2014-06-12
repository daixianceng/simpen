<?php
require '../php/SimpenImage.php';

$img = new SimpenImage();
$img->setSavePath('images')->setBaseUrl('/simpen/demo/images/');

$img->receive();
$img->output();