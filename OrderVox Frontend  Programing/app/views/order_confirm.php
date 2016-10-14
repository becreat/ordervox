<?php include 'header.php'; ?>
<div class="l-mainbody">
	<div class="g-vsap"></div>
	<div class="g-vsap"></div>
	<div class="container">
		<ol class="breadcrumb">
		  <li><a href="#">Cart</a></li>
		  <li class="active">Order Confirmation</li>
		</ol>

		
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
								<td>#	<?=$order['order_number'] ?></td>
							</tr>

							<tr>
								<td><strong>Order Date & Time :</strong></td>
								<td> <?=date('D/M/Y h:i a',$order['order_date']);?></td>
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
											<?=$order['order_delivery_postaladdress'] ?>
											<br><?=$order['order_delivery_city'] ?>
											<br>UK <?=$order['order_delivery_postcode'] ?>
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
								<td> <?=count($order['ordered_items']) ?></td>
							</tr>
							<tr>
								<td><strong>Total Price:  </strong></td>
								<td> $<?=$order['order_pricetotal']?></td>
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
								<td><span class="btn btn-warning btn-mini btn-noshadow">Coocking</span></td>
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

				<?php foreach ($order['ordered_items'] as $item): ?>
				<tr>
					<td>1</td>
					<td><?=$item['item_name'] ?></td>
					<td><?=$item['ordered_note'] ?></td>
					<td><?=$item['ordered_qyt'] ?></td>
					<td><?=$item['ordered_price'] ?></td>
					<td>15%</td>
					<td>0</td>
				</tr>
			<?php endforeach; ?>
			
			</table>
		</div>
		

		
	</div>

</div>
<?php include 'footer.php'; ?>