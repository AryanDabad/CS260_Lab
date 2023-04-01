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
if(isset($_POST["DELETE_ACCOUNT"])){
    echo '<script language="javascript">window.location = "http://localhost/aryan/delete.php";</script>';

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
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
    <center><p class = "heading">
    <h1> <?php echo "Hi ".$Fname.' ,How are you?'; ?> </h1></p>
<br/>

<p class = "top">
<a href="profile.php"> Profile Details </a><br />
<p class = "top">
<a href="update.php"> Update Profile </a><br />
<p class = "top">
<a href="logout.php"> Log out </a>
<p class = "top">
<form method="post">
        <input type="submit" name="DELETE_ACCOUNT" class="button" value="DELETE ACCOUNT" style="background-color:#FC7300;" />
    </form>
</p>
</center>
</body>
</html>