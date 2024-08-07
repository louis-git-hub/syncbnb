<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to login page if not logged in
    header("Location: connecter-bnb.php");
    exit();
}
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>CheckBnb - Nous contacter</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="author" content="ThemeZaa">
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <meta name="description" content="Check allow you to automaticly find some missing calendar blocking sports wich prevents you from getti,g two reservation on the same day.">
        <!-- favicon icon -->
        <link rel="shortcut icon" href="images/favicon.png">
        <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
        <!-- google fonts preconnect -->
        <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- style sheets and font icons -->
        <link rel="stylesheet" href="../files/css/vendors.min.css"/>
        <link rel="stylesheet" href="../files/css/icon.min.css"/>
        <link rel="stylesheet" href="../files/css/style.css"/>
        <link rel="stylesheet" href="../files/css/responsive.css"/>
        <link rel="stylesheet" href="../files/demos/it-business/it-business.css" />
        <link rel="stylesheet" href="../files/demos/interactive-portfolio/interactive-portfolio.css" />

    </head>
    <body data-mobile-nav-style="classic">  
        <?php include '../structure/header-dash.php'; ?>

        <!-- end header -->  
        <section class="d-flex align-items-center full-screen cover-background ipad-top-space-margin bg-black"  style="background-image: url(../objects/y1.1.png);">
        <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-12 col-lg-5 col-md-6 sm-mb-40px sm-mt-30px text-center text-md-start">
                        <span class=" fs-90 lh-80 d-block text-white fw-700 ls-minus-3px mb-15px w-100 lg-w-100">Contact</span>
                        <p class="w-75 lg-w-100 ">Vous cherchez a nous contacter, c'est   <b >ici !</b> <br> Une question, un problème, une idée d'amélioration a nous soumettre ? </p>
                        <a href="dashbord-bnb.php" class="btn btn-small btn-transparent-white-light btn-rounded text-transform-none border-1">
                            <span>
                                <span class="btn-double-text" data-text="Revenir au menu.">Revenir au menu.</span>
                            </span>
                        </a>
                    </div>
                    <div class="col-12 col-lg-7 col-md-6">
                        <img class="border-radius-8px" src="" alt="">
                    </div>
                </div>
                
            </div>
            
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="position-relative section-big bg-white">
            <div class="container">
                <div class="row row-cols-md-1 justify-content-center" data-anime='{ "el": "childs", "translateX": [30, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                    <div class="col-xxl-4 col-xl-5 col-lg-5 md-mb-30px d-flex flex-column">
                        <h3 class="fw-700 ls-minus-1px text-dark-gray w-85 xl-w-90 md-w-100 mb-15px">Nous contacter</h3>
                        <p class="w-85 xl-w-90 xs-w-100"></p>
                        <div class="icon-with-text-style-01 feature-box feature-box-left-icon-middle last-paragraph-no-margin mt-auto">
                            <div class="feature-box-icon me-15px">
                                <img src="../objects/phone-logo.png" alt="" >
                            </div>
                            <div class="feature-box-content">
                                <span class="text-dark-gray fs-19 fw-600 d-block">Nous contacter directement</span>
                                <span>A venir...</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 offset-xxl-1">
                        <!-- start contact form -->
                        <form action="emails-devis.php" method="post" class="contact-form-style-03">
                            <div class="row justify-content-center">
                                <div class="col-md-6 xs-mb-30px">
                                    <label for="exampleInputEmail1" class="form-label fw-700 text-dark-gray text-uppercase fs-13 ls-05px mb-0">Entrez votre nom*</label>
                                    <div class="position-relative form-group mb-25px xs-mb-0">
                                        <span class="form-icon"><i class="bi bi-emoji-smile text-dark-gray"></i></span>
                                        <input class="ps-0 border-radius-0px border-color-dark-gray bg-transparent form-control required" id="exampleInputEmail1" type="text" name="name" placeholder="Entrez votre votre nom?" />
                                    </div>
                                </div>
                                <div class="col-md-6 xs-mb-30px">
                                    <label for="exampleInputEmail1" class="form-label fw-700 text-dark-gray text-uppercase fs-13 ls-05px mb-0">Numéro de Téléphone*</label>
                                    <div class="position-relative form-group mb-25px xs-mb-0">
                                        <span class="form-icon"><i class="bi bi-telephone text-dark-gray"></i></span>
                                        <input class="ps-0 border-radius-0px border-color-dark-gray bg-transparent form-control required" id="exampleInputEmail2" type="tel" name="phone" placeholder="Entrez votre numéro" />
                                    </div>
                                </div>
                                <div class="col-md-6 xs-mb-30px">
                                    <label for="exampleInputEmail1" class="form-label fw-700 text-dark-gray text-uppercase fs-13 ls-05px mb-0">Adresse Email*</label>
                                    <div class="position-relative form-group mb-25px xs-mb-0">
                                        <span class="form-icon"><i class="bi bi-envelope text-dark-gray"></i></span>
                                        <input class="ps-0 border-radius-0px border-color-dark-gray bg-transparent form-control required" id="exampleInputEmail3" type="email" name="email" placeholder="Entrez votre Email" />
                                    </div>
                                </div>
                                <div class="col-md-6 xs-mb-30px">
                                    <label for="exampleInputEmail1" class="form-label fw-700 text-dark-gray text-uppercase fs-13 ls-05px mb-0">Objet</label>
                                    <div class="position-relative form-group mb-25px xs-mb-0">
                                        <span class="form-icon"><i class="bi bi-journals text-dark-gray"></i></span>
                                        <input class="ps-0 border-radius-0px border-color-dark-gray bg-transparent form-control required" id="exampleInputEmail4" type="text" name="subject" placeholder="Entrez votre objet" />
                                    </div>
                                </div>
                                <div class="col-12 mb-4 xs-mb-30px">
                                    <label for="exampleInputEmail1" class="form-label fw-700 text-dark-gray text-uppercase fs-13 ls-05px mb-0">Votre message</label>
                                    <div class="position-relative form-group form-textarea mb-0"> 
                                        <textarea class="ps-0 border-radius-0px border-color-dark-gray bg-transparent form-control" name="comment" placeholder="Entrez votre message" rows="4"></textarea>
                                        <span class="form-icon"><i class="bi bi-chat-square-dots text-dark-gray"></i></span>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-7 col-sm-10">
                                    <p class="mb-0 fs-14 lh-24 text-center text-md-start">Vos données sont protéger et restent privées.</p>
                                </div>
                                <div class="col-md-6 col-sm-6 text-center text-sm-end xs-mt-25px">
                                    <input type="hidden" name="redirect" value="./redirect-form.html">
                                    <button class="btn btn-dark-gray btn-medium btn-rounded text-transform-none btn-box-shadow submit" type="submit">Envoyer le message</button>
                                </div>
                                <div class="col-12 mt-20px mb-0"><div class="form-results d-none"></div></div>
                            </div>
                        </form>
                        <!-- end contact form -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <?php include '../structure/footer-dash.php'; ?>

        <!-- start scroll progress -->
        <div class="scroll-progress d-none d-xxl-block">
            <a href="#" class="scroll-top" aria-label="scroll">
                <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
            </a>
        </div>
        <!-- end scroll progress -->
        <!-- javascript libraries -->
        <script type="text/javascript" src="../files/js/jquery.js"></script>
        <script type="text/javascript" src="../files/js/vendors.min.js"></script>
        <script type="text/javascript" src="../files/js/main.js"></script>
        
    </body>
</html>