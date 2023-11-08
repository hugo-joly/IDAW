<?php
    require_once('templates/header.php');
    require_once('templates/menu.php');
    require_once('../backend/config.php');
    $currentPageId = 'welcome';
    if(isset($_GET['page'])) {
        $currentPageId = $_GET['page'];
    } 

    renderMenuToHTML($currentPageId);
?>

<?php
    $pageToInclude = "./". $currentPageId. ".php";
    if(is_readable($pageToInclude))
        require_once($pageToInclude);
    else
        require_once("error.php");
?>