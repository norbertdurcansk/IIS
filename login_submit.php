<?php
// page1.php

session_start();


$_SESSION['user_id'] = 'green';
header('location:home.php');
?>



