//Code Below For Selection Page and Related Functions
function botdselected() 
{
	if (localStorage.botdqty) 
	{
	  localStorage.botdqty = Number(localStorage.botdqty)+1;
	} 
	else 
	{
	  localStorage.botdqty = 1;
	}
}

function bsselected() 
{
	if (localStorage.bsqty) 
	{
	  localStorage.bsqty = Number(localStorage.bsqty)+1;
	} 
	else 
	{
	  localStorage.bsqty = 1;
	}
}

function dsaselected() 
{
	if (localStorage.dsaqty) 
	{
	  localStorage.dsaqty = Number(localStorage.dsaqty)+1;
	} 
	else 
	{
	  localStorage.dsaqty = 1;
	}
}

function lsaselected() 
{
	if (localStorage.lsaqty) 
	{
	  localStorage.lsaqty = Number(localStorage.lsaqty)+1;
	} 
	else 
	{
	  localStorage.lsaqty = 1;
	}
}

function lsbselected() 
{
	if (localStorage.lsbqty) 
	{
	  localStorage.lsbqty = Number(localStorage.lsbqty)+1;
	} 
	else 
	{
	  localStorage.lsbqty = 1;
	}
}

function lscselected() 
{
	if (localStorage.lscqty) 
	{
	  localStorage.lscqty = Number(localStorage.lscqty)+1;
	} 
	else 
	{
	  localStorage.lscqty = 1;
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
	var bsqty = document.getElementById("bsqty");
	if(localStorage.bsqty == 0 || typeof(localStorage.getItem("bsqty"))=='undefined')
	{
		bscontainer.style.display = "none";
		bsqty.value = 0;
	}
	else
	{
		bscontainer.style.display = "block";
		bsqty.value = localStorage.bsqty;
		containercount++;
	}
	
	
	var lsacontainer = document.getElementById("containeritem2");
	var lsasqty = document.getElementById("lsaqty");
	if(localStorage.lsaqty == 0 || typeof(localStorage.getItem("lsaqty"))=='undefined')
	{
		lsacontainer.style.display = "none";
		lsaqty.value = 0;
	}
	else
	{
		lsacontainer.style.display = "block";
		lsaqty.value = localStorage.lsaqty;
		containercount++;
	}
	
	var lsbcontainer = document.getElementById("containeritem3");
	var lsbsqty = document.getElementById("lsbqty");
	if(localStorage.lsbqty == 0 || typeof(localStorage.getItem("lsbqty"))=='undefined')
	{
		lsbcontainer.style.display = "none";
		lsbqty.value = 0;
	}
	else
	{
		lsbcontainer.style.display = "block";
		lsbqty.value = localStorage.lsbqty;
		containercount++;
	}
	
	var lsccontainer = document.getElementById("containeritem4");
	var lscsqty = document.getElementById("lscqty");
	if(localStorage.lscqty == 0 || typeof(localStorage.getItem("lscqty"))=='undefined')
	{
		lsccontainer.style.display = "none";
		lscqty.value = 0;
	}
	else
	{
		lsccontainer.style.display = "block";
		lscqty.value = localStorage.lscqty;
		containercount++;
	}
	
	var dsacontainer = document.getElementById("containeritem5");
	var dsasqty = document.getElementById("dsaqty");
	if(localStorage.dsaqty == 0 || typeof(localStorage.getItem("dsaqty"))=='undefined')
	{
		dsacontainer.style.display = "none";
		dsaqty.value = 0;
	}
	else
	{
		dsacontainer.style.display = "block";
		dsaqty.value = localStorage.dsaqty;
		containercount++;
	}
	
	var botdcontainer = document.getElementById("containeritem6");
	var botdsqty = document.getElementById("botdqty");
	if(localStorage.botdqty == 0 || typeof(localStorage.getItem("botdqty"))=='undefined')
	{
		botdcontainer.style.display = "none";
		botdqty.value = 0;
	}
	else
	{
		botdcontainer.style.display = "block";
		botdqty.value = localStorage.botdqty;
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

	localStorage.lsaqty = document.getElementById('lsaqty').value;
	localStorage.lsbqty = document.getElementById('lsbqty').value;
	localStorage.lscqty = document.getElementById('lscqty').value;
	localStorage.dsaqty = document.getElementById('dsaqty').value;
	localStorage.bsqty = document.getElementById('bsqty').value;
	localStorage.botdqty = document.getElementById('botdqty').value;
	localStorage.deliverydate = document.getElementById('orderdeliverydate').value;
	localStorage.deliveryaddress = document.getElementById('orderdeliveryaddress').value;
}

function incqty1()
{
	var temp = document.getElementById("bsqty").value;
	if(temp < 999)
	{
		temp = ++temp;
		document.getElementById("bsqty").value = new Number(temp);
	}
}
function incqty2()
{
	var temp = document.getElementById("lsaqty").value;
	if(temp < 999)
	{
		temp = ++temp;
		document.getElementById("lsaqty").value = new Number(temp);
	}
}
function incqty3()
{
	var temp = document.getElementById("lsbqty").value;
	if(temp < 999)
	{
		temp = ++temp;
		document.getElementById("lsbqty").value = new Number(temp);
	}
}
function incqty4()
{
	var temp = document.getElementById("lscqty").value;
	if(temp < 999)
	{
		temp = ++temp;
		document.getElementById("lscqty").value = new Number(temp);
	}
}
function incqty5()
{
	var temp = document.getElementById("dsaqty").value;
	if(temp < 999)
	{
		temp = ++temp;
		document.getElementById("dsaqty").value = new Number(temp);
	}
}
function incqty6()
{
	var temp = document.getElementById("botdqty").value;
	if(temp < 999)
	{
		temp = ++temp;
		document.getElementById("botdqty").value = new Number(temp);
	}
}
function decqty1()
{
	var temp = document.getElementById("bsqty").value;
	if(temp > 0)
	{
		temp = --temp;
		document.getElementById("bsqty").value = new Number(temp);
	}
}
function decqty2()
{
	var temp = document.getElementById("lsaqty").value;
	if(temp > 0)
	{
		temp = --temp;
		document.getElementById("lsaqty").value = new Number(temp);
	}
}
function decqty3()
{
	var temp = document.getElementById("lsbqty").value;
	if(temp > 0)
	{
		temp = --temp;
		document.getElementById("lsbqty").value = new Number(temp);
	}
}
function decqty4()
{
	var temp = document.getElementById("lscqty").value;
	if(temp > 0)
	{
		temp = --temp;
		document.getElementById("lscqty").value = new Number(temp);
	}
}
function decqty5()
{
	var temp = document.getElementById("dsaqty").value;
	if(temp > 0)
	{
		temp = --temp;
		document.getElementById("dsaqty").value = new Number(temp);
	}
}
function decqty6()
{
	var temp = document.getElementById("botdqty").value;
	if(temp > 0)
	{
		temp = --temp;
		document.getElementById("botdqty").value = new Number(temp);
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
	var bstotal = 0;
	if(localStorage.bsqty == 0 || typeof(localStorage.getItem("bsqty"))=='undefined')
	{
		bscontainer.style.display = "none";
	}
	else
	{
		bscontainer.style.display = "block";
		bstotal = bsprice * localStorage.bsqty;
		totalcost = totalcost + bstotal;
		document.getElementById("bsqtydiv").innerHTML = localStorage.bsqty;
		containercount++;
	}
	
	var lsacontainer = document.getElementById("sbcontaineritem2");
	var lsaprice = 24.99;
	var lsatotal = 0;
	if(localStorage.lsaqty == 0 || typeof(localStorage.getItem("lsaqty"))=='undefined')
	{
		lsacontainer.style.display = "none";
	}
	else
	{
		lsacontainer.style.display = "block";
		lsatotal = lsaprice * localStorage.lsaqty;
		totalcost = totalcost + lsatotal;
		document.getElementById("lsaqtydiv").innerHTML = localStorage.lsaqty;
		containercount++;
	}
	
	var lsbcontainer = document.getElementById("sbcontaineritem3");
	var lsbprice = 28.99;
	var lsbtotal = 0;
	if(localStorage.lsbqty == 0 || typeof(localStorage.getItem("lsbqty"))=='undefined')
	{
		lsbcontainer.style.display = "none";
	}
	else
	{
		lsbcontainer.style.display = "block";
		lsbtotal = lsbprice * localStorage.lsbqty;
		totalcost = totalcost + lsbtotal;
		document.getElementById("lsbqtydiv").innerHTML = localStorage.lsbqty;
		containercount++;
	}
	
	var lsccontainer = document.getElementById("sbcontaineritem4");
	var lscprice = 22.99;
	var lsctotal = 0;
	if(localStorage.lscqty == 0 || typeof(localStorage.getItem("lscqty"))=='undefined')
	{
		lsccontainer.style.display = "none";
	}
	else
	{
		lsccontainer.style.display = "block";
		lsctotal = lscprice * localStorage.lscqty;
		totalcost = totalcost + lsctotal;
		document.getElementById("lscqtydiv").innerHTML = localStorage.lscqty;
		containercount++;
	}
	
	var dsacontainer = document.getElementById("sbcontaineritem5");
	var dsaprice = 35.99;
	var dsatotal = 0;
	if(localStorage.dsaqty == 0 || typeof(localStorage.getItem("dsaqty"))=='undefined')
	{
		dsacontainer.style.display = "none";
	}
	else
	{
		dsacontainer.style.display = "block";
		dsatotal = dsaprice * localStorage.dsaqty;
		totalcost = totalcost + dsatotal;
		document.getElementById("dsaqtydiv").innerHTML = localStorage.dsaqty;
		containercount++;
	}
	
	var botdcontainer = document.getElementById("sbcontaineritem6");
	var botdprice = 10.99;
	var botdtotal = 0;
	if(localStorage.botdqty == 0 || typeof(localStorage.getItem("botdqty"))=='undefined')
	{
		botdcontainer.style.display = "none";
	}
	else
	{
		botdcontainer.style.display = "block";
		botdtotal = botdprice * localStorage.botdqty;
		totalcost = totalcost + botdtotal;
		document.getElementById("botdqtydiv").innerHTML = localStorage.botdqty;
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
	
	
	document.getElementById("bstotal").innerHTML = bstotal.toFixed(2);
	document.getElementById("lsatotal").innerHTML = lsatotal.toFixed(2);
	document.getElementById("lsbtotal").innerHTML = lsbtotal.toFixed(2);
	document.getElementById("lsctotal").innerHTML = lsctotal.toFixed(2);
	document.getElementById("dsatotal").innerHTML = dsatotal.toFixed(2);
	document.getElementById("botdtotal").innerHTML = botdtotal.toFixed(2);
	document.getElementById("totalcost").innerHTML = totalcost.toFixed(2);
	
	document.cookie = "total=" + totalcost.toFixed(2);
	document.cookie = "bstotal=" + bstotal.toFixed(2);
	document.cookie = "lsatotal=" + lsatotal.toFixed(2);
	document.cookie = "lsbtotal=" + lsbtotal.toFixed(2);
	document.cookie = "lsctotal=" + lsctotal.toFixed(2);
	document.cookie = "dsatotal=" + dsatotal.toFixed(2);
	document.cookie = "botdtotal=" + botdtotal.toFixed(2);
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
