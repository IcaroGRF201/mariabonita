<?php
include($_SERVER['DOCUMENT_ROOT'] . '/mariabonita/valida_login.php');

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maria Bonita</title>
    <link rel="stylesheet" href="../css/home.css">
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
                <a href="../mariabonita/index.php">
                    <img src="../img/logo.png">
                </a>
            </div>
            <div class="menu">

                <ul class="menu">
                    <li><a href="../index.php#home" class="menu-btn">Home</a></li>
                </ul>
                <ul class="adm">
                    <li><a href="../admin.php" class="menu-btn">Administração</a></li>
                </ul>
                <ul class="menu">
                    <li><a href="../index.php#about" class="menu-btn">Sobre</a></li>
                    <li><a href="../index.php#services" class="menu-btn">Serviços</a></li>
                    <li><a href="../index.php#time" class="menu-btn">Horários</a></li>
                    <li><a href="cardapio.php" class="menu-btn">Cardápio</a></li>
                    <li><a href="../Carrinho/index.html" class="menu-btn"><i class="fas fa-shopping-cart"></i> Carrinho</a></li>
                    <li><a href="../logout.php" class="menu-btn">Sair</a></li>
                </ul>

            </div>
            <div class="menu-cart">
                <a href="../Carrinho/index.html"><i class="fas fa-shopping-cart"></i><span id="cont-cart"></span></a>
            </div>
        </div>
    </nav>
    <section class="services" id="services" style="background-color: #fcf9f4; color:#111">
        <h1 align="center" style="color:#3e733b;">Adicionar Prato</h1>
        <form method="post" action="processa_cadastra_prato.php" enctype="multipart/form-data" onsubmit="return validarEntrada();">
            <div class="topo">
                <div class="esquerda">
                    Dia da Semana: <br><select name="dia">
                        <option value="segunda"> Segunda </option>
                        <option value="terça"> Terça </option>
                        <option value="quarta"> Quarta </option>
                        <option value="quinta"> Quinta </option>
                        <option value="sexta"> Sexta </option>
                        <option value="sabado"> Sábado </option>
                    </select>
                </div>

                <div class="direita">
                    Escolha uma foto <br>
                    <label for="fileInput" class="custom-file-label">Selecionar Arquivo</label>
                    <input type="file" id="fileInput" name="foto" accept="image/*">
                </div>

            </div>

            <div class="cardapio-container">


                <div class='cardapio-item2'>
                    <div id="previewContainer">
                        <img id="preview" src="" alt="Pré-visualização da imagem">
                    </div>
                    <div class='cardapio-title' style='color:#111;'>
                        Nome:<input type="text" name="nome" placeholder="Ex: Churrasco" required>
                    </div>
                    <div class="input-container">

                        <div class='cardapio-title'>
                            Preço:<input type="text" name="preco" placeholder="Ex: 17" required>
                        </div>

                        <div class='cardapio-title'>
                            Descrição:<input type="text" name="descricao" id="descricao" placeholder="Ex: Arroz, Feijão, Salada, Macarrão, Farofa" required>
                        </div>

                        <div id="alerta" class="custom-alert">
                            <span class="custom-alert-icon">!</span>
                            <span id="alerta-mensagem">Preencha este campo.</span>
                        </div>

                        <button class='cardapio-altera'>
                            Criar
                        </button>
                    </div>

                </div>
        </form>


    </section>

    <script>
        function validarEntrada() {
            const input = document.getElementById("descricao").value;
            const alerta = document.getElementById("alerta");
            const alertaMensagem = document.getElementById("alerta-mensagem");

            const regex = /^([a-zA-Z]+, )*[a-zA-Z]+$/;

            if (regex.test(input)) {
                alerta.style.display = "none";
                return true;
            } else {
                alertaMensagem.textContent = "Por favor, insira uma lista de palavras separadas por uma vírgula e um espaço.";
                alerta.style.display = "block";
                return false;
            }
        }
    </script>

    <script>
        document.getElementById('fileInput').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const preview = document.getElementById('preview');
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                };
                reader.readAsDataURL(file);
            }
        });
    </script>

</body>

</html>