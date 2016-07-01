<?php
	function insertMarks($tests){
        $stud = callStudentSubject($_SESSION['SESS_STREAM_ID'], $_SESSION['SESS_SUBJECT_ID']);
        $test_id = "";
        foreach($tests as $test){
            $test_id = $test['id'];
        }
        $index = 0;
?>
    <form role="form" method="post" action="?action=insertMarks">
        <h3>Insert Students Marks</h3>
        
        <table class="table table-hover">
		    <caption> List of Teachers</caption>
		    <thead>
		    <tr>
			    <th>NAME</th>
			    <th>MARKS</th>
                
		    </tr>
		    </thead>
		    <tbody>
		    <?php
			    
                foreach($stud as $student){                   
				    echo"<tr>
						    <td>{$student['sfname']} {$student['slname']} 
                            <input type='hidden' value='{$student['id']}' id='stud_id".$index."' name='stud_id".$index."'>
                            </td>                      
						    <td><input type='number' class='form-control' name='stud".$index."' id='stud".$index."'></td>						
					    <tr>";
                    $index += 1;
			    }
		    ?>
		    </tbody>
	    </table>
        <?php
            echo "<input type='hidden' value='{$index}' id='index' name='index'>";
            echo "<input type='hidden' value='{$test_id}' id='test' name='test'>";
        ?>
        <button type="submit" class="btn btn-default">SUBMIT</button> 
	</form>
<?php
	}
?>