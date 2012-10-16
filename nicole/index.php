<!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Forms Challenge</title>
  <meta name="viewport" content="width=device-width">
  
	<link rel="stylesheet" href="css/style.css">
  <link href='http://fonts.googleapis.com/css?family=Kreon:400,300,700' rel='stylesheet' type='text/css'>
  <script src="build/assets/js/modernizr.custom.11638.js" type="text/javascript"></script>
  
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
        
  <form action="<?php echo $_SERVER['build/PHP_SELF']; ?>" method="post" id="portfolio_form">
        
      <div id="wrapper">
        <div id="header">
           <h1>Sign up for Whoo!</h1>
           <h5>50 projects, 500 images, 10 videos, domain binding, and technical support.</h5>
        </div><!--end header-->
        <div id="content">
                
         <fieldset class="portfolio">
          <legend><span class="circle">1</span>First, name your portfolio</legend>
          <label for="title">Portfolio title</label>
          <input type="text" required name="title" id="title" />
          <label for="address" class="label-heading">Portfolio address</label>
          <input type="email" required id="email" name="email"/>
        </fieldset>
        
        <fieldset class="account">
          <legend><span class="circle">2</span>Now, enter your account details</legend>
          <label for="name">Name</label>
          <input type="text" required name="name" id="name" />
          <label for="email" class="label-heading">Email</label>
          <input type="email" required id="email" name="email">
          <label for="note" class="second-label">NOTE: we'll never share your email, promise.</label>
          <label for="password" class="label-heading">Password</label>
          <input type="password" required id="pw" name="password" />
        </fieldset>
        
        <fieldset class="payment">
          <legend><span class="circle">3</span>Finally, enter your payment information</legend>
          <div class="clear"></div>
          <input id="mastercard" class="credit_card_radio" type="radio" value="mastercard" name="credit_card_logos">
          <label id="mastercard_img" class="credit_card_label" for="mastercard">Mastercard</label>
          <input id="discover" class="credit_card_radio" type="radio" value="discover" name="credit_card_logos">
          <label id="discover_img" class="credit_card_label" for="discover">Discover</label>
          <input id="visa" class="credit_card_radio" type="radio" value="visa" name="credit_card_logos">
          <label id="visa_img" class="credit_card_label" for="visa">Visa</label>
          <input id="amex" class="credit_card_radio" type="radio" value="amex" name="credit_card_logos">
          <label id="amex_img" class="credit_card_label" for="amex">American Express</label>
          <label for="credit-card">Card Number</label>
          <input type="text" required inputmode="numeric" id="cc" name="credit-card" autocomplete="off" required pattern="[0-9]"/>
          <div class="clear"></div>
          <label id="security_img_back" class="security_img">Security Code Back</label>
          <label for="security-code" class="label-heading">Security Code</label>
          <input type="text" required inputmode="numeric" id="sc" name="security-code" />
          <div class="clear"></div>
          <label for="expiration-date" class="label-heading">Expiration Date</label>
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
      </div><!--end content-->
      </div><!--end wrapper-->
   </form>
    
    <?php
        }
    ?>

</body>


  <script src="build/assets/js/jquery-1.8.2.min.js" type="text/javascript">
  
     
  </script>
  
</html>
