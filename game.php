<?php

function showMessage($messages) {

    echo "<div id='message'><p>";

    foreach ($messages as $message) {
        echo "$message";
        echo "<br /><br />";
    }

    echo "<p></div>";
}

// Need a function to get the story parts

function getMap($player_location_x, $player_location_y)
{
    $map_1F = array (
        array(0,0,0,0,0,0,0,0,0,0),
        array(0,0,0,0,0,0,0,0,0,0),
        array(0,0,0,2,3,3,3,2,0,0),
        array(0,0,0,4,0,0,0,4,0,0),
        array(0,2,3,2,3,2,0,4,0,0),
        array(0,0,0,4,0,0,0,4,0,0),
        array(0,0,0,2,3,3,3,2,0,0),
        array(0,0,0,0,0,0,0,0,0,0),
        array(0,0,0,0,0,0,0,0,0,0),
        array(0,0,0,0,0,0,0,0,0,0)

    );
    for ($i = 0; $i < 10; $i++)
    {
        echo '<tr id="map-row">';

        for ($j = 0; $j < 10; $j++)
        {
            echo '<td id="map-col">';

            $loc = $map_1F[$i][$j];

            if ($player_location_x == $i && $player_location_y == $j)
                echo "🚶";
            elseif ($loc == 0)
                echo " ";
            elseif ($loc == 2)
                echo "█";
            elseif ($loc == 3)
                echo "-";
            elseif ($loc == 4)
                echo "|";

            echo '</td>';
        }
        echo '</tr>';
    }}