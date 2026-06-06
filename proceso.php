<?php
require_once 'conexion.php';

if(isset($POST['submit'])){
    // 1. Recolección de datos
    $nombre = $_POST['nombre'] ?? '';
    $nombrereal = $_POST ['nombrereal'] ?? '';
    $poderes = $_POST['poderes'] ?? '';
    $altura = $_POST['altura'] ?? '';
    $bio = $_POST['bio'] ?? '';
    

    // 2. Procesar la iamgen
    if(isset($_FILES['imagen']) && $_FILES['imagen']['error'] === 0){
        $img_tmp_name = $_FILES['imagen']['tmp_name'];
        $img_name = $_FILES['imagen']['name'];

        $img_content = file_get_contens ($img_tmp_name);

        $upload_dir = 'uploads/';
        if(!is_dir($upload_dir)){
            mkdir($upload_dir, 0777, true);
        }
        move_uploaded_file($img_tmp_name, $upload_dir , $img_name);
} else {
    die("Error al subir imagen.");
}

 //3. Guardar en Base de Datos
try {
    //Asegurate que los nombrews en VALUES (:nombre, etc) coincidan con bindParam
    $sql = "INSERT INTO mutantes (nombre_clave, nombre_real, poderes, altura, bio, 
     imagen)
            VALUES (:nombre, :nombrereal, :poderes, :altura, :bio, :imagen)";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':nombre_clave', $nombre);
    $stmt->bindParam(':nombre_real', $nombre_real);
    $stmt->bindParam(':poderes', $poderes);
    $stmt->bindParam(':altura', $altura);
    $stmt->bindParam(':bio', $bio);
    // Error corregido: PDO::PARAM_LOB (doble punto)
    $stmt->bindParam(':imagen', $img_comtent, PDO::PARAM_LOB);
    
    stmt->execute();

        header("Location: cards.php?success=1");
        exit();
    } catch (PDOException $e) {
        die("Error en la Base de Datos: " . $e->getMessage());
    }
else { //AQUÍ se cierra el if(isset($_POST['submit']))
    header("Location: form.php");
    exit();
}
?>