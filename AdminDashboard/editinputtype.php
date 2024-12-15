
<?php

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
        
        $stm = $pdo->prepare("SELECT * FROM type WHERE id = :id"); // Bind the id to prevent SQL injection
        $stm->execute([':id' => $id]); // Bind the parameter properly
        $result = $stm->fetch(PDO::FETCH_ASSOC); // Fetch the result

       
        if ($result) {
          

        } else {
            // If no record is found, handle accordingly (you can redirect with an error message)
            header("Location: /PHPprojectNum1/AdminDashboard/editinputtype.php?error=No%20type%20found%20with%20that%20ID");
            exit();
        }
    } else {
        // If no id was passed
        header("Location: /PHPprojectNum1/AdminDashboard/editinputtype.php?error=Invalid%20ID");
        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<?php include('./Layout/head.php'); ?>

<body>
    <?php include('./Layout/sidebar.php'); ?>

    <main class="main-wrapper">
        <?php include('./Layout/HeaderBar.php'); ?>

        <section class="section">
            <div class="container-fluid">
                <div class="title-wrapper pt-30">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="title">
                                <h2>Input Product</h2>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="breadcrumb-wrapper">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb me-4">
                                        <a href="" class="text-dark ">Edit</a>
                                     
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-elements-wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-style mb-30">
                                <h6 class="mb-25">Edit Inputtype</h6>

                                <!-- Success Message -->
                           

                                <form action="./Controller/inputtype/update.php" method="POST">
                                    <div class="input-style-1">
                                        <label>Type Name</label>
                                        <?php
        if ($result) {
            echo '<input type="hidden" name="id" value="' . htmlspecialchars($result['id']) . '" />';
            echo '<input type="text" name="type" value="' . htmlspecialchars($result['name']) . '" />';
        }
        ?>
                 

                                    </div>
                                    <button class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>