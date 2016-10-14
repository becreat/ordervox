<?php include 'header.php'; ?>
<div class="l-mainbody">
	<div class="g-vsap"></div>
	<div class="g-vsap"></div>
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="#">My Account</a></li>
			<li class="active">Login</li>
		</ol>

		<h4 class="g-text-primary g-text-strong g-innerwrap">MY ACCOUNT</h4>

		<div class="g-box">
			<p class="g-header">LOGIN OPTIONS</p>
			<div class="g-vsap"></div>
			<div class="row">
				<div class="col-lg-6">				
					<div class="g-innerwrap">
						<h4 class="g-text-primary g-text-strong">I AM</h4>
						<div class="g-vsap"></div>

						<label for=""><input type="checkbox">Already Registered</label>
						<br><label for=""><input type="checkbox">New Customer</label>
						<div class="g-vsap"></div>

						<p>
							By creating an account you will be able to shop faster, be up to date on an order's 
							status, and keep track of the orders you have previously made.
						</p>

						<div class="g-vsap"></div>

						<a href="" class="btn btn-noshadow">CONTINUE</a>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="g-innerwrap">
						<h4 class="g-text-primary g-text-strong">ALREADY REGISTERED</h4>
						<div class="g-vsap"></div>

						<form action="" class="f-basic">
							<div class="f-basic_group">
								<label>E-Mail</label>
								<input type="text">
							</div>
							<div class="f-basic_group">
								<label>Password</label>
								<input type="password">
							</div>
						</form>

					

						<div class="g-vsap"></div>

						<a href="" class="btn btn-noshadow">Login</a>
					</div>
				</div>
			</div>
			<div class="g-vsap"></div>
			<p class="g-header">CUSTOMER INFORMATION</p>
			<div class="g-vsap"></div>
			<div class="row">
				<div class="col-lg-6">
					
					<p class="g-header">PERSONAL Adress</p>

					<form action="" class="f-basic g-innerwrap">
						
						<div class="row">
							<div class="col-lg-6">
								<div class="f-basic_group">
									<label for="">First Name</label>
									<input type="text">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="f-basic_group">
									<label for="">Last Name</label>
									<input type="text">
								</div>
							</div>
						</div>

						<div class="f-basic_group">
							<label for="">Email</label>
							<input type="text">
						</div>

						<div class="row">
							<div class="col-lg-6">
								<div class="f-basic_group">
									<label for="">Phone No.</label>
									<input type="text">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="f-basic_group">
									<label for="">Mobile Phone No.</label>
									<input type="text">
								</div>
							</div>
						</div>


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
							<label for="">Post Code</label>
							<input type="text">
						</div>

						<div class="f-basic_group">
							<label for="">Address</label>
							<textarea></textarea>
						</div>


					</form>
					
				</div>	
				<div class="col-lg-6">
					
					<p class="g-header">ACCESS INFORMATION </p>

					<form action="" class="f-basic g-innerwrap">
						<div class="f-basic_group">
							<label for="">Password</label>
							<input type="text">
						</div>

						<div class="f-basic_group">
							<label for="">Confirm Password</label>
							<input type="text">
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

					</form>
					
				</div>	
			</div>
		</div>

		
	</div>

</div>
<?php include 'footer.php'; ?>