<?php
class CDMusic extends Product{
        protected $artist;
        protected $genre;

        function setArtist($artist){
            $this->artist = $artist;
        }
        function getArtist(){
            return $this->artist;
        }
        function setGenre($genre){
            $this->genre = $genre;
        }
        function getGenre(){
            return $this->genre;
        }
        function setPrice($price){
            $this->price= $price;
        }
        function getPrice(){
            return ($this->price*0.10)+$this->price;
        }
        function setDiscount($discount){
            $this->discount= $discount;
        }
        function getDiscount(){
            echo "Discount : ".$this->discount."%"." + "."5%"."<br />";
            $price2 = $this->price;
            $tax = 0.10*$this->price;
            $price3 = $price2 + $tax;
            $discount2 = $this->discount;
            $discount3 = ($discount2/100)*$price3;
            $price4 = $price3-$discount3;
            $discount4 = (5/100)*$price4;
            $price5 = $price4-$discount4;
            return $price5;
        }
    }
?>
