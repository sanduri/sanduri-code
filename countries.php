<html>

<body>
<?php
$string = file_get_contents("http://api.geonames.org/countryInfo?lang=es&username=demo&type=JSON");
$json_a = json_decode(utf8_decode($string), true);
print "<table>";
print "<tr>";
print "<td>Name</td>";
print "<td>Code</td>";
print "<td>Currency</td>";
print "<td>Capital</td>";
print "<td>Area (Km2)</td>";
print "<td>Population</td>";
print "</tr>";
foreach ($json_a['geonames'] as $country) {
	print "<tr>";
	print "<td>".$country["countryName"]."</td>";
	print "<td>".$country["countryCode"]."</td>";
	print "<td>".$country["currencyCode"]."</td>";
	print "<td>".$country["capital"]."</td>";
	print "<td>".$country["areaInSqKm"]."</td>";
	print "<td>".$country["population"]."</td>";
	print "</tr>";
}
print "</table>";
?>
</body>


</html>
