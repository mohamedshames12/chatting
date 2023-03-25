<?php
    include "../config/config.php";
    
    if(isset($_POST['register'])){

        $fname = $_POST['fname'];
        $fname = filter_var($fname, FILTER_SANITIZE_STRING);

        $lname = $_POST['lname'];
        $lname = filter_var($lname, FILTER_SANITIZE_STRING);

        $email = $_POST['email'];
        $email = filter_var($email, FILTER_SANITIZE_STRING);

        $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
        $pass = filter_var($pass, FILTER_SANITIZE_STRING);

        $c_pass = password_verify($_POST['c_pass'], $pass);
        $c_pass = filter_var($c_pass, FILTER_SANITIZE_STRING);

        $image = $_FILES['image']['name'];
        $image = filter_var($image, FILTER_SANITIZE_STRING);
        $ext = pathinfo($image, PATHINFO_EXTENSION);
        $rename = create_unique_id().'.'.$ext;
        $image_size = $_FILES['image']['size'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_folder = '../images/'.$rename;

        if(!empty($image)){
            if($image_size > 2000000){
                $warning_msg[] = "image size is too large!";
            }else{
                move_uploaded_file($image_tmp_name, $image_folder);
            }
        }else{
            $rename = '';
        }
    
        $verify_email = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
        $verify_email->execute([$email]);
    
        if($verify_email->rowCount() > 0){
            $warning_msg[] =  'Email already exists!';
        }else{
            if($c_pass == 1){
                $status = "Active now";
                $user_id = "user";
                $random_id = rand(time(), 10000000);
                $insert_user = $conn->prepare("INSERT INTO `users` (unique_id, fname, lname , email , pass, img, status,user_type) VALUES(?,?,?,?,?,?,?,?)");
                $insert_user->execute([$random_id, $fname,$lname, $email, $pass, $rename, $status, $user_id]);
                $success_msg[] = 'registered successfully!';
                header("location: ../index.php");
            }else{
                $warning_msg[] = 'Confirm password not matched!';
            }
        }

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
<div class="error-txt"></div>

    <div class="wrapper">
        <div class="container">
            <div class="box">
                <div class="image">
                    <img src="../icons/chat.png" alt="">
                    <span>chatting with anyone.</span>
                </div>
                <h2 class="explore" data-text="Explore the ideas throughout the world....">Explore the ideas throughout the world....</h2>
            </div>
            <form action="#" enctype="multipart/form-data" method="post">
                <h1>register Now</h1>
                <p>Your Frist Name<span class="star">*</span></p>
                <input type="text" name="fname" placeholder="enter your frist name" required>
                <p>Your Last Name<span class="star">*</span></p>
                <input type="text" name="lname" placeholder="enter your last name" required>
                <p>Your Email<span class="star">*</span></p>
                <input type="email" name="email" placeholder="enter your email" required>
                <p>Your Password<span class="star">*</span></p>
                <input type="password" name="pass" placeholder="enter your password" required>
                <p>Your Confirm Password<span class="star">*</span></p>
                <input type="password" name="c_pass" placeholder="enter your confirm password" required>
                <p>Your image<span class="star">*</span></p>
                <input type="file" name="image" class="box box-file" required accept="image/*" required>
                <button class="custom-btn btn-3" name="register" class="register"><span>Register</span></button>
                <p class="link">hava an acount? <a href="../index.php">Login Now</a></p>
            </form>
        </div>
    </div>

        <!-- sweetalert cdnjs link -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
        <!-- JS files -->
        <script src="../js/script.js"></script>
        <?php include "../php/alert.php"; ?>
</body>
</html>