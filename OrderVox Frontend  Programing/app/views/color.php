<style>
	/* Base Css */

	/**
	 * COLOR CODE
	 ******************************
	 * orange =  #e94d1c
	 * darkorange =  #e6400c
	 */


	/* Primary Color */
	.m-cart i
	,.m-mainnavigation li a:hover
	,.m-mainnavigation li a.active
	,.m-mainnavigation li.m-mainnavigation_search i
	,.m-newsletter input[type="submit"]
	,.m-products .m-products_price
	,.m-products .btn
	,.m-popup_content_close
	,.breadcrumb li.active
	,.breadcrumb>li+li:before
	,.m-panel_header
	,.m-review_rating i
	,.g-text-primary{color: <?=$color?>;}

	.m-tableBooking select
	,.m-products .btn
	,.m-tableBooking input[type="text"]
	,.m-tableBooking input[type="date"]
	,.m-tableBooking input[type="time"]{
		border: 1px solid  <?=$color?>;
	}




	/* Primary Color */

	.btn
	,.l-bottom_first
	,.m-address li i
	,.l-top
	,.m-newsletter input[type="text"]
	,.ml-top
	,.m-popup_content_title
	,.m-nav-stacked li a:hover
	,.m-nav-stacked li a.active
	,.l-leadection  .btn:hover{
		background: <?=$color?>;
		position: relative;
		color: #fff;
	}




	/* Secondary Color */
	.l-top::before
	,.ml-top::before
	,.btn:hover::before{
		content: "";
		display: block;
		position: absolute;
		top:0;
		left: 0;
		width: 100%;
		height: 100%;
		background: rgba(0, 0, 0, 0.1);
		z-index: 0;
	}


	/* Opacity */
	.m-products li.promotional::before
	,.m-timedetails li
	{
		background: rgba(<?=$rgb[0]?>, <?=$rgb[1]?>, <?=$rgb[2]?>,.8);
	}

	.ml-top{
		border-bottom: 2px solid rgba(<?=$rgb[0]?>, <?=$rgb[1]?>, <?=$rgb[2]?>,.8);
	}

	.m-cartdetails_img
	,.m-panel_header
	,.m-panel_content
	,.breadcrumb
	,.g-box
	{
		border: 1px solid rgba(<?=$rgb[0]?>, <?=$rgb[1]?>, <?=$rgb[2]?>,.1);
	}


	.m-review li{border-bottom: 1px solid rgba(<?=$rgb[0]?>, <?=$rgb[1]?>, <?=$rgb[2]?>,.1);}

	.m-popup_content{
		border: 1px solid rgba(<?=$rgb[0]?>, <?=$rgb[1]?>, <?=$rgb[2]?>,.6);
		border-top:3px solid  <?=$color?>;
	}

	.m-countDown{
		border:2px solid rgb(<?=$rgb[0]?>, <?=$rgb[1]?>, <?=$rgb[2]?>);
	}








</style>