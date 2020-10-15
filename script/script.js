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
	if(containercount  == 0)
	{
		emptyselectiontoggle.style.display = "block";
		saveselectiontoggle.style.display = "none";
	}
	else
	{
		emptyselectiontoggle.style.display = "none";
		saveselectiontoggle.style.display = "block";
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
