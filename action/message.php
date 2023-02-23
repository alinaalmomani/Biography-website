<?php
include 'config.php';

$name = $_POST['name'];
$id = $_POST['id'];
$message = $_POST['Message'];
$query = mysqli_query($con, "INSERT INTO messages (full_name,company_id,message	 ) VALUES ( '$name', '$id','$message')");
header('Location: ' . $_SERVER['HTTP_REFERER']);