<?php
require_once "templates/head.php";
require_once "templates/headerNavbar.php";

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['logged']) || $_SESSION['logged'] !== true) {
    header('Location: login.php');
    exit();
}
?>

<<<<<<< HEAD
=======
<!DOCTYPE html>
<html>

<head>
    <title>Feedback</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<?php
    if (isset($_GET['success']) && $_GET['success'] == 1) {
        echo "<p class='success-message'>Feedback enviado</p>";
    }
    ?>
>>>>>>> 7372ac0e7aaf5c94edb2467258787ce581cd4edb
    <h2 class="feedback-form h2">Deja tu Feedback</h2>
    <form class=feedback-form action="procesar_feedback.php" method="POST">
        <label for="titulo">Título:</label><br>
        <input type="text" id="titulo" name="titulo" required><br><br>

        <label for="area">Área:</label><br>
        <input type="text" id="area" name="area" required><br><br>

        <label for="descripcion">Descripción:</label><br>
        <textarea id="descripcion" name="descripcion" required></textarea><br><br>

        <label for="calificacion">Calificación:</label><br>
        <input type="number" id="calificacion" name="calificacion" min="1" max="10" required><br><br>

        <input type="submit" value="Enviar Feedback">
    </form>
<?php
require_once "templates/footer.php";
?>