<?php 
include "db.php"; 
$id = $_GET['id']; 
if (isset($_POST['update'])) { 
 $name = $_POST['name']; 
 $email = $_POST['email']; 
 mysqli_query($conn, "UPDATE users SET name='$name', email='$email' WHERE id=$id");  header("Location: index.php"); 
} 
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE id=$id"));
?> 
<form method="post"> 
<input type="text" name="name" value="<?= $data['name']; ?>"> <input type="email" name="email" value="<?= $data['email']; ?>"> <button name="update">Update</button> 
</form> 
