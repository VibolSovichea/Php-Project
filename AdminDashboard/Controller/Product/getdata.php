

<?php

function getPro() {
     include './db/dsconnect.php';
    $sql = "SELECT products.*, types.name AS type_name
            FROM products
            JOIN type ON products.type_id = types.id";
    
    $stm = $pdo->prepare($sql);
    $stm->execute();

   
    $result = $stm->fetchAll(PDO::FETCH_ASSOC);

 
    return $result;
}


$Myresult = getPro();

?>
