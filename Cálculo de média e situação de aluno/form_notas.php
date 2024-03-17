<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Média</title>
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

        form {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            margin-top: 40px;
            background-color: rgba(255, 255, 255, 0.15); /* Cor do formulário com transparência */
            backdrop-filter: blur(10px); /* Efeito de vidro */
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            background: rgba(255, 255, 255, 0.3); /* Cor do input com transparência */
            border: none;
            border-radius: 5px;
        }

        input[type="submit"] {
            color: blue;
            border: none;
            height: 40px;
            width: 100px;
            border-radius: 7px;
            cursor: pointer;
            background: rgba(255, 255, 255, 0.3); /* Cor do botão com transparência */
        }

        input[type="submit"]:hover {
            color: white;
            background-color: #3b82f6;
            box-shadow: 0 0 0 5px #3b83f65f;
        }

        p {
            font-size: 18px;
        }
        h1{
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: black;
        }

        ::placeholder{
            color: black;
        }

     
    </style>
</head>

<body>
   
    <form action="calcular_media.php" method="post">
       <h1>Calculadora
        <br>de Média</h1>
        <label for="nome">Nome do Aluno:</label>
        <input type="text" name="nome" id="nome" placeholder="Informe o nome do aluno" required>
        <label for="nota1">Nota 1:</label>
        <input type="text" name="nota1" id="nota1" placeholder="Informe a primeira nota" required>
        <label for="nota2">Nota 2:</label>
        <input type="text" name="nota2" id="nota2" placeholder="Informe a segunda nota" required>
        <input type="submit" value="Calcular Média">
    </form>
</body>

</html>

