<?PHP
class Tyrion extends Lannister{
	public function with ($t) {
		if (get_parent_class($t) === 'Lannister')
		{
			return ("Not even if I'm drunk !");
		}
		else
			return ("Let's do this.");
	}
}
?>
