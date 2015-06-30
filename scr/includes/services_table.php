<?php
/**
 * Created by PhpStorm.
 * User: Kir
 * Date: 25/6/2015
 * Time: 3:02 μμ
 */
include('ArizFun.php');
include_once('kyrFun.php');
include_once('connect.php');
global $link;
global $result;
global $numOfServices;
?>
<br><br>
<div>
    <table class="table table-hover">
        <tbody>
        <tr>
            <th>Όνομα Υπηρεσίας</th>
            <th>Website</th>
            <th>Όνομα-Επίθετο Αντιπροσώπου</th>
            <th>Ημερομηνία Εισαγωγής</th>
        </tr>
        <?php
       if(basename($_SERVER['PHP_SELF'])=='services_university.php'){
           $type='Πανεπιστημιακός Φορέας';
           $result = return_Service_Given_Type($link,$type);
           $numOfServices = return_Number_Of_Services_Given_Type($link,$type);
       } elseif (basename($_SERVER['PHP_SELF'])=='services_private.php'){
           $type='Ιδιωτικός Τομέας';
           $result = return_Service_Given_Type($link,$type);
           $numOfServices = return_Number_Of_Services_Given_Type($link,$type);
       } elseif (basename($_SERVER['PHP_SELF'])=='services_public.php'){
           $type='Δημόσιος Τομέας';
           $result = return_Service_Given_Type($link,$type);
           $numOfServices = return_Number_Of_Services_Given_Type($link,$type);
       }


        if ($numOfServices > 0) {
            for ($i = 0; $i < $numOfServices; $i++) {
                echo '<tr>';
                $row = $result->fetch_assoc();

                if ($row['service_name'] == '') {
                    echo '<td>-</td>';
                } else {
                    echo '<td><a href="viewServices.php?id='.$row['service_id'].'">' . $row['service_name'] . '</a></td>';
                }


                if ($row['website'] == '') {
                    echo '<td>-</td>';
                } else {
                    echo ' <td><a href="http://'.$row['website'].'"</a>'.$row['website'].'</td>';
                }


                if ($row['r_name'] == '' && $row['r_surname'] == '') {
                    echo '<td>-</td>';
                } else {
                    echo '<td>' . $row['r_name'] . ' ' . $row['r_surname'] . '</td>';
                }

                if($row['date']=='0000-00-00'){
                    echo '<td>-</td>';
                }
                else{
                    echo '<td>'.$row['date'].'</td>';
                }


                echo '</tr>';

            }
        } else
            echo 'No, results to database. First and new Services/Companies'
        ?>
        </tbody>

    </table>
</div>