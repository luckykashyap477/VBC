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
<div class="login-page" style="padding:1rem;">
			<h3 class="w3ls-title w3ls-title1">Change Password</h3>  
			<div class="login-body" style="width:80%;">
				<form action="change_pass.php" method="post" enctype="multipart/form-data">
                <?php
                    if ($_SERVER['REQUEST_METHOD']=="POST") 
                    {
                        if(MD5($_POST['old_pass'])!=$res['customer_pass']){
                            echo "<p style='color:red;'>Wrong Password entered...</p>";
                            // die();
                        }
                        else if($_POST['new_pass']!=$_POST['cnew_pass']){
                            echo "<p style='color:red;'>Incorrect in New/Confirm Password</p>";
                            // die();
                        }
                    }
                ?>
                    <input type="password" name="old_pass" class="lock" placeholder="Enter your Old Password" required="true">
                    <input type="password" name="new_pass" class="lock" placeholder="Enter New Password" required="true">
					<input type="password" name="cnew_pass" class="lock" placeholder="confirm your Password" required="true">
					<?php 
                        if(!empty($pass)){ ?>
                        <span sytle="color:red;"><?=$pass;?></span>
					<?php } ?>
					<input type="submit" value="Update Password">
				</form>
			</div>  
	</div>
