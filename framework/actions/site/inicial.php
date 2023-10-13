<?php

/* Inicializa o Template */
$oTemplate = Template::inicializaSmarty();


$oTemplate->display('site/inicial.tpl');

//unset($_SESSION['ORCAMENTO']);

//echo '<pre>';
//var_dump ( $_SESSION );
?>