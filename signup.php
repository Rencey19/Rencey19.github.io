<?php
/*Create a login proram that will let theuser to iput
username = admin
password = 1234
if the username and password is not match print
log in failed 
otherwise 
print log in success 
*/
$un= ($_POST['username']);
$pw= ($_POST['password']);
if($un=='admin' && $pw=='1234'){
    echo "<h1>Log in Success<h1>";
}
else {
    echo "<h1>Log in Failed<h1>";
}

?>
<html>
    <head>
        <title>Userlogin</title>
</head>
<body style="color:maroon;">
<h1>User login</h1>
<form action="index.html" method="post">
<hr>
<form method='post'>
    Username : <input type='text' name='username'><br>
    Password : <input type='password' name='password'><br>
    <input type ='submit' value ='Login'>
    <input type ='reset' value ='clear'>
</form>
</body>


