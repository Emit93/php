<?php
require ("db.php");

$dbh = connectDatabase(); 
if(!$dbh){
    die("no conection" . mysqli_error());
}
if(! mysqli_select_db ($dbh, "phonebook")) {
die("cannot select" .mysqli_error);
}

?>