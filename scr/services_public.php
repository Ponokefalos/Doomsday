<?php
/**
 * Created by PhpStorm.
 * User: Kir
 * Date: 24/6/2015
 * Time: 1:15 μμ
 */
include ('includes/connect.php');
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

    <link href="../css/servicesStyle.css" rel="stylesheet">

    <?php include('includes/header.php');
    include('includes/navbar.php');
    ?>


</head>


<body>

<div class="container marketing shadowStyle">

    <div class="head_title">
        <p>


        <h3><i>Υπηρεσίες Δημόσιου Τομέα</i></h3></p>
        <hr class="featurette-divider">

    </div>

    <p class="infoTxt"> Παρακάτω βλέπετε όλες τις Υπηρησίες / Επιχειρήσης που φιλοξενούνται στην σελίδα</p>
    <br><br><br>

    <div class="col-xs-12" id="Search_Form">
        <form class="form-horizontal">
            <div class="form-group">
                <p>Συμπληρώστε τα παρακάτω πεδία για αναζήτηση</p>

                <div class="col-sm-4 col-xs-4">
                    <input type="text" class="form-control" name="search_name" id="search_name"
                           autocomplete="off" placeholder="ονομα επιχείρησης">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-4 col-xs-4">
                    <button type="submit" name="login" class="btn btn-primary">Αναζήτηση</button>
                </div>
            </div>
        </form>
    </div>

   <?php include('includes/services_table.php')?>



    <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br>
    <br><br><br>





</div>


<?php include('includes/footer.php') ?>
</body>


</html>





