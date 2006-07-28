<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>Google Maps geocoding browser</title>
	<link rel="stylesheet" href="gmaps_usjcb.css" type="text/css" />
    <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAAv23NlAoUGNYvTIkdpyN3mBQtnaVK_pgiuNxlaTQC0PZZr4BNaBQyTGDqxa042rxmRhs6ctwN5rr8iQ" 
            type="text/javascript"></script>
    <script type="text/javascript">
    //<![CDATA[

    var map;
    var geocoder;

    function load() {
      map = new GMap2(document.getElementById("map"));
      map.setCenter(new GLatLng(37, -87), 5);
      map.addControl(new GLargeMapControl());
      map.addControl(new GMapTypeControl());
      map.enableDoubleClickZoom();
	  map.enableContinuousZoom();

      geocoder = new GClientGeocoder();
    }

    // addAddressToMap() is called when the geocoder returns an
    // answer.  It adds a marker to the map with an open info window
    // showing the nicely formatted version of the address and the country code.
    function addAddressToMap(response) {
      map.clearOverlays();
      if (!response || response.Status.code != 200) {
        alert("Sorry, we were unable to geocode that address");
      } else {
        place = response.Placemark[0];
        point = new GLatLng(place.Point.coordinates[1],
                            place.Point.coordinates[0]);
        marker = new GMarker(point);
        map.addOverlay(marker);
        marker.openInfoWindowHtml('<p class="bubble">' + place.address + '</p><p class="ll"><b>Country code:</b> ' + place.AddressDetails.Country.CountryNameCode + '<br /><b>Location: </b>' + point + '</p>');
      }
    }

    // showLocation() is called when you click on the Search button
    // in the form.  It geocodes the address entered into the form
    // and adds a marker to the map at that location.
    
    function showLocation() {
      var address = document.forms[0].q.value;
      geocoder.getLocations(address, addAddressToMap);
    }

   // findLocation() is used to enter the sample addresses into the form.
    function findLocation(address) {
      document.forms[0].q.value = address;
      showLocation();
    }
    //]]>
    </script>
  </head>

  <body onload="load()">

    <!-- Creates a simple input box where you can enter an address
         and a Search button that submits the form. //-->
    <form action="#" onsubmit="showLocation(); return false;">
      <p>
        <b>Search for an address:</b>
        <input type="text" name="q" value="" class="address_input" size="40" />
        <input type="submit" name="find" value="Search" />
      </p>
    </form>
    <div id="map"></div>

   <p><b>Try these:</b><br />

	<?php
	$i=0; 
	$link = mysql_connect("127.0.0.1", "")
	or die("Could not connect: " . mysql_error());
	mysql_selectdb("test",$link) or die ("Can\'t use database test : " . mysql_error());

	$result = mysql_query("SELECT * FROM google_geocodes",$link);
	if (!$result)
	{
	echo "no results ";
	}
	while($row = mysql_fetch_array($result))
	{
		echo "<p><a href=\"javascript:void(0)\" onclick=\"findLocation('" . $row['find_location'] . "');return false;\">" . $row['label'] . "</a></p>\n";
 
	}
?>
  </p>
  </body>
</html>
