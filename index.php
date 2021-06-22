<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário com PHP</title>
</head>
<body>
    <div class="form-container">
        <h1>Formulário com PHP</h1>
        <form action="script.php" method="GET">
            <div class="form-content">
                <div class="form-input">
                    <label for="name">Nome:</label>
                    <input type="text" id="name" name="name">
                </div>
                <div class="form-input">
                    <label for="phone">Telefone</label>
                    <input type="text" name="phone" id="phone">   
                </div>
            </div>
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>