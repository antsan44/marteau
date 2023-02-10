var quantity = document.getElementById("quantity");
var plus_btn = document.getElementById("add");
var minus_btn = document.getElementById("remove");

plus_btn.addEventListener("click", function() {
	var current = Number(quantity.getAttribute('value'));
	quantity.setAttribute('value', current + 1);
});

minus_btn.addEventListener("click", function() {
	var current = Number(quantity.getAttribute('value'));
	if (current - 1 > 0)
		quantity.setAttribute('value', current - 1);
});