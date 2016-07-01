<?php 
	function DisplayTeachers(){
       
?>   
    
        <table class="table table-hover">
		    <caption> List of Teachers</caption>
		    <thead>
		    <tr>
			    <th>NAME</th>
			    <th>PHONE NUMBER</th>
			    <th>EMAIL</th>
			    <th>STATUS</th>
			    <th>TEACHER ID</th>
		    </tr>
		    </thead>
		    <tbody>
		    <?php
			    
                foreach(callAllTeachers() as $teacher){
				    echo"<tr>
						    <td>{$teacher['name']}</td>
						    <td>{$teacher['phone_number']}</td>
						    <td>{$teacher['email']}</td>
						    <td>{$teacher['status']}</td>
						    <td>{$teacher['teacher_id']}</td>
						
					    <tr>";
			    }
		    ?>
		    </tbody>
	    </table>
<?php
	}
?>