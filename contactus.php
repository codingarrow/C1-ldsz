<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sales Rain Plaza</title>
<link href="style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
  
  /* Online Inquiry  */
  function validateFormOnSubmit1(theForm) {
	  var reason = "";
	
	  reason += validateform1(theForm.contactname);
	  reason += validateform2(theForm.contactphone);
	  reason += validateform3(theForm.contactmsg);
	  reason += validateEmail(theForm.contactemail);
	  

	  if (reason != "") {
		alert("Some fields need to be filled up:\n" + reason);
		return false;
	  }
	  return true;
	}
	
	function validateEmpty(fld) {
		var error = "";
	 
		if (fld.value.length == 0) {
			fld.style.background = 'Yellow'; 
			error = "The required field has not been filled in.\n"
		} else {
			fld.style.background = 'White';
		}
		return error;  
	}

	function validateform1(fld) {
		var error = "";
		var illegalChars = /\W/; // allow letters, numbers, and underscores
	 
		if (fld.value == "") {
			fld.style.background = 'Yellow'; 
			error = "Please enter your name.\n";
		} else {
			fld.style.background = 'White';
		}
		return error;
	}
	
	function validateform2(fld) {
		var error = "";
		var illegalChars = /\W/; // allow letters, numbers, and underscores
	 
		if (fld.value == "") {
			fld.style.background = 'Yellow'; 
			error = "Please enter your contact number.\n";
		} else {
			fld.style.background = 'White';
		}
		return error;
	}
	
	function trim(s)
	{
	  return s.replace(/^\s+|\s+$/, '');
	}
	
	function validateEmail(fld) {
		var error="";
		var tfld = trim(fld.value);                        // value of field with whitespace trimmed off
		var emailFilter = /^[^@]+@[^@.]+\.[^@]*\w\w$/ ;
		var illegalChars= /[\(\)\<\>\,\;\:\\\"\[\]]/ ;
	   
		if (fld.value == "") {
			fld.style.background = 'Yellow';
			error = "You didn't enter an email address.\n";
		} else if (!emailFilter.test(tfld)) {              //test email for illegal characters
			fld.style.background = 'Yellow';
			error = "Please enter a valid email address.\n";
		} else {
			fld.style.background = 'White';
		}
		return error;
	}


	function validateform3(fld) {
		var error = "";
		var illegalChars = /\W/; // allow letters, numbers, and underscores
	 
		if (fld.value == "") {
			fld.style.background = 'Yellow'; 
			error = "Please enter your message.\n";
		} else {
			fld.style.background = 'White';
		}
		return error;
	}

</script>	


</head>

<?php
                
	if(isset($_POST['sub1']))
    {
				$bus_name = $_POST['contactname'];
				$bus_email = $_POST['contactemail'];
				$bus_phone = $_POST['contactphone'];
				$bus_message = $_POST['contactmsg'];
				
				
				//$to      =  $send_email_to;
				//$to = "ivy@salesrain.com";
				//$to = "inquiry@salesrain.com";
				$to = "ruel@salesrain.com, teleshopping@salesrain.com";
				$subject = 'Salesrainplaza.com - Online Inquiries';
				$headers  = "MIME-Version: 1.0\n";
				$headers .= "Content-type: text/html\r\n";
				$headers .= 'From: ' . $bus_email . "\r\n";
				$message = '<br>Sender Details:<br><br>
							Name: ' . $bus_name . '<br>
							Phone: '.$bus_phone.'<br />
							Email: '.$bus_email.'<br />
							Message: '.$bus_message.'<br />';
							
				mail($to, $subject, $message, $headers);
						  
				if(mail)
				{  
					//$msg = "Thank you for your interest in Sales Rain BPO <br>Our representative will contact you shortly.";  ?>
					
					<script language="javascript">
							alert('<?php echo "Thank you for your interest in Salesrain Plaza. Our representative will contact you shortly."; ?>');
							window.location="http://salesrainplaza.com";
					</script>	                
	<?php               
				}
	}
?>

<body>
<div class="top">
	<div class="topa"><div class="topb">
    	
        <div class="tcall tar t2">Call us now! <span class="t2a">+1-858-240-4079</span></div>
        <div class="tlogo"><a href="index.html"><img src="images/salesrainplazalogo.png" width="320" height="65" /></a></div>
        
      <div class="tnav">
        	<div class="tnava"><img src="images/navdiv.jpg" width="2" height="50" /></div>
        	<div class="tnavb">
            	<nav>
                <ul id="nav" class="t3">
                	<li><a href="index.html">HOME</a></li>
                    <li><a href="products.html">PRODUCTS</a></li>
                    <li><a href="aboutus.html">ABOUT US</a></li>
                    <li><a href="contactus.html">CONTACT US</a></li>
                </ul>
            	</nav>
            </div>
      </div>
    </div></div>
</div>
<div class="mid">
	<div class="mida"><div class="midb">
	  <div class="midc">
       	  
          <div class="midl">
          <div class="banli">
            	<div class="banlb"><a href="flowers.html"><img src="images/flower_s.jpg" width="300" height="67" /></a></div>
                <div class="banlb"><a href="hotandcold.html"><img src="images/chocolate_s.jpg" width="300" height="67" /></a></div>
                <div class="banlb"><a href="businessidentity.html"><img src="images/business_s.jpg" width="300" height="67" /></a></div>
                <div class="banlb"><a href="virtualassistant.html"><img src="images/va_s.jpg" width="300" height="67" /></a></div>
                <div class="banlb"><a href="eload.html"><img src="images/eload_s.jpg" width="300" height="67" /></a></div>
                <div class="banlc"><a href="electronics.html"><img src="images/electronics_s.jpg" width="300" height="66" /></a></div>
            </div>
            	<div class="midlt t4">ON SALE ITEMS</div>
                <div class="midlc"><div class="midlca"><div class="midlcb">
                	
                    
                    <div class="nah">
                    	<div class="na tac"><a href="b9.html"><img src="images/flowers/b9t.jpg" width="180" height="250" /></a></div>
                    	<div class="nab tac t5">
                        Precious Moments <span class="t5a">94.<sup>95</sup></span><br />
                        	<span class="t7">Gold Member Price:</span> <span class="t5a">79.<sup>95</sup></span><br />
                        <a href="b9.html">More Info</a>
                        </div>
                    </div>
                  	                   
                    <div class="nah">
                    	<div class="na tac"><a href="b11.html"><img src="images/flowers/b11t.jpg" width="180" height="250" /></a></div>
                    	<div class="nab tac t5">
                        Charming Elegance <span class="t5a"> 94.<sup>95</sup></span><br />
                        	<span class="t7">Gold Member Price:</span> <span class="t5a">82.<sup>95</sup></span><br />
                        <a href="b11.html">More Info</a>
                      </div>
                    </div>
                    <div class="nah">
                    	<div class="na tac"><a href="b15.html"><img src="images/flowers/b15t.jpg" width="180" height="250" /></a></div>
                    	<div class="nab tac t5">
                        Early Years <span class="t5a">64.<sup>95</sup></span><br />
                        <span class="t7">Gold Member Price:</span> <span class="t5a">54.<sup>95</sup></span><br />
                        <a href="b15.html">More Info</a>
                        </div>
                    </div>
                    <div class="nah">
                    	<div class="na tac"><a href="b10.html"><img src="images/flowers/b10t.jpg" width="180" height="250" /></a></div>
                    	<div class="nab tac t5">
                      Love Me <span class="t5a">94.<sup>95</sup></span><br />
                        	<span class="t7">Gold Member Price:</span> <span class="t5a">79.<sup>95</sup></span><br />
                        	<a href="b10.html">More Info</a>
                        </div>
                    </div>
                </div></div></div>
            </div>
            <div class="mids"></div>
          <div class="midrh">
          <div class="midr">
            	<div class="midrt tal t4a"> CONTACT US</div>
                <div class="midrc"><div class="midrca">
                  <div class="midrc2c t5">
               	  Please fill out the form below and we will respond to you as soon as possible.  Thank you!<br /><br /><br />
                  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return validateFormOnSubmit1(this)" name="form2" id="form2">
					  <div class="cul t5">
					  <strong>What's your name?</strong><br />
					  <input type="text" name="contactname" id="contactname" class="f3 t5c" /><br />
					  
					  <strong>Your email</strong><br />
					  <input type="text" name="contactemail" id="contactemail" class="f3 t5c" /><br />
					  
					  <strong>Phone Number?</strong><br />
					  <input type="text" name="contactphone" id="contactphone" class="f4 t5c" /><br />
					  
					  <strong>What can we help you with?</strong><br />
					  <textarea name="contactmsg" id="contactmsg" class="f5 t5c"></textarea><br />
					  
					  <input type="submit" class="sn" value="Send" name="sub1" style="border-style: none;"><!--a href="#" class="sn">send</a-->
					  </div>
                  </form>
                  <div class="cur">
                  	<div class="cura">
                  	  <div class="curb">
                    	<strong><span class="t10">Sales Rain Plaza</span></strong><br /><br />
                    	<strong>US Number:</strong> +1-858-240-4079<br /><br />
                    <strong>Email:</strong> teleshopping@salesrain.com<br />
                  	  </div></div>
                  </div>
                  
                 </div></div></div>

          </div> 
         
          </div>        
        </div>
	</div></div>
</div>
<div class="bot"><div class="bota"><div class="botb">
	<div class="botl">
    	<div class="botlt"><img src="images/callus.jpg" width="300" height="160" /></div>
        <div class="botlb">
        	<div class="botlba tal t3">Email: <a href="mailto: info@salerainplaza.com">teleshopping@salerain.com</a></div>
        </div>
    </div>
    <div class="bots"></div>
    <div class="botr">
    	<div class="botrt"><div class="bc"><a href="http://salesrainvas.com"><img src="images/vaad.jpg" width="600" height="120" /></a></div></div>
        <div class="botrb">
        	<div class="botrba tal t3">Sales Rain Plaza  © 2013  <a href="privacy.html">Privacy Notice</a> | <a href="conditionofuse.html">Conditions of Use</a></div>
        </div>
    </div>
</div></div></div>
</body>
</html>
