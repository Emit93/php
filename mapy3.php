<?php 
// Defining a multidimensional array 
$favorites = array( 
    "Dave Punk" => array( 
        "mob" => "5689741523", 
        "email" => "davepunk@gmail.com", 
    ), 
    "Dave Punk" => array( 
        "mob" => "2584369721", 
        "email" => "montysmith@gmail.com", 
    ), 
    "John Flinch" => array( 
        "mob" => "9875147536", 
        "email" => "johnflinch@gmail.com", 
    ) 
); 
  
// Using for and foreach in nested form 
$keys = array_keys($favorites); 
for($i = 0; $i < count($favorites); $i++) { 
    echo $keys[$i] . "\n"; 
    foreach($favorites[$keys[$i]] as $key => $value) { 
        echo $key . " : " . $value . "\n"; 
    } 
    echo "\n"; 
} 
  
?> 