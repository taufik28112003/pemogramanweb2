<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tugas</title>
	<style type="text/css">
		.taufik {
			width: 300px;
			margin: 0 auto;
			border: 1px solid green;
		}
		.row {
			display: flex;
			justify-content: ;
		}
		.box {
			width: 23.5%;
			padding: 10px;
			border: 1px solid #000;
			text-align: left;
			font-size: 30px;
			line-height: 1;
			margin: 3px;
		}
	</style>
</head>
<body>
	<?php
		$a = "A";
		$b = "B";
		$c = "C";
	?>
	
	<div class="taufik">
		<div class="row">
			<div class="box"><?php echo $a ?></div>
		</div>
		<div class="row">
			<div class="box"><?php echo $a ?></div>
			<div class="box"><?php echo $b ?></div>
		</div>
		<div class="row">
			<div class="box"><?php echo $a ?></div>
			<div class="box"><?php echo $b ?></div>
			<div class="box"><?php echo $c ?></div>
		</div>
	</div>
	

</body>
</html>
