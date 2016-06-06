<html>
<body>

<?php
function isJson($string) {
	json_decode($string);
	return (json_last_error() == JSON_ERROR_NONE);
}
$text=$_POST['t'];
if ($text != "") {
	if (isJson($text)) {
		print "<br>Text is valid JSON<br><br>";
	}
	else {
		print "<br>Text is not valid JSON<br><br>";
	}
}
?>
<form method=post action=json.php>
<textarea name=t cols=80 rows=30>
<?php print $text; ?>
</textarea>
<br>
<input type=submit value=Validate>
<br>
</form>
</body>
</html>
