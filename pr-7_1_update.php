<form method="post"> 
<h1>Enter the values to update:</h1>
Name:<input type="text" name="name"/><br><br> 
Roll no:<input type="text" name="rno"/><br><br> 
</from> 
<input type="submit" name="OK" /> <a href="pr_7-1_home_page.php">Home</a> 
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
if(isset($_POST['OK']))
{ 
$name =$_POST['name']; 
$rno =$_POST['rno']; 
$sql = "UPDATE std_table SET name='$name' WHERE rno=$rno"; 
if ($conn->query($sql) === TRUE) 
{ 
echo "Record updated successfully"; 
} 
else 
{ 
echo "<br>Error update record: " . $conn->error; 
} 
} 
$conn->close(); 
?>
