<?php
    session_start();
    function redirect($url) {
        ob_start();
        header('Location: '.$url);
        ob_end_flush();
        die();
    }

    // destroy the session 
    if(session_destroy()){
        redirect('http://localhost/PythonWebsites/UI/index.php');
    }
?>