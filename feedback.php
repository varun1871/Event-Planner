<?php
session_start();
include('assets/Database/DBMySql.php');
$DB = new DBMySql;

// ---- Delete feedback (Admin only)
if (isset($_GET['delete'])) {
    $DB->NonQuery("DELETE FROM feedbacks WHERE FID=" . intval($_GET['delete']));
}

// ---- Insert new feedback
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $Name = $_POST["Name"];
    $Email = $_POST["Email"];
    $Message = $_POST["Message"];

    $sql = "INSERT INTO feedbacks (FeedBack, Name, CreatedOn, Email)
            VALUES ('{$Message}', '{$Name}', NOW(), '{$Email}')";
    if ($DB->NonQuery($sql)) {
        $_SESSION["Message"] = "Your message has been submitted successfully.";
    }
}

$IsAdmin = (isset($_SESSION["UserType"]) && $_SESSION["UserType"] === "Admin");

$sql = "SELECT * FROM feedbacks ORDER BY CreatedOn DESC";
$result = $DB->GetResult($sql);
?>

<!DOCTYPE html>
<html lang="en">
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
    <link href="assets/bootstrap/css/mystyle.css" rel="stylesheet" />
</head>

<body>
    <?php include('menu.php'); ?>

    <div class="container mt-5 pt-5">
        <div class="d-flex justify-content-between align-items-center my-3">
            <h5 class="text-secondary mb-0">User Feedback</h5>
            <button class="btn btn-primary text-white" data-bs-toggle="modal" data-bs-target="#feedbackModal"> Add Feedback
            </button>
        </div>
        <hr />

        <!-- ✅ Feedback Modal -->
        <div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="feedback.php" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title" id="feedbackModalLabel">Leave Feedback</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <div class="mb-3">
                                <input class="form-control" type="text" name="Name" required placeholder="Enter your Name" />
                            </div>
                            <div class="mb-3">
                                <input class="form-control" type="email" name="Email" required placeholder="Enter your Email ID" />
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" rows="5" name="Message" required placeholder="Enter your Feedback"></textarea>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button class="btn btn-primary" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- ✅ Feedback Cards -->
        <?php if ($result): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="card shadow-sm mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <img src="assets/img/male_user_comment.png" />
                            </div>
                            <div class="col">
                                <h4 class="card-title"><?= htmlspecialchars($row["Name"]) ?></h4>
                                <h6 class="text-muted card-subtitle mb-2">
                                    Email: <?= htmlspecialchars($row["Email"]) ?>
                                </h6>
                                <p class="card-text"><?= htmlspecialchars($row["FeedBack"]) ?></p>
                                <small class="text-muted"><?= htmlspecialchars($row["CreatedOn"]) ?></small>

                                <?php if ($IsAdmin): ?>
                                    <div class="mt-3">
                                        <a class="btn btn-danger btn-sm"
                                            href="feedback.php?delete=<?= intval($row["FID"]) ?>"
                                            onclick="return confirm('Are you sure you want to delete this feedback?');"> Delete
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

    <!-- ✅ Toast container -->
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 1055">
        <div id="feedbackToast" class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    <?= isset($_SESSION["Message"]) ? htmlspecialchars($_SESSION["Message"]) : "" ?>
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>

    <!-- ✅ Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const toastEl = document.getElementById('feedbackToast');
            <?php if (!empty($_SESSION["Message"])): ?>
                const toast = new bootstrap.Toast(toastEl, { delay: 4000 });
                toast.show();
            <?php endif; ?>
        });
    </script>

    <?php $_SESSION["Message"] = null; ?>
</body>
</html>
