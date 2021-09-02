<?php

    require_once 'User.php';
    require_once 'Employee.php';



    $latte = new User('Parmalat', 2 . ' ' . '€');
    $latte->setSconto(1);


    $pasta = new User('Barilla', 1 . ' ' . '€');




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Prodotti</h1>

    <ul>

        <li>Nome: <?php echo $latte->nome ?></li>
        <li>Prezzo: <?php echo $latte->prezzo ?></li>
        <li>Scontato: <?php echo $latte->sconto ?></li>

    </ul>

    <ul>

        <li>Nome: <?php echo $pasta->nome ?></li>
        <li>Prezzo: <?php echo $pasta->prezzo ?></li>
        <li>Scontato: <?php echo $latte->sconto ?></li>

    </ul>

    

</body>
</html>