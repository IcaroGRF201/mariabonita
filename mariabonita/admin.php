<?php
session_start();
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
            <ul class="menu">
                <li><a href="index.php" class="menu-btn">Sair</a></li>
                <li><a href="home.php" class="menu-btn">Home</a></li>
                <li><a href="admin.php" class="menu-btn">Administração</a></li>
                <li><a href="#about" class="menu-btn">Clientes</a></li>
                <li><a href="#services services1" class="menu-btn">Pedidos</a></li>
                <li><a href="cardapio.php" class="menu-btn">Cardapio</a></li>
                <li><a href="#services services2" class="menu-btn">Contato</a></li>
            </ul>
            <div class="menu-cart">
                <a href="../Carrinho/index.html"><i class="fas fa-shopping-cart"></i><span id="cont-cart"></span></a>
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

                <div class="text-3">Bem vindo, <?php include "valida_login.php" ?></div>

                <a href="cardapio.php">Ver Cardápio</a>
            </div>
        </div>
        <div class="arrow">
            <a href="#about"><span class="material-symbols-sharp">south</span></a>
        </div>
    </section>


    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">Sobre nós</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="../mariabonita/img/wallpaper.png" alt="">
                </div>
                <div class="column right">
                    <div class="text">Olá nos somos a Paladare</div>
                    <p>Aqui no Paladare nós oferecemos os melhores lanches artesanais da região, com excelente qualidade e te convidamos para experimentar.
                        Nós queremos preparar os melhores lanches para os nosso clientes, trazendo alta qualidade e sabor, oferecendo o melhor da casa.
                        Delicie-se e aproveite. Pegue uma bebida e acima de tudo, relaxe!
                        Agradecemos por sua preferência.
                    </p>
                    <a href="#">História</a>
                </div>
            </div>
        </div>
    </section>

    <!-- services section start -->
    <section class="services services1" id="services services1">
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
    <section class="skills" id="time">
        <div class="max-width">
            <h2 class="title">Horários</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">Horários de Atendimento.</div>
                    <p>Nós da Paladare atendemos durante a noite, somos uma ótima opção para quem quer um jantar surpreendente ou até mesmo um delicioso lanche durante a noite.<br>Você pode optar pela nossa loja física ou pelo delivery, garantimos uma entrega rápida entre 40 à 50 minutos.<br>Nossos horários durante a semana são das 18:30 às 22:30. Já nos finais de semana são das 18:30 às 23:30</p>
                    <a href="cardapio.php">Ver Cardápio</a>
                </div>
                <div class="column right">
                    <img src="../images/HorarioDeAtendimento3.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="services services2" id="services services2">
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


    <!-- footer section start -->
    <footer>
        <span>Criado por <a href="https://github.com/HenriqueEstanislau">Henrique Estanislau</a> | <span class="far fa-copyright"></span> 2021 Todos os direitos reservados.</span>
    </footer>

    <script src="js/home.js"></script>
</body>

</html>