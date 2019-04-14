<!DOCTYPE html> 
<html> 
<body> 

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> 
<label for="name">Please enter your name: </label> 
<input name="name" type="text"><br> 
<label for="email">Please enter your email: </label> 
<input name="email" type="text"><br> 
<label for="mobile">Please enter your mobile: </label> 
<input name="mobile" type="text"><br> 
<input type="submit" value="Submit" name="SubmitForm"> 
</form> 


<?php 
require ("db.php");

if(isset($_POST['SubmitForm'])){
    $nm=$_POST['name']; 
    $email=$_POST['email']; 
    $mobile=$_POST['mobile'];
        
   
    $dbh = connectDatabase(); 
        
    if (!$dbh) {
        die("Unable to connect to MySQL: " . mysqli_error()); 
    }


    if (!mysqli_select_db($dbh,'phonebook')) { 
        mysqli_close($dbh);  
        die("Unable to select database: " . mysql_error());   
    }

    $sql_stmt = "INSERT INTO  `phonebook`( `name`, `email`,`mobile`)"; 
    $sql_stmt .= " VALUES('$nm',' $email ','$mobile')"; 

    $result = mysqli_query($dbh, $sql_stmt); 

    if (!$result)  {
        mysqli_close($dbh);  
        die ("Adding record failed: " . mysqli_error()); 
    }
        
    mysqli_close($dbh);
}
 
$dbh=connectDatabase();
if(!$dbh){
    mysqli_close($dbh);
    die("No conection" .mysqli_error());
}
if(!mysqli_select_db($dbh,"phonebook")){
    mysqli_close($dbh);
    die("conect select" .mysqli_error());
}
$sql_stmt = "SELECT * FROM phonebook";
$result = mysqli_query($dbh,$sql_stmt);
if(!$result){
    mysqli_close($dbh);
    die("unable to execute query");
}
$rows = mysqli_num_rows ($result);
if($rows){
    while ($row = mysqli_fetch_array ($result)){
        echo 'ID: ' . $row['id'] . '<br>';
        echo 'name: ' .$row['name'] . '<br>';
    }
}
mysqli_close($dbh);
?>
</body> 
</html
