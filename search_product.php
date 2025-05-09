<?php
include('header.php');
$search_txt=$_GET['search'];
?>

<div class="products">	 
		<div class="container">
			<div class="col-md-12 product-w3ls-right">
				<!---728x90--->				
				<div class="clearfix"> </div>
				<!-- //breadcrumbs -->
                <?php 
                        $Sql="SELECT * FROM `products` WHERE CONCAT(`product_title`, ' ', `product_desc`) LIKE CONCAT('%', '".$search_txt."', '%');";
                        $result=mysqli_query($con, $Sql);
                        $num_rows = mysqli_num_rows($result);
                        // echo $num_rows;
                        if($num_rows>0){
                    ?>
				<div class="product-top">
					<h4>Searched Products</h4>
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
									<button type="submit" class="w3ls-cart pw3ls-cart" data-id="<?=$row['product_id'];?>"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form> 
							</div>
						</div> 
					</div>

            <?php } }
            else{ // if product is not found ------------------------
                // echo "product is not found";
            ?>
            <center>
				<h1>Not Found :(</h1>
                <img src="admin_area/admin_images/not_found.png" alt="Searched Products Not Found"/>
            </center>
            <?php } ?>

            <div class="clearfix"> </div>
				</div>
				<!---728x90---> 
			</div>
		
			<div class="clearfix"> </div>
			
		</div>
	</div>
<?php
include('footer.php');
?>
	