<nav class="navbar navbar-expand-lg fixed-top bg-dark navbar-dark" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="#page-top">Event Planner</a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive-1">
            <ul class="navbar-nav ms-auto text-uppercase">


                <?php if (!isset($_SESSION["UID"])) { ?>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link text-white" href="login.php">Login</a>
                    </li>

                <?php } else { ?>


                    <li class="nav-item text-white" role="presentation">
                        <a class="nav-link  text-white">
                            Welcome <?php echo $_SESSION["UserName"]; ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="quickBooking.php">Quick Booking</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="MyBookings.php">My Bookings</a>
                    </li>

                    <li class="nav-item text-white" role="presentation">
                        <a class="nav-link  text-white" href="assets/phpscript/Logout.php">Logout</a>
                    </li>
                <?php } ?>



                <li class="nav-item text-white" role="presentation">
                    <a class="nav-link  text-white" href="feedback.php">Feedbacks</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

