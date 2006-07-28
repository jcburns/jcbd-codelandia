<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Some of those Mixteca sites</title>
    <link rel="stylesheet" href="gmaps_usjcb.css" type="text/css" />
<!--gcinco api-->   
<script src="http://maps.google.com/maps?file=api&v=2&key=ABQIAAAAv23NlAoUGNYvTIkdpyN3mBQtnaVK_pgiuNxlaTQC0PZZr4BNaBQyTGDqxa042rxmRhs6ctwN5rr8iQ" type="text/javascript"></script>
</head>

<body>
<p><h1>Some of those Mixteca sites</h1></p>
<div id="map" style="width: 800px; height: 700px"></div>
<div id="message"></div>
<hr />
<div id="waypoints"></div>
<hr />
<div id="output"></div>
<script type="text/javascript">
//<![CDATA[

var gmarkers = new Array;
var ghtmls = new Array;
var linewidth = 4;

var map = new GMap2(document.getElementById("map"));
map.setCenter(new GLatLng(0,0),0);

var html_also = "GPS points available <br />";
var waypointz = document.getElementById("waypoints");
var output = document.getElementById("output");
waypointz.innerHTML = html_also;

var icon = new GIcon();
icon.image = "http://gcinco.local/~jcburns/mapicons/e14d35a.png";
icon.shadow = "http://gcinco.local/~jcburns/mapicons/ortoshadow.png";
icon.iconSize = new GSize(60, 24);
icon.shadowSize = new GSize(80, 24);
icon.iconAnchor = new GPoint(-10, -10);
icon.infoWindowAnchor = new GPoint(5, 1);


var e14d35a = new GPolyline([new GLatLng(17.500930,-97.666802),
                              new GLatLng(17.374086,-97.666802),
                              new GLatLng(17.374086,-97.555278),
                              new GLatLng(17.500930,-97.555278),
                              new GLatLng(17.500930,-97.666802)],
                              "#ff0000", linewidth);
var e14d35b = new GPolyline([new GLatLng(17.501354,-97.555698),
                              new GLatLng(17.374021,-97.555698),
                              new GLatLng(17.374021,-97.444258),
                              new GLatLng(17.501354,-97.444258),
                              new GLatLng(17.501354,-97.555698)],
                              "#003366", linewidth);
var e14d35c = new GPolyline([new GLatLng(17.501373,-97.444581),
                              new GLatLng(17.373983,-97.444581),
                              new GLatLng(17.373983,-97.333225),
                              new GLatLng(17.501373,-97.333225),
                              new GLatLng(17.501373,-97.444581)],
                              "#009933", linewidth); 
var e14d35d = new GPolyline([new GLatLng(17.375928,-97.666807),
                              new GLatLng(17.249088,-97.666807),
                              new GLatLng(17.249088,-97.555351),
                              new GLatLng(17.375928,-97.555351)],
                              "#990099", linewidth);
var e14d35e = new GPolyline([new GLatLng(17.376375,-97.555693),
                              new GLatLng(17.249046,-97.555693),
                              new GLatLng(17.249046,-97.444322),
                              new GLatLng(17.376375,-97.444322)],
							   "#ff0000", linewidth);
var e14d35f = new GPolyline([new GLatLng(17.376355,-97.444596),
                              new GLatLng(17.248966,-97.444596),
                              new GLatLng(17.248966,-97.332837),
                              new GLatLng(17.376355,-97.332837),
                              new GLatLng(17.376355,-97.444596)],
							"#660000", linewidth);
var e14d36a = new GPolyline([new GLatLng(17.501786,-97.333965),
                              new GLatLng(17.373407,-97.333965),
                              new GLatLng(17.373407,-97.221270),
                              new GLatLng(17.501786,-97.221270),
                              new GLatLng(17.501786,-97.333965)],
							"#3399FF", linewidth);
var e14d36d = new GPolyline([new GLatLng(17.376818,-97.333971),
                              new GLatLng(17.248444,-97.333971),
                              new GLatLng(17.248444,-97.221343),
                              new GLatLng(17.376818,-97.221343),
                              new GLatLng(17.376818,-97.333971)],
                            "#003366", linewidth);
var e14d34c = new GPolyline([new GLatLng(17.500952,-97.778388),
                              new GLatLng(17.373729,-97.778388),
                              new GLatLng(17.373729,-97.666315),
                              new GLatLng(17.500952,-97.666315),
                              new GLatLng(17.500952,-97.778388)],
                              "#009933", linewidth); 
var e14d34f = new GPolyline([new GLatLng(17.375964,-97.778373),
                              new GLatLng(17.248744,-97.778373),
                              new GLatLng(17.248744,-97.666369),
                              new GLatLng(17.375964,-97.666369),
                              new GLatLng(17.375964,-97.778373)],
							   "#ff0000", linewidth);
var e14d25d = new GPolyline([new GLatLng(17.625866,-97.666755),
                              new GLatLng(17.499129,-97.666755),
                              new GLatLng(17.499129,-97.555461),
                              new GLatLng(17.625866,-97.555461),
                              new GLatLng(17.625866,-97.666755)],
							"#660000", linewidth);
var e14d25e = new GPolyline([new GLatLng(17.625933,-97.555642),
                              new GLatLng(17.499067,-97.555642),
                              new GLatLng(17.499067,-97.444356),
                              new GLatLng(17.625933,-97.444356),
                              new GLatLng(17.625933,-97.555642)],
							"#3399FF", linewidth);
var e14d25f = new GPolyline([new GLatLng(17.625992,-97.444534),
                              new GLatLng(17.499015,-97.444534),
                              new GLatLng(17.499015,-97.333256),
                              new GLatLng(17.625992,-97.333256),
                              new GLatLng(17.625992,-97.444534)],
							"#660000", linewidth);
var e14d45f = new GPolyline([new GLatLng(17.126514,-97.444903),
                              new GLatLng(16.998679,-97.444903),
                              new GLatLng(16.998679,-97.332794),
                              new GLatLng(17.126514,-97.332794),
                              new GLatLng(17.126514,-97.444903)],
							   "#ff0000", linewidth);
var e14d45a = new GPolyline([new GLatLng(17.251523,-97.667130),
                              new GLatLng(17.123796,-97.667130),
                              new GLatLng(17.123796,-97.554790),
                              new GLatLng(17.251523,-97.554790),
                              new GLatLng(17.251523,-97.667130)],
							"#660000", linewidth);
var e14d45b = new GPolyline([new GLatLng(17.251515,-97.556019),
                              new GLatLng(17.123731,-97.556019),
                              new GLatLng(17.123731,-97.443761),
                              new GLatLng(17.251515,-97.443761),
                              new GLatLng(17.251515,-97.556019)],
                              "#990099", linewidth);
var e14d45c = new GPolyline([new GLatLng(17.251509,-97.444903),
                              new GLatLng(17.123669,-97.444903),
                              new GLatLng(17.123669,-97.332727),
                              new GLatLng(17.251509,-97.332727),
                              new GLatLng(17.251509,-97.444903)],
							"#660000", linewidth);
var e14d44c = new GPolyline([new GLatLng(17.251426,-97.778349),
                              new GLatLng(17.123755,-97.778349),
                              new GLatLng(17.123755,-97.665929),
                              new GLatLng(17.251426,-97.665929),
                              new GLatLng(17.251426,-97.778349)],
							   "#ff0000", linewidth);

GEvent.addListener(map, "moveend", function() {
  document.getElementById("message").innerHTML = map.getCenter();
});

function opener(i)
{
	gmarkers[i].openInfoWindowHtml(ghtmls[i]);
	window.scroll(0,0);
	return false;
}

function createOrtofotoMarker(point, named) { 
  var letter = named; 
  var Oicon = new GIcon(icon); 
  Oicon.image = "http://gcinco.local/~jcburns/mapicons/" + named + ".png"; 
  var Omarker = new GMarker(point, Oicon); 
  map.addOverlay(Omarker);
return Omarker;
};

function createMarker(point, number)
{
var marker = new GMarker(point);
// Show this markers index in the info window when it is clicked
var html = number;
GEvent.addListener(marker, "click", function() {marker.openInfoWindowHtml(html);});

return marker;
};

<?php
$i=0;
$link = mysql_connect("127.0.0.1", "")
or die("Could not connect: " . mysql_error());
mysql_selectdb("test",$link) or die ("Can\'t use database test : " . mysql_error());

$result = mysql_query("SELECT * FROM googlesites",$link);
if (!$result)
{
echo "no results ";
}
while($row = mysql_fetch_array($result))
{
echo "var point = new GLatLng(" . $row['lat'] . "," . $row['lon'] . ");\n";
echo "var thehtml = '<div class=\"bubble\"><strong>" . htmlentities($row['waypoint']) . "<\/strong><br\/>" . $row['description'] . "<p class=\"tiny\">UTM E: " . number_format($row['utm_e'],3,'.','') . "<br/>UTM N: " . number_format($row['utm_n'],3,'.','') . "<br/>Area: " . number_format($row['area'],3) . "<\/p><\/div>';\n";
echo "var marker = createMarker(point, thehtml);\n";
echo "map.addOverlay(marker);\n";
echo "gmarkers.push(marker);\n";
echo "ghtmls.push(thehtml);\n";
echo "html_also = \"<a href='#' onclick='opener($i);'><strong>" . $row['waypoint'] . "<\/strong> " . $row['desc'] . "<\/a><br>\";\n";
echo "waypointz.innerHTML += html_also;\n";
echo "\n";
$i++;
}



mysql_close($link);
?>

  var bounds = new GLatLngBounds;
  for (var i=0; i<gmarkers.length; i++) 
  {
    bounds.extend(gmarkers[i].getPoint());
  }

  var clat = (bounds.getNorthEast().lat() + bounds.getSouthWest().lat()) /2;
  var clng = (bounds.getNorthEast().lng() + bounds.getSouthWest().lng()) /2;
    map.setCenter(new GLatLng(clat,clng),map.getBoundsZoomLevel(bounds),G_SATELLITE_MAP); 
	map.addControl(new GLargeMapControl());
	map.addControl(new GMapTypeControl());
	map.addControl(new GScaleControl());
	
	
map.addOverlay(e14d35a);
map.addOverlay(e14d35b);
map.addOverlay(e14d35c);
map.addOverlay(e14d35d);
map.addOverlay(e14d35e);
map.addOverlay(e14d35f);
map.addOverlay(e14d36a);
map.addOverlay(e14d36d);
map.addOverlay(e14d34c);
map.addOverlay(e14d34f);
map.addOverlay(e14d25d);
map.addOverlay(e14d25e);
map.addOverlay(e14d25f);
map.addOverlay(e14d45f);
map.addOverlay(e14d45a);
map.addOverlay(e14d45b);
map.addOverlay(e14d45c);
map.addOverlay(e14d44c);

createOrtofotoMarker(new GLatLng(17.500930,-97.666802),"e14d35a");
createOrtofotoMarker(new GLatLng(17.501354,-97.555698),"e14d35b");
createOrtofotoMarker(new GLatLng(17.501373,-97.444581),"e14d35c");
createOrtofotoMarker(new GLatLng(17.375928,-97.666807),"e14d35d");
createOrtofotoMarker(new GLatLng(17.376375,-97.555693),"e14d35e");
createOrtofotoMarker(new GLatLng(17.376355,-97.444596),"e14d35f");
createOrtofotoMarker(new GLatLng(17.501786,-97.333965),"e14d36a");
createOrtofotoMarker(new GLatLng(17.376818,-97.333971),"e14d36d");
createOrtofotoMarker(new GLatLng(17.500952,-97.778388),"e14d34c");
createOrtofotoMarker(new GLatLng(17.375964,-97.778373),"e14d34f");
createOrtofotoMarker(new GLatLng(17.625866,-97.666755),"e14d25d");
createOrtofotoMarker(new GLatLng(17.625933,-97.555642),"e14d25e");
createOrtofotoMarker(new GLatLng(17.625992,-97.444534),"e14d25f");
createOrtofotoMarker(new GLatLng(17.126514,-97.444903),"e14d45f");
createOrtofotoMarker(new GLatLng(17.251523,-97.667130),"e14d45a");
createOrtofotoMarker(new GLatLng(17.251515,-97.556019),"e14d45b");
createOrtofotoMarker(new GLatLng(17.251509,-97.444903),"e14d45c");
createOrtofotoMarker(new GLatLng(17.251426,-97.778349),"e14d44c");
	
	//GLog.write('center is' + map.getCenter());
//]]>
</script>

</body>
</html>