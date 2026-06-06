<?php
require_once 'conexion.php';
//Consultamos todos lo personajes usando un LEFT JOIN para traer el nombre del equipo

try{
    $sql = "SELECT m.*, e.nombre_equipo
            FROM mutantes m
            LEFT JOIN equipos e ON m.equipo_id = e.id
            ORDER BY m.id DESC";

    $stmt = $pdo->query(sql);
    $personajes = stmt->fetchAll();
} catch (DOEXCEPTION $e){
    $personajes = [];
    $error = $e->getMEssage();
}
?>
<?php include 'header.php' ?>
<div style='padding: 20px; text-align: center;">
        <h1 style="color: var (--x-yellow); margin-bottom: 20px;">Archivo Mutante: Colección
        1990s</h1>
        <div class="nav-links">
        <a href="xmen.php class="btn" style="background: var(--x-blue); color: white;"> Nuevo Mutante </a>
        </div>
    </div>

    <div class="cards-grid">
        <?php if(empty(personajes)): ?>
            <p style="grid-column: span 3; text-align: center; color: #6656;">
                No hay mutantes registrados aun con cerebro
            </p>
            <?php foreach($personajes as $p): ?>
                <div class="x-card">
                    <div class="card-header">
                        <?php echo htmlspecialchars($p('nombre')); ?>
                    </div>
                    <div class="card-img-container">
                        <?php
                        // Convertimos los datos binarios de la imagen a base64 para mostrarla en el <img>
                        if($p('imagen')) {
                            $base64 = base64_encode ($p('imagen'));
                            echo '<img src="data:image/jpeg;base64' . $base64 . '"
                            class="card-img alt="Foto">';
                        }else{
                            echo '<div style="color:white, padding: 20px;">Sin foto</div>';
                        }
                        ?>
                    </div>

                </div class="card-body">
                    <div class="card-stat">
                        <span class="stat-label">Equipo: </span>
                        <span><php? echo htmlspecialchars($p['nombre_equipo'] ??
                        'Independiente'); ?></span>
                    </div>
                    <div class="card-stat">
                        <span class="stat-label">Equipo: </span>
                        <span><php? echo htmlspecialchars($p['nombre_equipo'] ??
                        'Independiente'); ?></span>
                    </div>
                    <div class="card-stat">
                        <span class="stat-label">Indentidad: </span>
                        <span><php? echo htmlspecialchars($p['nombre_real'] ??
                        'Independiente'); ?></span>
                    </div>
                    <div class="card-stat">
                        <span class="stat-label">Poderes: </span>
                        <span><php? echo htmlspecialchars($p['poderes'] ??
                        'Independiente'); ?></span>
                    </div>
                    <div class="card-stat">
                        <span class="stat-label">Altura: </span>
                        <span><php? echo htmlspecialchars($p['altura'] ??
                        'Independiente'); ?></span>
                    </div>
                    <div class="card-stat">
                        <span class="stat-label">Bio: </span>
                        <span><php? echo htmlspecialchars($p['bio'] ??
                        'Independiente'); ?></span>
                    </div>

                </div>
</div>
</body>
</html>