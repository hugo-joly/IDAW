<nav class="menu">
    <ul>
        <div class="menubuttons">
            <li><a id="currentpage" href="index.php">Accueil</a></li>
            <li><a href="cv.php">CV</a></li>
            <li><a href="hobbies.php">Hobbies</a></li>
            <li><a href="projets.php">Projets</a></li>
            <li><a href="infos-technique.php">Infos Technique</a></li>
        </div>
    </ul> 
</nav>

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
    // ...
        foreach($mymenu as $pageId => $pageParameters) {
            echo "..."; 
        }
    // ...
    }
?>