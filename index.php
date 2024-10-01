<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Sistema Comercial</title>
</head>
<body>
    <!-- < Sidebar -->
    <section id="sidebar">
        <a href="#" class="brand"><i class='bx bxs-user-pin'></i> Administrador</a>
        <ul class="side-menu">
            <li><a href="index.php"><i class='bx bxs-dashboard'></i> Inicio</a></li>
            <li class="divider"><i class="fa-solid fa-house"></i> Gestor</li>
            <li><a href="#"><i class="fa-solid fa-users"></i> Clientes</a></li>
            <li>
                <a href="#"><i class='bx bx-store-alt' ></i> Productos <i class='bx bx-right-arrow-alt'></i></a>
                <ul class="side-dropdown">
                    <li><a href="">Pan</a></li>
                    <li><a href="">Pan Hamburgesa</a></li>
                    <li><a href="">Pan Pancho</a></li>
                    <li><a href="">Papas Quento</a></li>
                </ul>
            </li>
            <li><a href="#"><i class="fa-solid fa-users-gear"></i> Vendedores</a></li>
            <li class="divider"><i class="fa-solid fa-truck"></i> Control de Pedidos</li>
            <li>
                <a href="#"><i class="fa-regular fa-clipboard"></i> Pedidos <i class='bx bx-right-arrow-alt'></i></a>
                <ul class="side-dropdown">
                    <li><a href="#">Crear Pedido</a></li>
                    <li><a href="#">Pedidos Armados</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- / Sidebar > -->

    <!-- Navbar and Content section -->
    <section id="content">
        <nav>
            <i class="bx bx-menu toggle-sidebar"></i>
            <form action="#">
                <div class="form-group">
                    <input type="text" placeholder="Buscar..." name="search">
                    <i class="bx bx-search"></i>
                </div>
            </form>
            <span class="divider"></span>
            <a href="#" class="nav-link">
                <i class="bx bxs-bell icon"></i>
                <span class="badge">0</span>
            </a>
            <div class="profile">
                <img class="profile-img" src="./assets/img/chico.png" alt="foto-perfil">
                <ul class="profile-link">
                    <li><a href="#"><i class="bx bxs-user-circle icon"></i> Perfil</a></li>
                    <li><a href="#"><i class="fa-solid fa-gear"></i> Configuracion</a></li>
                    <li><a href="#"><i class="fa-solid fa-power-off"></i> Cerrar Sesion</a></li>
                </ul>
            </div>
        </nav>
        <section class="section-cards">
            <h3><i class='bx bxs-dashboard'></i> Inicio | Datos Generales</h3>
            <div class="content-cards">
                <!-- cards -->
                <div class="card">
                    <div class="card-content">
                        <h2>Vendedores</h2>
                        <span><i class="fa-solid fa-box-archive"></i> 2</span>
                    </div>
                    <div class="card-content">
                        <i class="fa-solid fa-users-gear icon-v"></i>
                    </div>
                </div>
                <!-- cards -->
                <div class="card">
                    <div class="card-content">
                        <h2>Clientes</h2>
                        <span><i class="fa-solid fa-box-archive"></i> 26</span>
                    </div>
                    <div class="card-content">
                        <i class="fa-solid fa-users icon-x"></i>
                    </div>
                </div>
                <!-- cards -->
                <div class="card">
                    <div class="card-content">
                        <h2>Productos</h2>
                        <span><i class="fa-solid fa-box-archive"></i> 11</span>
                    </div>
                    <div class="card-content">
                        <i class='bx bx-store-alt icon-p' ></i> 
                    </div>
                </div>
                <!-- cards -->
                <div class="card">
                    <div class="card-content">
                        <h2>Pedidos</h2>
                        <span><i class="fa-solid fa-box-archive"></i> 18</span>
                    </div>
                    <div class="card-content">
                        <i class="fa-regular fa-clipboard icon-b"></i>
                    </div>
                </div>
            </div>
        </section>

        <div class="content-orders">
            <h2>Ultimo Pedido Tomado</h2>
            <div class="box-orders">
                <h4>Informacion del Cliente</h4>
                <div class="orders-content">
                    <p>Nombre: Julia</p>
                    <p>Apellido: Martinez</p>
                    <p>Direccion: buenos aires GBA</p>
                    <p>Telefono: +54 11 2868-5488</p>
                    <p>Monto Total: $120.000</p>
                    <span>Fecha: 1/10/2024</span>
                </div>
                <a href="#">Ver Pedido Del Cliente</a>
            </div>
        </div>

        <section class="content-grafic">
                <?php require_once "./grafica.php"?>
        </section>

        <footer class='autor-copyright'>
            <div class='bar'></div>
            <p>&copy;<b> Sistema Comercial / Nahuel Alexander Coronel</b></p>
        </footer>

    </section>

    <script src="https://kit.fontawesome.com/591b1de1f6.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="./assets/js/index.js"></script>
</body>
</html>