<?php $user = auth::user(); ?>

<header class="navbar navbar-expand navbar-dark fixed-top bg-dark shadow-sm py-2">
    <nav class="container container-sm container-md container-lg container-xl container-xxl">
        <a class="navbar-brand" href="index.php">
            <img src="./src/images/logo.png" class="d-inline-block" width="180">
        </a>
        <?php if (f::is_authenticated()) : ?>
            <?php if (f::is_admin()) : ?>
                <ul class="navbar-nav nav-center d-none d-lg-flex">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="members.php">Members</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="files.php">Files</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="folders.php">Folders</a>
                    </li>
                </ul>
            <?php endif; ?>

            <div class="dropdown ms-3">
                <a href="javascript:void(0)" data-bs-toggle="dropdown" class="d-flex align-items-center text-white text-decoration-none">
                    <b class="font-14 text-white">@<?php echo $user["username"]; ?></b>
                    <b class="bx bx-chevron-down font-18"></b>
                </a>
                <div class="dropdown-menu shadow border-0 rounded-4">

                    <a href="profile.php" class="dropdown-item">
                        <span class="icon bx bx-user-circle"></span> Profile
                    </a>
                    <a href="change-password.php" class="dropdown-item">
                        <span class="icon bx bx-lock"></span> Change password
                    </a>

                    <a href="logout.php" class="dropdown-item">
                        <span class="icon bx bx-log-out"></span> Logout
                    </a>
                </div>
            </div>
            <?php if (f::is_admin()) : ?>
                <div class="nav-item dropdown dropstart ms-3 d-inline d-md-inline d-lg-none">
                    <button type="button" class="btn btn-light rounded-circle text-dark btn p-1 shadow-none bx bx-menu font-24" data-bs-toggle="dropdown"></button>
                    <ul class="dropdown-menu border-0 shadow rounded-4 font-14">
                        <li>
                            <a class="dropdown-item d-flex align-items-center text-dark" href="members.php">
                                All members
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center text-dark" href="files.php">
                                Files
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center text-dark" href="folders.php">
                                Folders
                            </a>
                        </li>
                    </ul>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </nav>
</header>