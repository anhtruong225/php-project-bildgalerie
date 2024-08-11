<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="./styles/simple.css">
    <title>PHP-Kurs</title>
    <style>
    .page {
        margin-top: 10%;
        text-align: center;
    }

    h1,
    p,
    img {
        margin-bottom: 10%;
    }
    </style>
</head>

<body>
    <main>
        <?php
            include 'inc/data.php';
            include 'inc/functions.php';

            $imageURL = $_GET['image'];
        ?>
        <?php if(!empty($imageTitles[$imageURL])):?>
        <h2><?php echo e($imageTitles[$imageURL]); ?></h2>
        <?php if(!empty($imageDescs[$imageURL])) :?>
        <p><?php echo e($imageDescs[$imageURL]); ?></p>
        <?php endif ;?>
        <img src="images/<?php echo urldecode($imageURL);?>" alt="<?php echo e( $imageTitles[$imageURL]); ?>">
        <?php endif; ?>
    </main>
</body>

</html>