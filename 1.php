
<html>
<head>
    <title>Тестируем PHP</title>
</head>
<body>

<?php 
$imageFilename = "./image/img.jpg";
$desiredWidth = 200; // изображение сожмется до 200 по ширине, а по высоте пропорционально
$oldImage = imagecreatefromjpeg($imageFilename);
[$width, $height] = getimagesize($imageFilename);
$compressionRatio = $width/$desiredWidth; 
$newImageWidth = $width / $compressionRatio; 
$newImageHeight = $height / $compressionRatio; 
$newImage = imagecreatetruecolor($newImageWidth, $newImageHeight); 
$newImageFilename  = "./image/img_small.jpg";
imagecopyresampled($newImage, $oldImage, 0, 0, 0, 0, $newImageWidth, $newImageHeight, $width, $height);

$imageQuality = 100;
imagejpeg($newImage, $newImageFilename, $imageQuality);

echo "<img height=100 width=200 src=$newImageFilename />"; 
?>
</body>
</html>