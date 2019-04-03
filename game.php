<?php

function showMessage($messages) {

    echo "<div id='message'><p>";

    foreach ($messages as $message) {
        echo "$message";
        echo "<br /><br />";
    }

    echo "<p></div>";
}

// Need a function to get the story part from the