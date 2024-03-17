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
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .resultado {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.15); /* Cor do resultado com transparência */
            backdrop-filter: blur(10px); /* Efeito de vidro */
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
            background: rgba(255, 255, 255, 0.3); /* Cor do botão com transparência */
        }

        button:hover {
            color: white;
            background-color: #3b82f6;
            box-shadow: 0 0 0 5px #3b83f65f;
        }

        p {
            font-size: 18px;
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
        <p><a href="form_imc.php"><button>Calcular novamente</button></a></p>
    </div>
</body>
</html>



