<?php
    function studentProfile(){
        $student = findStudent($_SESSION['SESS_STUDENT_ID']);
        $sfname = "";
        $slname = "";
        $sid = "";
        $subjects = callSubjectsStudent($_SESSION['SESS_STUDENT_ID']);
        foreach($student as $stud){      
?>
            <label>Student ID:</label> <?php echo $stud['student_id']?>
            </br><label>Student Name:</label> <?php echo $stud['student_first_name'].' '.$stud['student_last_name']?>
    <?php
            $sfname = $stud['student_first_name'];
            $slname = $stud['student_last_name'];
            
        }
       
    ?>
        
        <table class="table table-hover">
		    <caption> List of Subjects</caption>
		    <thead>
		    <tr>
			    <th>CODE</th>
			    <th>NAME</th>
		    </tr>
		    </thead>
		    <tbody>
            <?php 
                foreach($subjects as $subject){
                    echo"<tr>
						    <td>
                                <a href=?action=viewResults&&subjectId={$subject['id']}&&sfname=$sfname&&slname=$slname>
                                {$subject['id']} {$subject['code']}</a></td>
						    <td>{$subject['name']}</td>
						    
					    <tr>";
                }
                
            ?>
            </tbody>
	    </table>
    	
<?php
    }
?>