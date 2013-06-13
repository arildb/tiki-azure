function addBtnActionClick(btn, props, edid)
{
    addEvent(btn,'click',function() {
        // alert('hey you clicked me '+document.forms['dw__editform'].elements['id'].value);
        var appletDiv = document.getElementById("jCaptureAppletDiv");
        if (appletDiv==null) {
	        var oNewDiv = document.createElement("div");
	        oNewDiv.id="jCaptureAppletDiv";
	        //oNewDiv.style.display='none';
	        var oText = document.createTextNode(" ");
	        oNewDiv.appendChild(oText);
	        document.body.appendChild(oNewDiv);

			var appletSack = new sack();    
			
			appletSack.execute = 0;
			appletSack.method = 'GET';
			appletSack.requestFile = DOKU_BASE +"/lib/plugins/jcapture/applet.php";
			appletSack.setVar('pageName', document.forms['dw__editform'].elements['id'].value);
			appletSack.setVar('edid', edid);
//			appletSack.element = oNewDiv;
			appletSack.onError = function() { alert('Ajax error in loading screen capture applet.'); };
			appletSack.onCompletion = function() { 
				oNewDiv.innerHTML = appletSack.response;
			};
			appletSack.runAJAX();
	    } else {
	    	document.getElementById("jCaptureApplet").showCaptureFrame();
		}	    
    });
    return true;
}
 
// add a new toolbar button just like the simple way
addInitEvent(function()
{
    // but first check if there is a toolbar
    if (window.toolbar != undefined)
    {
        window.toolbar[window.toolbar.length] = {
            "type":"Click", // we have a new type that links to the function
            "title":"Screen capture",
            "icon":DOKU_BASE + "lib/plugins/jcapture/camera.png"
        }
    }
});