function size()
{
	document.getElementById("cheese1").checked=false;
	document.getElementById("cheese2").checked=false;
	document.getElementById("cheese3").checked=false;
				
	document.getElementById("sauce1").checked=false;
	document.getElementById("sauce2").checked=false;
	document.getElementById("sauce3").checked=false;
				
	document.getElementById("mnce1").checked=false;
	document.getElementById("mnce2").checked=false;
	document.getElementById("mnce3").checked=false;
}

function chse() 
{
	document.getElementById("sauce1").checked=false;
	document.getElementById("sauce2").checked=false;
	document.getElementById("sauce3").checked=false;
	
	document.getElementById("mnce1").checked=false;
	document.getElementById("mnce2").checked=false;
	document.getElementById("mnce3").checked=false;
}

function sauce()
{
	document.getElementById("mnce1").checked=false;
	document.getElementById("mnce2").checked=false;
	document.getElementById("mnce3").checked=false;
}

function mnce()
{
	document.getElementById("qty").selectedIndex=0;
}


function loadData(name)
{
let p = document.querySelector('#input-get').value;
let f = document.querySelector('#input-gettype').value;
let pricefromsize;
let pricefromchs;
let pricefroms;
let pricefromm;

	
	if (name=="size1")
		{
			if (f =="pizza")
			{
				pricefromsize = p-300.00;
				document.getElementById("amount").innerHTML= "Price : "+pricefromsize +".00";
				document.querySelector('#fromsize').value=pricefromsize;				
				
			}
			if (f =="burger")
			{
				pricefromsize = p-150.00;
				document.getElementById("amount").innerHTML= "Price : "+pricefromsize+".00";
				document.querySelector('#fromsize').value=pricefromsize;
			}
			if (f =="friedrice")
			{
				pricefromsize = p-200.00;
				document.getElementById("amount").innerHTML= "Price : "+pricefromsize+".00";
				document.querySelector('#fromsize').value=pricefromsize;
				
			}
			if (f =="sandwich")
			{
				pricefromsize = p-100.00;
				document.getElementById("amount").innerHTML= "Price : "+pricefromsize+".00";
				document.querySelector('#fromsize').value=pricefromsize;
			}
			if (f =="noodle")
			{
				pricefromsize = p-250.00;
				document.getElementById("amount").innerHTML= "Price : "+pricefromsize+".00";
				document.querySelector('#fromsize').value=pricefromsize;
			}
			size();
		}
	if (name=="size2")
		{
			document.getElementById("amount").innerHTML="Price : "+ p+".00";
			document.querySelector('#fromsize').value=p;
			size();
		}
	
	if (name=="size3")
		{
			if (f =="pizza")
			{
				pricefromsize = parseInt(p)+300.00;
				document.getElementById("amount").innerHTML="Price : "+ pricefromsize+".00";
				document.querySelector('#fromsize').value=pricefromsize;
			}
			if (f =="burger")
			{
				pricefromsize = parseInt(p)+150.00;
				document.getElementById("amount").innerHTML= "Price : "+pricefromsize+".00";
				document.querySelector('#fromsize').value=pricefromsize;
			}
			if (f =="friedrice")
			{
				pricefromsize = parseInt(p)+200.00;
				document.getElementById("amount").innerHTML= "Price : "+pricefromsize+".00";
				document.querySelector('#fromsize').value=pricefromsize;
			}
			if (f =="sandwich")
			{
				pricefromsize = parseInt(p)+100.00;
				document.getElementById("amount").innerHTML= "Price : "+pricefromsize+".00";
				document.querySelector('#fromsize').value=pricefromsize;
			}
			if (f =="noodle")
			{
				pricefromsize = parseInt(p)+250.00;
				document.getElementById("amount").innerHTML="Price : "+ pricefromsize+".00";
				document.querySelector('#fromsize').value=pricefromsize;
			}
			size();
		}
	
	if (name=="chs1")
		{
			fromchs=document.querySelector('#fromsize').value
			document.querySelector('#fromchs').value=fromchs-100;
			chse();
			document.getElementById("amount").innerHTML="Price : "+document.querySelector('#fromchs').value+".00";
		}
	if (name=="chs2")
		{
			fromchs=document.querySelector('#fromsize').value
			document.querySelector('#fromchs').value=fromchs;
			chse();	
			document.getElementById("amount").innerHTML="Price : "+document.querySelector('#fromchs').value+".00";
		}
	if (name=="chs3")
		{
			fromchs=document.querySelector('#fromsize').value
			document.querySelector('#fromchs').value=parseInt(fromchs)+100;
			chse();
			document.getElementById("amount").innerHTML="Price : "+document.querySelector('#fromchs').value+".00";
		}
	
	if (name=="sce1")
		{
			froms=document.querySelector('#fromchs').value
			document.querySelector('#froms').value=froms-50;
			sauce();
			document.getElementById("amount").innerHTML="Price : "+document.querySelector('#froms').value+".00";
		}
	if (name=="sce2")
		{
			froms=document.querySelector('#fromchs').value
			document.querySelector('#froms').value=froms;
			sauce();
			document.getElementById("amount").innerHTML="Price : "+document.querySelector('#froms').value+".00";
		}
	if (name=="sce3")
		{
			froms=document.querySelector('#fromchs').value
			document.querySelector('#froms').value=parseInt(froms)+50;
			sauce();
			document.getElementById("amount").innerHTML="Price : "+document.querySelector('#froms').value+".00";
		}
	
	if (name=="mnce1")
		{
			froms=document.querySelector('#froms').value
			document.querySelector('#fromm').value=froms-50;
			mnce();
			document.getElementById("amount").innerHTML="Price : "+document.querySelector('#fromm').value+".00";
			
		}
	
	if (name=="mnce2")
		{
			froms=document.querySelector('#froms').value
			document.querySelector('#fromm').value=froms;
			mnce();
			document.getElementById("amount").innerHTML="Price : "+document.querySelector('#fromm').value+".00";
		}
	
	if (name=="mnce3")
		{
			froms=document.querySelector('#froms').value
			document.querySelector('#fromm').value=parseInt(froms)+50;
			mnce();
			document.getElementById("amount").innerHTML="Price : "+document.querySelector('#fromm').value+".00";
		}	
}

function getSelectValue()
	{
		let selectedValue = document.getElementById("qty").value;
		//document.querySelector('#fromqty').value = selectedValue;
		console.log(selectedValue);
		let unitprice = document.querySelector('#fromm').value;
		let finalprice;
		
		
		if (selectedValue==1)
			{
				finalprice = unitprice * 1;
				document.querySelector('#finalPrice').value = finalprice;
				document.getElementById("amount").innerHTML="Price : "+document.querySelector('#finalPrice').value+".00";
			}
		if (selectedValue==2)
			{
				document.querySelector('#finalPrice').value = unitprice * 2;
				document.getElementById("amount").innerHTML="Price : "+document.querySelector('#finalPrice').value+".00";
			}
		if (selectedValue==3)
			{
				document.querySelector('#finalPrice').value = 3 * unitprice;
				document.getElementById("amount").innerHTML="Price : "+document.querySelector('#finalPrice').value+".00";
			}
		if (selectedValue==4)
			{
				document.querySelector('#finalPrice').value = 4 * unitprice;
				document.getElementById("amount").innerHTML="Price : "+document.querySelector('#finalPrice').value+".00";
			}
		if (selectedValue==5)
			{
				document.querySelector('#finalPrice').value = 5 * unitprice;
				document.getElementById("amount").innerHTML="Price : "+document.querySelector('#finalPrice').value+".00";
			}
		
		document.querySelector('#grandtot').value = document.querySelector('#finalPrice').value;
		
	}