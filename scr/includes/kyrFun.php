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
function returnt_Info_To_Show_On_Tables($link)
{

}

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
        $auction = mysqli_fetch_array($result);
        return $auction;
    }else
    {
        echo 'no Services to return KF97';
    }

}



?>