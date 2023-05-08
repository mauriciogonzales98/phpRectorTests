<?php 

class Jugador {

    protected $nombre;
    protected $numero;
    protected $energia = 100;

    function __construct($nombre, $numero, $energia)
    {
        $this->nombre = $nombre;
        $this->numero = $numero;
        $this->energia = $energia;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getNumero(){
        return $this->numero;
    }

    public function run ($distancia){
        if ($distancia <= $this->energia * 10){
            $this->energia -= ($distancia/10);
            echo "Se corrio ", $distancia, " metros. Queda ", $this->energia, " energia";
        }
        else{
            echo "No hay suficiente energia para correr ", $distancia, " metros";
        }
    }
}

$messi = new Jugador("Messi", 10, 100);

echo $messi->getNombre(), "\n";
$messi->run(15);

?>