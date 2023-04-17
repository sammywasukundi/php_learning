<?php
    
    $img = imagecreatefromjpeg(__DIR__.DIRECTORY_SEPARATOR.'img_cuisine3.jpg');
    header ("Content-Type: image/jpeg");
    $color1 = imagecolorallocate($img, 100 ,200, 100);
    $police = 2;
    $x = 100;
    $y = 25;
    $texte = 'Encore moi oui , dans mes formations';

    imagestring($img, 5, 250, 100,$texte, $color1);
    imagejpeg($img);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>image</title>
</head>
<body>
    
</body>
</html>