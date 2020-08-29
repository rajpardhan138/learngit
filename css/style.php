<?php
class introduction
{
	public $a,$b,$c;
	function getdata($a,$b)
	{
		/*$this->c = $this->a + $this->b;
		echo $this->c;*/
		$c = $a + $b;
		echo $c;
	}
}

$obj1 = new introduction();

$obj1->getdata(10,20);


?>