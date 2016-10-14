(function(){
	var app = angular.module('OV_frontend',['ui.bootstrap']);

	app.filter('range', function() {
	  return function(val, range) {
	    range = parseInt(range);
	    for (var i=0; i<range; i++)
	      val.push(i);
	    return val;
	  };
	});

	
	
	app.controller('Main',function($scope,$http)
	{
		
		$scope.resturent = {id:1};
		


		$scope.category_filter = {};

		if(localStorage.getItem('cart') != undefined)
		{
			$scope.cart = JSON.parse(localStorage.getItem('cart'));
			
		
		}else
		{
			$scope.cart = [];
		}
		

		

		
		
		$scope.popup = {};
		
		$http.get(base_path + "item/GetAllItem").then(function(r) {
	        $scope.items = r.data;
	    });


    	$http.get(base_path + "category/find").then(function(r) {
            $scope.categoties = r.data;
        });








	

		$scope.productDetails = function(index,id)
		{
			$scope.selected_item =  angular.copy($scope.items[index]);
			$scope.selected_item.selected_addon = [];
			$scope.selected_item.item_price = parseInt($scope.selected_item.price[0].price_value);
			$scope.selected_item.item_addonTotal = 0;
			$scope.selected_item.item_qyt = 1;
			$scope.selected_item.note = '';
			$scope.popup.product_details = true;		
		}


		$scope.addAddon = function(addon)
		{
			
			var key = $scope.selected_item.selected_addon.indexOf(addon); 
			var addonTotal = 0;

			if(key == -1)
			{
				$scope.selected_item.selected_addon.push(addon);
				
			}else{
				$scope.selected_item.selected_addon.splice(key,1);

			}

			$scope.selected_item.selected_addon.forEach(function(addon){
				addonTotal = parseInt(addon.addons_value) + parseInt(addonTotal);


			});

			$scope.selected_item.item_addonTotal = addonTotal;

			


			
		}

		$scope.changeChoise = function()
		{
			$scope.selected_item.item_price = parseInt($scope.selected_item.choise.price_value);

		}



		$scope.addToCart = function()
		{
			$scope.selected_item.item_note = null;
			$scope.cart.push($scope.selected_item);
			$scope.popup.product_details = false;


			localStorage.setItem('cart',JSON.stringify($scope.cart));
		}

		$scope.cartTotal = function()
		{
			var total = 0;
			
			$scope.cart.forEach(function(item){
				total += (item.item_price + item.item_addonTotal) * item.item_qyt;
			});

			return total;
		}


		$scope.removeItemFrmCart = function(item)
		{
			var key = $scope.cart.indexOf(item); 
			$scope.cart.splice(key,1);
			localStorage.setItem('cart',JSON.stringify($scope.cart));
		}
	
	});



	app.controller('MyAccount',function($scope,$http)
	{


		$scope.form = {};
		$scope.form.disabled = true;
		

		$http.get(base_path+'customer/Loggedcustomer').then(function(r){
			$scope.logged_customer = r.data;


			$http.get(base_path+'customer/find?id='+$scope.logged_customer.id).then(function(r){
				$scope.customer = r.data[0];
			});


			$http.get(base_path+'order/find?order_customer_id='+$scope.logged_customer.id).then(function(r){
				$scope.orders = r.data;
			});


		});


		$scope.updateAccount = function()
		{
			$http.put(base_path+'Customer/?id='+customer_id,$scope.customer).then(function(){
				alert('Profile Updated Successfully !!');
				$scope.form.disabled = true;
			});

		

		}


		$scope.orderDetails = function(order)
		{
			$scope.infotab = 5;

			$http.get(base_path+'order/getOrder/'+order.id).then(function(r){
				$scope.selected_order = r.data[0];
			});

			
		}










	});




	app.controller('Review',function($scope,$http)
	{
		

		$http.get(base_path+'customer/Loggedcustomer').then(function(r){
			$scope.logged_customer = r.data;


			$http.get(base_path+'review/Get/' + $scope.resturent.id).then(function(r){
				$scope.reviews = r.data;
			});



		});

		
	});




	app.controller('Order',function($scope,$http)
	{
		
		


		$scope.submitOrder = function()
		{
			$scope.order.order_number = 'mc_' + Math.floor(Math.random() * 1000);
			$scope.order.order_date = Math.floor(Date.now() /1000);
			$scope.order.order_status = 'Cooking';
			$scope.order.order_pricetotal = $scope.cartTotal();
			$scope.order.order_linetotal = $scope.cart.length;
			$scope.order.order_resturent_id = resturent_id;
			$scope.order.order_customer_id = customer_id;
			$scope.order.order_payment_type = 'Cash';

			$http.post(base_path+'Order',$scope.order).then(function(r){


				$scope.cart.forEach(function(item){
					
					ordered_item = {};
					ordered_item.ordered_order_id = parseInt(r.data);
					ordered_item.ordered_item_id = parseInt(item.id);
					ordered_item.ordered_qyt = item.item_qyt;
					ordered_item.ordered_price_id = item.price[0].id;
					ordered_item.ordered_note = item.note;
					ordered_item.ordered_price =  item.item_price;


					$http.post(base_path+'Ordered_item',ordered_item).then(function(){
						$scope.removeItemFrmCart(item);

						if($scope.cart.length==0)
						{
							window.location = base_path+'Home/confirm/'+ r.data;
						}
					});


				});

				alert('Thanks, Your order has been successfully Submited.');

			});
			
		}



		
	});



})();
