<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <div class="main">
        <div class="images">
            <?php
            $images = scandir('img');
            for($i = 3; $i < count($images); $i++){ ?>
                    <a href="full_image.php?file=<?= $images[$i] ?>"><img src="img/<?= $images[$i] ?>" width="200px"></a>
            <?php
            } ?>
        </div>
    </div>
</body>

</html>