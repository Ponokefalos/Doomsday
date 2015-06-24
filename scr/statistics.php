<?php
/**
 * Created by PhpStorm.
 * User: Kir
 * Date: 21/6/2015
 * Time: 10:55 μμ
 */
include ('includes/kyrFun.php');
include ('RegisterConnectToDB.php');
include('includes/header.php');
include('includes/navbar.php');


?>


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

    <link href="../css/statisticsStyle.css" rel="stylesheet">


    


</head>


<body>

<div class="container marketing shadowStyle">

    <div class="head_title">
        <p>


        <h3><i>Στατιστηκά Στοιχεία</i></h3></p>
        <hr class="featurette-divider">

    </div>

    <p class="infoTxt">Παρακάτω βλέπετε μερικά στατιστηκα στοιχεία από το Σύστημα Καταχώρησης Υπηρεσιών</p>
    <br><br><br>

    <div class="container marketing">
        <p>Το Σύστημα Καταχώρησης Υπηρεσιών Ίριδα φιλοξενει</p>
        <br>

        <div class="row">
            <div class="col-xs-5">
                <p>Συνολικός αριθμός Εγγεγραμμένων Υπηρεσιών:</p>

            </div>
            <div class="col-xs-5">
                <p><?php echo return_Total_Number_Of_Services($link) ?></p>

            </div>
        </div>



        <div class="row">
            <div class="col-xs-5">
                <p>Συνολικός αριθμός Αποθηκευμένων Εγγράφων:</p>

            </div>
            <div class="col-xs-5">
                <p><?php echo return_Total_Number_Of_Files($link)?></p>

            </div>
        </div>
        <div class="row">
            <div class="col-xs-5">
                <p>Συνολικός αριθμός Εγγεγραμμένων Χρηστών:</p>

            </div>
            <div class="col-xs-5">
                <p><?php echo return_Total_Number_Of_Users($link)?></p>

            </div>
        </div>
        <div class="row">
            <div class="col-xs-9 ">
                <p>Το σύστημα δίνει την δυνατότητα εξαγωγής των δεδομένων του σε αρχεία CSV. Επιλέξτε τα δεδομένα που
                    θέλετε από το παρακάτω μενου επιλογών</p>

                <form class="form-horizontal" method="post" enctype="multipart/form-data">
                    <div class="col-xs-5 form-group">
                        <select class="form-control" name="whatToExport">
                            <option>Στοιχεία Υπηρεσιών</option>
                            <option>Στοιχεία Εγγράφων</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-5">
                            <button type="submit" name="export" class="btn btn-primary">Εξαγωγή</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>


    <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br>
    <br><br><br>
    <br><br><br>


</div>


<?php include('includes/footer.php') ?>
</body>


</html>





