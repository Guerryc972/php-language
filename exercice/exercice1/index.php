
<?php 
$prenoms = array ('Duplex', 'Joam', 'Ramzi', 'Guerryc', 'Katia');
sort($prenoms);
foreach($prenoms as $key => $vals)
{
echo "le prénom [". $key . "] = ".$vals . "\n";
}
?>