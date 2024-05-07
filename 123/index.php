<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

//letra D
class Conta {
    private $numero;
    private $banco;
    private $saldo;

    public function __construct($numero, $banco, $saldo) {
        $this->numero = $numero;
        $this->banco = $banco;
        $this->saldo = $saldo;
    }

    public function depositar($valor) {
        if ($valor > 0) {
            $this->saldo += $valor;
            echo "Depósito de R$ {$valor} realizado com sucesso!<br>";
        } else {
            echo "Valor para depósito inválido.<br>";
        }
    }

    public function sacar($valor) {
        if ($valor > 0 && $this->saldo >= $valor) {
            $this->saldo -= $valor;
            echo "Saque de R$ {$valor} realizado com sucesso!<br>";
        } else {
            echo "Valor para saque inválido ou saldo insuficiente.<br>";
        }
    }
}

// Exemplo de uso:
$minhaConta = new Conta(123, 1, 1000.0);
$minhaConta->depositar(200); // Deposita R$ 200
$minhaConta->sacar(100); // Saca R$ 100
?>

 
</body>
</html> 
