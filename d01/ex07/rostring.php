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
	$tab = array_slice($tab, 0);
	return ($tab);
}
if ($argc != 2)
	return ;
$tab = ft_split($argv[1]);
$i = 1;
while ($tab[$i])
{
	echo "$tab[$i] ";
	$i++;
}
if ($tab[0] != NULL)
	echo "$tab[0]\n";
?>
