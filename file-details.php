<?php require_once "./classes/app.php"; ?>
<!-- Middleware will redirect if session is out -->
<?php middleware::logout("id", "index"); ?>
<?php middleware::is_visitor("403"); ?>
<!-- Module -->
<?php f::module("files"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="shortcut icon" href="./src/images/logo.png" type="image/png">
    <title>File details - Dashboard</title>
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
                    <a href="files.php" class="text-decoration-none text-dark">
                        Files
                    </a>
                </li>
                <li class="breadcrumb-item active">Details</li>
            </ol>
        </nav>
        <!-- Breadcrumb -->
        <!-- card -->
        <?php $data = module::single(); ?>
        <div class="card col-sm-4 mx-auto shadow border-0 rounded-4">
            <div class="card-header border-bottom bg-transparent py-3">
                <h3 class="card-title fw-bold m-0 d-flex align-items-center">
                    <span class="bx bx-show bg-light p-1 font-20 text-warning rounded-circle me-2"></span>
                    Details
                </h3>
            </div>
            <div class="card-body">
                <table class="table table-sm font-14 m-0">
                    <tr>
                        <td class="border-0"><b>Name</b></td>
                        <td class="border-0"><?php echo $data["name"]; ?></td>
                    </tr>
                    <tr>
                        <td class="border-0"><b>Description</b></td>
                        <td class="border-0"><?php echo $data["description"]; ?></td>
                    </tr>
                    <tr>
                        <td class="border-0"><b>Folder</b></td>
                        <td class="border-0"><?php echo $data["folder"]; ?></td>
                    </tr>
                    <tr>
                        <td class="border-0"><b>File</b></td>
                        <td class="border-0">
                            <a href="uploads/<?php echo $data["file"]; ?>" target="_blank" class="bx bx-show btn btn-sm btn-light p-2 rounded-2"></a>
                            <a href="uploads/<?php echo $data["file"]; ?>" download="<?php echo $data["file"]; ?>" target="_blank" class="bx bx-download btn btn-sm btn-light p-2 rounded-2"></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="border-0"><b>Active</b></td>
                        <td class="border-0"><?php echo f::is_active($data["is_active"]); ?></td>
                    </tr>
                    <tr>
                        <td class="border-0"><b>Created at</b></td>
                        <td class="border-0"><?php echo DT::format($data["created_at"]); ?></td>
                    </tr>
                    <tr>
                        <td class="border-0"><b>Updated at</b></td>
                        <td class="border-0"><?php echo DT::format($data["updated_at"]); ?></td>
                    </tr>
                </table>
            </div>
            <div class="card-footer border-top text-center bg-transparent">
                <a href="files.php" class="btn btn-light font-14 px-5 rounded-5 border fw-bold">Go back</a>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <?php f::component("footer");  ?>
    <!-- Footer -->

    <!-- Libraries -->
    <script src="./src/libs/jquery/jquery.min.js"></script>
    <script src="./src/libs/popper/popper.min.js"></script>
    <script src="./src/libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="./src/js/base.js"></script>

</body>

</html>