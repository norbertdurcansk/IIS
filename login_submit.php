<?php

/*** begin our session ***/
session_start();
$message='';

if(!isset( $_POST['username'], $_POST['password']))
{
    $message = 'Please enter a valid username and password';
}
elseif (strlen( $_POST['username']) > 20 || strlen($_POST['username']) < 5)
{
    $message = 'Incorrect Length for Username';
}
elseif (strlen( $_POST['password']) > 20 || strlen($_POST['password']) < 5)
{
    $message = 'Incorrect Length for Password';
}
elseif (ctype_alnum($_POST['username']) != true)
{
    $message = "Username must be alpha numeric";
}
elseif (ctype_alnum($_POST['password']) != true)
{
        $message = "Password must be alpha numeric";
}
else
{
    $phpro_username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $phpro_password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

   
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'xdurca01');


@ $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

$connection_error = $dbc->connect_error;
if ($connection_error != null) {
  echo "<p>Error connectiong to database: $connection_error</p>";
  exit();
}

$phpro_password=sha1($phpro_password);
       
       
$sql = "SELECT heslo FROM ADMIN WHERE login='$phpro_username' and '$phpro_password'=heslo";
$result = $dbc->query($sql);
   


 if ($result->num_rows > 0) {
$_SESSION['user_id']=$phpro_password;

header('location:home.php'.'?pass='.$phpro_password);     
    
    
} else {
    header('location:login.php?message=wrongpassword');
}
}
if ($message!='')
{
header('location:login.php?message=wrongpassword');
}


?>