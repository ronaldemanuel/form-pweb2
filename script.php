<?php

session_start();

$_SESSION["name"] = $_REQUEST["name"];
$_SESSION["phone"] = $_REQUEST["phone"];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container link-container">
        <a href="print.php">Link de acesso</a>
    </div>
</body>
</html>


