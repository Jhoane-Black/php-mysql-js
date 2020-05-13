<?php
include 'C:\xampp\htdocs\bookstore\controller\connection.php';
$id=$_GET['id'];
$sql="delete from book where book_id='".$id."'";
mysqli_query($con,$sql);
header('location:../index.php');
?>
