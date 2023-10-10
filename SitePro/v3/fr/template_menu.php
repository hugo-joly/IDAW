<?php
    function renderMenuToHTML($currentPageId) {
    // un tableau qui d\'efinit la structure du site
        $mymenu = array(
        // idPage titre
            'accueil' => array( 'Accueil' ),
            'cv' => array( 'CV' ),
            'projets' => array('Projets'),
            'hobbies' => array('Hobbies'),
            'infos-technique' => array('Infos Technique'),
            'contact' => array('Contact')
        );
    echo '<nav class="menu">
            <ul>
                <div class="menubuttons">';
        foreach($mymenu as $pageId => $pageParameters) {
            echo "<li>"; 
            if ($pageId === $currentPageId) {
                echo '<a id="currentpage" href="index.php?page='. $pageId. '">'. $pageParameters[0]. '</a></li>';
            }
            else {
                echo '<a href="index.php?page='. $pageId. '">'. $pageParameters[0]. '</a></li>';
            }
        }
    echo '</div>
    </ul> 
</nav>';
    }
?>