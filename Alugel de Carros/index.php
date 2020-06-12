<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
    <link rel="stylesheet" href="css/tela_login.css">
    <title>Show Cars</title>
</head>
<body>
    <h1>Show Cars</h1>

    <div>
        <form action="login.php" method="POST">
            <div class="usuario"> 
                <label>Usuário:</label>
                <input type="text" name="usuario" required>
            </div>

            <div class="senha">
                <label>Senha:</label>
                <input type="password" name="senha" required>
            </div>

            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>