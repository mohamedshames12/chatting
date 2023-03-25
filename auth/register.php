

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
    

    <div class="wrapper">
        <div class="container">
            <div class="box">
                <div class="image">
                    <img src="../icons/chat.png" alt="">
                    <span>chatting with anyone.</span>
                </div>
                <h2 class="explore" data-text="Explore the ideas throughout the world....">Explore the ideas throughout the world....</h2>
            </div>
            <form action="#" method="post" enctype="multipart/form-data">
                <h1>register Now</h1>
                <p>Your Name<span class="star">*</span></p>
                <input type="text" name="name" placeholder="enter your name" required>
                <p>Your Email<span class="star">*</span></p>
                <input type="email" name="email" placeholder="enter your email" required>
                <p>Your Password<span class="star">*</span></p>
                <input type="password" name="password" placeholder="enter your password" required>
                <p>Your Confirm Password<span class="star">*</span></p>
                <input type="password" name="confirm_pass" placeholder="enter your confirm password" required>
                <p>Your image<span class="star">*</span></p>
                <input type="file" name="image" class="box box-file" required accept="image/*">
                <button class="custom-btn btn-3" name="register"><span>Register</span></button>
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