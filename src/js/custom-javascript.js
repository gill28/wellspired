function myFunction() {
	var x = document.querySelector(".header");
	if (x.style.display === "none") {
		x.style.display = "block";
	} else {
		x.style.display = "none";
	}
}

jQuery(document).ready(function ($) {
	// Add your custom jQuery here
	$("#nav-icon2").on("click", function () {
		$(this).toggleClass("open");
	});
});

const parents = Array.from(document.getElementsByClassName("card-container"));
