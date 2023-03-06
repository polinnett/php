<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solve the equation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<style>
    .feedback__title {
        display: flex;
    }

    h1 {
        margin-top: 60px;
        margin-left: 200px;
    }

    button {
        margin-top: 30px;
    }

    .feedback__link {
        margin-top: 20px;
        margin-left: 720px;
        font-size: 20px;
    }
</style>
<body>
    <header>
        <?php
            echo '<div class="container">
                <div class="feedback__title">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQH4dFw4F4aMmaVLQ44M4_ZejJLInIC_OVC8-S4lqPhKqccihVG0JB8sS4ymtSxrvTPriA&usqp=CAU" alt="">
                    <h1>Solve the equation</h1>
                </div>
            </div>';
        ?>
    </header>
    <main>
        <div class="container">
            <form method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Введите ваше уравнение формата: x + 67 = 129 (Внимание! Неизвестная переменная х пишется на английском языке! Порядок переменной менять нельзя!)</label>
                    <input type="text" name="text" class="form-control" placeholder="x + 67 = 129">
                    <button type="submit" class="btn btn-primary btn-lg">Готово</button>
                </div>
            </form>        
            <?php
                $equation = $_POST['text'];
                $a = 0;
                $b = 0;
                $c = 0;
                list($a, $operator, $b, $equal, $c) = explode(" ", $equation);
                $x = "";
                if ($b == 'x') {
                    echo "Введите x первым, пожалуйста";
                } else {
                    if ($operator == '+') {
                    $a = $c - $b;
                    } elseif ($operator == '-') {
                    $a = $c + $b;
                    } elseif ($operator == '*') {
                    $a = $c / $b;
                    } else {
                    $a = $c * $b;
                    }
                    if ($a != ''){
                        echo "<h3>Значение переменной x = $a</h3>";}
                }
            ?>
        </div>
        <a href="block diagram.svg" class="feedback__link">Блок-схема</a>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>