<?php
session_start();
if(@$_SESSION["autoriser"]!="oui"){
	header("location:../Frontend/SignIn.php");
	exit();
} ?>
<?php require_once '../Backend/con.php'; ?>
<?php require 'head.html'; ?>
<?php require 'navbar.html'; ?>

<html>
<body>
	<div class="text-center mt-5 mb-2">	
		<div class="pt-2">
			<a href="../Frontend/CreateSupplierFrontend.php" class="btn bg-dark bg-gradient text-white container py-3 fw-bold"> Create </a>
		</div>
	</div>
	<div class="container table-responsive mb-2">
		<table class="table border border-light-subtle">
			<thead>
				<tr class="bg-dark bg-gradient text-light text-center fs-5 border border-light">
					<th class="text-dark bg-light border border-dark border-4">Number</th>
					<th> Name </th>
					<th> Adresse </th>
					<th> Number </th>
					<th> Mail </th>
					<th> Action </th>
				</tr>
			</thead>

			<?php

			$req=$con->prepare("select * from Supplier");
			$req->execute();
			$row_T = $req->get_result()->fetch_all(MYSQLI_ASSOC);


			foreach ($row_T as $row)
				{   ?>

					<tr class="text-center">
						<td class="fw-bold bg-dark bg-gradient text-light fs-5 border border-light" ><?php echo $row['idS']; ?></td>
						<td ><?php echo $row['name']; ?></td>
						<td ><?php echo $row['adresse']; ?></td>
						<td ><?php echo $row['phoneNumber']; ?> </td>
						<td ><?php echo $row['mail']; ?></td>
						<td>
							<div class="btn-group">
								<button type="button" class="btn btn-warning border border-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
									Action
								</button>
								<ul class="dropdown-menu border border-dark">
									<li><a class="dropdown-item text-center" href="UpdateSupplierFrontend.php?id=<?php echo $row["idS"]; ?>'"><button class="btn bg-info text-white border-dark">Update</button></a></li>
									<li><a class="dropdown-item text-center" href="../Backend/DeleteSupplierBackend.php?id=<?php echo $row["idS"]; ?>'"><button class="btn bg-danger text-white bg-opacity-75 border-dark">Delete</button></a></li>
								</ul>
							</div>
						</td>
					</tr>
				<?php } ?>

			</table>
		</div>
	</body>
	<div class="py-5"></div>
	<div class="fixed-bottom">
		<?php require 'fouter.html'; ?>
	</div>
	</html>

