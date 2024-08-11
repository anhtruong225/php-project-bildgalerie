<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="./styles/simple.css">
    <title>PHP-Kurs</title>
    <style>
    .container {
        display: flex;
        flex-wrap: wrap;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        align-content: center;
        margin-top: 10%;

    }

    .bild_block {
        width: 300px;
        height: 300px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        border: 1px solid grey;
        border-radius: 15%;
        margin-bottom: 15%;
        margin-right: 30px;

    }

    .title {
        text-align: center;
        font-size: large;
        width: 250px;
        height: 20%;
    }

    .image {
        width: 250px;
        height: 70%;
    }
    </style>
</head>

<body>
    <main>
        <?php
            include 'inc/data.php';
            include 'inc/functions.php';
           
        ?>
        <div class="container">
            <?php foreach($imageTitles AS $imageSrc => $imageTitle):?>
            <a href="image.php?<?php echo http_build_query(['image'=> $imageSrc]); ?>">
                <div class="bild_block">
                    <div class="title"><?php echo e($imageTitle)?></div>
                    <img class="image" src="../01-aufgabe/images/<?php echo urldecode($imageSrc) ?>"
                        alt="<?php echo e($imageTitle) ?>">
                </div>
                <?php endforeach; ?>
        </div>

    </main>
</body>

</html>