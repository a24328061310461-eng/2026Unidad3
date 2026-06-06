<? php indlude 'header.php' ?>
</div>
<div class="container">
    <form action="proceso.php" method="POST" enctype="multipart/form-data">
 <div class="form-group">
        <label for="nombre">Personaje de Serie:</label>
       <input type="text" name="nombre" id="nombre" placeholder="Ej. Daenerys Targaryen" required>
       </div> <!-- el metodo post para enviar  datos de forma segura, especialmente archivos, que seran las fotos lo de enctype
   es obligatorio cuando el formulario incluye estos archivos de imagen u otro tipo de archivo y el de "proceso.html"
   es el que va a procesar los datos -->
       <div class="form-group">
        <label for="nombrereal">Nombre de la Actriz:</label>
        <input type="text" name="nombrereal" id="nombrereal" placeholder="Ej. Emilia Clarke" required>
        </div>
        <div class="form-group">
                <label for="poderes">Habilidad Destacada: </label>
                <input type="text" name="poderes" id="poderes" placeholder="Ej. Estrategia, Liderazgo" required>
        </div>
        <div class="form-group">
            <label for="altura"> Altura:</label>
            <input type="text" name="altura" id="altura" placeholder="Ej. 1.75 m" required>
            </div>
             <div class="form-group">
            <label for="ocupacion"> Ocupación:</label>
            <input type="text" name="ocupacion" id="ocupacion" placeholder="Ej. Reina / Espía" required>
            </div>
            <div class="form-group">
                <label for="bio">Biografía: </label>
                <textarea name="bio" id="bio" placeholder="Escribe la historia del personaje..."></textarea>
       </div>
         <div class="form-group">
                <label for="bio">Biografía: </label>
                <textarea name="bio" id="bio" placeholder="Escribe la historia del personaje..."></textarea>
       </div>
        <div class="form-group">
            <label for="imagen">Foto del Personaje:</label>
            <input type="file" name="imagen" id="imagen" accept="image/*" required>
            <!--con "imagen/* " solo acepatara imagenes, nada mas-->
        </div>
       <div style="text-align: center;">
            <button type="submit" class="btn">Guardar Personaje</button>
        </div>
    </form>
</div>
<link rel="stylesheet" href="stylexmen.css">

</body>
</html>