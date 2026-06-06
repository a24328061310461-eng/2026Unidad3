<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://fonts.cdnfonts.com/css/lifestyle-marker-m54" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/kun" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/sa-inkspot" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

    <title>Valeria Castillo de la Paz</title>

    <style>
         :root{
    --color-de-fondo: #bacba9;
    --color-de-lertras: #e1f4cb;
    --color-barra: #717568;
    --color-boton: #f1bf98;
    --color-extra: #3f4739;
    
}


        body{
            background-color: #8fc093 ;
        }
        h1{
            font-family: 'Bergell LET', sans-serif;
            color: var();
            text-align: center;
        }
    </style>
</head>

<body>

<div>
    <nav class="navbar navbar-light" style="background-color:var(--color-barra);">
        <div class="container">
            <a class="navbar-brand" href="index.html" style="color:var(--color-de-lertras); font-family: 'Times New Roman', Times, serif">Inicio</a>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="nav navbar-nav">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Unidad 1
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                            <a class="dropdown-item" href="mostrar.php">Primera Tabla</a><br>
                            <a class="dropdown-item" href="meterdatos.php">Formulario</a><br>
                            <a class="dropdown-item" href="tablafinal.php">Personajes</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Unidad 2
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                            <a class="dropdown-item" href="relaciones01.html">Relaciones 1</a><br>
                            <a class="dropdown-item" href="realciones02.html">Relaciones 2</a><br>
                            <a class="dropdown-item" href="relaciones03.html">Relaciones 3</a>
                            <a class="dropdown-item" href="capturadatosrelacionados.php">Relaciones de datos</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Unidad 3
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink3">
                            <a class="dropdown-item" href="valeria07.html">Perfil</a><br>
                            <a class="dropdown-item" href="valeria08.html">Calculadora</a><br>
                            <a class="dropdown-item" href="valeria09.html">Tienda parte 1</a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</div>

<div class="jumbotron" style="background-color: var(--color-de-fondo)">
    <h1 class="display-4">Bienvenido</h1>
    <p class="lead">Esta será mi página.</p>
    <hr class="my-4">
    <p>Bienvenido a mi página</p>
    <p class="lead">
        <a class="btn btn-primary btn-lg" href="#" role="button">Botón</a>
    </p>
</div>
<body>

<div class="container">
        <h1>Agregar Personaje de Marvel</h1>
        <form action="insertar_datos.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="alias">Alias:</label>
            <input type="text" id="alias" name="alias" required>
            
            <label for="fechacreacion">Fecha de Creación:</label>
            <input type="date" id="fechacreacion" name="fechacreacion" required>
            
            <label for="descripcion">Descripción:</label>
            <textarea id="decripcion" name "descripcion" required></textarea>

            <label for="comics">Comics (Separados por comas):</label>
            <input type="text" id="comics" name="comics" placeholder="Ejemplo: Spider-Man, Ironman" required>

            <label for="superpoderes">Superpoderes (Separados por comas):</label>
            <input type="text" id="superpoderes" name="superpoderes" placeholder="Ejemplo: Fuerza, Velocidad" required>

            <input type="submit" value="Guardar Personaje">
        </form>

</div>

</body>
</html>