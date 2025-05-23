<?php
// db/config.php
$host = "localhost";
$db   = "c2831113_redmine";
$user = "c2831113_redmine";
$pass = "NE72bupofi";

try {
  $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die("❌ Error en la conexión: " . $e->getMessage());
}
?>
