<?php

require 'y.php';

$foo = new Foo(1);
$foo->do_stuff(3); // 1 + 3
$foo->do_stuff(2); // 1 + 2
$foo->increment_b(); // increments the 1 to a 2 now the internal state of $foo has changed
$foo->do_stuff(2); // now this is 2 + 2

$other_foo = new Foo(7); // another object with b = 7
$other_foo->do_stuff(3); // 7 + 3
$other_foo->do_stuff(2); // 7 + 2

// these don't use classes or objects just passing in what is required
bar(6, 7); // 6 + 7
bar(6, 8); // 6 + 8
bar(2, 3); // ...
bar(2, 2);

?>
