
<html>
<head>
    <title>Тестируем PHP</title>
</head>
<body>

<?php 
$uploadedFile="D:\YandexDisk\FAN\intervolga\image\img.jpg";
$src = imagecreatefromjpeg($uploadedFile);
$size=getimagesize($uploadedFile);
$width = $size[0];
$height = $size[1];
$k = $width/220;
$new_w=$width/$k;
$new_h=$height/$k;
$tmp = imagecreatetruecolor($new_w, $new_h);
$filename  = "D:\YandexDisk\FAN\intervolga\image\img_small.jpg";
imagecopyresampled($tmp, $src, 0, 0, 0, 0, $new_w, $new_h, $width, $height);
imagejpeg($tmp, $filename, 100);

echo '<img height=100 width=200 src="D:\YandexDisk\FAN\intervolga\image\img.jpg" />';
 
?>
</body>
</html>