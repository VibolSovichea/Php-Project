
<?php
include './Controller/Product/getdata.php';
?>
<!DOCTYPE html>
<html lang="en">

<?php
    include('./Layout/head.php');
  
  ?>

  </html>

<body>
     <?php 
     include './Layout/sidebar.php';
?>
    <div class="overlay"></div>
    <main class="main-wrapper">
        <?php
         include './Layout/HeaderBar.php';
        ?>
      <section class="table-components">
            <div class="container-fluid">
                <div class="title-wrapper pt-30">
                    <div class="row align-items-center">
                        <div class="col-md-6">
 


                            <div class="title">

                            <?php

if (isset($_GET['message'])) {
    echo '<div class="alert alert-success col-lg-12">';
  
    echo htmlspecialchars($_GET['message']);
    echo '</div>';
}
?>
                              
                                <h2>TablesProduct</h2>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="breadcrumb-wrapper">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="#0">Dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            Tables
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tables-wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-style mb-30">
                                <h6 class="mb-10">ProductList</h6>
                                <div class="table-wrapper table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th><h6>ID</h6></th>
                                                <th><h6>ProductName</h6></th>
                                                <th><h6>ProductImage</h6></th>
                                                <th><h6>Quantity</h6></th>
                                                <th><h6>Type</h6></th>
                                                <th><h6>Status</h6></th>
                                                <th><h6>Action</h6></th>
                                                <th><h6>Edit</h6></th>
                                                <th><h6>Delete</h6></th>
                                                <th><h6>Details</h6></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               
                        

                                                
                                                  

                                                  <?php
      if ($Myresult) {
          foreach ($Myresult as $myresult) { ?>
              <tr>
                  <td>
                      <?php
                       echo $myresult['id']
      
      
      ?>
          
                     </td>
                  </td>
                  <td class="min-width"><p>
                      <?php
                     echo $myresult['name'];
                      ?>
                  </p></td>

                  <td class="min-width"><p>
                    <div style="width:20px">
                    <?php 
  // Display the image using the src attribute
  echo '<img src="./Controller/Product/' . $myresult['image'] . '" alt="Product Image"style="width:100px" >';
  ?>
                    </div>
 
</p>


</td>


                  </p></td>
                  <td class="min-width"><p>
                      <?php
                     echo $myresult['quantity'];
                      ?>
                  </p></td>

                  <td class="min-width"><p>
                      <?php
                     echo $myresult['price'];
                      ?>
                  </p></td>

                  <td class="min-width"><p>
                      <?php
                     echo $myresult['type_name'];
                      ?>
                  </p></td>
                  <td class="min-width"><p>
                      <?php
                     echo $myresult['status'];
                      ?>
                  </p></td>
           
           
                  <td class="min-width"><p>
      
                  
                 <form method="POST" action="Edit.php">
         
          <input type="hidden" name="id" value="<?php echo $myresult['id']; ?>" />
          <button type="submit" class="btn btn-primary">Edit</button>
      </form>
      
    
                  </p></td>

                  <td class="min-width"><p>
                
              <form method="POST" action="./Controller/Product/delete.php" onsubmit="return false;">
          <input type="hidden" name="id" value="<?php echo $myresult['id']; ?>" />
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal">Delete</button>
      </form>
      <div class="modal fade" id="deleteConfirmModal" tabindex="-1" aria-labelledby="deleteConfirmModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteConfirmModalLabel">Confirm Deletion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this Product?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteButton">Delete</button>
            </div>
        </div>
    </div>
</div>
      
           
      
                  
                  </p></td>


                  <td class="min-width"><p>
      
                  
      <form method="POST" action="detailsPro.php">

<input type="hidden" name="id" value="<?php echo $myresult['id']; ?>" />
<button type="submit" class="btn btn-primary">Details</button>
</form>


       </p></td>
       

                  
      
              </tr>
          <?php }
      }
      ?>

      
                                                     
                                                  </tr>
                    
                
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



          <?php
           include './Layout/footer.php'
           ?>


    
    </main>
    <?php
      include './Layout/js.php';
    
    ?>

 
  </body>
</html>