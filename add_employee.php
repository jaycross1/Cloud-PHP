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
  <li><a href="index.php">Home</a></li>
  <li><a class="active" href="add_employee.php">Add Employee</a></li>
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
		<h1>Form Application</h1>
		<h2>Add Emoployee</h2>
		<form action="db.php" method="POST" enctype="multipart/form-data">
		  <fieldset>
			<legend>Personal information</legend>
			<select name="title" required class="custom_select">
				<option value="Mr"> Mr</option>
				<option value="Mrs"> Mrs </option>
			</select><br>
			<p>First name:</p>
			<input  type="text" name="firstname" required><br>
			<p>Last name:</p>
			<input type="text" name="lastname" required><br><br>
			<p>Email:</p>
			<input type="text" name="email" required><br><br>
			<p>Mobile Number:</p>
			<input type="text" name="mobile_number" required><br><br>
			<p>Street Name and Number:</p><br>
			<input type="text" name="street_name_number" required><br><br>
			<p>City:</p>
			<input type="text" name="city" required><br><br>
			<p>Post Code:</p>
			<input type="text" name="post_code" required><br><br>
						
		  </fieldset>
	  <input type="submit" value="Submit"><br><br>
	  </form>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 offset-md-4">
			<a href="add_employee.php" class="custom_btn active" role="button" aria-pressed="true">Add Employee</a>
			<a href="list_employee.php" class="custom_btn active" role="button" aria-pressed="true">View all Employees</a>
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