<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-fill">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="jobs.php">Find Jobs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="companies.php">Companies</a>
                </li>
                <?php if (empty($_SESSION['uid'])) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Register</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                <?php } else { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="feedback.php">Feedback / Suggestions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="myjobs.php">My Jobs</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profile
                        </a>
                        <ul class="dropdown-menu">
                            <li class="">
                                <a class="dropdown-item" href="profile.php">Update Profile</a>
                            </li>
                            <li class="">
                                <a class="dropdown-item" href="view_profile.php">View Profile</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                <?php } ?>
            </ul>
            <form class="d-flex" role="search">
                <div class="nav-item">
                    <a class="nav-link d-inline text-success" href="Employers/">Employers </a> /<a class="nav-link d-inline text-danger" href="Admin/"> Admin</a>
                </div>
            </form>
        </div>
    </div>
</nav>