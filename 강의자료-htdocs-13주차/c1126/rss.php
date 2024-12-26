<?php
    header('Content-Type: application/xml; charset=UTF-8');

    //$rss = file_get_contents('http://rss.etnews.com/Section901.xml');
    
    $rss = file_get_contents('https://www.korea.kr/rss/policy.xml');
    
    echo $rss;
?>