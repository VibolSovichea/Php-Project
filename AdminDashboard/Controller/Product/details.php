


<?php

function details() {
   
    include './dbconnection/connect.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'] ?? ''; 

        if (!$id) {
            die('Product ID is required to update');
        }

        $Stm = $pdo->prepare("
            SELECT product.*, type.name AS type_name
            FROM product 
            JOIN type ON product.type_id = type.id
            WHERE product.id = :id
        ");
        $Stm->execute(['id' => $id]);
        $details = $Stm->fetch(PDO::FETCH_ASSOC);
        return $details;
    }
}

?>
