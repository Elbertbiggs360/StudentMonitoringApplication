<?php
    function displayIndividualTestMarks($tests){
        foreach($tests as $test){
            $test_id =  $test['id'];
            $test_type = $test['test_type'];
            $test_year = $test['year'];
            $test_term = $test['term'];
        }

        echo '<label>Test: </label>'.$test_type.'</br>';
        echo '<label>Year: </label>'.$test_year.'</br>';
        echo '<label>Term: </label>'.$test_term.'</br>';
?>
    <table class="table">
	    <thead>
		    <tr>
			    <th>SUBJECT</th>
			    <th>MARKS ATTAINED</th>
		    </tr>
	    </thead>
	    <tbody>
		    <?php
				    foreach(callStudentTestResults($test_id, $_SESSION['SESS_STUDENT_ID']) as $results){
				    	echo"<tr>
				    			<td>{$results['name']}</td>
				    			<td>{$results['marks']}</td>
				    		</tr>";
				    }
			    ?>
	    </tbody>
    </table>
<?php
	}
?>
