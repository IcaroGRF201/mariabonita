<?php

// Check if the session variable "funcao" is set

    if ($_SESSION["nome"] == "Administrador") {
?>
        <ul class="menu">
            <li><a href="#home" class="menu-btn">Home</a></li>
            <li><a href="admin.php" class="menu-btn">Administração</a></li>
            <li><a href="#about" class="menu-btn">Sobre</a></li>
            <li><a href="#services" class="menu-btn">Serviços</a></li>
            <li><a href="#time" class="menu-btn">Horários</a></li>
            <li><a href="../mariabonita/cardapio/index.php" class="menu-btn">Cardápio</a></li>
            <li><a href="../Carrinho/index.html" class="menu-btn"><i class="fas fa-shopping-cart"></i> Carrinho</a></li>
            <li><a href="../mariabonita/logout.php" class="menu-btn">Sair</a></li>
        </ul>
    <?php
    } else {
    ?>
        <ul class="menu">
            <li><a href="../mariabonita/home.php#home" class="menu-btn">Home</a></li>
            <li><a href="../mariabonita/home.php#about" class="menu-btn">Sobre</a></li>
            <li><a href="../mariabonita/home.php#services" class="menu-btn">Serviços</a></li>
            <li><a href="../mariabonita/home.php#time" class="menu-btn">Horários</a></li>
            <li><a href="../mariabonita/cardapio/index.php" class="menu-btn">Cardápio</a></li>
            <li><a href="../Carrinho/index.html" class="menu-btn"><i class="fas fa-shopping-cart"></i> Carrinho</a></li>
            <li><a href="../mariabonita/logout.php" class="menu-btn">Sair</a></li>
        </ul>

<?php
    }

?>