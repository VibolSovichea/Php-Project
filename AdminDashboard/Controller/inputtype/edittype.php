<?php
// editData.php




$host = "localhost";
$db = "numproject";
$user = "root";
$pass = "";

try {
    // Establish a database connection
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database $db: " . $e->getMessage());
}




if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? '';
 
    if ($id) {
        $stm = $pdo->prepare("SELECT * FROM type WHERE id = :id");
        $stm->execute([':id' => $id]);
        $result = $stm->fetch(PDO::FETCH_ASSOC);  // Fetch the result
        

        if ($result) {
            header("Location: /PHPprojectNum1/AdminDashboard/editinputtype.php?"); 
            exit();
        }
    } else {
        header("Location: /PHPprojectNum1/AdminDashboard/editinputtype.php?error=Invalid%20ID");
        exit();
    }
} else {
}

 

?>

