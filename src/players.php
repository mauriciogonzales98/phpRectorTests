<?php 

class Jugador {
    function __construct(protected $nombre, protected $numero)
    {
        
    }

    public function getNombre(){
        return $this->nombre;
    }
}

//$messi = new Jugador("Messi", 10);

//echo $messi->getNombre();

?>