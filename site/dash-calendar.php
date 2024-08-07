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
    <title>CheckBnb - <?php echo htmlspecialchars($_SESSION['name']); ?></title>
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

    <style>
        .title {
            color: black;
        }
        .calendar {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 5px;
            justify-content: center;
            padding: 10px;
            border-radius: 8px;
            color: #ddd;
        }
        .day {
            width: 100%;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 5px;
            background-color: #444;
            font-size: 12px;
            position: relative;
        }
        .day::before {
            content: attr(data-title);
            position: absolute;
            bottom: 27px;
            left: 50%;
            transform: translateX(-50%);
            background: #000000;
            color: #FFFFFF;
            padding: 10px;
            border-radius: 10px;
            font-size: 12px;
            display: none; /* Default to not display */
            white-space: pre;
            text-align: center;
            z-index: 2;
            pointer-events: none;
        }
        .day:hover::before {
            display: block;
        }
        .white {
            background-color: #FFFFFF;
        }
        .white:hover::before {
            display: none; /* Disable hover effect for .white */
        }
        .green {
            background-color: #2ecc71;
        }
        .red {
            background-color: #e74c3c;
        }
        .orange {
            background-color: #f1c40f;
        }
        .month-label {
            padding-left:15px;
            width: 100%;
            text-align: left;
            font-weight: bold;
            margin-top: 10px;
            margin-bottom: 5px;
            font-size: 20px;
            color: black;
        }
        @media (min-width: 768px) {
            .calendar-container {
                display: flex;
                flex-wrap: wrap;
                gap: 20px;
            }
            .calendar-wrapper {
                flex: 1 1 calc(33.333% - 20px);
            }
        }
    </style>
</head>
<body data-mobile-nav-style="classic">  
    <?php include '../structure/header-dash.php'; ?>

    <!-- end header -->  
    <section class="d-flex align-items-center full-screen cover-background ipad-top-space-margin bg-black"  style="background-image: url(../objects/y1.1.png);">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-12 col-lg-5 col-md-6 sm-mb-40px sm-mt-30px text-center text-md-start">
                    <span class="fs-90 lh-80 d-block text-white fw-700 ls-minus-3px mb-15px w-100 lg-w-100">Check-bnb</span>
                    <p class="w-75 lg-w-100">Cette page est <b>sécurisée</b>, vous seul y avez accès.</p>
                    <a href="dash-doc.php" class="btn btn-small btn-transparent-white-light btn-rounded text-transform-none border-1">
                        <span>
                            <span class="btn-double-text" data-text="Consulter la documentation">Consulter la documentation</span>
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
    <section class="bg-white full-screen position-relative d-flex align-items-center mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 text-center">
                    <h2 class="fs-70 lg-fs-50 fw-600 text-black">Check Bnb</h2>
                </div>
            </div>
            <div class="row">
                <div class="col tab-style-01">
                    <div class="tab-content">
                        <!-- start tab content -->
                        <div class="tab-pane fade in active show" id="tab_sec1">
                            <div class="row g-0 justify-content-center">
                                <div class="col-xl-6 col-lg-8 col-md-10 contact-form-style-04 md-mb-50px py-5 px-5 border-radius-30px">
                                    <form action="dash-calendar.php" method="post">
                                        <label class="text-black mb-10px fw-500">URL Airbnb<span class="text-red">*</span></label> 
                                        <input class="mb-20px bg-very-light-gray box-shadow-extra-large border-radius-50px form-control " required type="url" name="url_bnb" placeholder="Entrer votre 1er Url" />
                                        <label class="text-black mb-10px fw-500">URL Booking<span class="text-red">*</span></label> 
                                        <input class="mb-20px bg-very-light-gray border-radius-50px form-control" required type="url" name="url_booking" placeholder="Entrer votre 2ème Url" />
                                        <button class="btn w-100 btn-medium btn-rounded btn-transparent-light-gray d-table d-lg-inline-block lg-mb-15px md-mx-auto">Submit</button>
                                        <div class="form-results mt-20px d-none"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- end tab content -->
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <!-- end section -->

    <?php
    // Récupération des URL depuis le formulaire
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $airbnbUrl = $_POST['url_bnb'];
        $bookingUrl = $_POST['url_booking'];

        // Fonction pour télécharger le fichier ICS
        function downloadIcs($url) {
            $ics = @file_get_contents($url);
            if ($ics === FALSE) {
                echo '<a href="dash-doc.php#doc">Les Urls ne sont pas valides, cliquez pour consulter la documentation.</a>';
                die();
            }
            return $ics;
        }

        // Fonction pour analyser le fichier ICS
        function parseIcs($ics) {
            $lines = explode("\n", $ics);
            $events = [];
            $event = null;

            foreach ($lines as $line) {
                $line = trim($line);
                if ($line === 'BEGIN:VEVENT') {
                    $event = [];
                } elseif ($line === 'END:VEVENT') {
                    $events[] = $event;
                    $event = null;
                } elseif ($event !== null) {
                    if (strpos($line, 'SUMMARY:') === 0) {
                        $event['SUMMARY'] = substr($line, 8);
                    } elseif (strpos($line, 'DTSTART;VALUE=DATE:') === 0) {
                        $event['DTSTART'] = substr($line, 19);
                    } elseif (strpos($line, 'DTEND;VALUE=DATE:') === 0) {
                        $event['DTEND'] = substr($line, 17);
                    }
                }
            }
            return $events;
        }

        // Fonction pour générer un tableau des jours
        function generateDaysTable($events, $currentDate) {
            $days = [];

            foreach ($events as $event) {
                $startDate = new DateTime($event['DTSTART']);
                $endDate = (new DateTime($event['DTEND']))->modify('-1 day');
                $interval = new DateInterval('P1D');
                $daterange = new DatePeriod($startDate, $interval, $endDate->modify('+1 day'));

                foreach ($daterange as $date) {
                    if ($date >= $currentDate) {
                        $formattedDate = $date->format('Y-m-d');
                        if ($event['SUMMARY'] === 'Reserved') {
                            $days[$formattedDate]['airbnb'] = 'Fermé';
                            $days[$formattedDate]['airbnb_weight'] = 1;
                        } elseif (strpos($event['SUMMARY'], 'Not available') !== false) {
                            $days[$formattedDate]['airbnb'] = 'Fermé';
                            $days[$formattedDate]['airbnb_weight'] = 1;
                        }
                    }
                }
            }

            // Déterminer les jours libres
            $endDate = (new DateTime())->modify('+300 days'); // Changer à 300 jours
            $interval = new DateInterval('P1D');
            $daterange = new DatePeriod($currentDate, $interval, $endDate);

            foreach ($daterange as $date) {
                $formattedDate = $date->format('Y-m-d');
                if (!isset($days[$formattedDate])) {
                    $days[$formattedDate]['airbnb'] = 'Ouvert';
                    $days[$formattedDate]['airbnb_weight'] = 0;
                }
            }

            // Trier les jours par date
            ksort($days);

            return $days;
        }

        // Télécharger et analyser le fichier ICS d'Airbnb
        $icsContentAirbnb = downloadIcs($airbnbUrl);
        $eventsAirbnb = parseIcs($icsContentAirbnb);

        // Télécharger et analyser le fichier ICS de Booking
        $icsContentBooking = downloadIcs($bookingUrl);
        $eventsBooking = parseIcs($icsContentBooking);

        // Date courante
        $currentDate = new DateTime();

        // Générer le tableau des jours pour Airbnb et Booking
        $daysTable = generateDaysTable($eventsAirbnb, $currentDate);

        // Ajouter les données de Booking
        foreach ($eventsBooking as $event) {
            $startDate = new DateTime($event['DTSTART']);
            $endDate = (new DateTime($event['DTEND']))->modify('-1 day');
            $interval = new DateInterval('P1D');
            $daterange = new DatePeriod($startDate, $interval, $endDate->modify('+1 day'));

            foreach ($daterange as $date) {
                if ($date >= $currentDate && $date <= (new DateTime())->modify('+300 days')) { // Limiter à 300 jours
                    $formattedDate = $date->format('Y-m-d');
                    if ($event['SUMMARY'] === 'CLOSED - Not available') {
                        $daysTable[$formattedDate]['booking'] = 'Fermé';
                        $daysTable[$formattedDate]['booking_weight'] = 1;
                    } else {
                        $daysTable[$formattedDate]['booking'] = 'Ouvert';
                        $daysTable[$formattedDate]['booking_weight'] = 0;
                    }
                }
            }
        }

        // Afficher le tableau des jours
        echo '<div class="container px-0">';
        echo '<div class="row justify-content-center">';
        echo '<div class="col-md-10 text-center pb-4">';
        echo '<h2 class="fs-70 lg-fs-50 fw-600 text-black">Résultats des calendriers</h2>';
        echo '</div></div>';
        echo '<div class="bg-white px-2 border-radius-10px calendar-container">';
        
        $monthLabels = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
        $currentMonth = '';
        $monthsDisplayed = [];
        $rowCount = 0;

        foreach ($daysTable as $date => $status) {
            $dayOfMonth = date('j', strtotime($date));
            $dayOfWeek = date('N', strtotime($date));
            $month = date('n', strtotime($date)) - 1;
            $year = date('Y', strtotime($date));

            if (!isset($monthsDisplayed["$year-$month"])) {
                if (count($monthsDisplayed) >= 12) {
                    break; // Limiter à 12 mois
                }
                $monthsDisplayed["$year-$month"] = true;
            }

            if ($currentMonth !== $month) {
                if ($currentMonth !== '') {
                    echo '</div>'; // Fermer la div précédente pour le mois
                    echo '</div>'; // Fermer la div calendar-wrapper
                }
                echo '<div class="calendar-wrapper">';
                echo "<h2 class='month-label sm-pt-5 text-black'>{$monthLabels[$month]} $year</h2>";
                echo "<div class='calendar'>";
                // Ajouter des cellules blanches pour aligner le premier jour du mois
                for ($i = 1; $i < $dayOfWeek; $i++) {
                    echo "<div class='day white'></div>";
                }
                $currentMonth = $month;
            }

            $statusAirbnb = isset($status['airbnb']) ? $status['airbnb'] : 'Ouvert';
            $weightAirbnb = isset($status['airbnb_weight']) ? $status['airbnb_weight'] : 0;
            $statusBooking = isset($status['booking']) ? $status['booking'] : 'Ouvert';
            $weightBooking = isset($status['booking_weight']) ? $status['booking_weight'] : 0;

            // Déterminer la classe de couleur et le contenu du data-title
            $dayClass = '';
            $dataTitle = '';

            if ($statusAirbnb === 'Ouvert' && $statusBooking === 'Ouvert') {
                $dayClass = 'green';
                $dataTitle = "$date";
            } elseif ($statusAirbnb === 'Fermé' && $statusBooking === 'Fermé') {
                $dayClass = 'orange';
                $dataTitle = "$date";
            } else {
                $dayClass = 'red';
                $dataTitle = "$date:\nAirbnb - $statusAirbnb\nBooking - $statusBooking";
            }

            echo "<div class='day $dayClass' data-title='$dataTitle'></div>";
            $rowCount++;
        }
        echo '</div>'; // Fermer la dernière div pour le mois
        echo '</div>'; // Fermer la div calendar-wrapper
        echo "</div>
        <p class='w-75 pt-0 mt-0 mb-0 lg-w-100 '>Vert = les deux calendriers sont ouverts<br>Orange = les deux calendriers sont fermés<br>Rouge = les calendriers n'ont pas le meme état</p>
        
        
        "; // Fermer le conteneur principal
        echo '</div>';
    }
    ?>

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
