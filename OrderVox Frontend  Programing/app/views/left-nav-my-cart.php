<div class="m-panel">
	<div class="m-panel_header">MY CART</div>
	<div class="m-panel_content">
		<ul class="g-list">
			<li ng-repeat="item in cart track by $index">{{item.item_name}} &nbsp;&nbsp; x  &nbsp;&nbsp;{{item.item_qyt}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{item.item_price | currency}}</li>
		</ul>

		<div class="g-vsap"></div>

		<a href="<?=URI::parse('home/cart');?>" class="btn btn-noshadow btn-small btn-block">View Cart</a>
	</div>
</div>