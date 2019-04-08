<?php
    class Location
    {
        var $north;
        var $south;
        var $east;
        var $west;
        var $firstDescription;
        var $alternateDescription;

        function __construct($north, $south, $east, $west, $firstDescription, $alternateDescription)
        {
            $this->north = $north;
            $this->south = $south;
            $this->east = $east;
            $this->west = $west;
            $this->firstDescription = $firstDescription;
            $this->alternateDescription = $alternateDescription;
        }
    }