//this is oriented toward a D1 comp (720 x 486)...it'd be easy to make it work on a variety of sizes, but I always use this. jcburns@jcbd.com
var activeItem = app.project.activeItem;
if (activeItem == null || !(activeItem instanceof CompItem)){
	alert("Please pick a comp as the active item and run the script again...");
} else {

var newLight = activeItem.layers.addLight("Spotlight 001",[0,0]);
var newCamera = activeItem.layers.addCamera("3d camera 001",[360.0,243.0]);


newCamera.property("position").setValue([ 360, 243, -900]); 
newCamera.property("anchorPoint").setValue([ 360, 243, 0]); 
newLight.property("anchorPoint").setValue([ 480, 175, -140]); 
newLight.property("position").setValue([ 680, 120, -360]);
newLight.castsShadows.setValue(true);

}
