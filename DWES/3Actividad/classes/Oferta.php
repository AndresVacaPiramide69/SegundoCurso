<?php

class Oferta
{
    private $titulo;
    private $subtitulo;

    public function __construct($titulo, $subtitulo) {
        $this->titulo = $titulo;
        $this->subtitulo = $subtitulo;
    }

    public function getTitulo()
    {
        return $this->$titulo;
    }

    public function getsubtitulo()
    {
        return $this->$subtitulo;
    }

    public function __toString()
    {
        echo '
        <div class="ofertas">
            <h1 class="titulo">' . $this->getTitulo() . '</h1><br>
            <h2 class="subtitulo">' . $this->getSubtitulo() . '</h2>
        </div><br>
        ';
    }
}