<?php
require 'config.php';
session_start();

if(!isset($_SESSION['sess_user'])){
    header('Location: index.php');
}

$email = $_SESSION['sess_user'];
$result = mysqli_query($conn, "select * from users where email = '$email'");
$row = mysqli_fetch_array($result);

$Fname = $row["first_name"];
$Lname = $row["last_name"];
$email = $row["email"];
?>


<!DOCTYPE html>
<html>
<head>
	<title>Profile Details</title>
</head>

<style>
p.heading {
  margin-top: 200px;
  color:#BFDB38;
  font-family: Rockwell;
}
p.top {
  margin-top: 20px;
  margin-bottom: 20px;
  font-size: 20px;
  color:#BFDB38
  font-family: Rockwell;
}
h1{
    font-size: 40px;
    color:  #BFDB38;
    font-family: Rockwell;
}
label{
    font-size: 20px;
  color:#BFDB38 ;
  font-family: Rockwell;
}
input{
    font-size: 15px;
    color:  #BFDB38;
    font-family: Rockwell;
}
a{
    font-size: 20px;
    color:#BFDB38
    font-family: Rockwell;
}
body{
  margin:0;
  padding:0;
  background:#1F8A70;
  font-family: Rockwell;
}
</style>


<body>
    <p class = "heading">
    <center><h1>Profile Details</h1>
</p>


<table>
    <tr>
        <td><b>First Name: </td>
        <td><b><?php echo $Fname; ?></td>
</tr>
    <tr>
        <td><b>Last Name: </td>
        <td><b><?php echo $Lname; ?></td>
</tr>
    <tr>
        <td><b>Email: </td>
        <td><b><?php echo $email; ?></td>
</tr>
</table>
<p class = "top">
    <a href="welcome.php"> Back to Main Menu </a><br />

</body>
</html>