<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
Secret key: <input id="key"/> <button id="sub">Submit</button>
<script>
var key = <?php echo rand(); ?>;
$(document).ready(function()
{
		$("#sub").click(function()
		{
			if ($("#key").val() == key)
			{
				alert("Correct!");
			}
			else
			{
				alert("Wrong!");
			}
		});
	});
</script>