<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iris Project</title>
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet"/>
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/navbar.css" rel="stylesheet">
    <link href="../css/globalShadowBoxStyle.css" rel="stylesheet">
    <link href="../css/servicesStyle.css" rel="stylesheet">
    <?php include('includes/header.php');
    include('includes/navbar.php');
    ?>
</head>
<body>
<div class="container marketing shadowStyle">
    <div class="head_title">
        <p>
        <div class="addNewElement">
            <button onclick="location.href ='newService.php' " ; type="submit" class="btn btn-primary">+ Νέα Υπηρεσία
            </button>
        </div>
        <h3><i>Υπηρησίες</i></h3></p>
        <hr class="featurette-divider">
<<<<<<< HEAD

    </div>
    <p class="infoTxt"> Παρακάτω βλέπετε όλες τις Υπηρησίες / Επιχειρήσης που φιλοξενούνται στην σελίδα</p>

=======
        <p class="infoTxt"> Παρακάτω βλέπετε όλες τις Υπηρησίες / Επιχειρήσης που φιλοξενούνται στην σελίδα</p>
    </div>
>>>>>>> origin/master
    <br><br><br>
    <div class="container " id="Search_Form">
        <form class="form-horizontal">
            <div class="form-group">
                <p>Συμπληρώστε τα παρακάτω πεδία για αναζήτηση</p>
                <div class="col-sm-4 col-xs-4">
                    <input type="text" class="form-control" name="username" id="username"
                           autocomplete="off" placeholder="ονομα επιχείρησης">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 col-xs-4">
                    <button type="submit" name="login" class="btn btn-primary">Αναζήτηση</button>
                </div>
            </div>
            <div class="row">
                <p>Επιλέξτε έναν από τους παρακάτω τύπους επιχειρήσεων</p>
                <div class="col-md-3">
                    <a href="services_university.php">
                        <img src="http://www.foititikanea.gr/images/foithtikanea/PANEPISTHMIA/AIGAIOY/4.jpeg">
                        <p class="HotelName">Πανεπιστημιακοί Φορείς</p></a>
                </div>
                <div class="col-md-3">
                    <a href="services_private.php">
                        <img
                            src="http://www.amiglobalmarket.com/wp-content/uploads/2014/06/Business_presentation_byVectorOpenStock.jpg">
                        <p class="HotelName">Ιδιοτικές Επιχειρήσεις</p></a>
                </div>
                <div class="col-md-3">
                    <a href="services_public.php">
                        <img
                            src="http://www.newsrebel.gr/wp-content/uploads/2015/04/e8d981657a1ebb2e14cce763c5ca462d.jpg">
                        <p class="HotelName">Δημόσιες Επιχειρήσεις</p></a>
                </div>
            </div>
        </form>
        <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br>
        <br><br><br>
    </div>
</div>
<?php include('includes/footer.php') ?>
</body>
</html>





