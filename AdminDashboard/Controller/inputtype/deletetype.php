

<?php
function delete() {
    include './dbcon.php';


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'] ?? '';
        if (empty($id)) {
            header('Location: /PHPprojectNum1/AdminDashboard/editinputtype.php');
            exit();
        }
        if($id){
            $stmt = $pdo->prepare("DELETE FROM product WHERE type_id = :type_id");
            $stmt->execute([':type_id' => $id]);
            $stmt = $pdo->prepare("DELETE FROM type WHERE id = :id");
            $stmt->execute([':id' => $id]);
            header("Location: /PHPprojectNum1/AdminDashboard/listtype.php");
            exit();
        }
          

    }
}

delete();
?>

