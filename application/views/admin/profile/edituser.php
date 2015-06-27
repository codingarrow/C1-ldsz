<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">
        
    <title>:: Sales Rain Plaza ::<?php //echo $title; ?></title>

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
	
</head>
<body>
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

    <!--div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="brand" href="<?php echo site_url('admin'); ?>">Sales Rain Plaza CRM</a>
                <div class="nav-collapse">
                    <ul class="nav pull-right">
                        <li><?php echo anchor('account/logout', '<i class="icon-off icon-white"></i> Log Out'); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div-->

<div class="main">
	<div class="top">
		<a href="http://salesrainplaza.com/" target="_blank"><img src="http://salesrainplaza.com/srplazaCRM/images/salesrainplazalogo.png" width="295" height="61" class="logo" /></a>
			<img src="http://salesrainplaza.com/srplazaCRM/images/salesrainplazaphonenumber.png" width="292" height="16" class="cnumber" />
			<div class="navbig">
				<div class="navl"></div>
				<div class="navm">
				<nav>
					<ul id="nav" class="t2">
						<!--li><a href="#">Log Out</a></li-->
						<li><?php echo anchor('account/logout', 'Log Out'); ?></li>
					</ul>
				</nav>
				</div>
				<div class="navr"></div>
			</div>
			<div class="navshadow"></div>
	</div>
	
 <div class="midi">
    	<div class="midt"></div>
        <div class="midm">
        	<div class="midml"><div class="midla">
	  
				<div class="midlb">
                	<!--div class="midltitle t3">Products</div-->
                    <div class="midcontent t4">
                    	<ul>
                            <li><?php echo anchor('admin/memberlist', '<i class="icon-list-alt"></i> Member List'); ?></li>
							<li><?php echo anchor('admin/members', '<i class="icon-list-alt"></i> Member Registration'); ?></li>
							<!--li><?php echo anchor('admin/products', '<i class="icon-list-alt"></i> Product List'); ?></li-->
						
				<?php
						//echo "the value of the session is: " . $this->session->userdata('groupid');
						
						//if($this->session->userdata('uname') == "admin")
						if($this->session->userdata('uname') == "admin" || $this->session->userdata('uname') == "billyespina" || $this->session->userdata('uname') == "nelsonbitana")
						{ ?>
								<li><?php echo anchor('admin/profile', '<i class="icon-user"></i> User List'); ?></a></li>
				<?php 
						} ?>
								<!--li>&nbsp;<?php //echo anchor('admin/archives', '<i class="icon-list-alt"></i> Archives'); ?></li-->
								<!--li><?php //echo anchor('account/logout', '<i class="icon-off"></i> Log Out'); ?></li-->    
                 <?php 
						if($this->session->userdata('uname') == "admin" || $this->session->userdata('uname') == "billyespina" || $this->session->userdata('uname') == "nelsonbitana")
						{ ?>
								<li><?php echo anchor('admin/products/categorylist', '<i class="icon-list-alt"></i> Product Category List'); ?></li>
								<li><?php echo anchor('admin/products/productlist', '<i class="icon-list-alt"></i> Product List'); ?></li>
								<li><?php echo anchor('admin/banners/bannerlist', '<i class="icon-list-alt"></i> Banner Management'); ?></li>
				<?php 	} ?>               
                                     
						</ul>
					</div>
                </div>
			</div></div>   <!-- mdim1  -->
        
        
    <div class="midmrh">
        <div class="midmr">
			
        <?php //echo validation_errors(); ?>
		<div class="midmrtitle t3">Edit User <?php //echo ucfirst($user->last_name); ?><!--,&nbsp;--><?php //echo ucfirst($user->first_name); ?></div>
			
			<div class="midmrc">
			  <div class="midrca t4">	
				<?php echo $this->session->flashdata('message'); ?>
				<?php if (isset($message) && $message): echo $message; endif; ?>
				<?php echo validation_errors(); ?>
			
				<?php echo form_open('admin/profile/edituser'); ?>
				<div class="cul t5">
					<strong>First Name</strong><br>
					<input type="text" name="first_name" value="<?php echo $user->first_name; ?>" class="f3 t5c"><br>
					<strong>Email</strong><br>
					<input type="text" name="email" value="<?php echo $user->email; ?>" class="f3 t5c"><br>  
					<strong>Old Password</strong><br>
					<input type="password" name="old_password" class="f3 t5c"><br>
					<strong>New Password</strong><br>
					<input type="password" name="password" class="f3 t5c"><br>
					<strong>Retype New Password</strong><br>
					<input type="password" name="retype_password" class="f3 t5c"><br>
				</div>
				
				<div class="cur2">
				  <div class="cura2">
					<div class="curb">
						<strong>Last Name</strong><br>
						<input type="text" name="last_name" value="<?php echo $user->last_name; ?>" class="f3 t5c"><br>
						<strong>User Type</strong><br>
						<select name="user_type" class="f3 t5c" tabindex="17">
							<option value="1" <?php echo set_select('user_type', 'verifier'); ?>>Verifier</option>
						</select><br>
						<strong>Username</strong><br>
						<input type="text" name="username" value="<?php echo $user->username; ?>" class="f3 t5c"><br>
				</div></div></div>	
				<div style="clear: both;"></div>
					<div>
						<input type="submit" name="submit" value="Submit" class="btn_send" />
						<!--button class="btn btn-primary" type="submit"><i class="icon-ok icon-white"></i> Save changes</button>
						<button class="btn" type="reset"><i class="icon-ok icon-remove"></i> Cancel</button-->
					</div>
				</form>
			<!--/div-->
		</div></div>

     </div><!--midmr-->
            
            </div><!--midmrh-->
            
        </div><!--midm-->
        <div class="midb"></div>
    </div><!--mid-->
    
</div>
<div class="bot"><!--div class="bota"><div class="botb"-->
    <div class="botm">
    	<div class="botml t4">Sales Rain Plaza &copy; 2013 Privacy Notice | Conditions of Use</div>
        <div class="botmr"><img src="images/salesrainplazaphonenumber.png" width="292" height="16" /></div>
    </div>
</div><!--/div></div-->
</body>