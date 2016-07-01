<?php 
	function ParentRegistrationForm()
	{
        $err = "";
        session_start();
        if($_SESSION['SESS_REGISTRATION_ERR'] != "" || $_SESSION['SESS_REGISTRATION_ERR'] != NULL) 
		{
			$err = $_SESSION['SESS_REGISTRATION_ERR'];
            unset($_SESSION['SESS_REGISTRATION_ERR']);
		}
        if($_SESSION['SESS_IMAGES_ERROR'] != "" || $_SESSION['SESS_IMAGES_ERROR'] != NULL) 
		{
			$err = $_SESSION['SESS_IMAGES_ERROR'];
            unset($_SESSION['SESS_IMAGES_ERROR']);
		}
?>

		<form role="form" method="post" action="?connect=parentReg" enctype="multipart/form-data"> 
			<h3>REGISTER PARENT <small><?php
                                       if($err != ""){
                                           echo $err;
                                       }
                                   ?></small></h3> 			
			<div class="form-group"> 
				<label for="name">PARENT NAME</label> 
				<input type="text" class="form-control" name="name" id="name" placeholder = "Enter First Name in format (FirstName LastName)"> 
			</div>			
			<div class="form-group"> 
				<label for="name">PHONE NUMBER</label> 
				<input type="text" class="form-control" name="phone" id="phone" placeholder = "Enter Phone Number"> 
			</div>			
			<div class="form-group"> 
				<label for="name">EMAIL</label> 
				<input type="email" class="form-control" name="email" id="email" placeholder = "Enter Email"> 
			</div> 
			<div class="form-group"> 
				<label for="name">PASSWORD</label> 
				<input type="password" class="form-control" name="password" id="password" placeholder = "Enter Password"> 
			</div>
			
			<div class="form-group"> 
				<label for="name">RE-ENTER PASSWORD</label> 
				<input type="password" class="form-control" name="cpassword" id="password" placeholder = "Re-enter Password"> 
			</div>	
            <div class="form-group"> 
                <label for="name">INSERT PROFILE PICTURE</label>
                <input type="file" name="fileToUpload" id="fileToUpload">
            </div>		
			<button type="submit" name="submit" id="submit" class="btn btn-default">SUBMIT</button> 
		</form>
		
<?php
	}
?>

