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
/*function echoSelectedClassForCurrentPage($requestLinkPage)
{
    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");
    if ($current_file_name == $requestLinkPage)
        echo 'class="active"';
}*/


/**
 * epistrefei ton arithmo twn eggegrammwn xristwn ap tin vasi
 *
 * */

function return_Total_Number_Of_Services($link)
{
    $query = "select services_id from services";
    $result = mysql_query($link, $query) or die (mysqli_error($link));
    $count = mysqli_num_rows($result);
    return $count;
}

function return_Total_Number_Of_Files($link)
{
    $query = "select file_id from files";
    $result = mysql_query($link, $query) or die (mysqli_error($link));
    $count = mysqli_num_rows($result);
    return $count;
}

function return_Total_Number_Of_Users($link)
{
    $query = "select user_id from users";
    $result = mysql_query($link, $query) or die (mysqli_error($link));
    $count = mysqli_num_rows($result);
    return $count;
}

function getCurrentDate()
{
    return date("Y/m/d");
}

?>