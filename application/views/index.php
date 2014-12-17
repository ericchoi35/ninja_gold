<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<script type="text/javascript" src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js'></script>
</head>
<style type="text/css">
	.box{
		height: 150px;
		width: 250px;
		border: 1px solid silver;
		margin: 5px;
		text-align: center;
		border-radius: 5px;
		margin-bottom: 20px;
	}
	#activities{
		border: 1px solid silver;
		padding: 10px;
		margin: 5px;
		border-radius: 5px;
		height: 200px;
		overflow: scroll;
		width: 1030px;
	}
	.red{
		color: red;
	}
	.green{
		color: green;
	}
</style>
<body>
<div class="container">
	<div class='row'>
		<h2 class='col-sm-4 col-sm-offset-4'>Ninja Gold</h2>
	</div>
	<div class='row gold'>
		<h3 class='col-sm-2'>Your gold:</h3>
		<?php if($this->session->userdata('totalGold'))
		{ ?>
		<h3 class='col-sm-2'>
			<?= $this->session->userdata('totalGold') ?>
		</h3>
		<?php } ?>
	</div>
	<div class='row'>
		<div class='box col-sm-2'>
			<h3>Farm</h3>
			<h4>(earns 10-20 golds)</h4>
			<form action='ninjagolds/process' method='post'>
				<input type='hidden' name='action' value='farm'>
				<input class='btn btn-default' type='submit' value='Find gold!'>
			</form>
		</div>
		<div class='box col-sm-2'>
			<h3>Cave</h3>
			<h4>(earns 5-10 golds)</h4>
			<form action='ninjagolds/process' method='post'>
				<input type='hidden' name='action' value='cave'>
				<input class='btn btn-default' type='submit' value='Find gold!'>
			</form>
		</div>
		<div class='box col-sm-2'>
			<h3>House</h3>
			<h4>(earns 2-5 golds)</h4>
			<form action='ninjagolds/process' method='post'>
				<input type='hidden' name='action' value='house'>
				<input class='btn btn-default' type='submit' value='Find gold!'>
			</form>
		</div>
		<div class='box col-sm-2'>
			<h3>Casino</h3>
			<h4>(earns/takes 0-50 golds)</h4>
			<form action='ninjagolds/process' method='post'>
				<input type='hidden' name='action' value='casino'>
				<input class='btn btn-default' type='submit' value='Find gold!'>
			</form>
		</div>
	</div>
	<div class='row'>
		<div id='activities' class='col-sm-11'>
			<?= $this->session->userdata('activities') ?>
		</div>
	</div>
</div>
</body>
</html>