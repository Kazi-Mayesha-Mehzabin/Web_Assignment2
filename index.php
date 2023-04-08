<!doctype html>
<html lang="en">

<head>
	<title>Contact Form</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="contact/css/style.css">

</head>

<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					

				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">Contact Us</h3>
									<div style="align-items:center; " class="form-group" >
													<a href="login.php"> <p style=" background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%); margin-left:550px" class="btn">

													Log In
												</p></a>
													
												</div>
									<div id="form-message-warning" class="mb-4"></div>
									
									<form method="POST" action="sendMessage.php" id="contactForm" name="contactForm" class="contactForm">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="name">Full Name</label>
													<input type="text" class="form-control" name="name" id="name" placeholder="Name">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="email">Email Address</label>
													<input type="email" class="form-control" name="email" id="email" placeholder="Email">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="subject">Subject</label>
													<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="#">Message</label>
													<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input style=" background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);" type="submit" value="Send Message" class="btn">
													<div class="submitting"></div>
												</div>
												
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-lg-4 col-md-5 d-flex align-items-stretch">
								<div style=" background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%); " class="info-wrap  w-100 p-md-5 p-4">



									<img style="height:200px; margin-top:150px;margin-left:40px;" src="images/icons/cm.png">


								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="contact/js/jquery.min.js"></script>
	<script src="contact/js/popper.js"></script>
	<script src="contact/js/bootstrap.min.js"></script>
	<script src="contact/js/jquery.validate.min.js"></script>


</body>

</html>