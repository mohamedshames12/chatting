<div class="container-user">
    <?php
        $select = $conn->prepare("SELECT * FROM `users`");
        $select->execute();
        if($select->rowCount() > 0){
            while($row = $select->fetch(PDO::FETCH_ASSOC)){
                ?>  

                <a href="#">
                    <div class="box-user">
                        <div class="image">
                            <img src="../images/<?= $row["img"]?>" alt="img">
                            <p class="name"><?= $row['fname']?> <?= $row['lname']?></p>
                        </div>
                        <div class="stauts">
                            <p><?= $row['status']?> <span></span></p>
                        </div>
                </div>
               
                </a>

        <?php
                }
            }else{
                echo "<p class='empty'>no users creared yet</p>";
            }
        ?>
</div>
