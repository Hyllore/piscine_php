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

function error($tab)
{
if (preg_match("/(^lundi$|^mardi$|^mercredi$|^jeudi$|^vendredi$|^samedi$|^dimanche$)/i", $tab[0]) == 0)
{
	echo "Wrong Format\n";
	return (0);
}
	if (preg_match("/(^[1-9]$|^0[1-9]$|^[1-2][0-9]$|^3[0-1]$)/", $tab[1]) == 0)
{
	echo "Wrong Format\n";
	return (0);
}
	if (preg_match("/(^janvier$|^février$|^mars$|^avril$|^mai$|^juin$|^juillet$|^août$|^septembre$|^octobre$|^novembre$|^décembre$)/i", $tab[2]) == 0)
{
	echo "Wrong Format\n";
	return (0);
}
	if (preg_match("/(^19[7-9][0-9]$|^200[0-9]$|^201[0-6]$)/", $tab[3]) == 0)
{
	echo "Wrong Format\n";
	return (0);
}
if (preg_match("/^(0[0-9]|1[0-9]|2[0-3]):(0[0-9]|[1-5][0-9]):(0[0-9]|[1-5][0-9])$/", $tab[4]) == 0)
{
	echo "Wrong Format\n";
	return (0);
}
return (1);
}

function month($str)
{
	$array = array("Janvier" => 1,
					"Février" => 2,
					"Mars" => 3,
					"Avril" => 4,
					"Mai" => 5,
					"Juin" => 6,
					"Juillet" => 7,
					"Août" => 8,
					"Septembre" => 9,
					"Octobre" => 10,
					"Novembre" => 11,
					"Décembre" => 12,
					"janvier" => 1,
					"février" => 2,
					"mars" => 3,
					"avril" => 4,
					"mai" => 5,
					"juin" => 6,
					"juillet" => 7,
					"août" => 8,
					"septembre" => 9,
					"octobre" => 10,
					"novembre" => 11,
					"décembre" => 12);
	return $array[$str];
}

if ($argc != 2)
	return ;
$tab = ft_split($argv[1]);
if (error($tab) == 0)
	return ;
if ($tab[5])
{
	echo "Wrong Format\n";
	return (0);
}
$hour = split(":", $tab[4]);
date_default_timezone_set("Europe/Paris");
echo mktime($hour[0], $hour[1], $hour[2], month($tab[2]), $tab[1], $tab[3]);
echo "\n";
?>
