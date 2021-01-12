
<?php 
$prenoms = array ('Duplex', 'Joam', 'Ramzi', 'Guerryc', 'Katia' , 'Anna' );
sort($prenoms);
echo "Le rangmement alphabétique des prénoms du tableau est ";
echo " <br/>";
foreach($prenoms as $key => $vals)
{
    
echo " <br /> le prénom [". $key . "]   = ".$vals . "\n";
}
?>