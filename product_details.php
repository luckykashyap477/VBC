<?php include('header.php'); ?>
<script src="js/imagezoom.js"></script>
<style>
	* {
	box-sizing: border-box;
	font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
	}


	#w3lDemoBar.w3l-demo-bar {
	top: 0;
	right: 0;
	bottom: 0;
	z-index: 9999;
	padding: 40px 5px;
	padding-top:70px;
	margin-bottom: 70px;
	background: #0D1326;
	border-top-left-radius: 9px;
	border-bottom-left-radius: 9px;
	}

	#w3lDemoBar.w3l-demo-bar a {
	display: block;
	color: #e6ebff;
	text-decoration: none;
	line-height: 24px;
	opacity: .6;
	margin-bottom: 20px;
	text-align: center;
	}

	#w3lDemoBar.w3l-demo-bar span.w3l-icon {
	display: block;
	}

	#w3lDemoBar.w3l-demo-bar a:hover {
	opacity: 1;
	}

	#w3lDemoBar.w3l-demo-bar .w3l-icon svg {
	color: #e6ebff;
	}
	#w3lDemoBar.w3l-demo-bar .responsive-icons {
	margin-top: 30px;
	border-top: 1px solid #41414d;
	padding-top: 40px;
	}
	#w3lDemoBar.w3l-demo-bar .demo-btns {
	border-top: 1px solid #41414d;
	padding-top: 30px;
	}
	#w3lDemoBar.w3l-demo-bar .responsive-icons a span.fa {
	font-size: 26px;
	}
	#w3lDemoBar.w3l-demo-bar .no-margin-bottom{
	margin-bottom:0;
	}
	.toggle-right-sidebar span {
	background: #0D1326;
	width: 50px;
	height: 50px;
	line-height: 50px;
	text-align: center;
	color: #e6ebff;
	border-radius: 50px;
	font-size: 26px;
	cursor: pointer;
	opacity: .5;
	}
	.pull-right {
	float: right;
	position: fixed;
	right: 0px;
	top: 70px;
	width: 90px;
	z-index: 99999;
	text-align: center;
	}
	/* ============================================================
	RIGHT SIDEBAR SECTION
	============================================================ */

	#right-sidebar {
	width: 90px;
	position: fixed;
	height: 100%;
	z-index: 1000;
	right: 0px;
	top: 0;
	margin-top: 60px;
	-webkit-transition: all .5s ease-in-out;
	-moz-transition: all .5s ease-in-out;
	-o-transition: all .5s ease-in-out;
	transition: all .5s ease-in-out;
	overflow-y: auto;
	}


	/* ============================================================
	RIGHT SIDEBAR TOGGLE SECTION
	============================================================ */

	.hide-right-bar-notifications {
	margin-right: -300px !important;
	-webkit-transition: all .3s ease-in-out;
	-moz-transition: all .3s ease-in-out;
	-o-transition: all .3s ease-in-out;
	transition: all .3s ease-in-out;
	}



	@media (max-width: 992px) {
	#w3lDemoBar.w3l-demo-bar a.desktop-mode{
		display: none;

	}
	}
	@media (max-width: 767px) {
	#w3lDemoBar.w3l-demo-bar a.tablet-mode{
		display: none;

	}
	}
	@media (max-width: 568px) {
	#w3lDemoBar.w3l-demo-bar a.mobile-mode{
		display: none;
	}
	#w3lDemoBar.w3l-demo-bar .responsive-icons {
		margin-top: 0px;
		border-top: none;
		padding-top: 0px;
	}
	#right-sidebar,.pull-right {
		width: 90px;
	}
	#w3lDemoBar.w3l-demo-bar .no-margin-bottom-mobile{
		margin-bottom: 0;
	}
	}
</style>

<?php
$productId=$_GET['id'];
$Sql="SELECT * FROM `products` WHERE `product_id`='".$productId."'";
$result=mysqli_query($con, $Sql);
$row=mysqli_fetch_array($result);
$SalePrice=$row['product_price'];
$specialAmount=$row['product_price']+100;
//$percent=($specialAmount - $SalePrice);
//$percent =  100 * $SalePrice / $specialAmount;

//$percent = (($specialAmount - $SalePrice)*100) /$SalePrice;

?>
	<!-- products -->
	<div class="products">	 
		<div class="container">  
			<div class="single-page">
				<div class="single-page-row" id="detail-21">
					<div class="col-md-6 single-top-left">	
						<div class="flexslider">
							<ul class="slides">
								<li data-thumb="<?=$siteUrl;?>admin_area/product_images/<?=$row['product_img1']?>">
									<div class="thumb-image detail_images"> 
										<img src="<?=$siteUrl;?>admin_area/product_images/<?=$row['product_img1']?>" data-imagezoom="true" class="img-responsive" alt=""> </div>
								</li>
								<li data-thumb="<?=$siteUrl;?>admin_area/product_images/<?=$row['product_img2']?>">
									 <div class="thumb-image"> 
										<img src="<?=$siteUrl;?>admin_area/product_images/<?=$row['product_img2']?>" data-imagezoom="true" class="img-responsive" alt=""> </div>
								</li>
								<li data-thumb="<?=$siteUrl;?>admin_area/product_images/<?=$row['product_img3']?>">
								   <div class="thumb-image"> 
									<img src="<?=$siteUrl;?>admin_area/product_images/<?=$row['product_img3']?>" data-imagezoom="true" class="img-responsive" alt=""> </div>
								</li> 
							</ul>
						</div>
					</div>
					<div class="col-md-6 single-top-right">
						<h3 class="item_name"><?=$row['product_title']?></h3>
						<p>Processing Time: Item will be shipped out within 2-3 working days. </p>
						<div class="single-rating">
							<ul>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li class="rating">20 reviews</li>
								<li><a href="#">Add your review</a></li>
							</ul> 
						</div>
						<div class="single-price">
							<ul>
								<li><i class="fa fa-rupee"></i> <?=$row['product_price']?></li>  
								<li><del><i class="fa fa-rupee"></i> <?=$specialAmount?></del></li> 
								<!--<li><span class="w3off">% OFF</span></li> -->
								
								<li><a href="#"><i class="fa fa-gift" aria-hidden="true"></i> Coupon</a></li>
							</ul>	
						</div> 
						<p class="single-price-text"><?=$row['product_desc']?></p>
						<form action="#" method="post">
							<input type="hidden" name="cmd" value="_cart" />
							<input type="hidden" name="add" value="1" /> 
							<input type="hidden" name="w3ls_item" value="<?=$row['product_title']?>" /> 
							<input type="hidden" name="amount" value="<?=$row['product_price']?>" /> 
							<button type="submit" class="w3ls-cart" >
								<i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
						</form>
						<button class="w3ls-cart w3ls-cart-like"><i class="fa fa-heart-o" aria-hidden="true">

						</i> Add to Wishlist</button>
					</div>
				   <div class="clearfix"> </div>  
				</div>
				<div class="single-page-icons social-icons"> 
					<ul>
						<li><h4>Share on</h4></li>
						<li><a href="#" class="fa fa-facebook icon facebook"> </a></li>
						<li><a href="#" class="fa fa-twitter icon twitter"> </a></li>
						<li><a href="#" class="fa fa-google-plus icon googleplus"> </a></li>
						<li><a href="#" class="fa fa-dribbble icon dribbble"> </a></li>
						<li><a href="#" class="fa fa-rss icon rss"> </a></li> 
					</ul>
				</div>
			</div> 
			<!---728x90--->
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
				<div id="owl-demo5" class="owl-carousel">
				<?php 
				$Sql="SELECT * FROM `products`";
				$result=mysqli_query($con, $Sql);
				while ($row=mysqli_fetch_array($result)) {
				?>

				<div class="item">
						<div class="glry-w3agile-grids agileits">
							<div class="new-tag"><h6>20% <br> Off</h6></div>
							<a href="product_details.php?id=<?=$row['product_id'];?>"><img src="<?=$siteUrl;?>admin_area/product_images/<?=$row['product_img1']?>" alt="img"></a>
							<div class="view-caption agileits-w3layouts">           
								<h4><a href="product_details.php?id=<?=$row['product_id'];?>"><?=$row['product_title']?></a></h4>
								
								<h5><?=$row['product_price']?></h5>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls_item" value="<?=$row['product_title']?>" /> 
									<input type="hidden" name="amount" value="<?=$row['product_price']?>" /> 
									<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
							</div>        
						</div> 
					</div>
<?php } ?>
</div>
			<!-- //recommendations --> 
			<!---728x90--->
			<!-- collapse-tabs -->
			<div class="collpse tabs">
				<h3 class="w3ls-title">About this item</h3> 
				<div class="panel-group collpse" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title">
								<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									<i class="fa fa-file-text-o fa-icon" aria-hidden="true"></i> Description <span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
								</a>
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingTwo">
							<h4 class="panel-title">
								<a class="collapsed pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									<i class="fa fa-info-circle fa-icon" aria-hidden="true"></i> additional information <span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
								</a> 
							</h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							<div class="panel-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingThree">
							<h4 class="panel-title">
								<a class="collapsed pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									<i class="fa fa-check-square-o fa-icon" aria-hidden="true"></i> reviews (5) <span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
								</a>
							</h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="panel-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingFour">
							<h4 class="panel-title">
								<a class="collapsed pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									<i class="fa fa-question-circle fa-icon" aria-hidden="true"></i> help <span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
								</a>
							</h4>
						</div>
						<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
							<div class="panel-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //collapse --> 
			<!-- offers-cards --> 
			<div class="w3single-offers offer-bottom"> 
				<div class="col-md-6 offer-bottom-grids">
					<div class="offer-bottom-grids-info2">
						<h4>Special Gift Cards</h4> 
						<h6>More brands, more ways to shop. <br> Check out these ideal gifts!</h6>
					</div>
				</div>
				<div class="col-md-6 offer-bottom-grids">
					<div class="offer-bottom-grids-info">
						<h4>Flat $10 Discount</h4> 
						<h6>The best Shopping Offer <br> On Fashion Store</h6>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!-- //offers-cards -->
		</div>
	</div>
	<!--//products-->  
	<?php include('footer.php');?>