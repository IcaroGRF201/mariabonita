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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>

<body style="background-color: #111;">

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

    <section class="services" id="services">
        <?php
        $conectar = mysqli_connect("localhost", "root", "", "mariabonita");
        $cod = $_GET["codigo"];

        $sql_pesquisa = "SELECT 
									    	nome,
                                            descricao,
                                            diaSemana
                                            

									 FROM pratos
                                     WHERE idpratos = '$cod'";
        $resultado_pesquisa = mysqli_query($conectar, $sql_pesquisa);

        $registro = mysqli_fetch_row($resultado_pesquisa);
        ?>
        <form method="post" id="formAltera" action="processa_altera_cardapio.php" onsubmit="return validarEntrada();">
            <input type="hidden" name="codigo" value="<?php echo $cod; ?>">

            <div class="topo">
                <div class="esquerda">
                    Dia da Semana: <br><select name="dia">
                        <option value="segunda"
                            <?php
                            if ($registro[2] == "segunda") {
                                echo "selected";
                            }
                            ?>> Segunda </option>
                        <option value="terca"
                            <?php
                            if ($registro[2] == "terca") {
                                echo "selected";
                            }
                            ?>> Terça </option>
                        <option value="quarta"
                            <?php
                            if ($registro[2] == "quarta") {
                                echo "selected";
                            }
                            ?>> Quarta </option>
                        <option value="quinta"
                            <?php
                            if ($registro[2] == "quinta") {
                                echo "selected";
                            }
                            ?>> Quinta </option>
                        <option value="sexta"
                            <?php
                            if ($registro[2] == "sexta") {
                                echo "selected";
                            }
                            ?>> Sexta </option>
                        <option value="sabado"
                            <?php
                            if ($registro[2] == "sabado") {
                                echo "selected";
                            }
                            ?>> Sábado </option>
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
                        Nome do prato:<input type="text" name="nome" required
                            value="<?php echo "$registro[0]"; ?>">
                    </div>
                    <div class='cardapio-description'>
                        Descrição:<input type="text" name="descricao" id="descricao" required
                            value="<?php echo "$registro[1]"; ?>">
                    </div>

                    <div id="alerta" class="custom-alert">
                        <span class="custom-alert-icon">!</span>
                        <span id="alerta-mensagem">Preencha este campo.</span>
                    </div>
                    <button class='cardapio-altera'>
                        Alterar
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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../js/app.js"></script>

</body>

</html>