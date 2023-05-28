<?php
  include('protect.php');
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Inicio</title>
</head>
<body>

    <br><br><br><br><h2>OLÁ <?php echo $_SESSION['Usuario'];  ?> !!! </h2><br><br><br>

    <p>Seja bem-vindo ao site de gerenciamento de estacionamento, </p>
    <p>o intuito desse site é tornar a gerencia e organização so seu </p>
    <p>estacionamento o mais fácil e agradével possível</p><br><br><br>
    <p>Vamos começar ?</p><br><br><br><br>

    <div class="container text-center">
  <div class="row">
    <div class="col">
    <a href='https://test124578.000webhostapp.com/TCC/cad_clientes.php'><button type="button" class="btn btn-danger btn-sm">Cadastrar Clientes</button></a>
    </div>
    <div class="col">
    <button type="button" class="btn btn-danger btn-sm">Lista de Clientes</button>
    </div>
    <div class="col">
    <button type="button" class="btn btn-danger btn-sm">Mapa do Estacionamento</button>
    </div>
  </div>
</div>


    <p></p>
</body>
</html>