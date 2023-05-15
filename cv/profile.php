<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header('Location: /');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Профиль</title>
</head>
<body>
    <h2><?= $_SESSION['user']['login'] ?></h2>
    <a href="inc/logout.php" class="logout">Log out</a>
</body>
</html>

<?php
// session_start();
// if(empty($_SESSION['user_id'])) {
//     header('Location: index.php'); // переход на страницу логина
//     exit;
// }
// здесь можно использовать переменную $_SESSION['user_id'] для отображения сообщений только этого пользователя
?>
<!-- <!DOCTYPE html>
<html>
<head>
    <title>Messages</title>
</head>
<body> -->
    <!-- <h1>Messages for user <?php echo $_SESSION['user_id']; ?></h1> -->
    <!-- <ul>
        <li>Message 1</li>
        <li>Message 2</li>
        <li>Message 3</li>
    </ul>
</body>
</html> -->