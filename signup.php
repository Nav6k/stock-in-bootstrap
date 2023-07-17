<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "signup_page"; // Use underscores instead of spaces for the database name

// Create a mysqli connection
$con = mysqli_connect($hostname, $username, $password, $database);

// Check if the connection was successful
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

include("db.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Password = $_POST['pwd'];
    $RepeatPassword = $_POST['rpwd'];

    if (!empty($Email) && !empty($Password) && !is_numeric($Email)) {
        $query = "INSERT INTO form (name, email, pwd, rpwd) VALUES ('$Name', '$Email', '$Password', '$RepeatPassword')";

        if (mysqli_query($con, $query)) {
            echo "<script type='text/javascript'>alert('Successfully registered');</script>";
        } else {
            echo "<script type='text/javascript'>alert('Not successfully registered');</script>";
        }
    } else {
        echo "<script type='text/javascript'>alert('Not successfully registered');</script>";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
          crossorigin="anonymous">
</head>
<body>
<h1></h1>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
        crossorigin="anonymous"></script>
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <div class="mb-md-5 mt-md-4 pb-5 ">

                            <h2 class="fw-bold mb-2 text-uppercase">Sign up</h2>
                            <p class="text-white-50 mb-5">Please enter your login and password!</p>
                            <form method="POST">

                                <div class="form-outline form-white mb-4">
                                    <input type="text" name="name" id="typeEmailX" class="form-control form-control-lg"/>
                                    <label class="form-label" for="typeEmailX">Name</label>
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <input type="text" name="email" id="typePasswordX" class="form-control form-control-lg"/>
                                    <label class="form-label" for="typePasswordX">Email</label>
                                </div>
                                <div class="form-outline form-white mb-4">
                                    <input type="password" name="pwd" id="typePasswordX" class="form-control form-control-lg"/>
                                    <label class="form-label" for="typePasswordX">Password</label>
                                </div>
                                <div class="form-outline form-white mb-4">
                                    <input type="password" name="rpwd" id="typePasswordX" class="form-control form-control-lg"/>
                                    <label class="form-label" for="typePasswordX">Repeat Password</label>
                                </div>

                                <button class="btn btn-outline-light btn-lg px-5" type="submit">Register</button>

                            </form>

                            <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                            </div>

                        </div>

                        <div>
                            <p class="mb-0">Now you can go to login <a href="login.php" class="text-white-50 fw-bold">Sign Up</a>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>