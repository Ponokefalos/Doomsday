<?php
/**
 * Created by PhpStorm.
 * User: Kir
 * Date: 27/6/2015
 * Time: 5:28 μμ
 */
include_once('includes/kyrFun.php');
global $link;
include_once('includes/connect.php');
include_once('includes/ArizFun.php');
?>

<?php
$id = htmlspecialchars($_GET["id"]);
echo $id;
$files = return_File_By_Id($link, $id);
$service=return_Service_Given_Id($link,$files['service_id']);
$contributors = return_Contributors_Given_Id($link,$id);


/*----------------BETA ZONE-------------------*/
$file_dir=select_all_files($link);
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
<div class="container marketing">
    <div class="head_title">
        <div class="addNewElement">
            <button onclick="location.href ='editFiles.php?id=<?php echo $files['file_id']?>' " ; type="submit" class="btn btn-primary">-> Επεξεργασία
            </button>
        </div>
        <p>
        <h3><i><?php echo $files['title'] ?></i></h3></p>
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
                        <p class="col-xs-4 control-label">Όνομα Δημιουργού:</p>
                        <p class="col-xs-7 control-label"><?php echo $files['creator'] ?></p>
                    </div>
                    <hr class="featurette-divider">
                    <div class="form-group">
                        <p class="col-xs-4 control-label">Τίτλος Εγγράφου:</p>
                        <p class="col-xs-8 control-label"><?php echo $files['title'] ?></p>
                    </div>
                    <hr class="featurette-divider">
                    <div class="form-group">
                        <p class="col-xs-4 control-label">Αρμόδια Επιχείρηση:</p>
                        <p class="col-xs-8 control-label"><?php echo $service['service_name'] ?></p>
                    </div>
                    <hr class="featurette-divider">
                    <div class="form-group">
                        <p class="col-xs-4 control-label">Θέμα:</p>
                        <p class="col-xs-8 control-label"><?php echo $files['subject'] ?></p>
                    </div>
                    <hr class="featurette-divider">
                    <div class="form-group">
                        <p class="col-xs-4 control-label">Περιγραφή:</p>
                        <p class="col-xs-8 control-label"><?php echo $files['description'] ?></p>
                    </div>
                    <hr class="featurette-divider">
                    <div class="form-group">
                        <p class="col-xs-4 control-label">Email Συντελεστών:</p>
                        <p class="col-xs-8 control-label"><?php echo $contributors['con_email'] ?></p>
                    </div>
                    <hr class="featurette-divider">
                    <div class="form-group">
                        <p class="col-xs-4 control-label">Ημερομηνία Υποβολής Συστήματος:</p>
                        <p class="col-xs-8 control-label"><?php echo $files['date'] ?></p>
                    </div>
                    <hr class="featurette-divider">
                    <div class="form-group">
                        <p class="col-xs-4 control-label">Σημειώσεις:</p>
                        <p class="col-xs-8 control-label"><?php echo $files['notes'] ?></p>
                    </div>
                    <hr class="featurette-divider">
                    <div class="form-group">
                        <p class="col-xs-4 control-label">Αρχείο:</p>
                        <p class="col-xs-8 control-label"><?php echo '<a href="'.$files["file"].'" >Κατέβασμα .zip</a>' ?> </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include('includes/footer.php') ?>
</body>
</html>