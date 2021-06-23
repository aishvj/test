<?php
session_start();

if(isset($_POST['login'])){

include('../partials/connect.php');



$email=$_POST['email'];
$password=$_POST['password'];
$password=md5($password);
$sql="SELECT * from customers Where username='$email' AND password='$password'";
$results=$connect->query($sql);
$final=$results->fetch_assoc();


if(mysqli_num_rows($results) > 0)  
{  
     //$_SESSION['email'] = $email;  
     $_SESSION['email']=$final['username'];
$_SESSION['password']=$final['password'];

$_SESSION['customerid']=$final['id'];
     header('location: ../index.php');
    
}  
else{
  echo "<script> alert('Credentials are wrong');
  window.location.href='../customerforms.php';
        </script>";
       // echo $password;
      //  echo $email;
    

}
/*
$_SESSION['email']=$final['username'];
$_SESSION['password']=$final['password'];

$_SESSION['customerid']=$final['id'];



if( $password=$final['password']){
  header('location: ../index.php');
}else{
  echo "<script> alert('Credentials are wrong');
  
        </script>";
       // echo $password;
      //  echo $email;
     echo  $final;

}*/






}



?>