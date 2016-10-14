
/**
 * cart interaction 
 */

$('.m-cart').click(function(){
	//popup with cart details
	$('.m-cartdetails').show();

});


$('.m-mainnavigation_search').click(function(){
	//popup with search form 
	$('.m-search').show();
	

});


$('.m-products_top .btn , .m-products_bottom .btn').click(function(){
	//popup with products details
	$('.m-productDetails').show();


});


$('.m-popup_content_close').click(function(){
	//popup with products details

	$('.m-popup').hide();


});

