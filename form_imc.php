<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
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
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.15); /* Cor do formulário com transparência */
            backdrop-filter: blur(10px); /* Efeito de vidro */
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input[type="text"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
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
            color: black;
        }
        ::placeholder{
            color:black;
        }
    </style>
</head>
<body>
    <form action="calcular_imc.php" method="post">
        <h1>Calculadora de IMC</h1>
        <label for="peso">Peso (kg):</label>
        <br><br>
        <input type="text" name="peso" id="peso" placeholder="Informe o peso (kg)" required>
        <label for="altura">Altura (m):</label>
        <br><br>
        <input type="text" name="altura" id="altura" placeholder="Informe a altura (m)" required>
        <br><br>
        <input type="submit" value="Calcular IMC">
    </form>
</body>
</html>

