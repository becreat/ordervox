<div class="l-bottom_first clear">
	<div class="container">
		<div class="l-orangeBottom_left">
			<img src="<?=base_path ?>public/img/cards.png">
		</div>
		<div class="l-orangeBottom_right">
			<form action="" class="m-newsletter">
				<label><span>NEWSLETTER : </span>  <input type="text"/><input type="submit" value="SUBSCRIBE"></label>
			</form>
		</div>
	</div>
</div><!-- End of orangeBottom Section -->


<div class="l-bottom_second">
	<div class="container">
		<div class="l-bottom_second_grid">
			<p class="l-bottom_second_title">SOCIAL MEDIA</p>
			<ul class="m-socialLinks">
				<li><a href="" target="_blank"><i class="fa fa-facebook"></i></a></li>
				<li><a href="" target="_blank"><i class="fa fa-twitter"></i></a></li>
				<li><a href="" target="_blank"><i class="fa fa-google-plus"></i></a></li>
			</ul>
		</div>

		<div class="l-bottom_second_grid">
			<p class="l-bottom_second_title">MOBILE APPS</p>
			
			<div class="m-appsLink">
				<a href=""><img src="<?=base_path ?>public/img/appstore.png"></a>
				<div class="g-vsap"></div>
				<a href=""><img src="<?=base_path ?>public/img/play.png"></a>
			</div>
			
		</div>

		<div class="l-bottom_second_grid">
			<p class="l-bottom_second_title">OPENING HOURS</p>
			<ul>
				<li>Monday : <span class="g-text-primary">9.30 am - 10. pm</span></li>
				<li>Tuesday : <span class="g-text-primary">9.30 am - 10. pm</span></li>
				<li>Wednesday : <span class="g-text-primary">9.30 am - 10. pm</span></li>
				<li>Thursday : <span class="g-text-primary">9.30 am - 10. pm</span></li>
				<li>Friday : <span class="g-text-primary">9.30 am - 10. pm</span></li>
				<li>Saturday : <span class="g-text-primary">Closed</span></li>
			</ul>
			
		</div>

		<div class="l-bottom_second_grid">
			<p class="l-bottom_second_title">CONTACT US</p>
			<address class="m-address">
				<p>
					My Cafe
					<br>Welbeck Way Woodston 
					<br>Peterborough PE2 7UH
				</p>
				<ul>
					<li class="phone"><i class="fa fa-phone"></i> :   &nbsp;&nbsp;+4417752387</li>
					<li class="email"><i class="fa fa-envelope"></i>: &nbsp;&nbsp;info@domain.com</li>
				</ul>
			</address>
			
		</div>

		<div class="l-bottom_second_grid">
			<div class="g-vsap"></div>
			<div class="g-vsap"></div>
			<div class="g-vsap"></div>
			<img src="<?=base_path ?>public/img/map_temp.png">
			
		</div>
	</div>
</div><!-- End of blackBottom Section -->


<div class="l-footer g-clear">
	<div class="container">
		<ul class="m-socialLinks">
			<li><a href="" target="_blank"><i class="fa fa-facebook"></i></a></li>
			<li><a href="" target="_blank"><i class="fa fa-twitter"></i></a></li>
			<li><a href="" target="_blank"><i class="fa fa-google-plus"></i></a></li>
		</ul>
		<div class="l-footer_left">
			<p>Copyright ® 2014 <span class="g-text-primary">Restaurant.</span> All rights reserved.</p>
		</div>
		<div class="l-footer_right">
			<p>Website developed by <a href="" class="g-text-primary">OrderVox</a> & <a href="" class="g-text-primary">EasyWeb</a> </p>
		</div>
		<center><img src="img/cards.png" class="m-cards"></center>
	</div>
</div><!-- End of footer Section -->
 	
	
	<!-- Search Option -->

 	<div class="m-popup m-search ng-hide" ng-show="popup.searchBox">
 		<div class="container">

	 		<div class="m-popup_content">
				<p class="m-popup_content_title">Search Item</p>
				<i class="m-popup_content_close fa fa-times" ng-click="popup.searchBox=false"> </i>

				<input type="text" placeholder="Search Item">						
			

				<div class="m-popup_content_bottom">
					<center><a href="" class="btn btn-lg btn-noshadow"><i class="fa fa-search"></i> &nbsp;Search</a></center>
				</div>
				
				

	 		</div>
 			 	
 		</div>
 	</div>

 	<!-- Shoping Cart Details -->


 	<div class="m-popup m-cartdetails ng-hide"  ng-show="popup.cartdetails">
 		<div class="container">

		 		<div class="m-popup_content">
	 				<p class="m-popup_content_title">My Cart</p>
	 				<i class="m-popup_content_close fa fa-times" ng-click="popup.cartdetails=false"></i>					
					<div class="g-scroll">
						<table>
							
							<tr ng-repeat="item in cart track by $index">
								<td width="40%">
									<img ng-src="<?=base_path ?>public/img/product_pic/{{item.id}}.png"  class="m-cartdetails_img">
									<span class="m-cartdetails_qyt"> <i class="fa fa-times"></i> <input type="number" ng-model="item.item_qyt"></span>
								</td>

								<td>
									<span class="m-cartdetails_productname">{{item.item_name}}</span>
								</td>

								<td>
									<span class="m-cartdetails_price"><span>{{(item.item_price + item.item_addonTotal) * item.item_qyt}}</span></span>
								</td>

								<td>
									<span class="m-cartdetails_remove" ng-click="removeItemFrmCart(item)"><i class="fa fa-times-circle"></i></span>
								</td>
							</tr>
							
						</table>
					</div>

					<div class="m-popup_content_bottom">
						<div class="pull-left">
							<div class="m-cart g-icon"><i class="fa fa-shopping-cart"></i> {{cart.length}} items | {{cartTotal() | currency}}</div>
						</div>
						
						<div class="pull-right">
							<a href="<?=URI::parse('home/cart');?>" class="btn btn-grey btn-noshadow">View CART</a>
							<a href="<?=URI::parse('home/delivery') ?>" class="btn btn-noshadow">CHECKOUT</a>
						</div>
					</div>
					
					

		 		</div>
 			 	
 		</div>
 	</div>


 	
	

	<!-- Product Details -->

 	<div class="m-popup m-productDetails ng-hide"  ng-show="popup.product_details" ng-show="popup.product_details">
 		<div class="container">

 		<div class="m-popup_content g-clear">
			<p class="m-popup_content_title">{{selected_item.item_name}}</p>
			
			<i class="m-popup_content_close fa fa-times" ng-click="popup.product_details=false"></i>

			<div class="m-productDetails_left">
				<img ng-src="<?=base_path ?>public/img/product_pic/{{selected_item.id}}.png" height="380">
			</div>
			<div class="m-productDetails_right">
				<p class="m-productDetails_title">{{selected_item.item_name}}</p>
				<hr>
				<p class="m-productDetails_price pull-left">
					<span class="m-products_price" style="zoom: 2.5;">{{((selected_item.item_price + selected_item.item_addonTotal) * selected_item.item_qyt) | currency}}</span> 
					
				</p>

				<label class="pull-right m-productDetails_choise">
					
					<span class="g-text-primary">Choise</span> : 
			
					<div class="btn-group" ng-repeat="choise in selected_item.price">
				        <label ng-click="changeChoise()" class="btn btn-primary" ng-model="selected_item.choise" uib-btn-radio="choise">{{choise.price_name}}</label>
				    </div>

					

				</label>
				
				<div class="g-clear"></div><hr>

				<p>
					{{selected_item.item_note}}
				</p>

				<hr>
					<table>
						<tr>
							<td valign="middle">
								<p class=""><span class="g-text-primary">Addons </span> : &nbsp;&nbsp;</p>
							</td>
							<td >
							

							{{selected_addon}}

							<div class="btn-group" ng-repeat="addon in selected_item.addons" style="zoom: .8;">
						        <label class="btn btn-primary" ng-model="selected_addon" uib-btn-checkbox ng-click=addAddon(addon)>
						        	<strong>{{addon.addons_value | currency}}</strong>
						        	<br>{{addon.addons_name}}
						        </label>
						    </div>
								
								
	
							</td>
						</tr>
					</table>
				<hr>
				<p class="m-productDetails_spacial">
					<span class="g-text-primary">Special Note : </span> 
					<input type="text" ng-model="selected_item.note">
					
				</p>
				<hr>
				<table width="100%">
					<tr>
						<td>
							<input type="number" style="width: 50px;"  ng-model="selected_item.item_qyt">
							&nbsp;
							&nbsp;
							<span class="btn" ng-click="addToCart()"> <i class="fa fa-shopping-cart"></i>  Add To Cart</span>
						</td>
						<td>
							<ul class="m-socialLinks m-socialLinks_color pull-right">
								<li><a href="" target="_blank" class="f"><i class="fa fa-facebook"></i></a></li>
								<li><a href="" target="_blank" class="t"><i class="fa fa-twitter"></i></a></li>
								<li><a href="" target="_blank" class="g"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</td>
					</tr>
				</table>
			
				

			</div>
			
			

			
			

 		</div>
 			 	
 		</div>
 	</div>

	<script src="<?=base_path ?>public/js/jquery-2.1.4.min.js"></script>
	<script src="<?=base_path ?>public/js/bootstrap.min.js"></script>
	<script src="<?=base_path ?>public/js/angular.min.js"></script>
	<script src="<?=base_path ?>public/js/angular-ui-router.js"></script>
	<script src="<?=base_path ?>public/js/ui-bootstrap-tpls-2.1.4.min.js"></script>
	<script src="<?=base_path ?>public/js/app.js"></script>
	<script>
		var base_path = '<?=base_path ?>';
		var resturent_id = 1;
		var customer_id = '<?=$_SESSION['logged_customer'][0]['id'] ?>';
	</script>
</body>
</html>