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

/* Estilo para el cuerpo del blog */
main {
    padding: 20px;
}

article {
    border: 1px solid #ddd;
    padding: 15px;
    margin-bottom: 20px;
}

article h3 {
    margin-top: 0;
}

/* Pie de página con enlaces de redes sociales */
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

    <!-- Sección del blog -->
    <main>
        <section>
            <h2>Últimas Entradas</h2>
            <article>
                <h3>Título de la Entrada 1</h3>
                <p>Descripción breve de la entrada 1...</p>
                <a href="#read-more">Leer más</a>
            </article>
            <article>
                <h3>Título de la Entrada 2</h3>
                <p>Descripción breve de la entrada 2...</p>
                <a href="#read-more">Leer más</a>
            </article>
        </section>
    </main>

    <!-- Pie de página con información de contacto y derechos de autor -->
    <footer>
        <p>© 2024 Mi Blog Personal. Todos los derechos reservados.</p>
        <p>Contacto: cristianramirebravo@gmail.com</p>
        <div class="social-media">
            <a href="#facebook">Facebook</a>
            <a href="https://pe.linkedin.com/r">Linquevin</a>
            <a href="https://github.com/">GitHub</a>
        </div>
    </footer>
</body>
</html>
