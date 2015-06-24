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