<?php

function updateProduct() {
    include('./db.con.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'] ?? '';

        if (!$id) {
            die('Product ID is required to update.');
        }

        $name = $_POST['name'] ?? '';
        $quantity = isset($_POST['quantity']) ? (int)$_POST['quantity'] : 0;
        $price = isset($_POST['price']) ? number_format((float)$_POST['price'], 2) : '0.00';
        $type = $_POST['typeoffood'] ?? '';
        $description = $_POST['descriptions'] ?? '';

        $image = $_FILES['image'] ?? null;
        $imagePath = '';
        if ($image && $image['tmp_name']) {
            $imagePath = 'uploads/' . uniqid() . '-' . $image['name'];
            if (!move_uploaded_file($image['tmp_name'], $imagePath)) {
                die('Failed to upload image.');
            }
        } else {
            
            $fetchImageStmt = $pdo->prepare("SELECT image FROM product WHERE id = :id");
            $fetchImageStmt->execute([':id' => $id]);
            $existingProduct = $fetchImageStmt->fetch(PDO::FETCH_ASSOC);

            if ($existingProduct) {
                $imagePath = $existingProduct['image'];
            }
        }
        $sql = "
            UPDATE product 
            SET 
                name = :name, 
                quantity = :quantity, 
                price = :price, 
                type_id = :type_id, 
                description = :description, 
                image = :image, 
                updated_at = :update_at
            WHERE id = :id
        ";

        $stm = $pdo->prepare($sql);

        $params = [
            ':name' => $name,
            ':quantity' => $quantity,
            ':price' => $price,
            ':type_id' => $type,
            ':description' => $description,
            ':image' => $imagePath, // Always include the image path
            ':update_at' => date('Y-m-d H:i:s'),
            ':id' => $id
        ];

       
        if ($stm->execute($params)) {
            header('Location: /PHPprojectNum1/AdminDashboard/ProductList.php?message=Update+successful!');
            exit();

        } else {
             return "Update fials";
        }
    }
}

$Myresult = updateProduct();
if($Myresult){ 
    echo $Myresult;
}


?>

