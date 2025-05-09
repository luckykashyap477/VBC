<?php
include('header.php');
?>
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
<div class="login-page">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">Sign Up</h3>  
			<div class="login-body">
				<form action="" method="post" enctype="multipart/form-data">
					<label for="file-upload" class="custom-file-upload my-2" style="width: 8em;height: 8em;border-radius: 50%;margin-bottom:1em;">
						<i class="fa fa-user-plus" aria-hidden="true" style="font-size:7em;"></i>
					</label>
					<input id="file-upload" name="c_img" type="file" accept="image/*"/>
                    <input type="text" class="user" name="name" placeholder="Enter your name" required="true">
                    <input type="text" class="user" name="email" placeholder="Enter your email" required="true">
                    <input type="text" class="user" name="mob_no" placeholder="Enter your Contact No." maxlength="10" required="true" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
					<input type="password" name="password" class="lock" placeholder="Password" required="true">
					<input type="password" name="cpassword" class="lock" placeholder="confirm Password" required="true">
					<?php 
					if(!empty($pass)){ ?>
					<span sytle="color:red;"><?=$pass;?></span>
					<?php } ?>
                    <input type="text" class="user" name="city" placeholder="Enter your City" >
                    <input type="text" class="user" name="country" placeholder="Enter your Country" >
                    <input type="text" class="user" name="address" placeholder="Enter your Address">
					<input type="submit" value="Register">
					<div class="forgot-grid">
						<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Remember me</label>
						<div class="forgot">
							<a href="#">Forgot Password?</a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</form>
			</div>  
			<h6> Already Member? <a href="login.php">Login Now »</a> </h6> 
			<div class="login-page-bottom social-icons">
				<h5>Or Signup with your social account</h5>
				<ul>
					<li><a href="#" class="fa fa-facebook icon facebook"> </a></li>
					<li><a href="#" class="fa fa-twitter icon twitter"> </a></li>
					<li><a href="#" class="fa fa-google-plus icon googleplus"> </a></li>
					<li><a href="#" class="fa fa-dribbble icon dribbble"> </a></li>
					<li><a href="#" class="fa fa-rss icon rss"> </a></li> 
				</ul> 
			</div>
		</div>
	</div>

<?php
	include('footer.php');
?>

