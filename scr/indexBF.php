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
    ?>


</head>


<body>

<div class="container marketing shadowStyle">

    <p> Καλώς ήρθατε στο Σύστημα Καταχώρησης Υπηρησιών</p>

    <p> Παρακαλούμε κάντε LogIn στο σύστημα χρησημοποιώντας τα username και password. </p>

    <div class="container">
        <div class="col-xs-12" id="Login_Form">
        <form class="form-horizontal">
            <div class="form-group">
                <p for="hotelName" class="col-xs-2 control-label">Username </p>

                <div class="col-sm-4 col-xs-4">
                    <input type="text" class="form-control" name="username" id="username"
                           autocomplete="off"   placeholder="username">
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

<?php include('includes/footer.php') ?>
</body>


</html>





