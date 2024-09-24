<?php

include __DIR__ . "../classes/Oferta.php";
include __DIR__ . "./OfertasRepository.php";

class OfertasRepositoryRAM implements OfertasRepository
{

    private $ofertas = [];

    public function __construct() {
        $oferta1 = new Oferta("Programador/a BackEnd", "Trabajo con PHP y nodejs");
        $oferta2 = new Oferta("Programador/a Frontend", "Trabajo JavaScript");

        $ofertas = [$oferta1, $oferta2];
    }

    public function getOfertas(){
        return $this->$ofertas;
    }

    public function saveOferta($ofertaNueva){
        if($ofertaNueva instanceof Coche){
            array_push($coches, $nuevoCoche);
        }
    }
}
?>