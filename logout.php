<?php
require 'config.php';
session_start();

session_destroy();
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
    <center><p class = "top"> You have been logged out</p>
    <a href="index.php"><p>Login again</a>
</center>
</body>
</html>