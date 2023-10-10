        <?php
            $pageId = 'hobbies';
            require_once('template_header.php');
        ?>
        <header>
            <h1>JOLY Hugo - Hobbies</h1>
        </header>
        <?php
            require_once('template_menu.php');
            renderMenuToHTML($pageId);
        ?>
        <div class="content">
            <h2>Hobbie n°1 :</h2>
            <p>Voici mon premier hobbie</p>
        </div>
        <?php
            require_once('template_footer.php');
        ?>