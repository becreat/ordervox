<?php include 'header.php'; ?>
<div class="l-mainbody">
	<div class="g-vsap"></div>
	<div class="g-vsap"></div>
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="#">My Account</a></li>
			<li class="active">Login</li>
		</ol>

		<h4 class="g-text-primary g-text-strong g-innerwrap">Login</h4>

		<div class="g-box">
			<p class="g-header">ALREADY REGISTERED</p>
			<div class="g-vsap"></div>
			<div class="row">
				<div class="col-lg-6">
					<div class="g-innerwrap">
						
						<?php if(isset($error)): ?>
							<p class="text-danger"><?=$error; ?></p>
							<div class="g-vsap"></div>
						<?php endif; ?>

						<form action="<?=URI::parse('home/login') ?>" method="POST" class="f-basic">
							<div class="f-basic_group">
								<label>E-Mail</label>
								<input type="text" name="email" required>
							</div>
							<div class="f-basic_group">
								<label>Password</label>
								<input type="password" name="password" required>
							</div>

							<div class="g-vsap"></div>

							<input type="submit" class="btn btn-noshadow" value="Login">
						</form>

					


					</div>
				</div>

				<div class="col-lg-6">				
					<div class="g-innerwrap">
						<h4 class="g-text-primary g-text-strong">I AM New Customer</h4>
						<div class="g-vsap"></div>
				
					
						<div class="g-vsap"></div>
				
						<p>
							By creating an account you will be able to shop faster, be up to date on an order's 
							status, and keep track of the orders you have previously made.
						</p>
				
						<div class="g-vsap"></div>
				
						<a href="<?=URI::parse('home/registration') ?>" class="btn btn-noshadow">CONTINUE</a>
					</div>
				</div>

				
			</div>

			
			
		</div>

		
	</div>

</div>
<?php include 'footer.php'; ?>