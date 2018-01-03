<?php
    function Redirect($url, $permanent = false)
    {
        header('Location: ' . $url, true, $permanent ? 301 : 302);
        exit();
    }
    
    // Redirect to index page
    Redirect('/index.html', false);
?>