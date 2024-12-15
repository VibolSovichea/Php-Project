<?php


function create(){
    include './dbcon.php';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $Nametype = $_POST['type'] ?? '';
    
        if (empty($Nametype)) {
            header('Location: ../AdminDashboard/inputtype.php?error=Type name is required!');
            exit;
        }
    
      
        $stm = $pdo->prepare("
            INSERT INTO type (name, created_at, updated_at) 
            VALUES (:nametype, NOW(), NOW())
        ");
    
      
        if ($stm->execute(['nametype' => $Nametype])) {
          
            header("Location: /PHPprojectNum1/AdminDashboard/inputtype.php?success=Type%20added%20successfully!");
            exit();
            
          
        } else {
           
            header('Location: ../AdminDashboard/inputtype.php?error=Failed to add the type.');
            exit;
        }
    }
}

$Create = create();
if($Create){
    echo $Create;
}
