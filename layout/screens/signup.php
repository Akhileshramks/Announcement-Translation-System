<?php
$con=mysqli_connect("localhost","root","","announcements");
if(!$con)
{
die('could not connect:'.mysqli_connect_error());
}
$sql="insert into login (userid,password,email,usertype) values('$_POST[username]', '$_POST[password]', '$_POST[email]', '$_POST[logintype]')";
if(!mysqli_query($con,$sql))
{
die('Error:'.mysqli_error());
}

header("Location: login.html");
mysqli_close($con)

?>
