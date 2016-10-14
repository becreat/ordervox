<?php include 'header.php'; ?>
<div class="l-mainbody">
	<div class="g-vsap"></div>
	<div class="g-vsap"></div>
	<div class="container">
		<ol class="breadcrumb">
		  <li><a href="#">Menu</a></li>
		  <li><a href="#">All</a></li>
		</ol>

		<div class="row">
			<div class="col-lg-3">
				<div class="m-panel">
					<div class="m-panel_header">OUR MENU</div>
					<div class="m-panel_content">
						<ul class="m-nav-stacked">



							<li ng-init="category_filter.item_category_id = ''" ng-click="category_filter.item_category_id = ''"><a ng-class="{active:category_filter.item_category_id == ''}">All</a></li>
							<li ng-repeat="cat in categoties" ng-click="category_filter.item_category_id = cat.id"><a ng-class="{active:category_filter.item_category_id == cat.id}">{{cat.category_name}}</a></li>


							
							


							
						</ul>
					</div>
				</div>

				<div class="g-vsap"></div>
				<div class="g-vsap"></div>

				<?php include 'left-nav-my-cart.php'; ?>
			</div>


			<div class="col-lg-9">
				<h4 class="g-text-primary g-text-strong">{{}}</h4>
				<input type="text" ng-model="category_filter.item_category_id" style="display:none">
				<div class="g-vsap"></div>
				<ul class="m-products" >
 					<li ng-class="{promotional:item.item_isPromotion==1}" ng-repeat="item in items | filter:category_filter">
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
			</div>
		</div>
	</div>
	
</div>

<?php include 'footer.php'; ?>