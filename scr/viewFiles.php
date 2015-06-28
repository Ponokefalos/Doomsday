<?php
/**
 * Created by PhpStorm.
 * User: arist
 * Date: 26-Jun-15
 * Time: 00:40
 */
global $link;
include("includes/connect.php");
include_once 'includes/ArizFun.php';

$result = select_all_files($link);

?>

    <div class="table-responsive" style="width: auto">
        <table class="table">
            <tr>
                <td>Δημιουργός</td>
                <td>Τίτλος</td>
                <td>Θέμα</td>
                <td>Ημερομηνία</td>
                <td></td>
            </tr>

<?php
    while ($row = $result->fetch_assoc()) {
        $dir = dirname(dirname($row["file"]));
        $dir = $row["file"];
        echo '
            <tr>
                <td><a href="viewFilesDetails.php?temp=' . $row['file_id'] . '">' . $row['title'] . '</a></td>
                <td>' . $row["creator"] . '</td>
                <td>' . $row["subject"] . '</td>
                <td>' . $row["date"] . '</td>
                <td><a href="' . $dir . '"Επεξεργασία</a>Κατέβασμα .zip</td>
                </tr>';
    }
    echo '</table>
 </div> ';
?>