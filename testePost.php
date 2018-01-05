<?php

include 'mensagem.php';
$novaMensagem = new Mensagem();

$novaMensagem->setNome($_POST['nome']);
$novaMensagem->setEmail($_POST['email']);
$novaMensagem->setTelefone($_POST['telefone']);
$novaMensagem->setTexto($_POST['texto']);

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
                <li class=""><a href="./contato.php"><span class="fa fa-envelope"></span>&nbsp;Contato</a></li>
                <li class="col-8"></li>
            </ul>
        </div>
    </div>
    </nav>
        
    <!-- conteúdo principal -->
    <div class="row">
        <div class="col-12">
            Nome: <?php echo $novaMensagem->getNome(); ?> <br>
            E-mail: <?php echo $novaMensagem->getEmail(); ?> <br>
            Telefone: <?php echo $novaMensagem->getTelefone(); ?> <br>
            Mensagem: <?php echo $novaMensagem->getTexto(); ?>
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