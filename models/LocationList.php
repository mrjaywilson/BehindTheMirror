<?php

include_once 'Location.php';

//class LocationList
//{
    // public $START = new Location("","","","","","");

    $L001 =
        '{"location_id": "L001","description": "Test description.","has_visited": "true","visited_description": "Test visted.","north": "L002","south": "L003","east": "L004","west": "L005"}';

    $location = json_decode($L001);

echo $location->location_id;
echo $location->description;
echo $location->has_visited;
echo $location->visited_description;
echo $location->north;
echo $location->south;
echo $location->east;
echo $location->west;
//}