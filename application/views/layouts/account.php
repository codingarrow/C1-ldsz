<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width">

    <?php if (isset($author) && $author): ?>
        <meta name="author" content="<?php echo $author; ?>">
    <?php endif; ?>    
    <?php if (isset($description) && $description): ?>
        <meta http-equiv="description" content="<?php echo $description; ?>">
        <meta name="description" content="<?php echo $description; ?>">
    <?php endif; ?>
    <?php if (isset($keywords) && $keywords): ?>
        <meta http-equiv="keywords" content="<?php echo $keywords; ?>">        
    <?php endif; ?>
        
    <title>:: Sales Rain Leads Database ::<?php //echo $title; ?></title>
    
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="apple-touch-icon-precomposed" href="/apple-touch-icon-precomposed.png">
    

    <!--link rel="stylesheet" href="<?php echo base_url(); ?>css/styles.css"-->
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
        <script type="text/javascript" src="<?php echo base_url(); ?>combine/js<?php echo $combined_js; ?>"></script>        
    <?php endif; ?>
    
    <?php foreach($top_js as $item): ?>
        <script type="text/javascript" src="<?php echo base_url() . 'js/' . $item; ?>"></script>
    <?php endforeach ?>        
        
	<script type="text/javascript" src="<?php echo base_url(); ?>js/modernizr.js"></script>
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
                <a class="brand" href="#">Sales Rain Plaza CRM</a>               
            </div>
        </div>
    </div-->
<div class="main">
	<div class="top">
		<div class="top">
			<a href="http://salesrainplaza.com/" target="_blank"><img src="<?php echo base_url(); ?>/images/salesrainlogo.png" width="264" height="62" class="logo" /></a>
				<!--img src="http://salesrainplaza.com/srplazaCRM/images/salesrainplazaphonenumber.png" width="292" height="16" class="cnumber" /-->	
				<!--div class="navshadow"></div-->
		</div>
	</div>

	<div class="midi">
			<div class="midt"></div>
			<div class="midm">

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
