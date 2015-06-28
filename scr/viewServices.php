<?php
/**
 * Created by PhpStorm.
 * User: Kir
 * Date: 25/6/2015
 * Time: 6:26 μμ
 */
$id = htmlspecialchars($_GET["id"]);
include_once('includes/kyrFun.php');
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
        <div class="addNewElement">
            <button onclick="location.href ='editServices.php?id=<?php echo $service['service_id']?>' " ; type="submit" class="btn btn-primary">-> Επεξεργασία
            </button>
        </div>
        <p>
        <h3><i><?php echo $service['service_name'] ?></i></h3></p>
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
                        <p class="col-xs-8 control-label"><?php echo $service['service_name'] ?></p>
                    </div>
                    <hr class="featurette-divider">
                    <div class="form-group">
                        <p class="col-xs-4 control-label">Τύπος Επιχείρησης:</p>
                        <p class="col-xs-8 control-label"><?php echo $service['service_type'] ?></p>
                    </div>
                    <hr class="featurette-divider">
                    <div class="form-group">
                        <p class="col-xs-4 control-label">Website:</p>
                        <p class="col-xs-8 control-label"><?php echo $service['website'] ?></p>
                    </div>
                    <hr class="featurette-divider">
                    <div class="form-group">
                        <p class="col-xs-4 control-label">Δ.Ο.Υ</p>
                        <p class="col-xs-8 control-label"><?php echo $service['doy'] ?></p>
                    </div>
                    <hr class="featurette-divider">
                    <div class="form-group">
                        <p class="col-xs-4 control-label">Νομός</p>
                        <p class="col-xs-8 control-label"><?php echo $service['nomos'] ?></p>
                    </div>
                    <hr class="featurette-divider">
                    <div class="form-group">
                        <p class="col-xs-4 control-label">Πόλη</p>
                        <p class="col-xs-8 control-label"><?php echo $service['city'] ?></p>
                    </div>
                    <hr class="featurette-divider">
                    <div class="form-group">
                        <p class="col-xs-4 control-label">Περιγραφή</p>
                        <p class="col-xs-8 control-label"><?php echo $service['description'] ?></p>
                    </div>
                    <hr class="featurette-divider">
                    <div class="form-group">
                        <p class="col-xs-4 control-label">Χώρα</p>
                        <p class="col-xs-8 control-label">-</p>
                    </div>
                    <hr class="featurette-divider">
                    <div class="form-group">
                        <p class="col-xs-4 control-label">Περιγραφή</p>
                        <p class="col-xs-8 control-label"><?php echo $service['description'] ?></p>
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
                        <p class="col-xs-4 control-label"><?php echo $service['r_name'] ?></p>
                    </div>
                    <hr class="featurette-divider">
                    <div class="form-group">
                        <p class="col-xs-4 control-label">Επίθετο</p>
                        <p class="col-xs-4 control-label"><?php echo $service['r_surname'] ?></p>
                    </div>
                    <hr class="featurette-divider">
                    <div class="form-group">
                        <p class="col-xs-4 control-label">Τηλέφωνο Επικοινωνίας</p>
                        <p class="col-xs-4 control-label"><?php echo $service['r_tel'] ?></p>
                    </div>
                    <hr class="featurette-divider">
                    <div class="form-group">
                        <p class="col-xs-4 control-label">E-mail:</p>
                        <p class="col-xs-4 control-label"><?php echo $service['r_email'] ?></p>
                    </div>
                    <hr class="featurette-divider">
                    <div class="head_title">
                        <p>
                            <br>
                        <h4><i>Έγγραφα Υπηρεσίας</i></h4></p>
                    </div>
                    <?php include ('viewFiles.php') ?>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include('includes/footer.php') ?>
</body>
</html>





