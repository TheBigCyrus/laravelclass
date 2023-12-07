<?php
require_once __DIR__."/models/database.php";

date_default_timezone_set('Asia/Tehran');
$request = str_replace('/avamusic', '', $_SERVER['REQUEST_URI']);

switch ($request){
    case '/home':
    case '/':
    case '/index':
        require __DIR__ ."/controllers/index.php";
        break;
    
    case "/musics":
        require __DIR__."/controllers/musics.php";
        break;

    case "/singers":
        require __DIR__."/controllers/singers.php";
        break;

    case "/singersProfile?singerID=1":
        require __DIR__."/controllers/singersProfile.php";
        break;

    default:
        die("404");
}
?>