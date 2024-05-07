<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?
// letra C
class Aeroporto {
    private $nome;
    private $cidade;

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }
}

// Exemplo de uso:
$aeroporto = new Aeroporto();
$aeroporto->setNome("Aeroporto Internacional");
$aeroporto->setCidade("São Paulo");
echo "Nome do aeroporto: " . $aeroporto->getNome() . "<br>";
echo "Cidade do aeroporto: " . $aeroporto->getCidade();

?>

</body>
</html>