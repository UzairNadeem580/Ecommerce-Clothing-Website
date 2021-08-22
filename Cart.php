<?php 

include 'config.php';


if (isset($_POST['submit'])) {
	$name = $_POST['name'];
  $email = $_POST['email'];
	$pid = $_POST['pid'];
	$pname =$_POST['pname'];
	$qty =$_POST['qty'];
	$address = $_POST['address'];
	
			$sql = "INSERT INTO orders (Name,Email,PID,PName,Qty,Address)
					VALUES ('$name','$email','$pid','$pname','$qty','$address')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Your Response Inserted.')</script>";
				$name = "";
				$email = "";
				$qty = "";
				$address = "";
        $pname="";
				$pid = "";
			} 
      else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
	
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>Cart</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    



	<!-- //font-awesome-icons -->
	<link href="//fonts.googleapis.com/css?family=Montserrat:100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">

  <link href="css/Cart.css" rel="stylesheet">
</head>

<body>
	
  
	
	<!-- //banner -->
	<!-- top Products -->
	<div class="ads-grid_shop">
		<div class="shop_inner_inf">
			<div class="privacy about">
				<h1 class="ch">Check Out</h1>

				<div class="checkout-right">
					<h4>Your shopping cart contains: <span>3 Products</span></h4>
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>SL No.</th>
								<th>Product</th>
								<th>Quality</th>
								<th>Product Name</th>

								<th>Price</th>
							
							</tr>
						</thead>
						
				
								<td class="invert">1</td>
								<td class="invert-image"><a href="#"><img src="images/s1.jpg" alt=" " class="img-responsive"></a></td>
								<td class="invert">
									<div class="quantity">
										<div class="quantity-select">
											<div class="entry value-minus">&nbsp;</div>
											<div class="entry value"><span>1</span></div>
											<div class="entry value-plus active">&nbsp;</div>
										</div>
									</div>
								</td>
								<td class="invert">Bella Toes</td>
								<td class="invert">$675.00</td>
								</div>

								</td>
							</tr>
				
								<td class="invert">2</td>
								<td class="invert-image"><a href="#"><img src="images/s5.jpg" alt=" " class="img-responsive"></a></td>
								<td class="invert">
									<div class="quantity">
										<div class="quantity-select">
											<div class="entry value-minus">&nbsp;</div>
											<div class="entry value"><span>1</span></div>
											<div class="entry value-plus active">&nbsp;</div>
										</div>
									</div>
								</td>
								<td class="invert">Red Bellies</td>

								<td class="invert">$325.00</td>
										
									</div>

								</td>
							</tr>
					
								<td class="invert">3</td>
								<td class="invert-image"><a href="#"><img src="images/s2.jpg" alt=" " class="img-responsive"></a></td>
								<td class="invert">
									<div class="quantity">
										<div class="quantity-select">
											<div class="entry value-minus">&nbsp;</div>
											<div class="entry value"><span>1</span></div>
											<div class="entry value-plus active">&nbsp;</div>
										</div>
									</div>
								</td>
								<td class="invert">Chikku Loafers</td>

								<td class="invert">$405.00</td>
										
									</div>

								</td>
							</tr>

						
					</table>
				</div>
				<div class="checkout-left">
					<div class="col-md-4 checkout-left-basket">
						<h4>Continue to basket</h4>
						<ul>
							<li>Product1 <i>-</i> <span>$675.00 </span></li>
							<li>Product2 <i>-</i> <span>$325.00 </span></li>
							<li>Product3 <i>-</i> <span>$405.00 </span></li>
							<li>Total Service Charges <i>-</i> <span>$55.00</span></li>
							<li>Total <i>-</i> <span>$1405.00</span></li>
						</ul>
					</div>
					<div class="col-md-8 address_form">
						<h4>Add a new Details</h4>
						<form action="#" method="post" class="creditly-card-form agileinfo_form">
							<section class="creditly-wrapper wrapper">
								<div class="information-wrapper">
									<div class="first-row form-group">
										<div class="controls">
											<label class="control-label">Full name: </label>
											<input class="billing-address-name form-control" type="text" name="name" placeholder="Full name">
										</div>
										<div class="card_number_grids">
											<div class="card_number_grid_left">
												<div class="controls">
													<label class="control-label">Email:</label>
													<input class="form-control" type="text" name="email" placeholder="Email">
												</div>
											</div>
											<div class="card_number_grid_right">
												<div class="controls">
													<label class="control-label">Product ID: </label>
													<input class="form-control" type="text" name="pid" placeholder="Product ID">
												</div>
											</div>
											<div class="controls">
											<label class="control-label">Product Name</label>
											<input class="form-control" type="text" name="pname" placeholder="Product Name">
										</div>
											<div class="controls">
											<label class="control-label">Quantity</label>
											<input class="form-control" type="text" name="qty" placeholder="Quantity">
										</div>
										
										</div>
										
										<div class="controls">
											<label class="control-label">Payment type: </label>
											<select class="form-control option-w3ls">
																							<option>Home Delivery</option>
																							<option>Online Transfer</option>
																							
							
																					</select>
										</div>
										<div class="controls">
											<label class="control-label">Address: </label>
											<input class="form-control" type="text" name="address" placeholder="Address">
										</div>
									
									</div>
									<button name="submit" class="submit check_out">Confirm Order</button>
								</div>
							</section>
						</form>
						
					</div>

					
				</div>
			</div>
		</div>
		<!-- //top products -->
	

	

</body>

</html>