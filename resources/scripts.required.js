warningText = "The following fields are missing or invalid:";
function requiredFields(which,missingClass) {

	err=Array(); e=-1;
	
	$(which).parents("form").find("input, textarea, select").each(function() {
		if($(this).hasClass("required")) {
			//$(this).removeClass(missingClass);
			if($(this).attr("type")=="text" && $(this).val()<="") { e++; err[e] = $(this).attr("alt"); $(this).addClass(missingClass); }
			if($(this).attr("type")=="password" && $(this).val()<="") { e++; err[e] = $(this).attr("alt"); $(this).addClass(missingClass); }			
			if($(this).attr("type")=="textarea" &&$(this).val()<="") { e++; err[e] = $(this).attr("alt"); $(this).addClass(missingClass); }				
			if($(this).attr("type")=="checkbox" && $(this).val()<="") { e++; err[e] = $(this).attr("alt"); $(this).addClass(missingClass);}
			if($(this).attr("type")=="file" && $(this).val()<="") { e++; err[e] = $(this).attr("alt"); $(this).addClass(missingClass);}				
			if($(this).is("select") && $(this).find(":selected")<=1) { e++; err[e] = $(this).attr("alt"); $(this).addClass(missingClass);}			
			if($(this).attr("name").toLowerCase().indexOf("email")>-1) {
				if($(this).val()<="" || $(this).val().indexOf("@")<0 || $(this).val().indexOf(".")<0) {
					for(ai=0;ai<err.length;ai++) {
						if (err[ai] == $(this).attr("alt")) {
							err.splice(ai, 1);
							e--;
						} 
					}
					e++;
					err[e]=$(this).attr("alt");
					$(this).addClass(missingClass);							
				}
			}
		}
	});

	if(err.length>0) {
		if(!missingClass) {
			errString = err.join("\n",err);
			alert(warningText + "\n\n" + errString);
		}
	} else {
		//alert($(which).parents("form").attr("name"));
		$(which).parents("form").submit();
	}
}