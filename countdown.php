<html>
<head>
<script type="text/javascript">
function getTimeRemaining(et){
  var d = new Date();
  var t = et - d.getTime()
  if (t>0) {
	  var seconds = Math.floor( (t/1000) % 60 );
	  var minutes = Math.floor( (t/1000/60) % 60 );
	  var hours = Math.floor( (t/(1000*60*60)) % 24 );
	  var days = Math.floor( t/(1000*60*60*24) );
  }
  else {
	  var seconds = 0
	  var minutes = 0
	  var hours = 0
	  var days = 0
  }
  return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function updateClock(id) {
	var endtime=document.getElementById("e"+id).innerHTML	
	ret=getTimeRemaining(endtime)
	document.getElementById("t"+id).innerHTML = ret.days + 'd ' + (ret.hours<10?'0':'') + ret.hours + 'h ' + (ret.minutes<10?'0':'') + ret.minutes + 'm ' + (ret.seconds<10?'0':'') + ret.seconds + 's';

}

function updateClocks() {
	var c=document.getElementById("count").innerHTML	
	for (i=1;i<=c;i++) {
		updateClock(i)
	}
}

var timeinterval = setInterval(updateClocks, 500);

</script>
</head>

<body>
<?php 
$fi=fopen ("/var/tmp/countdowns.txt","r");
if ($fi) {
	$i=0;
	while ($line=fgets($fi)) {
		$i++;
		list($event, $t) = split(":", $line);
		print "<div id=c$i>";
		print $event;
		print "<div id=t$i> </div>";
		print "<div id=e$i style=\"visibility:hidden\"> $t </div>";
		print "</div><br>";
	}
	fclose ($fi);
}
?>
<div id=count style="visibility:hidden"><?php print $i; ?></div>
</body>
</html>
