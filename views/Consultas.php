<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas</title>
    <link rel="stylesheet" href="../public/css/styles_consult.css">
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
        <h1>Consultas</h1>
            <section>
                <div class="contact-container">
                    <div class="form-container">
                        <h3>Contactanos</h3>
                        <form action="" class="contact-form">
                            <input type="text" placeholder="Nombre" required>
                            <input type="email" name="" id="" placeholder="Email" required>
                            <textarea name="" id="" cols="30" placeholder="Escribe un mensaje..." rows="10" required></textarea>
                            <input type="submit" value="Enviar" class="send-button">
                        </form>
                    </div>

                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d66165.27581462973!2d-69.32923107541475!3d-51.628707577608616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xbdb6f952b21c66e5%3A0xab7c41f247647102!2sR%C3%ADo%20Gallegos%2C%20Santa%20Cruz!5e0!3m2!1ses!2sar!4v1687395777777!5m2!1ses!2sar" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </section>

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