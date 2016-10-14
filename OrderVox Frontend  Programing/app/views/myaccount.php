<?php include 'header.php'; ?>
<div class="l-mainbody" ng-controller="MyAccount">
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
						<ul class="m-nav-stacked" ng-init="infotab=1">
							<li><a ng-click="infotab=1" ng-class="{active:infotab==1}">ACCOUNT INFORMATION</a></li>
							<li><a ng-click="infotab=2" ng-class="{active:infotab==2}">MY ORDERS</a></li>
							<li><a ng-click="infotab=3" ng-class="{active:infotab==3}">MY TABLE BOOKINGS</a></li>
							<li><a ng-click="infotab=4" ng-class="{active:infotab==4}">LOYLTY POINTS</a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-lg-9">
				
				
				<div ng-show="infotab==1">
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
												<input type="text" ng-model="customer.customer_fname" ng-disabled="form.disabled">
											</div>
										</div>
										<div class="col-lg-6">
											<div class="f-basic_group">
												<label for="">Last Name</label>
												<input type="text" ng-model="customer.customer_lname" ng-disabled="form.disabled">
											</div>
										</div>
									</div>

									<div class="f-basic_group">
										<label for="">Email</label>
										<input type="text"  ng-model="customer.customer_email" ng-disabled="form.disabled">
									</div>

									<div class="row">
										<div class="col-lg-6">
											<div class="f-basic_group">
												<label for="">Phone No.</label>
												<input type="text"  ng-model="customer.customer_phone" ng-disabled="form.disabled">
											</div>
										</div>
										<div class="col-lg-6">
											<div class="f-basic_group">
												<label for="">Mobile Phone No.</label>
												<input type="text" ng-model="customer.customer_mobile" ng-disabled="form.disabled">
											</div>
										</div>
									</div>


									<div class="row">
										<div class="col-lg-6">
											<div class="f-basic_group">
												<label for="">County</label>
												<select ng-disabled="form.disabled">
													<option value="">United Kingdom</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="f-basic_group">
												<label for=""> City</label>
												<select ng-disabled="form.disabled">
													<option value="">{{customer.customer_city}}</option>
												</select>
											</div>
										</div>
									</div>


									<div class="f-basic_group">
										<label for="">Post Code</label>
										<input type="text" ng-model="customer.customer_postcode" ng-disabled="form.disabled">
									</div>

									<div class="f-basic_group">
										<label for="">Address</label>
										<textarea ng-model="customer.customer_postaladdress" ng-disabled="form.disabled"></textarea>
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
													<strong>Customer Code</strong> :  #	{{customer.customer_code}}
													<br><strong>Subscribe To Newsletter</strong> :  No
													<br><strong>Active Status</strong> : ENABLED
												</p>
											</td>
											<td valign="top">
												<p>
													<strong>Total Orders Made</strong> : 15 
													<br><strong>Total Amount Spend</strong> : $315
													<br><strong>Loyty Points</strong> :  01 
												</p>
												<div class="g-vsap"></div>

												<button class="btn btn-block" ng-show="form.disabled" ng-click="form.disabled = false"><i class="fa fa-pencil-square-o"></i> EDIT</button>
												<button class="btn btn-block" ng-hide="form.disabled" ng-click="updateAccount()"><i class="fa fa-floppy-o"></i> SAVE</button>

											</td>
										</tr>
									</table>
								</div>


							</div>
						</div>
					</div>
				</div>


				<div ng-show="infotab==2">
					<h4 class="g-text-primary g-text-strong">MY ORDERS</h4>
					<div class="g-vsap"></div>

					<div class="g-box">
						<p class="g-header">TODAYS ORDER <?=time() ?></p>
						<table class="table table-striped table-bordered table-condensed">
							<tr>
								<th>#</th>
								<th>Order No.</th>
								<th>Order Date</th>
								<th>Total Items</th>
								<th>Total Price</th>
								<th>Status</th>
								<th></th>
							</tr>

							<tr ng-repeat="order in orders">
								<td>{{order.id}}</td>
								<td>{{order.order_number}}</td>
								<td>{{order.order_date*1000 | date}}</td>
								<td>{{order.order_linetotal}}</td>
								<td>{{order.order_pricetotal | currency}}</td>
								<td align="center"><span class="btn btn-mini btn-warning">{{order.order_status}}</span></td>
								<td align="center"><span ng-click="orderDetails(order)" class="btn btn-mini">Details</span></td>
							</tr>
									
						</table>	

						
					</div>
				</div>
				<div ng-show="infotab==3">
					<h4 class="g-text-primary g-text-strong">TABLE BOOKING</h4>
					<div class="g-vsap"></div>

					<div class="g-box">
						<p class="g-header">UP COMING RESERVATION </p>
						<div class="g-innerwrap">
							<div class="row">
								<div class="col-lg-4">
									<table width="100%">
										<tr>
											<td><strong>Booking Ref :</strong></td>
											<td>#	CH003</td>
										</tr>

										<tr>
											<td><strong>Name :</strong></td>
											<td>MR Brain Mill</td>
										</tr>
										<tr>
											<td><strong>Email :</strong></td>
											<td>braintest@gmail.com</td>
										</tr>

										<tr>
											<td><strong>Booking Date :</strong></td>
											<td>02/58/2014</td>
										</tr>
									</table>						
								</div>

								<div class="col-lg-4">
									<table width="100%">
										<tr>
											<td><strong>Reservation Date & Time :</strong></td> 
											<td> 7</td>
										</tr>
										<tr>
											<td><strong>No. Guest :  </strong></td>
											<td> $50</td>
										</tr>
										<tr>
											<td><strong>Setting Area : </strong></td>
											<td>Gift Card</td>
										</tr>

										<tr>
											<td><strong>Booking Status: </strong></td>
											<td> 10</td>
										</tr>

										<tr>
											<td><strong>Order  Status : </strong></td>
											<td><span class="btn btn-success btn-mini btn-noshadow">Confirmed</span></td>
										</tr>
									</table>
								</div>

								<div class="col-lg-3">
									<div class="g-vsap"></div>
									<div class="g-vsap"></div>
									<div class="g-vsap"></div>
									<div class="btn">CHANGE BOOKING <i class="fa fa-pencil-square-o"></i></div>
								</div>


							</div>

							<hr>

							<div class="row">
								<div class="col-lg-4">
									<table width="100%">
										<tr>
											<td><strong>Booking Ref :</strong></td>
											<td>#	CH003</td>
										</tr>

										<tr>
											<td><strong>Name :</strong></td>
											<td>MR Brain Mill</td>
										</tr>
										<tr>
											<td><strong>Email :</strong></td>
											<td>braintest@gmail.com</td>
										</tr>

										<tr>
											<td><strong>Booking Date :</strong></td>
											<td>02/58/2014</td>
										</tr>
									</table>						
								</div>

								<div class="col-lg-4">
									<table width="100%">
										<tr>
											<td><strong>Reservation Date & Time :</strong></td> 
											<td> 7</td>
										</tr>
										<tr>
											<td><strong>No. Guest :  </strong></td>
											<td> $50</td>
										</tr>
										<tr>
											<td><strong>Setting Area : </strong></td>
											<td>Gift Card</td>
										</tr>

										<tr>
											<td><strong>Booking Status: </strong></td>
											<td> 10</td>
										</tr>

										<tr>
											<td><strong>Order  Status : </strong></td>
											<td><span class="btn btn-success btn-mini btn-noshadow">Confirmed</span></td>
										</tr>
									</table>
								</div>

								<div class="col-lg-3">
									<div class="g-vsap"></div>
									<div class="g-vsap"></div>
									<div class="g-vsap"></div>
									<div class="btn">CHANGE BOOKING <i class="fa fa-pencil-square-o"></i></div>
								</div>


							</div>
						</div>

						<p class="g-header">RESERVATION HISTORY </p>
						<table class="table table-striped table-bordered table-condensed">
							<tr>
								<th>#</th>
								<th>Booking Ref</th>
								<th>Booking Date</th>
								<th>Reservation Date & Time</th>
								<th>No. of Guest</th>
								<th>Setting Area</th>
								<th>Booking Status</th>
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
				<div ng-show="infotab==4">
					<h4 class="g-text-primary g-text-strong">LOYLTY POINTS</h4>
					<div class="g-vsap"></div>
					<div class="g-box">
						<div class="row">
							<div class="col-lg-6">
								<p class="g-header">LOYLTY POINTS SUMMARY</p>
								<div class="g-innerwrap">
									<table width="100%">
										<tr>
											<td><strong>Customer Name: </strong></td>
											<td>Jony Sheen</td>
										</tr>

										<tr>
											<td><strong>Total Point Earned: </strong></td>
											<td>5000</td>
										</tr>
										<tr>
											<td><strong>Point Blance: </strong></td>
											<td>3000</td>
										</tr>

										<tr>
											<td><strong>Point Used : </strong></td>
											<td> 2000</td>
										</tr>
									</table>	

									<p>
										To earn 1 loylty point you have to spend $10 on our Retaurant. <a href="" class="g-text-primary">Terms & Condtion</a> Apply.  
									</p>
								</div>					
							</div>
							<div class="col-lg-6">
								<p class="g-header">GIFT CARD REDEMTION</p>
								<div class="g-innerwrap">
									<p>
										Every 2 Points equel to $1. Minimum Gift Card Redemtion $25 whichis equal to 50 Points, Just let us know how much points you want to use to redem Gift Card.  
									</p>
									<div class="g-vsap"></div>

									<form action="" class="f-basic">
										<div class="f-basic_group">
											<label for="">Points want to use</label>
											<div class="row">
												<div class="col-lg-8">
													<input type="text">
												</div>

												<div class="col-lg-4">
													<input type="submit" class="btn btn-noshadow" value="SUBMIT REQUEST">
												</div>
											</div>
										</div>
									</form>


								</div>					
							</div>
						</div>

						<div class="g-vsap"></div>
						<p class="g-header">LOYLTY POINTS DETAILS</p>
						<table class="table table-striped table-bordered table-condensed">
							<tr>
								<th>#</th>
								<th>Event</th>
								<th>Date</th>
								<th>Points Used</th>
								<th>Points Earned</th>
								<th>Points Blance</th>
							</tr>
						
							<tr>
								<td>1</td>
								<td>Mark</td>
								<td>Light Hot, Well Cooked</td>
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
							</tr>
							<tr>
								<td>3</td>
								<td>Mark</td>
								<td>Light Hot, Well Cooked</td>
								<td>@mdo</td>
								<td>@mdo</td>
								<td>@mdo</td>
							</tr>
						</table>
					</div>
				</div>

				<div ng-show="infotab==5">
					
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
											<td>{{selected_order.order_number}}</td>
										</tr>

										<tr>
											<td><strong>Order Date & Time :</strong></td>
											<td>{{selected_order.order_date*1000  | date:'fullDate'}}</td>
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
														{{selected_order.order_delivery_postaladdress}}
														<br>{{selected_order.order_delivery_city}}
														<br{{selected_order.order_delivery_postcode}}
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
											<td>{{selected_order.ordered_items.length}}</td>
										</tr>
										<tr>
											<td><strong>Total Price:  </strong></td>
											<td>{{selected_order.order_pricetotal | currency}}</td>
										</tr>
										<tr>
											<td><strong>Payment Method :</strong></td>
											<td>Cash</td>
										</tr>

										<tr>
											<td><strong>Total Points Earned : </strong></td>
											<td> 0</td>
										</tr>

										<tr>
											<td><strong>Order  Status : </strong></td>
											<td><span class="btn btn-info btn-mini btn-noshadow">{{selected_order.order_status}}</span></td>
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

							<tr ng-repeat="item in selected_order.ordered_items">
								<td>{{$index + 1}}</td>
								<td>{{item.item_name}}</td>
								<td>{{item.ordered_note}}</td>
								<td>{{item.ordered_qyt}}</td>
								<td>{{item.ordered_qyt * item.ordered_price | currency}}</td>
								<td></td>
								<td></td>
							</tr>
							
						</table>
					</div>

				</div>






			</div>
		</div>

		
	</div>

</div>
<?php include 'footer.php'; ?>