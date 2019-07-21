<?php

if(!defined('PHI')) define('PHI', (1+sqrt(5))/2);

$w = 512;
$h = 512;

$img = imagecreatetruecolor($w, $h);

$pinks = array(0xFFC0CB,0xFFB6C1,0xFF69B4,0xFF1493,0xF1DDCF,0xFFDDF4,0xF9CCCA,0xF4C2C2,0xE8CCD7,0xEFBBCC,0xF2BDCD,0xFFB7C5,0xFFA6C9,0xFC89AC,0xF19CBB,0xE68FAC,0xDE6FA1,0xE4717A,0xF88379,0xDEA5A4,0xD7837F,0xC4AEAD,0xE75480,0xDE5285,0xFB607F,0xFF007F,0xFF6FFF,0xFC0FC0,0xCF6BA9,0xCC33CC);

$c = count($pinks) - 1;
$pink = $pinks[rand(0, $c)];

imagefill($img, 0, 0, $pink);

imagefilledrectangle($img, 0, $h / PHI, $w - 1, $h, 0xcccccc);

header('Content-Type: image/png');

imagepng($img);
imagedestroy($img);
