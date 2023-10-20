<?php require_once "./classes/app.php"; ?>
<!-- Middleware will redirect if session is out -->
<?php middleware::logout("id", "index"); ?>
<?php middleware::is_visitor("403"); ?>
<!-- Module -->
<?php f::module("folders"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="shortcut icon" href="./src/images/logo.png" type="image/png">
    <title>Folder update - Dashboard</title>
    <link rel="stylesheet" href="./src/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./src/libs/boxicons/css/boxicons.min.css">
    <link rel="stylesheet" href="./src/css/stylesheet.css">
    <link rel="stylesheet" href="./src/css/utilities.css">
</head>

<body class="bg-light">
    <!-- Navbar -->
    <?php f::component("navbar"); ?>
    <!-- Navbar -->

    <!-- Content -->
    <main class="container container-sm container-md container-lg container-xl container-xxl">
        <!-- Breadcrumb -->
        <nav class="mt-5 pt-5 pb-4">
            <h1 class="font-20 text-dark text-decoration-none fw-bold">Dashboard</h1>
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item">
                    <a href="index.php" class="text-decoration-none text-dark">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="folders.php" class="text-decoration-none text-dark">
                        Folders
                    </a>
                </li>
                <li class="breadcrumb-item active">Update</li>
            </ol>
        </nav>
        <!-- Breadcrumb -->
        <!-- Alerts -->
        <?php msg::get(); ?>
        <!-- Alerts -->
        <?php module::update(); ?>
        <?php $data = module::single(); ?>
        <form class="card col-sm-4 mx-auto shadow border-0 rounded-4" enctype="multipart/form-data" method="POST">
            <div class="card-header border-bottom bg-transparent py-3">
                <h3 class="card-title fw-bold m-0 d-flex align-items-center">
                    <span class="bx bx-edit bg-light p-1 font-20 text-warning rounded-circle me-2"></span>
                    Update
                </h3>
            </div>
            <div class="card-body">
                <div class="form-group mb-3">
                    <label class="font-weight-bolder mb-0 font-14" for="name"><b>Name</b></label>
                    <input class="form-control form-control-lg shadow-none border font-14" value="<?php echo $data["name"]; ?>" name="name" type="text" required />
                </div>
                <div class="form-group mb-3 col-sm-12">
                    <label class="font-weight-bolder mb-0 font-14" for="is_active"><b>Active</b></label>
                    <select name="is_active" class="form-select shadow-none border form-control-lg font-14" required>
                        <?php f::is_active($data["is_active"], "option"); ?>
                    </select>
                </div>
            </div>
            <div class="card-footer border-top bg-transparent text-center">
                <a href="folders.php" class="btn btn-light font-14 ps-5 pe-5 border rounded-5"><b>Go back</b></a>
                <button class="btn btn-dark rounded-5 font-14 ps-5 pe-5" name="action" value="update" type="submit"><b>Update</b></button>
            </div>
        </form>
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