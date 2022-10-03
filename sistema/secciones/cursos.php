<?php

include_once '../configuraciones/db.php';
$conexionDB = DB::crearInstancia();


$id = isset($_POST['id']) ? $_POST['id'] : ''; // recibimos id del curso
$nombre_curso = isset($_POST['nombre_curso']) ? $_POST['nombre_curso'] : ''; // Recibimos nombre del curso
$accion = isset($_POST['accion']) ? $_POST['accion'] : '';


if ($accion != '') {
    switch ($accion) {
        case 'agregar':
            $sql = "INSERT INTO `cursos` (`id`, `nombre_curso`) VALUES (NULL, :nombre_curso)";
            $consulta = $conexionDB->prepare($sql);
            $consulta->bindParam(':nombre_curso', $nombre_curso);
            $consulta->execute();
            break;
        case 'editar':
            $sql = "UPDATE cursos SET nombre_curso =:nombre_curso WHERE id = :id";
            $consulta = $conexionDB->prepare($sql);
            $consulta->bindParam(':id', $id);
            $consulta->bindParam(':nombre_curso', $nombre_curso);
            $consulta->execute();
            break;
        case 'borrar':
            $sql = "DELETE FROM `cursos` WHERE id=:id";
            $consulta = $conexionDB->prepare($sql);
            $consulta->bindParam(':id', $id);
            $consulta->execute();
            break;
        case 'Seleccionar':
            $sql= "SELECT * FROM `cursos` WHERE id =:id";
            $consulta = $conexionDB->prepare($sql);
            $consulta->bindParam(':id', $id);
            $consulta->execute();
            $curso = $consulta->fetch(PDO::FETCH_ASSOC);
            $nombre_curso=$curso['nombre_curso'];
            break;
    }
}


$consulta = $conexionDB->prepare("SELECT * FROM `cursos`");
$consulta->execute();
$listaCursos = $consulta->fetchAll();
