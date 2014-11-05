
var ATTR_CROP_WIDTH = "crop-width"
var flag_cropped = false;


window.onload=function(){

	$("#respond form label").each(function(index,element){
		var _label = $(element).text();
		$(element).parent().find("input").attr("placeholder",_label);
		$(element).remove();
	})
	$("p").each(function(index,element){
		if($(element).html().length == 0){
			$(element).remove();
		}
	})

	// =======================
	// Handle menu window
	// var $menu = $("#menu-body");
	// $menu.hide();
	// $("#btn-menu").click(function(){
	// 	$menu.show();
	// });


	// =======================
	// HANDLE IMAGE

	// =======================
	// moving img element from anchor element and remove anchor element
	var secs = document.getElementsByTagName("section");
	for (var i = 0; i < secs.length; i++) {
		var _section = secs[i];
		
		var _anchor = _section.getElementsByTagName("a")[0];
		if(_anchor){

			var _img = _anchor.lastChild.cloneNode(true);

			_section.insertBefore(_img,_section.getElementsByClassName("text-wrapper")[0]);
			_section.removeChild(_anchor);

		}
	};

	// =======================
	// CROP IMAGE
	var ATTR_ORIGIN_WIDTH = "origin-width"
	var ATTR_ORIGIN_HEIGHT = "origin-height"
	$("section img").each(function(index,element){
		ele = $(element);
		var _w = element.width;
		var _h = element.height;
		
		ele.attr(ATTR_ORIGIN_HEIGHT, _h)
		ele.attr(ATTR_ORIGIN_WIDTH , _w)
		
		// modify all image adapt to full-screen
		ele.width("100%");
		ele.height("auto");
	})


	if($(window).width() < 480){
		cropImages()
	}
	setMaxHeightOfTextWrapper()


}

var doit;
window.onresize = function(){
	clearTimeout(doit);
	// doing the resizedDoneAction every 100 milliseconds
  	doit = setTimeout(resizedDoneAction, 100);
};

function resizedDoneAction(){
    if($(window).width() < 480){
		cropImages()
	}else{
		restoreCroppedImages()
	}
	setMaxHeightOfTextWrapper()
}

function setMaxHeightOfTextWrapper(){
	
	$("section .text-wrapper").each(function(index,element){

		var $ele = $(element);

		var _screen_image_height = $ele.parent().height();
		
		var offsetTop = element.offsetTop;
		var offsetBottom = _screen_image_height - offsetTop - element.clientHeight;

		var _vertical_offset = ((offsetBottom>=0 && offsetTop > offsetBottom) || offsetTop <= 0) ? offsetBottom : offsetTop;
		
		if(typeof _vertical_offset !== "number"){
			_vertical_offset = 0;
		}

		_vertical_offset = 2 * _vertical_offset;

		console.log(_vertical_offset);

 		// var _css_padding_top = parseInt($ele.css('padding-top'),10),
 		// 	_css_padding_bot = parseInt($ele.css('padding-bottom'),10);

 		// if(!isNaN(_css_padding_top)){
 		// 	_vertical_offset += _css_padding_top;
 		// }
 		// if(!isNaN(_css_padding_bot)){
 		// 	_vertical_offset += _css_padding_bot;
 		// }

 		
 		
 		element.style.maxHeight = (_screen_image_height - Math.abs(_vertical_offset))+"px";
		
	});
}

function cropImages(){

	if(flag_cropped){
		return;
	}
	flag_cropped = true;

	$("img["+ATTR_CROP_WIDTH+"]").each(function(index, element){
		var $ele = $(element);

		var _crop_width = parseInt($ele.attr(ATTR_CROP_WIDTH))
		var _orig_len = parseInt($ele.attr(ATTR_ORIGIN_WIDTH))
		
		
		if(typeof _crop_width == "number" && typeof _orig_len == "number" && !isNaN(_orig_len)){
			if(_crop_width > 0 && _orig_len > _crop_width){
				// crop picture from left to right
				var new_width = (_crop_width + _orig_len) * $(window).width() / _orig_len;

				$ele.width(new_width);
			}else if(_crop_width < 0 && _orig_len > -_crop_width){
				// crop picture from right to left
				var new_width = ( _orig_len - _crop_width) * $(window).width() / _orig_len;

				$ele.width(new_width);
				$ele.css("left",($(window).width() - new_width));
			}
		}
	})
}

function restoreCroppedImages(){

	if(!flag_cropped){
		return;
	}
	flag_cropped = false;


	$("img[crop-width]").each(function(index, element){
		$(element).width("100%")
		$(element).css("left",0);
	})
}
