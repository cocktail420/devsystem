



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap-theme.css">
	<title></title>
</head>
<body>
	
<div style="text-align: center;" class="container container-fluid">
	<div class="alert alert-success">
		<u>
	<h2><strong>LOG IN</strong></h2>
	</u>
	<form method="POST" action="staffup.php" >
		
		<input type="text"    placeholder="search"  name="search">
		<input type="submit" class="btn btn-warning" name="accept" value="accept">
	</form>
	<p style="color: red;">Your employee number is your username and ID number is your password</p>
	<form class="form-horizontal " method="post" action="staffupload.php" enctype="multipart/form-data">

  <input type="hidden" name="id" value="<?php echo $id; ?>">

		
		<div class="form-group col-lg-6">
			<label>firstname:</label>
			<input type="text" placeholder="firtsname"  class="form-control" name="firstname" >
		</div>
	<div class="form-group col-lg-6">
			<label>lastname:</label>
			<input type="text" placeholder="lastname" class="form-control" name="lastname">
		</div>
	<div class="form-group col-lg-6">
			<label>gender:</label>
			<input type="text" placeholder="gender" class="form-control" name="gender">
		</div>
	<div class="form-group col-lg-6">
			<label>phone_number:</label>
			<input type="text" placeholder="phone_number" class="form-control" name="phone_number">
		</div>
<div class="form-group col-lg-6">
			<label>email:</label>
			<input type="text" placeholder="email" class="form-control" name="email">
		</div>
  <div class="col-lg-6">
				<label>staffphoto</label>
				<div class="input-group">
    <span class="input-group-addon">Browse</span>

			
				<input  type="file"  class="form-control"  placeholder="staffphoto" name="staffphoto">
					</div>
				</div>
 

<input type="submit" class="btn btn-primary" name="submit" value="submit">
  
   

	</form>
	</div>
</div>
</body>
</html>




	
	</div>
</div>
<footer>
	<p style="text-align: center;">copyright of cocktailtech hub</p>
	<p style="text-align: center;">you can contact us at 0707955352 or email us at cocktailtechhub@gmail.com</p>
	</footer>
</body>
</html>