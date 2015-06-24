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

    <?php
        global $link;
        include ('includes/connect.php');
        include('includes/header.php');
        include('includes/navbar.php');
        include_once('includes/ArizFun.php');
    ?>


</head>


<body>

<div class="container marketing shadowStyle">

    <div class="head_title">
        <p>

        <h3><i>Προσθήκη Νέων Εγγράφων</i></h3></p>
        <hr class="featurette-divider">
    </div>
    <p class="infoTxt"> Καλώς ήρθατε στην φόρμα συμπλήρωσης εγγράφων. Παρακαλούμε συμπληρώστε τα παρακάτω πεδία με
        τις
        απαραίτητες πληροφορίες
        για να καταχωρηθούν τα έγγραφα σας για την αντίστοιχη υπηρεσίας στην σελίδα</p>

    <br><br><br>


    <div class="row">
        <div class="col-xs-12" id="auctionFormLabels">
            <form class="form-horizontal" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <p class="col-xs-2 control-label">Δημηουργός</p>

                    <div class="col-sm-4 col-xs-4">
                        <input type="text" class="form-control" name="creator" id="creator"
                               placeholder="Όνομα Δημηουργού" required="true">
                    </div>
                </div>
                <div class="form-group">
                    <p class="col-xs-2 control-label">Τίτλος Εγγράφου</p>

                    <div class="col-sm-4 col-xs-4">
                        <input type="text" class="form-control" name="title" id="title"
                               placeholder="Τίτλος" required="true">
                    </div>
                </div>

                <div class="form-group">
                    <p class="col-xs-2 control-label">Αρμόδια Επιχείρηση</p>
                    <!-- εδω θα μπει με δροπδουν ολες οι επιχειρήσεις που είναι μεσα στο σύστημα-->

                    <div class="col-sm-4">
                        <select class="form-control" name="service_name">
                            <!-- εδω θα μπει με δροπδουν ολες οι επιχειρήσεις που είναι μεσα στο σύστημα-->
                            <?php
                                $result = select_all_services($link);
                                echo_services_in_html_option($result);
                            ?>
                        </select>
                    </div>
                </div>


                <div class="form-group">
                    <p class="col-xs-2 control-label">Θέμα</p>

                    <div class="col-sm-4">
                        <textarea name="subject" class="form-control user_input" id="subject"
                                  rows="3"
                                  placeholder=" Θέμα" required="true"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <p class="col-xs-2 control-label">Περιγραφή</p>

                    <div class="col-sm-4">
                        <textarea name="description" class="form-control user_input" id="description"
                                  rows="3"
                                  placeholder="Λίγα λόγια για τα έγγραφα" required="true"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <p class="col-xs-2 control-label">Αριθμός Συντελεστών</p>
                </div>
                <div class="form-group">
                    <p class="col-xs-2 control-label">Όνομα-Επώνυμο Συντελεστών</p>

                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="hotelName" id="file_creator"
                               placeholder="analoga me ta onomata tha emfanizontai antistoixa pedia" required="true">
                    </div>
                </div>


                <div class="form-group">
                    <p class="col-xs-2 control-label">Τύπος Εγγράφου</p>

                    <div class="col-sm-4">
                        <select class="form-control" name="service_type">
                            <option>Εικόνα</option>
                            <option>Αρχείο PDF</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <p></p>

                    <div class="col-sm-4">
                        <input type="file" name="select_file" id="select_file">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" name="newFile" class="btn btn-primary">Εισαγωγή</button>
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


<?php

?>


