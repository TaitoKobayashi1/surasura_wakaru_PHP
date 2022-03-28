<pre>
<?php
$true = true;
$false = false;

$a = !$true;
$b = !$false;
$c = $true && !$true;
$d = !($true || $true);
var_dump($a, $b, $c, $d);


?>
