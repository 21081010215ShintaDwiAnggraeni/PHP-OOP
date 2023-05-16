<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>OOP PHP</title>
</head>
<body>
<?php
    require_once("Product.php");
    require_once("CDMusic.php");
    require_once("CDCabinet.php");

    echo "<b>Product :</b>"."<br />";
    $product1 = new Product();
    $product1->setName("Lomba Sihir Hindia");
    $product1->setPrice(500000);
    $product1->setDiscount(25);
    echo "Name : ".$product1->getName()."<br />";
    echo "Price : ".$product1->getPrice()."<br />";
    echo "Discount : ".$product1->getDiscount()."<br />";

    echo "<b>CD Music :</b>"."<br />";
    $CDMusic1 = new CDMusic();
    $CDMusic1->setArtist("Hindia");
    $CDMusic1->setGenre("Indie");
    $CDMusic1->setPrice(150000);
    $CDMusic1->setDiscount(25);
    echo "Artist : ".$CDMusic1->getArtist()."<br />";
    echo "Genre : ".$CDMusic1->getGenre()."<br />";
    echo "Price : ".$CDMusic1->getPrice()."<br />";
    echo "Price after discount : ".$CDMusic1->getDiscount()."<br />";

    echo "<b>CD Cabinet :</b>"."<br />";
    $CDCabinet1 = new CDCabinet();
    $CDCabinet1->setCapacity(15);
    $CDCabinet1->setModel("Classis Band");
    $CDCabinet1->setPrice(130000);
    $CDCabinet1->setDiscount(25);
    echo "Capacity : ".$CDCabinet1->getCapacity()."<br />";
    echo "Model : ".$CDCabinet1->getModel()."<br />";
    echo "Price : ".$CDCabinet1->getPrice()."<br />";
    echo "Price after discount : ".$CDCabinet1->getDiscount()."<br />";
?>
</body>
</html>