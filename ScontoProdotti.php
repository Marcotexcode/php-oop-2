<?php


    // Classe ScontoProdotti (figlio)

    require_once 'Prodotti.php';



    class ScontoProdotti extends Prodotti {

        public $sconto = 0;

        
        function __construct($_nome, $_prezzo, $_sconto) {

            parent::__construct($_nome, $_prezzo);

            $this->sconto = $_sconto;

        }

        public function setSconto($scontare) {

            if($scontare > 0) {

                $this->sconto = $this->prezzo - $scontare;

            }

        }

        public function getStudente($scontare) {

            return $this->sconto ;

        }

    }

    