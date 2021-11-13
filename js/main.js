$(function () {	
	
	var price_size = "";
	var price_mod = "";
	
	console.log("Cucu");
	$(document).on("click", "input[name='dimension']", function () {
		console.log("Cucu");
        price_size = this.value;
		document.querySelector('.price__text').innerHTML = price_mod + " " + price_size + "₽";
    });
	
	$(document).on("change", ".collapsible", function () {
		price_mod = this.value;
		document.querySelector('.price__text').innerHTML = price_mod + " " + price_size + "₽";
    });
	
});