<?php
    function renderMenuToHTML($currentPageId) {
        $mymenu = array(
            'welcome' => array('Accueil'),
            'aliments' => array('Aliments'),
            'mes_aliments' => array('Mes Aliments'),
        );
    echo '
    <div class="section_2">
        <div class="logo">
            <a href="/index.php?page=welcome"> MON REGIME POINT COM</a>
        </div>
        <div class="menu_2">';
        foreach($mymenu as $pageId => $pageTitle) {
            if ($pageId === $currentPageId) {
            echo    '<div>
                        <a id = "currentpage" href="index.php?page='. $pageId. '">'. $pageTitle[0]. '</a>'.
                    '</div>';
            }
            else {
            echo    '<div>
                        <a href="index.php?page='. $pageId. '">'. $pageTitle[0]. '</a>'.
                    '</div>';
            }
        }
    echo '</div>
    </div>
    <br>';
    }
?>