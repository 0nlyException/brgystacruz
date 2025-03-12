<?php
session_start();
require 'dbcon.php';
?>


<!doctype html>
<html lang="en">
<style>
@import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap');
body::before {
  content: "";
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
    url("background.png");
  background-size: cover;
  background-position: center;
  filter: blur(2px); /* Adjust the blur value as needed */
  z-index: -1;
}
.container {
    margin-top: 150px;
    margin-bottom: 100px;
    margin-left: 0 auto;
    margin-right: 0 auto;
	background-color: #ffffff;
	border-radius: 20px;
	box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
	padding: 40px 20px;
	box-sizing: border-box;
	color:#1A5276;
}

.card{
	margin-left: 10px;
	margin-right: 10px;
}
</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	</head>
	<body style = "font-family: 'Josefin Sans';">
		<div class="container">
			<?php include('error.php');?>
		
			<div class="row">
				<div class="col-md-12" >
					<div class="card" "card-margin" style="border-radius: 15px;">
						<div class="card-header">
							<h4>Admin Edit</h4>
							
						</div>
						<div class="card-body">
							<?php
							if(isset($_GET['id'])) {
								$admin_id = mysqli_real_escape_string($con, $_GET['id']);
								$query = "SELECT * FROM announcement WHERE id='$admin_id'";
								$query_run = mysqli_query($con, $query);
								
								if(mysqli_num_rows($query_run) > 0) {
									$admin = mysqli_fetch_array($query_run);
									?>
									<form action="admin.php" method="POST" enctype="multipart/form-data">
										<input type="hidden" name="admin_id" value="<?= $admin['id']; ?>">
										<div class="row">
											<div class="mb-3">
												<label>Title</label>
												<input type="text" name="title" value="<?= $admin['title']; ?>" class="form-control">
											</div>
											<div class="col-md-6 mb-3">
												<label>Description</label>
												<textarea name="description" class="form-control"><?= $admin['description']; ?></textarea>
											</div>
											<div class="col-md-6 mb-3">
												<label>Image - Less than 1mb</label>
												<input type="file" name="image" class="form-control">
											</div>
											<div style="text-align: center;">
												<button type="submit" name="updateannouncements" class="btn btn-primary" style ="background-color: black";>Update</button>
												<a href="announcements.php" class="btn btn-primary" style ="background-color: black";>Back</a>
											</div>
										</div>
									</form>
							<?php
								}
							}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">

		</script>
	</body>
</html>