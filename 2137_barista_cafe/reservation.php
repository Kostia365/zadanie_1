<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Barista Cafe - HTML Reservation Form</title>

        <!-- CSS FILES -->                
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,400;0,600;0,700;1,200;1,700&display=swap" rel="stylesheet">
            
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/vegas.min.css" rel="stylesheet">

        <link href="css/tooplate-barista.css" rel="stylesheet">
<!--

Tooplate 2137 Barista

https://www.tooplate.com/view/2137-barista-cafe

Bootstrap 5 HTML CSS Template

-->
    </head>
    
    <body class="reservation-page">
                
            <main>
                <?php
                include_once 'parts/header.php';
                ?>

                <section class="booking-section section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-10 col-12 mx-auto">
                            <div class="booking-form-wrap">
                                <div class="row">
                                    <div class="col-lg-7 col-12 p-0">
                                        <form class="custom-form booking-form" action="#" method="post" role="form">
                                            <div class="text-center mb-4 pb-lg-2">
                                                <em class="text-white">Fill out the booking form</em>

                                                <h2 class="text-white">Book a table</h2>
                                            </div>

                                            <div class="booking-form-body">
                                                <div class="row">
                                                    <div class="col-lg-6 col-12">
                                                        <input type="text" name="booking-form-name" id="booking-form-name" class="form-control" placeholder="Full Name" required>
                                                    </div>

                                                    <div class="col-lg-6 col-12">
                                                        <input type="tel" class="form-control" name="booking-form-phone" placeholder="Phone: 085 456 7890" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required="">
                                                    </div>

                                                    <div class="col-lg-6 col-12">
                                                        <input class="form-control" type="time" name="booking-form-time" value="18:30">
                                                    </div>

                                                    <div class="col-lg-6 col-12">
                                                        <input type="date" name="booking-form-date" id="booking-form-date" class="form-control" placeholder="Date" required="">
                                                    </div>

                                                    <div class="col-lg-12 col-12">
                                                        <input type="number" name="booking-form-number" id="booking-form-number" class="form-control" placeholder="Number of People" required="">

                                                        <textarea name="booking-form-message" rows="3" class="form-control" id="booking-form-message" placeholder="Comment (Optional)"></textarea>
                                                    </div>

                                                    <div class="col-lg-4 col-md-10 col-8 mx-auto mt-2">
                                                        <button type="submit" class="form-control">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="col-lg-5 col-12 p-0">
                                        <div class="booking-form-image-wrap">
                                            
                                            <img src="images/barman-with-fruits.jpg" class="booking-form-image img-fluid" alt="">
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <?php
                include_once 'parts/footer.php';
                ?>

            </main>


        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/vegas.min.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>
