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
        include('includes/header.php');
        include('includes/navbar.php');
        include('includes/ArizFun.php');
        global $link;
        include ('includes/connect.php');
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
            <form name="file_form" class="form-horizontal" method="post" enctype="multipart/form-data">

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
                               placeholder="Τίτλος"   required="true">
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
                                  placeholder=" Θέμα"  required="true"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <p class="col-xs-2 control-label">Περιγραφή</p>

                    <div class="col-sm-4">
                        <textarea name="description" class="form-control user_input" id="description"
                                  rows="3"
                                  placeholder="Λίγα λόγια για τα έγγραφα"  required="true"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <p class="col-xs-2 control-label">Email Συντελεστών</p>

                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="c_list" id="c_list"
                               placeholder="πχ email1@domain.com,email2@domain.com " required="true">
                    </div>
                </div>

                <div class="form-group">
                    <p>Επιτρεπώμενοι Τύποι Αρχείων: "jpg", "png", "zip", "pdf"</p>
                    <p>Μέγιστος Αριθμός αρχείων: 20</p>
                    <p>Μέγιστο Συνολικό Μέγεθος: 30ΜΒ</p>

                    <div class="col-sm-4">
                        <input type="file" name="files[]" multiple="multiple">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" name="submit" class="btn btn-primary">Εισαγωγή</button>
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




if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit'])){
    showAlertDialog("in post");

    $creator = $link->real_escape_string($_POST['creator']);
    $title = $link->real_escape_string($_POST['title']);
    $service_name = $link->real_escape_string($_POST['service_name']);
    $subject = $link->real_escape_string($_POST['subject']);
    $description = $link->real_escape_string($_POST['description']);
    $c_list = $link->real_escape_string($_POST['c_list']);

    //manage files
    function manage_files($creator,$title)
    {
        $valid_formats = array("jpg", "png", "zip", "pdf");
        $max_file_size = 1024 * 1024 * 1; //30 mb
        $path = "uploads/"; // Upload directory
        $count = 0;

        $zip = new ZipArchive();
        $filename = $path . "files_" . $creator . "_" . $title . ".zip";

        if ($zip->open($filename, ZipArchive::CREATE) !== TRUE) {
            exit("cannot open <$filename>\n");
        }

        foreach ($_FILES['files']['name'] as $f => $name) {
            if ($_FILES['files']['error'][$f] == 4) {
                continue; // Skip file if any error found
            }
            if ($_FILES['files']['error'][$f] == 0) {
                if ($_FILES['files']['size'][$f] > $max_file_size) {
                    showAlertDialog("$name is too large!.");
                    continue; // Skip large files
                } elseif (!in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats)) {
                    showAlertDialog("$name is not a valid format");
                    continue; // Skip invalid file formats
                } else { // No error found! Add files to zip
                    if (move_uploaded_file($_FILES["files"]["tmp_name"][$f], $path . $name)) {
                        $zip->addFile($path . $name, $name);
                        echo "numfiles: " . $zip->numFiles . "\n";
                        echo "status:" . $zip->status . "\n";
                        $count++; // Number of successfully archived files

                    }

                }
            }
        }
        $zip->close();

        //delete files
        foreach ($_FILES['files']['name'] as $f => $name) {
            unlink($path . $name);
        }
        return $filename;
    }


     //upload to database
     if (check_if_file_exists($link,$title,$creator)){
         showAlertDialog("File already exists. Please select a different title.");
     }else {
         $service_id = get_service_id_by_name($link,$service_name);
         if ($service_id!=null) {
             $file = manage_files($creator,$title);
             $date = date("Y-n-d");
             if (saveFileOnDB($link,$creator,$title,$service_id,$subject,
                 $description,$c_list,$file,$date)) {
                 showAlertDialog("Success.");
             }else {
                 showAlertDialog("DB Error.");
             }
         }else{
             showAlertDialog("Service id not found.");
         }
     }



}
?>


