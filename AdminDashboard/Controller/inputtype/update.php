
<?php
include './dbcon.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = $_POST['id'] ?? '';
    $Nametype = $_POST['type'] ?? '';
    $sql = $pdo->prepare("
    UPDATE type 
    SET name = :nametype, updated_at = NOW()
    WHERE id = :id
");

$sql->execute([
    ':nametype' => $Nametype,
    ':id' => $id,
]);
   header("Location: /PHPprojectNum1/AdminDashboard/listtype.php");
   exit();

}
?>
