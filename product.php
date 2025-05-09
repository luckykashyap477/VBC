<?php
include('header.php');
$action=$_GET['action'];
$catID=base64_decode($action);

?>

<div class="products">	 
		<div class="container">
			<div class="col-md-12 product-w3ls-right">
				<!---728x90--->
 
				<!-- breadcrumbs --> 
				<ol class="breadcrumb breadcrumb1">
					<li><a href="index.html">Home</a></li>
					<li class="active">Products</li>
				</ol> 
				<div class="clearfix"> </div>
				<!-- //breadcrumbs -->
				<div class="product-top">
					<h4>Electronics</h4>
					<ul> 
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Filter By<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Low price</a></li> 
								<li><a href="#">High price</a></li>
								<li><a href="#">Latest</a></li> 
								<li><a href="#">Popular</a></li> 
							</ul> 
						</li>
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Brands<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Samsung</a></li> 
								<li><a href="#">LG</a></li>
								<li><a href="#">Sony</a></li> 
								<li><a href="#">Other</a></li> 
							</ul> 
						</li>
					</ul> 
					<div class="clearfix"> </div>
				</div>
				<!---728x90---> 
				<div class="products-row">
				<?php
								$Sql="SELECT * FROM `products` WHERE `cat_id`='".$catID."'";
								$result=mysqli_query($con, $Sql);
								$num_rows = mysqli_num_rows($result);
								while ($row=mysqli_fetch_array($result)) {
									$specialAmount=$row['product_price']+100;
									$str=$row['product_title'];
									$str = wordwrap($str, 20);
                                    $str = explode("\n", $str);
                                    $str = $str[0] . '...';
									?>
								
					<div class="col-md-3 product-grids"> 
						<div class="agile-products">
							<div class="new-tag"><h6>20%<br>Off</h6></div>
							<a href="product_details.php?id=<?=$row['product_id'];?>">
								<img src="<?=$siteUrl;?>admin_area/product_images/<?=$row['product_img2']?>" class="img-responsive" alt="img"></a>
							<div class="agile-product-text">              
								<h5><a href="product_details.php?id=<?=$row['product_id'];?>"><?=$str;?></a></h5> 
								<h6><del><i class="fa fa-rupee"></i> <?=$specialAmount;?></del><i class="fa fa-rupee"></i> <?=$row['product_price']?></h6> 
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="p_id" value="<?=$row['product_id'];?>">
									<input type="hidden" name="w3ls_item" value="<?=$row['product_title']?>"> 
									<input type="hidden" name="amount" value="<?=$row['product_price']?>"> 
									<button type="submit" class="w3ls-cart pw3ls-cart"  data-id="<?=$row['product_id'];?>"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form> 
							</div>
						</div> 
					</div>

<?php } ?>

<div class="clearfix"> </div>
				</div>
				<!---728x90---> 
				<!-- add-products --> 
				<div class="w3ls-add-grids w3agile-add-products">
					<a href="#"> 
						<h4>TOP 10 TRENDS FOR YOU FLAT <span>20%</span> OFF</h4>
						<h6>Shop now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
					</a>
				</div> 
				<!-- //add-products -->
			</div>
		
			<div class="clearfix"> </div>
			<!-- recommendations -->
			<div class="recommend">
				<h3 class="w3ls-title">Our Recommendations </h3> 
				<script>
					$(document).ready(function() { 
						$("#owl-demo5").owlCarousel({
					 
						  autoPlay: 3000, //Set AutoPlay to 3 seconds
					 
						  items :4,
						  itemsDesktop : [640,5],
						  itemsDesktopSmall : [414,4],
						  navigation : true
					 
						});
						
					}); 
				</script>
				<div id="owl-demo5" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
					<div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 4560px; left: 0px; display: block; transition: 1000ms; transform: translate3d(0px, 0px, 0px);"><div class="owl-item" style="width: 285px;"><div class="item">
						<div class="glry-w3agile-grids agileits">
							<div class="new-tag"><h6>20% <br> Off</h6></div>
							<a href="products1.html"><img src="images/f2.png" alt="img"></a>
							<div class="view-caption agileits-w3layouts">           
								<h4><a href="products1.html">Women Sandal</a></h4>
								<p>Lorem ipsum dolor sit amet consectetur</p>
								<h5>RS.20</h5>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Women Sandal"> 
									<input type="hidden" name="amount" value="20.00"> 
									<button type="submit" class="w3ls-cart" data-id="<?=$row['product_id'];?>"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
							</div>        
						</div> 
					</div></div><div class="owl-item" style="width: 285px;"><div class="item">
						<div class="glry-w3agile-grids agileits"> 
							<a href="products.html"><img src="images/e4.png" alt="img"></a>
							<div class="view-caption agileits-w3layouts">           
								<h4><a href="products.html">Digital Camera</a></h4>
								<p>Lorem ipsum dolor sit amet consectetur</p>
								<h5>RS.80</h5>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Digital Camera"> 
									<input type="hidden" name="amount" value="100.00"> 
									<button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
							</div>         
						</div>  
					</div></div><div class="owl-item" style="width: 285px;"><div class="item">
						<div class="glry-w3agile-grids agileits"> 
							<div class="new-tag"><h6>New</h6></div>
							<a href="products4.html"><img src="images/s1.png" alt="img"></a>
							<div class="view-caption agileits-w3layouts">           
								<h4><a href="products4.html">Roller Skates</a></h4>
								<p>Lorem ipsum dolor sit amet consectetur</p>
								<h5>RS.180</h5>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
<input type="hidden" name="p_id" value="<?=$row['product_id'];?>">
									<input type="hidden" name="w3ls_item" value="Roller Skates"> 
									<input type="hidden" name="amount" value="180.00"> 
									<button type="submit" class="w3ls-cart"  data-id="<?=$row['product_id'];?>"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
							</div>         
						</div>  
					</div></div><div class="owl-item" style="width: 285px;"><div class="item">
						<div class="glry-w3agile-grids agileits"> 
							<a href="products1.html"><img src="images/f1.png" alt="img"></a>
							<div class="view-caption agileits-w3layouts">           
								<h4><a href="products1.html">T Shirt</a></h4>
								<p>Lorem ipsum dolor sit amet consectetur</p>
								<h5>RS.10</h5>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
<input type="hidden" name="p_id" value="<?=$row['product_id'];?>">
									<input type="hidden" name="w3ls_item" value="T Shirt"> 
									<input type="hidden" name="amount" value="10.00"> 
									<button type="submit" class="w3ls-cart"  data-id="<?=$row['product_id'];?>"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
							</div>        
						</div>    
					</div></div><div class="owl-item" style="width: 285px;"><div class="item">
						<div class="glry-w3agile-grids agileits"> 
							<div class="new-tag"><h6>New</h6></div>
							<a href="products6.html"><img src="images/p1.png" alt="img"></a>
							<div class="view-caption agileits-w3layouts">           
								<h4><a href="products6.html">Coffee Mug</a></h4>
								<p>Lorem ipsum dolor sit amet consectetur</p>
								<h5>RS.14</h5>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Coffee Mug"> 
									<input type="hidden" name="amount" value="14.00"> 
									<button type="submit" class="w3ls-cart"  data-id="<?=$row['product_id'];?>"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
							</div>         
						</div>  
					</div></div><div class="owl-item" style="width: 285px;"><div class="item">
						<div class="glry-w3agile-grids agileits"> 
							<div class="new-tag"><h6>20% <br> Off</h6></div>
							<a href="products6.html"><img src="images/p2.png" alt="img"></a>
							<div class="view-caption agileits-w3layouts">              
								<h4><a href="products6.html">Teddy bear</a></h4>
								<p>Lorem ipsum dolor sit amet consectetur</p>
								<h5>RS.20</h5>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
<input type="hidden" name="p_id" value="<?=$row['product_id'];?>">
									<input type="hidden" name="w3ls_item" value="Teddy bear"> 
									<input type="hidden" name="amount" value="20.00"> 
									<button type="submit" class="w3ls-cart"  data-id="<?=$row['product_id'];?>"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
							</div>        
						</div> 
					</div></div><div class="owl-item" style="width: 285px;"><div class="item">
						<div class="glry-w3agile-grids agileits"> 
							<a href="products4.html"><img src="images/s2.png" alt="img"></a>
							<div class="view-caption agileits-w3layouts">           
								<h4><a href="products4.html">Football</a></h4>
								<p>Lorem ipsum dolor sit amet consectetur</p>
								<h5>RS.70</h5>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Football"> 
									<input type="hidden" name="amount" value="70.00">
									<button type="submit" class="w3ls-cart"  data-id="<?=$row['product_id'];?>"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
							</div>        
						</div> 
					</div></div><div class="owl-item" style="width: 285px;"><div class="item">
						<div class="glry-w3agile-grids agileits"> 
							<div class="new-tag"><h6>Sale</h6></div>
							<a href="products3.html"><img src="images/h1.png" alt="img"></a>
							<div class="view-caption agileits-w3layouts">           
								<h4><a href="products3.html">Wall Clock</a></h4>
								<p>Wall Clock</p>
								<h5>RS.80</h5>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Wall Clock"> 
									<input type="hidden" name="amount" value="80.00"> 
									<button type="submit" class="w3ls-cart"  data-id="<?=$row['product_id'];?>"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
							</div>         
						</div>  
					</div></div></div></div>
					  
					
					
					
					
					 
					 
				<div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page active"><span class=""></span></div><div class="owl-page"><span class=""></span></div></div><div class="owl-buttons"><div class="owl-prev">prev</div><div class="owl-next">next</div></div></div></div>    
			</div>
			<!-- //recommendations -->
		</div>
	</div>
<?php
include('footer.php');
?>
	