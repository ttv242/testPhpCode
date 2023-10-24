<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel="stylesheet" href="<?= PUBLIC_URL . 'css/style.css' ?>"> -->

    <title> <?= $title ?> </title>
</head>
<body>
    <?php 
        include("views/public/inc/header.php");
        
        if (isset($pages) && file_exists($pages)) {
            include($pages);
        }

        include("views/public/inc/footer.php");

    ?>
</body>
</html>