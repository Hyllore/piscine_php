<?PHP
if ($_POST["login"] !== false && $_POST["oldpw"] !== false && $_POST["newpw"] !== false)
{
	$tab = array();
	$check = 0;
	$tab = unserialize(file_get_contents("../private/passwd/mdp.txt"));
	$oldpsd = hash("whirlpool", $_POST["oldpw"]);
	$oldpsd = hash("sha512", $oldpsd."hyllore");
	foreach ($tab as $i=>$i2)
	{
		if ($i2["login"] == $_POST["login"])
			$check = 1;
	}
	if($check != 1)
		echo "ERROR\n";
	foreach ($tab as $key=>$value)
	{
		if ($value["login"] == $_POST["login"])
		{
			if ($value["passwd"] == $oldpsd)
			{
				$newpsd = hash("whirlpool", $_POST["newpw"]);
				$newpsd = hash("sha512", $newpsd."hyllore");
				$tab[$key]["passwd"] = $newpsd;
				file_put_contents("../private/passwd/mdp.txt", serialize($tab));
				echo "OK\n";
				return ;
			}
			else
				echo "ERROR\n";
		}
	}
}
else
	echo "ERROR\n";
?>
