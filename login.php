<?php

//    require 'config.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Login</title>
    <link rel="stylesheet" href="./assets/css/estilo.css">
    <script src=""></script>
    <style>
        .topo-login {
            background: url("./assets/images/fundo.jpg") no-repeat;
            background-size:cover;
        }
    </style>
</head>
<body class="topo-login">
    <header>
        <div class="header">
            <img src="./assets/images/logo.png" width="700" alt="">
        </div>
    </header>
    <section>
        <div class="campo">
            <form method="POST" action="login_action.php">
                <?php if(!empty($_SESSION['flash'])): ?>
                    <div class="error">
                        <?= $_SESSION['flash']; ?>
                        <?= $_SESSION['flash'] = ''; ?>
                    </div>
                <?php endif; ?>  
                <input type="text" name="login" placeholder="Digite seu Usuário">
                <input type="password" name="password" placeholder="Digite sua Senha">
                <input type="submit" value="LOGIN">
                </a>
            </form>
        </div>
    </section>
    <footer>
        <div class="footer">
            Todos os direitos reservados.
        </div>
    </footer>
</body>
</html>