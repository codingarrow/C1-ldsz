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
	<script type="text/javascript" src="<?php echo base_url()?>js/prototype.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>js/lightbox.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>js/scriptaculous/scriptaculous.js?load=effects,dragdrop"></script>
	
	<script src="http://salesrainplaza.com/srplazaCRM/js/jquery-ui-1.8.18.custom.min.js"></script>
	<link rel="stylesheet" href="http://salesrainplaza.com/srplazaCRM/css/jquery-ui/jquery-ui-1.8.18.custom.css">
	
	<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>css/lightbox.css" />
	
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
		<div class="midmrtitle t3">List of Users</div>
				<!--div class="row-fluid"-->
					<!--div class="page-header">
						<h1>List of Members</h1>
						<!--h2><?php //echo date('l, F j, Y'); ?></h2-->
					<!--/div-->
				 <div class="midmrc">
						<div class="midrca t4">
						<?php echo $this->session->flashdata('message'); ?>
						<p style="padding-bottom: 10px;">
							<?php //echo anchor('admin/registrations/printer', '<i class="icon-print icon-white"></i> Print', array('class' => 'btn btn-primary', 'target' => '_blank')); ?>
							<?php //echo anchor('admin/registrations/export', '<i class="icon-print icon-white"></i> Export', array('class' => 'btn btn-primary', 'target' => '_blank')); ?>
							<?php echo anchor('admin/profile/adduser', '<input type="button" value="Add New User">'); ?>
						</p>
						<table class="t4" width="85%" border="1px solid black">
							<thead>
								<tr>
									<th>First Name</th>
									<th>Last Name</th>
									<th>User Name</th>
									<th>Email</th>
									<th>User Type</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($users as $user):  
									  //$pid = $registration['ID'];
								?>
									<tr style="text-align:center;">
										<!--td><?php //echo anchor('admin/memberlist', $registration['member_id']); ?></td-->
										<td><?php echo $user['first_name']; ?></td>
										<td><?php echo $user['last_name']; ?></td>
										<td><?php echo $user['username']; ?></td>
										<td><?php echo $user['email']; ?></td>
										<td><?php echo $user['name']; ?></td>
										<td><?php echo anchor('admin/profile/edituser/' . $user['id'], 'Edit');?>&nbsp;&nbsp;&nbsp;<?php echo anchor('admin/profile/delete/' . $user['id'], 'Delete', array('class'=>'lbOn deleteConfirm client_delete'));?></td>
									</tr>	
								<?php endforeach; ?>
							</tbody>
						</table>

						<?php echo $this->pagination->create_links(); ?>
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