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

    <link href="../css/contanctStyle.css" rel="stylesheet">

    <?php include('includes/header.php');
    include('includes/navbar.php');
    ?>


</head>


<body>

<div class="container marketing">
    <div class="head_title">

        <p>

        <h3><i>Επικοινωνία</i></h3></p>
        <hr class="featurette-divider">
    </div>
    <!-- =============================================PERIEXOMENO SELIDAS ================================================-->

    <p>Επικοινωνίστε με τους υπεύθυνους της σελίδας, συμπληρώνοντας την παρακάτω φόρμα με τα στοιχεία σας.</p>



    <form class="form-horizontal" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <p class="col-xs-2 control-label">E-mail</p>

            <div class="col-sm-4 col-xs-4">
                <input type="text" class="form-control" name="creator" id="creator"
                       placeholder="mail επικοινωνίας" required="true">
            </div>
        </div>
        <div class="form-group">
            <p class="col-xs-2 control-label">Όνομα</p>

            <div class="col-sm-4 col-xs-4">
                <input type="text" class="form-control" name="creator" id="creator"
                       placeholder="Όνομα χρήστη" required="true">
            </div>
        </div>

        <div class="form-group">
            <p class="col-xs-2 control-label">Θέμα</p>

            <div class="col-sm-4">
                        <textarea name="subject" class="form-control user_input" id="subject"
                                  rows="3"
                                  placeholder=" Θέμα" required="true"></textarea>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" name="sentMail" class="btn btn-primary">Αποστολή</button>
            </div>
        </div>
    </form>
    <br> <br> <br> <br> <br> <br> <br>
    <br> <br> <br> <br> <br> <br> <br>


</div>

<?php include('includes/footer.php') ?>
</body>


</html>





