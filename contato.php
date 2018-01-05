<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'mensagem.php';
$novaMensagem = new Mensagem();

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
                <li class="active"><a href="./home.php"><span class="fa fa-home"></span>&nbsp;Home</a></li>
                <li class=""><a href="#"><span class="fa fa-envelope"></span>&nbsp;Contato</a></li>
                <li class="col-8"></li>
            </ul>
        </div>
    </div>
    </nav>
        
    <!-- conteúdo principal -->
    <div class="row">
        <div class="form-group col-12">
            <form action="testePost.php" method="post">
                <a class="form-label">Nome: &nbsp;</a> <input type="text" name="nome"><br>
                <a class="form-label">E-mail: &nbsp;</a> <input type="text" name="email"><br>
                <a class="form-label">Telefone: &nbsp;</a> <input type="text" name="telefone"><br>
                <a class="form-label">Mensagem: &nbsp;</a> <textarea name="texto"></textarea><br>
                <input type="submit" class="btn-success">
            </form>
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