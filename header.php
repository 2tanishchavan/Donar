<nav class="navbar navbar-expand-sm bg-light sticky-top">
    <div class="container">
        <a class="navbar-brand headStyle" href="main.php"><img src="image/favicon.jpg" width="30" height="30" class="rounded-circle">BloodCare</a>

        <?php if (isset($_SESSION['hid'])) { ?>

        <?php } elseif (isset($_SESSION['rid'])) { ?>

        <?php }  else { ?>
                    <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link btn btn-light" href="login.php">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-light" href="register.php">Register</a>
            </li>

        </ul>

        <?php } ?>
       </div>
    </div>
</nav>