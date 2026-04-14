<?php 
include "db.php"; 
if (isset($_POST['submit'])) { 
 $name = trim($_POST['name']); 
 $email = trim($_POST['email']); 
 $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);  if (!empty($name) && !empty($email)) {
 $query = "INSERT INTO users(name,email,password) VALUES('$name','$email','$pass')";  mysqli_query($conn, $query); 
 header("Location: index.php"); 
 } 
} 
?> 
