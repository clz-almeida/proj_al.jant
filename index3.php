<?php

require_once 'config.php';
require_once 'models/Auth.php';

$auth = new Auth($pdo, $base);
$userInfo = $auth->checkToken();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página inicial</title>
    <link rel="stylesheet" href="<?=$base;?>/assets/css/estilo.css">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

</head>

<body class="topo">

    <header>
        <div class="header2">
            <img src="<?=$base;?>/assets/images/LOGO AUSION2.png" width="700" alt="">
        </div>

        <ul id="menu" class="nav nav-pills bg-dark justify-content-center">
            <li class="nav-item">
              <a class="nav-link" href="<?=$base;?>">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=$base;?>/almocista.php">ALMOCISTAS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=$base;?>/jantista.php">JANTISTAS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=$base;?>/login.php">SAIR</a>
            </li>
          </ul>

    </header>

    <!--
    <div id="aviso">
        CONFIRME SEU POSTO DE TRABALHO
    </div>
    -->

    <div class="container-fluid w-100">
        <div id="linha" class="row justify-content-center">

            <a href="" class="col-4 col-sm-2"><b>USP</b>
                <p>FARMÁCIA ADM</p>
            </a>

            <a href="" class="col-4 col-sm-2"><b>USP</b>
                <p>FARMÁCIA BLOCO M</p>
            </a>

            <a href="" class="col-4 col-sm-2"><b>USP</b>
                <p>FARMÁCIA BLOCO R</p>
            </a>

            <!-- Force next columns to break to new line -->
            <div class="w-100"></div>

            <a href="" class="col-4 col-sm-2"><b>USP</b>
                <p>FARMÁCIA BLOCO S</p>
            </a>

            <a href="" class="col-4 col-sm-2"><b>USP</b>
                <p>FILOSOFIA</p>
            </a>

            <a href="" class="col-4 col-sm-2"><b>USP</b>
                <p>QUÍMICA</p>
            </a>

            <div class="w-100"></div>

            <a href="" class="col-4 col-sm-2"><b>USP</b>
                <p>PORTARIA P1</p>
            </a>

            <a href="" class="col-4 col-sm-2"><b>USP</b>
                <p>PORTARIA P2</p>
            </a>

            <a href="" class="col-4 col-sm-2"><b>USP</b>
                <p>PORTARIA P3</p>
            </a>

            <div class="w-100"></div>

            <a href="" class="col-4 col-sm-2"><b>USP</b>
                <p>DIREITO</p>
            </a>

            <a href="" class="col-4 col-sm-2"><b>USP</b>
                <p>ENFERMA GEM</p>
            </a>

            <a href="" class="col-4 col-sm-2"><b>USP</b>
                <p>EDUCAÇÃO FÍSICA</p>
            </a>

            <div class="w-100"></div>

            <a href="" class="col-4 col-sm-2"><b>USP</b>
                <p>RESTAURANTE</p>
            </a>

            <a href="" class="col-4 col-sm-2"><b>USP</b>
                <p>VILA ESTUD.</p>
            </a>

            <a href="" class="col-4 col-sm-2"><b>USP</b>
                <p>PRÉDIO CENTRAL</p>
            </a>

            <div class="w-100"></div>

            <a href="" class="col-4 col-sm-2"><b>USP</b>
                <p>PATOLOGIA</p>
            </a>

            <a href="" class="col-4 col-sm-2"><b>USP</b>
                <p>VIROLOGIA</p>
            </a>

            <a href="" class="col-4 col-sm-2"><b>USP</b>
                <p>GENÉTICA</p>
            </a>

        </div>
</body>

</html>