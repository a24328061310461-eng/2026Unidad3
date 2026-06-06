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

    <title>Personajes - Valeria Castillo de la Paz</title>

    <style>
        :root {
            --color-de-fondo: #bacba9;
            --color-de-letras: #e1f4cb;
            --color-barra: #717568;
            --color-boton: #f1bf98;
            --color-extra: #3f4739;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', Helvetica, sans-serif;
            background: linear-gradient(135deg, #8fc093 0%, #6a9c6e 100%);
            min-height: 100vh;
        }

        h1 {
            margin-top: 30px;
            font-size: 40px;
            text-shadow: 2px 2px 5px rgba(0,0,0,0.3);
            text-align: center;
            color: var(--color-extra);
        }

        h3 {
            font-size: 22px;
            margin-bottom: 30px;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.3);
            text-align: center;
            color: var(--color-extra);
        }

        .table-container {
            width: 95%;
            margin: 20px auto;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: rgba(0, 0, 0, 0.85);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 0px 20px rgba(0,0,0,0.3);
        }

        th {
            background-color: var(--color-barra);
            color: white;
            padding: 12px 8px;
            font-size: 14px;
            text-align: center;
        }

        td {
            padding: 10px 8px;
            font-size: 13px;
            color: #ddd;
            text-align: center;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }

        tr:nth-child(even) {
            background-color: rgba(255, 255, 255, 0.05);
        }

        tr:hover {
            background-color: rgba(255, 255, 255, 0.15);
            transition: 0.3s;
        }

        .no-data {
            text-align: center;
            padding: 40px;
            color: white;
            font-size: 18px;
            background-color: rgba(0,0,0,0.7);
            border-radius: 10px;
            margin: 20px auto;
            width: 50%;
        }

        .badge-count {
            background-color: var(--color-boton);
            color: var(--color-extra);
            padding: 8px 16px;
            border-radius: 20px;
            display: inline-block;
            margin: 10px auto;
            font-weight: bold;
        }

        .biografia-cell {
            max-width: 250px;
            text-align: left;
        }
    </style>
</head>
<body>

<!-- NAVBAR - MISMO QUE EL INDEX -->
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

<!-- CONTENIDO PRINCIPAL -->
<div class="table-container">
    <h1>📋 Tabla Final de Personajes</h1>
    <h3>Valeria Castillo de la Paz</h3>

    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $username = "root";
    $password = "";
    $server = "localhost";
    $database = "elotes";

    $conexion = new mysqli($server, $username, $password, $database);

    if ($conexion->connect_error) {
        die("<div class='no-data'>❌ Conexión fallida: " . $conexion->connect_error . "</div>");
    }

    $sql = "SELECT id, nombrereal, personaje, altura, peso, poderes, sexo, debilidad, creation, biografia FROM personajes ORDER BY id DESC";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        echo '<div style="text-align: center;"><span class="badge-count">📊 Total de personajes: ' . $resultado->num_rows . '</span></div>';
        
        echo "<table>";
        echo "<thead>
                 <tr>
                    <th>ID</th>
                    <th>Nombre Real</th>
                    <th>Personaje</th>
                    <th>Altura</th>
                    <th>Peso</th>
                    <th>Poderes</th>
                    <th>Sexo</th>
                    <th>Debilidad</th>
                    <th>Fecha Creación</th>
                    <th>Biografía</th>
                 </tr>
              </thead>
              <tbody>";

        while ($row = $resultado->fetch_assoc()) {
            // Truncar biografía si es muy larga
            $biografia = $row["biografia"] ?? '';
            $biografia_corta = strlen($biografia) > 120 ? substr($biografia, 0, 120) . '...' : $biografia;
            
            echo "<tr>
                    <td>" . htmlspecialchars($row["id"]) . "</td>
                    <td>" . htmlspecialchars($row["nombrereal"] ?? '-') . "</td>
                    <td><strong>" . htmlspecialchars($row["personaje"] ?? '-') . "</strong></td>
                    <td>" . htmlspecialchars($row["altura"] ?? '-') . "</td>
                    <td>" . htmlspecialchars($row["peso"] ?? '-') . "</td>
                    <td>" . htmlspecialchars($row["poderes"] ?? '-') . "</td>
                    <td>" . htmlspecialchars($row["sexo"] ?? '-') . "</td>
                    <td>" . htmlspecialchars($row["debilidad"] ?? '-') . "</td>
                    <td>" . htmlspecialchars($row["creation"] ?? '-') . "</td>
                    <td class='biografia-cell'>" . nl2br(htmlspecialchars($biografia_corta)) . "</td>
                  </tr>";
        }

        echo "</tbody></table>";
    } else {
        echo "<div class='no-data'>📭 No se encontraron registros en la base de datos</div>";
    }

    $conexion->close();
    ?>
</div>

</body>
</html>