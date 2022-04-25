<form method="post"> 
roll no:<input type="text" name="rno"/><br><br> 
</from> 
<input type="submit" name="OK" /> <a href="pr_7-1_home_page.php">Home</a> 
<?php 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "student"; 
$conn = new mysqli($servername, $username, $password, $dbname); 
if ($conn->connect_error) { 
die("Connection failed: " . $conn->connect_error); 
} 
if(isset($_POST['OK']))
{ 
$rno =$_POST['rno']; 
$sql = "DELETE FROM std_table WHERE rno=$rno"; 
if ($conn->query($sql) === TRUE) 
{ 
echo "<br>Record deleted successfully"; 
} 
else 
{ 
echo "<br>Error deleting record: " . $conn->error; 
} 
} 
$conn->close(); 
?>
