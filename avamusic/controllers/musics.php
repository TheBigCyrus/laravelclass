<?php
    /** @var mysqli $db */
    $statment = $db->query("SELECT musics.*, singers.Name SingerName FROM `musics` JOIN `singers` ON musics.SingerID = singers.ID  ORDER BY `ID` DESC;");

    /** @var array $musics */
    $musics = [];

    if ($statment->num_rows) {
        while ($record = $statment->fetch_assoc())
        {
            $musics[] = $record;
        } 
    }

    $title = "صفحه موزیک ها";
    
    require_once "views/header.php";
    require_once "views/navbar.php";
    require_once "views/musics.php";
?>