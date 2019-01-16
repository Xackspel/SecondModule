<?php
    session_start();

    $pdo = new PDO("mysql:host=learnphp;dbname=testing","root","");
    $statement = $pdo -> query("SELECT * FROM posts");
    $posts = $statement -> fetchall(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning PHP. Second module.</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="bg-dark p-4">
            <div class=row>
                <div class="col-sm">
                    <img src="http://marlindev.ru/img/new/logo.svg" alt="Marlin dev school" title="Marlin dev school">
                </div>
                <div class="col-sm">
                    <font color="white"><h2 class="text-right" color="white">Aleksey Zhuk [ 1 ]</h2></font>
                    <font color="white"><h6 class="text-right">Second module started 3rd Jan 2018</h6></font>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        
    </div>
    <br>
    <div class="container">
        <div class="row">
            <form method="get" action="create.php">
                <input type="number" name="InputNumber"><br>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>