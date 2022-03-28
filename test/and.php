<pre>
<?php
$true = true;
$false = false;

$a = $true && $true;
$b = $true && $false;
$c = $true && $true && $true;
$d = $true && $false && $false;
$e = $true && ($true && $false);
var_dump($a, $b, $c, $d, $e);

?>
