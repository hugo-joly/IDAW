<?php
    require_once("template_header.php");
    require_once("template_menu.php");

    $currentPageId = 'accueil';
    if(isset($_GET['page'])) {
        $currentPageId = $_GET['page'];
    } 
    
    $language = 'fr' ;
    if(isset($_GET['lang'])) {
        $language = $_GET['lang'];
    }

    print_r($_GET);
    echo $language;
        
    
?>

<header class="bandeau_haut">
    <h1>JOLY Hugo</h1>
</header>

<?php
    renderMenuToHTML($currentPageId,$language);
?>

<section class="corps">
    <?php
        $pageToInclude = $currentPageId . ".php";
        if(is_readable($pageToInclude))
            require_once($pageToInclude);
        else
            require_once("error.php");
    ?>
</section>

<?php
    require_once("template_footer.php");
?>