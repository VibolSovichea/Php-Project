
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container my-5 mt-5">
    <div class="row justify-content-center mt-5">
        <div class="col-lg-6">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white text-center">
                    <h2 class="form-title mb-0">Login Account</h2>
                </div>
                <div class="card-body mt-5">
                    <form method="POST" novalidate>
                        <div class="mb-3">
                            <label for="name" class="form-label"> Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Your Name" required />
                        </div>
                        <div class="mb-3">
                            <label for="emails" class="form-label">Password</label>
                            <input type="email" class="form-control" name="emails" placeholder="Your Email" required />
                        </div>
                    
                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <p class="loginhere mb-0">Already have an account? <a href="#" class="text-decoration-none">Login here</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>