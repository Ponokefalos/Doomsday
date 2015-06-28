<?php
$id = htmlspecialchars($_GET["id"]);
include_once('includes/kyrFun.php');
global $link;
include_once('includes/connect.php');
$service = return_Service_Given_Id($link, $id);
echo $id;
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
    <link href="../css/viewServicesStyle.css" rel="stylesheet">
    <?php include('includes/header.php');
    include('includes/navbar.php');
    ?>
</head>
<body>
<div class="container marketing shadowStyle">
    <div class="head_title">
        <p><h3><i><?php echo $service['service_name']?></i></h3></p>
        <hr class="featurette-divider">
    </div>
    <div class="container marketing">
        <div class="row">
            <div class="col-xs-12" id="auctionFormLabels">
                <form name="service_form" class="form-horizontal" method="post" enctype="multipart/form-data">
                    <div class="head_title">
                        <p><h4><i>Στοιχεία Υπηρεσίας</i></h4></p>
                        <hr class="featurette-divider">
                    </div>
                    <div class="form-group">
                        <p class="col-xs-4 control-label">Όνομα Επιχείρησης:</p>
                        <input name="service_name" required="true" type="text" class="col-xs-8 control-label" value="<?php echo $service['service_name'] ?>">
                    </div>
                    <hr class="featurette-divider">
                    <div class="form-group">
                        <p class="col-xs-4 control-label">Τύπος Επιχείρησης:</p>
                        <select  name="service_type" id="service_type">
                            <option value="Δημόσιος Τομέας"<?php if ($service_type="Δημόσιος Τομέας") echo' selected'?>>Δημόσιος Τομέας</option>
                            <option value="Ιδιωτικός Τομέας"<?php if ($service_type="Ιδιωτικός Τομέας") echo' selected'?>>Ιδιωτικός Τομέας</option>
                            <option value="Πανεπιστημιακός Φορέας"<?php if ($service_type="Πανεπιστημιακός Φορέας") echo' selected'?>>Πανεπιστημιακός Φορέας</option>
                        </select>
                    </div>
                    <hr class="featurette-divider">
                    <div class="form-group">
                        <p class="col-xs-4 control-label">Website:</p>
                        <input name="website" required="true" type="text" class="col-xs-8 control-label" value="<?php echo $service['website'] ?>">
                    </div>
                    <hr class="featurette-divider">
                    <div class="form-group">
                        <p class="col-xs-4 control-label">Δ.Ο.Υ</p>
                        <input name="doy" required="true" type="text" class="col-xs-8 control-label" value="<?php echo $service['doy'] ?>">
                    </div>
                    <hr class="featurette-divider">
                    <div class="form-group">
                        <p class="col-xs-4 control-label">Νομός</p>
                        <select  name="nomos">
                            <script language="javascript">
                                var nomos = '<?php echo $service['nomos'];?>';
                                var states = new Array('Agion Oros', 'Achaia', 'Aitolia kai Akarmania', 'Argolis', 'Arkadia', 'Arta', 'Attiki', 'Chalkidiki', 'Chanion', 'Chios', 'Dodekanisos', 'Drama', 'Evros', 'Evrytania', 'Evvoia', 'Florina', 'Fokidos', 'Fthiotis', 'Grevena', 'Ileia', 'Imathia', 'Ioannina', 'Irakleion', 'Karditsa', 'Kastoria', 'Kavala', 'Kefallinia', 'Kerkyra', 'Kilkis', 'Korinthia', 'Kozani', 'Kyklades', 'Lakonia', 'Larisa', 'Lasithi', 'Lefkas', 'Lesvos', 'Magnisia', 'Messinia', 'Pella', 'Pieria', 'Preveza', 'Rethynnis', 'Rodopi', 'Samos', 'Serrai', 'Thesprotia', 'Thessaloniki', 'Trikala', 'Voiotia', 'Xanthi', 'Zakynthos');
                                for (var hi = 0; hi < states.length; hi++) {
                                    if (nomos==states[hi]){
                                        document.write("<option selected value=\"" + states[hi] + "\">" + states[hi] + "</option>");
                                    }else{
                                        document.write("<option value=\"" + states[hi] + "\">" + states[hi] + "</option>");
                                    }
                                }
                            </script>
                        </select>
                    </div>
                    <hr class="featurette-divider">
                    <div class="form-group">
                        <p class="col-xs-4 control-label">Πόλη</p>
                        <input name="city" required="true" type="text" class="col-xs-8 control-label" value="<?php echo $service['city'] ?>">
                    </div>
                    <hr class="featurette-divider">
                    <div class="form-group">
                        <p class="col-xs-4 control-label">Περιγραφή</p>
                        <input name="description" required="true" type="text" class="col-xs-8 control-label" value="<?php echo $service['description'] ?>">
                    </div>
                    <hr class="featurette-divider">
                    <div class="form-group">
                        <p class="col-xs-4 control-label">Χώρα</p>
                        <p class="col-xs-8 control-label">-</p>
                    </div>
                    <hr class="featurette-divider">
                    <div class="head_title">
                        <p>
                            <br>
                        <h4><i>Στοιχεία Αντιπροσώπου</i></h4></p>
                        <hr class="featurette-divider">
                    </div>
                    <div class="form-group">
                        <p class="col-xs-4 control-label">Όνομα</p>
                        <input name="r_name" required="true" type="text" class="col-xs-8 control-label" value="<?php echo $service['r_name'] ?>">
                    </div>
                    <hr class="featurette-divider">
                    <div class="form-group">
                        <p class="col-xs-4 control-label">Επίθετο</p>
                        <input name="r_surname" required="true" type="text" class="col-xs-8 control-label" value="<?php echo $service['r_surname'] ?>">
                    </div>
                    <hr class="featurette-divider">
                    <div class="form-group">
                        <p class="col-xs-4 control-label">Τηλέφωνο Επικοινωνίας</p>
                        <input name="r_tel" required="true" type="text" class="col-xs-8 control-label" value="<?php echo $service['r_tel'] ?>">
                    </div>
                    <hr class="featurette-divider">
                    <div class="form-group">
                        <p class="col-xs-4 control-label">E-mail</p>
                        <input name="r_email" required="true" type="email" class="col-xs-8 control-label" value="<?php echo $service['r_email'] ?>">
                    </div>
                    <hr class="featurette-divider">
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" name="updateService" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include('includes/footer.php') ?>
</body>
</html>
<?php
include_once('includes/ArizFun.php');
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['updateService'])){
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

    if (updateService($link,$id,$service_name,$service_type,$website,$description,
        $doy,$nomos,$city,$r_name,$r_surname,$r_tel,$r_email)){
        showAlertDialog("update successful.");
    }else{
        showAlertDialog("db error");
    }

    echo '<script > document.location = "editServices.php?id='.$id.'" </script>';
}
?>