<?php
require 'config.php';
session_start();

if(!isset($_SESSION['sess_user'])){
    header('Location: index.php');
}

$email = $_SESSION['sess_user'];

if(isset($_POST["Yes"])){

$query = "delete from users where email = '$email'";
$result = mysqli_query($conn, $query);

if($result){
    echo '<script type="text/javascript">alert("Account Deleted Succesfully!")</script>';
    echo '<script language="javascript">window.location = "http://localhost/aryan/index.php";</script>';
}
else{
    echo '<script type="text/javascript">alert("Error!")</script>';
}
}


if(isset($_POST["No"])){
    echo '<script language="javascript">window.location = "http://localhost/aryan/welcome.php";</script>';

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Logout</title>
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
    color:  #000000;
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
    <center><p class = "top"> Are you sure you want to delete your account?</p>

    <form method="post">
        <input type="submit" name="Yes" class="button" value="Yes, Delete My Account!" />
        <input type="submit" name="No" class="button" value="No, I retract" />

    </form>
</center>
</body>
</html>