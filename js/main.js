$(function () {	
	
	var price_size = "";
	var price_mod = "";
	
	$(document).on("click", "input[name='dimension']", function () {
        price_size = this.value;
		document.querySelector('.price__text').innerHTML = price_mod + " " + price_size + "₽";
    });
	
	$(document).on("change", ".collapsible", function () {
		price_mod = this.value;
		document.querySelector('.price__text').innerHTML = price_mod + " " + price_size + "₽";
    });
	
});