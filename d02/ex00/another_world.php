#!/usr/bin/php
<?PHP
if ($argc < 2)
	return ;
echo  preg_replace('/\s+/', ' ', trim($argv[1])) ."\n";
?>
