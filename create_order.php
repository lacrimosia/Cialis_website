<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>    --> 
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>    -->
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" /> 
    <title>Cialis | my Account -  Create new order</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	
	<!-- my style sheet-->
	<link rel="stylesheet" href="css/main_css.css">
    
    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
  </head>
  <body class="creates">
<!--   <div class="container-fluid" style="background: #000000; z-index: 1000;" data-spy="affix" data-offset-top="60" data-offset-bottom="200"> -->
 
    <?php 
 
 /* include the main navigation */
 include 'creates_nav.php'; 
 
 ?>
  

<!--start account area-->  
<div class="container-fluid">
	<!--<div class="container">-->
    <div>
	<div class="row">
    <!--start box-->
<div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs nav-justified" role="tablist">
    <li role="presentation" class="active step1"><a href="#prep" aria-controls="prep" role="tab" data-toggle="tab"><i class="fa fa-heartbeat whites"></i> Step 1: Prescription</a></li>
    <li role="presentation" class="ps"><a href="#product" aria-controls="product" role="tab" data-toggle="tab" >Step 2: Product selection</a></li>
    <li role="presentation"><a href="#shipping" aria-controls="shipping" role="tab" data-toggle="tab">Step 3: Shipping</a></li>
    <li role="presentation"><a href="#payment_amount" aria-controls="payment_amount" role="tab" data-toggle="tab">Step 4: Payment</a></li>
	 <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">Step 5: Review</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="prep"><!--this is where to change the tab-->
	  <!--Jumbo Image begin-->
      
 <!--start breadcrumb-->
<div class="container-fluid" style="background: #F8F8F8;">
<div class="container">
<div class="row" style="padding-top: 10px;">
<div class="col-md-8">
 <ol class="breadcrumb" style="background:none !important;">
   <li><a href="index.php" class="grays">Home</a></li>
   <li><a href="my_account.php" class="grays">my Account</a></li>
    <li><a href="create_order.php" class="active blacks">Create new order</a></li>
 </ol>
 </div><!--end col-md-8-->
 <div class="col-md-2">
  <button type="button" class="btn btn-default btn-danger previous pull-right btn-lg cancel"><i class="fa fa-times-circle whites" ></i> Cancel order</button>
  </div><!--end 2-->
   <div class="col-md-2">
  <button type="button" class="btn btn-default btn-warning previous pull-right btn-lg " id="helpme"><i class="fa fa-question-circle whites"></i> I need help</button>
  </div><!--end 2-->
</div><!--end row-->
</div><!--end container-->
</div><!--end fluid-->
<!--end breadcrumbs--> 
  
<div class="container">
<div class="panel panel-default">
  <div class="panel-body">
 
 <!-- start eccomerce breadcrumb-->
<div class="row">
	<div class="col-md-12">
        <img id="Image-Maps_prep" src="images/bread_prep.png" border="0" width="827" height="146" orgWidth="827" orgHeight="146" usemap="#Image-Maps_prep" class="center-block"/>
<map name="Image-Maps_prep" id="Image-Maps_prep">
<area  alt="Prescription"  href="JavaScript: linkTab('prep');" shape="rect" coords="21,79,168,129" style="outline:none;" target="_self"    />
<area  alt="Product"  href="JavaScript: linkTab('product');" shape="rect" coords="217,82,327,129" style="outline:none;" target="_self"     />
<area  alt="Shipping"  href="JavaScript: linkTab('shipping');" shape="rect" coords="375,79,489,133" style="outline:none;" target="_self"     />
<area  alt="Payment"  href="JavaScript: linkTab('payment_amount');" shape="rect" coords="531,79,649,133" style="outline:none;" target="_self"     />
<area  alt="Review" title="" href="JavaScript: linkTab('reviews');" shape="rect" coords="690,81,806,130" style="outline:none;" target="_self"     />
</map>
    </div><!--end col 12-->
</div><!--end row-->    
<hr>
<!--end eccommerce breadcrumbs--> 



<div class="panel panel-default">
  <div class="panel-heading panel_colors">
    <h3 class="panel-title" style="font-size: 1.5em; font-weight: bold;">Your Prescriber information</h3>
  </div>
  <div class="panel-body">
<p> Please enter information about your doctor.</p>

	<form class="form-group">
    
<div class="col-md-4">

  <div class="form-group input-group-lg">
    <label for="firstname" class="green">Doctor's first name*</label>
    <input type="text" class="form-control" id="doc_first_name" placeholder="Enter Doctor's first name">&nbsp; &nbsp;&nbsp; &nbsp;
  </div>
  </div><!--end 4-->
  
  <div class="col-md-3">
  <div class="form-group input-group-lg">
    <label for="midname" class="green">Doctor's last name* </label>
    <input type="text" class="form-control" id="doclast_name" placeholder="Enter Doctor's last name">&nbsp; &nbsp;&nbsp; &nbsp;
  </div>
   </div><!--end 4-->
   
    <div class="col-md-5"> 
  <div class="form-group input-group-lg">
    <label for="lastname" class="green">Doctor phone number* </label>
    <input type="text" class="form-control" id="docphone_num" placeholder="Ex: 555-555-5555">
  </div>
     </div><!--end 4-->
	 
  </div><!--end panel 1 body-->
  </div><!--end panel 1-->
  
  
  <div class="panel panel-default">
  <div class="panel-heading panel_colors">
    <h3 class="panel-title" style="font-size: 1.5em; font-weight: bold;">Your RX Information</h3>
  </div>
  <div class="panel-body">
	 <div class="col-md-12">
     <p>Please select the description that applies to you.</p>	 
 <select class="form-control">
  <option>Request Prescription from my doctor</option>
  <option>My doctor already sent it</option>
  <option>I have a paper RX that I will mail to you</option>
  <option>I don't have a prescription</option>
</select>
  </div><!--end 12-->
	 
<div class="col-md-12" style="padding-top:70px;">
<button type="button" class="btn btn-default btn-success next  btn-lg pull-right" id="product_select">Step 2: Product Selection <i class="fa fa-arrow-right whites"></i></button>
</div><!--end buttons-->	 
</form>
</div><!--end panel 1 body-->
  </div><!--end panel 1-->
  
  
</div><!--end panel body-->
</div><!--end panel main-->

</div><!--end prescription container-->
</div><!--end prescription information-->





<div role="tabpanel" class="tab-pane checkout_white" id="product"><!--starting the product selection-->


<!--start breadcrumb-->
<div class="container-fluid" style="background: #F8F8F8;">
<div class="container">
<div class="row" style="padding-top: 10px;">
<div class="col-md-8">
 <ol class="breadcrumb" style="background:none !important;">
   <li><a href="index.php" class="grays">Home</a></li>
   <li><a href="my_account.php" class="grays">my Account</a></li>
    <li><a href="create_order.php" class="active blacks">Create new order</a></li>
 </ol>
 </div><!--end col-md-6-->
 <div class="col-md-2">
  <button type="button" class="btn btn-default btn-danger previous pull-right btn-lg cancel "><i class="fa fa-times-circle whites" ></i> Cancel order</button>
 </div><!--end col md 2 -->
 <div class="col-md-2">
 	<button type="button" class="btn btn-default btn-warning previous pull-right btn-lg " id="helpme"><i class="fa fa-question-circle whites"></i> I need help</button>
 </div><!--end col md 2-->
</div><!--end row-->
</div><!--end container-->
</div><!--end fluid-->
<!--end breadcrumbs--> 



<div class="container">
<div class="panel panel-default">
  <div class="panel-body">
  
  
  <!-- start eccomerce breadcrumb-->
<div class="row">
	<div class="col-md-12">
  <img id="Image-Maps_prep" src="images/bread_prod.png" border="0" width="827" height="146" orgWidth="827" orgHeight="146" usemap="#Image-Maps_prod" class="center-block"/>
<map name="Image-Maps_prod" id="Image-Maps_prod">
<area  alt="Prescription"  href="JavaScript: linkTab('prep');" shape="rect" coords="21,79,168,129" style="outline:none;" target="_self"    />
<area  alt="Product"  href="JavaScript: linkTab('product');" shape="rect" coords="217,82,327,129" style="outline:none;" target="_self"     />
<area  alt="Shipping"  href="JavaScript: linkTab('shipping');" shape="rect" coords="375,79,489,133" style="outline:none;" target="_self"     />
<area  alt="Payment"  href="JavaScript: linkTab('payment_amount');" shape="rect" coords="531,79,649,133" style="outline:none;" target="_self"     />
<area  alt="Review" title="" href="JavaScript: linkTab('reviews');" shape="rect" coords="690,81,806,130" style="outline:none;" target="_self"     />
</map>
    </div><!--end col 12-->
</div><!--end row-->    
<hr>
<!--end eccommerce breadcrumbs-->

	<form class="form-group">
 <div class="col-md-12"> <h2><strong> Please select Free Trial or enter the number of pills.</strong></h2></div>
 
<div class="col-md-4">
<div class="panel panel-default">
<div class="panel-heading panel_colors">
      <h2 class="panel-title blacks text-center" style="font-size: 1.5em; font-weight: bold;">Free Trial</h2>
     </div><!--end panel heading-->
  <div class="panel-body">
    <div class="col-md-12 text-center">
        <p>You will receive 3 free pills</p>
        <img src="images/cialis_pic.jpg" class="center-block img-responsive"/>
        <p></p>
        <form class="form-group">
        <button type="button" id="select_trial" class="btn btn-default buttons new_order btn-lg"><i class="fa fa-cart-plus whites"></i>  Select Free Trial</button>
       </form>
    </div><!--end col-12-->
  </div>
</div><!--end panel div-->
  </div><!--end 6-->
  
  <div class="col-md-4">
  
  <div class="panel panel-default">
<div class="panel-heading panel_colors">
      <h2 class="panel-title blacks text-center" style="font-size: 1.5em; font-weight: bold;">Product Quantity</h2>
     </div><!--end panel heading-->
  <div class="panel-body">
    <div class="col-md-12 text-center">
    <b>Cialis 20mg Tablets</b>
        <p>Enter the amount of pills you want to order. </p>
        <img src="images/da_pill.png" class="img-responsive center-block"/>
        <p></p>
        <div class="alert alert-danger errortext2" role="alert" style="display:none;"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> Please enter amount.</div>
        <div class="form-group input-group-lg">
    <label for="midname" class="green">Enter Pill quantity: </label>
    <input type="text" class="form-control" id="qua" placeholder="Enter the quantity of pills.">
  </div>
    </div><!--end col-12-->
  </div>
</div><!--end panel div-->
   </div><!--end 6-->
   
  
	 <div class="col-md-4">
	 <div class="panel panel-default">
<div class="panel-heading panel_colors">
      <h2 class="panel-title blacks text-center" style="font-size: 1.5em; font-weight: bold;">Your Subtotal</h2>
     </div><!--end panel heading-->
  <div class="panel-body">
    <div class="col-md-12 text-center">
        <p>Here is your current subtotal.</p>
        <p></p>
        <form class="form-group">
        <label for="texts" class="green text-right">Free Shipping:     $0.00 </label>
        <label for="texts" class="green text-right">Discount:     10% </label>
        <h1 class="green" id="quan">$0.00</h1>
       </form>
    </div><!--end col-12-->
  </div>
</div><!--end panel div-->
  </div><!--end 12-->
	 
<div class="col-md-12" style="padding-top:70px;">
<button type="button" class="btn btn-default btn-danger previous  btn-lg " id="backtoOne"><i class="fa fa-arrow-left whites"></i> Back to Step 1: Prescription</button>

<button type="button" class="btn btn-default btn-success next  btn-lg pull-right" id="shipme">Step 3:Shipping <i class="fa fa-arrow-right whites"></i></button>
</div><!--end buttons-->	 
</form>
</div><!--end panel body-->
</div><!--end panel main-->

</div><!--end product container-->
 </div><!--end product selection-->
    
    
    
 <!--start shipping-->
    <div role="tabpanel" class="tab-pane" id="shipping">
    
<!--start breadcrumb-->
<div class="container-fluid" style="background: #F8F8F8;">
<div class="container">
<div class="row" style="padding-top: 10px;">
<div class="col-md-8">
 <ol class="breadcrumb" style="background:none !important;">
   <li><a href="index.php" class="grays">Home</a></li>
   <li><a href="my_account.php" class="grays">my Account</a></li>
    <li><a href="create_order.php" class="active blacks">Create new order</a></li>
 </ol>
 </div><!--end col-md-6-->
 <div class="col-md-2">
  <button type="button" class="btn btn-default btn-danger previous pull-right btn-lg cancel "><i class="fa fa-times-circle whites" ></i> Cancel order</button>
 </div><!--end col md 2 -->
 <div class="col-md-2">
 	<button type="button" class="btn btn-default btn-warning previous pull-right btn-lg " id="helpme"><i class="fa fa-question-circle whites"></i> I need help</button>
 </div><!--end col md 2-->
</div><!--end row-->
</div><!--end container-->
</div><!--end fluid-->
<!--end breadcrumbs--> 



<div class="container">
<div class="panel panel-default">
  <div class="panel-body">
  
  
  <!-- start eccomerce breadcrumb-->
<div class="row">
	<div class="col-md-12">
        <img id="Image-Maps_ship" src="images/bread_ship.png" border="0" width="827" height="146" orgWidth="827" orgHeight="146" usemap="#Image-Maps_prod" class="center-block"/>
<map name="Image-Maps_ship" id="Image-Maps_ship">
<area  alt="Prescription"  href="JavaScript: linkTab('prep');" shape="rect" coords="21,79,168,129" style="outline:none;" target="_self"    />
<area  alt="Product"  href="JavaScript: linkTab('product');" shape="rect" coords="217,82,327,129" style="outline:none;" target="_self"     />
<area  alt="Shipping"  href="JavaScript: linkTab('shipping');" shape="rect" coords="375,79,489,133" style="outline:none;" target="_self"     />
<area  alt="Payment"  href="JavaScript: linkTab('payment_amount');" shape="rect" coords="531,79,649,133" style="outline:none;" target="_self"     />
<area  alt="Review" title="" href="JavaScript: linkTab('reviews');" shape="rect" coords="690,81,806,130" style="outline:none;" target="_self"     />
</map>
    </div><!--end col 12-->
</div><!--end row-->    
<hr>
<!--end eccommerce breadcrumbs-->


<div class="panel panel-default">
  <div class="panel-heading panel_colors">
    <h3 class="panel-title" style="font-size: 1.5em; font-weight: bold;">Your Shipping information</h3>
  </div>
  <div class="panel-body">
<p> Cialis will ship via FedEx withing two business days.</p>
	<form class="form-group">
    
<div class="col-md-4">

  <div class="form-group input-group-lg">
    <label for="firstname" class="green">First name*</label>
    <input type="text" class="form-control" id="first_names" placeholder="Enter your first name">&nbsp; &nbsp;&nbsp; &nbsp;
  </div>
  </div><!--end 4-->
  
  <div class="col-md-2">
  <div class="form-group input-group-lg">
    <label for="midname" class="green">Middle Initial </label>
    <input type="text" class="form-control" id="middles" placeholder="middle Initial">&nbsp; &nbsp;&nbsp; &nbsp;
  </div>
   </div><!--end 4-->
  
  <div class="col-md-6">
  <div class="form-group input-group-lg">
    <label for="lastname" class="green">Last name* </label>
    <input type="text" class="form-control" id="last_names" placeholder="Enter your last name">&nbsp; &nbsp;&nbsp; &nbsp;
  </div>
   </div><!--end 6-->
   
    <div class="col-md-12"> 
  <div class="form-group input-group-lg">
    <label for="address" class="green">Address* </label>
    <input type="text" class="form-control" id="address1" placeholder="Enter Address">
  </div>
     </div><!--end 12-->
     
     <div class="col-md-4"> 
  <div class="form-group input-group-lg">
    <label for="city" class="green">City* </label>
    <input type="text" class="form-control" id="cities" placeholder="Enter City">
  </div>
     </div><!--end 4-->
     
     <div class="col-md-4"> 
  <div class="form-group input-group-lg">
    <label for="state" class="green">State* </label>
    <select class="form-control">
    <option value="Alabama">Alabama</option>
    <option value="Nevada">Nevada</option>
    <option value="Maryland">Maryland</option>
    <option value="Illinois">Illinois</option>
</select>
  </div>
     </div><!--end 4-->
     
     
     <div class="col-md-4"> 
  <div class="form-group input-group-lg">
    <label for="zipcode" class="green">Zipcode* </label>
    <input type="text" class="form-control" id="zips" placeholder="Enter Zipcode">
  </div>
     </div><!--end 4-->
     
     
     <div class="col-md-6"> 
  <div class="form-group input-group-lg">
    <label for="phone" class="green">Phone Number* </label>
    <input type="text" class="form-control" id="pn" placeholder="Enter phone number">
  </div>
     </div><!--end 6-->
     
       <div class="col-md-6"> 
  <div class="form-group input-group-lg">
    <label for="email" class="green">Email Address* </label>
    <input type="text" class="form-control" id="ea" placeholder="Ex: johndoe@yahoo.com">
  </div>
     </div><!--end 6-->
</div><!--end panel body-->
</div><!--end main panel-->	 
 
	 
<div class="col-md-12" style="padding-top:70px;">
<button type="button" class="btn btn-default btn-danger previous  btn-lg " id="backtotwo"><i class="fa fa-arrow-left whites"></i> Back to Step 2: Product Information</button>


<button type="button" class="btn btn-default btn-success next  btn-lg pull-right" id="product_select">Step 4: Payment Information <i class="fa fa-arrow-right whites"></i></button>
</div><!--end buttons-->	 
</form>
</div><!--end panel body-->
</div><!--end panel main-->

</div><!--end product container-->
	</div><!--end shipping-->
	





	
    <div role="tabpanel" class="tab-pane checkout_white" id="payment_amount"><!--start payment information--->
 <!--start breadcrumb-->
<div class="container-fluid" style="background: #F8F8F8;">
<div class="container">
<div class="row" style="padding-top: 10px;">
<div class="col-md-8">
 <ol class="breadcrumb" style="background:none !important;">
   <li><a href="index.php" class="grays">Home</a></li>
   <li><a href="my_account.php" class="grays">my Account</a></li>
    <li><a href="create_order.php" class="active blacks">Create new order</a></li>
 </ol>
 </div><!--end col-md-6-->
 <div class="col-md-2">
  <button type="button" class="btn btn-default btn-danger previous pull-right btn-lg cancel "><i class="fa fa-times-circle whites" ></i> Cancel order</button>
 </div><!--end col md 2 -->
 <div class="col-md-2">
 	<button type="button" class="btn btn-default btn-warning previous pull-right btn-lg " id="helpme"><i class="fa fa-question-circle whites"></i> I need help</button>
 </div><!--end col md 2-->
</div><!--end row-->
</div><!--end container-->
</div><!--end fluid-->
<!--end breadcrumbs--> 



<div class="container">
<div class="panel panel-default">
  <div class="panel-body">
  
  
  <!-- start eccomerce breadcrumb-->
<div class="row">
	<div class="col-md-12">
        <img id="Image-Maps_pay" src="images/bread_pay.png" border="0" width="827" height="146" orgWidth="827" orgHeight="146" usemap="#Image-Maps_pay" class="center-block"/>
<map name="Image-Maps_pay" id="Image-Maps_pay">
<area  alt="Prescription"  href="JavaScript: linkTab('prep');" shape="rect" coords="21,79,168,129" style="outline:none;" target="_self"    />
<area  alt="Product"  href="JavaScript: linkTab('product');" shape="rect" coords="217,82,327,129" style="outline:none;" target="_self"     />
<area  alt="Shipping"  href="JavaScript: linkTab('shipping');" shape="rect" coords="375,79,489,133" style="outline:none;" target="_self"     />
<area  alt="Payment"  href="JavaScript: linkTab('payment_amount');" shape="rect" coords="531,79,649,133" style="outline:none;" target="_self"     />
<area  alt="Review" title="" href="JavaScript: linkTab('reviews');" shape="rect" coords="690,81,806,130" style="outline:none;" target="_self"     />
</map>
    </div><!--end col 12-->
</div><!--end row-->    
<hr>
<!--end eccommerce breadcrumbs-->

	<form class="form-group">
 <div class="col-md-12"> <h2><strong> Payment Information</strong></h2></div>
 
<div class="col-md-8">
<div class="panel panel-default">
<div class="panel-heading panel_colors">
      <h2 class="panel-title blacks text-left" style="font-size: 1.5em; font-weight: bold;"><i class="fa fa-lock"></i> Secure Credit Card Payment </h2> 
     </div><!--end panel heading-->
  <div class="panel-body">
    <div class="col-md-12">
        <p>This is a secure 128-bit  SSL encrypted payment.</p>
        <button type="button" class="btn btn-default buttons btn-lg " id="insurance"> I am using Insurance instead</button>
        <p></p>
		
		<div class="form-group input-group-lg">
    <label for="cn" class="green text-left">Name on Card*</label>
    <input type="text" class="form-control" id="cc_name" placeholder="Enter name on card">
     <img src="images/cc.png" class="pull-right"/>
  </div><!--end credit card name-->
  
  <div class="form-group input-group-lg">
    <label for="ccn" class="green text-left form-inline">Card Number* </label>
    <input type="text" class="form-control" id="cc_number" placeholder="Enter card number">
   
  </div><!--end credit card number-->
  
   <div class="form-group input-group-lg">
    <label for="billing" class="green text-left">Billing Address*</label>
    <input type="text" class="form-control" id="cc_billing" placeholder="Enter billing address">
  </div><!--end billing address-->
 
  
    </div><!--end col-12-->
	
	   <div class="form-group input-group-lg  col-xs-4">
    <label for="cvc" class="green text-left">CVC*</label>
    <input type="text" class="form-control" id="cc_billing" placeholder="Ex: 252">
  </div><!--end cvc-->
  
     <div class="form-group input-group-lg  col-xs-4">
    <label for="cvc" class="green text-left">Expiration Month*</label>
    <select class="form-control">
    <option value="one">January</option>
    <option value="February">February</option>
    <option value="March">March</option>
    <option value="April">April</option>
    <option value="May">May</option>
    <option value="June">June</option>
    <option value="July">July</option>
    <option value="August">August</option>
    <option value="September">September</option>
    <option value="October">October</option>
    <option value="November">November</option>
    <option value="December">December</option>
</select>
  </div><!--end exp MM-->
  
    <div class="form-group input-group-lg  col-xs-4">
    <label for="cvc" class="green text-left">Expiration Year*</label>
      <select class="form-control ex_year">
      </select>
  </div><!--end exp dd-->
  
  </div>
</div><!--end panel div-->
  </div><!--end 10-->
  
  
  <!--start order total-->
  <div class="col-md-4">
  
  <div class="panel panel-default">
<div class="panel-heading panel_colors">
      <h2 class="panel-title blacks text-center" style="font-size: 1.5em; font-weight: bold;">Order Total</h2>
     </div><!--end panel heading-->
  <div class="panel-body">
    <div class="col-md-12 text-center">  
    <div class="col-xs-12">        
  <table class="table">
    <tbody>
      <tr>
        <td class="text-left"><b>Subtotal:</b></td>
        <td class="text-right"><b class="subtotals">$576.40</b></td>
      </tr>
      <tr>
        <td class="text-left">Quantity:</td>
        <td class="text-right final_quan"></td>
      </tr>
      <tr>
        <td class="text-left"><b>10%</b> Discount: </td>
        <td class="text-right disc"></td>
      </tr>
      <tr>
        <td class="text-left">Shipping: </td>
        <td class="text-right">FREE</td>
      </tr>
      <tr>
        <td class="text-left">Tax: </td>
        <td class="text-right">$0.00</td>
      </tr>
    </tbody>
  </table>
  <hr>
  <table class="table">
    <tbody>
      <tr>
        <td class="text-left"><h2><b>Total:</b></h2></td>
        <td class="text-right"><h2><b class="real_totals"></b></h2></td>
      </tr>
      <tr>
    </tbody>
  </table>
  </div><!--end col-xs-12-->
    </div><!--end col-12-->
  </div>
</div><!--end panel div-->
   </div><!--end 6-->
   
  
	
	 
<div class="col-md-12" >
<button type="button" class="btn btn-default btn-danger previous  btn-lg " id="backtothree"><i class="fa fa-arrow-left whites"></i> Back to Step 3: Shipping Information</button>

<button type="button" class="btn btn-default btn-success next  btn-lg pull-right" id="shipme">Step 5: Review Information <i class="fa fa-arrow-right whites"></i></button>
</div><!--end buttons-->	 
</form>
</div><!--end panel body-->
</div><!--end panel main-->

</div><!--end product container-->  
 </div><!--end payment information-->
    
    
    
	
	
	
	<div role="tabpanel" class="tab-pane" id="reviews"><!-- start reviews-->
  <!--start breadcrumb-->
<div class="container-fluid" style="background: #F8F8F8;">
<div class="container">
<div class="row" style="padding-top: 10px;">
<div class="col-md-8">
 <ol class="breadcrumb" style="background:none !important;">
   <li><a href="index.php" class="grays">Home</a></li>
   <li><a href="my_account.php" class="grays">my Account</a></li>
    <li><a href="create_order.php" class="active blacks">Create new order</a></li>
 </ol>
 </div><!--end col-md-6-->
 <div class="col-md-2">
  <button type="button" class="btn btn-default btn-danger previous pull-right btn-lg cancel "><i class="fa fa-times-circle whites" ></i> Cancel order</button>
 </div><!--end col md 2 -->
 <div class="col-md-2">
 	<button type="button" class="btn btn-default btn-warning previous pull-right btn-lg " id="helpme"><i class="fa fa-question-circle whites"></i> I need help</button>
 </div><!--end col md 2-->
</div><!--end row-->
</div><!--end container-->
</div><!--end fluid-->
<!--end breadcrumbs--> 



<div class="container">
<div class="panel panel-default">
  <div class="panel-body">
  
  
  <!-- start eccomerce breadcrumb-->
<div class="row">
	<div class="col-md-12">
<img id="Image-Maps_review" src="images/bread_review.png" border="0" width="827" height="146" orgWidth="827" orgHeight="146" usemap="#Image-Maps_review" class="center-block"/>
<map name="Image-Maps_review" id="Image-Maps_review">
<area  alt="Prescription"  href="JavaScript: linkTab('prep');" shape="rect" coords="21,79,168,129" style="outline:none;" target="_self"    />
<area  alt="Product"  href="JavaScript: linkTab('product');" shape="rect" coords="217,82,327,129" style="outline:none;" target="_self"     />
<area  alt="Shipping"  href="JavaScript: linkTab('shipping');" shape="rect" coords="375,79,489,133" style="outline:none;" target="_self"     />
<area  alt="Payment"  href="JavaScript: linkTab('payment_amount');" shape="rect" coords="531,79,649,133" style="outline:none;" target="_self"     />
<area  alt="Review" title="" href="JavaScript: linkTab('reviews');" shape="rect" coords="690,81,806,130" style="outline:none;" target="_self"     />
</map>
    </div><!--end col 12-->
</div><!--end row-->    
<hr>
<!--end eccommerce breadcrumbs-->



<form class="form-group">
 <div class="col-md-12"> <h2><strong> Review Order</strong></h2></div>
 
<div class="col-md-8">
<div class="panel panel-default">
<div class="panel-heading panel_colors">
      <h2 class="panel-title blacks text-left" style="font-size: 1.5em; font-weight: bold;">Final Order Information </h2> 
     </div><!--end panel heading-->
  <div class="panel-body">
    <div class="col-md-12">
        <p>This is the final step in the ordering process. Please review your information. If you need to edit info, please go back and change your information. Once submitted, you cannot go back and change your information. </p>

<div class="col-md-6">
<div class="panel panel-default" style="height: 200px;">
  <div class="panel-heading" style="background: #DBDBDB !important; color: #ffffff;" >
    <h3 class="panel-title blacks"><b>Billing details</b></h3>
  </div>
  <div class="panel-body">
      <strong class="FirstName_1">James Anderson</strong><br>
                            <span id="addresss">8990 Grand Teton</span><br>
                            <span>Las Vegas</span><br>
                           <span> NV</span><br>
                            <span><strong>89102</strong></span><br>
  </div>
  </div><!--end panel main-->
</div><!--end col-sm-6-->


<div class="col-md-6">
<div class="panel panel-default" style="height: 200px;">
  <div class="panel-heading" style="background: #DBDBDB !important; color: #ffffff;">
    <h3 class="panel-title blacks"><b>Product Selection</b></h3>
  </div>
  <div class="panel-body">
    <span> <strong>Quantity:</strong> 25</span><br>
                           <span> <strong>Prescription:</strong> 20mg</span><br>
                           <span> <strong>RX #:</strong> 237-458-Rn15</span><br>
  </div>
  </div><!--end panel main-->
</div><!--end col-sm-6-->


<div class="col-md-6">
<div class="panel panel-default" style="height: 200px;">
  <div class="panel-heading" style="background: #DBDBDB !important; color: #ffffff;">
    <h3 class="panel-title blacks"><b>Payment Information</b></h3>
  </div>
  <div class="panel-body">
   <span> <strong>Payment Type:</strong> AMEX</span><br>
                            <span><strong>Card Name:</strong> James Anderson</span><br>
                            <span><strong>Card Number:</strong>************5332</span><br>
                           <span> <strong>Exp Date:</strong> 09/2020</span><br>
  </div>
  </div><!--end panel main-->
</div><!--end col-sm-6-->


<div class="col-md-6">
<div class="panel panel-default" style="height: 200px;">
  <div class="panel-heading" style="background: #DBDBDB !important; color: #ffffff;">
    <h3 class="panel-title blacks"><b>Shipping Information</b></h3>
  </div>
  <div class="panel-body">
   <span> <strong>James Anderson</strong></span><br>
                            <span><strong>8990 Grand Teton</strong></span><br>
                            <span><strong>Las Vegas</strong> No</span><br>
                            <span><strong>NV</strong></span><br>
                            <span><strong>89102</strong></span>
  </div>
  </div><!--end panel main-->
</div><!--end col-sm-6-->
 
  
    </div><!--end col-12-->
  </div>
</div><!--end panel div-->
  </div><!--end 10-->
  
  
  <!--start order total-->
  <div class="col-md-4">
  
  <div class="panel panel-default">
<div class="panel-heading panel_colors">
      <h2 class="panel-title blacks text-center" style="font-size: 1.5em; font-weight: bold;">Order Total</h2>
     </div><!--end panel heading-->
  <div class="panel-body">
    <div class="col-md-12 text-center">  
    <div class="col-xs-12">        
  <table class="table">
    <tbody>
      <tr>
        <td class="text-left"><b>Subtotal:</b></td>
        <td class="text-right"><b class="subtotals">$576.40</b></td>
      </tr>
      <tr>
        <td class="text-left">Quantity:</td>
        <td class="text-right final_quan"></td>
      </tr>
      <tr>
        <td class="text-left"><b>10%</b> Discount: </td>
        <td class="text-right disc"></td>
      </tr>
      <tr>
        <td class="text-left">Shipping: </td>
        <td class="text-right">FREE</td>
      </tr>
      <tr>
        <td class="text-left">Tax: </td>
        <td class="text-right">$0.00</td>
      </tr>
    </tbody>
  </table>
  <hr>
  <table class="table">
    <tbody>
      <tr>
        <td class="text-left"><h2><b>Total:</b></h2></td>
        <td class="text-right"><h2><b class="real_totals"></b></h2></td>
      </tr>
      <tr>
      <tr>
      <td><button type="button" class="btn btn-success btn-lg btn-block next center-block" id="place_orders" style="width: 178% !important;">Place Order</button></td>
      </tr>
    </tbody>
  </table>
  </div><!--end col-xs-12-->
    </div><!--end col-12-->
  </div>
</div><!--end panel div-->
   </div><!--end 6-->
   
	
	 
<div class="col-md-12" style="padding-top:70px;">
<button type="button" class="btn btn-default btn-danger previous  btn-lg " id="backtoOne"><i class="fa fa-arrow-left whites"></i> Back to Step 4: Payment Information</button>


</div><!--end buttons-->	 

</div><!--end panel body-->
</div><!--end panel main-->

</div><!--end product container-->    
    
    
    
    </div><!--end reviews-->
 
  </div>

</div><!--end tab-->
	

        </div><!--end row-->
    </div><!--end container-->
</div><!--end my account fluid-->

</div><!--end main div container fluid-->
  </div><!--end main container-->
  
  
<?php
/* including the footer */
include 'footer.php';
?>

    
 <!-- breadcrumbs function -->   
<script>
//change tabs on picture of breadcrumbs
function linkTab(tab){
        $('.nav-tabs a[href="#' + tab + '"]').tab('show');
      }; 
</script>
  	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<!-- 	<script src="js/text_color_change.js"></script> -->
        <script src="js/main_js.js"></script>
		<script src="js/auto_complete.js"></script>
        <script type="text/javascript" src="js/jssor.js"></script>
    <script type="text/javascript" src="js/jssor.slider.js"></script>
  </body>
</html>