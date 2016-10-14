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
						<?php include 'my-account-nav.php'; ?>
					</div>
				</div>
			</div>

			<div class="col-lg-9">
				<h4 class="g-text-primary g-text-strong">ORDER DETAILS</h4>
				<div class="g-vsap"></div>

				<div class="g-box">
					<p class="g-header">ORDER SUMMERY</p>
					<div class="g-innerwrap">
						<div class="row">
							<div class="col-lg-5">
								<table width="100%">
									<tr>
										<td><strong>Order No :</strong></td>
										<td>#	CH003</td>
									</tr>

									<tr>
										<td><strong>Order Date & Time :</strong></td>
										<td> 2/11/2014 12:45pm</td>
									</tr>
									<tr>
										<td><strong>Estimated Delivery Time :</strong></td>
										<td>60min</td>
									</tr>

									<tr>
										<td><strong>Delivery Method :</strong></td>
										<td> Home Delivery</td>
									</tr>

									<tr>
										<td valign="top"><strong>Delivery Address :</strong></td>
										<td>
											<address>
												<p>
													2/409 Knight Street
													<br>Hastings 
													<br>New Zealand 4122
												</p>
											</address>
										</td>
									</tr>

								</table>						
							</div>

							<div class="col-lg-4">
								<table width="100%">
									<tr>
										<td><strong>Total Items :</strong></td> 
										<td> 7</td>
									</tr>
									<tr>
										<td><strong>Total Price:  </strong></td>
										<td> $50</td>
									</tr>
									<tr>
										<td><strong>Payment Method :</strong></td>
										<td>Gift Card</td>
									</tr>

									<tr>
										<td><strong>Total Points Earned : </strong></td>
										<td> 10</td>
									</tr>

									<tr>
										<td><strong>Order  Status : </strong></td>
										<td><span class="btn btn-info btn-mini btn-noshadow">delivered</span></td>
									</tr>
								</table>
							</div>

							<div class="col-lg-3">
								<h2 class="g-text-strong g-text-grey">Deliver Within</h2>
								<div class="g-vsap"></div>

								<div class="m-countDown">59:00 min</div>
							</div>


						</div>
					</div>

					<p class="g-header">LIST OF ITEMS</p>
					<table class="table table-striped table-bordered table-condensed">
						<tr>
							<th>#</th>
							<th>Item</th>
							<th>Special Notes</th>
							<th>QTY</th>
							<th>Price</th>
							<th>VAT</th>
							<th>Points Earned</th>
						</tr>

						<tr>
							<td>1</td>
							<td>Mark</td>
							<td>Light Hot, Well Cooked</td>
							<td>@mdo</td>
							<td>@mdo</td>
							<td>@mdo</td>
							<td>@mdo</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Jacob</td>
							<td>Light Hot, Well Cooked</td>
							<td>@mdo</td>
							<td>@mdo</td>
							<td>@mdo</td>
							<td>@mdo</td>
						</tr>
						<tr>
							<td>3</td>
							<td>Mark</td>
							<td>Light Hot, Well Cooked</td>
							<td>@mdo</td>
							<td>@mdo</td>
							<td>@mdo</td>
							<td>@mdo</td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		
	</div>

</div>
<?php include 'footer.php'; ?>