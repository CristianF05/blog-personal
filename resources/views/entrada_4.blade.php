<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mi Blog Personal</title>
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

        /* Sección principal con tarjetas */
        main {
            padding: 20px;
            display: flex;
            flex-wrap: wrap; /* Permitir que las tarjetas se ajusten */
            justify-content: space-between; /* Espaciado entre tarjetas */
        }

        .card {
            border: 1px solid #ddd; /* Bordes para la tarjeta */
            padding: 15px;
            margin-bottom: 20px;
            width: 30%; /* Ancho de cada tarjeta */
            transition: box-shadow 0.3s; /* Efecto de transición */
            text-align: center; /* Centrar el contenido de la tarjeta */
            border-radius: 5px; /* Bordes redondeados para la tarjeta */
            overflow: hidden; /* Asegurar que la imagen no se desborde */
        }

        .card img {
            width: 100%; /* Ajustar el ancho de la imagen */
            height: auto;
        }

        .card:hover {
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1); /* Efecto de sombra al pasar el cursor */
        }

        .card h3 {
            margin-top: 10px; /* Espacio entre la imagen y el título */
        }

        .card p {
            margin-top: 10px; /* Espacio entre el título y el contenido */
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
        <h1>Mi Blog Personal</h1>
        <nav>
        <ul>
                <li><a href="http://localhost/cristian/public/">Inicio</a></li>
                <li><a href="http://localhost/cristian/public/ruta_1">Sobre mí</a></li>
                <li><a href="http://localhost/cristian/public/ruta_2">Trabajos</a></li>
                <li><a href="http://localhost/cristian/public/ruta_3">Conocimientos</a></li>
                <li><a href="http://localhost/cristian/public/ruta_4">Proyectos trabajo</a></li>
                <li><a href="http://localhost/cristian/public/ruta_5">Proyectos Personales</a></li>
            </ul>
        </nav>
    </header>

    <!-- Sección principal con tarjetas -->
    <main>
        <div class="card">
            <img src="https://via.placeholder.com/200" alt="Imagen de la tarjeta 1">
            <h3>Título de la Tarjeta 1</h3>
            <p>Descripción breve de la tarjeta 1...</p>
        </div>

        <div class="card">
            <img src="https://via.placeholder.com/200" alt="Imagen de la tarjeta 2">
            <h3>Título de la Tarjeta 2</h3>
            <p>Descripción breve de la tarjeta 2...</p>
        </div>

        <div class="card">
            <img src="https://via.placeholder.com/200" alt="Imagen de la tarjeta 3">
            <h3>Título de la Tarjeta 3</h3>
            <p>Descripción breve de la tarjeta 3...</p>
        </div>

        <div class="card">
            <img src="https://via.placeholder.com/200" alt="Imagen de la tarjeta 4">
            <h3>Título de la Tarjeta 4</h3>
            <p>Descripción breve de la tarjeta 4...</p>
        </div>

        <div class="card">
            <img src="https://via.placeholder.com/200" alt="Imagen de la tarjeta 5">
            <h3>Título de la Tarjeta 5</h3>
            <p>Descripción breve de la tarjeta 5...</p>
        </div>

        <div class="card">
            <img src="https://via.placeholder.com/200" alt="Imagen de la tarjeta 6">
            <h3>Título de la Tarjeta 6</h3>
            <p>Descripción breve de la tarjeta 6...</p>
        </div>
    </main>

    <!-- Pie de página con información de contacto y redes sociales -->
    <footer>
        <p>© 2024 Mi Blog Personal. Todos los derechos reservados.</p>
        <p>Contacto: cristianramirebravo@gmail.com</p>
        <div class="social-media">
            <a href="#facebook">Facebook</a>
            <a href="https://pe.linkedin.com/r">LinkedIn</a>
            <a href="https://github.com/">GitHub</a>
        </div>
    </footer>
</body>
</html>
