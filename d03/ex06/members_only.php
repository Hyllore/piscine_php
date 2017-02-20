<?PHP
$log = $_SERVER["PHP_AUTH_USER"];
$mdp = $_SERVER["PHP_AUTH_PW"];
if ($log == "zaz" && $mdp == "jaimelespetitsponeys")
{
	$val= file_get_contents("../img/42.png");
	echo "<html><body>\nBonjour Zaz<br />\n<img src='data:image/png;base64,";
	echo base64_encode($val);
	echo "'>\n</body></html>\n";
}
else
{
	header("HTTP/1.0 401 Unauthorized");
	header("WWW-Authenticate: Basic realm=''Espace membres''");
	echo "<html><body>Cette zone est accessible uniquement aux membres du site</body></html>\n";
}
?>
