<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo ucfirst( $student->name ) ;?></title>
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
        <h3 class="text-muted"><?php echo ucfirst($student->name);?></h3>
        <nav>
          <ul class="nav nav-justified">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="<?php echo $this->base_url('department/departments'); ?>">Deparments</a></li>
            <li><a href="<?php echo $this->base_url('getProfs/profs'); ?>">Doctors</a></li>
            <li><a href="<?php echo $this->base_url('course/courses'); ?>">Courses</a></li>
            <li><a href="<?php echo $this->base_url('course/my_courses'); ?>">My Courses</a></li>
            <li><a href="<?php echo $this->base_url('student/logout'); ?>">Logout</a></li>
          </ul>
        </nav>
      </div>

      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>College DB Project!</h1>
        <p class="lead">9 Tables, Alot of Foreign Keys, 5 branches, 42 commits, much work such development WOW!</p>
        <p><a class="btn btn-lg btn-success" href="<?php echo $this->base_url('course/courses'); ?>" role="button">Request Course</a></p>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
          <h2>Degrees</h2>
            <?php foreach ($degrees as $degree): ?>
              <li class="list-group-item"><?php echo $degree['year']." : ".$degree['year_degree'];?></li>
            <?php endforeach;?>
          <!-- <p class="text-danger">As of v8.0, Safari exhibits a bug in which resizing your browser horizontally causes rendering errors in the justified nav that are cleared upon refreshing.</p> -->
          <!-- <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p> -->
          <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <h2>Departments</h2>
          <ul class="list-group">
            <?php foreach ($depts as $dep): ?>
              <li class="list-group-item"><?php echo $dep['name'];?></li>
            <?php endforeach;?>
          </ul>
          <!-- <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p> -->
          <p><a class="btn btn-primary" href="<?php echo $this->base_url('department/departments'); ?>" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-lg-4">
          <h2>Courses</h2>
            <?php foreach ($courses as $course): ?>
              <li class="list-group-item"><?php echo $course['name'];?></li>
            <?php endforeach;?>
          <!-- <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p> -->
          <p><a class="btn btn-primary" href="<?php echo $this->base_url('course/courses'); ?>" role="button">View details &raquo;</a></p>
        </div>
      </div>

      <!-- Site footer -->
      <footer class="footer">
        <p>&copy; 2015 DB Project</p>
      </footer>

    </div> <!-- /container -->
</body>
</html>