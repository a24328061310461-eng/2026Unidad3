<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.cdnfonts.com/css/bergell-let" rel="stylesheet">

    <!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.cdnfonts.com/css/bergell-let" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

<title>Valeria Castillo de la Paz</title>

</head>
<div>
    <style>
         :root{
    --color-de-fondo: #a55690;
    --color-de-lertras: #fff7f7; 
    --color-barra: #000000d6;     
    --color-boton: #e4f7ff;     
    --color-extra: #110606;    
}

    body{
        background-color: var(--color-de-fondo);
    }
    h1{
        font-family: 'Arial', sans-serif;
        color: var(--color-de-lertras);
        text-align: center;
    }
    table{
        border-collapse: collapse;
        width: 95%;
        background-color: rgba(0, 0, 0, 0.85);
        backdrop-filter: blur(5px);
        box-shadow: 0px 0px 15px black;
    }
    th,td {
        text-align: center;
        border: 1px solid #ddd;
        background-color: #b6097f;
        padding: 10px;
    }
</style>
<nav class="navbar navbar-light" style="background-color:var(--color-barra);">
    <div class="container">
        <a class="navbar-brand" href="index1.html" style="color:var(--color-de-lertras); font-family: 'Times New Roman', Times, serif">Inicio</a>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="nav navbar-nav">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Unidad 1
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                        <a class="dropdown-item" href="mostrar.php">Mostrar Datos</a><br>
                        <a class="dropdown-item" href="meterdatos.php">Meter Datos</a><br>
                        <a class="dropdown-item" href="tablafinal.php">Tabla Final</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Unidad 2
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                        <a class="dropdown-item" href="relaciones01.php">Relaciones 1</a><br>
                        <a class="dropdown-item" href="relaciones01.php">Relaciones 2</a><br>
                        <a class="dropdown-item" href="relaciones01.php">Relaciones 3</a>
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
<body> 
     <style>
    body{
        margin: 0;
        padding: 0;
        font-family: Arial, Helvetica, sans-serif;
        background-image: url("imagen.jpg");
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        color: white;
        text-align: center;
    }

h1{
    margin-top: 30px;
    font-size: 40px;
    text-shadow: 2px 2px 5px black;
}

h3{
    font-size: 22px;
    margin-bottom: 30px;
    text-shadow: 1px 1px 3px black;
}

table{
    margin: 20px auto;
    border-collapse: collapse;
    width: 90%;
    background-color: white;
    color: black;
}

th{
    background-color: orange;
    color: white;
    padding: 10px;
}

td{
    padding: 8px;
    border: 1px solid #ccc;
}

tr:nth-child(even){
    background-color: #f2f2f2;
}


tr:hover{
    background-color: rgba(255,255,255,0.3);
    transition: 0.3s;
}

img{
    width: 100px;
    border-radius: 10px;
}

</style>
<h1>Personajes de Marvel </h1>
    <h2><center> Personajes </center></h2>
    <table>
        <tr> 
            <th>ID</th>
            <th>Nombre</th>
            <th>Alias</th>
            <th>Fecha de Creación</th>
            <th>Descripción</th>
            <th>Titulo de Comic</th>
            <th>Nombre del Superpoder</th>
    </tr>
</table>
<?php
$username = "root";
$password = "";
$server = "localhost";
$database = "elotes";
$conexion = new mysqli($server, $username, $password, $database);
if ($conexion->connect_error) {
    die("Conexion fallida: " . $conexion->connect_error);
}

$sql = "SELECT
p.personajeID AS personajeID,
p.nombre AS nombre,
p.alias AS alias,
p.descripcion AS descripcion,
p.fechaCreacion AS fechaCreacion,
c.comicID AS comicID,
c.titulo AS titulo,
s.superpoderID AS superpoderID,
s.nombre AS nombre_superpoder
FROM personajes p
LEFT JOIN personajecomic pc ON p.personajeID = pc.personajeID
LEFT JOIN comics c ON pc.comicID = c.comicID
LEFT JOIN personajessuperpoder ps ON p.personajeID = ps.personajeID
LEFT JOIN superpoderes s ON ps.superpoderID = s.superpoderID";

$result = $conexion->query($sql);


if (!$result) {
die("Error en la consulta: " . $conexion->error);
}

if ($result->num_rows >0){
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["personajeID"] . "</td>
              <td>" . $row["nombre"] . "</td>
              <td>" . $row["alias"] . "</td>
              <td>" . $row["fechaCreacion"] . "</td>
              <td>" . $row["descripcion"] . "</td>
              <td>" . $row["titulo"] . "</td>
              <td>" . $row["nombre_superpoder"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='9'>No se encontraron personajes.</td></tr>";
}

$conexion->close();
?>
</table>
 </table>
</body>
</html>