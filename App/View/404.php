<?php 
$title = '404';
ob_start(); 
?>

<h1>Cette page n'existe pas</h1>
<a href="/">Retour</a>

<?php
$content = ob_get_clean();
require('template.php');
?>
