<?php
include "../settings/connection.php";
require_once "../settings/core.php";
 $_SESSION["user_name"];

function display($con)
{$name = $_SESSION["user_name"];
    $query = "SELECT * FROM `days` WHERE `user_name` = '$name'";
    $result = $con->query($query);
    if ($result) {
        echo "<table id='choreTable' >";
        echo "<thead>";
        echo "<tr>";

        echo "<th>Day</th>";
        echo "<th>Exercise</th>";
        echo "<th>Status</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        foreach ($result as $row) {
            echo "<tr>";

            echo "<td>" . $row['_day'] . "</td>";
            echo "<td>" . $row['exercise'] . "</td>";
            echo "<td>
            <a href=\"../action/status.php?id=" . $row['exerciseID'] . "\">
            <button id='comp' name='status'>".$row['exerciseStatus']."</button>
            </a>
           
            </td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";

    } else {
        
        echo "something went wrong.";
    }
}









?>