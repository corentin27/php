<?php
require ('function.php');
require ('vendor/autoload.php');
include 'vendor/gumlet/php-image-resize/lib/ImageResize.php';

//use Gregwar\Image\Image;
use Gumlet\ImageResize;


if (!empty($_FILES['img'])){

    $image = new ImageResize($_FILES['img']['tmp_name']);
    $image->crop(200, 200, true, ImageResize::CROPCENTER);
    $image->save('upload/'.$_FILES['img']['name']);

//    $maxSize = 150;
//
//    debug($_FILES['img']);
//
//    $name       = $_FILES['img']['name'];
//    $type       = $_FILES['img']['type'];
//    $tmp_name   = $_FILES['img']['tmp_name'];
//    $size       = $_FILES['img']['size'];
//    $error      = $_FILES['img']['error'];
//
//    $pixelSize  = getimagesize($tmp_name);
//    $witdhSrc   = $pixelSize[0];
//    $heightSrc  = $pixelSize[1];
//
//
//    if ($witdhSrc < $heightSrc){
//        echo 'Portrait';
//        $heightDesc = $maxSize;
//        $witdhSDesc = ($maxSize * $witdhSrc ) / $heightSrc ;
//    } elseif ($witdhSrc > $heightSrc){
//        echo 'paysage';
//        $witdhSDesc = $maxSize;
//        $heightDesc = ($maxSize * $heightSrc) / $witdhSrc;
//    }else {
//        echo 'Format cubique';
//        $witdhSDesc = $heightDesc = $maxSize;
//    }
//
//
//    if (!strstr($type, 'jpg') && !strstr($type, 'jpeg') && !strstr($type, 'png') && !strstr($type, 'gif')) {
//        exit('ce ficher ne correspond pas à une image');
//    }
//
//
//    if (strstr($type, 'jpg') || strstr($type, 'jpeg') ){
//        $newImg      = imagecreatefromjpeg($tmp_name);
//        $newImg_desc = imagecreatetruecolor($witdhSDesc, $heightDesc);
//
//        imagecopyresized(
//            $newImg_desc,
//            $newImg,
//            0,
//            0,
//            0,
//            0,
//            $witdhSDesc,
//            $heightDesc,
//            $witdhSrc,
//            $heightSrc
//        );
//        imagejpeg($newImg_desc, "upload/".$name,100);
//    }
//    if (strstr($type, 'gif')){
//        $newImg      = imagecreatefromgif($tmp_name);
//        $newImg_desc = imagecreatetruecolor($witdhSDesc, $heightDesc);
//
//        imagecopyresized(
//            $newImg_desc,
//            $newImg,
//            0,
//            0,
//            0,
//            0,
//            $witdhSDesc,
//            $heightDesc,
//            $witdhSrc,
//            $heightSrc
//        );
//        imagegif($newImg_desc, "upload/".$name);
//    }
//    if (strstr($type, 'png')){
//        $newImg      = imagecreatefrompng($tmp_name);
//        $newImg_desc = imagecreatetruecolor($witdhSDesc, $heightDesc);
//
//        imagecopyresized(
//            $newImg_desc,
//            $newImg,
//            0,
//            0,
//            0,
//            0,
//            $witdhSDesc,
//            $heightDesc,
//            $witdhSrc,
//            $heightSrc
//        );
//        imagepng($newImg_desc, "upload/".$name,9);
//    }


//    function ImageResize (int $size, string $file , string $format, string $imageFormat,string $url,int $quality ){
//        $maxSize = $size;
//        $pixelSize  = getimagesize($_FILES[$name]['tmp_name']);
//        $witdhSrc   = $pixelSize[0];
//        $heightSrc  = $pixelSize[1];
//
//        if ($witdhSrc < $heightSrc){
//            // Portrait
//            $heightDesc = $maxSize;
//            $witdhSDesc = ($maxSize * $witdhSrc ) / $heightSrc ;
//
//        } elseif ($witdhSrc > $heightSrc){
//            // paysage
//            $witdhSDesc = $maxSize;
//            $heightDesc = ($maxSize * $heightSrc) / $witdhSrc;
//
//        }else {
//            //Format cubique
//            $witdhSDesc = $heightDesc = $maxSize;
//
//        }
//        if (strstr($_FILES[$name]['type'], $format)){
//            $newImg      = imagecreatefrompng($_FILES[$name]['tmp_name']);
//            $newImg_desc = imagecreatetruecolor($witdhSDesc, $heightDesc);
//
//            imagecopyresized(
//                $newImg_desc,
//                $newImg,
//                0,
//                0,
//                0,
//                0,
//                $witdhSDesc,
//                $heightDesc,
//                $witdhSrc,
//                $heightSrc
//            );
//            $imageFormat($newImg_desc, $url.$name,$quality);
//        }
//    }

//    /**
//     * @param int $maxSize
////     * @param string $file
//     * @param string $path
//     * @param int $idUser
//     */

//    function imageResize (int $maxSize, $file, string $path, int $idUser){
//
//        $name       = $file['name'];
//        $type       = $file['type'];
//        $tmp_name   = $file['tmp_name'];
//        $size       = $file['size'];
//        $error      = $file['error'];
//
//        $pixelSize  = getimagesize($tmp_name);
//        $witdhSrc   = $pixelSize[0];
//        $heightSrc  = $pixelSize[1];
//
//        if ($witdhSrc < $heightSrc){
//            // Portrait
//            $heightDesc = $maxSize;
//            $witdhSDesc = ($maxSize * $witdhSrc ) / $heightSrc ;
//
//        } elseif ($witdhSrc > $heightSrc){
//            // paysage
//            $witdhSDesc = $maxSize;
//            $heightDesc = ($maxSize * $heightSrc) / $witdhSrc;
//
//        }else {
//            //Format cubique
//            $witdhSDesc = $heightDesc = $maxSize;
//
//        }
//
//
//        /////  FORMAT JPEG
//        ///
//        if (strstr($file['type'], 'jpeg') || strstr($file['type'], 'jpg') ){
//
//            $newImg      = imagecreatefromjpeg($tmp_name);
//            $newImg_desc = imagecreatetruecolor($witdhSDesc, $heightDesc);
//
//            imagecopyresized(
//                $newImg_desc,
//                $newImg,
//                0,
//                0,
//                0,
//                0,
//                $witdhSDesc,
//                $heightDesc,
//                $witdhSrc,
//                $heightSrc
//            );
//            imagejpeg($newImg_desc, $path.$idUser.'.jpeg',100);
//        }
//
//
//        /////  FORMAT GIF
//
//        if (strstr($type, 'gif')){
//
//            $newImg      = imagecreatefromgif($tmp_name);
//            $newImg_desc = imagecreatetruecolor($witdhSDesc, $heightDesc);
//
//            imagecopyresized(
//                $newImg_desc,
//                $newImg,
//                0,
//                0,
//                0,
//                0,
//                $witdhSDesc,
//                $heightDesc,
//                $witdhSrc,
//                $heightSrc
//            );
//            imagegif($newImg_desc, $path.$idUser.'.gif');
//        }
//
//
//        /////  FORMAT PNG
//
//        if (strstr($type, 'png')){
//            $newImg      = imagecreatefrompng($tmp_name);
//            $newImg_desc = imagecreatetruecolor($witdhSDesc, $heightDesc);
//
//            imagecopyresized(
//                $newImg_desc,
//                $newImg,
//                0,
//                0,
//                0,
//                0,
//                $witdhSDesc,
//                $heightDesc,
//                $witdhSrc,
//                $heightSrc
//            );
//            imagepng($newImg_desc, $path.$idUser.'.png',0);
//        }
//    }
//    imageResize(150,$_FILES['img'], "upload/",1);

//    Image::open($_FILES['img']['tmp_name'])
//        ->cropResize(150, 150)
//        ->save('upload/' . $_FILES['img']['name'], 85);




}

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Image Resize</title>
</head>


<body>


<form action="index.php" method="post" enctype="multipart/form-data">
    <input type="file" name="img">
    <button>Envoyer</button>
</form>


</body>
</html>
