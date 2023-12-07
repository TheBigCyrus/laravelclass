<?php
    /** @var mysqli $db */
    $statment = $db->query("SELECT * FROM `singers`;");

    /** @var array $singers */
    $singers = [];

    if ($statment->num_rows) {
        while ($record = $statment->fetch_assoc())
        {
            $singers[] = $record;
        } 
    }
    $title = "صفحه خواننده ها ";
    
    require_once "views/header.php";
    require_once "views/navbar.php";
    require_once "views/singers.php";
?>