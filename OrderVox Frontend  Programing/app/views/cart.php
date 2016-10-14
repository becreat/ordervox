<?php include 'header.php'; ?>
<div class="l-mainbody">
	<div class="g-vsap"></div>
	<div class="g-vsap"></div>
	<div class="container">
		<ol class="breadcrumb">
		  <li><a href="#">View Cart</a></li>
		  <li class="active">CART</li>
		</ol>

		<h4 class="g-text-primary g-text-strong">VIEW CART</h4>
		<div class="g-vsap"></div>

		<div class="g-box">
			<div class="m-viewcart">
				<table width="100%">
					<tr>
						<td>ITEM</td>
						<td>DETAILS</td>
						<td>ITEM CODE</td>
						<td>QUANTITY</td>
						<td>ITEM PRICE</td>
						<td>TOTAL</td>
					</tr>
					
					<tr ng-repeat="item in cart track by $index">
						<td>
							<img ng-src="<?=base_path ?>public/img/product_pic/{{item.id}}.png"  class="m-cartdetails_img">
						</td>

						<td>
							<p>
								<span class="g-text-primary">{{item.item_name}}</span>
								<br><span><strong>Choise</strong> : {{}}</span>
								<br><span>
										
										<strong>Add Ons </strong> : 
										<small ng-repeat="addon in item.selected_addon">{{addon.addons_name}}, &nbsp;</small>

									</span>
								<br><span><strong>Special Notes</strong> :{{item.note}} </span>
							</p>
						</td>

						<td>
							<span>{{item.item_sname}}</span>
						</td>


						<td>
							<input type="number" ng-model="item.item_qyt">
						</td>


						<td>
							<span class="g-text-primary">{{item.item_price}}</span>
						</td>

						<td>
							<span class="g-text-primary">{{(item.item_price + item.item_addonTotal) * item.item_qyt}}</span>
						</td>

						<td>
							<span class="m-viewcart_remove" ng-click="removeItemFrmCart(item)"><i class="fa fa-times-circle"></i></span>
						</td>
					</tr>

				
					<tr>
						<td colspan="5"><strong class="g-text-primary">Coupon Discount</strong></td>
						<td>-$7.00</td>
						<td></td>
					</tr>

					<tr>
						<td colspan="5"><strong class="g-text-primary">Collection Discount</strong></td>
						<td>-$2.00</td>
						<td></td>
					</tr>

					<tr>
						<td colspan="2">
							<label for=""><input type="radio" name="d"><small class="g-text-primary">HOME DELIEVERY </small></label>
							<label for=""><input type="radio" name="d"><small class="g-text-primary">COLLECTION</small></label>

						</td>
						<td colspan="2">
							
							<input type="text"> &nbsp;&nbsp;<button class="btn btn-noshadow">APPLY COUPON</button> 
						</td>
						<td colspan="3" align="right">
							
							<table width="100%">
								<tr>
									<td><strong>SUB TOTAL</strong></td><td><strong class="g-text-primary">{{cartTotal() | currency}}</strong></td>
								</tr>
								<tr>
									<td><strong>DELIVERY FEE</strong></td><td><strong class="g-text-primary">$10.00</strong></td>
								</tr>
								<tr>
									<td><strong>DISCOUNT</strong></td><td><strong class="g-text-primary">$9.00</strong></td>
								</tr>
								<tr>
									<td><strong>VAT</strong></td><td><strong class="g-text-primary">$5.00</strong></td>
								</tr>
								<tr>
									<td><strong>TOTAL</strong></td><td><strong class="g-text-primary">{{cartTotal() + 6 | currency}}</strong></td>
								</tr>
							</table>
						</td>
					</tr>
				</table>

				<div class="g-vsap"></div>

				<a href="<?=URI::parse('home/menu') ?>" class="btn btn-grey pull-left"> <i class="fa fa-shopping-cart"></i> &nbsp;&nbsp;CONTINUE ORDER </a>
				<a href="<?=URI::parse('home/delivery') ?>" class="btn pull-right"> <i class="fa fa-shopping-cart"></i> &nbsp;&nbsp;CHECKOUT </a>
				<div class="g-vsap"></div>
			</div>
		</div>

		
	</div>

</div>
<?php include 'footer.php'; ?>