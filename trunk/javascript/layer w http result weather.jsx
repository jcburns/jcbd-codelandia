var emailCodeFile = new File("/Clamchop/AEHttpRequest Folder/httpRequest.jsx");emailCodeFile.open("r");	eval( emailCodeFile.read() );emailCodeFile.close();var firstComp = app.project.item(1);if (firstComp == null || !(firstComp instanceof CompItem)){    alert("Please establish a comp as the active item and run the script again");} else {app.beginUndoGroup("New data layer");var url = "http://www.rssweather.com/rss.php?&place=atlanta&state=ga&zipcode=30306&country=us&county=13089&zone=GAZ045&alt=rss20a";var debugMode = false;var postRequest = false;var theRequest = new HttpRequest(url, debugMode);var output = theRequest.send(postRequest);var temp = output.substring(output.indexOf("<span class=\"temp\">")+19);temp = temp.substring(0, temp.indexOf("&#176;F"));var humidity = output.substring(output.indexOf("<dd id=\"humidity\" style=\"display: inline;\">")+43);humidity = humidity.substring(0, humidity.indexOf("</dd>"));var windspeed = output.substring(output.indexOf("<dd id=\"windspeed\" style=\"display: inline;\">")+44);windspeed = windspeed.substring(0, windspeed.indexOf("</dd>"));var winddir = ""if (windspeed != "Calm"){winddir = output.substring(output.indexOf("<dd id=\"winddir\" style=\"display: inline;\">")+42);winddir = winddir.substring(0, winddir.indexOf("("));}var pressure = output.substring(output.indexOf("<dd id=\"pressure\" style=\"display: inline;\">")+44);pressure = pressure.substring(0, pressure.indexOf("</dd>"));var heatindex = output.substring(output.indexOf("<dd id=\"heatindex\" style=\"display: inline;\">")+44);heatindex = heatindex.substring(0, heatindex.indexOf("</dd>"));var windchill = output.substring(output.indexOf("<dd id=\"windchill\" style=\"display: inline;\">")+44);windchill = windchill.substring(0, windchill.indexOf("</dd>"));var visibility = output.substring(output.indexOf("<dd id=\"visibility\" style=\"display: inline;\">")+45);visibility = visibility.substring(0, visibility.indexOf("</dd>"));var pubdate = output.substring(output.indexOf("<pubDate>")+9);pubdate = pubdate.substring(0, pubdate.indexOf("</pubDate>"));var content = "Atlanta conditions as of\r\n" + pubdate + "\r\n";content = content + "Temperature:  " + temp +"º"+ "\r\nHumidity:  " + humidity + "\r\nWinds:  " + winddir + " " + windspeed + "\r\n\Barometer:  " + pressureif (!(heatindex = temp)){content = content + "\r\nHeat index:  " + heatindex + "º"}if (!(windchill = temp)){content = content + "\r\nWind chill:  " + windchill + "º"}content = content + "\r\nVisibility:  " + visibilityvar newTextLayer = firstComp.layers.addText(content);	newTextLayer.threeDLayer = true;	newTextLayer.property("position").setValue([ 60, 100]);app.endUndoGroup();}