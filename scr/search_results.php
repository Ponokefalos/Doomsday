<!--
/**
 * Created by PhpStorm.
 * User: arist
 * Date: 26-Jun-15
 * Time: 18:13
 */ -->
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
    global $link;
    include('includes/connect.php');
    include('includes/Arizfun.php');
    $query = htmlspecialchars($_GET["q"]);
    $type = htmlspecialchars($_GET["t"]);
    ?>
</head>
<body>
<div class="container marketing">
    <div class="head_title col-xs-9">
        <p><h3><i>Αποτελέσματα για <?php echo $query; ?></i></h3></p>
        <hr class="featurette-divider">
    </div>
    <div class="col-xs-12">
        <?php show_results($type, $link, $query) ?>
    </div>
    <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br>
</div>
<?php
function show_results($type, $link, $query)
{
    if ($type == "f") {
        $result = search_files($link, $query);
        if ($result == null) {
            showAlertDialog("sql error");
            exit();
        }
        echo '<div class="table-responsive" style="width: auto">
        <table class="table">
            <tr>
                <td>Δημιουργός</td>
                <td>Τίτλος</td>
                <td>Θέμα</td>
                <td>Ημερομηνία</td>
                <td></td>
            </tr>';
        while ($row = $result->fetch_assoc()) {
            $dir = dirname(dirname($row["file"]));
            $dir = $row["file"];
            echo '
            <tr>
                <td>' . $row["creator"] . '</td>
                <td>' . $row["title"] . '</td>
                <td>' . $row["subject"] . '</td>
                <td>' . $row["date"] . '</td>
                <td><a href="' . $dir . '"</a>Κατέβασμα .zip</td>
                </tr>';
        }
        echo '</table>
 </div> ';
    } else if ($type == "s") {
        $result = search_services($link, $query);
        if ($result == null) {
            showAlertDialog("sql error");
            exit();
        }
        echo '<div class="table-responsive" style="width: auto">
        <table class="table">
            <tr>
                <td>Όνομα Υπηρεσίας</td>
                <td>Τύπος Υπηρεσίας</td>
                <td>Website</td>
                <td>Περιγραφή</td>
                <td>Email Αντιπροσώπου</td>
            </tr>';
        while ($row = $result->fetch_assoc()) {
            echo '
            <tr>
                <td>' . $row["service_name"] . '</td>
                <td>' . $row["service_type"] . '</td>
                <td>' . $row["website"] . '</td>
                <td>' . $row["description"] . '</td>

                <td><a href="' . '"</a>Επεξεργασία</td>
                </tr>';
        }
        echo '</table>
 </div> ';
    }
}
?>
<?php
include('includes/footer.php');
?>
</body>
</html>







