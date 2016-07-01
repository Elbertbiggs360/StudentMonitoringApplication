<?php 
	function streamRegistrationForm()
	{
?>

		<form role="form" method="post" action="?connect=streamReg"> 
			<h3>REGISTER STREAM </h3>			
			<div class="form-group"> 
				<label for="name">STREAM</label> 
				<input type="text" class="form-control" name="stream" id="stream" placeholder = "Enter Stream"> 
			</div>			
			<div class="form-group"> 
				<label for="name">CLASS</label> 
				<input type="text" class="form-control" name="class" id="class" placeholder = "Enter Class"> 
			</div>			
			<div class="form-group"> 
				<label for="name">YEAR</label> 
				<input type="text" class="form-control" name="year" id="year" placeholder = "Enter Year of Study"> 
			</div>			
			<button type="submit" class="btn btn-default">CONTINUE</button> 
		</form>
		
<?php
	}
?>

