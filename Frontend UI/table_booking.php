<?php include 'header.php'; ?>
<div class="l-mainbody p-tablebooking">
	<div class="g-vsap"></div>
	<div class="g-vsap"></div>
	<div class="container">
		<ol class="breadcrumb">
		  <li><a href="#">Table</a></li>
		  <li class="active">Boooking</li>
		</ol>

		<h4 class="g-text-primary g-text-strong">TABLE RESERVATION</h4>

		<div class="m-tableBooking">
			<div class="m-tableBooking_title">Make a free Table Booking</div>
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
				<button type="submit" class="btn">FIND TABLE</button>
			</form>
		</div>
		<div class="g-vsap"></div>


		<p class="text-success">
			Congratulations, A Table for three persons in the window area is available at 5.30 PM on 12/07/2015. <br>Thank you.
			<br>
			<br>
			<a href="" class="btn"><i class="fa fa-check"></i> BOOK NOW</a>
		</p>


		
	</div>

</div>
<?php include 'footer.php'; ?>