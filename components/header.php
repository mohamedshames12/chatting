<header class="header">
    <a href="chat.php" class="logo">chatting with anyone</a>
        <div class="container">
            <div class="menu" id="menu">
                <div>
                    <span class="line-1"></span>
                    <span class="line-2"></span>
                    <span class="line-3"></span>
                </div>
            </div>
            <?php
                    $select = $conn->prepare("SELECT * FROM `users`");
                    $select->execute();
                    $fetch = $select->fetch(PDO::FETCH_ASSOC)
                ?>
            <nav class="navber">
                <p class="name"><?= $fetch['fname']?> <?= $fetch['lname']?></p>

                <a href="#">your info</a>
                <a href="../auth/logout.php"><i class="fas fa-light fa-right-from-bracket"></i></a>
            </nav>
        </div>
</header>

