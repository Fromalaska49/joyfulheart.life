<?php
$from = 'noreply@joyfulheart.life';

$text = $_POST['text'];
$to = 'fromalaska49@gmail.com';
$subject = $_POST['subject'];
$sender = $_POST['name'];

$body = 'Sent by ' . htmlentities($sender) . '<br /><br />Email: ' . htmlentities($from) . '<br /><br />' . htmlentities($text);

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= "From: " . $from . "\r\n"."X-Mailer: php";

$stat = '';
if(mail($to, $subject, $body, $headers)){
	$stat = 'Your RSVP has been received';
}
else{
	$stat = 'Error: your RSVP could not be recorded at this time, please try again later';
}

?>
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
								RSVP
							</h1>
							<p>
								<?php
									echo(htmlentities($stat));
								?>
							</p>
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
