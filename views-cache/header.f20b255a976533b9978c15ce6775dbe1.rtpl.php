<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Intranet da Penitenciária de Parelheiros">
  <meta name="author" content="Tecnomarcos">

  <title>Intranet PENPA || Controle de ponto</title>

  <!-- Bootstrap core CSS -->
  <link href="../assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">
  

  <!-- Custom styles for this template -->
  <link href="../assets/css/estilo-restrito.css" rel="stylesheet">

  <!-- Fontawesome 5.0-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

</head>

<body>

  <!-- Navigation -->

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <div class="row">
        <div class="col-lg">
            <a class="navbar-brand" href="/admin">
              <img src="../assets/img/logo_int_neg_mini.png" title="Página inicial || Intranet PENPA">
            </a>
        </div>
      </div>
      


      <div class="collapse navbar-collapse" id="navbarResponsive">

        <ul class="navbar-nav ml-auto">
          <li>
            <a class="nav-link" href="/admin"><img src="../assets/img/fotos/6116.jpg" class="img-circle" alt="" width="32" height="32">&nbsp;&nbsp;&nbsp;{value.usu_de_nome}</a>
          </li>
          <li class="nav-item">
          	<a class="nav-link" href="/admin/logout" title="Sair"> Sair <i class="fas fa-sign-out-alt"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
