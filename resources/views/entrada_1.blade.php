<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Blog Personal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            color: #ccc; /* Color gris claro para un tono profesional */
            transition: color 0.3s; /* Animación para el cambio de color */
        }

        nav ul li a:hover {
            color: #ff6600; /* Cambia a un tono naranja al pasar el cursor */
        }

        /* Estilo para el cuerpo del blog */
        main {
    padding: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
    min-height: 100vh; /* Añadir altura mínima para dejar espacio para el pie de página */
}

        /* Artículos del blog */
        article {
            border: 1px solid #ddd; /* Bordes para cada artículo */
            padding: 15px; /* Espacio interno */
            transition: box-shadow 0.3s; /* Efecto de transición */
            text-align: center; /* Centrar el contenido del artículo */
            width: 80%; /* Asegurar que el ancho sea consistente */
            max-width: 900px; /* Limitar el ancho máximo del artículo */
            margin-bottom: 20px; /* Añadir espacio entre los artículos */
        }

        /* Artículo con imagen y texto */
        .with-image {
            display: flex; /* Flexbox para el contenedor del artículo */
            flex-direction: column; /* Colocar la imagen antes del texto */
            align-items: center; /* Centrar la imagen y el texto */
        }

        .article-image {
            width: 300px; /* Tamaño de la imagen */
            height: auto;
            margin-bottom: 15px; /* Espacio entre la imagen y el texto */
            border-radius: 400px; /* Bordes redondeados para la imagen */
        }

        /* Pie de página con enlaces de redes sociales */
        footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 20px;
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
}

        .social-media a {
            margin: 0 10px;
            text-decoration: none;
            color: white;
            transition: text-decoration 0.3s;
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
                <li><a href="http://localhost/cristian/public/ruta_4">Proyectos</a></li>
                <li><a href="http://localhost/cristian/public/ruta_5">Blog</a></li>
            </ul>
        </nav>
    </header>

    <!-- Sección del blog -->
    <main>
        <!-- Artículo con imagen y texto -->
        <article class="with-image">
            <img src="https://cdn.pixabay.com/photo/2023/11/21/13/29/ai-generated-8403410_640.jpg" alt="Imagen relacionada con el blog" class="article-image">
            <div class="article-content">
                <h3>Información</h3>
                <p>Hola, mi nombre es Cristian. Soy un desarrollador de software especializado en inteligencia artificial. Soy bueno trabajando en equipo y he trabajado en diferentes tipos de proyectos. Los lenguajes que más domino son Java, Python, PHP y JavaScript, y también tengo conocimientos de inglés técnico. Me gustaría trabajar con ustedes para seguir desarrollando mis capacidades y aprender cosas nuevas.</p>
            </div>
        </article>

        <article class="with-image">
            <div class="article-content">
                <h3>Información</h3>
                <p>Nombre: Cristian Felipe</p>
                <p>Apellido: Ramirez Bravo</p>
                <p>Dirección: Perú, Huánuco Independencia</p>
            </div>
        </article>
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
