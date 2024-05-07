<!DOCTYPE html>
<html>
<head>
    <style>
        form {
            margin: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 300px;
        }
        input[type="submit"], input[type="reset"] {
            margin-top: 10px;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover, input[type="reset"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<h2>Sequência PHP</h2>

<?php
// Classe Sequencia
class Sequencia {
    private $inicio;
    private $fim;

    // Definir o valor inicial
    public function setInicio($inicio) {
        $this->inicio = $inicio;
    }

    // Definir o valor final
    public function setFim($fim) {
        $this->fim = $fim;
    }

    // Exibir todos os números no intervalo
    public function exibirTodosNumeros() {
        for ($i = $this->inicio; $i <= $this->fim; $i++) {
            echo $i . "<br>";
        }
    }

    // Exibir apenas os números pares no intervalo
    public function exibirPares() {
        for ($i = $this->inicio; $i <= $this->fim; $i++) {
            if ($i % 2 == 0) {
                echo $i . "<br>";
            }
        }
    }

    // Exibir apenas os números ímpares no intervalo
    public function exibirImpares() {
        for ($i = $this->inicio; $i <= $this->fim; $i++) {
            if ($i % 2 != 0) {
                echo $i . "<br>";
            }
        }
    }
}

// Verificar se o botão de limpar foi clicado
if (isset($_POST['limpar'])) {
    $_POST = array(); // Limpar os dados do formulário
}

// Verificar se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST['limpar'])) {
    // Verificar se os valores foram definidos e são numéricos
    if (isset($_POST["inicio"]) && isset($_POST["fim"]) && is_numeric($_POST["inicio"]) && is_numeric($_POST["fim"])) {
        // Criar uma instância da classe Sequencia
        $sequencia = new Sequencia();

        // Obter os valores do formulário e convertê-los em inteiros
        $inicio = intval($_POST["inicio"]);
        $fim = intval($_POST["fim"]);

        // Definir os valores na instância da classe Sequencia
        $sequencia->setInicio($inicio);
        $sequencia->setFim($fim);

        // Verificar a opção selecionada para mostrar os números
        if (isset($_POST["mostrar"])) {
            $mostrar = $_POST["mostrar"];

            // Chamar a função apropriada com base na opção selecionada
            if ($mostrar == "todos") {
                echo "Mostrando todos os números:<br>";
                $sequencia->exibirTodosNumeros();
            } elseif ($mostrar == "pares") {
                echo "Mostrando apenas os números pares:<br>";
                $sequencia->exibirPares();
            } elseif ($mostrar == "impares") {
                echo "Mostrando apenas os números ímpares:<br>";
                $sequencia->exibirImpares();
            }
        } else {
            echo "Por favor, selecione uma opção para mostrar os números.";
        }
    } else {
        echo "Por favor, insira valores numéricos válidos para o início e o fim da sequência.";
    }
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Selecione o valor inicial: <input type="number" name="inicio" value="<?php if(isset($_POST['inicio'])) echo $_POST['inicio']; ?>"><br>
  Selecione o valor final: <input type="number" name="fim" value="<?php if(isset($_POST['fim'])) echo $_POST['fim']; ?>"><br>
  Mostrar: 
  <input type="radio" id="todos" name="mostrar" value="todos" <?php if(isset($_POST['mostrar']) && $_POST['mostrar'] == 'todos') echo 'checked'; ?>>
  <label for="todos">Todos</label><br>
  <input type="radio" id="pares" name="mostrar" value="pares" <?php if(isset($_POST['mostrar']) && $_POST['mostrar'] == 'pares') echo 'checked'; ?>>
  <label for="pares">Apenas os pares</label><br>
  <input type="radio" id="impares" name="mostrar" value="impares" <?php if(isset($_POST['mostrar']) && $_POST['mostrar'] == 'impares') echo 'checked'; ?>>
  <label for="impares">Apenas os ímpares</label><br>
  <input type="submit" value="Mostrar a sequência">
  <input type="submit" name="limpar" value="Limpar">
</form>

</body>
</html>





