<?php
$key = rand();
$val = $_POST["key"];
echo You typed: "$val";
if ($key == $val)
{
    echo YAY!;
}
else
{
    echo NO!;
}
?>