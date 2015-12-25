<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Project</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<style>
	</style>
</head>
<body>
	<div class="container">
		<div class="jumbotron">
			<div class="container">
				<h1>University System</h1>
				<p>Sign in to get access to all your university data</p>
				<p class="text-center">
					<a id="sign_in" class="btn btn-primary btn-lg" href="#" role="button">Sign In</a>
					<a id="sign_up" class="btn btn-success btn-lg" href="#" role="button">Sign Up</a>
				</p>
				<div class="user_form loginForm col-md-6 hidden col-sm-offset-3">
					<h2>Login</h2>
					<form class="form-horizontal" method="POST" action="<?php echo $this->base_url('student/login');?>" >
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
							<div class="col-sm-10">
								<input type="email" name="s_email" class="form-control" id="" placeholder="Email">
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
							<div class="col-sm-10">
								<input type="password" name="s_password" class="form-control" id="" placeholder="Password">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<div class="checkbox">
									<label>
										<input type="checkbox"> Remember me
									</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-default">Log in</button>
							</div>
						</div>
					</form>
				</div>

				<div class="user_form signupForm col-md-6 hidden col-sm-offset-3">
					<h2>Signup</h2>
					<form class="form-horizontal" method="POST" action="<?php echo $this->base_url('student/signup');?>">
						<div class="form-group">
							<label for="inputName" class="col-sm-2 control-label">Name</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="inputName" name="s_name" placeholder="Name">
							</div>
						</div>
						<div class="form-group">
							<label for="inputAddress" class="col-sm-2 control-label">Address</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="inputAddress" name="s_address" placeholder="Address">
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
							<div class="col-sm-10">
								<input type="email" class="form-control" id="" name="s_email" placeholder="Email">
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
							<div class="col-sm-10">
								<input type="password" class="form-control" id="inputPassword3" name="s_password" placeholder="Password">
							</div>
						</div>
						<div class="form-group">
							<label for="inputDep" class="col-sm-2 control-label">Department</label>
							<div class="col-sm-10">
								<select class="form-control" name="s_dep">
									<option value="1">Computer Systems</option>
									<option value="2">Communications</option>
									<option value="3">Power</option>
									<option value="4">Civil</option>
									<option value="5">Archetecture</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="inputYear" class="col-sm-2 control-label">Year</label>
							<div class="col-sm-10">
								<select class="form-control" name="s_year">
									<option value="2015">2015</option>
									<option value="2016">2016</option>
									<option value="2017">2017</option>
									<option value="2018">2018</option>
									<option value="2019">2019</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="inputGrad" class="col-sm-2 control-label">ARE YOU </label>
							<div class="col-sm-10">
								<label class="radio-inline">
									<input type="radio" name="s_grad" id="inlineRadio2" value="0"> Under Graduate
								</label>
								<label class="radio-inline">
									<input type="radio" name="s_grad" id="inlineRadio1" value="1"> Graduate
								</label>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-default">Sign up</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script>
	$(document).ready(function(){
		$(".user_form").hide();
		$(".user_form").removeClass('hidden');
		$("#sign_in").click(function(){
			$(".user_form").hide();
			$(".loginForm").fadeIn("medium");
		})
		$("#sign_up").click(function(){
			$(".user_form").hide();
			$(".signupForm").fadeIn("medium");
		})
	});
	</script
	</html>
