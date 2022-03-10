<?php
session_start();
include('includes/config.php');
if(isset($_POST['submit']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$query=INSERT INTO  'portal1'('username','password','gender','email','mobile') values(?,?,?,?,?);
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('ssssi',$username,$password,$gender,$email,
$mobile);
$stmt->execute();
echo"<script>alert('Succssfully register');</script>";
}
?>
