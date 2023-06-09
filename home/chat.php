<?php

    include "../config/config.php";
    session_start();
    $user_id = $_SESSION['user_id'];

    if(!isset($user_id)){
        header("Location:../index.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/button.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>chatting</title>
</head>
<body>
        <!-- header -->
        <?php include '../components/header.php';?>

        <div class="container-chat">
            <div class="box-users">
            <!-- users onlien -->
               <?php include "users.php"?>
            </div>
            <div class="box-mes">
          <!-- message -->
             <?php include "mes.php"?>
            </div>
        </div>
    
        <!-- sweetalert cdnjs link -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
        <!-- JS files -->
        <script src="../js/script.js"></script>
        <?php include "../php/alert.php"; ?>
</body>
</html>