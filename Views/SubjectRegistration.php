<?php 
	function subjectRegistrationForm()
	{
?>

		<form role="form" method="post" action="?connect=subjectReg"> 
			<h3>REGISTER SUBJECT</h3>
			<div class="form-group"> 
				<label for="name">CODE</label> 
				<input type="text" class="form-control" name="code" id="code" placeholder = "Enter Subject Paper Code"> 
			</div>			
			<div class="form-group"> 
				<label for="name">NAME</label> 
				<input type="text" class="form-control" name="name" id="name" placeholder = "Enter Name"> 
			</div>			
			<div class="form-group"> 
				<label for="name">NUMBER OF PAPERS</label> 
				<input type="number" class="form-control" name="paperNumber" id="paperNumber" placeholder = "Enter Number Of Papers"> 
			</div>						
			<button type="submit" class="btn btn-default">SUBMIT</button> 
		</form>
		
<?php
	}
?>

