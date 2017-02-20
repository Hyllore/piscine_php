<?PHP
class Jaime extends Lannister {
		public function with($t) {
			if (get_parent_class($t) === 'Lannister')
		{
			if (get_class($t) === "Cersei")
			{
				return ("With pleasure, but only in a tower in Winterfell, then.");
			}
			return ("Not even if I'm drunk !");
		}
			else
				return ("Let's do this.");
		}
}
?>
