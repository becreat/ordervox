<?php include 'header.php'; ?>
<div class="l-mainbody">
	<div class="g-vsap"></div>
	<div class="g-vsap"></div>
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="#">VIEW CART</a></li>
			<li><a href="#">CHECKOUT</a></li>
			<li class="active">PAYMENT</li>
		</ol>

		<h4 class="g-text-primary g-text-strong g-innerwrap">DELIVERY & PAYMENT</h4>

		<div class="g-box" ng-controller="Order">
			<p class="g-header">DELIVERY INFORMATION</p>
			<div class="g-vsap"></div>
			<form class="f-basic" name="OrderForm" ng-submit="OrderForm.$valid && submitOrder()" method="POST">
				<div class="row">
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-6">
								<div class="f-basic_group">
									<label for="">County</label>
									<select>
										<option value="United Kingdom">United Kingdom</option>
									</select>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="f-basic_group" ng-init="order.order_delivery_city='London'">
									<label for=""> City</label>
									<select ng-model="order.order_delivery_city">
										<option value="London">London</option>
									</select>
								</div>
							</div>
						</div>
						<div class="f-basic_group">
							<div class="row">
								<div class="col-lg-6">
									<label>Post Code</label>
									<input type="text" ng-model="order.order_delivery_postcode" required>	
								</div>

								<div class="col-lg-6">
									<label>Phone Number</label>
									<input type="text" ng-model="order.order_delivery_phone_number" required>	
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="f-basic_group">
							<label for="">Address</label>
							<textarea ng-model="order.order_delivery_postaladdress" style="min-height: 100px;" required></textarea>
						</div>
					</div>
				</div>

				

				
			
			
			<div class="g-vsap"></div>
			<p class="g-header">PAYMENT </p>
			<div class="g-vsap"></div>

			<div class="g-innerwrap">
				
			


			    <div class="btn-group">
			          <label class="btn btn-primary" ng-model="paymentmethod" uib-btn-radio="1"> CASH ON DELIVERY</label>
			          <label class="btn btn-primary" ng-model="paymentmethod" uib-btn-radio="2"> CREDIT CARD</label>
			          <label class="btn btn-primary" ng-model="paymentmethod" uib-btn-radio="3"> GIFT CARD</label>
			      </div>

			

			</div>

			<div class="g-innerwrap f-basic" ng-show="paymentmethod==2">
				<div class="row">
					<div class="col-lg-6">
						<div class="f-basic_group">
							<label for="">Name on the card</label>
							<input type="text">	
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-6">
						<div class="f-basic_group">
							<label for="">Card Number</label>
							<input type="text">	
						</div>
					</div>

					<div class="col-lg-4">
						<div class="f-basic_group">
							<label for="">CCV</label>
							<input type="text">	
						</div>
					</div>
				</div>
				
				<div class="f-basic_group">
					<label>Expiry Date</label>
					<div class="row">
						<div class="col-lg-2">
							<select>
								<option value="">MM</option>
							</select>
						</div>
						<div class="col-lg-2">
							<select>
								<option value="">YY</option>
							</select>
						</div>
					</div>
				</div>


				
			</div>


			<div  class="g-innerwrap f-basic" ng-show="paymentmethod==3">
				<div class="row">
					<div class="col-lg-6">
						<div class="f-basic_group">
							<label for="">Gift Card Number :</label>
							<input type="text">	
						</div>
					</div>
				</div>

				

				
			</div>

			<div class="g-vsap"></div>

			<div class="f-basic_group">
				<input type="submit" value="SUBMIT" class="btn">
			</div>

			</form>



			
		</div>

		
	</div>

</div>
<?php include 'footer.php'; ?>