<?php

function createPro() {
  
$host = "localhost";
$db = "numproject";
$user = "root";
$pass = "";

try {
   
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database $db: " . $e->getMessage());
}

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
        $name = $_POST['name'] ?? '';
        $quantity = isset($_POST['quantity']) ? (int)$_POST['quantity'] : '';
        $price = isset($_POST['price']) ? number_format((float)$_POST['quantity'], 2) : '';
        $type = $_POST['typeoffood'] ?? '';
        $description = $_POST['descriptions'] ?? '';
        
        
        $image = $_FILES['image'] ?? null;

        $imagePath = '';

        if ($image && $image['tmp_name']) {
            $imagePath = 'uploads/' . uniqid() . '-' . $image['name'];
            if (!move_uploaded_file($image['tmp_name'], $imagePath)) {
              
            }
        }

       

        $stm = $pdo->prepare("
        INSERT INTO product (name, quantity, price, image, type_id, description, created_at, updated_at)
        VALUES (:name, :quantity, :price, :image, :type_id, :description, :create_at, :update_at)
    ");
    
    $stm->execute([
        ':name' => $name,
        ':quantity' => $quantity,
        ':price' => $price,
        ':image' => $imagePath,
        ':type_id' => $type, // Use ':type_id' instead of ':type'
        ':description' => $description,
        ':create_at' => date('Y-m-d H:i:s'),
        ':update_at' => date('Y-m-d H:i:s')
    ]);
    

            header("Location: /PHPprojectNum1/AdminDashboard/ProductList.php?message=Product created successfully");
            exit();
      
    }
}

$result = createPro();

  echo $result;

 




?>