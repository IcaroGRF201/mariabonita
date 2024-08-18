<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maria Bonita Cardapio</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="shortcut icon" href="../images/favicon.ico" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="icon" href="img/icon.png" type="image/png">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .menucardapio_segunda {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .menucardapio_segunda h1 {
            text-align: center;
            color: #333;
        }
        .menucardapio_segunda h2 {
            text-align: center;
            color: #333;
        }
        .menucardapio_segunda-item {
            margin-bottom: 15px;
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }
        .menucardapio_segunda-item:last-child {
            border-bottom: none;
        }
        .item-name {
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }
        .item-description {
            font-size: 14px;
            color: #666;
        }
        .item-price {
            font-size: 16px;
            color: #e67e22;
            font-weight: bold;
        }
        .menucardapio_terca {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .menucardapio_terca h1 {
            text-align: center;
            color: #333;
        }
        .menucardapio_terca h2 {
            text-align: center;
            color: #333;
        }
        .menucardapio_terca-item {
            margin-bottom: 15px;
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }
        .menucardapio_terca-item:last-child {
            border-bottom: none;
        }
        .item-name {
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }
        .item-description {
            font-size: 14px;
            color: #666;
        }
        .item-price {
            font-size: 16px;
            color: #e67e22;
            font-weight: bold;
        }
        .menucardapio_quarta {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .menucardapio_quarta h1 {
            text-align: center;
            color: #333;
        }
        .menucardapio_quarta h2 {
            text-align: center;
            color: #333;
        }
        .menucardapio_quarta-item {
            margin-bottom: 15px;
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }
        .menucardapio_quarta-item:last-child {
            border-bottom: none;
        }
        .item-name {
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }
        .item-description {
            font-size: 14px;
            color: #666;
        }
        .item-price {
            font-size: 16px;
            color: #e67e22;
            font-weight: bold;
        }
        .menucardapio_quinta {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .menucardapio_quinta h1 {
            text-align: center;
            color: #333;
        }
        .menucardapio_quinta h2 {
            text-align: center;
            color: #333;
        }
        .menucardapio_quinta-item {
            margin-bottom: 15px;
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }
        .menucardapio_quinta-item:last-child {
            border-bottom: none;
        }
        .item-name {
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }
        .item-description {
            font-size: 14px;
            color: #666;
        }
        .item-price {
            font-size: 16px;
            color: #e67e22;
            font-weight: bold;
        }
        .menucardapio_sexta {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .menucardapio_sexta h1 {
            text-align: center;
            color: #333;
        }
        .menucardapio_sexta h2 {
            text-align: center;
            color: #333;
        }
        .menucardapio_sexta-item {
            margin-bottom: 15px;
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }
        .menucardapio_sexta-item:last-child {
            border-bottom: none;
        }
        .item-name {
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }
        .item-description {
            font-size: 14px;
            color: #666;
        }
        .item-price {
            font-size: 16px;
            color: #e67e22;
            font-weight: bold;
        }
        .menucardapio_sabado {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .menucardapio_sabado h1 {
            text-align: center;
            color: #333;
        }
        .menucardapio_sabado h2 {
            text-align: center;
            color: #333;
        }
        .menucardapio_sabado-item {
            margin-bottom: 15px;
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }
        .menucardapio_sabado-item:last-child {
            border-bottom: none;
        }
        .item-name {
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }
        .item-description {
            font-size: 14px;
            color: #666;
        }
        .item-price {
            font-size: 16px;
            color: #e67e22;
            font-weight: bold;
        }
        
    </style>
</head>
<body>
    
<div class="menucardapio_segunda">
    <h1>Cardápio</h1>
    <h2>Segunda Feira</h2>
    <?php
    $menucardapio_segunda_items = [
        [
            "name" => "Strogonoff",
        ],
        [
            "name" => "Churrasco",
        ],
        [
            "name" => "Frango Assado",
        ],
        [
            "name" => "Frango ao Molho",
        ],
        [ 
            "name" => "Linguiça",
        ]
    ];
    foreach ($menucardapio_segunda_items as $item) {
        echo "<div class='menucardapio_segunda-item'>";
        echo "<div class='item-name'>{$item['name']}</div>";
        
        echo "</div>";
    }
    ?>
</div>
<div class="menucardapio_terca">
    <h1>Cardápio</h1>
    <h2>Terça Feira</h2>
    <?php
    $menucardapio_terca_items = [
        [
            "name" => "Mocotó",
        ],
        [
            "name" => "Churrasco",
        ],
        [
            "name" => "Frango Assado",
        ],
        [
            "name" => "Costela",
        ],
        [ 
            "name" => "Dobradinha",
        ],
        [
            "name" => "Fígado",
        ]
    ];
    foreach ($menucardapio_terca_items as $item) {
        echo "<div class='menucardapio_terca-item'>";
        echo "<div class='item-name'>{$item['name']}</div>";
        
        echo "</div>";
    }
    ?>
</div>
<div class="menucardapio_quarta">
    <h1>Cardápio</h1>
    <h2>Quarta Feira</h2>
    <?php
    $menucardapio_quarta_items = [
        [
            "name" => "Churrasco",
        ],
        [
            "name" => "Frango Assado",
        ],
        [
            "name" => "Frango ao Molho",
        ],
        [
            "name" => "Peixe Frito",
        ],
        [ 
            "name" => "File de Frango Empanado",
        ]
    ];
    foreach ($menucardapio_quarta_items as $item) {
        echo "<div class='menucardapio_quarta-item'>";
        echo "<div class='item-name'>{$item['name']}</div>";
        
        echo "</div>";
    }
    ?>
</div>
<div class="menucardapio_quinta">
    <h1>Cardápio</h1>
    <h2>Quinta Feira</h2>
    <?php
    $menucardapio_quinta_items = [
        [
            "name" => "Pernil Frito",
        ],
        [
            "name" => "Churrasco",
        ],
        [
            "name" => "Frango Assado",
        ],
        [
            "name" => "Costela",
        ]
    ];
    foreach ($menucardapio_quinta_items as $item) {
        echo "<div class='menucardapio_quinta-item'>";
        echo "<div class='item-name'>{$item['name']}</div>";
        
        echo "</div>";
    }
    ?>
</div>
<div class="menucardapio_sexta">
    <h1>Cardápio</h1>
    <h2>Sexta Feira</h2>
    <?php
    $menucardapio_sexta_items = [
        [
            "name" => "Frango ao Molho",
        ],
        [
            "name" => "Churrasco",
        ],
        [
            "name" => "Frango Assado",
        ],
        [
            "name" => "Feijoada",
        ],
        [
            "name" => "Pernil",
        ]
    ];
    foreach ($menucardapio_sexta_items as $item) {
        echo "<div class='menucardapio_sexta-item'>";
        echo "<div class='item-name'>{$item['name']}</div>";
        
        echo "</div>";
    }
    ?>
</div>
<div class="menucardapio_sabado">
    <h1>Cardápio</h1>
    <h2>Sabado</h2>
    <?php
    $menucardapio_sabado_items = [
        [
            "name" => "Churrasco",
        ],
        [
            "name" => "Frango Assado",
        ],
        [
            "name" => "Costela",
        ]
    ];
    foreach ($menucardapio_sabado_items as $item) {
        echo "<div class='menucardapio_sabado-item'>";
        echo "<div class='item-name'>{$item['name']}</div>";
        
        echo "</div>";
    }
    ?>
</div>
</body>
</html>