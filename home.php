<?php require_once "./classes/app.php"; ?>
<!-- Login redirect -->
<?php middleware::logout("id", "index"); ?>
<!-- Home page -->
<?php f::module("index"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="shortcut icon" href="./src/images/logo.png" type="image/png">
    <title>Home - Dashboard</title>
    <!-- Common css -->
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
    <main class="container container-sm container-md container-lg container-xl container-xxl py-5 my-5 pt-2">
        <!-- Breadcrumb -->
        <nav class="py-5 my-5 mb-2">
            <h1 class="font-20 text-dark text-decoration-none fw-bold">Dashboard</h1>
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item">
                    <a href="index.php" class="text-decoration-none text-dark">Home</a>
                </li>
                <li class="breadcrumb-item active fw-bold">All</li>
            </ol>
        </nav>
        <!-- Breadcrumb -->

        <div class="row">
            <?php $folders = module::folders(); ?>
            <?php if ($folders) : ?>
                <?php foreach ($folders as $folder) : ?>
                    <div class="col-sm-12">
                        <h2 class="font-20 fw-bold mb-4 d-flex align-items-center text-success">
                         <span class="bx bx-folder me-2"></span>   <?php echo $folder["name"]; ?>
                        </h2>
                    </div>
                    <?php $files = module::files($folder["id"]); ?>
                    <?php if ($files): ?>
                        <?php foreach ($files as $file) : ?>
                            <div class="col-sm-4">
                                <div class="card  shadow rounded-3 border border-dark mb-4">
                                    <div class="card-body d-flex align-items-center">
                                        <span class="bx bx-file font-30 rounded-3 p-2 bg-light"></span>
                                        <div class="ms-2 text-black me-auto">
                                            <h3 class="m-0 mb-1 font-12"><b><?php echo $file["name"]; ?></b></h3>
                                            <p class="m-0 text-muted"><?php echo $file["description"]; ?></p>
                                        </div>
                                        <a href="file.php?id=<?php echo $file["id"]; ?>" class="bx bx-download btn btn-sm btn-danger p-4 rounded-2"></a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
            <?php if (!$folders) : ?>
                <div class="text-center text-danger p-2 border-bottom">
                    <p class="m-0 p-0 font-14"><b>No records found!</b></p>
                </div>
            <?php endif; ?>
            <div class="col-sm-12 text-center py-3 mt-5">
                <?php DB::btns("home", $folders);  ?>
            </div>
        </div>

    </main>
    <!-- Content -->

    <!-- Libraries -->
    <script src="./src/libs/jquery/jquery.min.js"></script>
    <script src="./src/libs/popper/popper.min.js"></script>
    <script src="./src/libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="./src/js/base.js"></script>

</body>

</html>