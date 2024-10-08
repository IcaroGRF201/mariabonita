<?php
include($_SERVER['DOCUMENT_ROOT'] . '/mariabonita/valida_login.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maria Bonita - Administração</title>
    <link rel="stylesheet" href="css/admin.css">
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
                <a href="../mariabonita/home.php">
                    <img src="img/logo.png">
                </a>
            </div>
            <div class="menu">
                <ul class="menu">
                    <li><a href="home.php#home" class="menu-btn">Home</a></li>
                </ul>
                <ul class="adm">
                    <li>
                        <a class="menu-btn" id="admin-btn">Administração
                            <svg xmlns="http://www.w3.org/2000/svg" height="12" viewBox="0 0 512 512">
                                <path fill="#f0f0f0" d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" />
                            </svg>
                        </a>
                        <div id="admin-options" class="submenu">
                            <a href="admin.php#clientes" class="menu-btn">Clientes</a>
                            <a href="admin.php#pedidos" class="menu-btn">Pedidos</a>
                            <a href="admin.php#contato" class="menu-btn">Contato</a>
                            <a href="admin.php#pratos" class="menu-btn">Pratos</a>
                        </div>
                    </li>
                </ul>
                <ul class="menu">
                    <li><a href="index.php#about" class="menu-btn">Sobre</a></li>
                    <li><a href="index.php#services" class="menu-btn">Serviços</a></li>
                    <li><a href="index.php#time" class="menu-btn">Horários</a></li>
                    <li><a href="cardapio/cardapio.php" class="menu-btn">Cardápio</a></li>
                    <li><a href="../Carrinho/index.html" class="menu-btn"><i class="fas fa-shopping-cart"></i> Carrinho</a></li>
                    <li><a href="../mariabonita/logout.php" class="menu-btn">Sair</a></li>
                </ul>
                <div class="menu-cart">
                    <a href="../Carrinho/index.html"><i class="fas fa-shopping-cart"></i><span id="cont-cart"></span></a>
                </div>
            </div>

        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">

                <img class="config" src="img/config.png">

                <div class="text-2">
                    Administração

                </div>

                <br><br>

                <div class="text-3">Bem vindo, <?php include "nome.php" ?></div>

                <a href="../contato/index.html">Ver Cardápio</a>
            </div>
        </div>
        <div class="arrow">
            <a href="#clientes"><span class="material-symbols-sharp">south</span></a>
        </div>
    </section>


    <!-- clientes section start -->
    <section class="clientes" id="clientes">
        <div class="max-width">
            <h2 class="title">Clientes cadastrados</h2>
            <div class="clientes-content">
                <?php
                $conectar = mysqli_connect("localhost", "root", "", "mariabonita");

                $sql_pesquisa = "SELECT
										idclientes,
                                        nome,
										usuario
								 FROM   clientes";

                $sql_resultado = mysqli_query($conectar, $sql_pesquisa);
                ?>

                <table width="100%" border=1>
                    <tr height="50px">
                        <td>
                            ID DO CLIENTE
                        </td>

                        <td>
                            NOME
                        </td>

                        <td>
                            USUARIO
                        </td>

                    </tr>
                    <?php
                    while ($registro = mysqli_fetch_row($sql_resultado)) {
                    ?>
                        <tr height="50px">
                            <td>

                                <?php echo $registro[0]; ?>
                                </a>
                            </td>
                            <td>
                                <?php echo $registro[1]; ?>
                            </td>

                            <td>
                                <?php echo $registro[2]; ?>
                            </td>

                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
        </div>
    </section>

    <!-- pedidos section start -->
    <section class="pedidos" id="pedidos">
        <div class="max-width">
            <h2 class="title">Nossos Serviços</h2>
            <h4 class="subtitle">Pedir um delivery fica fácil com apenas 3 passos</h4>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fab fa-whatsapp"></i>
                        <div class="text">Faça seu pedido</div>
                        <p>É muito simples, vá até o cardápio, escolha seu pedido e nos envie a mensagem por whatsapp.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-truck"></i>
                        <div class="text">Nós entregamos</div>
                        <p>Agora é só esperar a entrega chegar e pagar, garantimos uma entrega rápida de 40 minutos.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-hamburger"></i>
                        <div class="text">Aproveite seu lanche</div>
                        <p>O ultimo e melhor passo é apreciar o seu lanche no conforto do lar. <br> Bon appétit!</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- skills section start -->
    <section class="skills" id="contato">
        <div class="max-width">
            <h2 class="title">Horários</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">Horários de Atendimento.</div>
                    <p>Nós da Paladare atendemos durante a noite, somos uma ótima opção para quem quer um jantar surpreendente ou até mesmo um delicioso lanche durante a noite.<br>Você pode optar pela nossa loja física ou pelo delivery, garantimos uma entrega rápida entre 40 à 50 minutos.<br>Nossos horários durante a semana são das 18:30 às 22:30. Já nos finais de semana são das 18:30 às 23:30</p>
                    <a href="../contato/index.html">Ver Cardápio</a>
                </div>
                <div class="column right">
                    <img src="../images/HorarioDeAtendimento3.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="pratos" id="pratos">
        <div class="max-width">
            <h2 class="title">Pratos</h2>
            <h4 class="subtitle">Edite o seu cardápio com apenas 3 passos</h4>
            <div class="pratos-content">
                <a class="card" href="cardapio/cadastra_prato.php">
                    <div class="box">
                        <i class="fas fa-plus"></i>
                        <div class="text" style="color:#fff">Adicionar um prato</div>
                        <p style="color:#fff">Clique aqui e adicione um prato para o cardápio.</p>
                    </div>
                </a>

                <a class="card" href="cardapio/altera_cardapio.php">
                    <div class="box">
                        <i class="fas fa-pen"></i>
                        <div class="text" style="color:#fff">Alterar um prato</div>
                        <p style="color:#fff">Clique aqui e modifique o seu prato do jeito que prefirir.</p>
                    </div>
                </a>
                <a class="card" href="cardapio/excluir_prato.php">
                    <div class="box">
                        <i class="fas fa-trash"></i>
                        <div class="text" style="color:#fff">Remover um prato</div>
                        <p style="color:#fff">Clique aqui é exclua o prato que você prefirir.</p>
                    </div>
                </a>
            </div>
        </div>
        </div>
    </section>


    <!-- footer section start -->
    <footer>
        <span>Criado por <a href="https://github.com/HenriqueEstanislau">Henrique Estanislau</a> | <span class="far fa-copyright"></span> 2021 Todos os direitos reservados.</span>
    </footer>

    <script src="js/home.js"></script>
</body>

</html>