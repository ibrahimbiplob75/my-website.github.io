<?php

$con=mysqli_connect('localhost','root');

if($con){
      echo"connection successfull";

}
else{
      echo"connection lost";
}

mysqli_select_db($con,'my website');
$user=$_POST['user'];
$email=$_POST['E-mail'];
$mobile=$_POST['mobile'];
$comment=$_POST['comment'];

$query=" insert into userinfodata (user,email,mobile,comment)
values('$user','$email','$mobile','$comment' )";

mysqli_query($con,$query);


?>