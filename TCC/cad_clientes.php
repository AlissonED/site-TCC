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
    <link rel="stylesheet" href="styles-cad_clientes.css">
    <title>Cadastro clientes</title>
</head>
<body>

<div class="header-container">
  <ul class="menu">
    <li><a class="nav-link" href="https://test124578.000webhostapp.com/TCC/cad_clientes.php">Cadastro de clientes</a>
    </li>
    <li><a class="nav-link" href="#">Lista de clientes</a>
    </li>
    <li><a class="nav-link" href="">Mapa do estacionamento</a>
    </li>
  </ul>

  <ul class="logout">
    <li class="li-logout"><a class="nav-link" id="logout" href="logout.php">Log Out</a>
    </li>
  </ul>

</div>

<div class="form-clientes">
  <h1>Cadastro de clientes</h1>
  <div class="line">
    <div class="textfield">
      <label for="Nome">Nome :</label>
      <input type="text" name="nome" id="nome" placeholder="Nome">
    </div>

    <div class="textfield">
      <label for="sobrenome">Sobrenome :</label>
      <input type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome">
    </div>
  </div>

  <div class="line">
    <div class="textfield">
      <label for="cpf">CPF :</label>
      <input type name="cpf" id="cpf" placeholder="CPF">
    </div>
  
    <div class="textfield">
      <label for="Telefone">Telefone :</label>
      <input type="text" name="tel" id="tel" placeholder="Telefone">
    </div>
  </div>
  
  <div class="line">
    <div class="textfield">
      <label for="email">Email :</label>
      <input type="text" name="email" id="email" placeholder="Email   (Campo não obrigatório)">
    </div>
  
    <div class="textfield">
      <label for="placa">Placa :</label>
      <input type="text" name="placa" id="placa" placeholder="Placa do veículo">
    </div>
  </div>
</div>
</body>
</html>