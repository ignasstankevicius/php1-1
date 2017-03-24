<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php

    if(isset($_POST)) {
    $vardas = $_POST['vardas'];
    $amzius = $_POST['amzius'];
    } else {
        $vardas = "";
        $pavarde = "";
    }
    ?>
    <h1>svetaine</h1>
    <?php if($vardas == "") : ?>
    <form action='index.php' method='POST'>
    <input type='text' name='vardas' value="<?= $vardas; ?>">
    <input type='text' name='amzius' value="<?= $amzius; ?>">
    <input type='submit'>
</form>
<?php else: ?>
<?php
    $amzius = 2017 - $amzius;
?>
    <h2> Sveiki prisijunge, <?= $vardas; ?> Jums gimete <?= $amzius; ?> metais  </h2>
<?php endif; ?>

</body>
</html>