<?php include 'header.php'; ?>
<div class="l-mainbody">
	<div class="g-vsap"></div>
	<div class="g-vsap"></div>
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="#">My Account</a></li>
			<li class="active">Registration</li>
		</ol>

		<h4 class="g-text-primary g-text-strong g-innerwrap">Registration</h4>

		<div class="g-box">
			
			<p class="g-header">New Customer</p>
			
			<div class="g-vsap"></div>
			
			<div class="g-innerwrap">
				<form action="<?=URI::parse('home/registration') ?>" method="POST" class="f-basic g-innerwrap">	
				<div class="row">
					<div class="col-lg-6">
						
						<p class="g-header">PERSONAL Adress</p>

					
							<div class="row">
								<div class="col-lg-6">
									<div class="f-basic_group">
										<label for="">First Name</label>
										<input type="text" name="customer_fname" required>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="f-basic_group">
										<label for="">Last Name</label>
										<input type="text" name="customer_lname" required>
									</div>
								</div>
							</div>

							<div class="f-basic_group">
								<label for="">Email</label>
								<input type="text" name="customer_email" required>
							</div>

							<div class="row">
								<div class="col-lg-6">
									<div class="f-basic_group">
										<label for="">Phone No.</label>
										<input type="text" name="customer_phone" >
									</div>
								</div>
								<div class="col-lg-6">
									<div class="f-basic_group">
										<label for="">Mobile Phone No.</label>
										<input type="text" name="customer_phone" required>
									</div>
								</div>
							</div>


							<div class="row">
								<div class="col-lg-6">
									<div class="f-basic_group">
										<label for="">County</label>
										<select name="" id="">
											<option value="United Kingdom">United Kingdom</option>
										</select>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="f-basic_group">
										<label for=""> City</label>
										<select name="customer_city">
											<option value="London">London</option>
										</select>
									</div>
								</div>
							</div>


							<div class="f-basic_group">
								<label for="">Post Code</label>
								<input type="text" name="customer_postcode" required>
							</div>

							<div class="f-basic_group">
								<label for="">Address</label>
								<textarea name="customer_postaladdress" required></textarea>
							</div>


						
						
					</div>	
					<div class="col-lg-6">
						
						<p class="g-header">ACCESS INFORMATION </p>

					
							<div class="f-basic_group">
								<label for="">Password</label>
								<input type="text" name="customer_password" required>
							</div>

							<div class="f-basic_group">
								<label for="">Confirm Password</label>
								<input type="text" name="cpassword" required>
							</div>

							<div class="f-basic_group">
								<label for=""><input type="checkbox">Subscribe To Newsletter</label>
							</div>

							<div class="f-basic_group">
								<label for=""><input type="checkbox">Agree to accept Terms & Condition </label>
							</div>

							<div class="g-vsap"></div>

							<div class="f-basic_group">
								<input type="submit" value="REGISTER" class="btn">
							</div>

						
						
					</div>	
				</div>
				</form>
			</div>


		</div>

		
	</div>

</div>
<?php include 'footer.php'; ?>