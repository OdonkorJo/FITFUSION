<?php
include "../settings/connection.php";
function getallrecommendations($con)
{
    $query = "SELECT * FROM `recommendations`";

    $results = $con->query($query);

    if ($results->num_rows > 0) {
        $rows = $results->fetch_all(MYSQLI_ASSOC);
        return $rows;

    } else {
        return "false";
    }
}


function testid()
{
    global $con;
    if (!isset($_GET['id'])) {
        $all = getallrecommendations($con);
        echo "<form action = \"../action/recommendation_action.php\" method ='post'>";
        echo "<div class='container'>";
        foreach ($all as $row) {
            echo "<div class ='cat'>";
<<<<<<< Updated upstream
                echo"<label>";
                echo "<input type='checkbox' name = 'exerise[]' value= '".$row['exerciseID']."'>";
                echo "<span>" . $row['exercisename']. "</span> <br>"; 
                echo "</label>";
            echo "</div>"; 
    }
        echo "</div>";
        echo "<button type='submit' name='submit'>Done</button>";
        echo "</form>";

    exit();
=======
            echo "<label>";
            echo "<input type='checkbox' name='exercise'class='goal-button' value='" . $row['exerciseID'] . "'>";
            echo "<span>" . $row['exercisename'] . "</span> <br>";
            echo "</label>";
            echo "</div>";
        }
        echo "</div>";
        echo "<a href=\"../action/get_selected_recom_action.php?name='submit'\">";
        echo "<button type='submit' id='submit' name='submit'>Done</button>";
        echo "</a>";
        exit();
>>>>>>> Stashed changes
    } else {

        $work_var = $_GET['id'];
        $work_qry = "SELECT `WorkoutGoalID` FROM `workout` WHERE `WorkoutGoalID` = $work_var ";
        $results = $con->query($work_qry);

        if ($results) {

            $rows = $results->fetch_all(MYSQLI_ASSOC);
            foreach ($rows as $row) {
                $work_num = $row['WorkoutGoalID'];
            }
            $recom_qry = "SELECT * FROM `recommendations` WHERE `WorkoutGoalID` = $work_num";
            $result = $con->query($recom_qry);


            if ($result) {
                $all = $result->fetch_all(MYSQLI_ASSOC);
                echo "<div class='container'>";
<<<<<<< Updated upstream
                foreach($all as $row){
                    echo "<div class ='cat' id = '".$row['exerciseID']."'>";
                        echo"<label>";
                            echo "<input type='checkbox'>";
                            echo "<span>" . $row['exercisename']. "</span> <br>"; 
                        echo "</label>";
                    echo "</div>"; 
            }
=======
                foreach ($all as $row) {
                    echo "<div class ='cat'>";
                    echo "<label>";
                    echo "<input type='checkbox' name='exercise' class='goal-button' value='" . $row['exerciseID'] . "'>";
                    echo "<span>" . $row['exercisename'] . "</span> <br>";
                    echo "</label>";
                    echo "</div>";
                }
>>>>>>> Stashed changes
                echo "</div>";

            }



            echo "<br><br><br>";
            $all = getallrecommendations($con);
            echo "<div class='container'>";
<<<<<<< Updated upstream
            foreach($all as $row){
                echo "<div class ='cat' id = '".$row['exerciseID']."'>";
                    echo"<label>";
                        echo "<input type='checkbox'>";
                        echo "<span>" . $row['exercisename']. "</span> <br>"; 
                    echo "</label>";
                echo "</div>"; 
        }
            echo "</div>";   
        }}}
    ?>
=======
            foreach ($all as $row) {
                echo "<div class ='cat'>";
                echo "<label>";
                echo "<input type='checkbox'name='exercise' class='goal-button' value='" . $row['exerciseID'] . "'>";
                echo "<span>" . $row['exercisename'] . "</span> <br>";
                echo "</label>";
                echo "</div>";
            }
            echo "</div>";}\
>>>>>>> Stashed changes



        }

        echo "<a href=\"../action/get_selected_recom_action.php?name='submit'\">";
        echo "<button type='submit' id='submit' name='submit'>Done</button>";
        echo "</a>";

    }
}
?>

<!-- echo "<input type='checkbox' class='goal-button' value='" . $row['exercisename'] . "'> <br>"; -->