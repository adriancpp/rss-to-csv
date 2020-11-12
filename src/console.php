<?php 

include_once('Rss.php');

use AdrianWitkowskiRekrutacjaHRtec\Rss\Rss as Rss;

$rss = new Rss();

if( $rss->checkParameters( $argc, $argv ))
{
    $rss->init();
    $rss->toCsv();
}