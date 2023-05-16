<?php
class CDCabinet extends Product{
        protected $capacity;
        protected $model;

        function setCapacity($capacity){
            $this->capacity = $capacity;
        }
        function getCapacity(){
            return $this->capacity;
        }
        function setModel($model){
            $this->model = $model;
        }
        function getModel(){
            return $this->model;
        }
        function setPrice($price){
            $this->price= $price;
        }
        function getPrice(){
            return ($this->price*0.15)+$this->price;
        }
        function setDiscount($discount){
            $this->discount= $discount;
        }
        function getDiscount(){
            echo "Discount : ".$this->discount."%"."<br />";
            $price2 = $this->price;
            $tax = 0.15*$this->price;
            $price3 = $price2+$tax;
            $discount2 = $this->discount;
            $discount3 = ($discount2/100)*$price3;
            $price4 = $price3-$discount3;
            return $price4;
        }
    }
?>
