<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>User Registration page</title>
<link href="style/style.css" rel="stylesheet" type="text/css">

</head>

<body>


<table bgcolor="#f2f2f2" style="padding:50px" align="center" width="550px">
<form action="" method="post">
<tr><td align="center" colspan="2"> <h1 style="color: purple">Sign Up</h1> </td></tr>
<tr>
<td> First Name : </td><td><input type="text" name="Fname"></td>
</tr>
<tr>
<td> Last Name : </td><td><input type="text" name="Lname"></td>
</tr>
<tr>
<td> Email : </td><td><input type="email" name="email"></td>
</tr>
<tr>
<td> Password : </td><td><input type="password" name="password"></td>
</tr>

<tr>
<td align="center" colspan="2"><input type="submit" name="submit"></td> </tr>
<td align="center" colspan="2"><a href="login.php"><button type="button">Click Here To Login</button></a></td> </tr>
    <td align="center" colspan="2"><a href="/ConfiguratorPC/index.html"><button type="button">Back</button></a></td> </tr>

</form>
</table>

<?php
if(isset($_POST["submit"]))
{
 
 //Including dbconfig file.
include 'dbconfig.php';
 
$fname = $_POST["Fname"];
$lname = $_POST["Lname"];
$email = $_POST["email"];
$password = $_POST["password"];

$EncryptPassword = md5($password);

mysql_query("INSERT INTO signup (f_name,l_name,email,password) VALUES ('$fname','$lname','$email','$EncryptPassword')"); 

echo '<center> Sign Up form successfully submitted. </center>';

}

 ?>

</body>
</html>