<?php
    function renderMenuToHTML($currentPageId) {
    // un tableau qui d\'efinit la structure du site
        $mymenu = array(
        // idPage titre
            'index' => array( 'Accueil' ),
            'cv' => array( 'CV' ),
            'projets' => array('Projets'),
            'hobbies' => array('Hobbies'),
            'infos-trechnique' => array('Infos Technique')
        );
    echo '<nav class="menu">
            <ul>
                <div class="menubuttons">';
        foreach($mymenu as $pageId => $pageParameters) {
            echo "<li>"; 
            if ($pageId = $currentPageId) {
                echo '<a id="currentpage" href="', $pageId, '.php">', $pageParameters, '</a></li>';
            }
            else {
                echo '<a href="', $pageId, '.php">', $pageParameters, '</a></li>';
            }
        }
    echo '</div>
    </ul> 
</nav>';
    }
?>