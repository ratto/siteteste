<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<html>
<head>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" crossorigin="anonymous"></script>
    <link href="recursos/css/fontawesome-all.min.css" rel="stylesheet" type="text/css"/>
    <link href="recursos/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <script src="recursos/js/bootstrap.min.js" type="text/javascript"></script>
    <link href="recursos/css/bootstrap-grid.min.css" rel="stylesheet" type="text/css"/>
    <title>Site teste</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    
    <div class="container">
    <nav class="navbar navbar-default">
        <!-- cabeçalho -->
    <div class="row col-12">
        <div class="navbar-collapse">
            <ul class="nav navbar">
                <li class="active"><a href="#"><span class="fa fa-home"></span>&nbsp;Home</a></li>
                <li class=""><a href="./contato.php"><span class="fa fa-envelope"></span>&nbsp;Contato</a></li>
                <li class="col-8"></li>
            </ul>
        </div>
    </div>
    </nav>
        
    <!-- conteúdo principal -->
    <div class="row">
        <div id="meuCarrossel" class="carousel slide col-12" data-ride="carousel">
            <!-- indicadores visuais -->
            <ol class="carousel-indicators">
                <li data-target="#meuCarrossel" data-slide-to="0" class="active"></li>
                <li data-target="#meuCarrossel" data-slide-to="1"></li>
                <li data-target="#meuCarrossel" data-slide-to="2"></li>
            </ol>

            <!-- imagens do carrossel -->
            <div class="carousel-inner col-12">
                <div class="carousel-item active">
                    <img src="imagens/bondinho.jpg" alt="Bondinho do Rio">
                </div>

                <div class="carousel-item">
                    <img src="imagens/praia.jpg" alt="Praias cariocas">
                </div>

                <div class="carousel-item">
                    <img src="imagens/redentor.jpg" alt="Cristo Redentor">
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <a>
                Bem vindo ao site exemplo, feito por Pedro Luiz Tosta da Paixão.<br>
                O site segue as normas do HTML5, com uma interface "clean" colocando a programação em foco.<br>
                Sinta-se livre para explorar.
            </a>
        </div>
    </div>
    <div class="col-12">&nbsp;</div>
    <!-- footer -->
    <div class="row">
        <div class="footer">Site desenvolvido por Pedro Paixão.</div>
    </div>
    </div>
</body>
</html>