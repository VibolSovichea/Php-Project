
<?php
include './dbconnection/connect.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = $_POST['id'] ?? '';

    if ($id) {
        // Fetch product details and its associated type
        $stm = $pdo->prepare("
            SELECT product.*, type.name AS type_name 
            FROM product 
            JOIN type ON product.type_id = type.id
            WHERE product.id = :id
        ");
        $alltype = $pdo->prepare("
            SELECT * FROM type
        ");

       
        $stm->execute(['id' => $id]);
        $result = $stm->fetch(PDO::FETCH_ASSOC);

  
        $alltype->execute();
        $myalltype = $alltype->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>



<!DOCTYPE html>
<html lang="en">



  <?php

  

include('./Layout/head.php');

  ?>
<body>

  <?php 
   include('./Layout/sidebar.php');
  ?>


   <div class="overlay"></div>
    <main class="main-wrapper">
        <?php 
          include('./Layout/HeaderBar.php');
        ?>

<section class="section">
      <div class="container-fluid">
       
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title">
                  <h2>Input Product</h2>
                </div>
              </div>
              <!-- end col -->
              <div class="col-md-6">
                <div class="breadcrumb-wrapper">
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="#0">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item"><a href="#0">Forms</a></li>
                      <li class="breadcrumb-item active" aria-current="page">
                        Form Elements
                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
         
          <div class="form-elements-wrapper">
            <div class="row">
              <div class="col-lg-12">

              
             
                <div class="card-style mb-30">

            
      
                  <form action="./Controller/Product/update.php" method="POST" enctype="multipart/form-data">
                  <h6 class="mb-25">Input Product</h6>
                  <?php if ($result): ?>
                  
                  <div class="input-style-1">
                    <label>Product Name</label>
                    <input type="hidden" name="id"value="<?php echo htmlspecialchars($result['id']); ?>" />
                    <input type="text" name="name" value="<?php echo htmlspecialchars($result['name']); ?>"  />
                  </div>


                  <div class="input-style-1">
                    <label>Price</label>
                    <input type="text" name="price" value="<?php echo htmlspecialchars($result['price']); ?>"  />
                  </div>
               
                  <div class="input-style-2">
                    <label>InputImage</label>
                    <input type="file" name="image" placeholder="image" value="<?php echo htmlspecialchars($result['image']); ?>" />
                    <p class="text-sm text-gray-500 mt-2">Current Image: <?php echo htmlspecialchars($result['image']); ?></p>
                  </div>
              
                  <div class="input-style-3">
                     <lable>Quantity</lable>
                    <input type="number" name="quantity" value="<?php echo htmlspecialchars($result['quantity']); ?>"    />
           
                  </div>
                  <div class="card-style mb-30">
                  <h6 class="mb-25">Selects typeFood</h6>
                  <div class="select-style-1">
                    <label>type</label>
                    <div class="select-position">
                      <select name="typeoffood">

                        <option selected value="<?php echo $result['id'] ?>">
                           <?php echo $result['type_name']  ?>

                        </option>
                        <?php
                          if($myalltype){
                              foreach($myalltype as $type){
                                echo '<option value="' . $type["id"] . '">' . $type["name"] ;
                              }
                          }
                          ?>
                      </select>
                    </div>
                  </div>
                  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Description</label>
  <textarea 
       name="descriptions"
        class="w-full col-12 px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" 
        rows="3"><?php echo htmlspecialchars($result['description']); ?></textarea>
</div>
                </div>
                <?php else: ?>
                                    <p>Product not found or invalid ID.</p>
                                <?php endif; ?>

                                  <button class="btn btn-primary" type="submit">
                                    Update
                                  </button>
                  </form>
               

                
              
                </div>
                <!-- end card -->
                <!-- ======= input style end ======= -->

                <!-- ======= select style start ======= -->
               
                <!-- ======= select style end ======= -->

                <!-- ======= select style start ======= -->
           
                <!-- end card -->
                <!-- ======= input style end ======= -->

                <!-- ======= input switch style start ======= -->
            
                <!-- ======= input switch style end ======= -->
              </div>
              <!-- end col -->
           
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
          <!-- ========== form-elements-wrapper end ========== -->
        </div>
        <!-- end container -->
      </section>

          <?php
            include('./Layout/footer.php');
          
          ?>

            <?php

              include('./Layout/js.php');
            
            ?>


   
         
    </main>



    
</body>
</html>
