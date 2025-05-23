<?php
header('Content-Type: application/json');
require_once '../db/config.php';

$sql = "
SELECT 
  t.rm,
  t.asunto,
  t.estado,
  t.prioridad,
  t.asignado_a,
  t.actualizado,
  t.tags,
  s.nombre AS sistema,
  ei.nombre AS estado_interno
FROM tickets t
JOIN sistemas s ON t.sistema_id = s.id
JOIN estado_interno ei ON t.estado_interno_id = ei.id
ORDER BY t.actualizado DESC
";

$stmt = $pdo->prepare($sql);
$stmt->execute();
$tickets = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($tickets);
?>