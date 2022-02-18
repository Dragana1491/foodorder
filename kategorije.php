<?php include 'header.php'; ?>
<?php include 'burger.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="mojstyle.css">
</head>
<body>
    <?php
            $h->meni();

            $lista->Lista_ponuda();

            $h->footer();
    ?>
</body>
</html>