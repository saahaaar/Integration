 <?php
class Point {
	
	
public $x, $y;
function __construct($x, $y) { $this->x = $x; $this->y = $y; }
function toString() { return $this->x.",".$this->y; }
}
class P {
	
	
public $x, $y;
function __construct($x, $y) { $this->x = $x; $this->y = $y; }
function tString() { return $this->x.",".$this->y; }
}

class Pixel extends Point {
	const max = 12 ; 
public $color;
function __construct($x, $y, $color) {
parent::__construct($x,$y); $this->color = $color;
}
function toString() {
return parent::toString()."[".$this->color."]";
}
}

$p = new Pixel(12,14,"red");
$x1 = new P(1,2);
 echo $p->toString() ; 
echo $x1->tString();  
?>