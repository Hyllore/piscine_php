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
if ($argc != 2)
	return ;
$str = implode(" ", ft_split($argv[1]));
if ($str != NULL)
	echo "$str\n";
?>
