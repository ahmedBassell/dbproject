<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Doctors</title>
	<!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="../../views/assets/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="../../views/assets/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
  <style type="text/css">

	body {
  padding-top: 20px;
}

.footer {
  padding-top: 40px;
  padding-bottom: 40px;
  margin-top: 40px;
  border-top: 1px solid #eee;
}

/* Main marketing message and sign up button */
.jumbotron {
  text-align: center;
  background-color: transparent;
}
.jumbotron .btn {
  padding: 14px 24px;
  font-size: 21px;
}

/* Customize the nav-justified links to be fill the entire space of the .navbar */

.nav-justified {
  background-color: #eee;
  border: 1px solid #ccc;
  border-radius: 5px;
}
.nav-justified > li > a {
  padding-top: 15px;
  padding-bottom: 15px;
  margin-bottom: 0;
  font-weight: bold;
  color: #777;
  text-align: center;
  background-color: #e5e5e5; /* Old browsers */
  background-image: -webkit-gradient(linear, left top, left bottom, from(#f5f5f5), to(#e5e5e5));
  background-image: -webkit-linear-gradient(top, #f5f5f5 0%, #e5e5e5 100%);
  background-image:      -o-linear-gradient(top, #f5f5f5 0%, #e5e5e5 100%);
  background-image:         linear-gradient(to bottom, #f5f5f5 0%,#e5e5e5 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f5f5f5', endColorstr='#e5e5e5',GradientType=0 ); /* IE6-9 */
  background-repeat: repeat-x; /* Repeat the gradient */
  border-bottom: 1px solid #d5d5d5;
}
.nav-justified > .active > a,
.nav-justified > .active > a:hover,
.nav-justified > .active > a:focus {
  background-color: #ddd;
  background-image: none;
  -webkit-box-shadow: inset 0 3px 7px rgba(0,0,0,.15);
          box-shadow: inset 0 3px 7px rgba(0,0,0,.15);
}
.nav-justified > li:first-child > a {
  border-radius: 5px 5px 0 0;
}
.nav-justified > li:last-child > a {
  border-bottom: 0;
  border-radius: 0 0 5px 5px;
}

@media (min-width: 768px) {
  .nav-justified {
    max-height: 52px;
  }
  .nav-justified > li > a {
    border-right: 1px solid #d5d5d5;
    border-left: 1px solid #fff;
  }
  .nav-justified > li:first-child > a {
    border-left: 0;
    border-radius: 5px 0 0 5px;
  }
  .nav-justified > li:last-child > a {
    border-right: 0;
    border-radius: 0 5px 5px 0;
  }
}

/* Responsive: Portrait tablets and up */
@media screen and (min-width: 768px) {
  /* Remove the padding we set earlier */
  .masthead,
  .marketing,
  .footer {
    padding-right: 0;
    padding-left: 0;
  }
}

</style>
</head>
<body>
	    <div class="container">

      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
      <div class="masthead">
        <h3 class="text-muted">Departments</h3>
        <nav>
          <ul class="nav nav-justified">
            <li class=""><a href="<?php echo $this->base_url(''); ?>">Home</a></li>
            <li class="active"><a href="<?php echo $this->base_url('department/departments'); ?>">Departments</a></li>
            <li class=""><a href="<?php echo $this->base_url('getProfs/profs'); ?>">Doctors</a></li>
            <li><a href="<?php echo $this->base_url('course/courses'); ?>">Courses</a></li>
            <li><a href="<?php echo $this->base_url('course/my_courses'); ?>">My Courses</a></li>
            <li><a href="<?php echo $this->base_url('student/logout'); ?>">Logout</a></li>
          </ul>
        </nav>
      </div>

<ul class="list-group">
<?php foreach ($alldepts as $dept): ?> 
	<li class="list-group-item"><?php echo $dept['name'];?></li>
<?php endforeach;?>
</ul>
      <!-- Site footer -->
      <footer class="footer">
        <p>&copy; 2015 DB Project</p>
      </footer>

    </div> <!-- /container -->
</body>
</html>