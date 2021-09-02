<?php

    // Classe sconti (figlio)

    require_once 'User.php';

    class Employee extends User {


        public function setSconto($scontare) {

            if($scontare > 0) {

                $this->sconto = $this->prezzo - $scontare ;

            }

        }

        public function getStudente($scontare) {

            return $this->sconto;

        }

    }