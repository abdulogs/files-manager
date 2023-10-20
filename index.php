<?php require_once "./classes/app.php"; ?>

<?php middleware::login("id", "home"); ?>

<?php f::module("account"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="shortcut icon" href="./src/images/logo.png" type="image/png">
    <title>Login - Dashboard</title>
    <!-- Common css -->
    <link rel="stylesheet" href="./src/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./src/libs/boxicons/css/boxicons.min.css">
    <!-- Custom css -->
    <link rel="stylesheet" href="./src/css/stylesheet.css">
    <link rel="stylesheet" href="./src/css/utilities.css">
</head>

<body class="bg-light">
    <!-- Navbar -->
    <?php f::component("navbar"); ?>
    <!-- Navbar -->

    <!-- Method -->
    <?php module::login(); ?>
    <!-- Method -->
    <main class="container container-sm container-md container-lg container-xl container-xxl">
        <div class="row justify-content-center mt-5 pt-5">
            <!-- Alerts -->
            <?php msg::get(); ?>
            <!-- Alerts -->
            <div class="col-sm-4 mt-5 pt-5">
                <form class="card border-0 p-4 py-5 shadow rounded-4" method="POST">
                    <h1 class="text-center mb-2 m-0 h3"><b>Login</b></h1>
                    <p class="text-center text-muted mb-3">Access the HyperScale Nexus Portal</p>
                    <div class="form-group mb-2">
                        <label for="email" class="fw-bold">Email address</label>
                        <input type="email" class="form-control form-control-lg border-0 bg-light font-12 shadow-none"
                            name="email" value="<?php echo http::param("email"); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="password" class="fw-bold">Password</label>
                        <input type="password" required
                            class="form-control form-control-lg border-0 bg-light font-12 shadow-none" name="password">
                    </div>
                    <div class="d-grid mt-3">
                        <button type="submit" class="btn btn-dark btn-sm mt-2 font-14 rounded" name="action" value="login">
                            <b>Login</b>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <!-- Content -->
    
    <!-- Footer -->
    <?php f::component("footer");  ?>
    <!-- Footer -->

    <!-- Libraries -->
    <script src="./src/libs/jquery/jquery.min.js"></script>
    <script src="./src/libs/popper/popper.min.js"></script>
    <script src="./src/libs/bootstrap/js/bootstrap.min.js"></script>

    <!-- Common -->
    <script src="./src/js/base.js"></script>

</body>

</html>