if(isMobile()){
	// mobile
	var new_script_tag = document.createElement("script");
	new_script_tag.type = "text/javascript";
	new_script_tag.src="mobile.js";
	
	

}else{
	// pc/tablet

}

function isMobile(){
	return true;
}


function menuToggle(){
	var _e = $(".lines-button");
	var _i = $(".lines-button").find(".lines");
	var _m = $("#menu-body");
	if(_e.hasClass("close")){
		_e.removeClass("close");
		_m.removeClass("open");

		if(_i.hasClass("temp_dark")){
			_i.addClass("dark");
			_i.removeClass("temp_dark");
		}
		
		$("html,body").css("overflow-y","auto");
	}else{
		_e.addClass("close");
		_m.addClass("open");

		if(_i.hasClass("dark")){
			_i.addClass("temp_dark");
			_i.removeClass("dark");
		}

		$("html,body").css("overflow-y","hidden");
	}
}