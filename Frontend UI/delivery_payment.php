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

		<div class="g-box">
			<p class="g-header">DELIVERY INFORMATION</p>
			<div class="g-vsap"></div>
			<form action="" class="f-basic">
				<div class="row">
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-6">
								<div class="f-basic_group">
									<label for="">County</label>
									<select name="" id="">
										<option value="">Select Country</option>
									</select>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="f-basic_group">
									<label for=""> City</label>
									<select name="" id="">
										<option value="">Select City</option>
									</select>
								</div>
							</div>
						</div>
						<div class="f-basic_group">
							<label>Post Code</label>
							<input type="text">	
						</div>
					</div>
					<div class="col-lg-6">
						<div class="f-basic_group">
							<label for="">Address</label>
							<textarea style="min-height: 100px;"></textarea>
						</div>
					</div>
				</div>

				

				
			</form>
			
			<div class="g-vsap"></div>
			<p class="g-header">PAYMENT </p>
			<div class="g-vsap"></div>

			<div class="g-innerwrap">
				<label for=""><input type="checkbox"><span class="g-text-primary">CASH ON DELIVERY</span></label>
				<label for=""><input type="checkbox"><span class="g-text-primary">CREDIT CARD</span></label>
				<label for=""><input type="checkbox"><span class="g-text-primary">GIFT CARD</span></label>

			</div>

			<form action="" class="g-innerwrap f-basic">
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

				<div class="g-vsap"></div>
				<div class="f-basic_group">
					<input type="submit" value="SUBMIT" class="btn">
				</div>


				
			</form>

			<div class="g-vsap"></div>


			
		</div>

		
	</div>

</div>
<?php include 'footer.php'; ?>