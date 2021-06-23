<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="print-container container">
        <?php
            session_start();

            echo "Nome: " . $_SESSION["name"] . "<br>";
            echo "Telefone: " . $_SESSION["phone"];
        ?>
    </div>
</body>
</html>