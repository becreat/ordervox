<?php include 'header.php'; ?>
<div class="l-mainbody">
	<div class="g-vsap"></div>
	<div class="g-vsap"></div>
	<div class="container">
		<ol class="breadcrumb">
		  <li><a href="#">My Account</a></li>
		  <li class="active">Account Information</li>
		</ol>

		<div class="row">
			<div class="col-lg-3">
				<div class="m-panel">
					<div class="m-panel_header">MY ACCOUNT</div>
					<div class="m-panel_content">
						<ul class="m-nav-stacked">
							<li class="active"><a href="">ACCOUNT INFORMATION</a></li>
							<li class="active"><a href="">MY ORDERS</a></li>
							<li class="active"><a href="">MY TABLE BOOKINGS</a></li>
							<li class="active"><a href="">LOYLTY POINTS</a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-lg-9">
				<h4 class="g-text-primary g-text-strong">ACCOUNT INFORMATION</h4>
				<div class="g-vsap"></div>

				<div class="g-box">
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
							<p class="g-header">DELIVERY ADDRESS</p>

							<form action="" class="f-basic g-innerwrap">
								<div class="f-basic_group">
									<label for=""><input type="checkbox"><span class="g-text-primary">SAME AS DELIVERY ADDRESS</span></label>
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

							<div class="g-vsap"></div>
							<p class="g-header">SUMMARY</p>

							<div class="g-innerwrap">
								<table width="100%">
									<tr>
										<td valign="top">
											<p>
												<strong>Customer Code</strong> :  #	CH003
												<br><strong>Subscribe To Newsletter</strong> :  YES
												<br><strong>Active Status</strong> : ENABLED
											</p>
										</td>
										<td valign="top">
											<p>
												<strong>Total Orders Made</strong> : 15 
												<br><strong>Total Amount Spend</strong> : $315
												<br><strong>Loyty Points</strong> :  20519 
											</p>
											<div class="g-vsap"></div>
											<a href="" class="btn btn-block"><i class="fa fa-pencil-square-o"></i> EDIT</a>
										</td>
									</tr>
								</table>
							</div>


						</div>
					</div>
				</div>
			</div>
		</div>

		
	</div>

</div>
<?php include 'footer.php'; ?>