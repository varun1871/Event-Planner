<?php
session_start();
include('assets/phpscript/FormatedOutput.php');
$Email = $err = "";
if (isset($_POST["Email"])) {
    include('assets/Database/DBMySql.php');
    $db = new DBMySql;

    $Email = $_POST["Email"];

    $PWD = $_POST["PWD"];


    $sql = "select count(*) from `users` where `Email` ='" . $Email . "' and `PWD` ='" . $PWD . "';";
    //echo $db->ScalerQuery($sql);
    if ($db->ScalerQuery($sql) == "1") {
        $sql = "select UID from `users` where `Email` ='" . $Email . "' and `PWD` ='" . $PWD . "';";
        $UID = $db->ScalerQuery($sql);

        $_SESSION["UID"] = $UID;

        $_SESSION["UserName"] = $db->ScalerQuery("select UserName from `users` where UID=" . $UID);
        $_SESSION["UserType"] = $db->ScalerQuery("select UserType from `users` where UID=" . $UID);

        $_SESSION["Email"] = $Email;

        header("Location: mybookings.php");
        return;
    } else {
        $err = "Invalid Credentials";
    }


}
?>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Home - Event Planner</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script&amp;display=swap" />
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/css/aos.min.css" />
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <link rel="stylesheet" href="assets/css/Bootstrap-4---Payment-Form.css" />
    <link rel="stylesheet" href="assets/css/Carousel-Hero.css" />
    <link rel="stylesheet" href="assets/css/Google-Style-Login-.css" />
    <link rel="stylesheet" href="assets/css/Minimal-tabs-styles.css" />
    <link rel="stylesheet" href="assets/css/Minimal-tabs.css" />
    <link rel="stylesheet" href="assets/css/multi-step-form.css" />
    <link rel="stylesheet" href="assets/css/MUSA_form-wizard-form-wizard.css" />
    <link rel="stylesheet" href="assets/css/MUSA_form-wizard.css" />
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="54">
    <?php include("menu.php"); ?>

    <div class="modal fade text-center portfolio-modal" role="dialog" tabindex="-1" id="portfolioModal3">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <h2 class="text-uppercase">Project Name</h2>
                                <?php if ($err != "") {
                                    PrintAlert($err, 'warning');
                                } ?>
                                <img class="img-fluid d-block mx-auto" src="assets/img/3.jpg" />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-unstyled">
                                    <li>Date: January 2017</li>
                                    <li>Client: Threads</li>
                                    <li>Category: Illustration</li>
                                </ul><button class="btn btn-primary" type="button" data-bs-dismiss="modal"><i class="fa fa-times"></i><span>&nbsp;Close Project</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header class="shadow masthead" data-aos="fade" style="background: url(&quot;assets/img/header-bg.jpg&quot;);opacity: 0.90;">
        <div class="container"></div>
    </header>
    <section class="bg-white" id="services" style="background: linear-gradient(rgba(255,241,219,0.31), rgba(255,175,175,0.19));">
        <div class="container">
            <div class="row">
                <div class="col"><img data-aos="fade-right" data-aos-duration="950" src="assets/img/champagne_by_Artdesigner.lv.png" /></div>
                <div class="col">
                    <h3 class="display-1 text-uppercase text-center text-warning jello animated section-heading">Welcome</h3>
                    <div class="shadow-lg swing animated login-card" style="border-radius: 43px;">
                        <img class="profile-img-card" src="assets/img/avatar_2x.png" />
                        <p class="profile-name-card"></p>

                        <form class="form-signin" method="post" action="login.php">
                            <span class="reauth-email"></span>
                            <input class="form-control" type="email" required placeholder="Email address" name="Email" id="Email" />
                            <input class="form-control" type="password" required placeholder="Password" id="Password" name="PWD" />
                            <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit">Sign in</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/aos.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/agency.js"></script>
    <script src="assets/js/Bootstrap-4---Payment-Form-script.js"></script>
    <script src="assets/js/MUSA_form-wizard-form-wizard.js"></script>
</body>

</html>