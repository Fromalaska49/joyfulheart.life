<!DOCTYPE html>
<html>
	<head>
		<?php
			require('common/head-includes.php');
		?>
        <title>
        	Officers | Association for Computing Machinery UTSA
        </title>
        <style type="text/css">
        	.officer-card {
        		width: 260px;
        		height: ;
        		/*box-shadow: 0px 1px 15px -7px;*/
        		border-radius: 5px;
        		display: inline-block;
        		padding: 20px;
        		text-align: center;
        		/*
				box-shadow: 0px 1px 11px -3px;
				border-radius: 3px;
				background-color: #ffffff;
				*/
				box-shadow: 0px 1px 11px -3px;
				margin: 10px;
				border-radius: 3px;
				background-color: #ffffff;
        	}
        	.officer-card-photo-container {
        		width: 220px;
        		height: 220px;
        		overflow: hidden;
        	}
        	.officer-card-photo {
        		width: 220px;
        		height: 220px;
        		border-radius: 1000px;
        	}
        	.officer-card-name {
        		padding: 0px;
        		margin: 5px;
        	}
        	.officer-card-title {
        		padding: 0px;
        		margin: 10px 15px 15px 15px;
        		height: 46px;
        		/*
        		background-color:green;
        		*/
        	}
        	.officer-card-email {
        		padding: 0px;
        		margin: 5px;
        	}
        	#officer-cards-container {
        		text-align: center;
        	}
			@media (min-width: 500px) and (max-width: 992px) {
				.officer-card-photo-container, .officer-card-photo {
					width: 190px;
					height: 190px;
				}
				.officer-card {
					width: 210px;
					margin: 15px;
					padding: 10px;
				}
				.officer-card-title {
					font-size: 22px;
					height: 38px
				}
				.officer-card-email {
					font-size: 14px;
				}
			}
			@media (max-width: 499px) {
				.officer-card-photo-container, .officer-card-photo {
					width: 250px;
					height: 250px;
				}
				.officer-card {
					width: 290px;
					margin: 7px 15px 8px 15px;
				}
				.officer-card {
					padding: 15px;
				}
			}
			@media (max-width: 349px) {
				#content-row {
					margin:0px 0px 0px -15px;
				}
			}
        </style>
	</head>
	<body>
		<?php
			require('common/menu.php');
		?>
		<div id="content" class="container">
			<div class="row" id="#content-row">
				<div class="col-sm-12">
					<!-- content here! -->
					<h1 class="content-title">
						Officers
					</h1>
					<div id="officer-cards-container">
						<div class="officer-card">
							<div class="officer-card-photo-container">
								<img src="images/officer_photos/shane_becker.jpg" class="officer-card-photo" />
							</div>
							<h3 class="officer-card-title">
								President
							</h3>
							<h4 class="officer-card-name">
								Shane Becker
							</h3>
							<a href="mailto:acm.utsa@gmail.com">
								<p class="officer-card-email">
									acm.utsa@gmail.com
								</p>
							</a>
						</div>
						<div class="officer-card">
							<div class="officer-card-photo-container">
								<img src="images/officer_photos/nishant_grover.jpg" class="officer-card-photo" />
							</div>
							<h3 class="officer-card-title">
								Vice President
							</h3>
							<h4 class="officer-card-name">
								Nishant Grover
							</h3>
							<a href="mailto:acm.utsa@gmail.com">
								<p class="officer-card-email">
									acm.utsa@gmail.com
								</p>
							</a>
						</div>
						<div class="officer-card">
							<div class="officer-card-photo-container">
								<img src="images/officer_photos/andrew_hutton.jpg" class="officer-card-photo" />
							</div>
							<h3 class="officer-card-title">
								Secretary
							</h3>
							<h4 class="officer-card-name">
								Andrew Hutton
							</h3>
							<a href="http://hutton.tech">
								<p class="officer-card-email">
									hutton.tech
								</p>
							</a>
						</div>
						<div class="officer-card">
							<div class="officer-card-photo-container">
								<img src="images/officer_photos/jason_blig.jpg" class="officer-card-photo" />
							</div>
							<h3 class="officer-card-title">
								Treasurer
							</h3>
							<h4 class="officer-card-name">
								Jason Blig
							</h3>
							<p class="officer-card-email" style="color:#fff;" onmouseover="this.style.color='#fff'">
								-
							</p>
						</div>
						<div class="officer-card">
							<div class="officer-card-photo-container">
								<img src="images/officer_photos/andrew_bennett.jpg" class="officer-card-photo" />
							</div>
							<h3 class="officer-card-title">
								Public Relations Chair
							</h3>
							<h4 class="officer-card-name">
								Andrew Bennett
							</h3>
							<a href="mailto:abennett0322@gmail.com">
								<p class="officer-card-email">
									abennett0322@gmail.com
								</p>
							</a>
						</div>
						<div class="officer-card">
							<div class="officer-card-photo-container">
								<img src="images/officer_photos/diego_romero.jpg" class="officer-card-photo" />
							</div>
							<h3 class="officer-card-title">
								Social Events Chair
							</h3>
							<h4 class="officer-card-name">
								Diego Romero
							</h3>
							<p class="officer-card-email" style="color:#fff;" onmouseover="this.style.color='#fff'">
								-
							</p>
						</div>
						<div class="officer-card">
							<div class="officer-card-photo-container">
								<img src="images/officer_photos/andrew_sanetra.jpg" class="officer-card-photo" />
							</div>
							<h3 class="officer-card-title">
								Media Chair
							</h3>
							<h4 class="officer-card-name">
								Andrew Sanetra
							</h3>
							<p class="officer-card-email" style="color:#fff;" onmouseover="this.style.color='#fff'">
								-
							</p>
						</div>
						<div class="officer-card">
							<div class="officer-card-photo-container">
								<img src="images/officer_photos/chris_doege.jpg" class="officer-card-photo" />
							</div>
							<h3 class="officer-card-title">
								Projects Chair
							</h3>
							<h4 class="officer-card-name">
								Chris Doege
							</h3>
							<a href="http://doege.pw">
								<p class="officer-card-email">
									doege.pw
								</p>
							</a>
						</div>
						<!-- <div class="officer-card">
							<div class="officer-card-photo-container">
								<img src="images/officer_photos/default.jpg" class="officer-card-photo" />
							</div>
							<h3 class="officer-card-title">
								Officer
							</h3>
							<h4 class="officer-card-name">
								First Last
							</h3>
							<a href="mailto:acm.utsa@gmail.com">
								<p class="officer-card-email">
									acm.utsa@gmail.com
								</p>
							</a>
						</div>
						<div class="officer-card">
							<div class="officer-card-photo-container">
								<img src="images/officer_photos/default.jpg" class="officer-card-photo" />
							</div>
							<h3 class="officer-card-title">
								Officer
							</h3>
							<h4 class="officer-card-name">
								First Last
							</h3>
							<a href="mailto:acm.utsa@gmail.com">
								<p class="officer-card-email">
									acm.utsa@gmail.com
								</p>
							</a>
						</div>
						<div class="officer-card">
							<div class="officer-card-photo-container">
								<img src="images/officer_photos/default.jpg" class="officer-card-photo" />
							</div>
							<h3 class="officer-card-title">
								Officer
							</h3>
							<h4 class="officer-card-name">
								First Last
							</h3>
							<a href="mailto:acm.utsa@gmail.com">
								<p class="officer-card-email">
									acm.utsa@gmail.com
								</p>
							</a>
						</div> -->
					</div>
				</div>
			</div>
		</div>
		<?php
			require('common/footer.php');
		?>
	</body>
</html>
