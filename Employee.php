<?php

    // Classe utenti (figlio)

    require_once 'User.php';

    class Employee extends User {

        
        public $nome;
        public $congome;
        public $scontoPrime = 'nessuno sconto';


        function __construct($_nome,$_cognome) {

            $this->nome = $_nome;
            $this->cognome = $_cognome;

        }

        public function setScontoPrime($prime) {

            if($prime == true) {

                $this->scontoPrime = $this->prezzo - 0.1 . ' ' . '€' ;

            }

        }

        public function getStudentePrime($prime) {

            return $this->scontoPrime;

        }

    }