<?php
    session_start();
    // if (isset($_SESSION['user'])) {
    //     header('Location: profile.php');
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Аутентификация</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="container">
        <h1>Курсова работа</h1>
        <h2>Выполнила: Хафизова Полина, группа 221-323</h2>
        <form action="inc/signin.php" method="post">
            <label>Login</label>
            <input type="text" name="login" placeholder="Enter login">
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter password">
            <button type="submit">Sign in</button>
            <?php
                if(isset($_SESSION['message'])) {
                    echo '<p class="msg"> ' . $_SESSION['message'] . ' </p> ';
                }
                unset($_SESSION['message']);
            ?>
        </form>
    </div>
</body>
</html>

<?php
// session_start();
// if($_SERVER['REQUEST_METHOD'] == 'POST') {
//     // здесь могут быть дополнительные проверки, например проверка логина и пароля в базе данных
//     $_SESSION['user_id'] = 1; // id пользователя, которого мы аутентифицировали
//     header('Location: profile.php'); // переход на страницу с сообщениями
//     exit;
// }
?>
<!-- <!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form method="post">
        <label for="username">Username:</label>
        <input type="text" name="login" id="login">
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" value="Login">
    </form>
</body>
</html> -->