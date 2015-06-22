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

    <?php include('includes/header.php');
    include('includes/navbar.php');
    ?>


</head>


<body>

<div class="container marketing">

    <div class="head_title">
        <p>

        <h3><i>Προσθήκη Ξενοδχείου</i></h3></p>
        <hr class="featurette-divider">
    </div>
    <p class="infoTxt"> Καλώς ήρθατε στην φόρμα συμπλήρωσης ξενοδείων. Παρακαλούμε συμπληρώστε τα παρακάτω πεδία με
        τις
        απαραίτητες πληροφορίες
        για να καταχωρηθεί η ξενοδοχειακή σας μονάδα στην σελίδα μας</p>

    <br><br><br>





    <div class="row">
        <div class="col-xs-12" id="auctionFormLabels">
            <form class="form-horizontal" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <p for="hotelName" class="col-xs-2 control-label">Όνομα Επιχείρησης</p>

                    <div class="col-sm-4 col-xs-4">
                        <input type="text" class="form-control" name="hotelName" id="hotelName"
                               placeholder="Όνομα">
                    </div>
                </div>
                <div class="form-group">
                    <p for="hotelName" class="col-xs-2 control-label">Περιγραφή </p>

                    <div class="col-sm-4">
                            <textarea name="longDesc" class="form-control user_input" id="hotelLongDescriptionTxt"
                                      rows="3"
                                      placeholder=" Περιγραφή"></textarea>
                    </div>
                </div>
        </div>

        </form>
    </div>
</div>


</div>

<?php include('includes/footer.php') ?>
</body>


</html>





