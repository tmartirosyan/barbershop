<?php include "tplAdmin/functions.php"; ?>
<?php require "class/MysqlDB.php";?>
<?php
$db = new MysqlDB();
$db = $db->dbConnect();
session_name('LoginForm');
@session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/script.js"></script>
    
</style>
</head>

<body>
    
    <div class="wrapper">
        <div class="container-fluid">