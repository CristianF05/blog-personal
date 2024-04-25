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
            color: #cccccc; /* Color gris claro para un tono profesional */
            transition: color 0.3s; /* Animación para el cambio de color */
        }

        nav ul li a:hover {
            color: #ff6600; /* Cambia a un tono naranja al pasar el cursor */
        }
        a {
            text-decoration: none;
            color: #cccccc; /* Color gris claro para un tono profesional */
            transition: color 0.3s; /* Animación para el cambio de color */
        }

        /* Estilo para el cuerpo del blog */
        main {
            padding: 20px;
            display: flex; /* Flexbox para controlar el diseño */
            gap: 20px; /* Espacio entre artículos */
            justify-content: space-between; /* Separa los artículos hacia los extremos */
        }

        /* Artículos del blog */
        article {
            border: 1px solid #ddd; /* Bordes para cada artículo */
            padding: 15px; /* Espacio interno */
            transition: box-shadow 0.3s; /* Efecto de transición */
        }

        /* Artículo con imagen y texto */
        .with-image {
            display: flex; /* Disposición en línea */
            align-items: flex-start; /* Alinear al inicio */
        }

        .article-image {
            width: 300px; /* Tamaño de la imagen */
            height: auto;
            margin-right: 15px; /* Mueve la imagen al lado izquierdo del texto */
            border-radius: 10px; /* Bordes redondeados para la imagen */
        }
        .article-image2 {
            width: 550px; /* Tamaño de la imagen */
            height: auto;
            margin-right: 15px; /* Mueve la imagen al lado izquierdo del texto */
            border-radius: 10px; /* Bordes redondeados para la imagen */
        }

        .article-content {
            flex: 1; /* El texto ocupa el resto del espacio */
        }

        /* Artículo a la izquierda */
        .align-left {
            align-self: flex-start; /* Alinea el artículo a la izquierda */
            width: 40%; /* Ancho del artículo */
        }

        /* Artículo a la derecha */
        .align-right {
            align-self: flex-end; /* Alinea el artículo a la derecha */
            margin-top: 370px; /* Mismo espacio que el anterior */
            width: 60%; /* Ancho del artículo */
            display: flex; /* Disposición en línea para la imagen y el texto */
        }

        /* Pie de página con enlaces de redes sociales */
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px.
        }

        .social-media a {
            margin: 0 10px;
            text-decoration: none.
            color: white.
        }

        .social-media a:hover {
            text-decoration: underline.
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
                <li><a href="http://localhost/cristian/public/ruta_2">Ocupación</a></li>
                <li><a href="http://localhost/cristian/public/ruta_3">Experiencias Profesionales</a></li>
                <li><a href="http://localhost/cristian/public/ruta_4">Proyectos Trabajados</a></li>
                <li><a href="http://localhost/cristian/public/ruta_5">Blog</a></li>
            </ul>
        </nav>
    </header>

    <!-- Sección del blog -->
    <main>
        <!-- Artículo a la izquierda -->
        <article class="align-left with-image">
            <div class="article-content">
                <h3>Mi Blog</h3>
                <p>
                    En mi blog, encontrarán información tanto personal como profesional, como mis capacidades, las carreras que estudié, mis proyectos desde el comienzo, los conocimientos que tengo, y las empresas donde trabajé. También cubriré otras informaciones relevantes.
                </p>
            </div>
            <img src="https://cdn.pixabay.com/photo/2024/04/09/03/04/ai-generated-8684869_960_720.jpg" alt="Imagen relacionada con el blog" class="article-image">
        </article>

        <!-- Artículo a la derecha -->
        <article class="align-right with-image"> 
            <img src="https://cdn.pixabay.com/photo/2016/11/18/18/37/programming-1836330_960_720.png" alt="Imagen relacionada con el blog" class="article-image2">
            <div class="article-content">
                <h3>Presentación</h3>
                <p>Comienso diciendo les vienbenidos a mi bolg en este blog esta toda mi informacion para que las personas que me quieran contratar puedan visualisar trabajos que realise como tambien mis capasidades que tengo es un blog en elque puse mucho esfuerso en hacer esperoq ue les guste y me elijam como su trabajador como tambien en el que puedan confiar para hacer sus trabajos.</p>
            </div>
        </article>
    </main>

    <!-- Pie de página -->
    <footer>
        <p>© 2024 Mi Blog Personal. Todos los derechos reservados.</p>
        <p>Contacto: cristianramirebravo@gmail.com</p>
        <div class="social-media">
            <a target="_blank" rel="noopener noreferrer" href="#facebook">Facebook </a>
            <a target="_blank" rel="noopener noreferrer" href="https://pe.linkedin.com/r">LinkedIn</a>
            <a target="_blank" rel="noopener noreferrer" href="https://github.com/">GitHub</a>
        </div>
    </footer>
</body>
</html>

