<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sales Rain Plaza</title>
<link href="<?php echo base_url(); ?>css/style2.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url(); ?>js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>js/jquery.carouFredSel-6.0.4-packed.js" type="text/javascript"></script>
<script type="text/javascript">
			$(function() {
				$('.carousel').carouFredSel({
					items: 1,
					scroll: {
						onAfter: function() {
							setRandomFX( $(this) );
						}
					},
					onCreate: function() {
						setRandomFX( $(this) );
					}
				});
			});
			var allFXs = [ 'crossfade' ];
			//var allFXs = [ 'scroll', 'crossfade', 'cover', 'uncover' ];
			function setRandomFX( $elem ) {
				var newFX = Math.floor( Math.random() * allFXs.length );
				$elem.trigger( 'configuration', {
					auto: {
						fx: allFXs[ newFX ]
					}
				});
			}
</script>
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
    <div class="banner">
   	  <div class="bannerl">
        	<div class="bannerla"><div class="bannerlb">
            	<div class="bant t3">Products</div>
                <div class="banm t4">
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
                </div>
            </div></div>
        </div>
        
        <div class="bannerr">
        	<div class="carousel">
            	<!--img src="<?php echo base_url(); ?>images/banner/ipadmini.jpg" width="755" height="370" /-->
            	 <?php
                if (isset($banners) && $banners):
                    foreach ($banners as $banner):
            ?>
                        <img src="<?php echo base_url(); ?>uploads/banners/<?php echo $banner['filename']; ?>" width="755" height="370" />
            <?php
                    endforeach;
                endif;
            ?>
            
       	    <!--img src="images/banner/bannerm.jpg" width="755" height="370" /-->
            <!--img src="<?php echo base_url(); ?>uploads/banners/7f03614d5472accf93b701eadb1fb52d.jpg" width="755" height="370" />
            <img src="<?php echo base_url(); ?>images/banner/bbz10.jpg" width="755" height="370" /-->
            <!--img src="<?php echo base_url(); ?>images/banner/euphoria.jpg" width="755" height="370" />
            <img src="<?php echo base_url(); ?>images/banner/ipadmini.jpg" width="755" height="370" />
            <img src="<?php echo base_url(); ?>images/banner/brightcrystal.jpg" width="755" height="370" />
            <img src="<?php echo base_url(); ?>images/banner/pourfemme.jpg" width="755" height="370" />
            <img src="<?php echo base_url(); ?>images/banner/casio2.jpg" width="755" height="370" />
            <img src="<?php echo base_url(); ?>images/banner/ipad2.jpg" width="754" height="370" /> 
            <img src="<?php echo base_url(); ?>images/banner/vaction.jpg" width="754" height="370" /-->
            <!--img src="images/banner/sunglass.jpg" width="755" height="370" /-->
            </div>
        </div>
    </div><!--banner-->
    
    <div class="mid">
    	<div class="midt"></div>
        <div class="midm">
        	<div class="midml"><div class="midla">
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
            	<div class="midmrtitle t3">New Arrivals</div> 
                <div class="midmrc">
                	<ul>
                     
                      <li>
                            <div class="fph">
                                <div class="fp"><a href="gb4.html"><img src="images/basket/gb4t.jpg" width="180" height="250" /></a></div>
                              <div class="fpd tal t5">
                                Beauty Basket 2
                                <span class="t5a">$165</span><br />
                                Gold Member Price:  
                                <span class="t5a">$155</span><br />
                                <a href="gb4.html" class="mi">MI</a>  
                            </div></div>
                        </li>
                        
                        <li>
                            <div class="fph">
                                <div class="fp"><a href="gb3.html"><img src="images/basket/gb3t.jpg" width="180" height="250" /></a></div>
                              <div class="fpd tal t5">
                                Elite Especial Edition 
                                <span class="t5a">$160</span><br />
                                Gold Member Price:  
                                <span class="t5a">$150</span><br />
                                <a href="gb3.html" class="mi">MI</a>  
                            </div></div>
                        </li>
                        
                        
                        
                        <li>
                            <div class="fph">
                                <div class="fp"><a href="gb5.html"><img src="images/basket/gb5t.jpg" width="180" height="250" /></a></div>
                              <div class="fpd tal t5">
                                Sports Basket for Men
                                <span class="t5a">$165</span><br />
                                Gold Member Price:  
                                <span class="t5a">$155</span><br />
                                <a href="gb5.html" class="mi">MI</a>  
                            </div></div>
                        </li>
                     
                     <li>
                        <div class="fph">
                            <div class="fp"><a href="c8.html"><img src="images/chocolate/c8t.jpg" width="180" height="250" /></a></div>
                          <div class="fpd tal t5">
                            Hershey's Miniature 1.13kg<br />
                            <span class="t5a">$59.<sup>95</sup></span><br />
                        	<span class="t7">Gold Member Price:</span> <span class="t5a">$54.<sup>95</sup></span><br />
                        	<a href="c8.html" class="mi">MI</a>  
                        </div></div>
                    	</li>
                        
                        <li>
                        <div class="fph">
                            <div class="fp"><a href="c9.html"><img src="images/chocolate/c9t.jpg" width="180" height="250" /></a></div>
                          <div class="fpd tal t5">
                            Hershey's Kisses <br />
                            Party Bag 1.13kg <span class="t5a">$59.<sup>95</sup></span><br />
                        	<span class="t7">Gold Member Price:</span> <span class="t5a">$54.<sup>95</sup></span><br />
                        	<a href="c9.html" class="mi">MI</a>  
                        </div></div>
                    	</li>
                     
                     <li>
                        <div class="fph">
                            <div class="fp"><a href="g13.html"><img src="images/gadgets/g13t.jpg" width="180" height="250" /></a></div>
                            <div class="fpd tal t5">
                            Blackberry Z10 16gb <br /> <span class="t5a">$785</span><br />
                        	<span class="t7">Gold Member Price:</span> <span class="t5a"><br />
                        	$765</span><br />
                        	<a href="g13.html" class="mi">MI</a>  
                        </div></div>
                    </li>
                    
                    <li>
                        <div class="fph">
                            <div class="fp"><a href="g9.html"><img src="images/gadgets/g9t.jpg" width="180" height="250" /></a></div>
                          <div class="fpd tal t5">
                            Samsung Note 2 16gb<br /> 
                            <span class="t5a">$695</span><br />
                        	<span class="t7">Gold Member Price:</span> <span class="t5a"><br />
                        	$675</span><br />
                        	<a href="g9.html" class="mi">MI</a>  
                        </div></div>
                    </li>
                    
                    <li>
                        <div class="fph">
                            <div class="fp"><a href="g10.html"><img src="images/gadgets/g10t.jpg" width="180" height="250" /></a></div>
                          <div class="fpd tal t5">
                            Samsung  Grand Duos i9082 16gb <span class="t5a">$490</span><br />
                        	<span class="t7">Gold Member Price:</span> <span class="t5a"><br />
                        	$475</span><br />
                        	<a href="g10.html" class="mi">MI</a>  
                        </div></div>
                    </li>
                    
                    <li>
                        <div class="fph">
                            <div class="fp"><a href="g11.html"><img src="images/gadgets/g11t.jpg" width="180" height="250" /></a></div>
                          <div class="fpd tal t5">
                            Samsung i8190 Galaxy S III Mini 16gb <span class="t5a">$390</span><br />
                        	<span class="t7">Gold Member Price:</span> <span class="t5a"><br />
                        	$375</span><br />
                        	<a href="g11.html" class="mi">MI</a>  
                        </div></div>
                    </li>
                     
                     <li>
                        <div class="fph">
                            <div class="fp"><a href="g12.html"><img src="images/gadgets/g12t.jpg" width="180" height="250" /></a></div>
                          <div class="fpd tal t5">
                            Samsung Galaxy Ace 5830 16gb <span class="t5a">$280</span><br />
                        	<span class="t7">Gold Member Price:</span> <span class="t5a"><br />
                        	$265</span><br />
                        	<a href="g12.html" class="mi">MI</a>  
                        </div></div>
                    </li>
                     
                     <li>
                            <div class="fph">
                                <div class="fp"><a href="p9.html"><img src="images/perfumes/p9t.jpg" width="180" height="250" /></a></div>
                                <div class="fpd tal t5">
                                Calvin Klein One Shock FCKS09 <span class="t5a">$195</span><br />
                                Gold Member Price: <br />
                                <span class="t5a">$180</span><br />
                                <a href="p9.html" class="mi">MI</a>  
                            </div></div>
                        </li>
                        
                        <li>
                            <div class="fph">
                                <div class="fp"><a href="p10.html"><img src="images/perfumes/p10t.jpg" width="180" height="250" /></a></div>
                              <div class="fpd tal t5">
                                Mont Blanc Starwalker PFMBS10                                <span class="t5a">$125</span><br />
                                Gold Member Price: <br />
                                <span class="t5a">$110</span><br />
                                <a href="p10.html" class="mi">MI</a>  
                            </div></div>
                        </li>
                        
                        <li>
                            <div class="fph">
                                <div class="fp"><a href="p11.html"><img src="images/perfumes/p11t.jpg" width="180" height="250" /></a></div>
                              <div class="fpd tal t5">
                                Calvin Klein Eternity for Men PFCKES11 $130                                <span class="t5a">$125</span><br />
                                Gold Member Price: <br />
                                <span class="t5a">$115</span><br />
                                <a href="p10.html" class="mi">MI</a>  
                            </div></div>
                        </li>
                        
                     <li>
                            <div class="fph">
                                <div class="fp"><a href="p3.html"><img src="images/perfumes/p3t.jpg" width="180" height="250" /></a></div>
                                <div class="fpd tal t5">
                                Bvlgari  Rose Essentialle PFBRE03                                <span class="t5a">$105</span><br />
                                Gold Member Price: <br />
                                <span class="t5a">$95</span><br />
                                <a href="p3.html" class="mi">MI</a>  
                            </div></div>
                        </li>
                        
                        <li>
                            <div class="fph">
                                <div class="fp"><a href="p4.html"><img src="images/perfumes/p4t.jpg" width="180" height="250" /></a></div>
                                <div class="fpd tal t5">
                                CK Euphoria Eau De Toilette PFCKE04 <span class="t5x">$145</span> <span class="t5a">$130</span> <span class="t5c">(10% OFF)</span><br />
                                Gold Member Price: <br />
                                <span class="t5a">$115</span> <span class="t5c">(21% OFF)</span><br />
                                <a href="p4.html" class="mi">MI</a>  
                            </div></div>
                        </li>
                     
                     <li>
                            <div class="fph">
                                <div class="fp"><a href="p5.html"><img src="images/perfumes/p5t.jpg" width="180" height="250" /></a></div>
                              <div class="fpd tal t5">
                                CK Euphoria Eau De Parfum PFCKE05 <span class="t5x">$145</span> <span class="t5a">$130</span> <span class="t5c">(10% OFF)</span><br />
                                Gold Member Price: <br />
                                <span class="t5a">$115</span> <span class="t5c">(21% OFF)</span><br />
                                <a href="p5.html" class="mi">MI</a>  
                            </div></div>
                        </li>
                        
                        <li>
                            <div class="fph">
                                <div class="fp"><a href="p6.html"><img src="images/perfumes/p6t.jpg" width="180" height="250" /></a></div>
                                <div class="fpd tal t5">
                                Bvlgari  Pour Homme PFBPH06<br />
                                <span class="t5a">$135</span><br />
                                Gold Member Price: <br />
                                <span class="t5a">$120</span><br />
                                <a href="p2.html" class="mi">MI</a>  
                            </div></div>
                        </li>
                        
                        <li>
                            <div class="fph">
                                <div class="fp"><a href="p7.html"><img src="images/perfumes/p7t.jpg" width="180" height="250" /></a></div>
                              <div class="fpd tal t5">
                                Bvlgari 100ml Pour Homme Extreme PFBPH07                                <span class="t5a">$140</span><br />
                                Gold Member Price: <br />
                                <span class="t5a">$125</span><br />
                                <a href="p7.html" class="mi">MI</a>  
                            </div></div>
                        </li>
                        
                        <li>
                            <div class="fph">
                                <div class="fp"><a href="p8.html"><img src="images/perfumes/p8t.jpg" width="180" height="250" /></a></div>
                              <div class="fpd tal t5">
                                Guess By Marciano PFGBM08 <span class="t5x">$135</span> <span class="t5a">$115</span> <span class="t5c">(15% OFF)</span><br />
                                Gold Member Price: <br />
                                <span class="t5a">$95</span> <span class="t5c">(30% OFF)</span><br />
                                <a href="p8.html" class="mi">MI</a>  
                            </div></div>
                        </li>
                     <li>
                            <div class="fph">
                                <div class="fp"><a href="w13.html"><img src="images/watches/w13t.jpg" width="180" height="250" /></a></div>
                              <div class="fpd tal t5">
                                LTP 1237<span class="t5a"> $110</span><br />
                                <span class="t7">Gold Member Price:</span> <span class="t5a">$95</span><br />
                                <a href="w13.html" class="mi">MI</a>  
                            </div></div>
                        </li>
                        
                        <li>
                            <div class="fph">
                                <div class="fp"><a href="w14.html"><img src="images/watches/w14t.jpg" width="180" height="250" /></a></div>
                              <div class="fpd tal t5">
                                Casio LRW-200 Black<span class="t5a"> $95</span><br />
                                <span class="t7">Gold Member Price:</span> <span class="t5a">$85</span><br />
                                <a href="w14.html" class="mi">MI</a>  
                            </div></div>
                        </li>
                        
                        
                        
                        <li>
                            <div class="fph">
                                <div class="fp"><a href="w16.html"><img src="images/watches/w16t.jpg" width="180" height="250" /></a></div>
                              <div class="fpd tal t5">
                                Casio MTP 1335<span class="t5a"> $125</span><br />
                                <span class="t7">Gold Member Price:</span> <span class="t5a">$110</span><br />
                                <a href="w16.html" class="mi">MI</a>  
                            </div></div>
                        </li>
                     
                     <li>
                            <div class="fph">
                                <div class="fp"><a href="gb1.html"><img src="images/basket/gb1t.jpg" width="180" height="250" /></a></div>
                                <div class="fpd tal t5">
                                Food Basket 
                                <span class="t5a">$110</span><br />
                                Gold Member Price: 
                                <span class="t5a">$95</span><br />
                                <a href="gb1.html" class="mi">MI</a>  
                            </div></div>
                        </li>
                        
                        <li>
                            <div class="fph">
                                <div class="fp"><a href="gb2.html"><img src="images/basket/gb2t.jpg" width="180" height="250" /></a></div>
                                <div class="fpd tal t5">
                                Beauty Basket 
                                <span class="t5a">$145</span><br />
                                Gold Member Price:  
                                <span class="t5a">$135</span><br />
                                <a href="gb2.html" class="mi">MI</a>  
                            </div></div>
                        </li>
                     <li>
                        <div class="fph">
                            <div class="fp"><a href="g1.html"><img src="images/gadgets/g1t.jpg" width="180" height="250" /></a></div>
                            <div class="fpd tal t5">
                            iPad Mini 16gb <span class="t5a">$495</span><br />
                        	<span class="t7">Gold Member Price:</span> <span class="t5a">$450</span><br />
                        	<a href="g1.html" class="mi">MI</a>  
                        </div></div>
                    </li>
                     
                     <li>
                        <div class="fph">
                            <div class="fp"><a href="g8.html"><img src="images/gadgets/g8t.jpg" width="180" height="250" /></a></div>
                          <div class="fpd tal t5">
                            iPad 2 16gb<span class="t5a"> $545</span><br />
                        	<span class="t7">Gold Member Price:</span> <span class="t5a">$495</span><br />
                        	<a href="g8.html" class="mi">MI</a>  
                        </div></div>
                    </li>
                     
                     <li>
                        <div class="fph">
                            <div class="fp"><a href="g6.html"><img src="images/gadgets/g6t.jpg" width="180" height="250" /></a></div>
                          <div class="fpd tal t5">
                            iPhone 4 16gb <span class="t5a"> $635</span><br />
                        	<span class="t7">Gold Member Price:</span> <span class="t5a">$595</span><br />
                        	<a href="g6.html" class="mi">MI</a>  
                        </div></div>
                    </li>
                     
                     <li>
                        <div class="fph">
                            <div class="fp"><a href="g7.html"><img src="images/gadgets/g7t.jpg" width="180" height="250" /></a></div>
                          <div class="fpd tal t5">
                            iPhone 4s 16gb<span class="t5a"> $735</span><br />
                        	<span class="t7">Gold Member Price:</span> <span class="t5a">$695</span><br />
                        	<a href="g7.html" class="mi">MI</a>  
                        </div></div>
                    </li>
                     
                                          
                     
                    
                    
                        
                        

                        
                    </ul>
                </div>
            </div><!--midmr-->
            
            
            
            <div class="midmr">
            	<div class="midmrtitle t3">Watches</div>
                <div class="midmrc">
                	<ul>
                    	                       
                         <li>
                            <div class="fph">
                                <div class="fp"><a href="w1.html"><img src="images/watches/w1t.jpg" width="180" height="250" /></a></div>
                                <div class="fpd tal t5">
                                Casio MTP 1165 <span class="t5a">$85</span><br />
                                <span class="t7">Gold Member Price:</span><span class="t5a"> $75</span><br />
                                <a href="w1.html" class="mi">MI</a>  
                            </div></div>
                        </li>
                        
                        <li>
                            <div class="fph">
                                <div class="fp"><a href="w2.html"><img src="images/watches/w2t.jpg" width="180" height="250" /></a></div>
                                <div class="fpd tal t5">
                                Casio MTP 1243 <span class="t5a">$95</span><br />
                                <span class="t7">Gold Member Price:</span> <span class="t5a">$80</span><br />
                                <a href="w2.html" class="mi">MI</a>  
                            </div></div>
                        </li>
                        
                        <li>
                            <div class="fph">
                                <div class="fp"><a href="w3.html"><img src="images/watches/w3t.jpg" width="180" height="250" /></a></div>
                              <div class="fpd tal t5">
                                Casio LTP 1253 <span class="t5a">$90</span><br />
                                <span class="t7">Gold Member Price:</span> <span class="t5a">$75</span><br />
                                <a href="w3.html" class="mi">MI</a>  
                            </div></div>
                        </li>
                        
                        <li>
                            <div class="fph">
                                <div class="fp"><a href="w6.html"><img src="images/watches/w6t.jpg" width="180" height="250" /></a></div>
                              <div class="fpd tal t5">
                                Citizen EJ6072-55a <span class="t5a">$180</span><br />
                                <span class="t7">Gold Member Price:</span> <span class="t5a">$150</span><br />
                                <a href="w6.html" class="mi">MI</a>  
                            </div></div>
                        </li>                                            
                       
                        
                        <li>
                            <div class="fph">
                                <div class="fp"><a href="w10.html"><img src="images/watches/w10t.jpg" width="180" height="250" /></a></div>
                                <div class="fpd tal t5">
                                Citizen EJ6044-51p <span class="t5a">$185</span><br />
                                <span class="t7">Gold Member Price:</span> <span class="t5a">$170</span><br />
                                <a href="w10.html" class="mi">MI</a>  
                            </div></div>
                        </li>
                        
                        <li>
                            <div class="fph">
                                <div class="fp"><a href="w11.html"><img src="images/watches/w11t.jpg" width="180" height="250" /></a></div>
                              <div class="fpd tal t5">
                                Citizen EQ0562-54a <span class="t5a">$150</span><br />
                                <span class="t7">Gold Member Price:</span> <span class="t5a">$135</span><br />
                                <a href="w11.html" class="mi">MI</a>  
                            </div></div>
                        </li>
                        
                                               
                        <li>
                            <div class="fph">
                                <div class="fp"><a href="w12.html"><img src="images/watches/w12t.jpg" width="180" height="250" /></a></div>
                              <div class="fpd tal t5">
                                Guess W12616l1 <span class="t5a">$250</span><br />
                                <span class="t7">Gold Member Price:</span> <span class="t5a">$225</span><br />
                                <a href="w12.html" class="mi">MI</a>  
                            </div></div>
                        </li>
                    </ul>
                </div>
            </div><!--midmr-->
            
            
            
            <div class="midmr">
            	<div class="midmrtitle t3">Chocolates</div>
                <div class="midmrc">
                	<ul>
                   		<li>
                        <div class="fph">
                            <div class="fp"><a href="c8.html"><img src="images/chocolate/c8t.jpg" width="180" height="250" /></a></div>
                          <div class="fpd tal t5">
                            Hershey's Miniature 1.13kg<br />
                            <span class="t5a">$59.<sup>95</sup></span><br />
                        	<span class="t7">Gold Member Price:</span> <span class="t5a">$54.<sup>95</sup></span><br />
                        	<a href="c5.html" class="mi">MI</a>  
                        </div></div>
                    	</li>
                        
                        <li>
                        <div class="fph">
                            <div class="fp"><a href="c9.html"><img src="images/chocolate/c9t.jpg" width="180" height="250" /></a></div>
                          <div class="fpd tal t5">
                            Hershey's Kisses <br />
                            Party Bag 1.13kg <span class="t5a">$59.<sup>95</sup></span><br />
                        	<span class="t7">Gold Member Price:</span> <span class="t5a">$54.<sup>95</sup></span><br />
                        	<a href="c5.html" class="mi">MI</a>  
                        </div></div>
                    	</li>
                        
                        <li>
                        <div class="fph">
                            <div class="fp"><a href="c2.html"><img src="images/chocolate/c2t.jpg" width="180" height="250" /></a></div>
                          <div class="fpd tal t5">
                            Ferrero Rocher 24pcs. <span class="t5a">$34.<sup>95</sup></span><br />
                        	<span class="t7">Gold Member Price:</span> <span class="t5a">$32.<sup>95</sup></span><br />
                        	<a href="c2.html" class="mi">MI</a>  
                        </div></div>
                    	</li>
                        
                        <li>
                        <div class="fph">
                            <div class="fp"><a href="c3.html"><img src="images/chocolate/c3t.jpg" width="180" height="250" /></a></div>
                          <div class="fpd tal t5">
                            Toblerone 400g <span class="t5a">$29.<sup>95</sup></span><br />
                        	<span class="t7">Gold Member Price:</span> <span class="t5a">$24.<sup>95</sup></span><br />
                        	<a href="c3.html" class="mi">MI</a>  
                        </div></div>
                    	</li>
                        
                        
                        
                    </ul>
                </div>
            </div><!--midmr-->
            
            <div class="midmr">
            	<div class="midmrtitle t3">Flowers</div>
                <div class="midmrc">
                	<ul>
                    <li>
                        <div class="fph">
                            <div class="fp"><a href="b1.html"><img src="images/flowers/b1t.jpg" width="180" height="250" /></a></div>
                            <div class="fpd tal t5">
                            Pure Love <span class="t5a">$69.<sup>95</sup></span><br />
                        	<span class="t7">Gold Member Price:</span> <span class="t5a">$64.<sup>95</sup></span><br />
                        	<a href="b1.html" class="mi">MI</a>  
                        </div></div>
                    	</li>
                        <li>
                        <div class="fph">
                            <div class="fp"><a href="b2.html"><img src="images/flowers/b2t.jpg" width="180" height="250" /></a></div>
                            <div class="fpd tal t5">
                            Heaven Scent <span class="t5a">$59.<sup>95</sup></span><br />
                        	<span class="t7">Gold Member Price:</span> <span class="t5a">$54.<sup>95</sup></span><br />
                        	<a href="b2.html" class="mi">MI</a>  
                        </div></div>
                    	</li>
                        <li>
                        <div class="fph">
                            <div class="fp"><a href="b7.html"><img src="images/flowers/b7t.jpg" width="180" height="250" /></a></div>
                            <div class="fpd tal t5">
                            I'm Into You <span class="t5a">$79.<sup>95</sup></span><br />
                        	<span class="t7">Gold Member Price:</span> <span class="t5a">$69.<sup>95</sup></span><br />
                        	<a href="b7.html" class="mi">MI</a>  
                        </div></div>
                    	</li>
                        <li>
                        <div class="fph">
                            <div class="fp"><a href="b12.html"><img src="images/flowers/b12t.jpg" width="180" height="250" /></a></div>
                            <div class="fpd tal t5">
                            Bloomingdale <span class="t5a">$119.<sup>95</sup></span><br />
                        	<span class="t7">Gold Member Price:</span> <span class="t5a">$109.<sup>95</sup></span><br />
                        	<a href="b12.html" class="mi">MI</a>    
                        </div></div>
                    	</li>
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
        <div class="botmr"><img src="images/salesrainplazaphonenumber.png" width="292" height="16" /></div>
    </div>
</div></div></div>
</body>
</html>
