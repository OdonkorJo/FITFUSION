<?php
include "../settings/connection.php";
function get_exercise($con)
{
    $query = "SELECT `exerciseID` FROM `userexercises`";
    $result = $con->query($query);

                
                echo "<div class='exercise' draggable='true' id = '$exerciseName'>$exerciseName</div>";
               
            



            }
        }
    }else{
        echo "something went wrong";
    }
}


?>