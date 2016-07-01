<?php 
	function EmployeeRegistrationForm()
	{
?>

		<form role="form" method="post" action="?connect=emp"> 
			<h3>REGISTER TEST </h3>
			<div class="form-group"> 
				<label for="name">TERM</label> 
				<input type="text" class="form-control" name="term" id="term" placeholder = "Enter Term"> 
			</div>			
			<div class="form-group"> 
				<label for="name">TEST TYPE</label> 
				<input type="text" class="form-control" name="testType" id="testType" placeholder = "Enter Test Type"> 
			</div>	
			<button type="submit" class="btn btn-default">SUBMIT</button> 
		</form>
		
<?php
	}
?>

