<?php include "db.php"; ?> 
<html> 
<body> 
<h2>User List</h2> 
<table border="1"> 
<tr> 
<th>ID</th><th>Name</th><th>Email</th><th>Action</th> 
</tr> 
<?php 
$result = mysqli_query($conn, "SELECT * FROM users"); 
while ($row = mysqli_fetch_assoc($result)) { 
?> 
<tr> 
<td><?= $row['id']; ?></td> 
<td><?= $row['name']; ?></td> 
<td><?= $row['email']; ?></td>
<td> 
<a href="edit.php?id=<?= $row['id']; ?>">Edit</a> | 
<a href="delete.php?id=<?= $row['id']; ?>">Delete</a> 
</td> 
</tr> 
<?php } ?> 
</table> 
</body> 
</html> 
