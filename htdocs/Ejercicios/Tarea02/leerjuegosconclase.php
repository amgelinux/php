<?php
// Ejemplo de https://www.jose-aguilar.com/blog/leer-archivo-linea-linea-con-php/
trait Crono {
    private $tiempoInicio;
    private $tiempoFin;
    private $tiempoEmpleado;

    /**
     * @return mixed
     */
    public function getTiempoEmpleado()
    {
        return $this->tiempoEmpleado;
    }

    public function Start() {
        $this->tiempoInicio = microtime(true);
    }
    public function End() {
        $this->tiempoFin = microtime(true);
        $this->tiempoEmpleado = $this->tiempoFin - $this->tiempoInicio;
    }
}

class LeerFichero {
    private $archivo;
    private $linea;
    private $numlineas = 0;
    private $codigo;

    use Crono;

    /**
     * @return int
     */
    public function getNumlineas(): int
    {
        return $this->numlineas;
    }
    /**
     * @return string
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }
    private $nombre;

    function __construct($fichero) {
        $this->archivo = fopen($fichero,'r');
    }

    function __destruct() {
        fclose($this->archivo);
    }

    function LeerLinea() {
        $resultado = false;
        $this->linea = fgets($this->archivo);
        if ($this->linea != false) {
            $this->numlineas++;
            $resultado = true;
        }
        return $resultado;
    }

    function Trocear() {
        $trozos = explode(" = ", $this->linea);
        if (count($trozos)>1) {
            $this->codigo = $trozos[0];
            $this->nombre = $trozos[1];
        }
    }
}
?>
<html>
<head>
    <?php include ("../../bootstrap/bootstrap_cabecera.inc"); ?>
</head>
<body>

<?php

$lectura = new LeerFichero("./wiitdb.txt");
$lectura->Start();
while($lectura->LeerLinea()) {
    $lectura->Trocear();
    echo $lectura->getNumlineas() . " " . $lectura->getCodigo() . " - " . $lectura->getNombre();
    echo "<br>";
}
?>
<?php
echo "Se han escrito " . $lectura->getNumlineas() . " juegos";
echo "<br>";
$lectura->End();
echo "Se ha tardado " . $lectura->getTiempoEmpleado();
?>
</body>
</html>