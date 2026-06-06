<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<link href="https://fonts.cdnfonts.com/css/lifestyle-marker-m54" rel="stylesheet">
<link href="https://fonts.cdnfonts.com/css/kun" rel="stylesheet">
<link href="https://fonts.cdnfonts.com/css/sa-inkspot" rel="stylesheet">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

<style>
    :root {
        --color-de-fondo: #bacba9;
        --color-de-letras: #e1f4cb;
        --color-barra: #717568;
        --color-boton: #f1bf98;
        --color-extra: #3f4739;
    }
    
    body {
        background-color: #8fc093;
        font-family: Arial, sans-serif;
    }
    
    h1 {
        font-family: 'Bergell LET', sans-serif;
        text-align: center;
        color: #2c3e50;
        margin-top: 30px;
    }
    
    h2 {
        font-family: 'Kun', sans-serif;
        color: #2c3e50;
        margin-top: 30px;
        margin-bottom: 20px;
        padding-left: 15px;
        border-left: 5px solid var(--color-boton);
    }
    
    h3 {
        font-family: 'Kun', sans-serif;
        color: #3f4739;
        text-align: center;
        margin-bottom: 30px;
    }
    
    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 30px;
        background-color: white;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
    
    th, td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: left;
    }
    
    th {
        background-color: var(--color-barra);
        color: var(--color-de-letras);
        font-weight: bold;
    }
    
    tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    
    tr:hover {
        background-color: #f5f5f5;
    }
    
    .container-tablas {
        width: 95%;
        margin: 0 auto;
        padding: 20px;
    }
    
    .badge {
        background-color: var(--color-boton);
        color: #2c3e50;
        padding: 5px 10px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: bold;
    }
    
    footer {
        background-color: var(--color-extra);
        color: white;
        text-align: center;
        padding: 15px;
        margin-top: 40px;
        border-radius: 5px;
    }
    
    .alert-success {
        background-color: #d4edda;
        color: #155724;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 20px;
    }
</style>

<title>Valeria castillo de la Paz</title>
</head>
<body>

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
                            <a class="dropdown-item" href="valeria04.html">Perfil </a><br>
                            <a class="dropdown-item" href="valeria05.html">Calculadora</a><br>
                            <a class="dropdown-item" href="valeria06.html">Tienda parte 1</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Unidad 3
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink3">
                            <a class="dropdown-item" href="insectos_completo.php">Insectos BD</a><br>
                            <a class="dropdown-item" href="#">Relaciones</a><br>
                            <a class="dropdown-item" href="#">Estadísticas</a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</div>

<div class="container-tablas">
    <h1>🐞 Base de Datos de Insectos</h1>
    <h3>Valeria Castillo - Sistema de Información Entomológica</h3>

    <?php
    // Conexión a la base de datos
    $username = "root";
    $password = "";
    $server = "localhost";
    $database = "relacionesrelacionales";

    $conexion = new mysqli($server, $username, $password, $database);

    if ($conexion->connect_error) {
        die("<div class='alert alert-danger'>Conexión fallida: " . $conexion->connect_error . "</div>");
    }
    
    echo '<div class="alert-success">✅ Conexión exitosa a la base de datos "relacionesrelacionales"</div>';

    // ==================== TABLA 1: PAÍSES ====================
    echo '<h2>🌎 Tabla 1: Países</h2>';
    $sql = "SELECT * FROM paises";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr>
                <th>ID</th>
                <th>Nombre del País</th>
                <th>Continente</th>
                <th>Código</th>
                <th>Fecha Registro</th>
              </tr>";

        while ($row = $resultado->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td><strong>" . $row["nombre_pais"] . "</strong></td>
                    <td>" . ($row["continente"] ?? '-') . "</td>
                    <td>" . ($row["codigo"] ?? '-') . "</td>
                    <td>" . $row["created_at"] . "</td>
                  </tr>";
        }
        echo "</table>";
        echo "<p><span class='badge'>Total: " . $resultado->num_rows . " países</span></p>";
    } else {
        echo "<p>No se encontraron registros en la tabla paises</p>";
    }

    // ==================== TABLA 2: ÓRDENES ====================
    echo '<h2>🦋 Tabla 2: Órdenes Científicas</h2>';
    $sql = "SELECT * FROM ordenes";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr>
                <th>ID</th>
                <th>Nombre del Orden</th>
                <th>Descripción</th>
                <th>Fecha Registro</th>
              </tr>";

        while ($row = $resultado->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td><strong>" . $row["nombre_orden"] . "</strong></td>
                    <td>" . ($row["descripcion"] ?? '-') . "</td>
                    <td>" . $row["created_at"] . "</td>
                  </tr>";
        }
        echo "</table>";
        echo "<p><span class='badge'>Total: " . $resultado->num_rows . " órdenes</span></p>";
    } else {
        echo "<p>No se encontraron registros en la tabla ordenes</p>";
    }

    // ==================== TABLA 3: FAMILIAS ====================
    echo '<h2>🏷️ Tabla 3: Familias</h2>';
    $sql = "SELECT f.*, o.nombre_orden FROM familias f LEFT JOIN ordenes o ON f.orden_id = o.id";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr>
                <th>ID</th>
                <th>Nombre Familia</th>
                <th>Orden Relacionado</th>
                <th>Descripción</th>
                <th>Fecha Registro</th>
              </tr>";

        while ($row = $resultado->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td><strong>" . $row["nombre_familia"] . "</strong></td>
                    <td>" . ($row["nombre_orden"] ?? 'Sin orden') . "</td>
                    <td>" . ($row["descripcion"] ?? '-') . "</td>
                    <td>" . $row["created_at"] . "</td>
                  </tr>";
        }
        echo "</table>";
        echo "<p><span class='badge'>Total: " . $resultado->num_rows . " familias</span></p>";
    } else {
        echo "<p>No se encontraron registros en la tabla familias</p>";
    }

    // ==================== TABLA 4: HÁBITATS ====================
    echo '<h2>🌿 Tabla 4: Hábitats</h2>';
    $sql = "SELECT * FROM habitats";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr>
                <th>ID</th>
                <th>Nombre Hábitat</th>
                <th>Descripción</th>
                <th>Fecha Registro</th>
              </tr>";

        while ($row = $resultado->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td><strong>" . $row["nombre_habitat"] . "</strong></td>
                    <td>" . ($row["descripcion"] ?? '-') . "</td>
                    <td>" . $row["created_at"] . "</td>
                  </tr>";
        }
        echo "</table>";
        echo "<p><span class='badge'>Total: " . $resultado->num_rows . " hábitats</span></p>";
    } else {
        echo "<p>No se encontraron registros en la tabla habitats</p>";
    }

    // ==================== TABLA 5: ALIMENTACIÓN ====================
    echo '<h2>🍽️ Tabla 5: Alimentación</h2>';
    $sql = "SELECT * FROM alimentacion";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr>
                <th>ID</th>
                <th>Tipo Alimentación</th>
                <th>Descripción</th>
                <th>Fecha Registro</th>
              </tr>";

        while ($row = $resultado->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td><strong>" . $row["tipo_alimentacion"] . "</strong></td>
                    <td>" . ($row["descripcion"] ?? '-') . "</td>
                    <td>" . $row["created_at"] . "</td>
                  </tr>";
        }
        echo "</table>";
        echo "<p><span class='badge'>Total: " . $resultado->num_rows . " tipos de alimentación</span></p>";
    } else {
        echo "<p>No se encontraron registros en la tabla alimentacion</p>";
    }

    // ==================== TABLA 6: INSECTOS (PRINCIPAL) ====================
    echo '<h2>🐛 Tabla 6: Insectos (Tabla Principal)</h2>';
    $sql = "SELECT i.*, 
            p.nombre_pais, 
            f.nombre_familia,
            h.nombre_habitat,
            a.tipo_alimentacion
            FROM insectos i
            LEFT JOIN paises p ON i.pais_id = p.id
            LEFT JOIN familias f ON i.familia_id = f.id
            LEFT JOIN habitats h ON i.habitat_id = h.id
            LEFT JOIN alimentacion a ON i.alimentacion_id = a.id";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr>
                <th>ID</th>
                <th>Nombre Común</th>
                <th>Nombre Científico</th>
                <th>País</th>
                <th>Familia</th>
                <th>Hábitat</th>
                <th>Alimentación</th>
                <th>Tamaño (mm)</th>
                <th>Color</th>
                <th>Peligro Extinción</th>
                <th>Fecha Descubrimiento</th>
              </tr>";

        while ($row = $resultado->fetch_assoc()) {
            $peligro = $row["peligro_extincion"] ? "⚠️ Sí" : "✅ No";
            echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td><strong>" . $row["nombre_comun"] . "</strong></td>
                    <td><em>" . $row["nombre_cientifico"] . "</em></td>
                    <td>" . ($row["nombre_pais"] ?? '-') . "</td>
                    <td>" . ($row["nombre_familia"] ?? '-') . "</td>
                    <td>" . ($row["nombre_habitat"] ?? '-') . "</td>
                    <td>" . ($row["tipo_alimentacion"] ?? '-') . "</td>
                    <td>" . ($row["tamaño_mm"] ?? '-') . " mm</td>
                    <td>" . ($row["color_principal"] ?? '-') . "</td>
                    <td>" . $peligro . "</td>
                    <td>" . ($row["fecha_descubrimiento"] ?? '-') . "</td>
                  </tr>";
        }
        echo "</table>";
        echo "<p><span class='badge'>Total: " . $resultado->num_rows . " insectos registrados</span></p>";
    } else {
        echo "<p>No se encontraron registros en la tabla insectos</p>";
    }

    // ==================== TABLA 7: RELACIONES ENTRE INSECTOS ====================
    echo '<h2>🔗 Tabla 7: Relaciones entre Insectos</h2>';
    $sql = "SELECT r.*, 
            i1.nombre_comun AS insecto_origen,
            i2.nombre_comun AS insecto_destino
            FROM relaciones_insectos r
            LEFT JOIN insectos i1 ON r.insecto_origen_id = i1.id
            LEFT JOIN insectos i2 ON r.insecto_destino_id = i2.id";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr>
                <th>ID</th>
                <th>Insecto Origen</th>
                <th>Insecto Destino</th>
                <th>Tipo de Relación</th>
                <th>Similitud (%)</th>
                <th>Fecha Relación</th>
              </tr>";

        while ($row = $resultado->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td><strong>" . ($row["insecto_origen"] ?? 'ID: ' . $row["insecto_origen_id"]) . "</strong></td>
                    <td><strong>" . ($row["insecto_destino"] ?? 'ID: ' . $row["insecto_destino_id"]) . "</strong></td>
                    <td>" . ($row["tipo_relacion"] ?? '-') . "</td>
                    <td>" . ($row["similitud_porcentaje"] ? $row["similitud_porcentaje"] . '%' : '-') . "</td>
                    <td>" . ($row["fecha_relacion"] ?? '-') . "</td>
                  </tr>";
        }
        echo "</table>";
        echo "<p><span class='badge'>Total: " . $resultado->num_rows . " relaciones establecidas</span></p>";
    } else {
        echo "<p>No se encontraron registros en la tabla relaciones_insectos</p>";
    }

    // ==================== RELACIÓN 1: Insectos por País ====================
    echo '<h2>📊 RELACIÓN 1: Insectos agrupados por País</h2>';
    $sql = "SELECT p.nombre_pais, COUNT(i.id) as total_insectos
            FROM paises p
            LEFT JOIN insectos i ON p.id = i.pais_id
            GROUP BY p.id
            ORDER BY total_insectos DESC";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr>
                <th>País</th>
                <th>Cantidad de Insectos</th>
              </tr>";

        while ($row = $resultado->fetch_assoc()) {
            echo "<tr>
                    <td><strong>" . $row["nombre_pais"] . "</strong></td>
                    <td>" . $row["total_insectos"] . " insectos</td>
                  </tr>";
        }
        echo "</table>";
    }

    // ==================== RELACIÓN 2: Insectos por Familia ====================
    echo '<h2>🔬 RELACIÓN 2: Insectos agrupados por Familia</h2>';
    $sql = "SELECT f.nombre_familia, COUNT(i.id) as total_insectos
            FROM familias f
            LEFT JOIN insectos i ON f.id = i.familia_id
            GROUP BY f.id
            ORDER BY total_insectos DESC";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr>
                <th>Familia</th>
                <th>Cantidad de Insectos</th>
              </tr>";

        while ($row = $resultado->fetch_assoc()) {
            echo "<tr>
                    <td><strong>" . $row["nombre_familia"] . "</strong></td>
                    <td>" . $row["total_insectos"] . " insectos</td>
                  </tr>";
        }
        echo "</table>";
    }

    $conexion->close();
    ?>

    <footer>
        <p>🐞 Base de Datos de Insectos | Sistema de Información Entomológica | 7 Tablas Relacionadas</p>
        <p>Países | Órdenes | Familias | Hábitats | Alimentación | Insectos | Relaciones</p>
    </footer>
</div>

</body>
</html>