<?php
require_once 'Estudiante.php'; 
session_start();              
require_once 'Pila.php';

$pila = new Pila();
$mensaje = "";

if (isset($_POST['insertar'])) {
    $e = new Estudiante($_POST['c'], $_POST['n'], $_POST['a'], $_POST['m'], $_POST['f'], $_POST['g']);
    $mensaje = $pila->apilar($e);
}

if (isset($_POST['eliminar'])) {
    $mensaje = $pila->desapilar();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pila PHP</title>
</head>
<body>
    <h2>Pila de Estudiantes (<?php echo $pila->obtenerTamanyo(); ?>/50)</h2>
    <p><b><?php echo $mensaje; ?></b></p>
    <form method="POST">
        <input type="text" name="c" placeholder="Código" required>
        <input type="text" name="n" placeholder="Nombres" required>
        <input type="text" name="a" placeholder="Apellidos" required>
        <input type="email" name="m" placeholder="Email" required>
        <input type="date" name="f" required>
        <select name="g">
            <option value="M">M</option>
            <option value="F">F</option>
        </select>
        <button type="submit" name="insertar">Apilar</button>
    </form>
    <br>
    <form method="POST">
        <button type="submit" name="eliminar">Desapilar</button>
    </form>
    <hr>
    <h3>Lista:</h3>
    <?php foreach ($pila->obtenerPila() as $est): ?>
        <p><?php echo "$est->codigo - $est->nombres $est->apellidos ($est->email)"; ?></p>
    <?php endforeach; ?>
</body>
</html>