<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// LETRA A
class Quadrado {
    private $lado;

    public function setLado($lado) {
        $this->lado = $lado;
    }

    public function calculaArea() {
        return $this->lado * $this->lado;
    }
}


$quadrado = new Quadrado();
$quadrado->setLado(5); // Define o lado do quadrado como 5
$area = $quadrado->calculaArea(); // Calcula a área
echo "Área do quadrado: " . $area;

?>

<?php
// LETRA D

class Triangulo {
    private $base;
    private $altura;

    public function setBase($base) {
        $this->base = $base;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function calculaArea() {
        return ($this->base * $this->altura) / 2;
    }
}


$triangulo = new Triangulo();
$triangulo->setBase(12); // Define a base do triângulo como 12
$triangulo->setAltura(9); // Define a altura do triângulo como 9
$area = $triangulo->calculaArea(); // Calcula a área
echo "Área do triângulo: " . $area;



?>

</body>
</html>