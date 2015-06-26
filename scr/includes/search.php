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
<div class="col-xs-12" id="Search_Form">
    <form class="form-horizontal">
        <div class="form-group">
            <p>Συμπληρώστε τα παρακάτω πεδία για αναζήτηση</p>

            <div class="col-sm-4 col-xs-4">
                <input type="text" class="form-control" name="search_query" id="search_query"
                       autocomplete="off" placeholder="search shit">
            </div>
        </div>
        <select class="form-control" name="search_type" id="search_type">
            <option>Files</option>
            <option>Services</option>
        </select>
        <div class="form-group">

        </div>
    </form>


        <input type="button"  onClick="myFunction()" value="gooby pls">

    <script >
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

