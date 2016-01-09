<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>    --> 
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>    -->
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" /> 
    <title>Cialis | my Account</title>

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
 include 'accounts.php'; 
 
 ?>
  

    <!--Jumbo Image begin-->
<div class="jumbotron account_pic">
  <div class="container">
    <h1 class="welcome green">Welcome, James</h1>
    <span class="col-md-4 green">Welcome to your account. Here you can
order Cialis, check your order status and
edit account information.</span>
  </div>
</div>
<!--Jumbo image end-->

 <!--start breadcrumb-->
<div class="container-fluid" style="background: #F8F8F8;">
<div class="container">
<div class="row" style="padding-top: 10px;">
<div class="col-md-12">
 <ol class="breadcrumb" style="background:none !important;">
   <li><a href="index.php" class="grays">Home</a></li>
   <li><a href="my_account.php" class="grays">my Account</a></li>
 </ol>
 </div><!--end col-md-12-->
</div><!--end row-->
</div><!--end container-->
</div><!--end fluid-->
<!--end breadcrumbs--> 


<!--start account area-->  
<div class="container-fluid">
	<div class="container">
    <!--start box-->
    	<div class="row">

<div class="col-md-4">		
<div class="panel panel-default">
  <div class="panel-body">
    <div class="col-md-12 text-center">
        <h2 class="green">Create new order</h2>
        <i class="fa fa-shopping-cart fa-5x grays"></i>
        <p></p>
        <form class="form-group">
        <button type="button" id="Orders" class="btn btn-default buttons new_order btn-lg"><i class="fa fa-cart-plus"></i> Create order</button>
       </form>
    </div><!--end col-12-->
  </div>
</div><!--end panel div-->
</div><!--end box-->

<div class="col-md-4">		
<div class="panel panel-default">
  <div class="panel-body">
    <div class="col-md-12 text-center">
        <h2 class="green">Track existing order</h2>
        <i class="fa fa-truck fa-5x grays"></i>
        <p></p>
        <form class="form-group">
        <button type="submit" class="btn btn-default buttons btn-lg"><i class="fa fa-check"></i> Track order</button>
       </form>
    </div><!--end col-12-->
  </div>
</div><!--end panel div-->
</div><!--end box-->


<div class="col-md-4">		
<div class="panel panel-default">
  <div class="panel-body">
    <div class="col-md-12 text-center">
        <h2 class="green">Cancel order</h2>
        <i class="fa fa-remove fa-5x grays"></i>
        <p></p>
        <form class="form-group">
        <button type="submit" class="btn btn-default buttons btn-lg"><i class="fa fa-remove"></i> Cancel order</button>
       </form>
    </div><!--end col-12-->
  </div>
</div><!--end panel div-->
</div><!--end box-->

<div class="col-md-4">		
<div class="panel panel-default">
  <div class="panel-body">
    <div class="col-md-12 text-center">
        <h2 class="green">Customer Service</h2>
        <i class="fa fa-question-circle fa-5x grays"></i>
        <p></p>
        <form class="form-group">
        <button type="submit" class="btn btn-default buttons btn-lg"><i class="fa fa-phone"></i> Contact us</button>
       </form>
    </div><!--end col-12-->
  </div>
</div><!--end panel div-->
</div><!--end box-->


<div class="col-md-4">		
<div class="panel panel-default">
  <div class="panel-body">
    <div class="col-md-12 text-center">
        <h2 class="green">Edit Account</h2>
        <i class="fa fa-cog fa-5x grays"></i>
        <p></p>
        <form class="form-group">
        <button type="submit" class="btn btn-default buttons btn-lg"><i class="fa fa-cog"></i> Edit Account</button>
       </form>
    </div><!--end col-12-->
  </div>
</div><!--end panel div-->
</div><!--end box-->

<div class="col-md-4">		
<div class="panel panel-default">
  <div class="panel-body">
    <div class="col-md-12 text-center">
        <h2 class="green">Order history</h2>
        <i class="fa fa-gift fa-5x grays"></i>
        <p></p>
        <form class="form-group">
        <button type="submit" class="btn btn-default buttons btn-lg"><i class="fa fa-gift"></i> View orders</button>
       </form>
    </div><!--end col-12-->
  </div>
</div><!--end panel div-->
</div><!--end box-->


        </div><!--end row-->
    </div><!--end container-->
</div><!--end my account fluid-->

</div><!--end main div container fluid-->
  </div><!--end main container-->
  


<?php
/* including the footer */
include 'footer.php';
?>

  	
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