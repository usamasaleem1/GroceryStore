var quantity;
var total;


function adjustPrice1(){
	
	quantity = document.getElementById("qty1").value;
	total = document.getElementById("summary").innerHTML = '$' + quantity * 16.75;
	
}


function adjustPrice2(){
	
	quantity = document.getElementById("qty2").value;
	total = document.getElementById("summary2").innerHTML = '$' + quantity * 16.75;
}



function adjustAmount(){

	var num1 = document.getElementById("summary").innerText.match(/\d+.\d*/);
	var num2 = document.getElementById("summary2").innerText.match(/\d+.\d*/);

	var num3 = parseFloat(num1);
	var num4 = parseFloat(num2);

	if(isNaN(num3))
		num3 = 0;
	if(isNaN(num4))
		num4 = 0;

	var amount = document.getElementById("amount").innerHTML = '$' + (num3 + num4).toFixed(2);

	var newAmount = document.getElementById("amount").innerHTML.match(/\d+.*\d{0,2}/);
	newAmount = parseFloat(newAmount);

	var taxGst = document.getElementById("gst").innerHTML = '$' + (newAmount * 0.099).toFixed(2);
	
	
	var newGst = document.getElementById("gst").innerHTML.match(/\d+.*\d{0,2}/);
	newGst = parseFloat(newGst);

	var taxqst = document.getElementById("qst").innerHTML = '$' + (newAmount * 0.05).toFixed(2);
	

	var newQst = document.getElementById("qst").innerHTML.match(/\d+.*\d{0,2}/);
	newQst = parseFloat(newQst);



	var totalAmount = document.getElementById("totalAmount").innerHTML = '$' + (newAmount + newGst + newQst).toFixed(2);


}


 