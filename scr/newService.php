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
            <form name="service_form"class="form-horizontal" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <p  class="col-xs-2 control-label">Όνομα Επιχείρησης</p>

                    <div class="col-sm-4 col-xs-4">
                        <input type="text" class="form-control" name="service_name" id="service_name"
                               placeholder="Όνομα" required="true">
                    </div>
                </div>
                <div class="form-group">
                    <p  class="col-xs-2 control-label">Τύπος Επιχείρησης</p>

                    <div class="col-sm-4">
                        <select class="form-control" name="service_type">
                            <option>Δημόσιος Τομέας</option>
                            <option>Ιδιωτικός Τομέας</option>
                            <option>Πανεπιστημιακός Φορέας</option>

                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <p  class="col-xs-2 control-label">Website Επιχείρησης</p>

                    <div class="col-sm-4 col-xs-4">
                        <input type="text" class="form-control" name="website" id="website"
                               placeholder="www.example.com" required="true">
                    </div>
                </div>

                <div class="form-group">
                    <p  class="col-xs-2 control-label">Περιγραφή </p>

                    <div class="col-sm-4">
                            <textarea name="description" class="form-control user_input" id="description"
                                      rows="3"
                                      placeholder=" Περιγραφή" required="true"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <p  class="col-xs-2 control-label">Δ.Ο.Υ</p>

                    <div class="col-sm-4 col-xs-4">
                        <input type="text" class="form-control" name="doy" id="doy"
                               placeholder="Π.χ Αρτας" required="true">
                    </div>
                </div>
                <div class="form-group">
                    <p  class="col-xs-2 control-label">Νομός</p>

                    <div class="col-sm-4 col-xs-4">
                        <select class="form-control" name="nomos">
                            <script language="javascript">
                                var states = new Array('Agion Oros', 'Achaia', 'Aitolia kai Akarmania', 'Argolis', 'Arkadia', 'Arta', 'Attiki', 'Chalkidiki', 'Chanion', 'Chios', 'Dodekanisos', 'Drama', 'Evros', 'Evrytania', 'Evvoia', 'Florina', 'Fokidos', 'Fthiotis', 'Grevena', 'Ileia', 'Imathia', 'Ioannina', 'Irakleion', 'Karditsa', 'Kastoria', 'Kavala', 'Kefallinia', 'Kerkyra', 'Kilkis', 'Korinthia', 'Kozani', 'Kyklades', 'Lakonia', 'Larisa', 'Lasithi', 'Lefkas', 'Lesvos', 'Magnisia', 'Messinia', 'Pella', 'Pieria', 'Preveza', 'Rethynnis', 'Rodopi', 'Samos', 'Serrai', 'Thesprotia', 'Thessaloniki', 'Trikala', 'Voiotia', 'Xanthi', 'Zakynthos');
                                for (var hi = 0; hi < states.length; hi++) {
                                    document.write("<option value=\"" + states[hi] + "\">" + states[hi] + "</option>");
                                }
                            </script>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <p  class="col-xs-2 control-label">Πόλη</p>

                    <div class="col-sm-4 col-xs-4">
                        <input type="text" class="form-control" name="city" id="city"
                               placeholder="π.χ Θεσσαλονίκη" required="true">
                    </div>
                </div>

                <div class="head_title">
                    <p>

                    <h3><i>Στοιχεία Αντιπρωσούπου</i></h3></p>
                    <hr class="featurette-divider">
                </div>
                <div class="form-group">
                    <p  class="col-xs-2 control-label">Όνομα</p>

                    <div class="col-sm-4 col-xs-4">
                        <input type="text" class="form-control" name="r_name" id="r_name"
                               placeholder="Όνομα Αντιπρωσούπου" required="true">
                    </div>
                </div>
                <div class="form-group">
                    <p  class="col-xs-2 control-label">Επίθετο</p>

                    <div class="col-sm-4 col-xs-4">
                        <input type="text" class="form-control" name="r_surname" id="r_surname"
                               placeholder="Επίθετο" required="true">
                    </div>
                </div>
                <div class="form-group">
                    <p  class="col-xs-2 control-label">Τηλέφωνο Επικοινωνίας</p>
                    <div class="col-sm-4 col-xs-4">
                        <input type="text" class="form-control" name="r_tel" id="r_tel"
                               placeholder="Τηλέφωνο" required="true">
                    </div>
                </div>
                <div class="form-group">
                    <p  class="col-xs-2 control-label">E-mail</p>

                    <div class="col-sm-4 col-xs-4">
                        <input type="email" class="form-control" name="r_email" id="r_email"
                               placeholder="email" required="true">
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

<?php
include_once('includes/ArizFun.php');
global $link;
include ('includes/connect.php');
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['newService'])){
  
    $service_name = $link->real_escape_string($_POST['service_name']);
    $service_type = $link->real_escape_string($_POST['service_type']);
    $website = $link->real_escape_string($_POST['website']);
    $description = $link->real_escape_string($_POST['description']);
    $doy = $link->real_escape_string($_POST['doy']);
    $nomos = $link->real_escape_string($_POST['nomos']);
    $city = $link->real_escape_string($_POST['city']);
    $r_name = $link->real_escape_string($_POST['r_name']);
    $r_surname = $link->real_escape_string($_POST['r_surname']);
    $r_tel = $link->real_escape_string($_POST['r_tel']);
    $r_email = $link->real_escape_string($_POST['r_email']);

    $date = getCurrentDate();
    if (check_if_service_exists($link,$service_name)){
        showAlertDialog("Service already exists. Please select a different service name.");
    }else {
        if (saveServiceOnDB($link, $service_name, $service_type, $website, $description,
            $doy, $nomos, $city, $r_name, $r_surname, $r_tel, $r_email,$date)) {
            showAlertDialog("Success.");
        } else {
            showAlertDialog("DB Error.");
        }
    }
}
?>





