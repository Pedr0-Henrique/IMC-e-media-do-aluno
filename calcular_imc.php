<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do IMC</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #010937, #8a2be2);
        }
        
        .resultado { 
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            margin-top: 194px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        a {
            text-decoration: none;
        }
        button {
            color: blue;
            border: none;
            height: 40px;
            width: 100px;
            border-radius: 7px;
            cursor: pointer;
        }

        button:hover {
            color: white;
            background-color: #3b82f6;
            box-shadow: 0 0 0 5px #3b83f65f;
        }
    </style>
</head>
<body>
    <div class="resultado">
        <?php
        // Verifica se os campos foram preenchidos
        if(isset($_POST['peso']) && isset($_POST['altura'])) {
            // Recupera os valores informados pelo usuário
            $peso = str_replace(',', '.', $_POST['peso']);
            $altura = str_replace(',', '.', $_POST['altura']);

            // Calcula o IMC
            $imc = $peso / ($altura * $altura);

            // Exibe o resultado do IMC
            echo "<p>Seu IMC é: " . number_format($imc, 2, ',', '.') . "</p>";

            // Determina a situação conforme a tabela de referência
            if ($imc < 18.5) {
                echo "<p>Você está abaixo do peso.</p>";
            } elseif ($imc >= 18.5 && $imc < 25) {
                echo "<p>Seu peso está normal.</p>";
            } elseif ($imc >= 25 && $imc < 30) {
                echo "<p>Você está com sobrepeso.</p>";
            } else {
                echo "<p>Você está obeso.</p>";
            }
        } else {
            echo "<p>Por favor, preencha todos os campos.</p>";
        }
        ?>
        <p><a href="form_imc.html"><button>Calcular novamente</button></a></p>
    </div>
</body>
</html>


