<?php
session_start();
if (!$_SESSION['user'] && !isset($_SESSION['sms']['id_users'])) {
    header('Location: /');
}

$id_user = $_SESSION['sms']['id_users'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Профиль</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

    <div class="profile__wrapper">
        <div class="profile__info">
            <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="Picture">
            <h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?></h2>
            <a href="#"><?= $_SESSION['user']['email'] ?></a>
            <a href="vendor/logout.php" class="logout">Выход</a>
        </div>
        <div class="profile__msg">
            <h2>Messages</h2>
            <?php
                $con = mysqli_connect('localhost', 'root', '', 'test');
                // $sql = "SELECT text FROM 'sms' WHERE id_users == '2'";
                $res = mysqli_query($con, "SELECT text FROM `sms` WHERE id_users = 2");
                while ($row = mysqli_fetch_assoc($res)) {
                    echo $row['text']. "<br />";
                }
            ?>
        </div>
    </div>

</body>
</html>