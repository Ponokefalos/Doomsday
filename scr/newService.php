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

<div class="container marketing shadowStyle">

    <div class="head_title">
        <p>

        <h3><i>Προσθήκη Νέας Επιχείρησης</i></h3></p>
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
                        <input type="text" class="form-control" name="hotelName" id="service_name"
                               placeholder="Όνομα">
                    </div>
                </div>
                <div class="form-group">
                    <p for="hotelName" class="col-xs-2 control-label">Τύπος Επιχείρησης</p>

                    <div class="col-sm-4">
                        <select class="form-control" name="service_type">
                            <option>Δημόσιου Τομέα</option>
                            <option>Ιδιοτικού Τομέα</option>
                            <option>Πανεπιστιμιακός Φορέας</option>

                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <p for="hotelName" class="col-xs-2 control-label">Website Επιχείρησης</p>

                    <div class="col-sm-4 col-xs-4">
                        <input type="text" class="form-control" name="hotelName" id="website"
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
                <div class="form-group">
                    <p for="hotelName" class="col-xs-2 control-label">Δ.Ο.Υ</p>

                    <div class="col-sm-4 col-xs-4">
                        <input type="text" class="form-control" name="hotelName" id="doy"
                               placeholder="Π.χ Αρτας">
                    </div>
                </div>
                <div class="form-group">
                    <p for="hotelName" class="col-xs-2 control-label">Νομός</p>

                    <div class="col-sm-4 col-xs-4">
                        <select class="form-control" name=slist>
                            <script language="javascript">
                                var states = new Array("Agion Oros", "Achaia", "Aitolia kai Akarmania", "Argolis", "Arkadia", "Arta", "Attiki", "Chalkidiki", "Chanion", "Chios", "Dodekanisos", "Drama", "Evros", "Evrytania", "Evvoia", "Florina", "Fokidos", "Fthiotis", "Grevena", "Ileia", "Imathia", "Ioannina", "Irakleion", "Karditsa", "Kastoria", "Kavala", "Kefallinia", "Kerkyra", "Kilkis", "Korinthia", "Kozani", "Kyklades", "Lakonia", "Larisa", "Lasithi", "Lefkas", "Lesvos", "Magnisia", "Messinia", "Pella", "Pieria", "Preveza", "Rethynnis", "Rodopi", "Samos", "Serrai", "Thesprotia", "Thessaloniki", "Trikala", "Voiotia", "Xanthi", "Zakynthos");
                                for (var hi = 0; hi < states.length; hi++)
                                    document.write("<option value=\"" + states[hi] + "\">" + states[hi] + "</option>");
                            </script>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <p for="hotelName" class="col-xs-2 control-label">Πόλη</p>

                    <div class="col-sm-4 col-xs-4">
                        <input type="text" class="form-control" name="hotelName" id="city"
                               placeholder="Όνομα">
                    </div>
                </div>
                <div class="form-group">
                    <p for="hotelName" class="col-xs-2 control-label">Website Επιχείρησης</p>

                    <div class="col-sm-4 col-xs-4">
                        <input type="text" class="form-control" name="hotelName" id="website"
                               placeholder="Όνομα">
                    </div>
                </div>

                <div class="head_title">
                    <p>

                    <h3><i>Στοιχεία Αντιπρωσούπου</i></h3></p>
                    <hr class="featurette-divider">
                </div>
                <div class="form-group">
                    <p for="hotelName" class="col-xs-2 control-label">Όνομα</p>

                    <div class="col-sm-4 col-xs-4">
                        <input type="text" class="form-control" name="hotelName" id="representative_name"
                               placeholder="Όνομα Αντιπρωσούπου">
                    </div>
                </div>
                <div class="form-group">
                    <p for="hotelName" class="col-xs-2 control-label">Επίθετο</p>

                    <div class="col-sm-4 col-xs-4">
                        <input type="text" class="form-control" name="hotelName" id="representative_surname"
                               placeholder="Επίθετο">
                    </div>
                </div>
                <div class="form-group">
                    <p for="hotelName" class="col-xs-2 control-label">Τηλέφωνο Επικοινωνίας</p>

                    <div class="col-sm-4 col-xs-4">
                        <input type="text" class="form-control" name="hotelName" id="representative_phone"
                               placeholder="Τηλέφωνο">
                    </div>
                </div>
                <div class="form-group">
                    <p for="hotelName" class="col-xs-2 control-label">E-mail</p>

                    <div class="col-sm-4 col-xs-4">
                        <input type="text" class="form-control" name="hotelName" id="representative_mail"
                               placeholder="Mail">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" name="newService" class="btn btn-primary">Εισαγωγή</button>
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





