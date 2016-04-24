<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">
					<div class="sti">
						<img src="../LMS/geethanjali.jpg" class="img-rounded">
					</div>
				                
				                <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		
	<div class="addstudent">
	<div class="details">Please Enter Details Below</div>		
	<form class="form-horizontal" method="POST" action="member_save.php" enctype="multipart/form-data">
		
		<div class="control-group">
			<label class="control-label" for="inputEmail">Student ID:</label>
			<div class="controls">
			<input type="text" id="inputEmail" name="student_id"  placeholder="Student ID" required>

			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="inputEmail">Firstname:</label>
			<div class="controls">
			<input type="text" id="inputEmail" name="firstname"  placeholder="Firstname" required>

			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Lastname:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="lastname"  placeholder="Lastname" required>
			</div>
		</div>

       								<div class="control-group">
									<label class="control-label" for="inputPassword">Password</label>
									<div class="controls">
									<input type="password" name="password" id="password" placeholder="Password" required>
								</div>
								</div>

									<div class="control-group">
									<label class="control-label" for="inputPassword">Confirm Password</label>
									<div class="controls">
									<input type="password" name="password" id="password" placeholder="Confirm Password" required>
								</div>
								</div>

		<div class="control-group">
			<label class="control-label" for="inputPassword">Gender:</label>
			<div class="controls">
			<select name="gender" required>
				<option></option>
				<option>Male</option>
				<option>Female</option>
			</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Adddress:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="address"  placeholder="Address" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Cellphone Number:</label>
			<div class="controls">
			<input type='tel' pattern="[0-9]{11,11}" class="search" name="contact"  placeholder="Phone Number"  autocomplete="off"  maxlength="11" >
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Type:</label>
			<div class="controls">
			<select name="type" required>
			
			
			
									<option></option>
									<option>Student</option>
									<option>Teacher</option>
									<option></option>
									
				</select>
			</div>
		</div>
			
		<div class="control-group">
			<label class="control-label" for="inputPassword">Year Level:</label>
			<div class="controls">
				<select name="year_level" >
					

									<option> </option>
									<option>First Year</option>
									<option>Second Year</option>
									<option>Third Year</option>
									<option>Fourth Year</option>
									<option>Faculty</option>
				</select>
			</div>
		</div>
		
		
				
		
		
		
		<div class="control-group">
			<div class="controls">
			<button name="submit" type="submit" class="btn btn-success">SignUp</button>
			</div>
		</div>
    </form>					
			</div>		
			</div>		
			</div>
		</div>
    </div>





			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>