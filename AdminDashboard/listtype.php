

<?php
include('./dbconnection/connect.php');
include('./Controller/Product/product.php')
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

    <div class="overlay"></div>
    <main class="main-wrapper">
    <?php 
      include('./Layout/HeaderBar.php');
    ?>
      <section class="table-components">
            <div class="container-fluid">
                <div class="title-wrapper pt-30">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="title">
                                <h2>List Of Type</h2>
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
                                <h6 class="mb-10">TypeList</h6>
                                <div class="table-wrapper table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th><h6>ID</h6></th>
                                                <th><h6>Type Food</h6></th>
                                                <th><h6>Edit</h6></th>
                                                <th><h6>Delete</h6></th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            <tr>
                                                  

                                            <?php
if ($results) {
    foreach ($results as $myresult) { ?>
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

            
            <form method="POST" action="editinputtype.php">
    <input type="hidden" name="edit" value="edit" />
    <input type="hidden" name="id" value="<?php echo $myresult['id']; ?>" />
    <button type="submit" class="btn btn-primary">Edit</button>
</form>

            </p></td>
            <td class="min-width"><p>
            <form method="POST" action="./Controller/inputtype/deletetype.php" onsubmit="return false;">
    <input type="hidden" name="id" value="<?php echo $myresult['id']; ?>" />
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal">Delete</button>
</form>


<div class="modal fade" id="deleteConfirmModal" tabindex="-1" aria-labelledby="deleteConfirmModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteConfirmModalLabel">Confirm Deletion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this record?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteButton">Delete</button>
            </div>
        </div>
    </div>
</div>
                    

            
            </p></td>

        </tr>
    <?php }
}
?>

                                                <td>
 
                                                </td>
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

      <!-- ========== section end ========== -->

      <!-- ========== footer start =========== -->
      <footer class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 order-last order-md-first">
              <div class="copyright text-center text-md-start">
                <p class="text-sm">
                  Designed and Developed by
                  <a href="https://plainadmin.com" rel="nofollow" target="_blank">
                    PlainAdmin
                  </a>
                </p>
              </div>
            </div>
            <!-- end col-->
            <div class="col-md-6">
              <div class="terms d-flex justify-content-center justify-content-md-end">
                <a href="#0" class="text-sm">Term & Conditions</a>
                <a href="#0" class="text-sm ml-15">Privacy & Policy</a>
              </div>
            </div>
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
      </footer>
      <!-- ========== footer end =========== -->
    </main>
    <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Are you want to delete </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
           <p>Are you want to delete</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/Chart.min.js"></script>
    <script src="js/dynamic-pie-chart.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/fullcalendar.js"></script>
    <script src="js/jvectormap.min.js"></script>
    <script src="js/world-merc.js"></script>
    <script src="js/polyfill.js"></script>
    <script src="js/main.js"></script>

    <script>
   
    document.getElementById('confirmDeleteButton').addEventListener('click', function () {
      
        const form = document.querySelector('form[onsubmit="return false;"]');
        if (form) {
            form.submit();
        }
    });
</script>
 
  </body>
</html>