<?php 
include('dbcon.php');
if (isset($_POST['submit'])){	
$student_id=$_POST['student_id'];	
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$type=$_POST['type'];
$year_level=$_POST['year_level'];



								
mysql_query("insert into member(student_id,firstname,lastname,gender,address,contact,type,year_level) values('$student_id','$firstname','$lastname','$gender','$address','$contact','$type','$year_level')")or die(mysql_error());
 
 
header('location:member.php');
}
?>	