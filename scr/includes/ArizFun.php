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
                         $doy,$nomos,$city,$r_name,$r_surname,$r_tel,$r_email){
    $sql = "insert into services (service_name,service_type,website,description,
                         doy,nomos,city,r_name,r_surname,r_tel,r_email)
                         values ('$service_name','$service_type','$website','$description',
                         '$doy','$nomos','$city','$r_name','$r_surname','$r_tel','$r_email')";

    if ($link->query($sql)===TRUE) {
        return true;
    }else{
        return false;
    }
}
function check_if_service_exists($link,$service_name){
    $sql = "SELECT service_name "
        . "FROM services WHERE service_name='$service_name' ";
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

function echo_services_in_html_option($result){
    while($row = mysqli_fetch_assoc($result)){
        echo '<option>'.$row['service_name'].'</option>';
    }
}