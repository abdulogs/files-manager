<?php require_once "./classes/app.php"; ?>
<!-- Middleware will redirect if session is out -->
<?php middleware::logout("id", "index"); ?>
<?php middleware::is_visitor("403"); ?>
<!-- Module -->
<?php f::module("members"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="shortcut icon" href="./src/images/logo.png" type="image/png">
    <title>Member details - Dashboard</title>
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
                    <a href="members.php" class="text-decoration-none text-dark">
                        Members
                    </a>
                </li>
                <li class="breadcrumb-item active fw-bold">Details</li>
            </ol>
        </nav>
        <!-- Breadcrumb -->
        <!-- card -->
        <?php $data = module::single(); ?>
        <div class="card col-sm-4 mx-auto shadow border-0 rounded-4 mb-5">
            <div class="card-header border-bottom bg-transparent py-3">
                <h3 class="card-title fw-bold m-0 d-flex align-items-center">
                    <span class="bx bx-show bg-light p-1 font-20 text-warning rounded-circle me-2"></span>
                    Details
                </h3>
            </div>
            <div class="card-body">
                <table class="table table-sm font-14 m-0">
                    <tr>
                        <td class="border-0"><b>Firstname</b></td>
                        <td class="border-0"><?php echo $data["firstname"]; ?></td>
                    </tr>
                    <tr>
                        <td class="border-0"><b>Lastname</b></td>
                        <td class="border-0"><?php echo $data["lastname"]; ?></td>
                    </tr>
                    <tr>
                        <td class="border-0"><b>Username</b></td>
                        <td class="border-0"><?php echo $data["username"]; ?></td>
                    </tr>
                    <tr>
                        <td class="border-0"><b>Email</b></td>
                        <td class="border-0"><?php echo $data["email"]; ?></td>
                    </tr>
                    <tr>
                        <td class="border-0"><b>Status</b></td>
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
                <a href="members.php" class="btn btn-light font-14 px-5 rounded-5 border fw-bold">Go back</a>
            </div>
        </div>


        <div class="card col-sm-4 mx-auto shadow border-0 rounded-4">
            <div class="card-header border-bottom bg-transparent py-3">
                <h3 class="card-title fw-bold m-0 d-flex align-items-center">
                    <span class="bx bx-show bg-light p-1 font-20 text-warning rounded-circle me-2"></span>
                    Login history
                </h3>
            </div>
            <div class="card-body">
                <table class="table table-sm font-14 m-0">
                    <?php $listing =  module::login_details(); ?>
                    <?php if ($listing) : ?>
                        <?php foreach ($listing as $item) : ?>
                            <tr>
                                <?php if ($item["status"] == 0) : ?>
                                    <td class="border-0"><b>Logout</b></td>
                                <?php else : ?>
                                    <td class="border-0"><b>Login</b></td>
                                <?php endif; ?>
                                <td class="border-0"><?php echo DT::format($data["created_at"]); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    <?php if (!$listing) : ?>
                    <tr class="text-center text-danger p-2">
                        <td colspan="2" class="m-0 p-0 font-14 border-0"><b>No records found!</b></td>
                    </tr>
                <?php endif; ?>
                </table>
            </div>
            <div class="card-footer border-top text-center bg-transparent">
                <?php DB::btns("login_history", $listing);  ?>
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

    <!-- Common -->
    <script src="./src/js/base.js"></script>

</body>

</html>