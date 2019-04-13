<?php 
  
// Defining a multidimensional array 
$favorites = array( 
    array( 
        "name" => "Dave Punk", 
        "mob" => "5689741523", 
        "email" => "davepunk@gmail.com", 
    ),     
    array( 
        "name" => "Monty Smith", 
        "mob" => "2584369721", 
        "email" => "montysmith@gmail.com", 
    ), 
    array( 
        "name" => "John Flinch", 
        "mob" => "9875147536", 
        "email" => "johnflinch@gmail.com", 
        
    ) ,
    array (
        "name" => "Emilia Trojanowska",
        "mob" => "758236588",
        "email" => "et@gmail.com"
    )
); 
  
// Accessing elements 
echo "Dave Punk email-id is: " . $favorites[0]["email"], "<br>"; 
echo "John Flinch mobile number is: " . $favorites[1]["mob"], "<br>"; 
 
echo "Emilia Trojanowska email-id is: " . $favorites[3]["email"], "<br>"; 
echo "Emilia Trojanowska mobile number is: " . $favorites[3]["mob"]; 
  
?> 