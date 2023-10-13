<?php
    require_once("template_header.php");
    require_once("template_menu.php");

    sessionstart();

    if (isset($_GET['disconnect'])) {
        session_unset();
        session_destroy();
        unset($_GET['disconnect']);
    }

    $username = "Anonymous";
    $is_connected = False;

    if (isset($_SESSION['login'])) {
        $username = $_SESSION['login'];
        $is_connected= True;
    }

    if (isset($_POST['login'])) {
        $username = $_POST['login'];
        $_SESSION['login'] = $username;
        $is_connected = True;
    }

    $currentPageId = 'accueil';
    if(isset($_GET['page'])) {
        $currentPageId = $_GET['page'];
    } 
    
    $language = 'fr' ;
    if(isset($_GET['lang'])) {
        $language = $_GET['lang'];
    }
   
?>

<header class="bandeau_haut">
    <h1>JOLY Hugo</h1>
</header>

<?php
    renderMenuToHTML($currentPageId,$language);
?>

<section class="corps">

    <form id="login_form" action="index.php" method="POST">
        <table>
            <tr>
                <th>Login :</th>
                <td><input type="text" name="login"></td>
            </tr>
            <tr>
                <th>Mot de passe :</th>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="Se connecter..." /></td>
            </tr>
        </table>
    </form>

    <?php
    // on simule une base de données
    $users = array(
        // login => password
        'riri' => 'fifi',
        'yoda' => 'maitrejedi' );
    
    $login = "anonymous";
    $errorText = "";
    $successfullyLogged = false;

    if(isset($_POST['login']) && isset($_POST['password'])) {
        $tryLogin=$_POST['login'];
        $tryPwd=$_POST['password'];

        // si login existe et password correspond
        if( array_key_exists($tryLogin,$users) && $users[$tryLogin]==$tryPwd ) {
            session_start();
            $successfullyLogged = true;
            $_SESSION['login'] = $tryLogin;
            header("Location: index.php");
        } 
        else
            $errorText = "Erreur de login/password";
    } 
    else
        $errorText = "Merci d'utiliser le formulaire de login";

    if(!$successfullyLogged) {
        echo $errorText;
    } 
    else {
        echo "<h1>Bienvenu ".$_SESSION['login']."</h1>";
    }
    ?>

    <?php
        $pageToInclude = $language. "/". $currentPageId . ".php";
        if(is_readable($pageToInclude))
            require_once($pageToInclude);
        else
            require_once("error.php");
    ?>

</section>

<?php
    require_once("template_footer.php");
?>