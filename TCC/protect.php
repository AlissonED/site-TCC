<?php
if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['Usuario'])) {
    echo '<script>window.location.replace("https://test124578.000webhostapp.com/TCC");</script>';

}





?>

