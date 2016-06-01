<html>

<body>
<?php
$string = file_get_contents("http://api.fixer.io/latest");
$json_a = json_decode(utf8_decode($string), true);
print "<table>";
print "<tr>";
print "<td>Code</td>";
print "<td>Rate</td>";
print "</tr>";
foreach ($json_a['rates'] as $code => $rate) {
	print "<tr>";
	print "<td>".$code."</td>";
	print "<td>".$rate."</td>";
	print "</tr>";
}
print "</table>";
?>
</body>


</html>
