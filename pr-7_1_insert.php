<html> 
<head> 
</head> 
<body> 
<div>
<center> 
<h1>Enter data for Student</h1> 
<form method="post"> 
Name:<input type="text" name="name"/><br><br> 
Pen No:<input type="text" name="rno"/><br><br> 
Gender: 
<input type="radio" name="gender" value="MALE"/>Male 
<input type="radio" name="gender" value="FEMALE"/>Female 
<br><br> 
Branch: 
<select name="branch"> 
<option value="Computer">Computer</option> 
<option value="Civil">Civil</option> 
<option value="Electrical">Electrical</option> 
<option value="Mechanical">Mechanical</option> 
<option value="Mechanical">Chemical</option> 
</select>
<br><br> 
Semester:<input type="number" name="sem"/><br><br> 
Contact number:<input type="number" name="cno"/><br><br> 
<input type="submit" name="OK" /> <a href="pr_7-1_home_page.php">Home</a> 
</form> 
</center>
<?php 
$con=mysqli_connect("localhost","root","","student"); 
if(isset($_POST['OK']))
{ 
$name =$_POST['name']; 
$rno =$_POST['rno']; 
$gender=$_POST['gender']; 
$branch=$_POST['branch']; 
$sem=$_POST['sem']; 
$cno=$_POST['cno']; 
$sql="INSERT INTO std_table (name,rno,gender,branch,sem,cno) VALUES 
('$name','$rno','$gender','$branch','$sem','$cno')"; 
if ($con->query($sql) === TRUE)
{ 
echo "<br>New record created successfully"; 
} 
else 
{ 
echo "Error: " . $sql . "<br>" . $con->error; 
} 
} 
?> 
</div>
</body> 
</html>
