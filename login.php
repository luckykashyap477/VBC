<?php
include('header.php');
if ($_SERVER['REQUEST_METHOD']=="POST") {
	$customer_email=$_POST['c_email'];
	$customer_pass=MD5($_POST['c_password']);
	$select_customers="select  `customer_id`, `customer_name`, `customer_email` from customers where customer_email='$customer_email' AND customer_pass='$customer_pass'";
	$run_cust=mysqli_query($con, $select_customers);
	$check_customer=mysqli_num_rows($run_cust);
	$row=mysqli_fetch_array($run_cust);
	if ($check_customer==1) {
		$_SESSION['customer_email']=$row['customer_email'];
		$_SESSION['customer_name']=$row['customer_name'];
		echo "<script>window.open('index.php','_self')</script>";
	}
	else
	{
		$msg='<p style="color:red">Email id and Password missmatch!</p>';
	}
}
?>

<div class="login-page">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">Login to your account</h3>  
			<?php 
			if(!empty($msg))
			echo $msg;
			?>
			<div class="login-body">
				<form action="login.php" method="post">
					<input type="text" class="user" name="c_email" placeholder="Enter your email" required="true">
					<input type="password" name="c_password" class="lock" placeholder="Password" required="true">
					<input type="submit" value="Login">
					<div class="forgot-grid">
						<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Remember me</label>
						<div class="forgot">
							<a href="#">Forgot Password?</a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</form>
			</div>  
			<h6> Not a Member? <a href="signup.php">Sign Up Now »</a> </h6> 
			<div class="login-page-bottom social-icons">
				<h5>Recover your social account</h5>
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


