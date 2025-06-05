
<p>Bienvenido, <?php echo $_SESSION['jorge ortiz']; ?> 👋</p>
<?php
session_start();
if (!isset($_SESSION['jorge ortiz'])) {
    header("Location: login.php");
    exit();
}
?>
