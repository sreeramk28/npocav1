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
		remain.style.marginTop = poster.offsetHeight + "px";
	}
	setMargin();
	rotations();
	$(window).resize(function() {
		setMargin();
		rotations();
	});
	
	
});