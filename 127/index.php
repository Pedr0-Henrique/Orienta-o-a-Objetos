<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do Retângulo</title>
    <style>
        /* Estilos CSS para a página */
        body {
            font-family: Arial, sans-serif;
        }
        form {
            max-width: 300px;
            margin: 0 auto;
        }
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }
        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Área do Retângulo</h1>
    <?php
    if (isset($_POST['calcular'])) {
        $base = floatval($_POST['base']);
        $altura = floatval($_POST['altura']);
        $area = $base * $altura;
        echo "<p>A área do retângulo é: $area</p>";
        echo '<form method="get"><button type="submit">Retornar</button></form>';
    } else {
        echo '
        <form method="post">
            <label for="base">Informe a base:</label>
            <input type="number" id="base" name="base" required>
            <label for="altura">Informe a altura:</label>
            <input type="number" id="altura" name="altura" required>
            <button type="submit" name="calcular">Calcula Área</button>
        </form>';
    }
    ?>
</body>
</html>

