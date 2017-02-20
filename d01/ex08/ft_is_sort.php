<?PHP
function ft_is_sort($tab)
{
	$tab2 = $tab;
	sort($tab2);
	$i = 0;
	foreach($tab2 as $key => $value)
	{
		if ($value != $tab[$i])
			return (0);
		$i++;
	}
	return (1);
}
?>
