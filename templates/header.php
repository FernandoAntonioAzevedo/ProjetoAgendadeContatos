<?php

  include_once("config/url.php");
  include_once("config/process.php");
  
  // limpa a mensagem
  if(isset($_SESSION['msg'])) {
    $printMsg = $_SESSION['msg'];
    $_SESSION['msg'] = '';
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <!-- BootStrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" 
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS -->
     <link rel="stylesheet" href="<?= $BASE_URL ?>css/styles.css">

    <title>Agenda de contatos</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="<?= $BASE_URL ?>index.php">
                <img src="<?= $BASE_URL ?>img/logoAgenda.svg" alt="logo agenda">
            </a>
            <div class="navbar-nav">
                <a class="nav-link" id="home-link" href="<?= $BASE_URL ?>index.php">Agenda</a>
                <a class="nav-link" id="home-link" href="<?= $BASE_URL ?>create.php">Adicionar contato</a>
            </div>
        </nav>
    </header>