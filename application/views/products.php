<!DOCTYPE html>
<html lang="en-US">
<head>
<title>PayPal Integration in CodeIgniter</title>
<!-- Include bootstrap library -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<style type="text/css">
		.glyphicon{
			color:orange;
		}
	</style>
<div class="container">
	<h2>Products</h2>
    <div class="row">
        <div class="col-lg-12">
		<!-- List all products -->
		<?php if (!empty($result)) { 
			foreach($result as $row){ ?>
			<div class="col-sm-4 col-lg-4 col-md-4">
				<div class="thumbnail">
					<img src="<?php echo base_url('upload/'.$row['image']); ?>" class="img-thumbnail" />
					<div class="caption">
						<h4 class="pull-right">Rs <?=$row['price']; ?>/-</h4>
						<h4><a href="javascript:void(0);"><?= $row['name']; ?></a></h4>
					</div>
					<div class="ratings">
						<a href="<?php echo base_url('buy/'.$row['id']); ?>">
							<img src="<?php echo base_url('upload/click.gif'); ?>" />
						</a>
						<p class="pull-right">15 reviews</p>
						<p>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
						</p>
					</div>
				</div>
			</div>
			  <?php } }else{ ?>
			<p>Product(s) not found...</p>
		<?php } ?>
        </div>
    </div>
</div>
</body>
</html>