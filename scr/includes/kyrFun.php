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
function echoSelectedClassForCurrentPage($requestLinkPage){
    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");
    if ($current_file_name == $requestLinkPage)
        echo 'class="active"';
}


?>