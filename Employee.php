<?php

    // Classe utenti (figlio)

    require_once 'User.php';

    class Employee extends User {

        
        public $nome;
        public $congome;
        public $scontoPrime = 'Non hai la tessera prime';


        function __construct($_nome, $_cognome) {

            $this->nome = $_nome;
            $this->cognome = $_cognome;

        }

        
        public function setScontoPrime($prime) {

            if($prime == true) {

                $this->scontoPrime = $this->sconto - 0.2 . ' ' . '€' ;

            }

        }

        public function getStudentePrime($prime) {

            return $this->scontoPrime;

        }

    }