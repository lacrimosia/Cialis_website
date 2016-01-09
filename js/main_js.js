/* Author: Shatilla Prayer
   Date: March 2015
   Copyright: 2015 All Rights Reserved
*/

$( document ).ready(function() {
	
	
$('.dropdown').on('show.bs.dropdown', function(e){
    $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
  });

	
	 $('.dropdown').on('hide.bs.dropdown', function(e){
    $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
  });
  
  $('.errortext, .errortext1').hide();
  
  //$('.welcome').text("Welcome, James");
  
 $('.logins').click(function(){ 
 var email = $('#user').val();
	var pass1 = $('#password').val();
    
	if(email == "james@gmail.com" && pass1 == "1234"){
      location.href="my_account.php";
	}else{
		$('.errortext1').show().fadeIn().fadeOut(2000);
	}
	
 });
 
 
 // order page
	$('.new_order').click(function(){
		location.href="create_order.php";
	});
	

// change tabs 	
/*	$('#product_select').click(function(){
		activaTab('product');
		$('.ps').css({
			    "background-color"  :  "#073A0B",
		});
		
		$('.ps a').css({
							"color" : "#ffffff"
		});
	});
	
	
$('#paymentS').click(function(){
		activaTab('payment_amount');
	});
	
	
	//show tabs
	function activaTab(tab){
        $('.nav-tabs a[href="#' + tab + '"]').tab('show');
      };*/
	 
 
	  
	  
var $tabs = $('li');
	  
	  $('#product_select, #shipme').on('click', function() {
       nextTab();
});


$('#backtoOne, #backtotwo, #backtothree').on('click', function() {
       prevTab();
});


// go to the next tab function
var nextTab = function(){
	 $tabs.filter('.active').next('li').find('a[data-toggle="tab"]').tab('show');
	 //$tabs.find('a[data-toggle="tab"]').css('display', 'none');
	 
	//$tabs.filter('.active').find('a[data-toggle="tab"]').addClass('tabe');
}

// go to previous tab
var prevTab = function(){
	$tabs.filter('.active').prev('li').find('a[data-toggle="tab"]').tab('show');
}
	  
// cancel order

$('.cancel').click(function(){
	location.href='my_account.php';
});


$('#shipme').click(function(){
	if($('#qua').val() == ""){
		$('.errortext2').fadeIn().fadeOut(3500);
		return;
	}
});

//place order
$('#place_orders').click(function(){
	location.href="complete.php";
});

// hide the processing div on complete.php
$('.done').hide();

setTimeout(function() {
   // $('.processing, .bottoms').fadeOut('slow');
	//$('.done').fadeIn('3000');
	$('.titls').hide().fadeIn('6000').html('<h2><i class="fa fa-check  center-block" style="color: #449D44 !important"></i></h2><p></p><h2 class="green"> Thank you, James!</h2>');
	$('.receiveds').hide().fadeIn('6000').html('<h3>Your order has been received.</h3>');
	$('.anime').hide().fadeIn('6000').html('<h2>Your confirmation # is: <strong>CX234054</strong></h2><hr>');
	$('.asssi').hide().fadeIn('6000').html('<span>A copy of your order has been sent to your email. You can check the status of your order by clicking <a href="#">here</a>.</span><p>Thanks for ordering with Cialis.</p><hr> <a href="my_account.php" class="green"><i class="fa fa-user"></i>  Back to my Account</a>');
	$('.mytitles').hide().fadeIn('6000').html('Order Complete');
}, 3000); // <-- time in milliseconds

//default values
$('.final_quan').text(0);
		$('.disc').text("-$0.00");
		$('.real_totals, .subtotals').text('$ 0.00');


// update value on keyup
$('#qua').bind('input propertychange', function() {
     // $("#yourBtnID").hide();

      if(this.value.length){
        var amounts =  $("#qua").val();
		var pill_cost = 60.15;
		var subTotal = amounts*pill_cost;
		var mySub = subTotal.toFixed(2);
		var discounts = mySub*parseFloat(0.10);
		var final_disc = discounts.toFixed(2);
		var finalAmounts = mySub - final_disc;
		var final_Amounts_ready = finalAmounts.toFixed(2);
		
		$("#quan").text("$"+mySub);
		$('.subtotals').text("$"+mySub);
		$('.final_quan').text(amounts);
		$('.disc').text("-$"+final_disc);
		$('.real_totals').text('$'+final_Amounts_ready);
      }

	  // grab this value at the end
	 
	  console.log(discounts);
});

//empty
//$('#doc_first_name').val("");

// input
$('input').keyup(function() {
	// doctors first name
 //$('.FirstName_1').text($('#first_names').val() + " " + $('#middles').val() + " " + $('#last_names').val());
// $('#addresss').text($('#address1').val());
});

// populate the years data
for(var x=2015; x<2031; x++){
$('.ex_year').append('<option>'+x+'</option');
}

// clear on load
$('#qua, #cc_name, #cc_billing, #cc_number').val('');

$('#qua').keyup(function(e){

	if(this.value.length == 0 || e.keyCode == 8){
		subTotal = 0;
		$("#quan").text('$0.00');
		e.preventDefault();
	}
});



});