Secret key! <input id="key">
<?php
$key = rand();
echo '<script>$(document).ready(function(){$("#sub").click(function(){if ($("#key") == ' . $key . '){alert("Correct");} else {alert("Wrong"); });});';
?>
