<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="main.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="fonts.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
	<script type="text/javascript"></script>
	
		
	<title>Hello, world!</title>
</head>

<!--Body-->
<body>

	<!--Header-->
	<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 px-5">
		<a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
			<img src="img/logo.svg">
		</a>

		<ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
			<li><a href="index.php" class="nav-link px-2 link-dark">Home</a></li>
			<li><a href="aboutUs.html" class="nav-link px-2 link-dark">About Us</a></li>
			<li><a href="visions.html" class="nav-link px-2 link-dark">Visions</a></li>
			<li><a href="donateUs.html" class="nav-link px-2 link-dark">Donate Us</a></li>
			
		</ul>

		<div class="col-md-3 text-end">
			<button type="button" class="btn btn-outline-success me-2" data-bs-toggle="modal" data-bs-target="#LoginModal">Login</button>
			<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#SignUpModal">Sign-up</button>
		</div>
<!-- Login Modal -->
<div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      	<!-- form -->
      <form name="loginForm" novalidate>
    <div class="mb-3">
        <label for="email" class="text-start">Email address</label>
        <input type="email" class="form-control" name="email" aria-describedby="emailHelp" required>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input name="passid" type="password" class="form-control" name="password">

    </div>
    <button type="submit" id="submitBtn" onclick="validate('loginForm')" class="btn btn-success">Submit</button>
</form>
	</div>
	</header>

	<!--Header-->

	<!--Main-->

	<div class="px-4 py-5 mb-5 text-center text-light hero">
		<img class="d-block mx-auto mb-4" src="/img/logo2.svg" alt="" width="150" height="150">
		<h1 class="display-5 fw-bold">A Good Company</h1>

		<a href="donateus.html" button type="button" class="btn btn-light btn-lg mt-4 px-4 gap-3">Donate Now</a>

	</div>


	<div class="container-fluid text-center">
		<h1 class="display-4 border-bottom pb-3">What do we do?</h1>

		<div class="container w-75 px-5 mt-5">
			<h1 class="display-5">About Us</h1>
			<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<a href="aboutUs.html" button type="button" class="btn btn-outline-success px-4 py-2">Learn More</a>
		</div>

		<div class="container-fluid w-75 px-5 mt-5">
			<h1 class="display-5">Visions</h1>
			<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<a href="visions.html" button type="button" class="btn btn-outline-success px-4 py-2">Learn More</a>
		</div>

		<div class="row w-75 mx-auto mt-5">
			<div class="col mt-4 d-none d-lg-block">
				<img class="img-fluid" src="img/bottle.jpg" width="415px" height="276px">
			</div>
			<div class="col text-center text-lg-end">
				<h1 class="display-5">We collect your plastic</h1>
				<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>

		</div>

		<div class="mt-5 bg-light">
			<div class="row py-3 w-75 mx-auto">
				<div class="col text-start">
					<h1 class="display-5">Helping our environment</h1>
					<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat.</p>
				</div>

				<div class="col mt-4 d-none d-lg-block">
					<img class="img-fluid" src="img/pema.png" width="415px" height="276px">
				</div>
			</div>
		</div>

		<section class="team text-center py-5">
   <div class="container">
     <div class="header my-5">
       <h1>Meet our Team </h1>
       <p class="text-muted">Meet and Greet our Team Members</p>
     </div>
     <div class="row">
       <div class="col-md-6 col-lg-3">
         <div class="img-block mb-5">
           <img src="img/smajllo.jpg" class="img-fluid  img-thumbnail rounded-circle" alt="image1">
           <div class="content mt-2">
             <h4>Ermal Smajli</h4>
             <p class="text-muted">Bossi i Bossave</p>
           </div>
         </div>
       </div>
       <div class="col-md-6 col-lg-3 ">
         <div class="img-block mb-5">
           <img src="img/kingji2.jpg" class="img-fluid  img-thumbnail rounded-circle" alt="image1">
           <div class="content mt-2">
             <h4>Erion Zejna</h4>
             <p class="text-muted">Digitron Djal</p>
           </div>
         </div>
       </div>
       <div class="col-md-6 col-lg-3">
         <div class="img-block mb-5">
           <img src="img/kaprrolli.jpg" class="img-fluid  img-thumbnail rounded-circle" alt="image1">
           <div class="content mt-2">
             <h4>Dren Imeri</h4>
             <p class="text-muted">Hipster</p>
           </div>
         </div>
       </div>
       <div class="col-md-6 col-lg-3">
         <div class="img-block mb-5">
           <img src="img/andi.jpg" class="img-fluid  img-thumbnail rounded-circle" alt="image1">
           <div class="content mt-2">
             <h4>Erand Aliu</h4>
             <p class="text-muted">Retard</p>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
  
 	<!-- Footer -->
<footer class=" text-center text-white" style="background-color:#1db54f;">
  <!-- Grid container -->
  <div class="container p-4">



    <!-- Section: Text -->
    <section class="mb-4">
      <p>
        Pak Peme eshte nje kompani imagjinare e cila do te mbrohet me tutje ne lenden e Inxhinierise se Web-it
      </p>
    </section>
    <!-- Section: Text -->


  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
    © 2020 Copyright: PAKPEM
    
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
 	
<!-- signup form-->
<div class="modal fade" id="SignUpModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sign Up</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form name="signupForm" novalidate>
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" name="firstName" class="form-control" />
        <label class="form-label" for="firstName">First name</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="text" name="lastName" class="form-control" />
        <label class="form-label" for="lastName">Last name</label>
      </div>
    </div>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" name="email" class="form-control" />
    <label class="form-label" for="email">Email address</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" name="password" class="form-control" />
    <label class="form-label" for="password">Password</label>
  </div>

  <!-- Submit button -->
  <button type="submit" onclick="validate('signupForm')" class="btn btn-success">Sign Up</button>

</form>
	</div>



	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    <script src="main.js"></script>


</body>

<!--End of Body-->
</html>