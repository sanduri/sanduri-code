<html>
<body>

<?php
if ($_POST['t'] != "") {
	$url=$_POST['t'];
	$n=time().rand();
	exec ("/usr/local/bin/youtube-dl \"$url\" -x --audio-format=mp3 -o '/tmp/$n.%(ext)s'");
	print "<a href=download.php?file=/tmp/$n.mp3&type=mp3>Download</a><br><br>";
}
?>
<form method=post action=yt2mp3.php>
<input type=text name=t value="<?php print $url; ?>" size=50>
</input>
<br>
<br>
<input type=submit value=Convert>
<br>
</form>
</body>
</html>
