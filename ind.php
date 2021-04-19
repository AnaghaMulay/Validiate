<?php


   








$user = 'root';
$pass = 'Anagha@96';
$db = 'validiate';

$db = new mysqli('localhost',$user, $pass, $db) or die("Unable to Connect");


$username = $_POST['email'];  
$password = $_POST['pass'];  
      
//to prevent from mysqli injection  
$username = stripcslashes($username);  
$password = stripcslashes($password);  
 





$sql = "select *from users where Email_Id = '$username' and Password = '$password'";  
$result = mysqli_query($db, $sql);  

$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);  
  
if($count == 1){  
    header("Location: http://localhost:8080/validiate/LoggedIn.html"); 
}  
else{  
    echo "<h1> Login failed. Invalid username or password.</h1>";  
}



?>








