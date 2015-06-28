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
    include_once('includes/header.php');
    ?>


</head>


<body>

<div class="container marketing shadowStyle">

    <p> Καλώς ήρθατε στο Σύστημα Καταχώρησης Υπηρησιών</p>

    <p> Παρακαλούμε κάντε LogIn στο σύστημα χρησημοποιώντας τα username και password. </p>

    <div class="container">
        <div class="col-xs-12" id="Login_Form">
            <form class="form-horizontal" method="post">
                <div class="form-group">
                    <p for="hotelName" class="col-xs-2 control-label">Username </p>

                    <div class="col-sm-4 col-xs-4">
                        <input type="text" class="form-control" name="username" id="username"
                               autocomplete="off" placeholder="username">
                    </div>
                </div>

                <div class="form-group">
                    <p for="hotelName" class="col-xs-2 control-label">Password </p>

                    <div class="col-sm-4 col-xs-4">
                        <input type="password" class="form-control" name="password" id="password"
                               placeholder="password">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" name="login" class="btn btn-primary">Είσοδος</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

    <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br>
</div>

<?php include_once('includes/footer.php') ?>
</body>


</html>


<?php
/**
 * Created by PhpStorm.
 * User: Jim
 * Date: 31/5/2015
 * Time: 5:12 μμ
 */
/*session_start();*/


include_once('includes/kyrFun.php');
include_once("includes/connect.php");
global $link;


if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['login'])) {

    $errorCode = 0;

    $username = mysqli_real_escape_string($link, $_POST['username']);
    $password = mysqli_real_escape_string($link, $_POST['password']);

    if (!isset($username)) {
        $errorCode = 1;
    }

    if (!isset($password)) {
        $errorCode = 1;
    }

    /*$password = md5($password);*/


    /**kodikas an ola pane kala xwris errorcode
     */
    if ($errorCode == 0) {
        $row = select_users_fromDB($link, $username, $password);
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['surname'] = $row['surname'];
        $_SESSION['loggedIn'] = true;
        echo 'MPIKAAAAAAAAAAAAAAAAAA';
        header("Location:index.php");

        exit();


    } else if ($errorCode == 1) {
        showAlertDialog("Παρακαλώ συμπληρώστε κατάλληλα όλα τα πεδία.");
    }


}




?>


