<?php
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
$row=$file_dir->fetch_assoc();

$dir=dirname(dirname($files["file"]));
$dir =$files["file"];
$contributors = select_contributors($link,$files['file_id']);
$contributors = contributors_to_string($contributors);
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
        <p><h3><i><?php echo $files['title'] ?></i></h3></p>
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
                        <input required="true" name="creator" type="text" value="<?php echo $files['creator'] ?>" class="col-xs-7 control-label"></p>
                    </div>
                    <hr class="featurette-divider">
                    <div class="form-group">
                        <p class="col-xs-4 control-label">Τίτλος Εγγράφου:</p>
                        <input required="true" name="title" type="text" value="<?php echo $files['title'] ?>" class="col-xs-8 control-label"></p>
                    </div>
                    <hr class="featurette-divider">
                    <div class="form-group">
                        <p class="col-xs-4 control-label">Αρμόδια Επιχείρηση:</p>
                        <input required="true" name="service_name" type="text" value="<?php echo $service['service_name'] ?>" class="col-xs-8 control-label"></p>
                    </div>
                    <hr class="featurette-divider">
                    <div class="form-group">
                        <p class="col-xs-4 control-label">Θέμα:</p>
                        <input required="true" name="subject" type="text" value="<?php echo $files['subject'] ?>" class="col-xs-8 control-label"><p>
                    </div>
                    <hr class="featurette-divider">
                    <div class="form-group">
                        <p class="col-xs-4 control-label">Περιγραφή:</p>
                        <input required="true" name="description" type="text" value="<?php echo $files['description'] ?>" class="col-xs-8 control-label"></p>
                    </div>
                    <hr class="featurette-divider">
                    <div class="form-group">
                        <p class="col-xs-4 control-label">Email Συντελεστών:</p>
                        <input required="true" name="c_list" type="text" value="<?php echo $contributors ?>" class="col-xs-8 control-label"></p>
                    </div>
                    <hr class="featurette-divider">
                    <div class="form-group">
                        <p class="col-xs-4 control-label">Σημειώσεις:</p>
                        <input name="notes" type="text" value="<?php echo $files['notes']?>" class="col-xs-8 control-label"></p>
                    </div>
                    <hr class="featurette-divider">
                    <div class="form-group">
                        <p class="col-xs-4 control-label">Αρχείο:</p>
                        <p class="col-xs-8 control-label"><?php echo '<a href="' . $dir . '">Κατέβασμα .zip</a>' ?> </p>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" name="updateFile" class="btn btn-primary">Update</button>
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
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['updateFile'])){
    $creator = $link->real_escape_string($_POST['creator']);
    $title = $link->real_escape_string($_POST['title']);
    $service_name = $link->real_escape_string($_POST['service_name']);
    $subject = $link->real_escape_string($_POST['subject']);
    $description = $link->real_escape_string($_POST['description']);
    $c_list = $link->real_escape_string($_POST['c_list']);


    if (updateFile($link,$id,$creator,$title,$service_name,$subject,$description,$c_list)){
        showAlertDialog("update successful.");
    }else{
        showAlertDialog("db error");
    }

    echo '<script > document.location = "editFiles.php?id='.$id.'" </script>';
}
?>