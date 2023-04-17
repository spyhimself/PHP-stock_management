<?php require 'head.html'; ?>
<?php require 'navbar.html'; ?>

<body>
	<div class="justify-content-center pt-5">	
		<div class="card mt-5 mx-auto" style="max-width: 750px;">
			<div class="row g-0">
				<div class="col-md-8">
					<img src="../Uploads/STOCK.png" class="img-fluid rounded-start" alt="...">
				</div>
				<div class="col-md-4">
					<div class="card-body">
						<h3 class="card-title text-center">SignUp</h3>
						<form action="../Backend/SignUp.php" method="post">
							<label class="form-label mt-5" for="LOG"> User :</label>
							<input class="form-control" type="text" name="LOG" placeholder="enter your nickname" required>
							<label class="form-label mt-1" for="PWD"> Password :</label>
							<input class="form-control" type="password" name="PWD" placeholder="enter your password"required>
							<div class="text-center	">	
								<input class="btn btn-dark mt-5" type="submit" name="BtnSignUp" value="Inscription">   
								<a class="btn btn-outline-dark mt-2" href='SignIn.php'>I have an Account</a> 
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

<div class="fixed-bottom">	
	<?php  	require 'fouter.html'; ?>
</div>
</html>

