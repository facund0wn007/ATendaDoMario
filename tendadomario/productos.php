<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estilos/productos.css">
    
    <title>Tenda do Mario | </title>
</head>
<body>
    <header class="header" id="MARIOSTORE">
        <div class="menu container">
            <ul class="sidebar">
                <div class="logo">
                    <img src="images/c1.png" alt="imagen-logo">
                    <h2 class="blanco">Otto</h2>
                    <h2 class="rojo">Krause</h2>
                </div>
                <li onclick=hideSidebar() ><a class="sidebarbig2" href="#"><svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 -960 960 960" width="30"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
                <li><a class="blanco" href="index.php">Inicio</a></li>
                <li><a class="rojo" href="productos.php">Productos</a></li>
                <li><a class="blanco" href="https://www.instagram.com/mario_store_krause/">Contacto</a></li>
                <li><a class="rojo" href="index.php#MAPIENSE">Mapa</a></li>
            </ul>
            <nav class="navbar">
                <ul>
                    <div class="logo">
                        <img src="images/c1.png" alt="imagen-logo">
                        <h2 class="blanco">Otto</h2>
                        <h2 class="rojo">Krause</h2>
                    </div>
                    <li><a class="hideOnmobile"  href="index.php" id="blanco">Inicio</a></li>
                    <li><a class="hideOnmobile" href="productos.php" id="rojo">Productos</a></li>
                    <li><a class="hideOnmobile" href="https://www.instagram.com/mario_store_krause/" id="blanco" >Contacto</a></li>
                    <li><a class="hideOnmobile" href="index.php#MAPIENSE" id="rojo">Mapa</a></li>
                    <li onclick=showSidebar()><a class="sidebarbig" href="#"><svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 -960 960 960" width="30"><path d="M100.782-212.303v-106.001h758.436v106.001H100.782Zm0-214.696v-106.002h758.436v106.002H100.782Zm0-214.697v-106.001h758.436v106.001H100.782Z"/></svg></a></li>
                </ul>
            </nav>

            <script>
                function showSidebar(){
                    const sidebar = document.querySelector('.sidebar')
                    sidebar.style.display = 'flex'
                }
                function hideSidebar(){
                    const sidebar = document.querySelector('.sidebar')
                    sidebar.style.display = 'none'
                }
            </script>

        </div>

        <div class="header-content container">

            <h1>Mario Store</h1>
            <p>
                Wasaaaaa
            </p>
            <a href="#MenuMario" class="btn-1">Information</a>
        </div>
    </header>
    
    <section class="subtitulo">
        <h1>Produtos</h1>
    </section>
    <section class="buscadorContainer">
        <input type="text" name="buscador" id="buscador" placeholder="Buscar...">
        <div id="selectorContainer">
            <select id="selector">
                <option value="1">A</option>
                <option value="2">B</option>
                <option value="3">C</option>
            </select>
        </div>
    </section>
    
    <section class="contenedor">
        <!-- Contenedor de elementos -->
                <div class="contenedor-items ">
                <?php
                $cnx = mysqli_connect("localhost","root","","Tienda");
                $sql = "select * from productos";
                $rta = mysqli_query($cnx,$sql);

                while($mostrar = mysqli_fetch_row($rta)){
                    ?>
                    <div class="item">
                        <span class="titulo-item"><?php echo $mostrar['1']?></span>
                        <img src="data:image/jpg;base64,<?php echo base64_encode($mostrar['4']);?>" alt="" class="img-item">
                        <div class="desc-item"><?php echo $mostrar['2']?></div>
                        <span class="precio-item"><?php echo $mostrar['3']?>$</span>
                        <button class="boton-item">Agregar al Carrito</button>
                    </div>
                    <?php
                }
                ?>
                </div>
        <!-- Carrito de Compras -->
        <section class="carrito filtro" id="carrito">
        <div>
            <div class="header-carrito">
                <h2>Tu Carrito</h2>
            </div>

            <div class="carrito-items">
                <!-- 
                <div class="carrito-item">
                    <img src="img/boxengasse.png" width="80px" alt="">
                    <div class="carrito-item-detalles">
                        <span class="carrito-item-titulo">Box Engasse</span>
                        <div class="selector-cantidad">
                            <i class="fa-solid fa-minus restar-cantidad"></i>
                            <input type="text" value="1" class="carrito-item-cantidad" disabled>
                            <i class="fa-solid fa-plus sumar-cantidad"></i>
                        </div>
                        <span class="carrito-item-precio">$15.000,00</span>
                    </div>
                   <span class="btn-eliminar">
                        <i class="fa-solid fa-trash"></i>
                   </span>
                </div>
                <div class="carrito-item">
                    <img src="img/skinglam.png" width="80px" alt="">
                    <div class="carrito-item-detalles">
                        <span class="carrito-item-titulo">Skin Glam</span>
                        <div class="selector-cantidad">
                            <i class="fa-solid fa-minus restar-cantidad"></i>
                            <input type="text" value="3" class="carrito-item-cantidad" disabled>
                            <i class="fa-solid fa-plus sumar-cantidad"></i>
                        </div>
                        <span class="carrito-item-precio">$18.000,00</span>
                    </div>
                   <button class="btn-eliminar">
                        <i class="fa-solid fa-trash"></i>
                   </button>
                </div>
                 -->
            </div>
            <div class="carrito-total">
                <div class="fila">
                    <strong>Tu Total</strong>
                    <span class="carrito-precio-total">
                        $120.000,00
                    </span>
                </div>
                <button class="btn-pagar">Pagar <i class="fa-solid fa-bag-shopping"></i> </button>
            </div>
        </div>
        </section>
    </section>
    <footer class="footer">

        <div class="footer-content container">

            <div class="link">

                <h3>Integrantes</h3>

                   <h2>Adrian De Sousa</h2>
                   <h2>Facundo Soto</h2>
                   <h2>Michael torrico</h2>
                   <h2>Gian Esparragoza</h2>
                   <h2>Tomi jejejejej</h2>
            </div>
            <div class="link">

                <h3>Curso</h3>

                   <h2>Computacion 5*2</h2>
                   <h2>Computacion 5*2</h2>
                   <h2>Computacion 5*2</h2>
                   <h2>Computacion 5*2</h2>
                   <h2>Computacion 5*2</h2>
            </div>
            <div class="link">

                <h3>Just Mario</h3>

                   <h2>Mario</h2>
                   <h2>Mario</h2>
                   <h2>Mario</h2>
                   <h2>Mario</h2>
                   <h2>Mario</h2>
            </div>

        </div>
    </footer>
    <script src="productos.js" async></script>
</body>
</html>