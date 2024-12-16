
<?php
include('./Controller/Product/details.php');
$Mydetails = details(); 
?>

<!DOCTYPE html>
<html lang="en">

<?php
    include('./Layout/head.php');
  ?>

  </html>

    <body>
    <?php 
      include('./Layout/sidebar.php');
    ?>


<main class="main-wrapper">

<?php
           include('./Layout/HeaderBar.php');

           
?>
<div class="overlay"></div>
<section class="section">
      <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title">
                  <h2> Product details</h2>
                </div>
              </div>
              <!-- end col -->

                <?php
            
                 ?>
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
                  <h6 class="mb-25"> Details Product</h6>
                    <?php if($Mydetails): ?>

                            <div class="text-dark d-flex flex-row">

                            <h6>Product name:</h6>

                            <p class="ms-2">
                            <?php
                                    echo $Mydetails['name'];
                                   ?>
                            </p>
                            </div>


                              <div class="text-dark d-flex flex-row mt-3">
                              <h6>Product Quantity:</h6>
                              <p>
                              <?php
                                    echo $Mydetails['quantity'];
                                   ?>
                              </p>
                             
                              </div>


                              <div class="text-dark d-flex flex-row mt-3">
                              <h6>Product type:</h6>
                              <p class="ms-4">
                              <?php
                                    echo $Mydetails['type_name'];
                                   ?>
                              </p>
                             
                              </div>

                              <div class="text-dark d-flex flex-row mt-3">
                              <h6>Product Image:</h6>
                              <p class="ms-4">
                              <?php 
  
  echo '<img src="./Controller/Product/' . $Mydetails['image'] . '" alt="Product Image"style="width:100px" >';
  ?>
                              </p>
                             
                              </div>

                              
                              <div class="text-dark d-flex flex-row mt-3">
                              <h6>Product Image:</h6>
                              <p class="ms-4">
                              <?php 

                          echo $Mydetails['price'];
  ?>
                              </p>
                             
                              </div>

                               
                              <div class="text-dark d-flex flex-row mt-3">
                              <h6>Product Description:</h6>
                              <p class="ms-4">
                              <?php 
 
                          echo $Mydetails['description'];
  ?>
                              </p>
                             
                              </div>







                        <?php endif ?>
                    </div>
                   
                </div>
             

 
              
           
              </div>
          
            </div>
           
          </div>
        
        </div>
     
      </section>

 </main>



    </body>

    </html>