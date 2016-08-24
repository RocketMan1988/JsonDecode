/**
 *	Put any javascript you need here
 *
 **/

// Note that sometimes you need to make sure your code doesn't run until the document is 
// fully ready. The following is a way to do that, using the jQuery javascript library

 $(document).ready(function(){

	// code that you don't want to run until the document is fully loaded 
	// should go here.
	
/* 		$(".ims-item-search").each(function(index,element){

		var cagecode     = $(element).find(".ims-cagecode").html().trim();
		var partnumber   = $(element).find(".ims-partnumber").html().trim();
		var serialnumber = $(element).find(".ims-serialnumber").html().trim();
	
		$.getJSON(
			"https://mod-dev2.jsc.nasa.gov/wiki/extensions/IMS/API.asmx/GetFullTreeByCagePartSerialJSONP?callback=?",
			{
				CageCode : cagecode,
				PartNumber : partnumber,
				SerialNumber : serialnumber
			},
			function(response) {			
				$(element).html( buildHeaderOrCreateUL(response, cagecode, partnumber, serialnumber) );
			}
		);

	}); */ 
	
});