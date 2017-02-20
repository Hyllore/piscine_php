#!/usr/bin/php
<?PHP

while (1)
{
	print("Entrez un nombre: ");
	if ($i = fgets(STDIN))
	{
		$i = rtrim($i);
		if (is_numeric($i) == FALSE)
			echo "'".$i."' n'est pas un chiffre\n";
		else if ($i > 9223372036854775807 || $i < -9223372036854775808)
		{
			echo "Error: le nombre est trop grand.\n";
		}
		else if ($i % 2 == 0)
		{
			echo "Le chiffre ".$i." est Pair\n";
		}
		else
		{
			echo "Le chiffre ".$i." est Impair\n";
		}
	}
	else
	{
		echo "\n";
		return ;
	}
}
?>
