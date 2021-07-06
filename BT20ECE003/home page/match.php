<?php
session_start();

$con=mysqli_connect('localhost','root','Ayush91257869');
mysqli_select_db($con,'userregistration');

$name=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];

$s=" select * from usertable where name= '$name' && password ='$password'";

$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
    $_SESSION['username']=$name;
   header('location:lab3t.php');
}
else{
    header('location:login.php');
}

// empty username
if (emptyempty ($_POST["username"])) {  
    $errMsg = "Error! You didn't enter the username.";  
             echo $errMsg;  
} 
?>