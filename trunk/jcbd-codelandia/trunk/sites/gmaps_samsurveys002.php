<?php 
/* updated to google maps v2  3 may 2006 jcburns */

$db=$_POST['database'];
$colorz=array("#ffffff","#ffff99","#fcf305","#ffcc00","#ff6600","#dd0806","#900000","#000000");
$cri=$_POST['criterion'];
$theperiod=$_POST['period'];
if ($theperiod=="") {$theperiod=0;}
if ($cri=="") {$cri="1) ALL setts";}
if ($db=="") {$db="ccaindex";}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>CAS surveys: <?php echo $db;?></title>
<link rel="stylesheet" href="gmaps_samsurveys.css" type="text/css" />

<style>.c0{background-color: <?php echo $colorz[0];?>;} .c1{background-color: <?php echo $colorz[1];?>;}.c2{background-color: <?php echo $colorz[2];?>;}.c3{background-color: <?php echo $colorz[3];?>;}.c4{background-color: <?php echo $colorz[4];?>;}.c5{background-color: <?php echo $colorz[5];?>;}.c6{background-color: <?php echo $colorz[6];?>;}.c7{background-color: <?php echo $colorz[7];?>;} .c0, .c1, .c2, .c3,.c0 A:link, .c1 A:link, .c2 A:link, .c3 A:link{color: #444E71;}</style>

<!--gcinco api-->   
<script src="http://maps.google.com/maps?file=api&v=2&key=ABQIAAAAv23NlAoUGNYvTIkdpyN3mBQtnaVK_pgiuNxlaTQC0PZZr4BNaBQyTGDqxa042rxmRhs6ctwN5rr8iQ" type="text/javascript"></script>
<script type="text/javascript" src="pdmarker.js"></script>
</head>

<body>
<div id="toptext"><h1>CAS Surveys on the map: <?php echo $db;?></h1><br />Click on top row of table to select period.</div>
<div id="map" style="width: 800px; height: 850px"></div>
<div id="message"></div>
<div id="side">
<form method="POST"  action="<?php echo $_SERVER['PHP_SELF']; ?>">
<select name="database" onchange="this.form.submit();">
	<option <?php if($db=="ccaindex") echo "selected "; ?>value="ccaindex">ccaindex</option>
	<option <?php if($db=="population_density") echo "selected "; ?>value="population_density">population_density</option>
	<option <?php if($db=="settlement_density") echo "selected "; ?>value="settlement_density">settlement_density</option>
	<option <?php if($db=="mound_count") echo "selected "; ?>value="mound_count">mound_count</option>
	<option <?php if($db=="ballcourt_count") echo "selected "; ?>value="ballcourt_count">ballcourt_count</option>
	<option <?php if($db=="avg_sett_area") echo "selected "; ?>value="avg_sett_area">avg_sett_area</option>
	<option <?php if($db=="percent_pop_setts1000") echo "selected "; ?>value="percent_pop_setts1000">percent_pop_setts1000</option>
	<option <?php if($db=="percent_pop_top10pct") echo "selected "; ?>value="percent_pop_top10pct">percent_pop_top10pct</option>
	<option <?php if($db=="avg_pop_per_sett") echo "selected "; ?>value="avg_pop_per_sett">avg_pop_per_sett</option>
</select>
<input type="hidden" name="criterion" value="<?php echo $cri;?>">
<input type="hidden" name="period" value="<?php echo $theperiod;?>">
</form>
<form method="POST"  action="<?php echo $_SERVER['PHP_SELF']; ?>">
<select name="criterion" onchange="this.form.submit();">
	<option <?php if($cri=="1) ALL setts") echo "selected "; ?>value="1) ALL setts">ALL setts</option>
	<option <?php if($cri=="2) 1-2 hhld setts") echo "selected "; ?>value="2) 1-2 hhld setts">1-2 hhld setts</option>
	<option <?php if($cri=="3) TINY pop≤50 setts") echo "selected "; ?>value="3) TINY pop≤50 setts">TINY pop≤50 setts</option>
	<option <?php if($cri=="4) SMALL 51-500") echo "selected "; ?>value="4) SMALL 51-500">SMALL 51-500</option>
	<option <?php if($cri=="5) MEDIUM 501-999") echo "selected "; ?>value="5) MEDIUM 501-999">MEDIUM 501-999</option>
	<option <?php if($cri=="6) LARGE 1000-2499") echo "selected "; ?>value="6) LARGE 1000-2499">LARGE 1000-2499</option>
	<option <?php if($cri=="7) URBAN 2500+") echo "selected "; ?>value="7) URBAN 2500+">URBAN 2500+</option>
	<option <?php if($cri=="8) MOUND sites") echo "selected "; ?>value="8) MOUND sites">MOUND sites</option>
	<option <?php if($cri=="9) BALLCOURT sites") echo "selected "; ?>value="9) BALLCOURT sites">BALLCOURT sites</option>
</select>
<input type="hidden" name="database" value="<?php echo $db;?>">
<input type="hidden" name="period" value="<?php echo $theperiod;?>">
</form>
<form>
<a href="javascript:chperiod(0)"><input type="radio" name="theperiod" value="0"<?php if($theperiod==0) echo " checked"; ?>>E E F</a><br />
<a href="javascript:chperiod(1)"><input type="radio" name="theperiod" value="1"<?php if($theperiod==1) echo " checked"; ?>>L E F</a><br />
<a href="javascript:chperiod(2)"><input type="radio" name="theperiod" value="2"<?php if($theperiod==2) echo " checked"; ?>>E M F</a><br />
<a href="javascript:chperiod(3)"><input type="radio" name="theperiod" value="3"<?php if($theperiod==3) echo " checked"; ?>>L M F</a><br />
<a href="javascript:chperiod(4)"><input type="radio" name="theperiod" value="4"<?php if($theperiod==4) echo " checked"; ?>>E L F</a><br />
<a href="javascript:chperiod(5)"><input type="radio" name="theperiod" value="5"<?php if($theperiod==5) echo " checked"; ?>>L L F</a><br />
<a href="javascript:chperiod(6)"><input type="radio" name="theperiod" value="6"<?php if($theperiod==6) echo " checked"; ?>>T F</a><br />
<a href="javascript:chperiod(7)"><input type="radio" name="theperiod" value="7"<?php if($theperiod==7) echo " checked"; ?>>E Cla</a><br />
<a href="javascript:chperiod(8)"><input type="radio" name="theperiod" value="8"<?php if($theperiod==8) echo " checked"; ?>>L Cla</a><br />
<a href="javascript:chperiod(9)"><input type="radio" name="theperiod" value="9"<?php if($theperiod==9) echo " checked"; ?>>Epicl</a><br />
<a href="javascript:chperiod(10)"><input type="radio" name="theperiod" value="10"<?php if($theperiod==10) echo " checked"; ?>>E Post</a><br />
<a href="javascript:chperiod(11)"><input type="radio" name="theperiod" value="11"<?php if($theperiod==11) echo " checked"; ?>>L Post</a><br />
</form>
<hr />
<form>
Regional demographics:<br />
<?php 
$link = mysql_connect("127.0.0.1", "")
or die("Could not connect: " . mysql_error());
mysql_selectdb("sammy_research",$link) or die ("Can\'t use database : " . mysql_error());
$result = mysql_query("select distinct `regional_demographics` from agg_surv order by regional_demographics",$link);
while($row = mysql_fetch_array($result))
{
print "<input type=\"checkbox\" value=\"".$row['regional_demographics']."\" name=\"regDem[]\">".$row['regional_demographics']."<br />\n";
}
?>
</form>
<hr />
<a href="javascript:resetMap()">Reset map</a>

<script type="text/javascript">
//<![CDATA[

var map = new GMap2(document.getElementById("map"));
var waypointz = document.getElementById("tablebelow");
var output = document.getElementById("output");

var gmarkers = [];
var htmls = [];
var circles = [];
var tooltips = [];
var arraynames = ["Early Early Formative","Late Early Formative","Early Middle Formative","Late Middle Formative","Early Late Formative","Late Late Formative","Terminal Formative","Early Classic","Late Classic","Epiclassic","Early Postclassic","Late Postclassic"];
for (var z = 0; z < 12; z++){
circles[z] = new Array;
tooltips[z] = new Array;
}
var i = 0;
 
function resetMap() {
map.setCenter(new GLatLng(18.041421,-98.036499), 8);
} 
 
map.addControl(new GLargeMapControl());
map.addControl(new GMapTypeControl());
map.addControl(new GScaleControl());
resetMap();
map.setMapType(G_SATELLITE_TYPE);


function myclick(i) {
	window.scroll(0,56);
	gmarkers[i].openInfoWindowHtml(htmls[i]);
}



function chperiod(x) {
	map.clearOverlays();
	for (var i = 0; i < gmarkers.length; i++){
		gmarkers[i].setTooltip(tooltips[x][i]);
		map.addOverlay(gmarkers[i]);
	}
	for (var i = 0; i < circles[x].length; i++){
		map.addOverlay(circles[x][i]);
	}
	document.forms[2].theperiod[x].checked = true;
	document.forms[0].period.value = x;
	document.forms[1].period.value = x;
	document.getElementById("message").innerHTML = "<?php echo $db." ";?>"+arraynames[x]+"<?php echo " ".$cri;?>";
	document.getElementById("toptext").innerHTML = "<h1>CAS Surveys on the map: <?php echo $db." ".$cri;?></h1><br/>" + arraynames[x] + " ";
	window.scroll(0,56);
}

function drawCircle(lat,lng) { 
   var Clng = Clat/Math.cos(lat*d2r); 
   var Cpoints = []; 
   for (var i=0; i < 33; i++) { 
      var theta = Math.PI * (i/16); 
      Cx = lng + (Clng * Math.cos(theta)); 
      Cy = lat + (Clat * Math.sin(theta)); 
      Cpoints.push(new GPoint(Cx,Cy)); 
   }; 
   map.addOverlay(new GPolyline(Cpoints,Ccolor,Cwidth,Copacity)); 
} 

function makeCircle(lat,lng,ringcolor) { 
   var Clng = Clat/Math.cos(lat*d2r); 
   var Cpoints = []; 
   for (var i=0; i < 33; i++) { 
      var theta = Math.PI * (i/16); 
      Cx = lng + (Clng * Math.cos(theta)); 
      Cy = lat + (Clat * Math.sin(theta)); 
      Cpoints.push(new GPoint(Cx,Cy)); 
   }; 
   if (ringcolor == '<?php echo $colorz[0];?>'){Copacity = 0.2}else{Copacity = 0.75};
   return (new GPolyline(Cpoints,ringcolor,Cwidth,Copacity)); 
} 

   var Cradius = 3;             // mile radius 
   var Cwidth = 8;             // width pixels 
   var d2r = Math.PI/180;   // degrees to radians 
   var r2d = 180/Math.PI;   // radians to degrees 
   var Clat = (Cradius/3963)*r2d;   //  using 3963 as earth's radius 

var icon = new GIcon();
icon.image = "http://gcinco.local/~jcburns/mapicons/invisidot.png";
icon.shadow = "http://gcinco.local/~jcburns/mapicons/invisidot.png";
icon.iconSize = new GSize(16, 16);
icon.shadowSize = new GSize(16, 16);
icon.iconAnchor = new GPoint(8, 8);
icon.infoWindowAnchor = new GPoint(8, 8);

function createMarker(point, thehtml)
{
var marker = new PdMarker(point,icon);
GEvent.addListener(marker, "click", function() {marker.openInfoWindowHtml(thehtml);});
gmarkers[i] = marker;
htmls[i] = thehtml;
i++;
return marker;
};


<?php


function indexcolor($y)
{
global $maxvalue;
$x = 0;
if ($y > 0 && $y <((1/6)*$maxvalue)) $x=1;
elseif ($y >= ((1/6)*$maxvalue) && $y <((2/6)*$maxvalue)) $x=2;
elseif ($y >= ((2/6)*$maxvalue) && $y <((3/6)*$maxvalue)) $x=3;
elseif ($y >= ((3/6)*$maxvalue) && $y <((4/6)*$maxvalue)) $x=4;
elseif ($y >= ((4/6)*$maxvalue) && $y <((5/6)*$maxvalue)) $x=5;
elseif ($y >= ((5/6)*$maxvalue)) $x=6;
return $x;
}

$periods = array("E E F","L E F","E M F","L M F","E  L F","L L F","T F","E Cla","L Cla","Epicl","E Post","L Post");
$link = mysql_connect("127.0.0.1", "")
or die("Could not connect: " . mysql_error());
mysql_selectdb("test",$link) or die ("Can\'t use database test : " . mysql_error());
$result = mysql_query("select max(greatest(`E E F`,`L E F`,`E M F`,`L M F`,`E  L F`,`L L F`,`T F`,`E Cla`,`L Cla`,`Epicl`,`E Post`,`L Post`)) as 'oh' from ".$db." WHERE description = \"".$cri."\"",$link);
$row = mysql_fetch_row($result);
$maxvalue = $row[0];
$result = mysql_query("select surveyindex.lat, surveyindex.lon, surveyindex.SurveyArea, ".$db.".* from surveyindex, ".$db." WHERE (".$db.".survey = surveyindex.survey) AND (".$db.".description = \"".$cri."\")",$link);
if (!$result)
{
echo "no results ";
}
while($row = mysql_fetch_array($result))
{
echo "var point = new GLatLng(" . $row['lat'] . "," . $row['lon'] . ");\n";
echo "var thehtml = '<div class=\"bubble\"><strong>" . ($row['survey']) . "<\/strong><br\/>";
echo $row['description'];
echo "<p class=\"tiny\">Survey area:" . $row['SurveyArea'];
//echo " <br/>Confidence:" . $row['Confidence'] . "<br/>Area rank: " . $row['AreaRank']
echo "';\n";
//echo "var Cradius = Math.sqrt(" .$row['SurveyArea']." / Math.PI);\n";
echo "var Clat = (Cradius/3963)*r2d;\n";

$x = 0;
foreach ($periods as $period){
$y = indexcolor($row[$period]);
$ccolor = $colorz[$y];
echo "var Ccolor = '".$ccolor."';\n";
echo "circles[".$x."].push(makeCircle(".$row['lat'].",".$row['lon'].",\"".$ccolor."\"));\n";
printf ("tooltips[%s].push('%s<br />%s: %.3f');\n",$x,$row['survey'],$period,$row[$period]);
echo "thehtml = thehtml + '<br\/>". $period . ": " . $row[$period] ."';\n";
$x++;
}
echo "thehtml = thehtml + '<\/p><\/div>';\n";
echo "var marker = createMarker(point, thehtml);\n";
echo "\n";
}

mysql_close($link);
?>
chperiod(<?php echo $theperiod;?>);


//]]>
</script>


<?php

print"<table class=\"basictable2\">";
printf ("<tr><td class=\"c1\">&nbsp;&nbsp;</td><td>0-%.2f</td></tr>",((1/6)*$maxvalue));
printf ("<tr><td class=\"c2\">&nbsp;&nbsp;</td><td>%.2f-%.2f</td></tr>",((1/6)*$maxvalue),((2/6)*$maxvalue));
printf ("<tr><td class=\"c3\">&nbsp;&nbsp;</td><td>%.2f-%.2f</td></tr>",((2/6)*$maxvalue),((3/6)*$maxvalue));
printf ("<tr><td class=\"c4\">&nbsp;&nbsp;</td><td>%.2f-%.2f</td></tr>",((3/6)*$maxvalue),((4/6)*$maxvalue));
printf ("<tr><td class=\"c5\">&nbsp;&nbsp;</td><td>%.2f-%.2f</td></tr>",((4/6)*$maxvalue),((5/6)*$maxvalue));
printf ("<tr><td class=\"c6\">&nbsp;&nbsp;</td><td>%.2f-%.2f</td></tr>",((5/6)*$maxvalue),($maxvalue/1));

?>
</table>
</div>

<div id="tablebelow"></div>

<?php

$link = mysql_connect("127.0.0.1", "")
or die("Could not connect: " . mysql_error());
mysql_selectdb("test",$link) or die ("Can\'t use database test : " . mysql_error());

$result = mysql_query("SELECT `survey`,`E E F`,`L E F`,`E M F`,`L M F`,`E  L F`,`L L F`,`T F`,`E Cla`,`L Cla`,`Epicl`,`E Post`,`L Post` from ".$db." WHERE (`description` = \"".$cri."\")",$link);
print "<table width=800 class=\"basictable\">\n";
print "<tr class=\"tableheader\"><td>survey</td><td><a href=\"javascript:chperiod(0)\">E E F</a></td><td><a href=\"javascript:chperiod(1)\">L E F</a></td><td><a href=\"javascript:chperiod(2)\">E M F</a></td><td><a href=\"javascript:chperiod(3)\">L M F</a></td><td><a href=\"javascript:chperiod(4)\">E  L F</a></td><td><a href=\"javascript:chperiod(5)\">L L F</a></td><td><a href=\"javascript:chperiod(6)\">T F</a></td><td><a href=\"javascript:chperiod(7)\">E Cla</td><td><a href=\"javascript:chperiod(8)\">L Cla</a></td><td><a href=\"javascript:chperiod(9)\">Epicl</a></td><td><a href=\"javascript:chperiod(10)\">E Post</a></td><td><a href=\"javascript:chperiod(11)\">L Post</a></td></tr>";
$j = 0;
while ($get_info = mysql_fetch_row($result)){ 
	print "<tr>\n";
	foreach ($get_info as $field)
	if (!is_numeric($field)){
		print "\t<td><a href=\"javascript:myclick(". $j .")\">$field</a></td>\n";
	}else{
		printf ("\t<td class=\"c".indexcolor($field) ."\"><a href=\"javascript:myclick(". $j .")\">%.2f</a></td>\n",$field);
	}
	$j++;
	print "</tr>\n";
}
print "</table>\n";
mysql_close($link);?>
</body>
</html>