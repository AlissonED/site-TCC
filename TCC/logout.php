<?php

if(!isset($_SESSION)){
    session_start();
}

session_destroy();
 
echo '<script>window.location.replace("https://test124578.000webhostapp.com/TCC");</script>';

?>