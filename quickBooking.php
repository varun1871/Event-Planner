<?php
session_start();
?>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Event Planner</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/aos.min.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-4---Payment-Form.css">
    <link rel="stylesheet" href="assets/css/Carousel-Hero.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login-.css">
    <link rel="stylesheet" href="assets/css/Minimal-tabs-styles.css">
    <link rel="stylesheet" href="assets/css/Minimal-tabs.css">
    <link rel="stylesheet" href="assets/css/multi-step-form.css">
    <link rel="stylesheet" href="assets/css/MUSA_form-wizard-form-wizard.css">
    <link rel="stylesheet" href="assets/css/MUSA_form-wizard.css">
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="54" style="font-size: 14px;">
     <?php include("menu.php"); ?>
    <header class="shadow masthead" data-aos="fade" style="background: url(&quot;assets/img/header-bg.jpg&quot;);opacity: 0.9;"></header>
    <section id="services" style="background: #fffdf3;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h4 class="text-uppercase text-warning section-heading">Search &amp; Book</h4>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="card shadow-sm m-2" data-aos="fade-right">
                        <div class="card-body">
                            <h6 class="text-center text-danger card-title">Filters</h6>
                            <div class="row">
                                <div class="col d-lg-flex align-items-lg-center"><span class="flex-fill">Booking Amount Status</span><a class="btn btn-primary" role="button" href="#myModal" data-bs-toggle="modal"><i class="fa fa-align-justify"></i></a></div>
                            </div>
                            <div class="table-responsive my-3">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Our Estimate</td>
                                            <td><span>Text</span></td>
                                        </tr>
                                        <tr>
                                            <td>Selected Items</td>
                                            <td><span>Text</span></td>
                                        </tr>
                                        <tr>
                                            <td>Difference</td>
                                            <td><span>Text</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <ul class="list-group">
                                <li class="list-group-item"><span>Location</span></li>
                                <li class="list-group-item"><span>Food</span></li>
                                <li class="list-group-item bg-warning-subtle"><span>Decoration</span></li>
                                <li class="list-group-item"><span>Gifts Items</span></li>
                                <li class="list-group-item"><span>Range</span><input class="form-range" type="range" min="1000" max="50000" step="100" value="4500" data-bs-theme="dark"></li>
                                <li class="list-group-item d-flex justify-content-center"><button class="btn btn-primary flex-fill" type="button">Checkout</button></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card m-2" data-aos="fade-left">
                        <div class="card-body bg-primary-subtle">
                            <h4 class="text-primary-emphasis card-title">Royal Blue Resorts &amp; Clubs</h4>
                            <h6 class="text-muted card-subtitle mb-2">Address</h6>
                            <p>Parag raph Parag raphParag raph Parag raphParag raphParag raphParag raph Parag raphParag raph Parag raph</p>
                            <div class="col text-end"><button class="btn btn-danger m-1" type="button">Select&nbsp;<i class="fa fa-heart"></i></button><button class="btn btn-light link-light bg-info m-1" type="button">Contact&nbsp;<i class="fas fa-phone"></i></button><button class="btn btn-success m-1" type="button">Whatsapp&nbsp;<i class="fab fa-whatsapp"></i></button></div>
                        </div>
                    </div>
                    <div class="card bg-primary-subtle bg-opacity-75 shadow-sm m-2" data-aos="fade-left">
                        <div class="card-body">
                            <h4 class="text-primary-emphasis card-title">Royal Blue Resorts &amp; Clubs</h4>
                            <h6 class="text-muted card-subtitle mb-2">Address</h6>
                            <p>Parag raph Parag raphParag raph Parag raphParag raphParag raphParag raph Parag raphParag raph Parag raph</p>
                            <div class="col text-end"><button class="btn btn-danger m-1" type="button">Select&nbsp;<i class="fa fa-heart"></i></button><button class="btn btn-light link-light bg-info m-1" type="button">Contact&nbsp;<i class="fas fa-phone"></i></button><button class="btn btn-success m-1" type="button">Whatsapp&nbsp;<i class="fab fa-whatsapp"></i></button></div>
                        </div>
                    </div>
                    <div class="card bg-primary-subtle bg-opacity-75 shadow-sm m-2" data-aos="fade-left">
                        <div class="card-body">
                            <h4 class="text-primary-emphasis card-title">Royal Blue Resorts &amp; Clubs</h4>
                            <h6 class="text-muted card-subtitle mb-2">Address</h6>
                            <p>Parag raph Parag raphParag raph Parag raphParag raphParag raphParag raph Parag raphParag raph Parag raph</p>
                            <div class="col text-end"><button class="btn btn-danger m-1" type="button">Select&nbsp;<i class="fa fa-heart"></i></button><button class="btn btn-light link-light bg-info m-1" type="button">Contact&nbsp;<i class="fas fa-phone"></i></button><button class="btn btn-success m-1" type="button">Whatsapp&nbsp;<i class="fab fa-whatsapp"></i></button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container"><div class="container py-5">

  <div class="row">
    <div class="col-lg-7 mx-auto">
      <div class="bg-white rounded-lg shadow-sm p-5">
        <!-- Credit card form tabs -->
        <ul role="tablist" class="nav bg-light nav-pills rounded-pill nav-fill mb-3">
          <li class="nav-item">
            <a data-toggle="pill" href="#nav-tab-card" class="nav-link active rounded-pill">
                                <i class="fa fa-credit-card"></i>
                                Credit Card
                            </a>
          </li>
          <li class="nav-item">
            <a data-toggle="pill" href="#nav-tab-paypal" class="nav-link rounded-pill">
                                <i class="fa fa-paypal"></i>
                                Paypal
                            </a>
          </li>
          <li class="nav-item">
            <a data-toggle="pill" href="#nav-tab-bank" class="nav-link rounded-pill">
                                <i class="fa fa-university"></i>
                                 Bank Transfer
                             </a>
          </li>
        </ul>
        <!-- End -->


        <!-- Credit card form content -->
        <div class="tab-content">

          <!-- credit card info-->
          <div id="nav-tab-card" class="tab-pane fade show active">
            <p class="alert alert-success">Some text success or error</p>
            <form role="form">
              <div class="form-group">
                <label for="username">Full name (on the card)</label>
                <input type="text" name="username" placeholder="Jeff Doe" required class="form-control">
              </div>
              <div class="form-group">
                <label for="cardNumber">Card number</label>
                <div class="input-group">
                  <input type="text" name="cardNumber" placeholder="Your card number" class="form-control" required>
                  <div class="input-group-append">
                    <span class="input-group-text text-muted">
                                                <i class="fa fa-cc-visa mx-1"></i>
                                                <i class="fa fa-cc-amex mx-1"></i>
                                                <i class="fa fa-cc-mastercard mx-1"></i>
                                            </span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-8">
                  <div class="form-group">
                    <label><span class="hidden-xs">Expiration</span></label>
                    <div class="input-group">
                      <input type="number" placeholder="MM" name="" class="form-control" required>
                      <input type="number" placeholder="YY" name="" class="form-control" required>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group mb-4">
                    <label data-toggle="tooltip" title="Three-digits code on the back of your card">CVV
                                                <i class="fa fa-question-circle"></i>
                                            </label>
                    <input type="text" required class="form-control">
                  </div>
                </div>



              </div>
              <button type="button" class="subscribe btn btn-primary btn-block rounded-pill shadow-sm"> Confirm  </button>
            </form>
          </div>
          <!-- End -->

          <!-- Paypal info -->
          <div id="nav-tab-paypal" class="tab-pane fade">
            <p>Paypal is easiest way to pay online</p>
            <p>
              <button type="button" class="btn btn-primary rounded-pill"><i class="fa fa-paypal mr-2"></i> Log into my Paypal</button>
            </p>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
          </div>
          <!-- End -->

          <!-- bank transfer info -->
          <div id="nav-tab-bank" class="tab-pane fade">
            <h6>Bank account details</h6>
            <dl>
              <dt>Bank</dt>
              <dd> THE WORLD BANK</dd>
            </dl>
            <dl>
              <dt>Account number</dt>
              <dd>7775877975</dd>
            </dl>
            <dl>
              <dt>IBAN</dt>
              <dd>CZ7775877975656</dd>
            </dl>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
          </div>
          <!-- End -->
        </div>
        <!-- End -->

      </div>
    </div>
  </div>
</div>
</div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4"><span class="copyright">Copyright&nbsp;© Event Planner 2025</span></div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="#">Terms of Use</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/aos.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/agency.js"></script>
    <script src="assets/js/Bootstrap-4---Payment-Form-script.js"></script>
    <script src="assets/js/MUSA_form-wizard-form-wizard.js"></script>
</body>

</html>