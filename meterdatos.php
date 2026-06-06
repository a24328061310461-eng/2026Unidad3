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

    <title>Registro de Personajes</title>

    <style>
        :root {
            --color-de-fondo: #bacba9;
            --color-de-letras: #e1f4cb;
            --color-barra: #717568;
            --color-boton: #f1bf98;
            --color-extra: #3f4739;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: var(--color-de-letras);
            margin: 0;
            padding: 0;
        }

        h1 {
            color: var(--color-extra);
            text-align: center;
            margin-top: 20px;
        }

        form {
            width: 50%;
            margin: auto;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            margin-bottom: 50px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #ffffff;
        }

        input[type="text"],
        input[type="date"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid var(--color-boton);
            border-radius: 5px;
            background-color: #1f1f1f;
            color: #ffffff;
            box-sizing: border-box;
        }

        textarea {
            height: 80px;
            resize: vertical;
        }

        input[type="submit"] {
            background-color: var(--color-boton);
            color: #000;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-weight: bold;
            font-size: 16px;
            text-transform: uppercase;
        }

        input[type="submit"]:hover {
            background-color: #e0a878;
        }
    </style>
</head>
<body>

<!-- Incluir el navbar igual que en index.html -->
<div>
    <nav class="navbar navbar-light" style="background-color:var(--color-barra);">
        <div class="container">
            <a class="navbar-brand" href="index.html" style="color:var(--color-de-letras); font-family: 'Times New Roman', Times, serif">Inicio</a>

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

<div class="container">
    <h1>Registro de Personajes</h1>

    <form method="post" action="meterdatos01.php">
        <label for="nombrereal">Nombre Real:</label>
        <input type="text" name="nombrereal" id="nombrereal" required>

        <label for="personaje">Nombre del Personaje:</label>
        <input type="text" name="personaje" id="personaje" required>

        <label for="altura">Altura:</label>
        <input type="text" name="altura" id="altura" placeholder="Ej: 1.75 m">

        <label for="peso">Peso:</label>
        <input type="text" name="peso" id="peso" placeholder="Ej: 70 kg">

        <label for="poderes">Poderes:</label>
        <input type="text" name="poderes" id="poderes">

        <label for="sexo">Sexo:</label>
        <input type="text" name="sexo" id="sexo">

        <label for="debilidad">Debilidad:</label>
        <input type="text" name="debilidad" id="debilidad">

        <label for="creation">Fecha de Creación:</label>
        <input type="date" name="creation" id="creation">

        <label for="biografia">Biografía:</label>
        <textarea name="biografia" id="biografia"></textarea>

        <input type="submit" value="Guardar Datos">
    </form>
</div>

</body>
</html>