<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mis Trabajos Anteriores</title>
    <style>
        /* Estilos básicos para el blog */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Encabezado con menú de navegación */
        header {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline-block;
            margin-right: 15px;
        }

        nav ul li a {
            text-decoration: none;
            color: white;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        /* Sección principal con tarjetas horizontales */
        main {
            padding: 20px;
            display: flex;
            flex-direction: column; /* Tarjetas en columna */
            gap: 20px; /* Espacio entre tarjetas */
        }

        .card {
            border: 1px solid #ddd; /* Bordes para la tarjeta */
            padding: 15px;
            transition: box-shadow 0.3s; /* Efecto de transición */
            border-radius: 5px; /* Bordes redondeados */
            overflow: hidden; /* Evitar que el contenido se desborde */
            display: flex; /* Usar diseño flexible */
            align-items: center; /* Alinear elementos verticalmente */
        }

        .card img {
            width: 450px; /* Ancho fijo para la imagen */
            height: 450px; /* Altura fija para la imagen */
            border-radius: 5px; /* Bordes redondeados para la imagen */
            margin-right: 20px; /* Espacio entre la imagen y el texto */
        }

        .card:hover {
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1); /* Efecto de sombra al pasar el cursor */
        }

        .card h3 {
            margin: 0; /* Sin espacio adicional */
            font-size: 1.5em; /* Aumentar el tamaño del título */
        }

        .card p {
            margin: 5px 0 0; /* Espacio entre el título y el contenido */
        }

        /* Pie de página con información de contacto y redes sociales */
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
        }

        .social-media a {
            margin: 0 10px;
            text-decoration: none;
            color: white;
        }

        .social-media a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- Encabezado con el nombre del blog y el menú de navegación -->
    <header>
        <h1>Mis Trabajos Anteriores</h1>
        <nav>
            <ul>
                <li><a href="http://localhost/cristian/public/">Inicio</a></li>
                <li><a href="http://localhost/cristian/public/ruta_1">Sobre mí</a></li>
                <li><a href="http://localhost/cristian/public/ruta_2">Trabajos</a></li>
                <li><a href="http://localhost/cristian/public/ruta_3">Conocimientos</a></li>
                <li><a href="http://localhost/cristian/public/ruta_4">Proyectos trabajo</a></li>
                <li><a href="http://localhost/cristian/public/ruta_5">Proyectos personales</a></li>
            </ul>
        </nav>
    </header>

    <!-- Sección principal con tarjetas horizontales -->
    <main>
        <div class="card">
            <img src="https://img.freepik.com/fotos-premium/ingeniero-que-trabaja-portatil-desmontado_279525-6100.jpg?size=626&ext=jpg" alt="Imagen del trabajo 1">
            <div>
                <h3>Reparacion de laptop y pc</h3>
                <h4>Empresa: TecnologiaSupernova</h4>
                <p>Fue mi primer trabajo que realise en una empresa no fue exactamente de porgramacion pero fue <br> un trabajo en el que aprendi mucho sobre la parte de hardware de las laptops y pcs y tambien <br> saque algunos coocimientos ma sd eprogramacion como por ejemplo en HTML, CSS, y PHP.</p>
            </div>
        </div>

        <div class="card">
            <img src="https://img.freepik.com/foto-gratis/retrato-programador-afroamericano-computacion-nube-linea-computadora-portatil-sentada-escritorio-multiples-pantallas-codigo-analisis-vista-sobre-hombro-desarrollador-aplicaciones-que-trabaja-interfaz-usuario_482257-37333.jpg?size=626&ext=jpg&ga=GA1.2.581049999.1714065612&semt=sph" alt="Imagen del trabajo 2">
            <div>
                <h3>Desarrollo de sowftware</h3>
                <h4>Empresa: SuperTec</h4>
                <p>El trabajo que realise en esta empresa fue el desarrollo d epaginas web en donde aprendi mas sobre el backend de las paginas web y <br> fue en la primera empresa uqe gane dinero como tambien me adentre mas en el mundo de la programacion me gusto mucho esta 
               <br> empresa por el echo de que me junte con ma sprogramadores y compartimos distintas y deas y nos ayudabamos mutuamente.</p>
            </div>
        </div>

        <div class="card">
            <img src="https://img.freepik.com/fotos-premium/desarrollo-programadores-desarrollo-tecnologias-diseno-codificacion-sitios-web_18497-1019.jpg?size=626&ext=jpg&ga=GA1.1.581049999.1714065612&semt=sph" alt="Imagen del trabajo 3">
            <div>
                <h3>Trabajo remto en desarrollo de sowftware</h3>
                <h4>TecnologiaSC</h4>
                <p>Es el primer trabajo remoto que tuve fue increible lo distinto que se trabaja en comparacion con <br> empresas pequeñas y tube mas labores y aprendi mucho sobre base de datos y con los <br> conocimentos obtenidos pude desarrollar trabajos propios para otros clientes.</p>
            </div>
        </div>

        <div class="card">
            <img src="https://news.microsoft.com/wp-content/uploads/2016/04/Microsoft-Design-workspaces_neighborhood.jpg" alt="Imagen del trabajo 4">
            <div>
                <h3>Microsoft</h3>
                <p>Seme dio la oportunidad para trabajar para microsoft y decidi viajar a una sucursalq ue tenian en mi pais me parecio muy emocionante y novedoso las cosas que tenian y como trabajaban. Empese a adentrarme mas en la empresa y desarrolle mas mis conocimientos.</p>
            </div>
        </div>
    </main>

    <!-- Pie de página con información de contacto y redes sociales -->
    <footer>
        <p>© 2024 Mis Trabajos Anteriores. Todos los derechos reservados.</p>
        <p>Contacto: cristianramirebravo@gmail.com</p>
        <div class="social-media">
            <a href="#facebook">Facebook</a>
            <a href="https://pe.linkedin.com/r">LinkedIn</a>
            <a href="https://github.com/">GitHub</a>
        </div>
    </footer>
</body>
</html>
