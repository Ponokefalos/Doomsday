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

<div class="container marketing">

    <div class="head_title">
        <p>


        <h3><i>Υπηρεσίες Δημόσιου Τομέα</i></h3></p>
        <hr class="featurette-divider">

    </div>

    <p class="infoTxt"> Παρακάτω βλέπετε τις Δημόσιες Υπηρεσίες που φιλοξενούνται στην σελίδα</p>
    <br><br>

    <div class="col-xs-12" id="Search_Form">
        <?php include ('includes/search.php')?>
    </div>
    <p class="infoTxt">Για να δείτε περισσότερες πληροφορίες για την Υπηρεσία πατήστε στο όνομά της </p>

   <?php include('includes/services_table.php')?>









</div>


<?php include('includes/footer.php') ?>
</body>


</html>





