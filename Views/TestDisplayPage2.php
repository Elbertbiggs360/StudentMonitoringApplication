<?php
	function displayTestMarks($tests){
        foreach($tests as $test){
            $test_id =  $test['id'];
        }

?>
<table class="table">
	<thead>
		<tr>
			<th>STUDENT</th>
			<th>MARKS ATTAINED</th>
		</tr>
	</thead>
	<tbody>
		<?php
				foreach(callStudentResults($test_id, $_SESSION['SESS_SUBJECT_ID'], $_SESSION['SESS_STREAM_ID']) as $results){
					echo"<tr>
							<td>{$results['sfname']} {$results['slname']}</td>
							<td>{$results['marks']}</td>
						</tr>";
				}
			?>
	</tbody>
</table>
<?php
	}
?>