<?php 
$host_name="localhost";
$user_name="root";
$password="";
$db_name="core_crud_php";

$conn = mysqli_connect($host_name,$user_name,$password,$db_name);
if(!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}else{

}
?>