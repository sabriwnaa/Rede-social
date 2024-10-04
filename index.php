<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rede Social</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class='container <?php if (isset($_GET['login'])) echo "-blur"; ?>'>
        <div class='header'>
            <a href="?login=true" class="botao">Fazer Login</a>
        </div>

        <div class='main'>
            <!-- Conteúdo principal da página -->
             <!-- Verifica se existe 'login' na URL -->
            <?php if (isset($_GET['login'])): ?>
                <div class="popuplogin">
                    <form action="login.php" method="POST">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                        
                        <label for="password">Senha</label>
                        <input type="password" id="password" name="password" required>
                        
                        <button type="submit">Enviar</button>
                    </form>
                </div>
            <?php endif; ?>
        </div>

        <div class='footer'>
            <!-- Rodapé -->
        </div>

        
    </div>
</body>
</html>
