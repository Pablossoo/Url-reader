<?php

require_once '../vendor/autoload.php';


$fileReader = new \CSK\Recrutation\UrlFileReader(new \CSK\Recrutation\Factory\UrlCreator());
$collectionUrlObject = $fileReader->read();

print_r($collectionUrlObject);


//print_r($arr);

$filteredUniqueDomain = (new \CSK\Recrutation\HelperUrl\FilterUrl($collectionUrlObject))->uniqueCollectionDomain();
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<ul>
    <?php
    foreach ($filteredUniqueDomain as $item):?>
         <li><?= $item?></li>

    <?php endforeach;?>
    
</ul>
</body>
</html>