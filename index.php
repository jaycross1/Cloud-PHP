<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Form Application</title>
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

<ul class="topnav">
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="add_employee.php">Add Employee</a></li>
  <li><a href="list_employee.php">List employee</a></li>
</ul>



<style>
	body {
		margin: 0;
		font-family: 'Ubuntu', sans-serif;
	}
	
	fieldset{
	width:30%;
	}
	
	input{
		padding:0px;
	}
	p {
		padding:0px;
		font-size:18px;
		font-weight:600;
	}
	legend{
		font-size:24px;
		font-weight:700;
	}	
	input[type=submit], .custom_btn {
		background-color: #333;
		border: none;
		color: white;
		padding: 12px 24px;
		text-decoration: none;
		margin: 4px 2px;
		cursor: pointer;
		font-size:18px;
		font-weight:550;
	}
	input[type=text] {
		background-color: #333;
		border-color:#333;
		width:100%;
		color:white;
	}
	
	
	.custom_btn:hover {
		background-color: #4CAF50;
		border: none;
		color: white;
		text-decoration:none;
	}
	
	input[type=submit]:hover {
		background-color: #4CAF50;
		border: none;
		color: white;
		text-decoration:none;
	}
	
	nav-bar-title{
		font-size:24px;
		font-weight:600px;
	}

	ul.topnav {
	  list-style-type: none;
	  margin: 0;
	  padding: 0;
	  overflow: hidden;
	  background-color: #333;
	}

	ul.topnav li {float: left;}

	ul.topnav li a {
	  display: block;
	  color: white;
	  text-align: center;
	  padding: 14px 16px;
	  text-decoration: none;
	}

	ul.topnav li a:hover:not(.active) {background-color: #111;}

	ul.topnav li a.active {background-color: #4CAF50;}

	ul.topnav li.right {float: right;}

	@media screen and (max-width: 600px) {
	  ul.topnav li.right, 
	  ul.topnav li {float: none;}
	}
</style>
<div class="container">
	<div class="row">
		<div class="col-md-10">
		<h1 style="text-align:center; padding:24px;">Construction Application</h1>
		<img src="http://www.constructionworld.org/wp-content/uploads/2016/04/shutterstock_126983117.jpg">
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 offset-md-4">
		<br><br>
			<a href="add_employee.php" class="custom_btn active" role="button" aria-pressed="true">Add Employee</a>
			<a href="list_employee.php" class="custom_btn active" role="button" aria-pressed="true">List Employee</a>
		</div>
	</div>
 </div> 
  <!--
  <fieldset>
  <legend>Work Details</legend>
    Job Role:<br>
    <select required>
		<option hidden disabled selected value> -- select an option -- </option>
		<option value="HR"> HR </option>
		<option value="HR"> Quantity Surveyor</option>
		<option value="HR"> Builder </option>
	</select><br>
    Location:<br>
    <input type="text" name="lastname" required><br><br>
  </fieldset>
  <input type="submit" value="Submit">-->


</body>