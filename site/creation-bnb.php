<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>Crafto - The Multipurpose HTML5 Template</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="author" content="ThemeZaa">
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <meta name="description" content="Elevate your online presence with Crafto - a modern, versatile, multipurpose Bootstrap 5 responsive HTML5, SCSS template using highly creative 48+ ready demos.">
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
        <?php include '../structure/header-log.php'; ?>

        
        <!-- start section -->
        <section class="d-flex align-items-center full-screen cover-background ipad-top-space-margin" style="background-image: url(../objects/y1.1.png);">
            <div class="container pt-5 ">
                <div class="row g-0 justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10 contact-form-style-04 md-mb-50px py-5 px-5 border-radius-30px "  data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay":100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <h2 class="fs-38 xs-fs-24 fw-600 text-white mb-20px d-block">Créer un compte</h2>
                        <form action="creer-bnb.php" method="post">
                            <label class="text-white mb-10px fw-500">Nom<span class="text-red">*</span></label> 
                            <input class="mb-20px bg-very-light-gray form-control required" type="text" name="name" placeholder="Entrer votre Nom" required/>
                            <label class="text-white mb-10px fw-500">Adresse Email<span class="text-red">*</span></label> 
                            <input class="mb-20px bg-very-light-gray form-control required" type="email" name="email" placeholder="Entrer votre Email" required/>
                            <label class="text-white mb-10px fw-500">Mot de passe<span class="text-red">*</span></label> 
                            <input class="mb-20px bg-very-light-gray form-control required" type="password" name="password" placeholder="Entrer un mot de passe" required/> 
                            <span class="fs-13 lh-22 w-90 lg-w-100 md-w-90 sm-w-100 d-block mb-30px">Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="#" class="text-white text-decoration-line-bottom fw-500">privacy policy.</a></span>
                            <input type="hidden" name="redirect" value="">
                            <button type="submit" class="btn btn-medium btn-rounded btn-transparent-white-light btn-box-shadow w-100 text-transform-none" >S'enregistrer</button>
                            <div class="form-results mt-20px d-none"></div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        
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