<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center px-4">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	<li <?php if ($activePage == 'home') echo 'class=" active"'; ?> ><a href="index.php" class="nav-link pl-0">Home</a></li>
	        	<li  <?php if ($activePage == 'about') echo 'class="active"'; ?> ><a href="about.php" class="nav-link">About</a></li>
	        	<!-- <li  <?php if ($activePage == 'courses') echo 'class="active"'; ?>><a href="courses.php" class="nav-link">Courses</a></li> -->
	        	<!-- <li <li  <?php if ($activePage == 'teacher') echo 'class=" active"'; ?>><a href="teacher.php" class="nav-link">Staff</a></li> -->
	        	<li  <?php if ($activePage == 'blog') echo 'class="active"'; ?>><a href="notices.php" class="nav-link ">Notices</a></li>
	          <li  <?php if ($activePage == 'contact') echo 'class=" active"'; ?>><a href="contact.php" class="nav-link ">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>