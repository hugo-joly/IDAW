<?php
    function renderMenuToHTML($currentPageId, $language) {
    // un tableau qui d\'efinit la structure du site
        $mymenu = array(
        // idPage titre
            'accueil' => array('Accueil','Home'),
            'cv' => array('CV','CV'),
            'projets' => array('Projets', 'Projects'),
            'hobbies' => array('Hobbies', 'Hobbies'),
            'infos-technique' => array('Infos Technique', 'Technical Information'),
            'contact' => array('Contact', 'Contact')
        );
    echo '<nav class="menu">
            <ul>
                <div class="menubuttons">';
        foreach($mymenu as $pageId => $pageParameters) {
            echo "<li>"; 
            if ($pageId === $currentPageId) {
                if ($language === 'fr'){
                    echo '<a id="currentpage" href="index.php?page='. $pageId. '&lang=fr">'. $pageParameters[0]. '</a></li>';
                }
                else {
                    echo '<a id="currentpage" href="index.php?page='. $pageId. '&lang=en">'. $pageParameters[1]. '</a></li>';
                }
            }
            else {
                if ($language === 'fr') {
                    echo '<a href="index.php?page='. $pageId. '&lang=fr">'. $pageParameters[0]. '</a></li>';
                }
                else {
                    echo '<a href="index.php?page='. $pageId. '&lang=en">'. $pageParameters[1]. '</a></li>';
                }
            }
        }
    echo '</div>
    </ul> 
</nav>';
    }
