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
</head>
<body>
<div class="" id="Search_Form">
    <p>Συμπληρώστε τα παρακάτω πεδία για αναζήτηση</p>
    <form class="form-inline">
        <div class="form-group">

            <div class=" col-xs-3">
                <input type="text" class="form-control" name="search_query" id="search_query"
                       autocomplete="off" placeholder="Αναζήτηση">
            </div>
        </div>
        <div class="form-group">
        <div class=" col-xs-2">
            <select class="form-control" name="search_type" id="search_type">
                <option>Files</option>
                <option>Services</option>
            </select>

        </div>
        </div>
        <input type="button" class="btn btn-primary"  onClick="myFunction()" value="Αναζήτηση">

    </form>

    <script>
        function myFunction() {
            var q = document.getElementById("search_query").value;
            var s = document.getElementById("search_type");
            s = s.options[s.selectedIndex].text;
            var url = "search_results.php";
            if (s == "Files") {
                url += "?t=f&q="+q;
            } else if (s == "Services") {
                url += "?t=s&q="+q;
            }
            window.location.href = url;
        }
    </script>
</div>
</body>
</html>

