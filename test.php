<?php
class Shoe{
	public $kind;
	public $color;
	public $size;
	
	function __construct($kind, $color, $size)
	{
		$this->kind = $kind;
		$this->color = $color;
		$this->size = $size;
	}
	function hello() {
		return "Hey I am a shoe. I am a pair of " . $this->kind . ". My color is " . $this->color . " and I am a size " . $this->size;
	}
}
$Js = new Shoe("J's", "Blue", "10");
echo $Js->hello();
echo $color = "<br> Blue";

?>