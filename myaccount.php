<?php include('header.php') ?>

<link href="css/style2.css" rel="stylesheet" type="text/css"/> 

<div class="products">	 
		<div class="container1" style="@media (min-width: 768px) {
    .container {
        width: 85% !important;
    }
}">
        <div class="col-md-3 rsidebar table-bordered">
            <div class="w-100  rsidebar">
                <div class="user-bar" style="width: 100%;text-align: center; margin-bottom:1rem;">
                    <a href="#">
                        <?php
                        $email=$_SESSION['customer_email'];
                        $sql = "SELECT * FROM `customers` WHERE customer_email='$email';";
                        $res = mysqli_query($con, $sql);
                        $res = mysqli_fetch_array($res);
                        ?>
                        <label for="file-upload" class="custom-file-upload my-2" style="width: 8em;height: 8em;border-radius: 50%;margin-bottom:1em;overflow:hidden;">
                        <?php if(empty($res['customer_image'])){ ?>
						    <i class="fa fa-user" aria-hidden="true" style="font-size:7em;"></i>
                        <?php }else {?>

                        <img src="http://localhost/ecommerce/customer/customer_images/<?=$res['customer_image']?>" style="/* background-size: cover; */width: 100%;height: 100%;background-position: center;">
                        <?php }?>
					</label>
                    </a>
                    <h3>Hey, <?=$res['customer_name']?></h3>
                </div>
                <!-- <hr> -->
                <div class="d-flex user-features">
                    <a href="myaccount.php?my_order"> <i class="fa fa-truck"></i>  My Orders</a>
                    <a href="myaccount.php?payment"> <i class="fa fa-money"></i>  Pay Offline</a>
                    <a href="myaccount.php?edit_account"> <i class="fa fa-pencil-square"></i>  Edit Account</a>
                    <a href="myaccount.php?change_pass"> <i class="fa fa-key"></i>  Change Password</a>
                    <a href="myaccount.php?del_acc"> <i class="fa fa-trash"></i>  Delete Account</a>
                    <a href="logout.php"> <i class="fa fa-sign-out" aria-hidden="true"></i>  Logout</a>
                </div>
			</div>
        </div>

        <!-- My Account Content -->
        <div class="col-md-9 product-w3ls-right">

        <!-- My Orders -->
            <?php
                if (isset($_GET['my_order']))
                {
                include("my_orders.php");
                }
            ?>

            <!-- Edit Account -->
            <?php
                if (isset($_GET['edit_account']))
                {
                include("edit_account.php");
                }
            ?>

            <!-- Change Password -->
            <?php
                if (isset($_GET['change_pass']))
                {
                include("change_pass.php");
                }
            ?>
        

        </div>

        <div class="clearfix"> </div>			
    </div>
</div>

<?php include('footer.php') ?>
