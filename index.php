

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <title>chatting</title>
</head>
<body>
    

    <div class="wrapper">
        <div class="container">
            <div class="box">
                <div class="image">
                    <img src="icons/chat.png" alt="">
                    <span>chatting with anyone.</span>
                </div>
                <h2 class="explore" data-text="Explore the ideas throughout the world....">Explore the ideas throughout the world....</h2>
            </div>
            <form action="#" method="post" enctype="multipart/form-data">
                <h1>Login Now</h1>
                <p>Your Email<span class="star">*</span></p>
                <input type="text" name="email" placeholder="enter your email">
                <p>Your Password<span class="star">*</span></p>
                <input type="password" name="password" placeholder="enter your password">
                <button class="custom-btn btn-3" name="login"><span>Login</span></button>
                <p class="link">Don't hava an acount? <a href="auth/register.php">Register Now</a></p>
            </form>
        </div>
    </div>

        <!-- sweetalert cdnjs link -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
        <!-- JS files -->
        <script src="js/script.js"></script>
        <?php include "php/alert.php"; ?>
</body>
</html>