<?php include 'header.php'; ?>
<div class="l-mainbody">
	<div class="g-vsap"></div>
	<div class="g-vsap"></div>
	<div class="container">
		<ol class="breadcrumb">
		  <li><a href="#">My Account</a></li>
		  <li class="active">MY ORDER</li>
		</ol>

		<div class="row">
			<div class="col-lg-3">
				<div class="m-panel">
					<div class="m-panel_header">MY ACCOUNT</div>
					<div class="m-panel_content">
						<ul class="m-nav-stacked">
							<li><a href="">ACCOUNT INFORMATION</a></li>
							<li><a href="">MY ORDERS</a></li>
							<li class="active"><a href="">MY TABLE BOOKINGS</a></li>
							<li><a href="">LOYLTY POINTS</a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-lg-9">
				<h4 class="g-text-primary g-text-strong">MY ORDERS</h4>
				<div class="g-vsap"></div>

				<div class="g-box">
					<p class="g-header">TODAYS ORDER</p>
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
						<tr>
							<td>1</td>
							<td>Mark</td>
							<td>Otto</td>
							<td>2</td>
							<td>$48</td>
							<td align="center"><span class="btn btn-mini btn-warning">Cooking</span></td>
							<td align="center"><a href="" class="btn btn-mini">Details</a></td>
						</tr>
						<tr>
							<td>2</td>
							<td>Mark</td>
							<td>Jacob</td>
							<td>2</td>
							<td>$48</td>
							<td align="center"><span class="btn btn-mini btn-success">Delivering</span></td>
							<td align="center"><a href="" class="btn btn-mini">Details</a></td>
						</tr>
						<tr>
							<td>3</td>
							<td>Mark</td>
							<td>Larry</td>
							<td>2</td>
							<td>$48</td>
							<td align="center"><span class="btn btn-mini btn-danger">Canceled</span></td>
							<td align="center"><a href="" class="btn btn-mini">Details</a></td>
						</tr>		
					</table>	

					<p class="g-header">PREVIOUS ORDER HISTORY</p>
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
						<tr>
							<td>1</td>
							<td>Mark</td>
							<td>Otto</td>
							<td>2</td>
							<td>$48</td>
							<td align="center"><span class="btn btn-mini btn-info">delivered</span></td>
							<td align="center"><a href="" class="btn btn-mini">Details</a></td>
						</tr>
						<tr>
							<td>2</td>
							<td>Mark</td>
							<td>Jacob</td>
							<td>2</td>
							<td>$48</td>
							<td align="center"><span class="btn btn-mini btn-info">delivered</span></td>
							<td align="center"><a href="" class="btn btn-mini">Details</a></td>
						</tr>
						<tr>
							<td>3</td>
							<td>Mark</td>
							<td>Larry</td>
							<td>2</td>
							<td>$48</td>
							<td align="center"><span class="btn btn-mini btn-danger">Canceled</span></td>
							<td align="center"><a href="" class="btn btn-mini">Details</a></td>
						</tr>		
					</table>
				</div>
			</div>
		</div>

		
	</div>

</div>
<?php include 'footer.php'; ?>