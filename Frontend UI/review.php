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
			<div class="col-lg-3">
				<div class="m-panel">
					<div class="m-panel_header">OUR MENU</div>
					<div class="m-panel_content">
						<ul class="m-nav-stacked">
							<li class="active"><a href="">Burgers</a></li>
							<li class="active"><a href="">Fish And Chips</a></li>
							<li class="active"><a href="">Drink</a></li>
							<li class="active"><a href="">Dessert</a></li>
							<li class="active"><a href="">Lunch</a></li>
						</ul>
					</div>
				</div>

				<div class="g-vsap"></div>
				<div class="g-vsap"></div>

				<div class="m-panel">
					<div class="m-panel_header">MY CART</div>
					<div class="m-panel_content">
						<ul class="g-list">
							<li>Western Grill  &nbsp;&nbsp; x  &nbsp;&nbsp;1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$5.60</li>
							<li>Western Grill  &nbsp;&nbsp; x  &nbsp;&nbsp;1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$5.60</li>
							<li>Western Grill  &nbsp;&nbsp; x  &nbsp;&nbsp;1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$5.60</li>
							<li>Western Grill  &nbsp;&nbsp; x  &nbsp;&nbsp;1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$5.60</li>
						</ul>

						<div class="g-vsap"></div>

						<a href="" class="btn btn-noshadow btn-small btn-block">View Cart</a>
					</div>
				</div>
			</div>


			<div class="col-lg-9">
				<h4 class="g-text-primary g-text-strong">REVIEW</h4>
				<div class="g-vsap"></div>
				<div class="g-box">
					<a href="" class="btn btn-lg pull-right btn-noshadow">SUBMIT YOUR REVIEW</a>
					<div class="g-vsap"></div>
					<ul class="m-review">
						<?php for($i=0;$i<5;$i++): ?>
							<li>
								<div class="m-review_rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<small>3.5 out of 5</small>
								</div>
								<p><strong>Customer Name</strong> - 21/08/15</p>
								<p>
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
								</p>
							</li>
						<?php endfor; ?>
					</ul>
				</div>

			</div>
		</div>

		
	</div>

</div>
<?php include 'footer.php'; ?>