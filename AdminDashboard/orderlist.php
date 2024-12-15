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
                                <h2>User Ordrlist</h2>
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
                                            user
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
                                <h6 class="mb-10">UserOrderlist</h6>
                                <div class="table-wrapper table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th><h6>ID</h6></th>
                                                <th><h6>UsernameName</h6></th>
                                                <th><h6>Email</h6></th>
                                                <th><h6>PhoneNumber</h6></th>
                                                <th><h6>Address</h6></th>
                                                <th><h6>Status</h6></th>
                                                <th><h6>Status</h6></th>
                                              
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td class="min-width"><p>Habergue</p></td>
                                                <td class="min-width"><p><a href="#0">image</a></p></td>
                                                <td class="min-width"><p>40</p></td>
                                                <td class="min-width"><span class="status-btn active-btn">Active</span></td>
                                                <td><div class="action"><p>action</p></div></td>
                                                <td><div class="action"><p>action</p></div></td>
                                               
                                              
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
         include ('./Layout/footer.php');
       ?>
   
    </main>



  <?php 
   include('./Layout/js.php');


?>

   
  
  </body>
</html>