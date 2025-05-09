<style>
	input[type="file"] {
	display: none;
	}

	.custom-file-upload {
	border: 1px solid #ccc;
	display: inline-block;
	padding: 6px 12px;
	cursor: pointer;
	}
</style>
<?php 

if ($_SERVER['REQUEST_METHOD']=="POST") 
{

	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];
	$contact=$_POST['mob_no'];
	$country=$_POST['country'];
	$city=$_POST['city'];
	$address=$_POST['address'];
	$c_image=$_FILES['c_img']['name'];
  		//echo "<script>alert('".$_FILES['c_img']['tmp_name']."')</script>";
    $c_tmp_image=$_FILES['c_img']['tmp_name'];
    $c_ip=$_SERVER['REMOTE_ADDR'];
	if($password!=$cpassword)
	{
		$pass="Please Check Your Password";
		
	}
    move_uploaded_file($c_tmp_image, "customer/customer_images/$c_image");
	$insert_customer="insert into customers (customer_name, customer_email, customer_pass, customer_country, customer_city, customer_contact, customer_address, customer_image, customer_ip) values('$name','$email','".MD5($password)."','$country','$city','$contact','$address','$c_image','$c_ip')";
	$run_customer=mysqli_query($con,$insert_customer);
    $sel_cart="select * from cart where ip_add='$c_ip'";
    $run_cart=mysqli_query($con,$sel_cart);
    $check_cart=mysqli_num_rows($run_cart);
    if($check_cart>0)
	{
		$_SESSION['customer_email']=$c_email;
		$_SESSION['customer_name']=$row['customer_name'];
		echo "<script>window.open('index.php','_self')</script>";
	}else {
		$_SESSION['customer_email']=$c_email;
		echo "<script>alert('you have been registered successfully')</script>";
		echo "<script>window.open('index.php','_self')</script>"; 
	}
}

?>
<div class="login-page" style="padding:1rem;">
			<h3 class="w3ls-title w3ls-title1">Edit your Account</h3>  
			<div class="login-body" style="width:80%;">
				<form action="" method="post" enctype="multipart/form-data">
					<label for="file-upload" class="custom-file-upload my-2" style="width: 8em;height: 8em;border-radius: 50%;margin-bottom:1em;overflow:hidden;">
                        <?php if(empty($res['customer_image'])){ ?>
						    <i class="fa fa-user-plus" aria-hidden="true" style="font-size:7em;"></i>
                        <?php }else {?>

                        <img src="http://localhost/ecommerce/customer/customer_images/<?=$res['customer_image']?>" style="/* background-size: cover; */width: 100%;height: 100%;background-position: center;">
                        <?php }?>
					</label>
					<input id="file-upload" name="c_img" type="file" accept="image/*"/>
                    <input type="text" class="user" name="name" placeholder="Enter your name" value="<?=$res['customer_name']?>" required="true">
                    <input type="text" class="user" name="email" placeholder="Enter your email" value="<?=$res['customer_email']?>" required="true">
                    <input type="text" class="user" name="mob_no" placeholder="Enter your Contact No." value="<?=$res['customer_contact']?>" maxlength="10" required="true" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
					<?php 
                        if(!empty($pass)){ ?>
                        <span sytle="color:red;"><?=$pass;?></span>
					<?php } ?>
                    <input type="text" class="user" name="city" value="<?=$res['customer_city']?>" placeholder="Enter your City" >
                    <input type="text" class="user" name="country" value="<?=$res['customer_country']?>" placeholder="Enter your Country" >
                    <input type="text" class="user" name="address" value="<?=$res['customer_address']?>" placeholder="Enter your Address">
					<input type="submit" value="Update">
				</form>
			</div>  
	</div>
