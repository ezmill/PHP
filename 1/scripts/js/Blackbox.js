var Blackbox = function() {
	var that = this;
	this.lastFile;
	this.currentDesiger;
    this.setLastFilename = function() {
        $.ajax({
            type: "POST",
            url: "scripts/js/lastfile.php"
        }).done(function(o) {
        	console.log(o);
        	LAST_FILE = o;
        	init();
        }).fail(function(o) {
            alert("last filename failed");
        });
    }
    this.setCurrentDesigner = function(){
    	$.ajax({
    	    type: "POST",
    	    url: "scripts/js/increaseUserCount.php"
    	}).done(function(o) {
    		// console.log(o);
    		CURRENT_DESIGNER = Math.ceil((o/10)%12);
    	}).fail(function(o) {
    	    alert("last filename failed");
    	});
    }
}