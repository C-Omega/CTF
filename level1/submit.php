RESPONSE:

<?php
ini_set('display_errors', 1);
$key = rand();
$val = $_POST["key"];
echo "You typed: $val";
if ($key == $val)
{
    echo YAY!;
}
else
{
    echo NO!;
}
?>