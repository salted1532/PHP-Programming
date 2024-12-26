<?php  #rss.html의 proxy 역할 (대리자 역할)
    header('Content-Type: application/xml; charset: utf-8');

    $homepage = file_get_contents('http://rss.etnews.com/Section901.xml');
    echo $homepage;
?>