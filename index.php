<?php

    require_once 'Prodotti.php';
    require_once 'ScontoProdotti.php';


    // PRODOTTI
    $latte = new Prodotti('Parmalat', 6);
    $prezzoLatte = $latte->prezzo;
    $scontato = new ScontoProdotti('nome', $prezzoLatte, 0);
    $scontato->setSconto(2);


    $pasta = new Prodotti('Barilla', 6);


    $patatine = new Prodotti('San carlo', 3);
    $prezzoPatatine = $patatine->prezzo;
    $scontato2 = new ScontoProdotti('nome', $prezzoPatatine, 0);

    
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

    <h2>PRODOTTI</h2>

    <ul>

        <li>Nome: <?php echo $latte->nome ?></li>
        <li>Prezzo: <?php echo $latte->prezzo ?> €</li>
        <li>Scontato: <?php echo $scontato->sconto ?> €</li>

    </ul>

    <ul>

        <li>Nome: <?php echo $pasta->nome ?></li>
        <li>Prezzo: <?php echo $pasta->prezzo ?> €</li>
        <li>Scontato:  €</li>

    </ul>

    <ul>

        <li>Nome: <?php echo $patatine->nome ?></li>
        <li>Prezzo: <?php echo $patatine->prezzo ?> €</li>
        <li>Scontato: <?php echo $scontato2->sconto ?> €</li>

    </ul>


</body>
</html>


























