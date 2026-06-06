<?php
$username = "root"; //Valeria Castillo de la Paz
$password = "";
$server = "localhost";
$database = "orangecaramel"; //<-- aqui va tu base de datos de comics

$conexion = new mysqli($server, $username, $password, $database);

if ($conexion->connect_error) {
    die("Conexion fallida: " . $conexion->connect_error);
}

// Validar que los datos existan en $_POST
if (!isset($_POST['nombre'], $_POST['alias'], $_POST['fechacreacion'], 
          $_POST['descripcion'], $_POST['comics'], $_POST['superpoderes'])) {
    die("Faltan datos en el formulario");
}

// Son los datos del formulario de la página de captura
$nombre = htmlspecialchars($_POST['nombre']);
$alias = htmlspecialchars($_POST['alias']);
$fechacreacion = htmlspecialchars($_POST['fechacreacion']);
$descripcion = htmlspecialchars($_POST['descripcion']);
$comics = $_POST['comics']; // Ya viene como array, no usar htmlspecialchars
$superpoderes = htmlspecialchars($_POST['superpoderes']);

// Aquí agrego los valores a la tabla de personajes
$sql_personaje = "INSERT INTO personajes (nombre, alias, fechacreacion, descripcion) VALUES (?,?,?,?)";
$stmt = $conexion->prepare($sql_personaje);
$stmt->bind_param('ssss', $nombre, $alias, $fechacreacion, $descripcion);
$stmt->execute();
$personaje_id = $stmt->insert_id;
$stmt->close();

// Insertar cómics que ya existen en la base de datos
if (is_array($comics)) {
    foreach ($comics as $comic_titulo) {
        $comic_titulo = trim($comic_titulo);
        
        // Verificar si el cómic ya existe en la base de datos
        $sql_comic = "SELECT ComicID FROM Comics WHERE Titulo = ?";
        $stmt = $conexion->prepare($sql_comic);
        $stmt->bind_param("s", $comic_titulo);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            // El cómic existe, obtener su ID
            $row = $result->fetch_assoc();
            $comic_id = $row['ComicID'];
            
            // Insertar en la tabla de relación (asumiendo que existe)
            $sql_relacion = "INSERT INTO personajes_comics (personaje_id, comic_id) VALUES (?, ?)";
            $stmt_rel = $conexion->prepare($sql_relacion);
            $stmt_rel->bind_param("ii", $personaje_id, $comic_id);
            $stmt_rel->execute();
            $stmt_rel->close();
        } else {
            // Opcional: Insertar nuevo cómic si no existe
            $sql_insert_comic = "INSERT INTO Comics (Titulo) VALUES (?)";
            $stmt_insert = $conexion->prepare($sql_insert_comic);
            $stmt_insert->bind_param("s", $comic_titulo);
            $stmt_insert->execute();
            $comic_id = $stmt_insert->insert_id;
            $stmt_insert->close();
            
            // Insertar relación
            $sql_relacion = "INSERT INTO personajes_comics (personaje_id, comic_id) VALUES (?, ?)";
            $stmt_rel = $conexion->prepare($sql_relacion);
            $stmt_rel->bind_param("ii", $personaje_id, $comic_id);
            $stmt_rel->execute();
            $superpoder_id = $stmt_insert_id;
            $stmt_rel->close();
        }

            //Relacionar el personaje con el superpoder
            $sql_personaje_superpoder = "INSERT INTO PersonajeSuperpoder (PersonajeID, SuperpoderID) VALID (?, ?)";
            $stmt_relacion = $conn->prepare($aql_personaje_superpoder);
            $srmr_relacion->bind_param("ii", $personaje_id, $superpoder_id);
            $stmt_relacion->execute8;
            $stmt_relacion->close();
}

//Cerrar la conexión
$conn->close();

// Redireccionar al listado de personajes
header("Location: relaciones.php");
exit();
?>