
<?php

  function deleted(){
     include './db.con.php';
       if($_SERVER['REQUEST_METHOD'] == 'POST'){
           $id = $_POST['id'] ?? '';
       }
         if(empty($id)){
              header('Location: /PHPprojectNum1/AdminDashboard/ProductList.php ');
         }
         if($id
            ){
                $sql = $pdo->prepare("
                DELETE FROM product WHERE id = :id
                ");
                $sql->execute([
                    ':id' => $id,
                ]);
                header("Location: /PHPprojectNum1/AdminDashboard/ProductList.php");
                exit();
            }    

  }
  

     $result = deleted();

       echo $result;
?>