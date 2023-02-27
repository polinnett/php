<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php $str = 'My first page'?>
<body>
    <header>
        <h2><?=$str?></h2>
    </header>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
            <?php
              for ($i=0; $i<5; $i++) {
                echo "<tr>
                  <td>.$i.</td>
              }
          // <tr>
          //   <th scope="row">1</th>
          //   <td>Mark</td>
          //   <td>Otto</td>
          //   <td>@mdo</td>
          // </tr>

          ?>
        </tbody>
      </table>
</body>
</html>