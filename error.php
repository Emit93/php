<?php 
  
// Php code showing default error handling 
if (!file_exists("geeks.txt")){
    die("File is not present");
}  
else{
    $file = fopen("geeks.txt","r");
}


$file = fopen("geeks.txt", "r"); 

?> 
