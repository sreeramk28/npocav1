$(document).ready(function() {
	
	function rotations() {
		var w = window.innerWidth;
		//alert(w);
		if(w >= 768) {
			$(".line").removeClass("line-down-facing");
			$(".arrow").removeClass("arrow-down-facing");
			$(".arrow").addClass("arrow-left-facing");
		}
		else {
			$(".line").addClass("line-down-facing");	
			$(".arrow").removeClass("arrow-left-facing");
			$(".arrow").addClass("arrow-down-facing");
		}
	}
	function setMargin() {
		//alert("ok");
		var poster = document.getElementById("poster-1");
		var remain = document.getElementById("remaining-wrapper");
		var h = poster.offsetHeight;
		var tpwidth = poster.offsetTop;
		var ht = document.getElementById("vid-container").offsetHeight;
		//alert(ht);
		//alert(h);
		var mns = ht - tpwidth;
		
		var ww = window.innerWidth;
		if(ww >= 992) h -= 0.14*h;
		else if(ww >= 974) h -= 0.1*h;
		else if(ww >= 700) h -= 0.07*h;
		var hh = parseInt(h);
		remain.style.marginTop = hh.toString() + "px";
	}
	//setVideo();
	setMargin();
	rotations();
	$(window).resize(function() {
		setMargin();
		rotations();
	});
	
	
});