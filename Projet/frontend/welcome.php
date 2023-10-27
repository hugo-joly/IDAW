<?php
    require_once('test_connection.php');
    if (isset($_SESSION['user_id'])) {
        echo '<td>' . $_SESSION['user_id'] . '</td>';
        
    }
?>