<?php
$connect = mysqli_connect("localhost","root","","e Voting System") or die("connection failed!"); 
if($connect){
    echo"Connected!";
}
else{
    echo"Not Connected!";
}

?>