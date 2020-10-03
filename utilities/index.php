<!DOCTYPE html>

<html lang="en">

<head>
    <title>Easy AIKTC</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
<body >
		
	<div class="container my-5 text-center">
   <div class="card" style="width:rem;">
  <div class="card-body">
    <h5 class="card-title mb-5">CGPA To  Percentage</h5>
    <form method="POST">
  <div class="form-group">
    <input type="text" class="form-control w-60" name="cgpa" placeholder="Enter CGPA" autocomplete="off">
  </div>
  <input type="submit" name="submit" class="my-3 btn btn-success" value="Convert" style="border-radius:10px;>
  </form>
  <div class="font-weight-bold text-center container"> <?php
  if(isset($_POST['submit'])){
      $cgpa = $_POST['cgpa'];
      $per = 7.1 * $cgpa + 11;
      echo "<h4>"."Your Percentage is ".$per."%"."</h4>";
  }
  ?>
  </div> 
</div>
  
</body>
</html>



