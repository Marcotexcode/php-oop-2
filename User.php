<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio,
 ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping. 
 Strutturare le classi gestendo l'ereditarietà dove necessario; 
 ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, 
 oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, 
l'utente dello shop inserisce una carta di credito... $c = new CreditCard(..); $user->insertCreditCard($c);
BONUS: Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta). -->




<?php

    // Classe Prodotti (genitore)
    class User {

        public $nome;
        public $prezzo;
        public $sconto = 0;


        function __construct($_nome, $_prezzo) {

            $this->nome = $_nome;
            $this->prezzo = (int)$_prezzo;

        }

        public function setSconto($scontare) {

            if($scontare > 0) {

                $this->sconto = $this->prezzo - $scontare . ' ' . '€' ;

            }

        }

        public function getStudente($scontare) {

            return $this->sconto ;

        }

    }
    