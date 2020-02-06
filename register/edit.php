<?php
include 'connection.php';
$id=$_GET['id'];
$s="select * from crud where id=$id";
$query=mysqli_query($con,$s);
while($row=mysqli_fetch_array($query)){
  $id=$row['id'];
  $name=$row['name'];
  $email=$row['email'];
  $password=$row['password'];
  $mobile=$row['mobile'];
  $address=$row['address'];
  $image=$row['image'];
  
}
?>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container container-fluid">
  <div class="col-md-4 m-auto">
    <form method="post" action="update.php?id=<?php echo $id ?>" enctype="multipart/form-data">
      <h1 class="text-center text-info">update form</h1>
      <div class="form-group">
      <label>NAME:</label>
      <input type="text" name="name" value="<?php echo $name ?>" class="form-control">
      </div>
      <div class="form-group">
      <label>EMAIL:</label>
      <input type="text" name="email"  value="<?php echo $email ?>" class="form-control">
      </div>
      <div class="form-group">
      <label>PASSWORD:</label>
      <input type="text" name="password"  value="<?php echo $password?>" class="form-control">
      </div>
      <div class="form-group">
      <label>MOBILE:</label>
      <input type="text" name="mobile"  value="<?php echo $mobile ?>" class="form-control">
      </div>
      <div class="form-group">
      <label>ADDRESS:</label>
      <input type="text" name="address"  value="<?php echo $address ?>" class="form-control">
      </div>
      <div class="form-group">
      <label>IMAGE::</label>
       <img src="upload/<?php echo $image ?>" style="width: 80px;height: 60px">
      <input type="file" name="image" class="form-control" value="">
      <input type="hidden" name="hiddenimage" class="form-control" value="<?php echo $image?>">
      </div>
     <button class="btn btn-success" name="submit">update</button>
       </form>
  </div>
</div>

</body>
</html>