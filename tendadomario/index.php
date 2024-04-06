<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mario Store</title>
    <link rel="stylesheet" href="estilos/index.css">
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
                <li><a class="rojo" href="#MAPIENSE">Mapa</a></li>
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
                    <li><a class="hideOnmobile" href="#MAPIENSE" id="rojo">Mapa</a></li>
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


    <section class="MenuMario" id="MenuMario">


        <div class="MenuMario-content container">

            <h2>Menu</h2>
            <p class="txt-p">
                ¡Catalogo variado de comidas, bebidas y dulces!
            </p>

            <div class="MenuMario-group">

                <div class="MenuMario-1">
                    <img src="images/m1.png" alt="">
                    <h3>Bebidas</h3>
                    <p>
                        Variedad de bebidas tanto naturales como gaseosas, coca cola, pepsi, agua, etc
                    </p>
                </div>
                <div class="MenuMario-2">
                    <img src="images/m2.png" alt="">
                    <h3>Comidas</h3>
                    <p>
                        ¡Pancho, empanadas, papas fritas, sandwiches, entre otros!
                    </p>
                </div>
                <div class="MenuMario-3">
                    <img src="images/m3.png" alt="">
                    <h3>Dulces</h3>
                    <p>
                        ¡Variedad de golosinas, chiles, alfajores y galletitas como las oreo, oreo triologia, papitas, etc!
                    </p>
                </div>

            </div>
            <a href="productos.php" class="btn-1">Productos</a>
        </div>

    </section>

<section class="map" id="MAPIENSE">

    <div class="map-content container">

            <div class="map-group">

                <div class="mapa">
                    <h2>¿Donde encontrarnos?</h2>
                    <iframe class="frameMapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.5621916840423!2d-58.371293387899!3d-34.61523075799483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a334d5bb05f51f%3A0xb576ef80da87d69b!2sEscuela%20T%C3%A9cnica%20Otto%20Krause!5e0!3m2!1ses-419!2sar!4v1711859211336!5m2!1ses-419!2sar" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <p>
                        El comedor y Mario!
                     </p>
                </div>

            </div>
            
    </div>
</section>

<section class="general">

<div class="general-1">
    <h2>Lorem ipsum dolor </h2>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam est nostrum explicabo odit, dicta vitae harum aspernatu
        r error dolorum veniam dolore impedit eligendi pariatur nisi id ea saepe quis debitis?
    </p>
</div>
<div class="general-2"></div>

</section>

<section class="general">

    <div class="general-3"></div>

    <div class="general-1">
            <h2>Lorem ipsum dolor </h2>
            <p>
             Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam est nostrum explicabo odit, dicta vitae harum aspernatu
             r error dolorum veniam dolore impedit eligendi pariatur nisi id ea saepe quis debitis?
             </p>
        </div>
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

</body>
</html>