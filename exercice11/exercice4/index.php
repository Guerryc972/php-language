<?php 
$prenoms = array('François', 'Michel', 'Nicole', 'Véronique', 'Benoît'); 
foreach ( $prenoms as $element)
echo $element . '<br />' ; 
echo '...............<br />';
array_push ($prenoms , "leeloo");
foreach ( $prenoms as $element)
echo $element . '<br />' ; 
?>