<?php

    require_once 'User.php';
    require_once 'Employee.php';


    // PRODOTTI
    $latte = new User('Parmalat', 5 . ' ' . '€');
    $latte->setSconto(0.2);

    $pasta = new User('Barilla', 3 . ' ' . '€');


    // UTENTI
    $utente1 = new Employee('Marco', 'Rossi');
    $utente1->setScontoPrime(true);

    $utente2 = new Employee('Mario', 'Verdi');
    $utente2->setScontoPrime(false);
    





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

    <h1>PRODOTTI</h1>

    <ul>

        <li>Nome: <?php echo $latte->nome ?></li>
        <li>Prezzo: <?php echo $latte->prezzo ?></li>
        <li>Scontato: <?php echo $latte->sconto ?> </li>

    </ul>

    <ul>

        <li>Nome: <?php echo $pasta->nome ?></li>
        <li>Prezzo: <?php echo $pasta->prezzo ?></li>
        <li>Scontato: <?php echo $pasta->sconto ?> </li>

    </ul>

    <h2>UTENTI</h2>

    <ul>

        <li>Nome: <?php echo $utente1->nome ?></li>
        <li>Prezzo: <?php echo $utente1->cognome ?></li>
        <ul>
            <li>Prezzo prime <?php echo $latte->nome ?>: <?php echo $utente1->scontoPrime ?></li>
            <li>Prezzo prime <?php echo $pasta->nome ?>: <?php echo $utente1->scontoPrime ?></li>

        </ul>

    </ul>

    <ul>

        <li>Nome: <?php echo $utente1->nome ?></li>
        <li>Prezzo: <?php echo $utente1->cognome ?></li>
        <ul>
            <li>Prezzo prime <?php echo $latte->nome ?>: <?php echo $utente2->scontoPrime ?></li>
            <li>Prezzo prime <?php echo $pasta->nome ?>: <?php echo $utente2->scontoPrime ?></li>

        </ul>

    </ul>
    

</body>
</html>