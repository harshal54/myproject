<!DOCTYPE html>
<html>
<head>
<title>Display Records</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
</head>
<body>
<div class="container">
<div class="col-md-8 m-auto">
	<form>
		<?php if(isset($_SESSION['info'])){ ?>
			<div class="alert alert-info"><?php echo $_SESSION['info'];?></div>
		<?php }?>   
			<?php if(isset($_SESSION['danger'])){ ?>
	<div class="alert alert-danger"><?php echo $_SESSION['danger'];?></div>
	<?php }?>  
		<h2 class="text-success"><b>Welcome <?php echo $this->session->userdata['name']; ?></h2>
		<table class="table table-striped table-hover">
		  <tr class="text-center text-info">
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Mobile</th>
    <th>Delete</th>
    <th>Update</th>
    <th>Insert</th>
  </tr>
  <?php
  echo "<tr>";
  echo "<td>".$data['id']."</td>";
  echo "<td>".$data['name']."</td>";
  echo "<td>".$data['email']."</td>";
  echo "<td>".$data['mobile']."</td>";
  echo "<td><a href='deletedata?id=".$data['id']."'>Delete</a></td>";
  echo "<td><a href='updatedata?id=".$data['id']."'>Update</a></td>";
  echo "<td><a href='savedata'>Insert</a></td>";
  echo "</tr>";
   ?>
  <button class="btn btn-info"><a href='logout'>logout</a></button>
</table>
</form>
</div>
</div>
</body>
</html>