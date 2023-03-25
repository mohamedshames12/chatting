<?php
    include "../config/config.php";
session_start();
session_unset();
session_destroy();
if(isset($_SESSION['user_id'])){
    $status = "Offline now";
    $sql = $conn->prepare("UPDATE users SET status = '{$status}' WHERE unique_id = ?");
    $sql->execute([$status]);
}else{
   header('location:../index.php');
}

?>

