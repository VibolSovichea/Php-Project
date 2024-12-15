


<?php

include('./dbconnection/connect.php');
include('./Controller/Product/product.php');

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

    <main class="main-wrapper">
      <!-- ========== header start ========== -->

         <?php
           include('./Layout/HeaderBar.php');

           
?>
<div class="overlay"></div>
   
      <!-- ========== header end ========== -->

      <!-- ========== section start ========== -->
      <section class="section">
      <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
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
            
            </div>
          </div>
          <div class="form-elements-wrapper">
            <div class="row">
              <div class="col-lg-12">
            
                <div class="card-style mb-30">
                  <h6 class="mb-25">Input Product</h6>

                  <form action="./Controller/Product/create.php" method="POST" enctype="multipart/form-data">
                  <div class="input-style-1">
                    <label>Product Name</label>
                    <input type="text" name="name" Foodname placeholder="Full Name" />
                  </div>

                  <div class="input-style-1">
                    <label>Prie</label>
                    <input type="number" name="price"Foodname placeholder="price" />
                  </div>

                  <div class="input-style-2">
                    <label>InputImage</label>
                    <input type="file" name="image" placeholder="image" />
                    <span class="icon"> <i class="lni lni-user"></i> </span>
                  </div>
                  
                  <div class="input-style-3">
                     <lable>Quantity</lable>
                    <input type="number" name="quantity"  />
           
                  </div>
                  <div class="card-style mb-30">
                  <h6 class="mb-25">Selects typeFood</h6>
                  <div class="select-style-1">
                    <label>type</label>
                    <div class="select-position">
                      <select name="typeoffood">
                        <?php
                          if($results){
                              foreach($results as $type){
                                echo '<option value="' . $type["id"] . '">' . $type["name"] ;
                              }
                          }
?>
                      </select>
                    </div>
                  </div>
                  <!-- end select -->
                 <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Description</label>
  <textarea type="text" class="form-control" name="descriptions" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>

     <button type="submit" class="btn btn-primary">
              submit
     </button>
                
             
                </div>
               

                  </form>
                
            
              
              
               
                </div>
             

 
              
           
              </div>
          
            </div>
           
          </div>
        
        </div>
     
      </section>

      <?php
      include './Layout/footer.php';


?>
    
    
    </main>

    <?php
      include './Layout/js.php';


?>

  </body>



</html>