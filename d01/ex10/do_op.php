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

if ($argc != 4)
{
	echo "Incorrect Parameters\n";
	return ;
}
$num1 = ft_split($argv[1]);
$op = ft_split($argv[2]);
$num2 = ft_split($argv[3]);
if ($op[0] == "+")
{
	echo intval($num1[0]) + intval($num2[0]);
	echo "\n";
}
if ($op[0] == "-")
{
	echo intval($num1[0]) - intval($num2[0]);
	echo "\n";
}
if ($op[0] == "*")
{
	echo intval($num1[0]) * intval($num2[0]);
	echo "\n";
}
if ($op[0] == "/")
{
	echo intval($num1[0]) / intval($num2[0]);
	echo "\n";
}
if ($op[0] == "%")
{
	echo intval($num1[0]) % intval($num2[0]);
	echo "\n";
}
?>
