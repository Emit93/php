<?php 
    class Books {
        var $title;
        var $price;
        var $author;

        function setPrice($par){ 
            $this->price = $par; 
        } 

        function getPrice(){ 
            return $this->price; 
        } 

        function __construct($_title, $_author){
            $this->title= $_title;
            $this->author= $_author;
        }
    }

    $physics = new Books("Grawitacja","Kowalski");
    echo $physics->title. "<br>" ; 
    echo $physics->author. "<br>";
    // $maths = new Books;
    // $chemistry = new Books;  
    
?>