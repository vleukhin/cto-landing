	$(document).ready(function() {

//mask
$(".phone-mask").mask("9 (999) 999-99-99");
		

	
		$('.regionCity').click(function(e) {
		e.preventDefault();	
		$('.city-p').text($(this).text())
		location.href="#close"
		return false
		})
		
			$('.search-city-submit').click(function(e) {
		e.preventDefault();	
		
				
		if($('#search-city').val()==''){
			$('#search-city').focus();
			return false;
		}
		
		var locat = $('#search-city').val();
$.post( './city.php', {dat:locat}, success);
function success(msg)   {
	
if(msg!=$('#search-city').val().toLowerCase()){
	alert('Ошибка! Введите правильное название города.')
		return false;
}
else{
$('.city-p').text($('#search-city').val());
location.href="#close"
}

}

		})	
		

		

		//ya.city
	ymaps.ready(init);
	function init() {
		var geolocation = ymaps.geolocation;
		$('#ya-city').val(geolocation.city);
		$('.city-p').text(geolocation.city)	
	}
	
    $('#search-city').autocomplete({
                source: 'city.php',
				minLength: 2
    })	

	
	});
function CheckBoxChecker()
	{
		var tireCheckBox = document.getElementById("TireCheckBox");
		var firstBoxItems = document.getElementsByClassName("firstBoxItems")
		if(tireCheckBox.checked==true)
			{
				for(var i = 0; i<firstBoxItems.length; i++)
					{
						firstBoxItems[i].disabled=true;
						firstBoxItems[i].checked=false;
						if(firstBoxItems[i].nodeName === "SELECT")
							{
								$(firstBoxItems[i]).wrap("<span class='inactive'></span>");
							}
					}
			}else{
				for(var i = 0; i<firstBoxItems.length; i++)
					{
						firstBoxItems[i].disabled=false;
						if($(firstBoxItems[i]).parent().is('span'))
							{
								
								$(firstBoxItems[i]).unwrap();
							}
					}
			}
	}
function CheckBoxChecker2()
	{
		var BalanceCheckBox = document.getElementById("BalanceCheckBox");
		var balanceBoxItems = document.getElementsByClassName("balanceBoxItems")
		if(BalanceCheckBox.checked==true)
			{
				for(var i = 0; i<balanceBoxItems.length; i++)
					{
						balanceBoxItems[i].disabled=true;
						balanceBoxItems[i].checked=false;
						if(balanceBoxItems[i].nodeName === "SELECT")
							{
								$(balanceBoxItems[i]).wrap("<span class='inactive'></span>");
							}
					}
			}else{
				for(var i = 0; i<balanceBoxItems.length; i++)
					{
						balanceBoxItems[i].disabled=false;
						if($(balanceBoxItems[i]).parent().is('span'))
							{
								
								$(balanceBoxItems[i]).unwrap();
							}
					}
			}
	}
function CheckBoxChecker3()
{
	var CompressorCheckBox = document.getElementById("CompressorCheckBox");
		var compressorBoxItems = document.getElementsByClassName("compressorBoxItems")
		if(CompressorCheckBox.checked==true)
			{
				for(var i = 0; i<compressorBoxItems.length; i++)
					{
						compressorBoxItems[i].disabled=true;
						compressorBoxItems[i].checked=false;
						if(compressorBoxItems[i].nodeName === "SELECT")
							{
								$(compressorBoxItems[i]).wrap("<span class='inactive'></span>");
							}
					}
			}else{
				for(var i = 0; i<compressorBoxItems.length; i++)
					{
						compressorBoxItems[i].disabled=false;
						if($(compressorBoxItems[i]).parent().is('span'))
							{
								
								$(compressorBoxItems[i]).unwrap();
							}
					}
			}
}
function CatNameChanger(catName)
{
var	modalText = document.getElementById("catalogName");
var cNameInputValue = document.getElementById("cNameId");
	modalText.innerHTML= catName;
	cNameInputValue.value = catName;

}
function CatNameChanger2(catName2)
{
var	modalText = document.getElementById("catalogName2");
var cNameInputValue = document.getElementById("cNameId2");
	modalText.innerHTML= catName2;
	cNameInputValue.value = catName2;

}
function CalcFieldChecker(e)
{
	//var eAttr = e.getAttribute("id");
	
	
	if(e.nodeName==undefined){
	var jqAttr = e.attr("id");	
	}
	

	if(e.id == "scol" || jqAttr == "scol")
	{
	var tireBlock = document.getElementById("TireCheckBox");
	if(tireBlock.checked==false)
		{   
			CheckBoxChecker();
			tireBlock.checked=true;
			
		}
	}
		if(e.id == "bcol" || jqAttr == "bcol")
		{
			var balanceChckbx = document.getElementById("BalanceCheckBox");
			if(balanceChckbx.checked==false)
			{
				CheckBoxChecker2();
				balanceChckbx.checked=true;
			}
	
	}
		if(e.id == "kcol" || jqAttr == "kcol")
		{
			var kompressChckbx = document.getElementById("CompressorCheckBox");	
			if(kompressChckbx.checked==false)
			{
				CheckBoxChecker3();
				kompressChckbx.checked=true;
			}
	       
	}
	
}

//Валидация телефонного номера
//Текст в span(снизу)
function validation(win,inputf) {
	var novalid;
	var invalidinputText = document.getElementById(win);
    var phone_pattern = /^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/;
    var phone = document.getElementById(inputf).value;
    if (phone_pattern.test(phone) == false ){
					novalid = "*Номер введен некорректно!";
					invalidinputText.innerHTML = novalid;
					document.getElementById(inputf).style.boxShadow = "inset 0 0 5px 5px #fcd63f";
		}
	else{
		invalidinputText.innerHTML = "";
		document.getElementById(inputf).style.boxShadow = "none";
	}
}

function validation2(win,inputf) {
	var novalid;
	var invalidinputText = document.getElementById(win);
    var phone_pattern = /^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/;
    var phone = document.getElementById(inputf).value;
    if (phone_pattern.test(phone) == false ){
					novalid = "*Номер введен некорректно!";
					invalidinputText.innerHTML = novalid;
					document.getElementById(inputf).style.boxShadow = "inset 0 0 5px 5px #fe475a";
		}
	else{
		invalidinputText.innerHTML = "";
		document.getElementById(inputf).style.boxShadow = "none";
	}
}

    $('#select_col_1 *').filter(':input').each(function(){        
        if($(this).attr('disabled') == "disabled"){
            $(this).wrap("<span id='scol' class='inactive'></span>"); 
        };
    });
    

        $('#select_col_2 *').filter(':input').each(function(){        
        if($(this).attr('disabled') == "disabled"){
            $(this).wrap("<span id='scol' class='inactive'></span>"); 
        };
    });
    

        $('#select_col_3 *').filter(':input').each(function(){        
        if($(this).attr('disabled') == "disabled"){
            $(this).wrap("<span id='bcol' class='inactive'></span>"); 
        };
    });
    
 
        $('#select_col_4 *').filter(':input').each(function(){        
        if($(this).attr('disabled') == "disabled"){
            $(this).wrap("<span id='bcol' class='inactive'></span>"); 
        };
    });
    

        $('#select_col_5 *').filter(':input').each(function(){        
        if($(this).attr('disabled') == "disabled"){
            $(this).wrap("<span id='kcol' class='inactive'></span>"); 
        };
    });
    


        $('#select_col_6 *').filter(':input').each(function(){        
        if($(this).attr('disabled') == "disabled"){
            $(this).wrap("<span id='kcol' class='inactive'></span>"); 
        };
    });
    


        $('#select_col_7 *').filter(':input').each(function(){        
        if($(this).attr('disabled') == "disabled"){
            $(this).wrap("<span id='kcol' class='inactive'></span>"); 
        };
    });
    
 
        $('#select_col_8 *').filter(':input').each(function(){        
        if($(this).attr('disabled') == "disabled"){
            $(this).wrap("<span id='kcol' class='inactive'></span>"); 
        };
    });
    
    $(document).on('click', '.inactive', function(){
        
		CalcFieldChecker($(this).children("select"));
       $(this).removeClass('inactive');
    });
	
function moveCaretToStart(inputObject)
  {
   if (inputObject.selectionStart)
{
 inputObject.setSelectionRange(0,0);
 inputObject.focus();
}
    
  }