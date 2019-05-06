function pointsMap() {
	var opts = {
	    center: new google.maps.LatLng(37.752788, -122.426771),
	    zoom:11,
	    maxZoom:11,
	    panControl: false,
	    zoomControl: true,
	    mapTypeControl: false,
	    scaleControl: false,
	    streetViewControl: false,
	    overviewMapControl: false,
	    rotateControl: false,
	    scrollwheel: false
	};
	var map = new google.maps.Map(document.getElementById("pointsmap"),opts);
	var point1 = new google.maps.Marker({
	 	position: new google.maps.LatLng(37.752788, -122.426771),
	 	map: map,
	 	animation: google.maps.Animation.Drop
	 	});
	var point2 = new google.maps.Marker({
	 	position: new google.maps.LatLng(37.760766, -122.452627),
	 	map: map,
	 	animation: google.maps.Animation.Drop
	 	});
	var point3 = new google.maps.Marker({
	 	position: new google.maps.LatLng(37.780394, -122.455103),
	 	map: map,
	 	animation: google.maps.Animation.Drop
	 	});
}

function updateFrm(){
    $(".contact-form").attr("action","message.php#msg");
}
setTimeout(updateFrm,11000);

function setCookie(paramA, valueA, durationA) {
  var now = new Date();
  now.setTime(now.getTime() + (durationA*24*60*60*1000));
  var expires = "expires="+ now.toUTCString();
  document.cookie = paramA + "=" + valueA + ";" + expires + ";path=/";
}

function getCookie(paramA) {
    var param = paramA + "=";
    var decodedStr = decodeURIComponent(document.cookie);
    var cookieArray = decodedStr.split(';');
    var i;
    for(i=0; i<cookieArray.length; i++) {
        if (cookieArray[i].indexOf(paramA)>=0) {
            return cookieArray[i].split("=")[1];
        }
    }
}

if(getCookie("rodoAccept")!=="1"){
    var gpdrMsg = "GDPR declaration - this is website demo, so it doesn't store any data.\n";
    gpdrMsg += "All data entered by You in forms on this website are processed only\n";
    gpdrMsg += "in order to present operation of website mechanisms and then\n";
    gpdrMsg += "are removed.\n";
    gpdrMsg += "Click OK if you accept presented rules of data use and processing";
    var gpdrAccept = confirm(gpdrMsg);
    if(gpdrAccept===true){
        setCookie("rodoAccept","1",1);
    }
}