var prevScrollpos = window.pageYOffset;

window.onscroll = function() {
	var currentScrollPos = window.pageYOffset;
	if (prevScrollpos > currentScrollPos) {
		try {
			document.getElementById("navbar").style.top = "0";
		} catch (e) {
		   
		}
	} else {
		try {
			document.getElementById("navbar").style.top = "-70px";
		} catch (e) {
		   
		}
	}
	prevScrollpos = currentScrollPos;
}

