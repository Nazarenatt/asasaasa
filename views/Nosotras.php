<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotras</title>
    <link rel="stylesheet" href="../public/css/styles_us.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
<header class="header">
        <a href="home.php" class="logo">
            <img src="../public/icons/logo.png" alt="logo">
            <h1>Neko-chan</h1>
        </a>
        

        <nav class="navbar">
            <a href="home.php">Inicio</a>
            <a href="Nosotras.php">Nosotras</a>
            <a href="Productos.php">Productos</a>
            <a href="Comentarios.php">Comentarios</a>
            <a href="Consultas.php">Consultas</a>
        </nav>

        <div class="icons">
            <a href="../controllers/cerrarSesion.php"><div class="fa-solid fa-user"></div></a>
            
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-shopping-cart" id="search-btn"></div>
            <div class="fas fa-bars" id="menu-btn"></div>
        </div>
    </header>
    
    <main>
        <h1>Nosotras</h1>
        <div class="us">          
                    <div class="image">
                        <img src="../public/img/Nosotros.jpg" alt="Nosotros"> 
                    </div>
                
                    <div class="content">
                        <h1>Sobre nuestra tienda</h1>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus praesentium aliquam natus quae porro at. Eligendi dicta debitis dolore, adipisci magni molestias rerum eveniet, vero consequatur ipsam amet culpa error</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum placeat voluptates magni, molestias iste labore a perspiciatis, quae quod autem atque expedita aperiam aspernatur obcaecati adipisci tenetur debitis illum suscipit!</p>
                    </div>
            </div>

            <div class="us">          
                    <div class="content">
                        <h1>Comienzos</h1>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus praesentium aliquam natus quae porro at. Eligendi dicta debitis dolore, adipisci magni molestias rerum eveniet, vero consequatur ipsam amet culpa error</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum placeat voluptates magni, molestias iste labore a perspiciatis, quae quod autem atque expedita aperiam aspernatur obcaecati adipisci tenetur debitis illum suscipit!</p>
                    </div>

                    <div class="image">
                        <img src="../public/img/Nosotros_2.jpg" alt="Nosotros"> 
                    </div>
            </div>

            <div class="us">          
                    <div class="image">
                        <img src="../public/img/Nosotros_3.jpg" alt="Nosotros"> 
                    </div>
                
                    <div class="content">
                        <h1>Que nos inspiro</h1>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus praesentium aliquam natus quae porro at. Eligendi dicta debitis dolore, adipisci magni molestias rerum eveniet, vero consequatur ipsam amet culpa error</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum placeat voluptates magni, molestias iste labore a perspiciatis, quae quod autem atque expedita aperiam aspernatur obcaecati adipisci tenetur debitis illum suscipit!</p>
                    </div>
            </div>

    </main>
    <footer>
        <div class="container-footer-all">
            <div class="container-body">
                <div class="colum1">
                    <h1>Más información.</h1>
                    <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem autem, ipsa consequatur modi esse dignissimos ex minus aspernatur totam aperiam eveniet iure veritatis molestiae! Harum praesentium dicta repudiandae ipsa quam.
                    </p>
                </div>

                <div class="colum2">
                    <h1>Redes sociales</h1>

                    <div class="row1">
                        <img src="../public/icons/facebook.png">
                        <label>Siguenos en Facebook</label>
                    </div>

                    <div class="row1">
                        <img src="../public/icons/instagram.png">
                        <label>Siguenos en Instagram</label>
                    </div>

                    <div class="row1">
                        <img src="../public/icons/twitter.png">
                        <label>Siguenos en Twitter</label>
                    </div>

                    <div class="row1">
                        <img src="../public/icons/youtube.png">
                        <label>Siguenos en Youtube</label>
                    </div>

                </div>
            
                <div class="colum3">
                    <h1>Informacion Contactos</h1>

                    <div class="row2">
                        <img src="../public/icons/casa.png">
                        <label>Argentina, Santa Cruz. Rio Gallegos</label>
                    </div>

                    <div class="row2">
                        <img src="../public/icons/telefono.png">
                        <label>+52-2966112233</label>
                    </div>

                    <div class="row2">
                        <img src="../public/icons/email.png">
                        <label>ejemplo123@hotmail.com</label>
                    </div>
                </div>
            </div>

        </div>


        <div class="container-footer">
            <div class="footer">
                <div class="copyright">© 2023 Todos los derechos reservados |<a href="#"> Neko chan</a>
                </div>

                <div class="information">
                    <a href="">Informacion Compañia |</a>
                    <a href="">Privacion y Politica |</a>
                    <a href="">Terminos y Condiciones</a> 
                </div>
            </div>
        </div>

    </footer>

    <div id="cookies-1" class="cookies-1 activo">
        <div class="container">
            <div class="subcontainer">
                <div class="cookies">
                    <p>Utilizamos cookies propias y de terceros para obtener datos estadísticos de la navegación de nuestros usuarios y mejorar nuestros servicios. Si acepta o continúa navegando, consideramos que acepta su uso. Más información <a href="cookies.html">aquí.</a></p>
                    <button class="button" id="cookies-btn">Acepto</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>