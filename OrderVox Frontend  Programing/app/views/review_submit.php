<?php include 'header.php'; ?>
<div class="l-mainbody">
	<div class="g-vsap"></div>
	<div class="g-vsap"></div>
	<div class="container">
		<ol class="breadcrumb">
		  <li><a href="#">Review</a></li>
		  <li class="active">Submit Review</li>
		</ol>

		<div class="row">
			<div class="col-lg-3">	

				<?php include 'left-nav-my-cart.php'; ?>
			</div>


			<div class="col-lg-9">

				<h4 class="g-text-primary g-text-strong">SUBMIT REVIEW</h4>
				<div class="g-vsap"></div>
				<div class="g-box">
					<form action="<?=URI::parse('home/submitreview') ?>" method="POST" class="f-review">
						
						<label for="">Review Details : </label>
						<br>
						<textarea name="review_text" required></textarea>
						
						<select name="review_rating">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
						<input type="hidden" name="review_customer_id" value="<?=$_SESSION['logged_customer'][0]['id']?>">
						<input type="hidden" name="review_restaurant_id" value="1">
						<input type="hidden" name="review_date" value="<?=time() ?>">
						
						<div class="g-vsap"></div>
						<input type="submit" value="SUBMIT" class="btn btn-noshadow">


					</form>
				</div>

			</div>
		</div>

		
	</div>

</div>
<?php include 'footer.php'; ?>