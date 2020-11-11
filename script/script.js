//Code Below For Selection Page and Related Functions
function itemselected1() 
{
	if (localStorage.selectionquantity1) 
	{
	  localStorage.selectionquantity1 = Number(localStorage.selectionquantity1)+1;
	} 
	else 
	{
	  localStorage.selectionquantity1 = 1;
	}
}

function itemselected2() 
{
	if (localStorage.selectionquantity2) 
	{
	  localStorage.selectionquantity2 = Number(localStorage.selectionquantity2)+1;
	} 
	else 
	{
	  localStorage.selectionquantity2 = 1;
	}
}

function itemselected3() 
{
	if (localStorage.selectionquantity3) 
	{
	  localStorage.selectionquantity3 = Number(localStorage.selectionquantity3)+1;
	} 
	else 
	{
	  localStorage.selectionquantity3 = 1;
	}
}

function itemselected4() 
{
	if (localStorage.selectionquantity4) 
	{
	  localStorage.selectionquantity4 = Number(localStorage.selectionquantity4)+1;
	} 
	else 
	{
	  localStorage.selectionquantity4 = 1;
	}
}

function itemselected5() 
{
	if (localStorage.selectionquantity5) 
	{
	  localStorage.selectionquantity5 = Number(localStorage.selectionquantity5)+1;
	} 
	else 
	{
	  localStorage.selectionquantity5 = 1;
	}
}

function itemselected6() 
{
	if (localStorage.selectionquantity6) 
	{
	  localStorage.selectionquantity6 = Number(localStorage.selectionquantity6)+1;
	} 
	else 
	{
	  localStorage.selectionquantity6 = 1;
	}
}

function loadselection()
{
	var containercount = 0;
	
	if(localStorage.deliverydate != "" || typeof(localStorage.getItem("deliverydate"))!='undefined')
	{
		document.getElementById("orderdeliverydate").value = localStorage.deliverydate;
	}
	
	if(localStorage.deliveryaddress != "" || typeof(localStorage.getItem("deliveryaddress"))!='undefined')
	{
		document.getElementById("orderdeliveryaddress").value = localStorage.deliveryaddress;
	}	
	
	var bscontainer = document.getElementById("containeritem1");
	var selectionquantity1 = document.getElementById("selectionquantity1");
	if(localStorage.selectionquantity1 == 0 || typeof(localStorage.getItem("selectionquantity1"))=='undefined')
	{
		bscontainer.style.display = "none";
		selectionquantity1.value = 0;
	}
	else
	{
		bscontainer.style.display = "block";
		selectionquantity1.value = localStorage.selectionquantity1;
		containercount++;
	}
	
	
	var lsacontainer = document.getElementById("containeritem2");
	var lsasqty = document.getElementById("selectionquantity2");
	if(localStorage.selectionquantity2 == 0 || typeof(localStorage.getItem("selectionquantity2"))=='undefined')
	{
		lsacontainer.style.display = "none";
		selectionquantity2.value = 0;
	}
	else
	{
		lsacontainer.style.display = "block";
		selectionquantity2.value = localStorage.selectionquantity2;
		containercount++;
	}
	
	var lsbcontainer = document.getElementById("containeritem3");
	var lsselectionquantity1 = document.getElementById("selectionquantity3");
	if(localStorage.selectionquantity3 == 0 || typeof(localStorage.getItem("selectionquantity3"))=='undefined')
	{
		lsbcontainer.style.display = "none";
		selectionquantity3.value = 0;
	}
	else
	{
		lsbcontainer.style.display = "block";
		selectionquantity3.value = localStorage.selectionquantity3;
		containercount++;
	}
	
	var lsccontainer = document.getElementById("containeritem4");
	var lscsqty = document.getElementById("selectionquantity4");
	if(localStorage.selectionquantity4 == 0 || typeof(localStorage.getItem("selectionquantity4"))=='undefined')
	{
		lsccontainer.style.display = "none";
		selectionquantity4.value = 0;
	}
	else
	{
		lsccontainer.style.display = "block";
		selectionquantity4.value = localStorage.selectionquantity4;
		containercount++;
	}
	
	var dsacontainer = document.getElementById("containeritem5");
	var dsasqty = document.getElementById("selectionquantity5");
	if(localStorage.selectionquantity5 == 0 || typeof(localStorage.getItem("selectionquantity5"))=='undefined')
	{
		dsacontainer.style.display = "none";
		selectionquantity5.value = 0;
	}
	else
	{
		dsacontainer.style.display = "block";
		selectionquantity5.value = localStorage.selectionquantity5;
		containercount++;
	}
	
	var botdcontainer = document.getElementById("containeritem6");
	var botdsqty = document.getElementById("selectionquantity6");
	if(localStorage.selectionquantity6 == 0 || typeof(localStorage.getItem("selectionquantity6"))=='undefined')
	{
		botdcontainer.style.display = "none";
		selectionquantity6.value = 0;
	}
	else
	{
		botdcontainer.style.display = "block";
		selectionquantity6.value = localStorage.selectionquantity6;
		containercount++;
	}
	
	var emptyselectiontoggle = document.getElementById("emptyselection");
	var saveselectiontoggle = document.getElementById("saveselection");
	var booknowtoggle = document.getElementById("booknow");
	var selectiondatecontainertoggle = document.getElementById("selectiondatecontainer");
	var selectionaddresscontainertoggle = document.getElementById("selectionaddresscontainer");
	
	if(containercount  == 0)
	{
		emptyselectiontoggle.style.display = "block";
		saveselectiontoggle.style.display = "none";
		booknowtoggle.style.display = "none";
		selectiondatecontainertoggle.style.display = "none";
		selectionaddresscontainertoggle.style.display = "none";
	}
	else
	{
		emptyselectiontoggle.style.display = "none";
		saveselectiontoggle.style.display = "block";
		booknowtoggle.style.display = "block";
		selectiondatecontainertoggle.style.display = "block";
		selectionaddresscontainertoggle.style.display = "block";
	}
}

function saveselections()
{
	localStorage.selectionquantity2 = document.getElementById('selectionquantity2').value;
	localStorage.selectionquantity3 = document.getElementById('selectionquantity3').value;
	localStorage.selectionquantity4 = document.getElementById('selectionquantity4').value;
	localStorage.selectionquantity5 = document.getElementById('selectionquantity5').value;
	localStorage.selectionquantity1 = document.getElementById('selectionquantity1').value;
	localStorage.selectionquantity6 = document.getElementById('selectionquantity6').value;
	localStorage.deliverydate = document.getElementById('orderdeliverydate').value;
	localStorage.deliveryaddress = document.getElementById('orderdeliveryaddress').value;
	
	var data;
	
	data = 'selectionname1=' + document.getElementById("selectionname1").innerHTML;
	document.cookie = data;
	
	data = 'selectionprice1=' + document.getElementById("selectionprice1").innerHTML;
	document.cookie = data;
	
	data = 'selectionquantity1=' + document.getElementById("selectionquantity1").value;
	document.cookie = data;
	
	data = 'selectionname2=' + document.getElementById("selectionname2").innerHTML;
	document.cookie = data;
	
	data = 'selectionprice2=' + document.getElementById("selectionprice2").innerHTML;
	document.cookie = data;
	
	data = 'selectionquantity2=' + document.getElementById("selectionquantity2").value;
	document.cookie = data;
	
	data = 'selectionname3=' + document.getElementById("selectionname3").innerHTML;
	document.cookie = data;
	
	data = 'selectionprice3=' + document.getElementById("selectionprice3").innerHTML;
	document.cookie = data;
	
	data = 'selectionquantity3=' + document.getElementById("selectionquantity3").value;
	document.cookie = data;
	
	data = 'selectionname4=' + document.getElementById("selectionname4").innerHTML;
	document.cookie = data;
	
	data = 'selectionprice4=' + document.getElementById("selectionprice4").innerHTML;
	document.cookie = data;
	
	data = 'selectionquantity4=' + document.getElementById("selectionquantity4").value;
	document.cookie = data;
	
	data = 'selectionname5=' + document.getElementById("selectionname5").innerHTML;
	document.cookie = data;
	
	data = 'selectionprice5=' + document.getElementById("selectionprice5").innerHTML;
	document.cookie = data;
	
	data = 'selectionquantity5=' + document.getElementById("selectionquantity5").value;
	document.cookie = data;
	
	data = 'selectionname6=' + document.getElementById("selectionname6").innerHTML;
	document.cookie = data;
	
	data = 'selectionprice6=' + document.getElementById("selectionprice6").innerHTML;
	document.cookie = data;
	
	data = 'selectionquantity6=' + document.getElementById("selectionquantity6").value;
	document.cookie = data;
	
	data = 'orderdeliverydate=' + document.getElementById("orderdeliverydate").value;
	document.cookie = data;
	
	data = 'orderdeliveryaddress=' + document.getElementById("orderdeliveryaddress").value;
	document.cookie = data;
}

function incqty1()
{
	var temp = document.getElementById("selectionquantity1").value;
	if(temp < 999)
	{
		temp = ++temp;
		document.getElementById("selectionquantity1").value = new Number(temp);
	}
}
function incqty2()
{
	var temp = document.getElementById("selectionquantity2").value;
	if(temp < 999)
	{
		temp = ++temp;
		document.getElementById("selectionquantity2").value = new Number(temp);
	}
}
function incqty3()
{
	var temp = document.getElementById("selectionquantity3").value;
	if(temp < 999)
	{
		temp = ++temp;
		document.getElementById("selectionquantity3").value = new Number(temp);
	}
}
function incqty4()
{
	var temp = document.getElementById("selectionquantity4").value;
	if(temp < 999)
	{
		temp = ++temp;
		document.getElementById("selectionquantity4").value = new Number(temp);
	}
}
function incqty5()
{
	var temp = document.getElementById("selectionquantity5").value;
	if(temp < 999)
	{
		temp = ++temp;
		document.getElementById("selectionquantity5").value = new Number(temp);
	}
}
function incqty6()
{
	var temp = document.getElementById("selectionquantity6").value;
	if(temp < 999)
	{
		temp = ++temp;
		document.getElementById("selectionquantity6").value = new Number(temp);
	}
}
function decqty1()
{
	var temp = document.getElementById("selectionquantity1").value;
	if(temp > 0)
	{
		temp = --temp;
		document.getElementById("selectionquantity1").value = new Number(temp);
	}
}
function decqty2()
{
	var temp = document.getElementById("selectionquantity2").value;
	if(temp > 0)
	{
		temp = --temp;
		document.getElementById("selectionquantity2").value = new Number(temp);
	}
}
function decqty3()
{
	var temp = document.getElementById("selectionquantity3").value;
	if(temp > 0)
	{
		temp = --temp;
		document.getElementById("selectionquantity3").value = new Number(temp);
	}
}
function decqty4()
{
	var temp = document.getElementById("selectionquantity4").value;
	if(temp > 0)
	{
		temp = --temp;
		document.getElementById("selectionquantity4").value = new Number(temp);
	}
}
function decqty5()
{
	var temp = document.getElementById("selectionquantity5").value;
	if(temp > 0)
	{
		temp = --temp;
		document.getElementById("selectionquantity5").value = new Number(temp);
	}
}
function decqty6()
{
	var temp = document.getElementById("selectionquantity6").value;
	if(temp > 0)
	{
		temp = --temp;
		document.getElementById("selectionquantity6").value = new Number(temp);
	}
}
//Code Above For Selection Page and Related Functions

//Code Below For Submit Booking Page and Related Functions
function loadbooking()
{
	if(localStorage.deliverydate != "" || typeof(localStorage.getItem("deliverydate"))!='undefined')
	{
		document.getElementById("orderdate").innerHTML = localStorage.deliverydate;
	}
	
	if(localStorage.deliveryaddress != "" || typeof(localStorage.getItem("deliveryaddress"))!='undefined')
	{
		document.getElementById("orderaddress").innerHTML = localStorage.deliveryaddress;
	}	
	
	var totalcost = 0;
	var containercount = 0;
	
	var bscontainer = document.getElementById("sbcontaineritem1");
	var bsprice = 19.99;
	var itemtotal1 = 0;
	if(localStorage.selectionquantity1 == 0 || typeof(localStorage.getItem("selectionquantity1"))=='undefined')
	{
		bscontainer.style.display = "none";
	}
	else
	{
		bscontainer.style.display = "block";
		itemtotal1 = bsprice * localStorage.selectionquantity1;
		totalcost = totalcost + itemtotal1;
		document.getElementById("selectionquantity1div").innerHTML = localStorage.selectionquantity1;
		containercount++;
	}
	
	var lsacontainer = document.getElementById("sbcontaineritem2");
	var lsaprice = 24.99;
	var itemtotal2 = 0;
	if(localStorage.selectionquantity2 == 0 || typeof(localStorage.getItem("selectionquantity2"))=='undefined')
	{
		lsacontainer.style.display = "none";
	}
	else
	{
		lsacontainer.style.display = "block";
		itemtotal2 = lsaprice * localStorage.selectionquantity2;
		totalcost = totalcost + itemtotal2;
		document.getElementById("selectionquantity2div").innerHTML = localStorage.selectionquantity2;
		containercount++;
	}
	
	var lsbcontainer = document.getElementById("sbcontaineritem3");
	var lsbprice = 28.99;
	var itemtotal3 = 0;
	if(localStorage.selectionquantity3 == 0 || typeof(localStorage.getItem("selectionquantity3"))=='undefined')
	{
		lsbcontainer.style.display = "none";
	}
	else
	{
		lsbcontainer.style.display = "block";
		itemtotal3 = lsbprice * localStorage.selectionquantity3;
		totalcost = totalcost + itemtotal3;
		document.getElementById("selectionquantity3div").innerHTML = localStorage.selectionquantity3;
		containercount++;
	}
	
	var lsccontainer = document.getElementById("sbcontaineritem4");
	var lscprice = 22.99;
	var itemtotal4 = 0;
	if(localStorage.selectionquantity4 == 0 || typeof(localStorage.getItem("selectionquantity4"))=='undefined')
	{
		lsccontainer.style.display = "none";
	}
	else
	{
		lsccontainer.style.display = "block";
		itemtotal4 = lscprice * localStorage.selectionquantity4;
		totalcost = totalcost + itemtotal4;
		document.getElementById("selectionquantity4div").innerHTML = localStorage.selectionquantity4;
		containercount++;
	}
	
	var dsacontainer = document.getElementById("sbcontaineritem5");
	var dsaprice = 35.99;
	var itemtotal5 = 0;
	if(localStorage.selectionquantity5 == 0 || typeof(localStorage.getItem("selectionquantity5"))=='undefined')
	{
		dsacontainer.style.display = "none";
	}
	else
	{
		dsacontainer.style.display = "block";
		itemtotal5 = dsaprice * localStorage.selectionquantity5;
		totalcost = totalcost + itemtotal5;
		document.getElementById("selectionquantity5div").innerHTML = localStorage.selectionquantity5;
		containercount++;
	}
	
	var botdcontainer = document.getElementById("sbcontaineritem6");
	var botdprice = 10.99;
	var itemtotal6 = 0;
	if(localStorage.selectionquantity6 == 0 || typeof(localStorage.getItem("selectionquantity6"))=='undefined')
	{
		botdcontainer.style.display = "none";
	}
	else
	{
		botdcontainer.style.display = "block";
		itemtotal6 = botdprice * localStorage.selectionquantity6;
		totalcost = totalcost + itemtotal6;
		document.getElementById("selectionquantity6div").innerHTML = localStorage.selectionquantity6;
		containercount++;
	}
	
	var emptyselectiontoggle = document.getElementById("emptyselection");
	var noitemsselected = document.getElementById("noitemsselected");
	var orderdatecontainer = document.getElementById("orderdatecontainer");
	var orderaddresscontainer = document.getElementById("orderaddresscontainer");
	if(containercount  == 0)
	{
		emptyselectiontoggle.style.display = "block";
		noitemsselected.style.display = "none";
		orderdatecontainer.style.display = "none";
		orderaddresscontainer.style.display = "none";
	}
	else
	{
		emptyselectiontoggle.style.display = "none";
		noitemsselected.style.display = "block";
		orderdatecontainer.style.display = "block";
		orderaddresscontainer.style.display = "block";
	}
	
	document.getElementById("itemtotal1").innerHTML = itemtotal1.toFixed(2);
	document.getElementById("itemtotal2").innerHTML = itemtotal2.toFixed(2);
	document.getElementById("itemtotal3").innerHTML = itemtotal3.toFixed(2);
	document.getElementById("itemtotal4").innerHTML = itemtotal4.toFixed(2);
	document.getElementById("itemtotal5").innerHTML = itemtotal5.toFixed(2);
	document.getElementById("itemtotal6").innerHTML = itemtotal6.toFixed(2);
	document.getElementById("totalcost").innerHTML = totalcost.toFixed(2);
	
	document.cookie = "total=" + totalcost.toFixed(2);
	document.cookie = "itemtotal1=" + itemtotal1.toFixed(2);
	document.cookie = "itemtotal2=" + itemtotal2.toFixed(2);
	document.cookie = "itemtotal3=" + itemtotal3.toFixed(2);
	document.cookie = "itemtotal4=" + itemtotal4.toFixed(2);
	document.cookie = "itemtotal5=" + itemtotal5.toFixed(2);
	document.cookie = "itemtotal6=" + itemtotal6.toFixed(2);
}
//Code Above For Submit Booking Page and Related Functions

/* Edit User page */
var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};
/* -------------- */

//Menu page
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}

function validateForm() {
	var _name = document.forms["paymentForm"]["name"].value;
	if (_name == "") {
		alert("Name must be filled out");
		return false;
	}
			
	var _email = document.forms["paymentForm"]["email"].value;
	if (_email == "") {
		alert("Email must be filled out");
		return false;
	}
			
	var _address = document.forms["paymentForm"]["address"].value;
	if (_address == "") {
		alert("Address must be filled out");
		return false;
	}
			
	var _city = document.forms["paymentForm"]["city"].value;
	if (_city == "") {
		alert("City must be filled out");
		return false;
	}
			
	var _state = document.forms["paymentForm"]["state"].value;
	if (_state == "") {
		alert("State must be filled out");
		return false;
	}
			
	var _zip = document.forms["paymentForm"]["zip"].value;
	if (_zip == "") {
		alert("Zipcode must be filled out");
		return false;
	}
			
	var _cname = document.forms["paymentForm"]["cname"].value;
	if (_cname == "") {
		alert("Name on card must be filled out");
		return false;
	}
			
	var _ccnum = document.forms["paymentForm"]["ccnum"].value;
	if (_ccnum == "") {
		alert("Credit card number must be filled out");
		return false;
	}
			
	var _expmonth = document.forms["paymentForm"]["expmonth"].value;
	if (_expmonth == "") {
		alert("Expiry month must be filled out");
		return false;
	}
			
	var _expyear = document.forms["paymentForm"]["expyear"].value;
	if (_expyear == "") {
		alert("Expiry year must be filled out");
		return false;
	}
			
	var _cvv = document.forms["paymentForm"]["cvv"].value;
	if (_cvv == "") {
		alert("CVV must be filled out");
		return false;
	}
}

/*Operation menu page*/
/*
sidebarmenu
*/



