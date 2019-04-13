<?php 
  
// One way to create an associative array 
$name_one = array("kuba"=>"Anna", "Anthony"=>"Any",  
                  "Ram"=>"Rani", "Salim"=>"Sara",  
                  "Raghav"=>"Ravina" ); 
  
// Second way to create an associative array 
$name_two["kuba"] = "Anna"; 
$name_two["anthony"] = "any"; 
$name_two["ram"] = "rani"; 
$name_two["salim"] = "sara"; 
$name_two["raghav"] = "ravina"; 
$name_two["Emilia"] = "Emit";
  
// Accessing the elements directly 
echo "Accessing the elements directly:\n"; 
echo $name_two["kuba"], "\n"; 
echo $name_two["salim"], "\n"; 
echo $name_two["anthony"], "\n"; 
echo $name_one["Ram"], "\n"; 
echo $name_one["Raghav"], "<br>"; 
$round = count ($name_two);
echo "<br> liczba elemenów w liście to $round <br> " ;
foreach ($name_one as $val => $val_value){ 
    echo "Husband is ".$val." and Wife is ".$val_value."<br>"; 
} 
  
?> 