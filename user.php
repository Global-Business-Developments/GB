<?php session_start();
if (isset($_SESSION['email'])) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Global Business Development || Business listing website ||</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <style type="text/css">
    	*{margin: 0;padding: 0; box-sizing: border-box;}
    </style>
</head>
<body>
<h1 class="text-center bg-dark text-white">Dashboard of <a href="logout.php">Logout</a></h1><?php echo $_SESSION['email']; ?> 
<div class="col-sm-12 col-md-6 col-xl-6 col-lg-6" style="margin: auto;">
	<form method="POST" action="upload.php" enctype="multipart/form-data">
  <!-- Email input -->
  <h3>List your business</h3>
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="text" name="pname" id="form2Example1" class="form-control" placeholder="Name of service or product !" required />
    <label class="form-label" for="form2Example1">Product/service name</label>
  </div>

  <!-- Password input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="text" name="pdescription" id="form2Example2" class="form-control" maxlength="150" placeholder="Description under 150 charecters only." required />
    <label class="form-label" for="form2Example2">Description</label>
  </div>
    <div data-mdb-input-init class="form-outline mb-4">
    <input type="number" name="price" id="form2Example2" class="form-control" placeholder="Enter number only" required />
    <label class="form-label" for="form2Example2">Price</label>
  </div>
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="file" name="pimage" id="form2Example2" class="form-control" required />
    <label class="form-label" for="form2Example2">Upload product</label>
  </div>
  

  <!-- Submit button -->
  <button  type="submit" name="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Upload</button>
</form>

</div>
</body>
</html>
<?php }else{
  header("Location:profile.php");
}?>


