RESPONSE:

<?php
ini_set('display_errors', 1);
$key = rand();
$val = $_POST["key"];
echo "You typed: $val<br>";
echo "This is the " . (($key === $val) ? "right" : "wong") . " password"
?>