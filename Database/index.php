<?php
include 'header.php';
$db_server="localhost";
$db_uname="root";
$db_pass="";
$db_name="product";

$conn = mysqli_connect($db_server,$db_uname,$db_pass,$db_name);
if($conn){
    echo"Connected";
    $query="insert into users values(NULL,'Tuhin','tuhin123','asda')";
   if(!mysqli_query($conn,$query)){
    echo mysqli_error($conn);
   }

   include 'footer.php';
   
}
?>