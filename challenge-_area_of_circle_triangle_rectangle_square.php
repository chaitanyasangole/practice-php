<?php 
include 'useful_functions.php';
$str='';$areaOfCircle='';	$areaOfSquare='';	$areaOfTriangle='';   $areaOfRectangle='';


if(isset($_GET['radius']))
{
	$areaOfCircle=areaOfCircle($_GET['radius']);
	$areaOfCircle='Area of circle: radius='.$_GET['radius'].' is '.$areaOfCircle;
}
else
{
	$areaOfCircle='';
}

if(isset($_GET['area']))
{
	$areaOfSquare=areaOfSquare($_GET['area']);
	$areaOfSquare='Area of square: area='.$_GET['area'].' is '.$areaOfSquare;
}
else
{
	$areaOfSquare='';	
}

if(isset($_GET['base']) && isset($_GET['height']))
{
	$areaOfTriangle=areaOfTriangle($_GET['base'],$_GET['height']);
	$areaOfTriangle='Area of triangle: base='.$_GET['base'].',height='.$_GET['height'].' is '.$areaOfTriangle;
}
else
{
	$areaOfTriangle='';
}

if(isset($_GET['length']) && isset($_GET['breadth']))
{
	$areaOfRectangle=areaOfRectangle($_GET['length'],$_GET['breadth']);
	$areaOfRectangle='Area of rectangle: length='.$_GET['length'].',breadth='.$_GET['breadth'].' is '.$areaOfRectangle;
}
else
{
	$areaOfRectangle='';
}
$str="<div class='form-group'><div class='alert alert-success'>{$areaOfRectangle}{$areaOfTriangle}{$areaOfSquare}{$areaOfCircle}</div></div>";
?>
<html>
<head><?php 
include 'header.php' ;
?></head>
<body class="bg-light">
	<div class="container-fluid ">
		<br>
		<div class="row" style="margin:0px;">
			<div class="col-sm-1"></div>
			<div class="col-sm-4">
				<form action="">
					<div class="card">
						<div class="card-header bg-primary text-white">Area of circle</div>
						<div class="card-body">
							<div class="form-group">
								<label for="radius">Enter Radius</label>
								<input type="number" id="radius" class="form-control" name="radius" min="1" required>
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-outline-primary">
							</div>
							<?php if(!empty($areaOfCircle)) echo $str;?>
						</div>
					</div>
				</form>
			</div>
			<div class="col-sm-2"></div>
			<div class="col-sm-4">
				<form action="">
					<div class="card">
						<div class="card-header bg-success text-white">Area of square</div>
						<div class="card-body">
							<div class="form-group">
								<label for="area">Enter area</label>
								<input type="number" id="area" class="form-control" name="area" min="1" required>
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-outline-success">
							</div>
							<?php if(!empty($areaOfSquare)) echo $str;?>
						</div>
					</div>
				</form>
			</div>
			<div class="col-sm-1"></div>
		</div>
		<br>
		<div class="row" style="margin:0px;">
			<div class="col-sm-1"></div>
			<div class="col-sm-4">
				<form action="">
					<div class="card">
						<div class="card-header bg-secondary text-white">Area of triangle</div>
						<div class="card-body">
							<div class="form-group">
								<label for="base">Enter base</label>
								<input type="number" id="base" class="form-control" name="base" min="1" required>
							</div>
							<div class="form-group">
								<label for="height">Enter height</label>
								<input type="number" id="height" class="form-control" name="height" min="1" required>
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-outline-secondary">
							</div>

							<?php if(!empty($areaOfTriangle)) echo $str;?>
						</div>
					</div>
				</form>
			</div>
			<div class="col-sm-2"></div>
			<div class="col-sm-4">
				<form action="">
					<div class="card">
						<div class="card-header bg-danger text-white">Area of rectangle</div>
						<div class="card-body">
							<div class="form-group">
								<label for="length">Enter length</label>
								<input type="number" id="length" class="form-control" name="length" min="1" required>
							</div>
							<div class="form-group">
								<label for="breadth">Enter breadth</label>
								<input type="number" id="breadth" class="form-control" name="breadth" min="1" required>
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-outline-danger">
							</div>

							<?php if(!empty($areaOfRectangle)) echo $str;?>
						</div>
					</div>
				</form>
			</div>
			<div class="col-sm-1"></div>
		</div>
	</div>
</body>
</html>