<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mis Conocimientos</title>
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
            flex-direction: column; /* Cambiar a disposición de dos filas */
            gap: 20px; /* Espacio entre filas */
        }

        .card-row {
            display: flex; /* Disposición en fila */
            justify-content: space-between; /* Espaciado uniforme */
            gap: 20px; /* Espacio entre tarjetas */
        }

        .card {
            border: 1px solid #ddd; /* Bordes para la tarjeta */
            padding: 15px;
            width: 48%; /* Ancho para que entren dos tarjetas por fila */
            transition: box-shadow 0.3s; /* Efecto de transición */
            text-align: left; /* Alinear el contenido a la izquierda */
            border-radius: 5px; /* Bordes redondeados para la tarjeta */
            overflow: hidden; /* Asegurar que la imagen no se desborde */
        }

        .card:hover {
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1); /* Efecto de sombra al pasar el cursor */
        }

        .card h3 {
            margin-top: 0; /* Sin espacio adicional al inicio */
        }

        .card p {
            margin-top: 10px; /* Espacio entre el título y el contenido */
        }

        /* Estilo para las barras de habilidades */
        .skill-bar {
            display: block;
            height: 20px;
            background-color: #ddd; /* Color base de la barra */
            border-radius: 10px; /* Bordes redondeados para la barra */
            overflow: hidden; /* Evitar que el contenido se desborde */
            position: relative; /* Para el efecto hover */
        }

        .skill-bar::after {
            content: '';
            display: block;
            height: 100%;
            background-color: #4CAF50; /* Color de la parte resaltada */
            width: 55%; /* Ajustar el porcentaje según el nivel de habilidad */
            transition: width 0.3s; /* Suavizar la transición */
        }

        .skill-bar:hover::after {
            background-color: #FF9800; /* Cambiar el color al pasar el cursor */
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
        <h1>Mis Conocimientos</h1>
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

    <!-- Sección principal para mostrar conocimientos -->
    <main>
        <section>
            <h2>Mis Conocimientos</h2>
            <div class="card-row"> <!-- Primera fila -->
                <div class="card">
                    <h3>Programación</h3>
                    <p>Conocimiento en diversos lenguajes de programación como Python, JavaScript, y Java...</p>
                </div>
                <div class="card">
                    <h3>Desarrollo Web</h3>
                    <p>Experiencia en desarrollo de sitios web con tecnologías como HTML, CSS, JavaScript, y frameworks como React...</p>
                </div>
            </div>
            
            <div class="card-row"> <!-- Segunda fila -->
                <div class="card">
                    <h3>Base de Datos</h3>
                    <p>Conocimientos en sistemas de bases de datos como MySQL, PostgreSQL, y SQLite...</p>
                </div>
                <div class="card">
                    <h3>Control de Versiones</h3>
                    <p>Experiencia en uso de herramientas de control de versiones como Git y GitHub...</p>
                </div>
            </div>
            
            <div class="card-row"> <!-- Tercera fila -->
                <div class="card">
                    <h3>Creacion de aplicaciones de escritorio</h3>
                    <p>Conocimientos en c# para la creacionde de aplicaciones de escritorio.</p>
                </div>
                <div class="card">
                    <h3>Creacion de Aplicaciones para celuar</h3>
                    <p>Conocimientos en c++, Java para la creacion de aplicaciones Moviles.</p>
                </div>
            </div>
            <div class="card-row"> <!-- Tercera fila -->
                <div class="card">
                    <h3>Creacion de Juegos</h3>
                    <p>Conocimientos en iunity para la creacion de videojuegos</p>
                </div>
                <div class="card">
                    <h3>Creacion de Realidad aumentada</h3>
                    <p>Creacion con unity y lenguaje c#, C++ conocimientos abansados.</p>
                </div>
            </div>
        </section>
        <section>
            <h2>Idiomas que domino</h2>
            <div class="card-row"> <!-- Primera fila -->
                <div class="card">
                <h3>Inglés</h3>
                    <p>Inglés certificado, nivel avanzado. Experiencia en comunicación en entornos profesionales...</p>
                </div>
                <div class="card">
                    <h3>Portuges</h3>
                    <p>Portugues certificado, nivel avanzado. Experiencia en comunicación en entornos profesionales...</p>
                </div>
            </div>
            
        </section>
                <!-- Nueva sección con habilidades y porcentajes -->
        <section>
            <h2>Porcentajes de Conocimientos</h2>
            <div class="card-row"> <!-- Primera fila -->
                <div class="card">
                    <h3>Java</h3>
                    <div class="skill-bar" title="Nivel de Java"> <!-- Sección de barra de habilidad -->
                        <div style="background-color: #4CAF50; width: 85%; height: 20px; border-radius: 10px;"> <!-- 85% de habilidad -->
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h3>Python</h3>
                    <div class="skill-bar" title="Nivel de Python">
                        <div style="background-color: #4CAF50; width: 90%; height: 20px; border-radius: 10px;"> <!-- 90% de habilidad -->
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="card-row"> <!-- Primera fila -->
                <div class="card">
                    <h3>c#</h3>
                    <div class="skill-bar" title="Nivel de Java"> <!-- Sección de barra de habilidad -->
                        <div style="background-color: #4CAF50; width: 85%; height: 20px; border-radius: 10px;"> <!-- 85% de habilidad -->
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h3>C++</h3>
                    <div class="skill-bar" title="Nivel de Python">
                        <div style="background-color: #4CAF50; width: 50%; height: 20px; border-radius: 10px;"> <!-- 90% de habilidad -->
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="card-row"> <!-- Primera fila -->
                <div class="card">
                    <h3>JS</h3>
                    <div class="skill-bar" title="Nivel de Java"> <!-- Sección de barra de habilidad -->
                        <div style="background-color: #4CAF50; width: 65%; height: 20px; border-radius: 10px;"> <!-- 85% de habilidad -->
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h3>PHP</h3>
                    <div class="skill-bar" title="Nivel de Python">
                        <div style="background-color: #4CAF50; width: 70%; height: 20px; border-radius: 10px;"> <!-- 90% de habilidad -->
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Pie de página con información de contacto y redes sociales -->
    <footer>
        <p>© 2024 Mis Conocimientos. Todos los derechos reservados.</p>
        <p>Contacto: cristianramirebravo@gmail.com</p>
        <div class="social-media">
            <a href="#facebook">Facebook</a>
            <a href="https://pe.linkedin.com/r">LinkedIn</a>
            <a href="https://github.com/">GitHub</a>
        </div>
    </footer>
</body>
</html>
