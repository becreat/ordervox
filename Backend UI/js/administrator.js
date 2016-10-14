(function(){
	var app = angular.module('OrderVoxAdmin',['ngAnimate','ui.bootstrap','ui.router','ngSanitize', 'ui.select','textAngular']);
	/**
	 * Routes
	*/
	app.config(['$stateProvider', '$urlRouterProvider', configRoutes]);

	function configRoutes($stateProvider, $urlRouterProvider)
	{
		$stateProvider
			.state('dashboard',{
				url:'/',
				controller:'Dashboard',
				templateUrl:'views/dashboard.html'
			})

			.state('sales',{
				url:'/sales',
				controller:'Sales',
				templateUrl:'views/sales.html'
			})

			.state('sales.neworder',{
				url:'/neworder',
				controller:'Sales',
				templateUrl:'views/sales-neworder.html'
			})

			.state('sales.prevorder',{
				url:'/prevorder',
				controller:'Sales',
				templateUrl:'views/sales-prevorder.html'
			})

			.state('sales.createorder',{
				url:'/createorder',
				controller:'Sales',
				templateUrl:'views/sales-createorder.html'
			})

			.state('catalog',{
				url:'/catalog',
				controller:'Catalog',
				templateUrl:'views/catalog.html'
			})

			.state('catalog.manageitem',{
				url:'/manageitem',
				controller:'Catalog',
				templateUrl:'views/catalog-manageitem.html'
			})
			.state('catalog.additem',{
				url:'/additem',
				controller:'Catalog',
				templateUrl:'views/catalog-additem.html'
			})

			.state('catalog.managecategory',{
				url:'/managecategory',
				controller:'Catalog',
				templateUrl:'views/catalog-managecategory.html'
			})

			.state('catalog.addcategory',{
				url:'/addcategory',
				controller:'Catalog',
				templateUrl:'views/catalog-addcategory.html'
			})


			.state('coustomer',{
				url:'/coustomer',
				controller:'Coustomer',
				templateUrl:'views/coustomer.html'
			})

			.state('coustomer.managecoustomer',{
				url:'/managecoustomer',
				controller:'Coustomer',
				templateUrl:'views/coustomer-managecoustomer.html'
			})

			.state('coustomer.addcoustomer',{
				url:'/addcoustomer',
				controller:'Coustomer',
				templateUrl:'views/coustomer-addcoustomer.html'
			})

			.state('review',{
				url:'/review',
				controller:'Review',
				templateUrl:'views/review.html'
			})

			.state('review.managereview',{
				url:'/managereview',
				controller:'Review',
				templateUrl:'views/review-managereview.html'
			})

			.state('review.viewreview',{
				url:'/viewreview',
				controller:'Review',
				templateUrl:'views/review-viewreview.html'
			})

			.state('page',{
				url:'/page',
				controller:'Page',
				templateUrl:'views/page.html'
			})

			.state('page.managepage',{
				url:'/managepage',
				controller:'Page',
				templateUrl:'views/page-managepage.html'
			})

			.state('page.createpage',{
				url:'/createpage',
				controller:'Page',
				templateUrl:'views/page-createpage.html'
			})

			.state('widget',{
				url:'/widget',
				controller:'Widget',
				templateUrl:'views/widget.html'
			})

			.state('slider',{
				url:'/slider',
				controller:'Slider',
				templateUrl:'views/slider.html'
			})

			.state('design',{
				url:'/design',
				controller:'Design',
				templateUrl:'views/design.html'
			})

			.state('emailmarketing',{
				url:'/emailmarketing',
				controller:'Emailmarketing',
				templateUrl:'views/emailmarketing.html'
			})
			.state('emailmarketing.manageTemplate',{
				url:'/manageTemplate',
				controller:'Emailmarketing',
				templateUrl:'views/emailmarketing-manageTemplate.html'
			})
			.state('emailmarketing.createTemplate',{
				url:'/createTemplate',
				controller:'Emailmarketing',
				templateUrl:'views/emailmarketing-createTemplate.html'
			})
			.state('emailmarketing.manageNewsletter',{
				url:'/manageNewsletter',
				controller:'Emailmarketing',
				templateUrl:'views/emailmarketing-manageNewsletter.html'
			})
			.state('emailmarketing.createNewsletter',{
				url:'/createNewsletter',
				controller:'Emailmarketing',
				templateUrl:'views/emailmarketing-createNewsletter.html'
			})

			.state('sms',{
				url:'/sms',
				controller:'Sms',
				templateUrl:'views/sms.html'
			})

			.state('sms.managetemplate',{
				url:'/managetemplate',
				controller:'Sms',
				templateUrl:'views/sms-managetemplate.html'
			})

			.state('sms.createTemplate',{
				url:'/createTemplate',
				controller:'Sms',
				templateUrl:'views/sms-createTemplate.html'
			})

			.state('sms.managecampaign',{
				url:'/sms-ManageCampaign',
				controller:'Sms',
				templateUrl:'views/sms-ManageCampaign.html'
			})

			.state('sms.createcampaign',{
				url:'/createcampaign',
				controller:'Sms',
				templateUrl:'views/sms-createCampaign.html'
			})

			.state('sms.smsusages',{
				url:'/smsusages',
				controller:'Sms',
				templateUrl:'views/sms-smsusages.html'
			})

			.state('sms.usagesdetails',{
				url:'/usagesdetails',
				controller:'Sms',
				templateUrl:'views/sms-usagesdetails.html'
			})


			.state('discount',{
				url:'/discount',
				controller:'Discount',
				templateUrl:'views/discount.html'
			})

			.state('discount.manageoffer',{
				url:'/manageoffer',
				controller:'Discount',
				templateUrl:'views/discount-manageoffer.html'
			})

			.state('discount.createoffer',{
				url:'/createoffer',
				controller:'Discount',
				templateUrl:'views/discount-createoffer.html'
			})

			/*.state('discount.viewoffer',{
				url:'/viewoffer',
				controller:'Discount',
				templateUrl:'views/discount-viewoffer.html'
			})*/

			.state('managesubscriber',{
				url:'/managesubscriber',
				controller:'ManageSubscriber',
				templateUrl:'views/managesubscriber.html'
			})

			.state('giftcard',{
				url:'/giftcard',
				controller:'Giftcard',
				templateUrl:'views/giftcard.html'
			})

			.state('giftcard.manageGiftcards',{
				url:'/manageGiftcards',
				controller:'Giftcard',
				templateUrl:'views/giftcard-managegiftcards.html'
			})
			.state('giftcard.createGiftcard',{
				url:'/createGiftcard',
				controller:'Giftcard',
				templateUrl:'views/giftcard-creategiftcard.html'
			})

			.state('giftcard.giftcardsUsage',{
				url:'/giftcardsusage',
				controller:'Giftcard',
				templateUrl:'views/giftcard-giftcardsusage.html'
			})


			.state('loyaltypoint',{
				url:'/loyaltypoint',
				controller:'Loyaltypoint',
				templateUrl:'views/loyaltypoint.html'
			})

			

			.state('tablebooking',{
				url:'/tablebooking',
				controller:'TableBooking',
				templateUrl:'views/tablebooking.html'
			})

			.state('tablebooking.managebooking',{
				url:'/managebooking',
				controller:'TableBooking',
				templateUrl:'views/tablebooking-managebooking.html'
			})
			.state('tablebooking.createbooking',{
				url:'/createbooking',
				controller:'TableBooking',
				templateUrl:'views/tablebooking-createbooking.html'
			})		
			
			.state('tablebooking.managetables',{
				url:'/managetables',
				controller:'TableBooking',
				templateUrl:'views/tablebooking-managetables.html'
			})
			.state('tablebooking.addtables',{
				url:'/addtables',
				controller:'TableBooking',
				templateUrl:'views/tablebooking-addtables.html'
			})
			.state('tablebooking.managesettingareas',{
				url:'/managesettingareas',
				controller:'TableBooking',
				templateUrl:'views/tablebooking-managesettingareas.html'
			})
			.state('tablebooking.addsettingareas',{
				url:'/addsettingareas',
				controller:'TableBooking',
				templateUrl:'views/tablebooking-addsettingareas.html'
			})

			.state('restaurant',{
				url:'/restaurant',
				controller:'Restaurant',
				templateUrl:'views/restaurant.html'
			})

			.state('restaurant.manage',{
				url:'/manage',
				controller:'Restaurant',
				templateUrl:'views/restaurant-manage.html'
			})
			
			.state('restaurant.add',{
				url:'/add',
				controller:'Restaurant',
				templateUrl:'views/restaurant-add.html'
			})

			.state('package',{
				url:'/package',
				controller:'Package',
				templateUrl:'views/package.html'
			})

			.state('package.add',{
				url:'/add',
				controller:'Package',
				templateUrl:'views/package-add.html'
			})

			.state('package.manage',{
				url:'/manage',
				controller:'Package',
				templateUrl:'views/package-manage.html'
			})


			.state('theme',{
				url:'/theme',
				controller:'Theme',
				templateUrl:'views/theme.html'
			})

			.state('salsereport',{
				url:'/salsereport',
				controller:'Salsereport',
				templateUrl:'views/salsereport.html'
			})

			.state('deliverymanager',{
				url:'/deliverymanager',
				controller:'Deliverymanager',
				templateUrl:'views/deliverymanager.html'
			})

			.state('managesystemuser',{
				url:'/managesystemuser',
				controller:'Managesystemuser',
				templateUrl:'views/managesystemuser.html'
			})

			.state('managesystemuser.manage',{
				url:'/manage',
				controller:'Managesystemuser',
				templateUrl:'views/managesystemuser-manage.html'
			})

			.state('managesystemuser.add',{
				url:'/add',
				controller:'Managesystemuser',
				templateUrl:'views/managesystemuser-add.html'
			})



			.state('adminlog',{
				url:'/adminlog',
				controller:'Adminlog',
				templateUrl:'views/adminlog.html'
			})

			.state('dbbackup',{
				url:'/dbbackup',
				controller:'DBbackup',
				templateUrl:'views/dbbackup.html'
			})
			
			.state('resturentsetting',{
				url:'/resturentsetting',
				controller:'ResturentSetting',
				templateUrl:'views/resturentsetting.html'
			})


			.state('vat',{
				url:'/vat',
				controller:'VAT',
				templateUrl:'views/vat.html'
			})

			

		;$urlRouterProvider.otherwise('/');


	}



	

	




	/**
	 * Controllers
	*/
	var ctlr = {}; 

	ctlr.ResturentSetting = function($scope,$http)
	{
		
	}

	ctlr.VAT = function($scope,$http)
	{
		$scope.vat = [
			{name:'Flate Rate',rule:5}
			,{name:'Default VAT',rule:5}
		];

		$scope.remove = function(index)
		{

			$scope.vat.splice(index,1);
		}

		$scope.add = function(name,rule)
		{

			$scope.vat.push({name:name,rule:rule});
		}
	}

	ctlr.DBbackup = function($scope,$http)
	{
		$scope.backups = [
			{username:'Mizan',date:'10-12-2016 10:15am'}
			,{username:'Sumon',date:'10-12-2016 10:15am'}
			,{username:'Mukless',date:'10-12-2016 10:15am'}
			,{username:'Mizan',date:'10-12-2016 10:15am'}
			,{username:'Sumon',date:'10-12-2016 10:15am'}
			,{username:'Mukless',date:'10-12-2016 10:15am'}
		];

		$scope.takebackup = function()
		{
			if(confirm('Do you want to countinue to take databases backup ?'))
			{
				$scope.backups.push({username:'Mizan',date:'10-12-2016 10:15am'});
			}
		}

		$scope.restore = function()
		{
			if(confirm('Do you want to countinue restoring Databases ?'))
			{
				alert('Databaes Restored');
			}
		}
	}


	ctlr.Adminlog = function($scope,$http)
	{
		$scope.users = [
			{type:'Status Change',username:'anwar',date:'08-02-2015',details:'Lorem ipsum dolor sit amet, consectetur adipisicing elit, '}
			,{type:'Status Change',username:'anwar',date:'08-02-2015',details:'Lorem ipsum dolor sit amet, consectetur adipisicing elit, '}
			,{type:'Status Change',username:'anwar',date:'08-02-2015',details:'Lorem ipsum dolor sit amet, consectetur adipisicing elit, '}
			,{type:'Status Change',username:'anwar',date:'08-02-2015',details:'Lorem ipsum dolor sit amet, consectetur adipisicing elit, '}
			,{type:'Status Change',username:'anwar',date:'08-02-2015',details:'Lorem ipsum dolor sit amet, consectetur adipisicing elit, '}
			,{type:'Status Change',username:'anwar',date:'08-02-2015',details:'Lorem ipsum dolor sit amet, consectetur adipisicing elit, '}
			,{type:'Status Change',username:'anwar',date:'08-02-2015',details:'Lorem ipsum dolor sit amet, consectetur adipisicing elit, '}
		];
	}


	ctlr.Managesystemuser = function($scope,$http)
	{
		$scope.users = [
			{name:'Nosian Anwar',username:'anwar',email:'anwar@adas.com',date:'08-02-2015',status:'enable'}
			,{name:'Nosian Anwar',username:'anwar',email:'anwar@adas.com',date:'08-02-2015',status:'enable'}
			,{name:'Nosian Anwar',username:'anwar',email:'anwar@adas.com',date:'08-02-2015',status:'enable'}
			,{name:'Nosian Anwar',username:'anwar',email:'anwar@adas.com',date:'08-02-2015',status:'enable'}
			,{name:'Nosian Anwar',username:'anwar',email:'anwar@adas.com',date:'08-02-2015',status:'enable'}
		];
	}

	ctlr.Salsereport = function($scope,$http)
	{

	}

	ctlr.Deliverymanager = function($scope,$http)
	{
		$scope.area = ['area1','area5','area4','area3'];
	}

	ctlr.Theme = function($scope,$http)
	{
		$scope.selectedTheme = 1;
	}

	ctlr.Package = function($scope,$http)
	{
		$scope.packages = [
			{name:'Package Rockstar',users_count:12}
			,{name:'Welcome Package',users_count:12}
			,{name:'Welcome Package',users_count:12}
			,{name:'Package Rockstar',users_count:12}
			,{name:'Welcome Package',users_count:12}
			,{name:'Welcome Package',users_count:12}
		];
	}

	ctlr.Restaurant = function($scope,$http)
	{
		$scope.resturents = [
			{name:"Hotel Jaman",url:"http://www.jamanres.com",contact_name:"Mr.Jaman",email:"jaman@gmail.com",phone:"+466656546554",status:"active",date:"10-12-2015",pack:"Test Package"}
			,{name:"Radisons",url:"http://www.jamanres.com",contact_name:"Jhon Doe",email:"jaman@gmail.com",phone:"+466656546554",status:"active",date:"10-12-2015",pack:"Profationals Package"}
			,{name:"Westran",url:"http://www.jamanres.com",contact_name:"Wiliam Froster",email:"jaman@gmail.com",phone:"+466656546554",status:"active",date:"10-12-2015",pack:"Test Package"}
		];


		$scope.toggleModal=false;

		
		
	}

	ctlr.TableBooking = function($scope,$http)
	{

		$scope.booking = [
		    {email:'xyz@xyz.com',name:'Md Rony',gustnumber:'9',tablename:'xyz',settingarea:'xyz',bookingdate:'10-12-2015',reservationdate:'10-15-2015',reservationtime:'12pm',status:'approved',resturent:'Hotel Al Kabul'},
		    {email:'xyz@xyz.com',name:'Md Rony',gustnumber:'9',tablename:'xyz',settingarea:'xyz',bookingdate:'10-12-2015',reservationdate:'10-15-2015',reservationtime:'12pm',status:'approved',resturent:'Hotel Al Kabul'},
		    {email:'xyz@xyz.com',name:'Md Rony',gustnumber:'9',tablename:'xyz',settingarea:'xyz',bookingdate:'10-12-2015',reservationdate:'10-15-2015',reservationtime:'12pm',status:'approved',resturent:'Hotel Al Kabul'},
		    {email:'xyz@xyz.com',name:'Md Rony',gustnumber:'9',tablename:'xyz',settingarea:'xyz',bookingdate:'10-12-2015',reservationdate:'10-15-2015',reservationtime:'12pm',status:'approved',resturent:'Hotel Al Kabul'},
		    {email:'xyz@xyz.com',name:'Md Rony',gustnumber:'9',tablename:'xyz',settingarea:'xyz',bookingdate:'10-12-2015',reservationdate:'10-15-2015',reservationtime:'12pm',status:'approved',resturent:'Hotel Al Kabul'},
		    {email:'xyz@xyz.com',name:'Md Rony',gustnumber:'9',tablename:'xyz',settingarea:'xyz',bookingdate:'10-12-2015',reservationdate:'10-15-2015',reservationtime:'12pm',status:'approved',resturent:'Hotel Al Kabul'}
		];

		$scope.tables = [
			{name:'Window View',capacity:'5',no:'10',status:'enable',resturent:'Hotel Al zaziara'},
			{name:'Romantic Cupple',capacity:'5',no:'10',status:'disable',resturent:'Hotel Arman'},
			{name:'Window View',capacity:'5',no:'10',status:'enable',resturent:'Hotel Al zaziara'},
			{name:'Romantic Cupple',capacity:'5',no:'10',status:'disable',resturent:'Hotel Arman'},
			{name:'Window View',capacity:'5',no:'10',status:'enable',resturent:'Hotel Al zaziara'},
			{name:'Romantic Cupple',capacity:'5',no:'10',status:'disable',resturent:'Hotel Arman'},
			{name:'Window View',capacity:'5',no:'10',status:'enable',resturent:'Hotel Al zaziara'},
			{name:'Romantic Cupple',capacity:'5',no:'10',status:'disable',resturent:'Hotel Arman'}
		]

		$scope.area = ['Window View','Romantic Cupple'];
	}

	ctlr.Loyaltypoint   = function($scope,$http)
	{
		$scope.points = [
			{email:'ex@example.com',cname:'Md Rony',usedpoint:'50',blance:'100',resturent:'Al Jajira',bonuspoint:10},
			{email:'ex@example.com',cname:'Md Jony',usedpoint:'50',blance:'100',resturent:'Al Jajira',bonuspoint:10},
			{email:'ex@example.com',cname:'Md Jony',usedpoint:'50',blance:'100',resturent:'Al Jajira',bonuspoint:10},
			{email:'ex@example.com',cname:'Md Jony',usedpoint:'50',blance:'100',resturent:'Al Jajira',bonuspoint:10},
			{email:'ex@example.com',cname:'Md Jony',usedpoint:'50',blance:'100',resturent:'Al Jajira',bonuspoint:10},
			{email:'ex@example.com',cname:'Md Jony',usedpoint:'50',blance:'100',resturent:'Al Jajira',bonuspoint:10}
		];

		$scope.toggleModal = false;
		$scope.openModal = function()
		{
			$scope.toggleModal = !$scope.toggleModal;
		}

		$scope.save = function()
		{
			confirm("Do you want to save changes !!");
		}
	}

	ctlr.Giftcard = function($scope,$http)
	{
		$scope.cards = [
			{title:'new boof order',code:'546547d5ad654dad856da85',amount:'50',cdate:'12-5-2015',expdate:'15-5-2015',blance:'80',status:'enable',email:'ex@example.com',resturent:'hotel koba'},
			{title:'Damam Pffer',code:'546547d5ad654dad856da85',amount:'55',cdate:'15-5-2015',expdate:'16-5-2015',blance:'98',status:'notused',email:'ex@example.com',resturent:'hotel Susi'},
			{title:'new boof order',code:'546547d5ad654dad856da85',amount:'50',cdate:'12-5-2015',expdate:'15-5-2015',blance:'80',status:'enable',email:'ex@example.com',resturent:'hotel koba'},
			{title:'Damam Pffer',code:'546547d5ad654dad856da85',amount:'55',cdate:'15-5-2015',expdate:'16-5-2015',blance:'98',status:'notused',email:'ex@example.com',resturent:'hotel Susi'},
			{title:'new boof order',code:'546547d5ad654dad856da85',amount:'50',cdate:'12-5-2015',expdate:'15-5-2015',blance:'80',status:'enable',email:'ex@example.com',resturent:'hotel koba'},
			{title:'Damam Pffer',code:'546547d5ad654dad856da85',amount:'55',cdate:'15-5-2015',expdate:'16-5-2015',blance:'98',status:'notused',email:'ex@example.com',resturent:'hotel Susi'},
			{title:'new boof order',code:'546547d5ad654dad856da85',amount:'50',cdate:'12-5-2015',expdate:'15-5-2015',blance:'80',status:'enable',email:'ex@example.com',resturent:'hotel koba'},
			{title:'Damam Pffer',code:'546547d5ad654dad856da85',amount:'55',cdate:'15-5-2015',expdate:'16-5-2015',blance:'98',status:'notused',email:'ex@example.com',resturent:'hotel Susi'}
		];

		$scope.users = ['rony','jony','ekbal','motalab'];
		$scope.resturent = ['Hotem Aman','Hotel Susi','Hotem New Blngal ','Bismilla Kabab Gor'];

		$scope.toggleModal = false;
		$scope.openModal = function()
		{
			$scope.toggleModal = true;
		}
	}
		

	ctlr.Discount = function($scope,$http)
	{
		$scope.offers = [
			{name:"Black Friday Offer 2015",amount:"2000",date:"10-12-2015",offerstatus:"enable",couponstatus:"using",exdate:"10-15-2015",resturent:"Al Heramedia"},
			{name:"Bank Holiday",amount:"500",date:"10-12-2015",offerstatus:"disable",couponstatus:"used",exdate:"10-15-2015",resturent:"Al Heramedia"},
			{name:"Summer Holiday",amount:"7000",date:"10-12-2015",offerstatus:"enable",couponstatus:"notused",exdate:"10-15-2015",resturent:"Al Heramedia"},
			{name:"Summer Holiday",amount:"7000",date:"10-12-2015",offerstatus:"enable",couponstatus:"expired",exdate:"10-15-2015",resturent:"Al Heramedia"},
			{name:"Black Friday Offer 2015",amount:"2000",date:"10-12-2015",offerstatus:"enable",couponstatus:"using",exdate:"10-15-2015",resturent:"Al Heramedia"},
			{name:"Bank Holiday",amount:"500",date:"10-12-2015",offerstatus:"disable",couponstatus:"used",exdate:"10-15-2015",resturent:"Al Heramedia"},
			{name:"Summer Holiday",amount:"7000",date:"10-12-2015",offerstatus:"enable",couponstatus:"notused",exdate:"10-15-2015",resturent:"Al Heramedia"},
			{name:"Summer Holiday",amount:"7000",date:"10-12-2015",offerstatus:"enable",couponstatus:"expired",exdate:"10-15-2015",resturent:"Al Heramedia"},
			{name:"Black Friday Offer 2015",amount:"2000",date:"10-12-2015",offerstatus:"enable",couponstatus:"using",exdate:"10-15-2015",resturent:"Al Heramedia"},
			{name:"Bank Holiday",amount:"500",date:"10-12-2015",offerstatus:"disable",couponstatus:"used",exdate:"10-15-2015",resturent:"Al Heramedia"},
			{name:"Summer Holiday",amount:"7000",date:"10-12-2015",offerstatus:"enable",couponstatus:"notused",exdate:"10-15-2015",resturent:"Al Heramedia"},
			{name:"Summer Holiday",amount:"7000",date:"10-12-2015",offerstatus:"enable",couponstatus:"expired",exdate:"10-15-2015",resturent:"Al Heramedia"},
			{name:"Black Friday Offer 2015",amount:"2000",date:"10-12-2015",offerstatus:"enable",couponstatus:"using",exdate:"10-15-2015",resturent:"Al Heramedia"},
			{name:"Bank Holiday",amount:"500",date:"10-12-2015",offerstatus:"disable",couponstatus:"used",exdate:"10-15-2015",resturent:"Al Heramedia"},
			{name:"Summer Holiday",amount:"7000",date:"10-12-2015",offerstatus:"enable",couponstatus:"notused",exdate:"10-15-2015",resturent:"Al Heramedia"},
			{name:"Summer Holiday",amount:"7000",date:"10-12-2015",offerstatus:"enable",couponstatus:"expired",exdate:"10-15-2015",resturent:"Al Heramedia"}
		];

		$scope.category = {};
		$scope.categorys = [
			{id:1,name:"Kabab"},
			{id:2,name:"Halua"},
			{id:3,name:"Biriani"},
			{id:4,name:"Beef"},
			{id:1,name:"Kabab"},
			{id:2,name:"Halua"},
			{id:3,name:"Biriani"},
			{id:4,name:"Beef"},
			{id:1,name:"Kabab"},
			{id:2,name:"Halua"},
			{id:3,name:"Biriani"},
			{id:4,name:"Beef"}
		];

		$scope.item = {};
		$scope.items = [
			{id:1,name:"Bashmoti Rice"},
			{id:2,name:"Chicken Barger"},
			{id:3,name:"Bif Barger"},
			{id:4,name:"Vegetable Pakora"},
			{id:1,name:"Raita Salad"},
			{id:2,name:"Paneer Tikka"},
			{id:3,name:"Biriani"},
			{id:4,name:"Beef Boti Kabab"},
			{id:1,name:"Mutton Bhuna Khichuri"},
			{id:1,name:"Bashmoti Rice"},
			{id:2,name:"Chicken Barger"},
			{id:3,name:"Bif Barger"},
			{id:4,name:"Vegetable Pakora"},
			{id:1,name:"Raita Salad"},
			{id:2,name:"Paneer Tikka"},
			{id:3,name:"Biriani"},
			{id:4,name:"Beef Boti Kabab"},
			{id:1,name:"Mutton Bhuna Khichuri"},{id:1,name:"Bashmoti Rice"},
			{id:2,name:"Chicken Barger"},
			{id:3,name:"Bif Barger"},
			{id:4,name:"Vegetable Pakora"},
			{id:1,name:"Raita Salad"},
			{id:2,name:"Paneer Tikka"},
			{id:3,name:"Biriani"},
			{id:4,name:"Beef Boti Kabab"},
			{id:1,name:"Mutton Bhuna Khichuri"}
			
		];


	}


	ctlr.ManageSubscriber = function($scope,$http)
	{
		$scope.subscribers = [
			{name:"Md rony",email:"rony@gmail.com",phone:"+68451854541",resturent: 'Hotel Japanis',status:'true'},
			{name:"Md jony",email:"jony@gmail.com",phone:"+84654646574",resturent: 'Hotel Arman',status:'false'},
			{name:"Md rony",email:"rony@gmail.com",phone:"+68451854541",resturent: 'Hotel Japanis',status:'true'},
			{name:"Md jony",email:"jony@gmail.com",phone:"+84654646574",resturent: 'Hotel Arman',status:'false'},
			{name:"Md rony",email:"rony@gmail.com",phone:"+68451854541",resturent: 'Hotel Japanis',status:'true'},
			{name:"Md jony",email:"jony@gmail.com",phone:"+84654646574",resturent: 'Hotel Arman',status:'false'},
			{name:"Md rony",email:"rony@gmail.com",phone:"+68451854541",resturent: 'Hotel Japanis',status:'true'},
			{name:"Md jony",email:"jony@gmail.com",phone:"+84654646574",resturent: 'Hotel Arman',status:'false'}


		];
	}



	

	ctlr.Sms = function($scope,$http)
	{


		$scope.smausages = [
			{restaurant:'Hotel Susi',used:'50',total:100},
			{restaurant:'Mam aPizza',used:'50',total:80},
			{restaurant:'Hotel West',used:'50',total:100},
			{restaurant:'Ali aPizza',used:'50',total:80},
		];
		
		$scope.campaigns = [
			{name : 'Summer Offer',theme: 'albania',sdate: '10-12-1025',status: 'queued',sentto: '60',resturent: 'Hotel Japanis'},
			{name : 'May Day Offer',theme: 'Redblue',sdate: '10-3-1015',status: 'sent',sentto: '80',resturent: 'Hotel Arman'},
			{name : 'Summer Offer',theme: 'albania',sdate: '10-12-1025',status: 'queued',sentto: '60',resturent: 'Hotel Japanis'},
			{name : 'May Day Offer',theme: 'Redblue',sdate: '10-3-1015',status: 'sent',sentto: '80',resturent: 'Hotel Arman'},
			{name : 'Summer Offer',theme: 'albania',sdate: '10-12-1025',status: 'queued',sentto: '60',resturent: 'Hotel Japanis'},
			{name : 'May Day Offer',theme: 'Redblue',sdate: '10-3-1015',status: 'sent',sentto: '80',resturent: 'Hotel Arman'},
			{name : 'Summer Offer',theme: 'albania',sdate: '10-12-1025',status: 'queued',sentto: '60',resturent: 'Hotel Japanis'},
			{name : 'May Day Offer',theme: 'Redblue',sdate: '10-3-1015',status: 'sent',sentto: '80',resturent: 'Hotel Arman'},
			{name : 'Summer Offer',theme: 'albania',sdate: '10-12-1025',status: 'queued',sentto: '60',resturent: 'Hotel Japanis'},
			{name : 'May Day Offer',theme: 'Redblue',sdate: '10-3-1015',status: 'sent',sentto: '80',resturent: 'Hotel Arman'},
			{name : 'Summer Offer',theme: 'albania',sdate: '10-12-1025',status: 'queued',sentto: '60',resturent: 'Hotel Japanis'},
			{name : 'May Day Offer',theme: 'Redblue',sdate: '10-3-1015',status: 'sent',sentto: '80',resturent: 'Hotel Arman'}
		];

		$scope.templeat = {};
		$scope.templeats = ['Templeate One','Templeate Two','Templeate Three'];

		$scope.postalcode = {};
		$scope.postalcodes = ['54454','46898798','54654','6465','645654'];

		$scope.user = {};
		$scope.users = ['rony','jony','ekbal','motalab'];

		$scope.template = {};

		$scope.save = function()
		{
			confirm("Do you want to save changes !!");
		}
	}

	ctlr.Emailmarketing = function($scope,$http)
	{
		$scope.campaigns = [
			{name : 'Summer Offer',theme: 'albania',sdate: '10-12-1025',status: 'queued',sentto: 'All User',resturent: 'Hotel Japanis'},
			{name : 'May Day Offer',theme: 'Redblue',sdate: '10-3-1015',status: 'sent',sentto: 'Rony, Jony, Noman, Sohel',resturent: 'Hotel Arman'},
			{name : 'Summer Offer',theme: 'albania',sdate: '10-12-1025',status: 'queued',sentto: 'All User',resturent: 'Hotel Japanis'},
			{name : 'May Day Offer',theme: 'Redblue',sdate: '10-3-1015',status: 'sent',sentto: 'Rony, Jony, Noman, Sohel',resturent: 'Hotel Arman'},
			{name : 'Summer Offer',theme: 'albania',sdate: '10-12-1025',status: 'queued',sentto: 'All User',resturent: 'Hotel Japanis'},
			{name : 'May Day Offer',theme: 'Redblue',sdate: '10-3-1015',status: 'sent',sentto: 'Rony, Jony, Noman, Sohel',resturent: 'Hotel Arman'},
			{name : 'Summer Offer',theme: 'albania',sdate: '10-12-1025',status: 'queued',sentto: 'All User',resturent: 'Hotel Japanis'},
			{name : 'May Day Offer',theme: 'Redblue',sdate: '10-3-1015',status: 'sent',sentto: 'Rony, Jony, Noman, Sohel',resturent: 'Hotel Arman'},
			{name : 'Summer Offer',theme: 'albania',sdate: '10-12-1025',status: 'queued',sentto: 'All User',resturent: 'Hotel Japanis'},
			{name : 'May Day Offer',theme: 'Redblue',sdate: '10-3-1015',status: 'sent',sentto: 'Rony, Jony, Noman, Sohel',resturent: 'Hotel Arman'},
			{name : 'Summer Offer',theme: 'albania',sdate: '10-12-1025',status: 'queued',sentto: 'All User',resturent: 'Hotel Japanis'},
			{name : 'May Day Offer',theme: 'Redblue',sdate: '10-3-1015',status: 'sent',sentto: 'Rony, Jony, Noman, Sohel',resturent: 'Hotel Arman'},
			{name : 'Summer Offer',theme: 'albania',sdate: '10-12-1025',status: 'queued',sentto: 'All User',resturent: 'Hotel Japanis'},
			{name : 'May Day Offer',theme: 'Redblue',sdate: '10-3-1015',status: 'sent',sentto: 'Rony, Jony, Noman, Sohel',resturent: 'Hotel Arman'},
			{name : 'Summer Offer',theme: 'albania',sdate: '10-12-1025',status: 'queued',sentto: 'All User',resturent: 'Hotel Japanis'},
			{name : 'May Day Offer',theme: 'Redblue',sdate: '10-3-1015',status: 'sent',sentto: 'Rony, Jony, Noman, Sohel',resturent: 'Hotel Arman'}
		]

		$scope.templeat = {};
		$scope.templeats = ['Templeate One','Templeate Two','Templeate Three'];

		$scope.postalcode = {};
		$scope.postalcodes = ['54454','46898798','54654','6465','645654'];

		$scope.user = {};
		$scope.users = ['rony','jony','ekbal','motalab'];

		$scope.template = {};

	}


	ctlr.Design = function($scope,$http)
	{
		$scope.footer = '';
	}

	ctlr.Slider = function($scope,$http)
	{
		$scope.slide = "";
		$scope.sliders = [{
			title:"hello world",
			content:"Lorem ipsum dolor sit amet, consectetur adipisicing elit.",

		}];

		$scope.selectedslider = {};
		

		$scope.addSlide = function()
		{
			$scope.sliders.push({
				title:$scope.slide.title,
				content:$scope.slide.content
			});

			$scope.slide = {};
			$scope.slide.content = "";
		}

		$scope.deleteSlide = function(index)
		{
			$scope.sliders.splice(index,1);
		}


		$scope.editSlide = function(index){
			$scope.selectedslider.title = $scope.sliders[index].title;
			$scope.selectedslider.content = $scope.sliders[index].content;
			$scope.toggleModal = true;
			$scope.editIndex = index;
		}

		$scope.saveSlider = function(index){
			$scope.sliders[$scope.editIndex].title = $scope.selectedslider.title;
			$scope.sliders[$scope.editIndex].content = $scope.selectedslider.content;
			$scope.toggleModal = false;
		}
	}




	ctlr.Widget = function($scope,$http)
	{

	}

	
	ctlr.Page = function($scope,$http)
	{
		$scope.pagebody = "dsas";
		$http.get('data/page.json').success(function(data){ 
			$scope.pages = data;
		});

	}	

	ctlr.Review = function($scope,$http)
	{
		
		$http.get('data/review.json').success(function(data){ 
			$scope.reviews = data;
		});

		$scope.coustomer = {};
		$scope.coustomers = [
			{id:1,name:"Md Rony"},
			{id:2,name:"Md Jony "},
			{id:3,name:"Ashraf Sohel"},
			{id:1,name:"Md Rony"},
			{id:2,name:"Md Jony "},
			{id:3,name:"Ashraf Sohel"},
			{id:1,name:"Md Rony"},
			{id:2,name:"Md Jony "},
			{id:3,name:"Ashraf Sohel"}
		];


		
	}

	ctlr.Coustomer = function($scope,$http)
	{
		
		$http.get('data/coustomer.json').success(function(data){ 
			$scope.coustomer = data;
		});


		
	}


	ctlr.Catalog = function($scope,$http)
	{
		
		$http.get('data/item.json').success(function(data){ 
			$scope.items = data;
		});

		$scope.checkedItems = [];
		


		$scope.checkedItem = function(id)
		{
			if($scope.checkedItems.indexOf(id) == -1){

				$scope.checkedItems.push(id);
				$scope.checkedItems.sort(function(a, b){return b-a});
			}else{
				$scope.checkedItems.splice($scope.checkedItems.indexOf(id),1);
			}



		}

		$scope.changeStatus = function(status)
		{
			angular.forEach($scope.checkedItems,function(value,key){
				$scope.items[value].status = status;

			});
		}


		$scope.removeItem = function()
		{

			angular.forEach($scope.checkedItems,function(value,key){
				
				$scope.items.splice(value,1);
				console.log(value);	
				



			});

			$scope.checkedItems = [];
		}

		$scope.choise = [];
		$scope.itemchoise = [];
		$scope.removeChoise  = function(index)
		{
			$scope.itemchoise.splice(index,1);		
		}

		$scope.addChoise = function()
		{
			$scope.itemchoise.push({
				name : $scope.choise.name,
				price : $scope.choise.price
			});
			$scope.choise = [];
		}




		$scope.topping = [];
		$scope.toppings = [];
		$scope.removeaddons  = function(index)
		{
			$scope.toppings.splice(index,1);		
		}
		$scope.addTopping = function()
		{
			$scope.toppings.push({
				name : $scope.topping.name,
				price : $scope.topping.price
			});
			$scope.topping = [];
		}






		


		
	}



	ctlr.Dashboard = function($scope,$http)
	{
		
		$http.get('data/resturents.json').success(function(data){ 
			$scope.resturents = data;
		});

		$http.get('data/recent-added-item.json').success(function(data){ 
			$scope.recentItems = data;
		});

		$http.get('data/order-print.json').success(function(data){ 
			$scope.order_prints = data;
		});


		
	}



	ctlr.Sales = function($scope,$http,$timeout)
	{
		$http.get('data/order.json').success(function(data){ 
			$scope.neworders = data;
		});

		$http.get('data/coustomer.json').success(function(data){ 
			$scope.coustomers = data;
		});

		$scope.category = {};
		$scope.categorys = [
			{id:1,name:"Kabab"},
			{id:2,name:"Halua"},
			{id:3,name:"Biriani"},
			{id:4,name:"Beef"},
			{id:1,name:"Kabab"},
			{id:2,name:"Halua"},
			{id:3,name:"Biriani"},
			{id:4,name:"Beef"},
			{id:1,name:"Kabab"},
			{id:2,name:"Halua"},
			{id:3,name:"Biriani"},
			{id:4,name:"Beef"}
		];

		$scope.item = {};
		$scope.items = [
			{id:1,name:"Bashmoti Rice"},
			{id:2,name:"Chicken Barger"},
			{id:3,name:"Bif Barger"},
			{id:4,name:"Vegetable Pakora"},
			{id:1,name:"Raita Salad"},
			{id:2,name:"Paneer Tikka"},
			{id:3,name:"Biriani"},
			{id:4,name:"Beef Boti Kabab"},
			{id:1,name:"Mutton Bhuna Khichuri"},
			{id:1,name:"Bashmoti Rice"},
			{id:2,name:"Chicken Barger"},
			{id:3,name:"Bif Barger"},
			{id:4,name:"Vegetable Pakora"},
			{id:1,name:"Raita Salad"},
			{id:2,name:"Paneer Tikka"},
			{id:3,name:"Biriani"},
			{id:4,name:"Beef Boti Kabab"},
			{id:1,name:"Mutton Bhuna Khichuri"},{id:1,name:"Bashmoti Rice"},
			{id:2,name:"Chicken Barger"},
			{id:3,name:"Bif Barger"},
			{id:4,name:"Vegetable Pakora"},
			{id:1,name:"Raita Salad"},
			{id:2,name:"Paneer Tikka"},
			{id:3,name:"Biriani"},
			{id:4,name:"Beef Boti Kabab"},
			{id:1,name:"Mutton Bhuna Khichuri"}
			
		];

		$scope.price = {};
		$scope.prices = [
			{name:"Single",rate:"10"},	
			{name:"Double",rate:"12"},	
			{name:"Large",rate:"15"},	
			{name:"Family Pack",rate:"25"},	
					
		];

		$scope.addon = {};
		$scope.addons = [
			{name:"Extra Butter",rate:"4"},	
			{name:"Double Chicken",rate:"12"},	
			{name:"Drink",rate:"15"},	
			{name:"Extra Fry",rate:"5"},	
					
		];


		$scope.selecteditems = [];
		$scope.qyt = 1;
		$scope.addItem = function(q)
		{
			
			console.log($scope.qyt);
			$scope.selecteditems.push({
				name:$scope.item.selected.name,
				qyt:$scope.qyt,
				price:$scope.price.selected.rate,
				extra:$scope.addon.selected.rate,
			});


			console.log($scope.qt);

			$scope.qyt = 1;
			$scope.item = {};
			$scope.price = {};
			$scope.addon = {};


		}

		$scope.removeItem = function(index)
		{
			$scope.selecteditems.splice(index,1);
		}



		
		

      	
	}

	app.controller(ctlr);

	

	

})();