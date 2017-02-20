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
foreach ($tab2 as $i)
{
	if (is_numeric($i) == 1)
	{
		$num[] = $i;
	}
}
sort($num, SORT_STRING);
foreach($tab2 as $i)
{
	if (ctype_alpha($i) == 1)
	{
		$alp[] = $i;
	}
}
sort($alp, SORT_NATURAL | SORT_FLAG_CASE);
foreach ($tab2 as $i)
{
	if (ctype_alpha($i) == 0 && is_numeric($i) == 0)
	{
		$s[] = $i;
	}
}
sort($s);
$tab2 = array_merge($alp, $num, $s);
foreach ($tab2 as $c)
{
	echo "$c\n";
}
?>
