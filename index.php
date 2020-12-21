<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            width: 100vw;
            height: 100vh;
            background: black;
            color: white;
            text-align: center;
            overflow: hidden;
        }
    </style>
</head>
<body>
        <h1>
            <?php
              $str = "adesso andiamo al parco una volta";
              echo "$str <br>";
              $badword = $_GET ['badword'];
            ?>
        </h1>
        <h1>
            <?php
              $newStr = str_replace ($badword, '***', $str);
              echo $newStr;
              echo strlen ($newStr);
            ?>
        </h1>

  </div>

</body>
</html>
