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
	<link rel="stylesheet" href="model.css">
	<title>TAZII - The Model</title>
</head>

<body>
	<header>
		<nav class="navbar navbar-expand-lg bg-body-tertiary">
			<div class="container-fluid container">
				<a class="navbar-brand" href="index.php"><strong>TAZII</strong></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-end nav-underline" id="navbarNavAltMarkup">
					<div class="navbar-nav nav-underline">
						<a class="nav-link" aria-current="page" href="#about">ABOUT</a>
						<a class="nav-link" aria-current="page" href="#work">WORK</a>
						<a class="nav-link" aria-current="page" href="#contact">CONTACT</a>
						<!-- <a class="nav-link disabled" aria-disabled="true">Disabled</a> -->
					</div>
				</div>
			</div>
		</nav>
	</header>
	<main>
		<section>
			<div class="container">
				<div id="carouselExampleInterval" class="carousel slide carousel-fade" data-bs-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active" data-bs-interval="3000">
							<img src="/portfolio/img/thumb2.jpg" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item" data-bs-interval="3000">
							<img src="/portfolio/img/new thumb.jpg" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item" data-bs-interval="3000">
							<img src="/portfolio/img/IMG_5290.jpg" class="d-block w-100" alt="...">
						</div>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>
				<hr>
			</div>
		</section>

		<section id="bio">
			<div class="container p-5">
				<div class="row">
					<div class="col-6">
						<h3 class="text-start ps-3">BIO</h3>
						<ol>
							<li>
								<p><strong>Height</strong>: 1.86M</p>
							</li>
							<li>
								<p><strong>Weight</strong>: 141 lbs</p>
							</li>
							<li>
								<p><strong>Eye Color</strong>: Black</p>
							</li>
							<li>
								<p><strong>Hair Color</strong>: Black</p>
							</li>
						</Ol>

					</div>

					<div class="col-md-6">
						<h3 class="text-start ps-3">SKILLSET</h3>
						<p>
						<ul>
							<li>
								Strong interpersonal communication
							</li>
							<li>
								Good team collaboration
							</li>
							<li>
								Adaptable and innovative with various poses
							</li>
							<li>
								Astute and fit Physique
							</li>
							<li>
								Profound social media navigation
							</li>
							<li>
								Excellent time management
							</li>
							<li>
								Fast learner and open to new ideas
							</li>

						</ul>
						</p>
					</div>

				</div>
			</div>
		</section>

		<section>
			<div class="container">
				<hr class="featurette-divider">

				<div class="row featurette">
					<div class="col-md-7">
						<h2 class="featurette-heading">TAZII FOR GQ </h2>
						<h4 class="text-muted">Shot By Caesar </h4>
						<h4 class="text-muted">Styled By SLTY </h4>
						<p class="lead">RED! Feisty and sublime, demonstrating a firce look and seemingly calm ambience.</p>
						<a class="btn btn-outline-dark mb-3" href="tazSalty.php#col2" target="_blank" role="button">See More</a>
					</div>
					<div class="col-md-5 future">
						<img src="/portfolio/img/stand.jpg" alt="" class="image1 rounded" width="100%" height="100%">
						<div class="middle">
							<a class="btn btn-outline-dark mb-3" href="tazSalty.php#col2" target="_blank" role="button">View More</a>
						</div>

					</div>
				</div>

				<hr class="featurette-divider">

				<div class="row featurette">
					<div class="col-md-7 order-md-2">
						<h2 class="featurette-heading">TAZII FOR FOTC</h2>
						<h4 class="text-muted">Shot By Caesar </h4>
						<h4 class="text-muted">Styled By TAZII </h4>
						<p class="lead">RED! Feisty and sublime, demonstrating a firce look and seemingly calm ambience.</p>
						<a class="btn btn-outline-dark mb-3" href="tazFotc.php" target="_blank" role="button">See More</a>

					</div>
					<div class="col-md-5 order-md-1 future">
						<img src="/portfolio/img/DSC00244.jpg" alt="" class="image1 rounded-2" width="100%" height="auto">
						<div class="middle">
							<a class="btn btn-outline-dark mb-3" href="tazFotc.php" target="_blank" role="button">View More</a>
						</div>
					</div>
				</div>
				<hr>

				<div class="row featurette">
					<div class="col-md-7 ">
						<h2 class="featurette-heading">TAZII FOR SLTY</h2>
						<h4 class="text-muted">Shot By Caesar </h4>
						<h4 class="text-muted">Styled By SLTY </h4>
						<p class="lead">RED! Feisty and sublime, demonstrating a firce look and seemingly calm ambience.</p>
						<a class="btn btn-outline-dark mb-3" href="tazSalty.php" target="_blank" role="button">See More</a>
					</div>
					<div class="col-md-5 future">
						<img src="img/IMG_5041.jpg" alt="" class="image1 rounded" width="100%" height="100%">
						<div class="middle">
							<a class="btn btn-outline-dark mb-3" href="tazSalty.php" target="_blank" role="button">View More</a>
						</div>

					</div>
				</div>
				<hr>

				<div class="row featurette">
					<div class="col-md-7 order-md-2">
						<h2 class="featurette-heading">TAZII FOR FGK</h2>
						<h4 class="text-muted">Shot By Bayne </h4>
						<h4 class="text-muted">Styled By TAZII </h4>
						<p class="lead">RED! Feisty and sublime, demonstrating a firce look and seemingly calm ambience.</p>
						<a class="btn btn-outline-dark mb-3" href="tazFgk.php" target="_blank" role="button">See More</a>
					</div>
					<div class="col-md-5 future">
						<img src="img/panda/IMG_8256.JPG" alt="" class="image1 rounded" width="100%" height="100%">
						<div class="middle">
							<a class="btn btn-outline-dark mb-3" href="tazFgk.php" target="_blank" role="button">View More</a>
						</div>

					</div>
				</div>

			</div>
		</section>
		<hr>
		<section id="inquire">
			<div class="container inquire">
				<form action="action_page.php" method="post">
					<h4>INterested in a collaboration or working</h4>
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
		<hr>
	</main>
	<footer>
		<div class="footer">
			<div class="container pt-1">
				<div class="text-center">
					<p>Copyright © 2024 TAZII. All Rights Reserved. </p>
				</div>
			</div>
		</div>
	</footer>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>