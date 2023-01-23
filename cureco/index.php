<?php
require_once("./views/includes/header.php");

require_once("autoload.php");

require_once("./controllers/homeController.php");

$home = new homeController();

$pages = array('home', 'product');

$adminPages = array('dashboard', 'delete', 'update');

if(empty($_SESSION['loginAdmin']) and empty($_SESSION['loginUser'])){
    require_once("sessions.php");
}


if(isset($_GET['page'])){
    if(in_array($_GET['page'], $pages)){
        $home->index($_GET['page']);
    }
    elseif(in_array($_GET['page'], $adminPages)){
        if($_SESSION['loginAdmin'])
            $home->adminPages($_GET['page']);
        else
            $home->index('home');
    } 
    else{
        include('views/includes/error.php');
    }
        
    
} else
    $home->index('home');

require_once("./views/includes/footer.php");   