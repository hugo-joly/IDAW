        <?php
            $pageId = 'projets';
            require_once('template_header.php');
        ?>
        <header>
            <h1>JOLY Hugo - Projets</h1>
        </header>
        <?php
            require_once('template_menu.php');
            renderMenuToHTML($pageId);
        ?>
        <div class="content">
            <h2>Projet ouvert à l'IMT Nord Europe :</h2>
            <p>Projet #JeSuisIngénieurE en collaboration avec la cheffe de projet <a href="https://www.linkedin.com/in/jade-héloïse-pireaux-2644a2248/">Jade-Héloïse PIREAUX</a>.</p>
            <h2>Stage au CHRU de Nancy :</h2>
            <p>Stage au sein de l'UTEP concernant la <a href=https://www.has-sante.fr/jcms/c_1241714/fr/education-therapeutique-du-patient-etp#:~:text=L%27éducation%20thérapeutique%20du%20patient,prise%20en%20charge%20du%20patient.>e-ETP</a>.</p>
        </div>
        <?php
            require_once('template_footer.php');
        ?>