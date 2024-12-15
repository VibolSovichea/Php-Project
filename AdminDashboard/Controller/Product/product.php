<?php
$stm = $pdo->prepare("SELECT * FROM type");
$stm->execute();
$results = $stm->fetchAll(PDO::FETCH_ASSOC);
?>