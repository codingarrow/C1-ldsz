<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title></title>
	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width">

    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="apple-touch-icon-precomposed" href="/apple-touch-icon-precomposed.png">
    
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
    <title><?php echo $title; ?></title>
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.css">       
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap-responsive.css">     

	<style>
        body {
          padding-top: 60px;
          padding-bottom: 40px;
        }
	</style>
</head>
<body>
    <div class="container">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Company Name</th>
                    <th>Industry</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Designation</th>
                    <th>Email</th>
                    <th>Office Number</th>
                    <th>Mobile Number</th>
                    <th>Subscription</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($registrations as $registration): ?>
                    <tr>
                        <td><?php echo $registration['company_name']; ?></td>
                        <td><?php echo $registration['industry']; ?></td>
                        <td><?php echo $registration['last_name']; ?></td>
                        <td><?php echo $registration['first_name']; ?></td>
                        <td><?php echo $registration['designation']; ?></td>
                        <td><?php echo $registration['email']; ?></td>
                        <td><?php echo $registration['office_number']; ?></td>
                        <td><?php echo $registration['mobile_number']; ?></td>
                        <td>
                            <?php 
                                if ($registration['subscription']):
                                    echo 'Yes';
                                else:
                                    echo 'No';
                                endif;
                            ?>                        
                        </td>
                    </tr>	
                <?php endforeach; ?>
            </tbody>
        </table>
    </div> <!-- /container -->
</body>
<script>
    window.print();
</script>
</html>