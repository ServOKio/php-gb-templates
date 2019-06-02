<?php
/*---------------------------------------
|
|
|
---------------------------------------*/
$title = "Haren";
$subtitle = "Developer | 4";
$text = "Just has a good day";

//servokio
//dark
//moana
//bell
//retro
$theme = "servokio";
//servokio
//nightmare
//moana
//bell
//retro
$fonts = "servokio";

header ("Content-type: image/png");

function hex2rgb($hex) {
    $rgb[0] = hexdec(substr($hex, 0, 2));
    $rgb[1] = hexdec(substr($hex, 2, 2));
    $rgb[2] = hexdec(substr($hex, 4, 2));
    return $rgb;
}

$image = imagecreatetruecolor(266, 380) or die ("Cannot Create image");
$b = hex2rgb("5500ff");


if($theme == "servokio"){
    $b = hex2rgb("5500ff");
    $background_color = imagecolorallocate($image, $b[0], $b[1], $b[2]);
    $title_color = ImageColorAllocate ($image, 255, 255, 255);
    $subtitle_color = ImageColorAllocate ($image, 224, 224, 224);
} else if($theme == "dark"){
    $b = hex2rgb("0c0c0c");
    $background_color = imagecolorallocate($image, $b[0], $b[1], $b[2]);
    $title_color = ImageColorAllocate ($image, 255, 255, 255);
    $subtitle_color = ImageColorAllocate ($image, 224, 224, 224);
} else if($theme == "nightmare"){
    $b = hex2rgb("020202");
    $background_color = imagecolorallocate($image, $b[0], $b[1], $b[2]);
    $title_color = ImageColorAllocate ($image, 255, 255, 255);
    $subtitle_color = ImageColorAllocate ($image, 224, 224, 224);
} else if($theme == "moana"){
    $b = hex2rgb("0495b4");
    $f = hex2rgb("effffe");
    $background_color = imagecolorallocate($image, $b[0], $b[1], $b[2]);
    $title_color = ImageColorAllocate ($image, $f[0], $f[1], $f[2]);
    $subtitle_color = ImageColorAllocate ($image, 224, 224, 224);
} else if($theme == "bell"){
    $b = hex2rgb("030304");
    $background_color = imagecolorallocate($image, $b[0], $b[1], $b[2]);
    $title_color = ImageColorAllocate ($image, 255, 255, 255);
    $subtitle_color = ImageColorAllocate ($image, 224, 224, 224);
} else if($theme == "retro"){
    $b = hex2rgb("e328fc");
    $background_color = imagecolorallocate($image, $b[0], $b[1], $b[2]);
    $f = hex2rgb("fad900");
    $title_color = ImageColorAllocate ($image, $f[0], $f[1], $f[2]);
    $f2 = hex2rgb("0b9ed6");
    $subtitle_color = ImageColorAllocate ($image, $f2[0], $f2[1], $f2[2]);
}

if($fonts == "servokio"){
    $font_one = './fonts/servokio/1.otf';
    $font_two = './fonts/servokio/2.otf';
} else if($fonts == "nightmare"){
    $font_one = './fonts/nightmare/1.otf';
    $font_two = './fonts/nightmare/2.ttf';
} else if($fonts == "moana"){
    $font_one = './fonts/moana/1.ttf';
    $font_two = './fonts/moana/2.otf';
} else if($fonts == "bell"){
    $font_one = './fonts/bell/1.otf';
    $font_two = './fonts/bell/2.ttf';
} else if($fonts == "retro"){
    $font_one = './fonts/retro/1.ttf';
    $font_two = './fonts/retro/2.otf';
}

imagefill($image, 0, 0, $background_color);

// Текст
$len = strlen($title);
$size = 25;
if($len == 11){
    $size = 22;
} else if($len == 12){
    $size = 20.4;
} else if($len == 13){
    $size = 18.7;
} else if($len == 14){
    $size = 17.4;
} else if($len == 15){
    $size = 16.2;
} else if($len == 16){
    $size = 15.2;
}

$e1 = imagecolorallocate($image, 255, 255, 255);
$e2 = imagecolorallocate($image, 224, 224, 224);
$e3 = imagecolorallocate($image, $b[0], $b[1], $b[2]);

$l1 = 304;
$l2 = 388;

imagefilledellipse($image, -20, 450, 330, 330, $e2);
imagefilledellipse($image, 180, 340, 150, 150, $e2);

imagefilledellipse($image, $l1, $l2, 150, 150, $e2);

imagefilledellipse($image, 176, 270, 200, 200, $e3);

imagefilledellipse($image, -20, 450, 300, 300, $e1);
imagefilledellipse($image, $l1, $l2, 120, 120, $e1);

imagettftext($image, $size, 0, 30, 51, $title_color, $font_one, $title);
imagettftext($image, 20, 0, 30, 85, $subtitle_color, $font_one, $subtitle);
imagettftext($image, 12, 0, 30, 115, $subtitle_color, $font_two, $text);

ImagePng ($image);
//imagedestroy($image);
?>