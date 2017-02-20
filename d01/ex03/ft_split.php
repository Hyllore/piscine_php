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
	sort($tab);
	return ($tab);
}
?>
