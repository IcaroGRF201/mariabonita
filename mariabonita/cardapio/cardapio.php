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
                <a href="../index.php">
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
                        <li><a href="../index.php" class="menu-btn">Administração</a></li>
                        <li><a href="../index.php#about" class="menu-btn">Sobre</a></li>
                        <li><a href="../index.php#services" class="menu-btn">Serviços</a></li>
                        <li><a href="../index.php#time" class="menu-btn">Horários</a></li>
                        <li><a href="../cardapio/cardapio.php" class="menu-btn">Cardápio</a></li>
                        <li><a href="../Carrinho/index.html" class="menu-btn"><i class="fas fa-shopping-cart"></i> Carrinho</a></li>
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
                        <li><a href="../cardapio/cardapio.php" class="menu-btn">Cardápio</a></li>
                        <li><a href="../Carrinho/index.html" class="menu-btn"><i class="fas fa-shopping-cart"></i> Carrinho</a></li>
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
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-2"><img src="../img/cacto.png">Cardápio</div>
                <br><br>
                <div class="text-3">Monte o seu prato ideal!</div>
            </div>
        </div>
        <div class="arrow">
            <a href="#about"><span class="material-symbols-sharp">south</span></a>
        </div>
    </section>

    <section class="about" id="about">
        <h1>Escolha o cardápio do dia</h1><br>
        <div class="container">

            <button class="calendario" onclick="showMenu('segunda', this)">Segunda</button>
            <button class="calendario" onclick="showMenu('terca', this)">Terça</button>
            <button class="calendario" onclick="showMenu('quarta', this)">Quarta</button>
            <button class="calendario" onclick="showMenu('quinta', this)">Quinta</button>
            <button class="calendario" onclick="showMenu('sexta', this)">Sexta</button>
            <button class="calendario" onclick="showMenu('sabado', this)">Sábado</button>

        </div>

        <?php
        $conectar = mysqli_connect("localhost", "root", "", "mariabonita");
        ?>

        <div id="segunda" class="menu-dia" style="display:none;">

            <!-- Conteúdo do cardápio de segunda -->

            <?php
            $sql_consulta = "SELECT 
                        nome, 
                        descricao, 
                        idpratos,
                        foto,
                        preco
                    FROM 
                        pratos
                    WHERE 
                        diaSemana = 'segunda';";
            $resultado_consulta = mysqli_query($conectar, $sql_consulta);
            ?>

            <div class="cardapio-container">
                <?php
                while ($registro = mysqli_fetch_row($resultado_consulta)) {
                    echo "<button class='cardapio-item' style='border:none;' onclick='abrirModal($registro[2])'>";
                    echo "  <img src='$registro[3]' alt='$registro[0]'>";
                    echo "  <div class='cardapio-title'>$registro[0]</div>";
                    echo "  <div class='cardapio-description'>$registro[1]</div>";
                    echo "</button>";

                    // Modal structure
                    echo "<div id='modal_$registro[2]' class='modal'>";
                    echo "  <div class='modal-content'>";
                    echo "      <div class='left-content'>";
                    echo "          <img src='$registro[3]' alt='$registro[0]' >";
                    echo "      </div>";
                    echo "      <div class='right-content'>";
                    echo "          <span class='close' onclick='fecharModal($registro[2])'>&times;</span><br>";
                    echo "          <h2>$registro[0]</h2>";
                    echo "          <p>Acompanhamentos:</p><br>";

                    $itens = explode(", ", $registro[1]);


                    echo "          <form class='acompanhamentos' action='carrinho.php' method='post'>";
                    foreach ($itens as $item):
                        echo "                  <label>";
                        echo "                      <input type='checkbox' name='descricao[]' value='$item' checked>&nbsp;";
                        echo                        $item;
                        echo "                  </label><br>";
                    endforeach;
                    echo "<br><br>";
                    echo "              <p>Valor:</p>";
                    echo "              <h3>R$ $registro[4],00</h3>";
                    echo "              <button class='cta-button'>Adicionar ao carrinho</button>";
                    echo "          </form>";
                    echo "      </div>";
                    echo "  </div>";
                    echo "</div>";
                }
                ?>
            </div>

        </div>
        <div id="terca" class="menu-dia" style="display:none;">
            <!-- Conteúdo do cardápio de terça -->

            <?php


            $sql_consulta1 = "SELECT 
            
                                            nome, 
                                           
                                          descricao, 
                                            
                                          foto
                                           
                       FROM 
                                           pratos
                    WHERE                diaSemana = 'terca';";
            $resultado_consulta1 = mysqli_query($conectar, $sql_consulta1);
            ?>

            <div class="cardapio-container">
                <?php
                while ($registro1 = mysqli_fetch_row($resultado_consulta1)) {
                    echo "<div class='cardapio-item'>";
                    echo "  <img src='$registro1[2]' alt='$registro1[0]'>";
                    echo "  <div class='cardapio-title'>$registro1[0]</div>";
                    echo "  <div class='cardapio-description'>$registro1[1]</div>";
                    echo "</div>";
                }
                ?>
            </div>

        </div>
        <div id="quarta" class="menu-dia" style="display:none;">
            <!-- Conteúdo do cardápio de quarta -->

            <?php


            $sql_consulta1 = "SELECT 
            
                                            nome, 
                                           
                                          descricao, 
                                            
                                          foto
                                           
                       FROM 
                                           pratos
                    WHERE                diaSemana = 'quarta';";
            $resultado_consulta1 = mysqli_query($conectar, $sql_consulta1);
            ?>

            <div class="cardapio-container">
                <?php
                while ($registro1 = mysqli_fetch_row($resultado_consulta1)) {
                    echo "<div class='cardapio-item'>";
                    echo "  <img src='$registro1[2]' alt='$registro1[0]'>";
                    echo "  <div class='cardapio-title'>$registro1[0]</div>";
                    echo "  <div class='cardapio-description'>$registro1[1]</div>";
                    echo "</div>";
                }
                ?>
            </div>
        </div>
        <div id="quinta" class="menu-dia" style="display:none;">
            <!-- Conteúdo do cardápio de quinta -->

            <?php


            $sql_consulta1 = "SELECT 
            
                                            nome, 
                                           
                                          descricao, 
                                            
                                          foto
                                           
                       FROM 
                                           pratos
                    WHERE                diaSemana = 'quinta';";
            $resultado_consulta1 = mysqli_query($conectar, $sql_consulta1);
            ?>

            <div class="cardapio-container">
                <?php
                while ($registro1 = mysqli_fetch_row($resultado_consulta1)) {
                    echo "<div class='cardapio-item'>";
                    echo "  <img src='$registro1[2]' alt='$registro1[0]'>";
                    echo "  <div class='cardapio-title'>$registro1[0]</div>";
                    echo "  <div class='cardapio-description'>$registro1[1]</div>";
                    echo "</div>";
                }
                ?>
            </div>
        </div>
        <div id="sexta" class="menu-dia" style="display:none;">
            <!-- Conteúdo do cardápio de sexta -->

            <?php


            $sql_consulta1 = "SELECT 
            
                                            nome, 
                                           
                                          descricao, 
                                            
                                          foto
                                           
                       FROM 
                                           pratos
                    WHERE                diaSemana = 'sexta';";
            $resultado_consulta1 = mysqli_query($conectar, $sql_consulta1);
            ?>

            <div class="cardapio-container">
                <?php
                while ($registro1 = mysqli_fetch_row($resultado_consulta1)) {
                    echo "<div class='cardapio-item'>";
                    echo "  <img src='$registro1[2]' alt='$registro1[0]'>";
                    echo "  <div class='cardapio-title'>$registro1[0]</div>";
                    echo "  <div class='cardapio-description'>$registro1[1]</div>";
                    echo "</div>";
                }
                ?>
            </div>
        </div>
        <div id="sabado" class="menu-dia" style="display:none;">
            <!-- Conteúdo do cardápio de sábado -->

            <?php


            $sql_consulta1 = "SELECT 
            
                                            nome, 
                                           
                                          descricao, 
                                            
                                          foto
                                           
                       FROM 
                                           pratos
                    WHERE                diaSemana = 'sabado';";
            $resultado_consulta1 = mysqli_query($conectar, $sql_consulta1);
            ?>

            <div class="cardapio-container">
                <?php
                while ($registro1 = mysqli_fetch_row($resultado_consulta1)) {
                    echo "<div class='cardapio-item'>";
                    echo "  <img src='$registro1[2]' alt='$registro1[0]'>";
                    echo "  <div class='cardapio-title'>$registro1[0]</div>";
                    echo "  <div class='cardapio-description'>$registro1[1]</div>";
                    echo "</div>";
                }
                ?>
            </div>
        </div>
    </section>

    <section class="about bebidas" id="about bebidas" style="background-color:#111;">
        <h1>Bebidas</h1><br>
        <div class="container">

            <button class="calendario" onclick="showMenu('refri', that)">Refrigerantes</button>
            <button class="calendario" onclick="showMenu('suco', that)">Sucos</button>

            <div id="refri" class="menu-bebida" style="display:none;">

            </div>

            <div id="suco" class="menu-bebida" style="display:none;">

            </div>

        </div>
    </section>

    <script>
        function abrirModal(id) {
            var modal = document.getElementById('modal_' + id);
            modal.style.display = "block";
        }

        function fecharModal(id) {
            var modal = document.getElementById('modal_' + id);
            modal.style.display = "none";
        }

        // Fecha o modal se clicar fora dele
        window.onclick = function(event) {
            var modals = document.getElementsByClassName('modal');
            for (var i = 0; i < modals.length; i++) {
                if (event.target == modals[i]) {
                    modals[i].style.display = "none";
                }
            }
        }
    </script>

    <script>
        function showMenu(dia, elemento) {
            // Esconde todas as seções de menu
            var menus = document.getElementsByClassName('menu-dia');
            for (var i = 0; i < menus.length; i++) {
                menus[i].style.display = 'none';
            }

            // Exibe a seção correspondente ao dia selecionado
            document.getElementById(dia).style.display = 'block';

            // Remove a classe 'selected' de todos os botões
            var botoes = document.getElementsByClassName('calendario');
            for (var i = 0; i < botoes.length; i++) {
                botoes[i].classList.remove('selected');
            }

            // Adiciona a classe 'selected' ao botão clicado
            elemento.classList.add('selected');
        }

        // Detecta o dia da semana atual e exibe o menu correspondente
        window.onload = function() {
            var diasDaSemana = ['segunda', 'segunda', 'terca', 'quarta', 'quinta', 'sexta', 'sabado'];
            var hoje = new Date().getDay(); // Retorna um número entre 0 (domingo) e 6 (sábado)
            var diaAtual = diasDaSemana[hoje];

            // Encontra o botão correspondente ao dia atual
            var botoes = document.getElementsByClassName('calendario');
            for (var i = 0; i < botoes.length; i++) {
                if (botoes[i].textContent.toLowerCase().includes(diaAtual)) {
                    showMenu(diaAtual, botoes[i]);
                    break;
                }
            }
        }
    </script>


    <script src="../js/home.js"></script>
</body>

</html>