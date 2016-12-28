<!DOCTYPE html>
<html>
	<head>
		<?php
			require('common/head-includes.php');
		?>
		<title>
			Paul Greenlee Retirement
		</title>
	</head>
	<body>
		<?php
			require('common/menu.php');
		?>
		<div id="content" class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="row section-container">
						<div class="col-sm-12">
							<h1>
								Contact
							</h1>
							<br />
							<form action="" method="post">
								<div class="row">
									<div class="col-md-3 col-sm-12" style="text-align:left;">
										<input type="text" name="email" placeholder="Your Email" />
									</div>
									<div class="col-md-3 col-sm-12" style="text-align:right;">
										<input type="text" name="email" placeholder="Your Name" />
									</div>
								</div>
								<br />
								<div class="row">
									<div class="col-md-12">
										<textarea placeholder="Your Message" style="width:100%;height:400px;"></textarea>
									</div>
								</div>
								<input type="submit" value="Send" id="contact-form-submit-button" />
							<form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
			require('common/footer.php');
		?>
	</body>
</html>
