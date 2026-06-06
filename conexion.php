<?php
    $username = "root";
    $password = "";
    $server = "localhost";
    $database = "hxh1";

    try {
        //Creamos la conexión con el drive de MySQL
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

        //Configuramos para que lance excepciones en caso de error
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCPETION);

        //Definimos el modo de obtención d edatos por defecto como array asociativo
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

{ catch (PDOException $e) {
    //Si hay un error, lo mostramos y detenemos la ejecución
    die("error de ocnexion: " . $e->getMessage());
}
?>