<?php
    require_once('header.php');
    require_once('menu.php');
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