        <?php
            $pageId = 'index';
            require_once('template_header.php');
        ?>
        <header><h1>JOLY Hugo</h1></header>
        <?php
            require_once('template_menu.php');
            renderMenuToHTML($pageId);
        ?>
        <div class="presentation">
            <p>Je m'appelle Hugo JOLY.</p>
            <p>Je suis élève ingénieur à l'<B>IMT Nord Europe</B> en 2ème année.</p>
        </div>
        <?php
            require_once('template_footer.php');
        ?>       