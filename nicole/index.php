<!doctype html><head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title></title>
  <meta name="viewport" content="width=device-width">
  
	<link rel="stylesheet" href="css/style.css">
  <link href='http://fonts.googleapis.com/css?family=Kreon:400,300,700' rel='stylesheet' type='text/css'>
  <script src="build/assets/js/modernizr.custom.11638.js" type="text/javascript"></script>
  <script src="build/assets/js/jquery-1.8.2.min.js" type="text/javascript">
  
     
  </script>
  
</head>

<body>

    <?php
        // if the form has been submitted, process it - otherwise, just display the form normally
        if(isset($_POST['send'])){
            
            // pull the name out of the submitted for
            $name = strip_tags($_POST['name']);
            
            // pull the email out of the submitted form
            $emailFrom = strip_tags($_POST['email']);
            
            // who you're sending the email to (probably change this)
            $emailTo = "apprentices@freshtilledsoil.com";
            $subject = "Submission";
            
            // inset information into the body of the email
            $body = "Name: ".$name."\n";
            $body .= "Email: ".$emailFrom."\n";
            
            // set the email headers
            $headers = "From: ".$emailFrom."\n";
            $headers .= "Reply-To:".$emailFrom."\n";	
            
            $success = mail($emailTo, $subject, $body, $headers);
            
            // this is the message that gets displayed after submission
            if ($success){
                echo 'sent';
            } else {
                echo 'not sent';
            }
        
        } else {
    ?>
        
        <form action="<?php echo $_SERVER['build/PHP_SELF']; ?>" method="post">
        
        <div id="wrapper">
          <div id="header">
            <h1>Sign up for Whoo!</h1>
            <h5>50 projects, 500 images, 10 videos, domain binding, and technical support.</h5>
          </div><!--end header-->
          <div id="content">
            <div class="circle">
              <h4>1</h4>
            </div><!--end circle-->
            
            <fieldset class="portfolio">
  		<legend>First, name your portfolio</legend>
    	<label for="title">Portfolio title</label></br>
    	<input type="text" required name="title" id="title" /></br>
      <label for="address">Portfolio address</label></br>
      <input type="email" required id="email" name="email"/>
    </fieldset>
  	<div class="circle">
    	<h4>2</h4>
    </div><!--end circle-->
    <fieldset class="account">
    	<legend>Now, enter your account details</legend>
      <label for="name">Name</label></br>
      <input type="text" required name="name" id="name" /></br>
      <label for="email">Email</label></br>
      <input type="email" required id="email" name="email">
      <h4>NOTE: we'll never share your email, promise.</h4>
      <label for="password">Password</label></br>
      <input type="password" required id="pw" name="password" />
    </fieldset>
  	<div class="circle">
    	<h4>3</h4>
    </div><!--end circle-->
    <fieldset class="payment">
    	<legend>Finally, enter your payment information</legend>
    	<label for="credit-card">Card Number</label></br>
      <input type="text" required inputmode="numeric" id="cc" name="credit-card" /></br>
      	<ul class="cards" id="credit-card">
        	<li class="amex"></li>
          <li class="visa"></li>
          <li class="discover"></li>
          <li class="mastercard"></li>
        </ul><!--end credit-cards-->
      <label for="security-code">Security Code</label></br>
      <input type="text" required inputmode="numeric" id="sc" name="security-code" /></br>
      <label for="expiration-date">Expiration Date</label></br>
      <select name="month" class="month">
				<option value="mon" selected="selected">Month</option>
				<option value="jan">January</option>
				<option value="feb">February</option>
				<option value="mar">March</option>
				<option value="apr">April</option>
				<option value="may">May</option>
				<option value="jun">June</option>
				<option value="jul">July</option>
				<option value="aug">August</option>
				<option value="sep">September</option>
				<option value="oct">October</option>
				<option value="nov">November</option>
				<option value="dec">December</option>
			</select>
      <select name="year">
      	<option value="yr" <selected="selected">Year</option>
      	<option value="2012">2012</option>
        <option value="2013">2013</option>
        <option value="2014">2014</option>
        <option value="2015">2015</option>
        <option value="2016">2016</option>
        <option value="2017">2017</option>
        <option value="2018">2018</option>
      </select>
    </fieldset>
    </div><!--end payment-->
            
            <button type="submit" name="send">Create your portfolio</button>
            
        </form>
        
      </div><!--end content-->
      </div><!--end wrapper-->
    
    <?php
        }
    ?>

</body>
</html>
