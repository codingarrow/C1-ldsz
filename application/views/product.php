<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sales Rain Plaza</title>
<link href="<?php echo base_url(); ?>css/style2.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="main">
	<div class="top">
    	<div class="tnav tal t1" id="tnav">
        	<ul>
            	<li><a href="index.html">home</a></li>
                <li><a href="aboutus.html">about us</a></li>
                <li><a href="faqs.html">faq's</a></li>
                <li><a href="contactus.php">contact us</a></li>                
            </ul>
        </div>
    	<a href="index.html"><img src="<?php echo base_url(); ?>images/salesrainplazalogo.png" width="295" height="61" class="logo" /></a>
    	<img src="<?php echo base_url(); ?>images/salesrainplazaphonenumber.png" width="292" height="16" class="cnumber" />
      	<div class="searchf">
        <input name="" type="text" class="f1" value="search entire store here..." />
        <input type="button" class="f2" value=" " />
        </div>
        <div class="navbig">
        	<div class="navl"></div>
            <div class="navm">
            <nav>
            	<ul id="nav" class="t2">
                	<li><a href="products.html">Products</a>
                    	<ul>
                        	 <li><a href="newarrivals.html">New Arrivals</a></li>
                             <?php
								if (isset($cat_products) && $cat_products):
									foreach ($cat_products as $cat_product):
            				?>
                                    <li><?php echo anchor('product/productlist/' . $cat_product[category_name], $cat_product[category_name]);?></li>
			      			<?php
            			        	endforeach;
                				endif;
            				?>     
                        </ul>
                    </li>
                    <li><a href="services.html">Services</a>
                    	<ul>
                        
                        	<?php
								if (isset($cat_services) && $cat_services):
									foreach ($cat_services as $cat_service):
            				?>
                                    <li><?php echo anchor('product/productlist/' . $cat_service[category_name], $cat_service[category_name]);?></li>
			      			<?php
            			        	endforeach;
                				endif;
            				?>
                        </ul>
                    </li>
                    <li><a href="businesspackages.html">Business Packages</a>
                    	<ul>
                        	<?php
								if (isset($cat_bpacks) && $cat_bpacks):
									foreach ($cat_bpacks as $cat_bpack):
            				?>
                                    <li><?php echo anchor('product/productlist/' . $cat_bpack[category_name], $cat_bpack[category_name]);?></li>
			      			<?php
            			        	endforeach;
                				endif;
            				?>
                        </ul>
                    </li>
                    <li><a href="wishlist.html">Wish List</a></li>
                    <li><a href="comingsoon.html">Coming Soon</a></li>
                    <li><a href="membership.html">Membership</a></li>
                </ul>
            </nav>
            </div>
            <div class="navr"></div>
        </div>
        <div class="navshadow"></div>
    </div><!--top-->

    
    <div class="midi">
    	<div class="midt"></div>
        <div class="midm">
        	<div class="midml"><div class="midla">
            	
                <div class="midlb">
                	<div class="midltitle t3">Products</div>
                    <div class="midcontent t4">
                    	<ul>
                            <li><a href="newarrivals.html">New Arrivals</a></li>
                            <?php
								if (isset($cat_products) && $cat_products):
									foreach ($cat_products as $cat_product):
            				?>
                                    <li><?php echo anchor('product/productlist/' . $cat_product[category_name], $cat_product[category_name]);?></li>
			      			<?php
            			        	endforeach;
                				endif;
            				?> 
                            <!--li><a href="gadgets.html">Gadgets</a></li>
                            <li><a href="perfumes.html">Perfumes</a></li>
                            <li><a href="sunglasses.html">Sun Glasses</a></li>
                            <li><a href="watches.html">Watches</a></li>
                            <li><a href="flowers.html">Flowers</a></li>
                            <li><a href="chocolates.html">Chocolates</a></li>
                            <li><a href="giftbaskets.html">Gift Baskets</a></li-->
                    	</ul>
                    </div>
                </div>
                
                <div class="midlb">
                	<div class="midltitle t3">Services</div>
                    <div class="midcontent t4">
                    	<ul>
                        	<?php
								if (isset($cat_services) && $cat_services):
									foreach ($cat_services as $cat_service):
            				?>
                                    <li><?php echo anchor('product/productlist/' . $cat_service[category_name], $cat_service[category_name]);?></li>
			      			<?php
            			        	endforeach;
                				endif;
            				?>
                        </ul>
                    </div>
                </div>
                
                <div class="midlb">
                	<div class="midltitle t3">Business Packages</div>
                    <div class="midcontent t4">
                    	<ul>
                        	<?php
								if (isset($cat_bpacks) && $cat_bpacks):
									foreach ($cat_bpacks as $cat_bpack):
            				?>
                                    <li><?php echo anchor('product/productlist/' . $cat_bpack[category_name], $cat_bpack[category_name]);?></li>
			      			<?php
            			        	endforeach;
                				endif;
            				?>
                        </ul>
                    </div>
                </div>
                
            </div></div><!--midml-->
            <div class="midmrh">
            <div class="midmr">
                <?php //if (isset($content)) echo $content; ?>
            	<div class="midmrtitle t3">
					<?php 
							$prodcatname = str_replace('%20',' ',$prodcatname);
							echo $prodcatname; ?>
                </div>
				<div class="midmrc">
                	<ul>
                     
                     <?php
								if (isset($products) && $products)
								{
									foreach ($products as $product):
            				?>
                     
                     <li>
                        <div class="fph">
                            <div class="fp"><a href="g13.html"><img src="images/gadgets/g13t.jpg" width="180" height="250" /></a></div>
                            <div class="fpd tal t5">
                            <?php echo $product['product_name']; ?> <br /> <span class="t5a">$<?php echo $product['regular_price']; ?></span><br />
                        	<span class="t7">Gold Member Price:</span> <span class="t5a"><br />
                        	$<?php echo $product['member_price']; ?></span><br />
                        	<a href="<?php echo site_url("product/product_info/".$product['ProductID']); ?>" class="mi">MI</a>  
                        </div></div>
                    </li>
                    
                    <?php
            			    		endforeach;
								}
								else
								{
									echo "<br><br><span class='t7'>No products for this category.";
								}
            		?>
                       
                    </ul>
</div>
            
            </div><!--midmr-->
            
            
            
            </div><!--midmrh-->
            
        </div><!--midm-->
        <div class="midb"></div>
    </div><!--mid-->
    
</div>
<div class="bot"><div class="bota"><div class="botb">
	<div class="bott ">
    	<div class="botta t4">
           <ul>
               <li><a href="index.html">home</a></li>
               <li><a href="aboutus.html">about us</a></li>
               <li><a href="faqs.html">faq's</a></li>
               <li><a href="contactus.php">contact us</a></li>                
           </ul>
         </div>
        
        <div class="botta t4">
        	<ul>
            	<li><a href="products.html">Products</a>
                <li><a href="services.html">Services</a>
                <li><a href="businesspackages.html">Business Packages</a>
                <li><a href="wishlist.html">Wish List</a></li>
                <li><a href="comingsoon.html">Coming Soon</a></li>
                <li><a href="membership.html">Membership</a></li>
            </ul>
        </div>
        <div class="botta t4">
        	<ul>
                 <li><a href="newarrivals.html">New Arrivals</a></li>
                <li><a href="gadgets.html">Gadgets</a></li>
                <li><a href="perfumes.html">Perfumes</a></li>
                <li><a href="sunglasses.html">Sun Glasses</a></li>
                <li><a href="watches.html">Watches</a></li>
                <li><a href="flowers.html">Flowers</a></li>
                <li><a href="chocolates.html">Chocolates</a></li>
                <li><a href="giftbaskets.html">Gift Baskets</a></li>
            </ul>
        </div>
        <div class="botta t4">
            <ul>
               <li><a href="summercourses.html">Summer Courses</a></li>
               <li><a href="photographypackages.html">Photography Packages</a></li>
               <li><a href="vacationpackages.html">Vacation Packages</a></li>
               <li><a href="relaxationtreatment.html">Relaxation Treatment</a></li>
               <li><a href="health.html">Health and Medical Insurance</a></li>
               <li><a href="realestate.html">Real Estate</a></li>
            </ul>
        </div>
        <div class="botta t4">
        	<ul>
               <li><a href="virtualassistant.html">Virtual Assistant</a></li>
               <li><a href="businessidentitypackage.html">Business Identity Package</a></li>
               <li><a href="seatleasing.html">Seat Leasing</a></li>
               <li><a href="callcenter.html">Call Center</a></li>
            </ul>
        </div>
    </div>
    <div class="botm">
    	<div class="botml t4">Sales Rain Plaza © 2013 Privacy Notice | Conditions of Use</div>
        <div class="botmr"><img src="<?php echo base_url(); ?>images/salesrainplazaphonenumber.png" width="292" height="16" /></div>
    </div>
</div></div></div>
</body>
</html>