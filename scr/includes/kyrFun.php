<?php
/**
 * Created by PhpStorm.
 * User: Kir
 * Date: 20/6/2015
 * Time: 4:35 μμ
 */


/**
 * Created by Kyr
 * Desc: methodos pou koitaei se pia selida vriskomaste. An
 * $requestLinkPage = einai to onoma tis selidas pou theloume na ginei selected kai na fenete me mple xrwma stin navbar
 * $current_file_name = zitame ap ton server na epistrepsei to current page
 *
 * */
function echoSelectedClassForCurrentPage($requestLinkPage)
{
    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");
    if ($current_file_name == $requestLinkPage)
        echo 'class="active"';
}


/**
 * epistrefei ton arithmo twn eggegrammwn xristwn ap tin vasi
 *
 * */

function return_Total_Number_Of_Services($link)
{
    $query = "select service_id from services";
    $result = mysqli_query($link, $query) or die (mysqli_error($link));
    $count = mysqli_num_rows($result);
    return $count;
}

function return_Total_Number_Of_Files($link)
{
    $query = "select file_id from files";
    $result = mysqli_query($link, $query) or die (mysqli_error($link));
    $count = mysqli_num_rows($result);
    return $count;
}

function return_Total_Number_Of_Users($link)
{
    $query = "select user_id from users";
    $result = mysqli_query($link, $query) or die (mysqli_error($link));
    $count = mysqli_num_rows($result);
    return $count;
}

function getCurrentDate()
{
    return date("Y/m/d");
}

/**
 *epistrefei oles tis plirofies pou xeiazomaste gia tin emfanisi twn yphresiwn
 *onoma Yphresias
 * website
 * onoma-epitheto Antiproswpou
 * Hmerominia Eisagwgis tis Yphresias sto Systima
 */


function return_Service_Given_Type($link, $service_type)
{
    $query = "select * from services where service_type='$service_type'";
    $result = mysqli_query($link, $query);
    $count = mysqli_num_rows($result);

    if ($count > 0) {
        return $result;
    } else {
        echo 'There are no entries in DB KF';
    }
}

function return_Number_Of_Services_Given_Type($link, $service_type)
{
    $query = "select * from services where service_type='$service_type'";
    $result = mysqli_query($link, $query);
    $count = mysqli_num_rows($result);

    if ($count > 0) {
        return $count;
    } else {
        echo '0 nums.There are no entries in DB KF';
    }
}

function return_Service_Given_Id($link,$id){
    $query = "select * from services where service_id='$id'";
    $result = mysqli_query($link,$query);
    $count = mysqli_num_rows($result);
    if($count>0){
        $service = mysqli_fetch_array($result);
        return $service;
    }else
    {
        echo 'no Services to return KF97';
    }

}

function return_File_By_Id ($link,$id){
    $query = "select *from files WHERE  file_id='$id'";
    $result=mysqli_query($link,$query);
    $count = mysqli_num_rows($result);

    if($count>0){
        $file=mysqli_fetch_array($result);
        return $file;
    }else{
        echo 'no files found to return KF111';
    }
}

function return_Service_Name_From_File_Id($link,$serviceId){
    $query = "select service_name from services where service_id='$serviceId'";
    $result=mysqli_query($link,$query);
    $count=mysqli_num_rows($result);

    if($count > 0){
        $service_name=mysqli_fetch_array($result);
        return $service_name;
    }
    else {
        echo 'nothing to return KF124';
    }
}



/** Checks if a user exist on database
 * @param $name
 * @param $link
 * @return bool
 */
function checkIfUserNameExists($name, $link)
{
    $sql = "SELECT username "
        . "FROM users WHERE username='$name' ";

    $result = mysqli_query($link, $sql) or die(mysqli_error($link));
    $count = mysqli_num_rows($result);

    if ($count >= 1) {
        return true;
    } else {
        return false;
    }
}

function select_users_fromDB ($link,$username,$password){
    $query="select * from users where username='$username' AND password='$password'";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    $count=mysqli_num_rows($result);
    if($count==1){
        $row=mysqli_fetch_assoc($result);
        return $row;
    }

}

function return_Contributors_Given_Id ($link,$id){
    $query = "select *from contributions WHERE  file_id='$id'";
    $result=mysqli_query($link,$query);
    $count = mysqli_num_rows($result);

    if($count > 0){
        $contr=mysqli_fetch_array($result);
        return $contr;
    }
    else {
        echo 'nothing to return in KF165 contr';
    }
}

function delete_from_login($id, $link)
{
    $sql = "DELETE FROM logins WHERE user_id=$id";
    $result = mysqli_query($link, $sql);

    if ($result) {
        mysqli_commit($link);
        showAlertDialog("Επιτυχής διαγραφή");
        return true;
    } else {
        mysqli_rollback($link);
        showAlertDialog("Αδυναμία διαγγραφής στην ιστοσελίδα. Παρακαλώ προσπαθήστε αργότερα.");
        return false;
    }
}
function insert_to_logins($id, $date, $link)
{
    $sql = "insert into logins
                             (
                                 user_id,
                                 date_since
                             )
                             values
                             (
                                 '$id',
                                 '$date'
                             )";

    $result = mysqli_query($link, $sql);

    if (mysqli_errno($link) == 1062) {
        showAlertDialog(mysqli_affected_rows($link));
        $sql = "update logins set date_since='$date' where user_id='$id'";
        $result = mysqli_query($link, $sql);
    }

    if (!$result) {
        die('Could not update data: ' . mysqli_errno($link));
    }

    if ($result) {
        mysqli_commit($link);
        return true;
    } else {
        mysqli_rollback($link);
        return false;
    }
}




?>