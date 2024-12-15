

<?php

function getPro() {
     include './dbconnection/connect.php';
    $sql = "SELECT product.*, type.name AS type_name
            FROM product
            JOIN type ON product.type_id = type.id";
    
    $stm = $pdo->prepare($sql);
    $stm->execute();

   
    $result = $stm->fetchAll(PDO::FETCH_ASSOC);

 
    return $result;
}


$Myresult = getPro();

?>
