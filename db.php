<?php

$m = new Mongo("mongodb://127.0.0.1:27017");
$c = $m->rurunning;

$layout = @join('',@file('layout.html'));

function output($menu,$content,$layout) {
	$html = str_replace('<!--Content-->',$content,$layout);
	$html = str_replace('<!--Menu-->',$menu,$html);
	return ($html);
}

