<?php
        $style='style1';

        if (isset($_COOKIE['styleUtilisateur'])) {
            //style par défaut que l'utilisateur avait sélectionné lros d'une précédente requête et qui avait été stocké dans un COOKIE
            $style=$_COOKIE['styleUtilisateur'];
        }

        if (isset($_GET['css'])) {
            //L'utilisateur vient de sélectionner un style et c'est le nouveau style qu'il faut utiliser maintenant et à l'avenir
            $style=$_GET['css'];
            setcookie('styleUtilisateur', $style, time()+3600);
        }
?>

<?php 
    $currentPage = 'login';
    if (isset($_GET['page'])) {
        $currentPage = $_GET['page'];
    }
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>PHP-Forms</title>
    <link rel='stylesheet' href="<?php echo $style;?>.css"/>
</head>
<body>
        <h1> BONJOUR </h1>
        <?php
            $pageToInclude = $currentPage . ".php";
            if(is_readable($pageToInclude))
                require_once($pageToInclude);
            else
                require_once("error.php");
        ?>
</body>
<footer>
    <form id="style_form" action="index.php" method="GET">
        <select name="css">
            <option value="style1">style1</option>
            <option value="style2">style2</option>
        </select>
        <input type="submit" value="Appliquer" />
    </form>
</footer>
</html>