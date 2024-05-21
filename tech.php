<?php

session_start()

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/0f977cd8f2.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="tech.css">
	<title>TAZII - The TechBro</title>
</head>

<body>
	<main>
		<header>

			<nav class="navbar navbar-expand-lg bg-body-tertiary">
				<div class="container-fluid container">
					<a class="navbar-brand ms-3" href="index.php"><strong>TAZ - Portfolio</strong></a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse justify-content-end me-3" id="navbarNavAltMarkup">
						<div class="navbar-nav">
							<a class="nav-link" aria-current="page" href="#about">ABOUT</a>
							<a class="nav-link" aria-current="page" href="#work">WORKS</a>
							<a class="nav-link" aria-current="page" href="#contact">CONTACT</a>
							<!-- <a class="nav-link disabled" aria-disabled="true">Disabled</a> -->
						</div>
					</div>
				</div>
			</nav>
		</header>

		<section id="about">
			<div class="container">
				<div class="row ">
					<div class="col-md-12">
						<h4 class="pt-5 ps-5 ">Timothy Adedotun (TAZ)</h4>
						<p class="ps-5"> Full-Stack Web Designer </p>
						<h3 class="px-5 text-center display-4">Hi there! I'm a budding Graphic and Web Designer based in Nigeria. I design graphic
							posters/flyer & make responsive websites and handle backend tasks. Feel free to take a tour of
							some of my works.</h3>
					</div>
					<!-- <div class="col-6 border">
                    <img class="image" src="/img/76EBBFBE-5BE0-43FC-AB52-B33C28C36CA0-removebg-preview (1).png"
                        alt="IMage of TAZII">
						<picture>
						<source media="(min-width: 650px)" srcset="img_food.jpg">
						<source media="(min-width: 465px)" srcset="img_car.jpg">
						<img src="img_girl.jpg">
						</picture>
                </div> -->
				</div>
			</div>
			<!-- 
        <span class="butt">
            <a href="#work" class="btn btn-dark mx-5 my-4 rounded-3">View Catalogue</a>
        </span> -->


		</section>

		<section id="work">
			<div class="container">
				<h2 class="py-4 text-center">MY WORKS</h2>
				<div id="home" class="row">
					<div class="col-md-6 g-3">
						<img src="/portfolio/img/R.jpeg" class="pb-3" style="width:100%" alt="img1">
						<img src="/portfolio/img/e.jpg" style="width:100%" alt="img2">

					</div>

					<div class="col-md-6 g-3">
						<img src="/portfolio/img/q.jpeg" class="pb-3" style="width:100%" alt="img5">
						<img src="/portfolio/img/ss.jpg" style="width:100%" alt="img6">
					</div>
				</div>
				<div class="pt-5">
					<h2 class=" text-center">MY EXPERIENCE</h2>
					<p class="text-center">
						I am a self taught Web DEsigner with over 2 years of experinece in front end web developmetn. I have master languages such as HTMLLorem ipsum dolor sit, amet consectetur adipisicing elit. Esse officia libero, molestias eum laborum facere animi veniam neque tempora praesentium vel sit! Fugiat, quibusdam. Similique blanditiis cum inventore eveniet corrupti!</p>
					<div class="row p-4">
						<div class="col-md-3 text-center g-4">
							<h4>Web Designer</h4>
							<p>For Freelance</p>
							<span>April 2020 - Date</span>
						</div>
						<div class="col-md-3 text-center g-4">
							<h4>Web Designer</h4>
							<p>For Freelance</p>
							<span>April 2020 - Date</span>
						</div>
						<div class="col-md-3 text-center g-4">
							<h4>Web Designer</h4>
							<p>For Freelance</p>
							<span>April 2020 - Date</span>
						</div>
						<div class="col-md-3 text-center g-4">
							<h4>Web Designer</h4>
							<p>For Freelance</p>
							<span>April 2020 - Date</span>
						</div>
					</div>
				</div>
			</div>

		</section>

		<section id="inquire">
			<div class=" container">
				<form action="action_page.php" method="post">
					<h4>Like what you see? Let's get in touch.</h4>
					<div class="row">
						<div class="col-6">
							<label for="exampleFormControlInput1" class="form-label"></label>
							<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name" require>
						</div>
						<div class="col-6">
							<label for="exampleFormControlInput1" class="form-label"></label>
							<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email" require>
						</div>
						<div class="col-12">
							<label for="exampleFormControlInput1" class="form-label"></label>
							<input type="subjectl" class="form-control" id="exampleFormControlInput1" placeholder="Subject">
						</div>
						<div class="col-12">
							<label for="exampleFormControlTextarea1" class="form-label"></label>
							<textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Message" rows="3"></textarea>
						</div>
						<div class=" text-center pt-3"> <button type="button" class="btn btn-outline-dark">SEND MESSAGE</button></div>

				</form>
			</div>
		</section>

		<section id="contact">

			<div class="container">
				<h2 class="pb-5 text-center">CONTACT ME</h2>
				<div class="row ">
					<div class="col-md-6 ps-5">
						<p><i class="fa-solid fa-location-dot fa-lg"></i> Lagos, NG</p>
						<p><i class="fa-solid fa-phone fa-lg"></i> +(234) 8100606717</p>
						<p><i class="fa-solid fa-phone fa-lg"></i> +(234) 8100606717</p>
						<p><i class="fa-solid fa-envelope fa-lg"></i> Timone427@gmail.com</p>

						<div class="ficon">
							<a href="http://github.com/moonboy90210" target="_blank" rel="noopener noreferrer" class="p-2"><i class="fa-brands fa-github fa-xl"></i></a>
							<a href="http://www.instagram.com/tazii2x" rel="noopener noreferrer" target="_blank" class="p-2"><i class="fa-brands fa-instagram fa-xl"></i></a>
							<a href="http://www.twitter.com/tazii2x" rel="noopener noreferrer" target="_blank" class="p-2"><i class="fa-brands fa-x-twitter fa-xl"></i></a>
							<a href="http://wa.me/8100606717" target="_blank" rel="noopener noreferrer" class="p-2"><i class="fa-brands fa-whatsapp fa-xl"></i></a>
						</div>
					</div>

					<div class="col-md-6 pt-5">
						<form method="post" action="data.php">
							<p>Subscribe to stay informed on the latest drops and Updates.</p>
							<div class="input-group">
								<input type="email" class="form-control" placeholder="Enter Email" aria-label="Email" aria-describedby="button-addon2">
								<button class="btn btn-outline-dark" type="button" id="button-addon2">Subscribe</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>


	</main>
	<footer>
		<div class="footer">
				<div class="text-center">
					<p>Copyright © 2024 TAZII. All Rights Reserved. </p>
				</div>
		</div>
	</footer>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>