<?php
include($_SERVER['DOCUMENT_ROOT'] . '/mariabonita/valida_login.php');

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maria Bonita</title>
    <link rel="stylesheet" href="../css/cardapio.css">
    <link rel="shortcut icon" href="../images/favicon.ico" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="icon" href="../img/icon.png" type="image/png">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>

    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
            <div class="logo">
                <a href="../home.php">
                    <img src="../img/logo.png">
                </a>
            </div>
            <ul class="menu">
                <?php

                // Check if the session variable "funcao" is set

                if ($_SESSION["nome"] == "Administrador") {
                ?>
                    <ul class="menu">
                        <li><a href="../index.php#home" class="menu-btn">Home</a></li>
                        <li><a href="../admin.php" class="menu-btn">Administração</a></li>
                        <li><a href="../index.php#about" class="menu-btn">Sobre</a></li>
                        <li><a href="../index.php#services" class="menu-btn">Serviços</a></li>
                        <li><a href="../index.php#time" class="menu-btn">Horários</a></li>
                        <li><a href="../cardapio/index.php" class="menu-btn">Cardápio</a></li>
                        <li><a href="../cardapio/carrinho.php" class="menu-btn"><i class="fas fa-shopping-cart"></i> Carrinho</a></li>
                        <li><a href="../logout.php" class="menu-btn">Sair</a></li>
                    </ul>
                <?php
                } else {
                ?>
                    <ul class="menu">
                        <li><a href="../index.php#home" class="menu-btn">Home</a></li>
                        <li><a href="../index.php#about" class="menu-btn">Sobre</a></li>
                        <li><a href="../index.php#services" class="menu-btn">Serviços</a></li>
                        <li><a href="../index.php#time" class="menu-btn">Horários</a></li>
                        <li><a href="../cardapio/index.php" class="menu-btn">Cardápio</a></li>
                        <li><a href="../cardapio/carrinho.php" class="menu-btn"><i class="fas fa-shopping-cart"></i> Carrinho</a></li>
                        <li><a href="../logout.php" class="menu-btn">Sair</a></li>
                    </ul>

                <?php
                }

                ?>
            </ul>
            <div class="menu-cart">
                <a href="../Carrinho/index.html"><i class="fas fa-shopping-cart"></i><span id="cont-cart"></span></a>
            </div>
        </div>
    </nav>

    <section class="about" id="about" >
        <h1 style="margin-top:20px;">Seu Carrinho</h1>
        <?php
        if (isset($_POST['descricao'])) {
            foreach ($_POST['descricao'] as $produto) {
                echo  htmlspecialchars($produto) . "&nbsp;&nbsp;";
            }
        } else {
            echo "<p>Sem acompanhametos.</p>";
        }
        ?>
    </section>


</body>

</html>