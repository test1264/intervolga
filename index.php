<?php
    require_once('2.php');
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>2 - upload csv</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
    <div class="main py-5">
        <div class="container d-flex justify-content-center">
            <form action="2.php" method="POST" enctype="multipart/form-data">
                <input type="file" name="csv" class="form-control">
                <div class="d-flex justify-content-center py-2">
                    <button type="submit" name="action" class="btn btn-outline-primary">Добавить csv-файл</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>