<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">
        
    <title>:: Sales Rain Leads Database ::<?php //echo $title; ?></title>

    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="apple-touch-icon-precomposed" href="/apple-touch-icon-precomposed.png">
       
	<!--link rel="stylesheet" href="<?php //echo base_url(); ?>css/styles.css"-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">
    <!--link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.css"-->       
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap-responsive.css">     
    
    <?php            
        $combined_css = NULL;
        foreach($combine_css as $item):
            $combined_css .= '/' . $item;
        endforeach;
        
        if ($combined_css):
    ?>        
        <link rel="stylesheet" href="<?php echo base_url(); ?>combine/css/<?php echo $combined_css; ?>">
    <?php endif; ?>

    <?php foreach($css as $item): ?>
        <link rel="stylesheet" href="<?php echo base_url() . 'css/' . $item; ?>">
    <?php endforeach ?>
        
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>js/jquery.js"><\/script>')</script>

    <script src="<?php echo base_url(); ?>js/bootstrap/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap/transition.js"></script>

    <?php            
        $combined_js = NULL;
        foreach($combine_top_js as $item):
            $combined_js .= '/' . $item;
        endforeach;
        
        if ($combined_js):
    ?>                
        <script src="<?php echo base_url(); ?>combine/js<?php echo $combined_js; ?>"></script>        
    <?php endif; ?>
    
    <?php foreach($top_js as $item): ?>
        <script src="<?php echo base_url() . 'js/' . $item; ?>"></script>
    <?php endforeach ?>        
        
	<script src="<?php echo base_url(); ?>js/modernizr.js"></script>
	
	<script type="text/javascript" src="<?php echo base_url()?>js/city_state.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>js/prototype.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>js/lightbox.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>js/scriptaculous/scriptaculous.js?load=effects,dragdrop"></script>
	
	<script src="http://salesrainplaza.com/srplazaCRM/js/jquery-ui-1.8.18.custom.min.js"></script>
	<link rel="stylesheet" href="http://salesrainplaza.com/srplazaCRM/css/jquery-ui/jquery-ui-1.8.18.custom.css">
	
	<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>css/lightbox.css" />
	
	<style type="text/css">
		.hiddenMenu {display: none;}
		.visibleMenu {display: inline;}
	</style>
    
    <!--script src="<?=base_url()?>js/tinymce/tinymce.min.js" type="text/javascript"></script>
	<script language="javascript" type="text/javascript">
        tinyMCE.init({
            selector : "textarea",
            theme_advanced_toolbar_align : "left",
            theme_advanced_resize_horizontal : false,
            theme_advanced_resizing : true
        });
        
    </script-->
    
    <script type="text/javascript" src="http://localhost/srplazaCRM/js/ckeditor/ckeditor.js"></script>  

	<script type="text/javascript">
		var lastDiv = "";
		function showDiv(divName) {
			// hide last div
			if (lastDiv) {
				document.getElementById(lastDiv).className = "hiddenMenu";
				document.getElementById('shirtsize' + lastDiv).disabled = true;

			}
			//if value of the box is not nothing and an object with that name exists, then change the class
			if (divName && document.getElementById(divName)) {
				document.getElementById(divName).className = "visibleMenu";
				document.getElementById('shirtsize' + divName).disabled = false;
				lastDiv = divName;
			}
		}
	</script>
	
	<script type="text/javascript">
		function updatebox()
		{
			/*if(document.getElementById('cb2').checked == true) {
			
				//alert("Hellow");
				var Maddr1 = document.getElementById('member_address1');
				var Maddr2 = document.getElementById('member_address2');
				var Mcity = document.getElementById('member_city');
				var Mstate = document.getElementById('member_state');
				var Mcountry = document.getElementById('member_country');
				var Mzip = document.getElementById('member_zip');
				
				var Baddr1 = document.getElementById('billing_address1');
				var Baddr2 = document.getElementById('billing_address2');
				var Bcity = document.getElementById('billing_city');
				var Bstate = document.getElementById('billing_state');
				var Bcountry = document.getElementById('billing_country');
				var Bzip = document.getElementById('billing_zip');
				
				Baddr1.value = Maddr1.value;
				Baddr2.value = Maddr2.value;
				Bcity.value = Mcity.value;
				Bstate.options[Bstate.selectedIndex].value = Mstate.options[Mstate.selectedIndex].value;
				Bcountry.value = Mcountry.value;
				Bzip.value = Mzip.value;

			}
			//else if(document.getElementById('cb2').checked == 0) {
			else
			{
				billing_address1.value = '';
				billing_address2.value = '';
				billing_city.value = '';
				billing_zip.value = '';
				billing_state.value = '';
				
			}*/
			
		if(document.form2.same_chk.checked){
		
			var Cstate = document.getElementById('ca_state');
			var CBstate = document.getElementById('cabill_state');
			var Ustate = document.getElementById('us_state');
			var UBstate = document.getElementById('usbill_state');

			document.form2.billing_address1.value=document.form2.member_address1.value;
			document.form2.billing_address2.value=document.form2.member_address2.value;
			document.form2.billing_zip.value=document.form2.member_zip.value;
			document.form2.billing_city.value=document.form2.member_city.value;
			document.form2.billing_country.value=document.form2.member_country.value;
			//document.form2.billing_state.value=document.form2.member_state.value;
		/*	document.form2.Baddr2.value=document.form1.add2.value;
			document.form2.Bcity.value=document.form1.city.value;*/
		
			/*if(document.form2.us_state.value != '')
			{
				document.form2.usbill_state.value=document.form2.us_state.value;
			}
			
			if(document.form2.ca_state.value != '')
			{
				document.form2.cabill_state.value=document.form2.ca_state.value;
			}*/
			/*var ustate = document.getElementById('us_state');
			var len_ustate = ustate.options.length;
			var castate = document.getElementById('ca_state');
			var len_castate = castate.options.length;*/
			
			//if(len_ustate > 0)
			if(document.form2.ca_state.value != '')
			{
				//alert("hellow");
				/*for(i=document.form2.ca_state.options.length-1;i>=0;i--)
				{
					if(document.form2.ca_state.options[i].selected)
					document.form2.cabill_state.options[i].selected=true;
				}*/
				//document.getElementById(cabill_state).style.visibility="visible";
				//document.form2.cabill_state.value=document.form2.ca_state.value;
				//UBstate.options[UBstate.selectedIndex].value = Ustate.options[Ustate.selectedIndex].value;
				
				var i;
				document.getElementById("cabill_state").innerHTML="";
				for(i=0;i<document.getElementById("ca_state").options.length;i++)
				{
					var o = new Option();
					o.text = document.getElementById("ca_state").options[i].text;
					o.value = document.getElementById("ca_state").options[i].value;
					document.getElementById("cabill_state").options.add(o);
				}
			}
			
			//if(len_castate > 0)
			else if(document.form2.us_state.value != '')
			{
				//alert("hi");
				/*for(i=document.form2.us_state.options.length-1;i>=0;i--)
				{
					if(document.form2.us_state.options[i].selected)
					document.form2.usbill_state.options[i].selected=true;
				}*/
				//document.getElementById(usbill_state).style.visibility="visible";
				//document.form2.usbill_state.value=document.form2.us_state.value;
				//CBstate.options[CBstate.selectedIndex].value = Cstate.options[Cstate.selectedIndex].value;
				
				var i;
				document.getElementById("usbill_state").innerHTML="";
				for(i=0;i<document.getElementById("us_state").options.length;i++)
				{
					var o = new Option();
					o.text = document.getElementById("us_state").options[i].text;
					o.value = document.getElementById("us_state").options[i].value;
					document.getElementById("usbill_state").options.add(o);
				}
			}
			
			/*for(i=document.form2.member_country.options.length-1;i>=0;i--)
			{
				if(document.form2.member_country.options[i].selected)
				document.form2.billing_country.options[i].selected=true;
			}*/

		}else{
			document.form2.billing_address1.value="";
			document.form2.billing_address2.value="";
			document.form2.billing_city.value="";
			document.form2.billing_zip.value="";
			//document.form2.billing_state.options[0].selected=true;

		}
			
	}
	</script>

	
</head>
<body>
<div class="main">
	<div class="top">
		<a href="http://salesrainplaza.com/" target="_blank"><img src="<?php echo base_url(); ?>/images/salesrainlogo.png" width="264" height="62" class="logo" /></a>
			<!--img src="http://salesrainplaza.com/srplazaCRM/images/salesrainplazaphonenumber.png" width="292" height="16" class="cnumber" /-->
			<div class="navbig">
				<div class="navl"></div>
				<div class="navm">
				<nav>
					<ul id="nav" class="t2">
						<li><?php echo anchor('account/logout', 'Log Out'); ?></li>
						<!--li><a href="#">Log Out</a></li-->
					</ul>
				</nav>
				</div>
				<div class="navr"></div>
			</div>
			<div class="navshadow"></div>
	</div>

    <!--div class="container-fluid">
        
        <div class="row-fluid">
            <div class="span3">
                <div class="well sidebar-nav">
                    <ul class="nav nav-list"-->
<div class="midi">
    	<div class="midt"></div>
        <div class="midm">
        	<div class="midml"><div class="midla">
	  
				<div class="midlb">
                	<!--div class="midltitle t3">Products</div-->
                    <div class="midcontent t4">
                    	<ul>
                            <li><?php echo anchor('admin/leadslist', '<i class="icon-list-alt"></i> Leads List'); ?></li>
							<li><?php echo anchor('admin/leads', '<i class="icon-list-alt"></i> Leads Registration'); ?></li>
							<li><?php echo anchor('admin/leads/importDB', '<i class="icon-list-alt"></i> Import Data from Excel'); ?></li>
				<?php
						//echo "the value of the session is: " . $this->session->userdata('groupid');
						
						if($this->session->userdata('uname') == "admin")
						//if($this->session->userdata('uname') == "admin" || $this->session->userdata('uname') == "billyespina" || $this->session->userdata('uname') == "nelsonbitana")
						{ ?>
								<li><?php echo anchor('', '<i class="icon-user"></i> User List'); ?></a></li>
				<?php 
						} ?>
								<!--li>&nbsp;<?php //echo anchor('admin/archives', '<i class="icon-list-alt"></i> Archives'); ?></li-->
								<!--li><?php //echo anchor('account/logout', '<i class="icon-off"></i> Log Out'); ?></li-->   				
						</ul>
					</div>
                </div>
			</div></div>   <!-- mdim1  -->
	    
		 <div class="midmrh">
            <div class="midmr">
            
					<?php if (isset($content)) echo $content; ?>
			</div><!--midmr-->
            
            </div><!--midmrh-->
            
        </div><!--midm-->
        <div class="midb"></div>
    </div><!--mid-->
    
</div>
<div class="bot"><!--div class="bota"><div class="botb"-->
    <div class="botm">
    	<div class="botml t4">Sales Rain &copy; 2013 Privacy Notice | Conditions of Use</div>
        <!--div class="botmr"><img src="images/salesrainplazaphonenumber.png" width="292" height="16" /></div-->
    </div>
</div><!--/div></div-->
</body>

<?php            
    $combined_js = NULL;
    foreach($combine_js as $item):
        $combined_js .= '/' . $item;
    endforeach;
    
    if ($combined_js):
?>                
    <script type="text/javascript" src="<?php echo base_url(); ?>combine/js<?php echo $combined_js; ?>"></script>        
<?php endif; ?>

<?php foreach($js as $item): ?>
    <script type="text/javascript" src="<?php echo base_url() . 'js/' . $item; ?>"></script>
<?php endforeach ?>  

<?php
    if (isset($head) && $head):
        foreach($head as $item):
            echo $item;
        endforeach;
    endif;
?>

</html>