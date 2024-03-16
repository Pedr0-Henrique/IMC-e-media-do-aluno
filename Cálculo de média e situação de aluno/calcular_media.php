<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Média</title>
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
            background-color: rgba(255, 255, 255, 0.8);
            /* Fundo com transparência */
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            /* Sombra suave */
        }

        p,
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
        if (isset ($_POST['nome']) && isset ($_POST['nota1']) && isset ($_POST['nota2'])) {
            // Recupera os valores informados pelo usuário
            $nome = $_POST['nome'];
            $nota1 = $_POST['nota1'];
            $nota2 = $_POST['nota2'];

            // Calcula a média aritmética
            $media = ($nota1 + $nota2) / 2;

            // Exibe o nome do aluno e a média calculada
            echo "<p>Nome do Aluno: $nome</p>";
            echo "<p>Média: $media</p>";

            // Determina a situação do aluno conforme a tabela de referência
            if ($media >= 7) {
                echo "<p>Situação: Aprovado</p>";
            } elseif ($media >= 5 && $media < 7) {
                echo "<p>Situação: Recuperação</p>";
            } else {
                echo "<p>Situação: Reprovado</p>";
            }
        } else {
            echo "<p>Por favor, preencha todos os campos.</p>";
        }
        ?>
        <p><a href="form_notas.php"><button>Calcular novamente</button></a></p>
    </div>
</body>

</html>