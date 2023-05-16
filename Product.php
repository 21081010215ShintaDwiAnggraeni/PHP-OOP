<?php
    class Product{
        protected $name;
        protected $price;
        protected $discount;

        function setName($name){
            $this->name = $name;
        }
        function getName(){
            return $this->name;
        }
        function setPrice($price){
            $this->price= $price;
        }
        function getPrice(){
            return $this->price;
        }
        function setDiscount($discount){
            $this->discount= $discount;
        }
        function getDiscount(){
            return $this->discount."%";
        }
    }