
<html>
<head>
    <title>Тестируем PHP</title>
</head>
<body>

<?php 
$imageFilename = "./image/2.png";
$desiredWidth = 200; // изображение сожмется до 200 по ширине, а по высоте пропорционально
$oldImage = imagecreatefrompng($imageFilename);
[$width, $height] = getimagesize($imageFilename);
$compressionRatio = $width/$desiredWidth; 
$newImageWidth = $width / $compressionRatio; 
$newImageHeight = $height / $compressionRatio; 

$newImage = imagecreatetruecolor($newImageWidth, $newImageHeight); 
imagesavealpha($newImage, true);
imagefill($newImage, 0, 0, imagecolorallocatealpha($newImage, 0, 0, 0, 127));
imagecopyresampled($newImage, $oldImage, 0, 0, 0, 0, $newImageWidth, $newImageHeight, $width, $height);

$imageQuality = 0; // для джпега это должно быть равно 100
$newImageFilename  = "./image/image_small.png";
imagepng($newImage, $newImageFilename, $imageQuality);

echo "<img height=100 width=200 src=$newImageFilename />"; 
?>
</body>
</html>