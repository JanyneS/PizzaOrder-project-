<?php

include_once 'process/conn.php';
$msg = '';

if (!empty($_SESSION['msg'])) {


    $msg = $_SESSION['msg'];
    $status = $_SESSION['status'];

    $_SESSION['msg'] = '';
    $_SESSION['status'] = '';

    
    
}


?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faça seu Pedido</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Seu CSS -->
    <link rel="stylesheet" href="CSS/styles.css">
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a href="index.php" class="navbar-brand">
                <img src="img/pizza.svg" alt="Pizzaria" id="brand-logo">
                
            </a>
        </div class= "collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a href="index.php" class="nav-link">Peça sua pizza</a>
                </li>      
            </ul>
        </nav>
    </header>
    <?php if($msg != ''): ?>
    <div class="alert alert-<?= $status ?>">
        <p><?= $msg ?></p>
    </div>
    <?php endif; ?>

