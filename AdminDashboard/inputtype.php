



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
                        <div class="col-md-6 ">
                            <div class="breadcrumb-wrapper">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb me-4">

                                       <h3>
                                       <a href="listtype.php" class="text-dark ms-4 ">Table Type</a>
                                       </h3>

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
                                <h6 class="mb-25">Input Type Food</h6>
                                <?php if (isset($_GET['success'])): ?>
                                    <div class="alert alert-success">
                                        <?php echo htmlspecialchars($_GET['success']); ?>
                                    </div>
                                <?php endif; ?>

                                <form action="./Controller/inputtype/createtype.php" method="POST">
                                    <div class="input-style-1">
                                        <label>Type Name</label>
                                        <input type="text" name="type" placeholder="Type Name" required />
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
