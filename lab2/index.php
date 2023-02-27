<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback form</title>
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
        margin-bottom: 30px;
    }

    .feedback__link {
        margin-left: 470px;
        font-size: 30px;
    }
</style>
<body>
    <header>
        <?php
            echo '<div class="container">
                <div class="feedback__title">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQH4dFw4F4aMmaVLQ44M4_ZejJLInIC_OVC8-S4lqPhKqccihVG0JB8sS4ymtSxrvTPriA&usqp=CAU" alt="">
                    <h1>Feedback form</h1>
                </div>
            </div>';
        ?>
    </header>
    <?php
        echo 
        '<div class="container">
            <form method="POST" action="https://httpbin.org/post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter your name">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email address" class="form-control" placeholder="Enter your email address">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Appeal type</label>
                    <select name="appeal type" class="form-select form-select-sm">
                        <option name="complaint">Complaint</option>
                        <option name="suggestion">Suggestion</option>
                        <option name="gratitude">Gratitude</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Comments</label>
                    <div class="form-floating">
                        <textarea class="form-control" name="comments" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Comments</label>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="sms">
                        <label class="form-check-label" for="flexCheckDefault">
                        Sms
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="email">
                        <label class="form-check-label" for="flexCheckDefault">
                        Email
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
            </form>
            <a href="back.php" class="feedback__link">Ссылка на второй сайт</a>
        </div>';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <footer>
        <?php
            echo '<div class="container">
                <div class="d-flex align-items-center">
                    <strong>Это подвал сайта</strong>
                    <div class="spinner-border ms-auto" role="status" aria-hidden="true"></div>
                </div>
            </div>';
        ?>
    </footer>
</body>
</html>