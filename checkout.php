<?php
include('header.php');

if(empty($_SESSION['customer_email'])){
  echo "<script>window.open('login.php','_self')</script>";
  exit();
}

if ($_SERVER['REQUEST_METHOD']=="POST")
{
  $cat=$_POST['cat'];
  $p_id=$_POST['p_id'];
  $email=$_SESSION['customer_email'];
  // Remove Element from cart
  if($cat=='rem'){
    $Sql = "DELETE FROM `cart` WHERE p_id='$p_id' AND customer_email='$email'";
    if(!mysqli_query($con, $Sql)){
      echo "<script>alert('There is Something Technical Issue due to which we Unable to Remove Item From Cart');</script>";
    }
  }
}
?>

<link href="css/style2.css" rel="stylesheet" type="text/css" media="all" /> 
<style>

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}
.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}



input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  /* margin: 10px 0; */
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>

<div class="values">
		<div class="container"> 
    <div class="row">
  <div class="col-75">
    <div class="container">
      
        <div class="row">

        <div class="col-25">
          <div class="container">
            <!-- <h3>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h3>
            <hr>
            <p><a href="#">Product 1</a> <span class="price">$15</span></p>
            <p><a href="#">Product 2</a> <span class="price">$5</span></p>
            <hr>
            <p>Total <span class="price" style="color:black"><b>$30</b></span></p> -->


            <section class="h-100 gradient-custom">
              <div class="container py-5">
                <div class="row d-flex justify-content-center my-4">
                  <div class="col-md-8 table-bordered p-2 border-rounded">
                    <div class="card mb-4">
                      <div class="card-header py-3">

                        <?php
                          $email = $_SESSION['customer_email'];
                          // echo $email;
                          $itemsInCart = mysqli_num_rows($result);
                          $Sql = "SELECT * FROM `cart` WHERE customer_email='$email'";
                          $result = mysqli_query($con, $Sql);
                          if(!mysqli_num_rows($result)){ echo "Cart is Empty";}
                        ?>
                        <h5 class="mb-0">Cart - <?php echo mysqli_num_rows($result);?> items</h5>
                        <!-- <hr> -->
                      </div>
                      <div class="card-body">
                        <!-- Single item -->
                        <?php
                            $subtotal=0;
                            $t_qty=0;
                            while($row=mysqli_fetch_array($result)){
                              $p_id=$row['p_id'];
                              $p_sql = "SELECT * FROM `products` WHERE product_id='$p_id' ";
                              $p_result = mysqli_query($con, $p_sql);
                              $p_result = mysqli_fetch_array($p_result);
                              $t_qty=$t_qty+$row['qty'];
                              $subtotal=$subtotal+($row['qty']*$p_result['product_price']);
                        ?>
                        
                        <hr class="my-4" />
                          <div class="row">
                            <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                              <!-- Image -->
                               <a href="product_details.php?id=<?=$p_id?>">
                                <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                                  <img src="http://localhost/ecommerce/admin_area/product_images/<?=$p_result['product_img1'];?>"
                                    class="w-100" alt="<?=$p_result['product_title'];?>" />
                              </a>
                              </div>
                              <!-- Image -->
                            </div>

                          <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                            <!-- Data -->
                            <p><strong><?=$p_result['product_title'];?></strong></p>
                            <p>Color: blue</p>
                            <p>Size: <?=$row['size'];?></p>
                            <div class="d-flex gap-3">
                              <form action="checkout.php" method="post">
                                <input type='text' name='cat' value="rem" hidden>
                                <input type='number' name='p_id' value="<?=$p_id?>" hidden>
                                <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-sm me-1 mb-2" data-mdb-tooltip-init
                                  title="Remove item" style="width: 2.7em;height: 2.7em;">
                                  <i class="fa fa-trash"></i>
                                </button>
                              </form>
                              <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-danger btn-sm mb-2" data-mdb-tooltip-init
                                title="Move to the wish list" style=" width: 2.7em; height: 2.7em;">
                                <i class="fa fa-heart"></i>
                              </button>
                            </div>
                            <!-- Data -->
                          </div>

                          <div class="col-lg-3 col-md-5 mb-3 mb-lg-0">
                            <!-- Quantity -->
                            <div class="d-flex mb-4 gap-3 align-items-center" style="max-width: 300px;">
                              <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary px-3 me-2"
                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()"  style="width: 2.7em;height: 2.7em;">
                                <i class="fa fa-minus"></i>
                              </button>

                              <div data-mdb-input-init class="form-outline">
                                <input id="form1" min="0" name="quantity" value="<?=$row['qty'];?>" type="number" class="form-control" />
                                <label class="form-label" for="form1" hidden>Quantity</label>
                              </div>

                              <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary px-3 ms-2"
                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()"  style="width: 2.7em;height: 2.7em;">
                                <i class="fa fa-plus"></i>
                              </button>
                            </div>
                            <!-- Quantity -->

                            <!-- Price -->
                            <h4 class="text-start text-md-center">
                              <strong>Rs. <?=$row['qty']*$p_result['product_price'];?></strong>
                            </h4>
                            <!-- Price -->
                          </div>
                        </div>
                        <!-- Single item -->

                      <?php } ?>

                      </div>
                    </div>


                    <!-- Show Expected Date of Delevery -->
                     
                    <hr class="my-4" />
                    <div class="card">
                      <div class="card-body subtotal">
                        <h4>Subtotal (<?=$t_qty?> items): Rs. <strong><?=$subtotal?></strong></h4>
                        <!-- <p class="mb-0">12.10.2020 - 14.10.2020</p> -->
                      </div>
                    </div>

                  </div>
                  <div class="col-md-4 my-2">
                    <div class="card mb-4">
                      <div class="card-header py-3">
                        <h5 class="mb-0">Summary</h5>
                      </div>
                      <div class="card-body">
                        <ul class="list-group list-group-flush">
                          <li
                            class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                            Products
                          <span><?=$t_qty?> Items</span>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            Shipping
                            <span>A-Block, Nandgram</span>
                          </li>
                          <li
                            class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                            <div>
                              <strong>Total amount</strong>
                              <strong>
                                <p class="mb-0">(including VAT)</p>
                              </strong>
                            </div>
                            <span><strong>Rs. <?=$subtotal?></strong></span>
                          </li>
                        </ul>

                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
        <div class="row col-25 table-bordered my-2 p-2 border-rounded">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname"  placeholder="John M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
            <label>
          <input type="checkbox" name="sameadr" id="checkit"> Shipping address same as billing
        </label>
          </div>
          
        
      

          <div class="col-50">
          <h3>Shipping Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="shfname" name="firstname" placeholder="John M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="shemail" name="email" placeholder="john@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="shadr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="shcity" name="city" placeholder="New York">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="shstate" name="state" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="shzip" name="zip" placeholder="10001">
              </div>
            </div>
        </div>
          
        </div>
        
        
        <input type="submit" value="Continue to checkout" class="btn">
    </div>
  </div>

</div>

		</div>
	</div>


<script>
  $(document).ready(function(){
    $("#checkit").click(function(){
        if($(this).is(':checked')){
        var fname = $("#fname").val();
        var email = $("#email").val();
        var adr = $("#adr").val();
        var city = $("#city").val();
        var state = $("#state").val();
        var zip = $("#zip").val();
        //set the variable in lower form with vars set above
        $("#shfname").val(fname);
        $("#shemail").val(email);
        $("#shadr").val(adr);
        $("#shcity").val(city);
        $("#shstate").val(state);
        $("#shzip").val(zip);
        }else{
        //uncheck - clear input
        $("#shfname").val("");
        $("#shemail").val("");
        $("#shadr").val("");
        $("#shcity").val("");
        $("#shstate").val("");
        $("#shzip").val("");
        }
    });
});
  </script>

<?php

include('footer.php');

?>