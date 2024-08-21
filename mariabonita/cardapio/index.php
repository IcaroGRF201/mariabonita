<?php
session_start();
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
    <style>
        .menucardapio_segunda {
            max-width: 600px;
            margin: 0 auto;
            background-color: #3e733b;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .menucardapio_segunda h1 {
            text-align: center;
            color: #fff;
        }
        .menucardapio_segunda h2 {
            text-align: center;
            color: #fff;
        }
        .menucardapio_segunda-item {
            margin-bottom: 15px;
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }
        .menucardapio_segunda-item:last-child {
            border-bottom: none;
        }
        .item_segunda-name {
            font-size: 18px;
            font-weight: bold;
            color: #fff;
        }
        .item_segunda-price {
            font-size: 16px;
            color: #e67e22;
            font-weight: bold;
        }
        .menucardapio_terca {
            max-width: 600px;
            margin: 0 auto;
            background-color: #3e733b;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .menucardapio_terca h1 {
            text-align: center;
            color: #fff;
        }
        .menucardapio_terca h2 {
            text-align: center;
            color: #fff;
        }
        .menucardapio_terca-item {
            margin-bottom: 15px;
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }
        .menucardapio_terca-item:last-child {
            border-bottom: none;
        }
        .item_terca-name {
            font-size: 18px;
            font-weight: bold;
            color: #fff;
        }
        .item_terca-price {
            font-size: 16px;
            color: #e67e22;
            font-weight: bold;
        }
        .menucardapio_quarta {
            max-width: 600px;
            margin: 0 auto;
            background-color: #3e733b;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .menucardapio_quarta h1 {
            text-align: center;
            color: #fff;
        }
        .menucardapio_quarta h2 {
            text-align: center;
            color: #fff;
        }
        .menucardapio_quarta-item {
            margin-bottom: 15px;
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }
        .menucardapio_quarta-item:last-child {
            border-bottom: none;
        }
        .item_quarta-name {
            font-size: 18px;
            font-weight: bold;
            color: #fff;
        }
        .item_quarta-price {
            font-size: 16px;
            color: #e67e22;
            font-weight: bold;
        }
        .menucardapio_quinta {
            max-width: 600px;
            margin: 0 auto;
            background-color: #3e733b;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .menucardapio_quinta h1 {
            text-align: center;
            color: #fff;
        }
        .menucardapio_quinta h2 {
            text-align: center;
            color: #fff;
        }
        .menucardapio_quinta-item {
            margin-bottom: 15px;
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }
        .menucardapio_quinta-item:last-child {
            border-bottom: none;
        }
        .item_quinta-name {
            font-size: 18px;
            font-weight: bold;
            color: #fff;
        }
        .item_quinta-price {
            font-size: 16px;
            color: #e67e22;
            font-weight: bold;
        }
        .menucardapio_sexta {
            max-width: 600px;
            margin: 0 auto;
            background-color: #3e733b;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .menucardapio_sexta h1 {
            text-align: center;
            color: #fff;
        }
        .menucardapio_sexta h2 {
            text-align: center;
            color: #fff;
        }
        .menucardapio_sexta-item {
            margin-bottom: 15px;
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }
        .menucardapio_sexta-item:last-child {
            border-bottom: none;
        }
        .item_sexta-name {
            font-size: 18px;
            font-weight: bold;
            color: #fff;
        }
        .item_sexta-price {
            font-size: 16px;
            color: #e67e22;
            font-weight: bold;
        }
        .menucardapio_sabado {
            max-width: 600px;
            margin: 0 auto;
            background-color: #3e733b;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .menucardapio_sabado h1 {
            text-align: center;
            color: #fff;
        }
        .menucardapio_sabado h2 {
            text-align: center;
            color: #fff;
        }
        .menucardapio_sabado-item {
            margin-bottom: 15px;
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }
        .menucardapio_sabado-item:last-child {
            border-bottom: none;
        }
        .item_sabado-name {
            font-size: 18px;
            font-weight: bold;
            color: #fff;
        }
        .item_sabado-price {
            font-size: 16px;
            color: #e67e22;
            font-weight: bold;
        }
    </style>
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
                <li><a href="../home.php#home" class="menu-btn">Home</a></li>
                <li><a href="../home.php#about" class="menu-btn">Sobre</a></li>
                <li><a href="../home.php#services" class="menu-btn">Serviços</a></li>
                <li><a href="../home.php#time" class="menu-btn">Horários</a></li>
                <li><a href="../cardapio/index.php" class="menu-btn">Cardápio</a></li>
                <li><a href="../Carrinho/index.html" class="menu-btn"><i class="fas fa-shopping-cart"></i> Carrinho</a></li>
                <li><a href="../logout.php" class="menu-btn">Sair</a></li>
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

        <div id="segunda" class="menu-dia" style="display:none;">
            <h2>Cardápio de Segunda-feira</h2>
            <div class="menucardapio_segunda">
                <h1>Cardápio</h1>
                <h2>Segunda Feira</h2>
                <?php
                    $menucardapio_segunda_items = [
                    [
                        "name" => "Strogonoff",
                        "price" => 0
                    ],
                    [
                        "name" => "Churrasco",
                        "price" => 0
                    ],
                    [
                        "name" => "Frango Assado",
                        "price" => 0
                    ],
                    [
                        "name" => "Frango ao Molho",
                        "price" => 0
                    ],
                    [ 
                        "name" => "Linguiça",
                        "price" => 0
                    ]
                    ];
                foreach ($menucardapio_segunda_items as $item) {
                    echo "<div class='menucardapio_segunda-item'>";
                    echo "<div class='item_segunda-name'>{$item['name']}</div>";
                    echo "<div class='item_segunda-price'>R$ " . number_format($item['price'], 2, ',', '.') . "</div>";
                    echo "</div>";
                }
                ?>
            </div>
            <!-- Conteúdo do cardápio de segunda -->
             
        </div>
        <div id="terca" class="menu-dia" style="display:none;">
            <h2>Cardápio de Terça-feira</h2>
            <!-- Conteúdo do cardápio de terça -->
            <div class="menucardapio_terca">
                <h1>Cardápio</h1>
                <h2>Terça Feira</h2>
                <?php
    $menucardapio_terca_items = [
        [
            "name" => "Mocotó",
            "price" => 0
        ],
        [
            "name" => "Churrasco",
            "price" => 0
        ],
        [
            "name" => "Frango Assado",
            "price" => 0
        ],
        [
            "name" => "Costela",
            "price" => 0
        ],
        [ 
            "name" => "Dobradinha",
            "price" => 0
        ],
        [
            "name" => "Fígado",
            "price" => 0
        ]
                ];
                foreach ($menucardapio_terca_items as $item) {
                    echo "<div class='menucardapio_terca-item'>";
                    echo "<div class='item_terca-name'>{$item['name']}</div>";
                    echo "<div class='item_terca-price'>R$ " . number_format($item['price'], 2, ',', '.') . "</div>";
                    echo "</div>";
                }
                ?>
            </div>
        </div>
        <div id="quarta" class="menu-dia" style="display:none;">
            <h2>Cardápio de Quarta-feira</h2>
            <!-- Conteúdo do cardápio de quarta -->
            <div class="menucardapio_quarta">
    <h1>Cardápio</h1>
    <h2>Quarta Feira</h2>
    <?php
    $menucardapio_quarta_items = [
        [
            "name" => "Churrasco",
            "price" => 0
        ],
        [
            "name" => "Frango Assado",
            "price" => 0
        ],
        [
            "name" => "Frango ao Molho",
            "price" => 0
        ],
        [
            "name" => "Peixe Frito",
            "price" => 0
        ],
        [ 
            "name" => "File de Frango Empanado",
            "price" => 0
        ]
    ];
    foreach ($menucardapio_quarta_items as $item) {
        echo "<div class='menucardapio_quarta-item'>";
        echo "<div class='item_quarta-name'>{$item['name']}</div>";
        echo "<div class='item_quarta-price'>R$ " . number_format($item['price'], 2, ',', '.') . "</div>";
        echo "</div>";
    }
    ?>
</div>
        </div>
        <div id="quinta" class="menu-dia" style="display:none;">
            <h2>Cardápio de Quinta-feira</h2>
            <!-- Conteúdo do cardápio de quinta -->
            <div class="menucardapio_quinta">
    <h1>Cardápio</h1>
    <h2>Quinta Feira</h2>
    <?php
    $menucardapio_quinta_items = [
        [
            "name" => "Pernil Frito",
            "price" => 0
        ],
        [
            "name" => "Churrasco",
            "price" => 0
        ],
        [
            "name" => "Frango Assado",
            "price" => 0
        ],
        [
            "name" => "Costela",
            "price" => 0
        ]
    ];
    foreach ($menucardapio_quinta_items as $item) {
        echo "<div class='menucardapio_quinta-item'>";
        echo "<div class='item_quinta-name'>{$item['name']}</div>";
        echo "<div class='item_quinta-price'>R$ " . number_format($item['price'], 2, ',', '.') . "</div>";
        echo "</div>";
    }
    ?>
</div>
        </div>
        <div id="sexta" class="menu-dia" style="display:none;">
            <h2>Cardápio de Sexta-feira</h2>
            <!-- Conteúdo do cardápio de sexta -->
            <div class="menucardapio_sexta">
    <h1>Cardápio</h1>
    <h2>Sexta Feira</h2>
    <?php
    $menucardapio_sexta_items = [
        [
            "name" => "Frango ao Molho",
            "price" => 0
        ],
        [
            "name" => "Churrasco",
            "price" => 0
        ],
        [
            "name" => "Frango Assado",
            "price" => 0
        ],
        [
            "name" => "Feijoada",
            "price" => 0
        ],
        [
            "name" => "Pernil",
            "price" => 0
        ]
    ];
    foreach ($menucardapio_sexta_items as $item) {
        echo "<div class='menucardapio_sexta-item'>";
        echo "<div class='item_sexta-name'>{$item['name']}</div>";
        echo "<div class='item_sexta-price'>R$ " . number_format($item['price'], 2, ',', '.') . "</div>";
        echo "</div>";
    }
    ?>
</div>
        </div>
        <div id="sabado" class="menu-dia" style="display:none;">
            <h2>Cardápio de Sábado</h2>
            <!-- Conteúdo do cardápio de sábado -->
            <div class="menucardapio_sabado">
    <h1>Cardápio</h1>
    <h2>Sabado</h2>
    <?php
    $menucardapio_sabado_items = [
        [
            "name" => "Churrasco",
            "price" => 0
        ],
        [
            "name" => "Frango Assado",
            "price" => 0
        ],
        [
            "name" => "Costela",
            "price" => 0
        ]
    ];
    foreach ($menucardapio_sabado_items as $item) {
        echo "<div class='menucardapio_sabado-item'>";
        echo "<div class='item_sabado-name'>{$item['name']}</div>";
        echo "<div class='item_sabado-price'>R$ " . number_format($item['price'], 2, ',', '.') . "</div>";
        echo "</div>";
    }
    ?>
</div>
        </div>
    </section>

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