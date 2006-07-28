<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>Google Maps</title>
    <script src="http://maps.google.com/maps?file=api&amp;v=2.55&amp;key=ABQIAAAAv23NlAoUGNYvTIkdpyN3mBQtnaVK_pgiuNxlaTQC0PZZr4BNaBQyTGDqxa042rxmRhs6ctwN5rr8iQ" type="text/javascript"></script>
  </head>
  <body onunload="GUnload()">

    <div id="map" style="width: 800px; height: 600px"></div><p>
  
    <form onsubmit="showAddress(); return false">
      <input id="search" size="60" type="text" value="">
      <input type="submit" value="Go!">
    </form>
    
    <div id="message"></div>

    <script type="text/javascript">
    //<![CDATA[
    
    if (GBrowserIsCompatible()) { 

      var map = new GMap(document.getElementById("map"));
      map.addControl(new GLargeMapControl());
      map.addControl(new GMapTypeControl());
      map.setCenter(new GLatLng(20,0),2);
      
      // ====== Create a Client Geocoder ======
      var geo = new GClientGeocoder(); 

      // ====== Array for decoding the failure codes ======
      var reasons=[];
      reasons[G_GEO_SUCCESS]            = "Success";
      reasons[G_GEO_MISSING_ADDRESS]    = "Missing Address: The address was either missing or had no value.";
      reasons[G_GEO_UNKNOWN_ADDRESS]    = "Unknown Address:  No corresponding geographic location could be found for the specified address.";
      reasons[G_GEO_UNAVAILABLE_ADDRESS]= "Unavailable Address:  The geocode for the given address cannot be returned due to legal or contractual reasons.";
      reasons[G_GEO_BAD_KEY]            = "Bad Key: The API key is either invalid or does not match the domain for which it was given";
      reasons[G_GEO_TOO_MANY_QUERIES]   = "Too Many Queries: The daily geocoding quota for this site has been exceeded.";
      reasons[G_GEO_SERVER_ERROR]       = "Server error: The geocoding request could not be successfully processed.";
      
      // ====== Geocoding ======
      function showAddress() {
        var search = document.getElementById("search").value;
        // ====== Perform the Geocoding ======        
        geo.getLocations(search, function (result)
          { 
            // If that was successful
            if (result.Status.code == G_GEO_SUCCESS) {
              // How many resuts were found
              document.getElementById("message").innerHTML = "Found " +result.Placemark.length +" results";
              // Loop through the results, placing markers
              for (var i=0; i<result.Placemark.length; i++) {
                var p = result.Placemark[i].Point.coordinates;
                document.getElementById("message").innerHTML += "<br>"+(i+1)+": "+ result.Placemark[i].address;
                var marker = new GMarker(new GLatLng(p[1],p[0]));
                map.addOverlay(marker);
              }
              // centre the map on the first result
              var p = result.Placemark[0].Point.coordinates;
              map.setCenter(new GLatLng(p[1],p[0]),14);
            }
            // ====== Decode the error status ======
            else {
              var reason="Code "+result.Status.code;
              if (reasons[result.Status.code]) {
                reason = reasons[result.Status.code]
              } 
              alert('Could not find "'+search+ '" ' + reason);
            }
          }
        );
      }
    }
    
    // display a warning if the browser was not compatible
    else {
      alert("Sorry, the Google Maps API is not compatible with this browser");
    }

    // This Javascript is based on code provided by the
    // Blackpool Community Church Javascript Team
    // http://www.commchurch.freeserve.co.uk/   
    // http://www.econym.demon.co.uk/googlemaps/

    //]]>
    </script>
  </body>

</html>




