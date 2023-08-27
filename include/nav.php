<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center px-4">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <form action="#" class="searchform order-lg-last">
          <div class="form-group d-flex">
            <input type="text" class="form-control pl-3" placeholder="Search">
            <button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>
          </div>
        </form>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	<li <?php if ($activePage === 'home') echo 'class="nav-item active"'; ?> ><a href="index.php" class="nav-link pl-0">Home</a></li>
	        	<li  <?php if ($activePage === 'about') echo 'class="nav-item active"'; ?> ><a href="about.php" class="nav-link">About</a></li>
	        	<!-- <li  <?php if ($activePage === 'courses') echo 'class="nav-item active"'; ?>><a href="courses.php" class="nav-link">Courses</a></li> -->
	        	<!-- <li <li  <?php if ($activePage === 'teacher') echo 'class="nav-item active"'; ?>><a href="teacher.php" class="nav-link">Staff</a></li> -->
	        	<li  <?php if ($activePage === 'blog') echo 'class="nav-item active"'; ?>><a href="blog.php" class="nav-link">Notices</a></li>
	          <li  <?php if ($activePage === 'contact') echo 'class="nav-item active"'; ?>><a href="contact.php" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>