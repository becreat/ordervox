<?php include 'header.php'; ?>

	<div class="l-leadection">
		
		

		<div class="m-slider <?php if($_GET['tablebooking'] == 'true'){echo 'g-disable';} ?>">
			<div id="product-slider" class="carousel slide" data-ride="carousel">			 
			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			    <div class="item active">
			    	<img src="<?=base_path ?>public/img/banner.png">
			    	<div class="carousel-caption">
			    	     <div class="container">
			    	     	<div class="m-slider_header">Getting food was never been easier</div>
			    	     	<p class="m-slider_byline">
			    	     		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, vitae facilis. Deserunt consequatur possimus ratione voluptate perspiciatis. Tempora excepturi illo reprehenderit delectus doloremque saepe vel, perspiciatis modi, impedit facere aspernatur.
			    	     		<br>
			    	     		<br>
			    	     		<a href="" class="btn btn-lg">ORDER NOW</a>
			    	     	</p>
			    	     </div>
	    	      	</div>
			    </div>
			    <div class="item">
			    	<img src="<?=base_path ?>public/img/banner.png">
			    	<div class="carousel-caption">
			    	     <div class="container">
			    	     	<div class="m-slider_header">Just Another Subtitle</div>
			    	     	<p class="m-slider_byline">
			    	     		Some Text Goes Here
			    	     	</p>
			    	     	
			    	     </div>
	    	      	</div>
			    </div>
			  </div>

			  <!-- Controls -->
			  <a class="left carousel-control" href="#product-slider" role="button" data-slide="prev">
			    <span class="sr-only">Previous</span>
			  </a>
			 
			  <a class="right carousel-control" href="#product-slider" role="button" data-slide="next">
			    <span class="sr-only">Next</span>
			  </a>

			</div>
		</div>

		<div class="l-tablebooking <?php if($_GET['tablebooking'] != 'true'){echo 'g-disable';} ?>">
			<div class="container">
				<div class="m-tableBooking">
					<div class="m-tableBooking_title">TABLE RESERVATION</div>
					<form class="m-tableBooking_form">
						<select>
							<option value="">Persons</option>
							<option value="">1</option>
							<option value="">2</option>
							<option value="">3</option>
						</select>
						<select>
							<option value="">Seating Area</option>
							<option value="">Window View</option>
							<option value="">Outside</option>
						</select>
						<input type="text" value="Date">
						<input type="text" value="Time">

						<div class="g-vsap"></div>
						<div class="g-vsap"></div>
						<button type="submit" class="btn">BOOK NOW</button>
					</form>
				</div>
			</div>
		</div>		
	</div><!-- End Of leadsection -->

	<div class="g-vsap"></div>

	<div class="l-topBannerSection container">
		<div class="row">
			<div class="col-lg-3 col-md-3">
				<a href=""><img src="<?=base_path ?>public/img/add1.png" ></a>
			</div>
			<div class="col-lg-4 col-md-3">
				<a href=""><img src="<?=base_path ?>public/img/add2.png" ></a>
			</div>

			<div class="col-lg-5 col-md-6 g-text-center ">
				<div class="g-vsap" style="height: 30px;"></div>
				<a href=""><img src="<?=base_path ?>public/img/appstore.png" ></a>
				<a href=""><img src="<?=base_path ?>public/img/play.png" ></a>
			</div>
		</div>
	</div> <!-- End of Top Banner Section -->
 	
 	<div class="l-mainbody">
 		<div class="g-vsap"></div>
 		<div class="container">
 			<h1 class="g-text-primary">SPECIAL MENU</h1>
 			<div class="g-vsap"></div>
 			<ul class="m-products">

 			


				
 				<li ng-class="{promotional:item.item_isPromotion==1}" ng-repeat="item in items" ng-show="item.item_category_id==1">
 					<div class="m-products_top">
 						<img ng-src="<?=base_path ?>public/img/product_pic/{{item.id}}.png" alt="">
 						<span href="" class="btn" ng-click="productDetails($index,item.id)">VIEW</span>
 					</div>
 					<div class="m-products_bottom">
 						<div class="m-products_name">{{item.item_name}}</div>
 						<span class="m-products_price">{{item.price[0].price_value | currency}}</span>
 						<del class="m-products_price-strike" ng-show="item.item_isPromotion==1">{{(item.price[0].price_value+5) | currency}}</del>
 						<span class="btn">VIEW TO ORDER</span>
 					</div>

 				</li>

 		

 				
 				
 			</ul>


 			<div class="g-vsap"></div>
 			<h1 class="g-text-primary">LUNCH MENU</h1>
 			<div class="g-vsap"></div>
 			
 			<ul class="m-products">
	 			<li ng-class="{promotional:item.item_isPromotion==1}" ng-repeat="item in items" ng-show="item.item_category_id==2">
	 				<div class="m-products_top">
	 					<img ng-src="<?=base_path ?>public/img/product_pic/{{item.id}}.png">
	 					<span href="" class="btn" ng-click="productDetails($index,item.id)">VIEW</span>
	 				</div>
	 				<div class="m-products_bottom">
	 					<div class="m-products_name">{{item.item_name}}</div>
	 					<span class="m-products_price">{{item.price[0].price_value | currency}}</span>
	 					<del class="m-products_price-strike" ng-show="item.item_isPromotion==1">{{(item.price[0].price_value+5) | currency}}</del>
	 					<span class="btn">VIEW TO ORDER</span>
	 				</div>

	 			</li>
 			</ul>


 		</div>
 	</div><!-- End of Mainbody -->

 	


 	

<?php include 'footer.php'; ?>


	
	
