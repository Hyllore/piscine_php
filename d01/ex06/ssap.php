#!/usr/bin/php
<?PHP
function is_space($str)
{
	if ($str == NULL)
		return (0);
	return (1);
}

function ft_split($str)
{
	$tab = explode(" ", $str);
	$tab = array_filter($tab, "is_space");
	return ($tab);
}
$i = 1;
$tab2 = ft_split($argv[$i]);
$i++;
while ($argv[$i])
{
	$tab = ft_split($argv[$i]);
	$tab2 = array_merge($tab2, $tab);
	$i++;
}
sort($tab2);
$i = 0;
while (count($tab2[$i]))
{
	echo "$tab2[$i]\n";
	$i++;
}
?>
