<?php
#include the email.php
include_once "email.php";

$bad_msg = '';
$good_msg = '';

if(isset($_POST['submit'])) {
    $name = htmlspecialchars(trim($_POST['full_name'] ?? ''), ENT_QUOTES, 'UTF-8');

    $email = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
    if(!$email) {
        $bad_msg = 'Invalid email address';
    }

    $phone = htmlspecialchars(trim($_POST['phone'] ?? ''), ENT_QUOTES,'UTF-8');

    $subject = htmlspecialchars(trim($_POST['subject'] ?? ''),ENT_QUOTES, 'UTF-8');

    $message = htmlspecialchars(trim($_POST['message'] ?? ''), ENT_QUOTES, 'UTF-8');

    if (empty($name) || empty($email) || empty($phone) || empty($subject) || empty($message)) {
        $bad_msg = "Please fill in all required fields.";
    }

    //Send Volunteer message
    $result = sendmessage($name, $email, $phone, $subject,$message);

    if($result) {
        $good_msg = 'Message Sent!';
    }  else {
        $bad_msg = 'Message failed to send.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/logo/TRCN_SMCS_LOGO.png">
    <title>Contact Us - Teachers Registration Council of Nigeria</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- font awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <!-- css stylesheet -->
     <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'includes/header.php' ?>

    <section class="coop-contact container py-5">
        <div class="row d-flex flex-wrap align-items-center">
            <div class="col-lg-6 order-2 order-lg-1">
                <div class="contact-details">
                    <h4 class="contact-title mb-5">
                        Get in touch with<br> us Today!
                    </h4>

                    <div class="contact-questions mb-5">
                        <ul>
                            <li>Do you have any questions or suggestions?</li>
                            <li>Do you want to be a partner?</li>
                            <li>Do you want to be a volunteer?</li>
                        </ul>
                    </div>

                    <div class="contact-address mb-5">
                        <ul>
                            <li class="mb-4 d-flex align-items-center"><img src="assets/contact/contact_icon.png" alt="coop-contact-details">info@trcncoop.ng</li>
                            <li class="d-flex align-items-center"><img src="assets/contact/map_icon.png" alt="coop-contact-details">12, Oda Crescent, off Aminu Kano<br> Crescent, Wuse II, Abuja, Nigeria</li>
                        </ul>
                    </div>

                    <div class="coop-socialMedia">
                        <h4>Follow us on:</h4>
                        <div class="social-icons">
                            <a href="#" alt="social_link">
                                <div class="b-box">
                                    <img src="assets/contact/facebook.png" alt="coop-facebook">
                                </div>
                            </a>
                            
                            <a href="#" alt="social_link">
                                <div class="b-box">
                                    <img src="assets/contact/twitter.png" alt="coop-facebook">
                                </div>
                            </a>
                            
                            <a href="#" alt="social_link">
                                <div class="b-box">
                                    <img src="assets/contact/instagram.png" alt="coop-facebook">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-6 order-1 order-lg-2">
                <form class="p-4 bg-white rounded-4" method="post">
                    <div class="row">
                        <div class="col-12 mb-5">
                            <h4 class="text-danger"><?php echo $bad_msg ?></h4>
                            <h4 class="text-success"><?php echo $good_msg ?></h4>
                        </div>
                    </div>

                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="text" name="full_name" class="form-control border-black coop-form" placeholder="Full Name">
                        </div>

                        <div class="col-md-6">
                            <input type="email" name="email" class="form-control border-black coop-form" placeholder="Email">
                        </div>

                        <div class="col-md-6">
                            <input type="text" name="phone" class="form-control border-black coop-form" placeholder="Phone">
                        </div>

                        <div class="col-md-6">
                            <input type="text" name="subject" class="form-control border-black coop-form" placeholder="Subject">
                        </div>

                        <div class="col-12">
                            <textarea rows="4" name="message" class="form-control border-black coop-form" placeholder="Enter your message"></textarea>
                        </div>

                        <div class="col-12">
                            <button name="submit" type="submit" class="get-started-btn">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>




    
    <section class="coop-partners cp mt-5">
        <div class="container">
            <div class="row d-lg-flex align-items-center">
                <!-- Left: Text -->
                <div class="col-lg-3 col-sm-12 px-4 partner-text mb-4 mb-lg-0">
                    <h4 class="fw-bold">Our Partners</h4>
                </div>

                <!-- Right: Logos -->
                <div class="col-lg-9">
                    <div class="partner-image">
                        <img src="assets/partners/cowry.png" alt="Cowry" class="img-fluid">
                        <img src="assets/partners/sterling.png" alt="Sterling" class="img-fluid">
                        <img src="assets/partners/cordros.png" alt="Cordros" class="img-fluid">
                        <img src="assets/partners/emrald.png" alt="Emerald" class="img-fluid">
                        <img src="assets/partners/unity.png" alt="Unity" class="img-fluid">
                        <img src="assets/partners/first bank.png" alt="FirstBank" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include 'includes/footer.php' ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>