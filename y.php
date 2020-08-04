<?php

class Foo {
	function __construct($b) {
		$this->b = $b;
	}
	function increment_b() {
		$this->b++;
	}

	function do_stuff($a) {
		echo $a + $this->b, "\n";
	}
}

function bar($a, $b) {
	echo $a+$b, "\n";
}

?>
