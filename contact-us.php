<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Vikas Soltuions" />
    <meta name="description" content="Vikas Solutions | Software Development Agency" />
    <meta name="keywords" content="Vikas Solutions, Software Development Agency">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- SITE TITLE -->
    <title>Contact Us | Vikas Solutions</title>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;700&amp;display=swap" rel="stylesheet">

    <!-- BOOTSTRAP CSS -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- FONT ICONS -->
    <link href="./assets/css/flaticon.css" rel="stylesheet">

    <!-- PLUGINS STYLESHEET -->
    <link href="./assets/css/menu.css" rel="stylesheet">
    <link id="effect" href="./assets/css/dropdown-effects/fade-down.css" media="all" rel="stylesheet">
    <link href="./assets/css/magnific-popup.css" rel="stylesheet">
    <link href="./assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="./assets/css/owl.theme.default.min.css" rel="stylesheet">

    <!-- ON SCROLL ANIMATION -->
    <link href="./assets/css/animate.css" rel="stylesheet">

    <!-- TEMPLATE CSS -->
    <link href="./assets/css/style.css" rel="stylesheet">

    <!-- RESPONSIVE CSS -->
    <link href="./assets/css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
    <!-- PRELOADER START -->
    <div id="loading" class="green-loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
                <div class="object" id="object_four"></div>
            </div>
        </div>
    </div>
    <!-- PRELOADER END -->

    <!-- PAGE CONTENT START -->
    <div id="page" class="page">

        <!-- HEADER START -->
        <?php require('./header-dark.php') ?>
        <!-- HEADER END -->

        <!-- CONTACT AREA START -->
        <section id="contacts-2" class="bg-snow wide-50 inner-page-hero contacts-section division">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8">
                        <div class="section-title title-02 mb-80">
                            <h2 class="h2-xs">Have a question? Need help? Don't hesitate, drop us a line</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-xl-8">
                        <div class="form-holder">
                            <form id="contactform" method="POST" onsubmit="contactForm()" class="row contact-form">
                                <div class="col-md-12">
                                    <p class="p-lg">Your Company Name: </p>
                                    <span>Please enter your company name: </span>
                                    <input type="text" id="cname" name="cname" class="form-control" placeholder="Your Name*" required>
                                </div>
                                <div class="col-md-12">
                                    <p class="p-lg">Your Name: </p>
                                    <span>Please enter your real name: </span>
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Your Name*" required>
                                </div>
                                <div class="col-md-12">
                                    <p class="p-lg">Your Email Address: </p>
                                    <span>Please carefully check your email address for accuracy</span>
                                    <input type="text" id="email" name="email" class="form-control" placeholder="Email Address*" required>
                                </div>
                                <div class="col-md-12">
                                    <p class="p-lg">Your Phone: </p>
                                    <span>Please carefully check your phone for accuracy</span>
                                    <input type="number" id="phone" name="phone" class="form-control" placeholder="Phone*" required>
                                </div>
                                <div class="col-md-12">
                                    <p class="p-lg">Explain your question in detail: </p>
                                    <textarea class="form-control message" id="message" name="message" rows="6" placeholder="I have a problem with..." required></textarea>
                                </div>
                                <div class="col-md-12 mt-15 form-btn text-right">
                                    <button type="submit" class="btn btn-skyblue tra-grey-hover">Submit Request</button>
                                </div>
                            </form>
                            <script>
                                $("#contactform").submit(function(e) {
                                    e.preventDefault();
                                });

                                function contactForm() {
                                    const notyf = new Notyf({
                                        duration: 2000,
                                        position: {
                                            x: 'right',
                                            y: 'top',
                                        },
                                    });
                                    var name = document.getElementById("name");
                                    var cname = document.getElementById("cname");
                                    var email = document.getElementById("email");
                                    var phone = document.getElementById("phone");
                                    var message = document.getElementById("message");

                                    if (name == " " || cname == " " || email == " " || phone == " " || message == " ") {
                                        notyf.error('Please fill all the details.');
                                    } else {
                                        var formData = new FormData();
                                        formData.append("name", name.value);
                                        formData.append("cname", cname.value);
                                        formData.append("phone", phone.value);
                                        formData.append("email", email.value);
                                        formData.append("message", message.value);
                                        $.ajax({
                                            url: "./contact-form-submit.php",
                                            type: 'POST',
                                            data: formData,
                                            contentType: false,
                                            processData: false,
                                            success: function(data) {
                                                console.log(data);
                                                if (data == "New record created successfully") {
                                                    notyf.success('Your details have been submitted successfully. We will contact you shortly.')
                                                } else if (data == "error") {
                                                    notyf.error('Something went wrong. Please try again later.')
                                                }
                                            }
                                        });
                                        document.getElementById("contactform").reset();
                                    }
                                }
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CONTACT AREA END -->

        <!-- FOOTER START -->
        <?php require('./footer.php') ?>
        <!-- FOOTER END -->
    </div>
    <!-- PAGE CONTENT END -->

    <!-- EXTERNAL SCRIPTS
		============================================= -->
    <!-- <script src="./assets/js/jquery-3.6.0.min.js"></script> -->
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/modernizr.custom.js"></script>
    <script src="./assets/js/jquery.easing.js"></script>
    <script src="./assets/js/jquery.appear.js"></script>
    <script src="./assets/js/jquery.scrollto.js"></script>
    <script src="./assets/js/menu.js"></script>
    <script src="./assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="./assets/js/isotope.pkgd.min.js"></script>
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/jquery.magnific-popup.min.js"></script>
    <script src="./assets/js/quick-form.js"></script>
    <script src="./assets/js/request-form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="./assets/js/wow.js"></script>

    <!-- Custom Script -->
    <script src="./assets/js/custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
</body>

</html>