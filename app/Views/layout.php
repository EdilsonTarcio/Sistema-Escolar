<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>CodeIgniter 4 Auth Video</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <!-- Bootstrap core CSS     -->
    <link href="css/bootstrap4.min.css" rel="stylesheet" />

    <!--  Light Bootstrap Table core CSS    -->
    <link href="css/light-bootstrap-dashboard2.css?v=2.0.1" rel="stylesheet"/>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="green">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper" style="background-color: #40535B; ">
                <div class="logo">
                    <img src="img/logo.png" />
                </div>
                <ul class="nav">
                    <li class="active">
                        <a class="nav-link" href="#">
                            <i class="nc-icon nc-app"></i>
                            <p>Inicio</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Clientes</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#">
                            <i class="nc-icon nc-money-coins"></i>
                            <p>Financeiro</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#">
                            <i class="nc-icon nc-settings-90"></i>
                            <p>Configurações</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#">
                            <i class="nc-icon nc-badge"></i>
                            <p>Usuários</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class=" container-fluid  ">
                    <a class="navbar-brand" href="#">{TITULO DA PAGINA}</a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="no-icon">{NOME DO USUARIO}</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Meus Dados</a>
                                    <a class="dropdown-item" href="#">Alterar Senha</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/logout">
                                    <span class="no-icon">Sair</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <!-- inicio do $contents -->
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <h2>Página Admin/Home</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body table-responsive table-full-width" style="font-size: 14px;">
                                        
                                </div>
                                <!-- fim do $contents -->                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container">
                    <nav>
                        <p class="copyright text-center">
                            2022 - yotube.com/rafaelpinheiro
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="js/popper.min.js" type="text/javascript"></script>
<script src="js/bootstrap4.min.js" type="text/javascript"></script>
<script src="js/light-bootstrap-dashboard2.js?v=2.0.1"></script>

<script type="text/javascript">
$(document).ready(function() {
    $('dropdown').dropdown();
});
</script>
</html>