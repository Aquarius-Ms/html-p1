<?php 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "student"; 
$conn = new mysqli($servername, $username, $password, $dbname); 
if ($conn->connect_error) 
{ 
die("Connection failed: " . $conn->connect_error); 
} 
$result = mysqli_query($conn,"SELECT * FROM std_table"); 
?> 
<html> 
<head> 
<title>Retrive data</title> 
</head> 
<body> 
<?php 
if (mysqli_num_rows($result) > 0) { 
?> 
<table> 
<tr> 
<td>Name</td> 
<td>Roll number</td> 
<td>Gender</td> 
<td>Branch</td> 
<td>Semester</td> 
<td>Contact Number</td> 
</tr> 
<?php 
$i=0; 
while($row = mysqli_fetch_array($result)) { 
?> 
<tr> 
<td><?php echo $row["name"]; ?></td> 
<td><?php echo $row["rno"]; ?></td> 
<td><?php echo $row["gender"]; ?></td>
<td><?php echo $row["branch"]; ?></td> 
<td><?php echo $row["sem"]; ?></td> 
<td><?php echo $row["cno"]; ?></td> 
</tr> 
<?php 
$i++; 
} 
?> 
</table> 
<?php 
} 
Else
{ 
echo "No result found"; 
} 
?> 
<a href="pr_7-1_home_page.php">Home</a> 
</body> 
</html>
