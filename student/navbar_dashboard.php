      <div class="navbar navbar-fixed-top navbar-inverse">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="nav-collapse collapse">
                        <!-- .nav, .navbar-search, .navbar-form, etc -->
					<ul class="nav">
					<li class="active"><a href="dashboard.php">Home</a></li>
					
					<?php 
					include('dropdown.php');
					?>
					<li><a href="books.php">Books</a></li>
					<li><a href="member.php">Member</a></li>
					
					<li><a href="#myModal" data-toggle="modal">Advance Search</a></li>
					

					<!-- <li><a href="section.php"><i class="icon-group icon-large"></i>&nbsp;Sections</a></li> -->
					<li><a href="logout.php">Logout</a></li>
					</ul>
					 <div class="pull-right">
						<div class="admin">Welcome: Librarian</div>
                     </div>
                    </div>
                </div>
            </div>
        </div>
		
<?php include('search_form.php'); ?>
 
