#!/usr/bin/php
<?PHP
if ($argc != 2)
	return ;
$fd = fopen($argv[1] , "r");
$size = filesize($argv[1]);
$str = fread($fd, $size);
echo $str;
preg_match_all("/(<([\w]+)[^>]*>)(.*?)(<\/\\2>)/", $str, $matches, PREG_SET_ORDER);
print_r($matches);
?>
