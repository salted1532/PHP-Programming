<?php
    header('Content-Type: application/xml; charset=UTF-8');

    $rss = file_get_contents('http://rss.etnews.com/Section901.xml');
    echo $rss;
?>