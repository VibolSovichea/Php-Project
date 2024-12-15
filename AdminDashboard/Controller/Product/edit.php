
<?php


  function edit(){

    include './dbconnection/connect.php';

      $id = $_POST['id'] ?? '';


        if($id){
              $stm = $pdo->prepare("SELECT * FROM product WHERE id = :id");
              $stm->execute([
                'id' => $id
              ]);
              $result = $stm->fetch(PDO::FETCH_ASSOC);

               if($result){
              
                return $result;
               }
        }
    }

 $Myresult = edit();

  if($Myresult){
    header("Location: /PHPprojectNum1/AdminDashboard/Edit.php?message=Product created successfully");
    exit();
  }

   






?>