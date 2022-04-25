<html> 
<head>
<title>Insert</title>
</head> 
<body>
<div> 
<h1>Enter Student data</h1> 
<form method="post">
Name:<input type="text" name="name"/><br><br>
Roll number:<input type="text" name="rno"/><br><br> 
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
</select><br><br> 
Semester:<input type="number" name="sem"/><br><br> 
Contact number:<input type="number" name="cno"/><br><br> 
File Upload:<input type="hidden" name="MAX_FILE_SIZE" value="4194304" /> 
<input type="file" /><br><br> 
<input type="submit" name="OK" /> <a href="home_page.php">Home</a> 
</form> 
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
$sql=mysqli_query($con,"INSERT INTO student (name,rno,gender,branch,sem,cno) VALUES ('$name','$rno','$gender','$branch','$sem','$cno')"); 
} 
?> 
</div> 
</body> 
</html>
