<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?

class Adulto {
    private $peso;

    public function engordar($quilos) {
        if ($quilos > 0) {
            $this->peso += $quilos;
        }
    }

    public function emagrecer($quilos) {
        if ($quilos > 0) {
            $this->peso -= $quilos;
        }
    }

    public function peso() {
        return $this->peso;
    }
}

// Exemplo de uso:
$adulto = new Adulto();
$adulto->engordar(5); // Engorda 5 quilos
$adulto->emagrecer(3); // Emagrece 3 quilos
echo "Peso atual: " . $adulto->peso() . " kg";
?>
<br>
<?php
class Televisao {
    private $status;
    private $canal;
    private $volume;

    public function __construct() {
        $this->status = false;
        $this->canal = 1;
        $this->volume = 10;
    }

    public function ligaDesliga() {
        $this->status = !$this->status;
    }

    public function aumentaCanal() {
        $this->canal++;
    }

    public function diminuiCanal() {
        $this->canal--;
    }

    public function aumentaVolume() {
        $this->volume++;
    }

    public function diminuiVolume() {
        $this->volume--;
    }

    public function mostraCanal() {
        return $this->canal;
    }

    public function mostraVolume() {
        return $this->volume;
    }
}

// Exemplo de uso:
$tv = new Televisao();
$tv->ligaDesliga(); // Liga a TV
$tv->aumentaCanal(); // Aumenta o canal
$tv->aumentaVolume(); // Aumenta o volume
echo "Canal atual: " . $tv->mostraCanal() . ", Volume atual: " . $tv->mostraVolume();
?>

</body>
</html>