<?php
/**
 * Created by PhpStorm.
 * User: arist
 * Date: 24-Jun-15
 * Time: 19:07
 */

function showAlertDialog($warningText)
{
    print '<script type="text/javascript">';
    print 'alert("' . $warningText . '")';
    print '</script>';
}

function saveServiceOnDB($link,$service_name,$service_type,$website,$description,
                         $doy,$nomos,$city,$r_name,$r_surname,$r_tel,$r_email,$date){
    $sql = "insert into services (service_name,service_type,website,description,
                         doy,nomos,city,r_name,r_surname,r_tel,r_email,date)
                         values ('$service_name','$service_type','$website','$description',
                         '$doy','$nomos','$city','$r_name','$r_surname','$r_tel','$r_email','$date')";

    if ($link->query($sql)===TRUE) {
        return true;
    }else{
        return false;
    }
}
function check_if_service_exists($link,$service_name){
    $sql = "SELECT service_name FROM services WHERE service_name='$service_name'";
    $result = mysqli_query($link, $sql) or die(mysqli_error($link));
    $count = mysqli_num_rows($result);
    if ($count >= 1) {
        return true;
    } else {
        return false;
    }
}

function select_all_services($link){
    $sql = "SELECT * from services";
    $result = mysqli_query($link,$sql) or die(mysqli_error($link));
    $count = mysqli_num_rows($result);
    if ($count >= 1) {
        return $result;
    } else {
        return null;
    }
}

function get_service_id_by_name($link,$name){
    $sql = "SELECT service_id from services where service_name='$name'";
    $result = mysqli_query($link,$sql) or die(mysqli_error($link));
    $count = mysqli_num_rows($result);
    if ($count >= 1) {
        $row = mysqli_fetch_assoc($result);
        return $row['service_id'];
    } else {
        return null;
    }
}
function echo_services_in_html_option($result){
    while($row = mysqli_fetch_assoc($result)){
        echo '<option>'.$row['service_name'].'</option>';
    }
}

function saveFileOnDB($link,$creator,$title,$service_id,$subject,
                         $description,$c_list,$file,$date){
    $sql = "insert into files (creator,title,service_id,subject,
                         description,file,date)
                         values ('$creator','$title','$service_id','$subject',
                         '$description','$file','$date')";

    if ($link->query($sql)===TRUE) {
        $sql = "select file_id from files where title='$title' AND creator='$creator'";
        $result = $link->query($sql);
        if (mysqli_num_rows($result)>=1) {
            $row = mysqli_fetch_assoc($result);
            $file_id = $row['file_id'];
            echo $file_id;
            insert_contributions($link, $c_list, $file_id);
            return true;
        }
    }else{
        return false;
    }


}

function insert_contributions($link,$string,$file_id){
    $pattern = '/\b[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}\b/';
    preg_match_all($pattern, $string,$matches);
    //print_r($matches);

    foreach ($matches[0] as $email){
        $sql = "INSERT INTO contributions(con_email, file_id)
                                VALUES ('$email','$file_id')";
        mysqli_query($link, $sql) or die(mysqli_error($link));
    }

}
/*
global $link;
include 'connect.php';
saveFileOnDB($link,'qwer','qwer',1,'qwer','qwer','a@a.com b@b.com c@c.com',null);
*/
//insert_contributions($link,'a@a.com b@b.com c@c.com',1);

function check_if_file_exists($link,$title2,$creator2){
    $sql = "SELECT title,creator FROM files WHERE title='$title2' AND creator='$creator2' ";
    $result = mysqli_query($link, $sql) or die(mysqli_error($link));
    $count = mysqli_num_rows($result);
    if ($count >= 1) {
        return true;
    } else {
        return false;
    }
}

function select_all_files($link){
    $sql = "SELECT * from files";
    $result = mysqli_query($link,$sql) or die(mysqli_error($link));
    $count = mysqli_num_rows($result);
    if ($count >= 1) {
        return $result;
    } else {
        return null;
    }
}

function all_files_to_array($link){
    $sql = "SELECT * from files";
    $result = mysqli_query($link,$sql) or die(mysqli_error($link));
    $count = mysqli_num_rows($result);
    if ($count >= 1) {
        while($row = $result->fetch_array())
        {
            $rows[] = $row;
        }
        return $rows;
    } else {
        return null;
    }
}
function all_services_to_array($link){
    $sql = "SELECT * from services";
    $result = mysqli_query($link,$sql) or die(mysqli_error($link));
    $count = mysqli_num_rows($result);
    if ($count >= 1) {
        while($row = $result->fetch_array())
        {
            $rows[] = $row;
        }
        return $rows;
    } else {
        return null;
    }
}

function array2csv(array &$array){
    if (count($array) == 0) {
        return null;
    }
    ob_end_clean();
    $df = fopen("php://output", 'w');
    fputcsv($df, array_keys(reset($array)));
    foreach ($array as $row) {
        fputcsv($df, $row);
    }
    fclose($df);
    exit();

}



    function outputCSV($data) {
        $output = fopen("php://output", "w");
        foreach ($data as $row) {
            fputcsv($output, $row); // here you can change delimiter/enclosure
        }
        fclose($output);
    }

function download_send_headers($filename) {

    header("Content-Type: text/csv; charset=utf-8");
    header("Content-Disposition: attachment; filename=$filename");
// Disable caching
    header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1
    header("Pragma: no-cache"); // HTTP 1.0
    header("Expires: 0"); // Proxies
}

function search_services($link,$query){
    $sql = "SELECT * FROM services WHERE service_name LIKE '$query%' || service_type LIKE '%$query%' || website LIKE '%$query%' ||
description LIKE '%$query%' || doy LIKE '%$query%' || nomos LIKE '%$query%' || city LIKE '%$query%' ||
r_name LIKE '%$query%' || r_surname LIKE '%$query%' || r_tel LIKE '%$query%' || r_email LIKE '%$query%' || date LIKE '%$query%'";
    $result = mysqli_query($link,$sql) or die(mysqli_error($link));
    $count = mysqli_num_rows($result);
    if ($count >= 1) {
        return $result;
    } else {
        return null;
    }
}

function search_files($link,$query){
    $sql = 'SELECT * FROM files WHERE 
creator="%'.$query.'%" ||title="%'.$query.'%" ||subject="%'.$query.'%" ||
description="%'.$query.'%" ||date="%'.$query.'%"';
    $result = mysqli_query($link,$sql) or die(mysqli_error($link));
    $count = mysqli_num_rows($result);
    if ($count >= 1) {
        return $result;
    } else {
        return null;
    }
}