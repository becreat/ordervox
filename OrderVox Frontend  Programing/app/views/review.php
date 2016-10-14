<?php include 'header.php'; ?>
<div class="l-mainbody">
	<div class="g-vsap"></div>
	<div class="g-vsap"></div>
	<div class="container">
		<ol class="breadcrumb">
		  <li><a href="#">Review</a></li>
		  <li class="active">Review</li>
		</ol>

		<div class="row">
			


			<div class="col-lg-12" ng-controller="Review">

				

				<h4 class="g-text-primary g-text-strong">REVIEW</h4>
				<div class="g-vsap"></div>
				<div class="g-box">
					<a href="<?=URI::parse('home/submitreview')?>" class="btn btn-lg pull-right btn-noshadow">SUBMIT YOUR REVIEW</a>
					<div class="g-vsap"></div>
					<ul class="m-review">
						<li ng-repeat="review in reviews">
							
							<div class="m-review_rating">
								
								<i ng-repeat="n in [] | range:review.review_rating" class="fa fa-star"></i>
								<i ng-repeat="n in [] | range:(5-review.review_rating)"class="fa fa-star-o"></i>

							</div>
							<small>{{review.review_rating}} out of 5</small>

							<p><strong>{{review.customer_fname}} {{review.customer_lname}}</strong> - {{review.review_date * 1000 | date}}</p>
							<p>{{review.review_text}}</p>
						</li>


					</ul>
				</div>

			</div>
		</div>

		
	</div>

</div>
<?php include 'footer.php'; ?>