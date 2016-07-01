<?php 
	function viewSubjectStream($streamId, $subjectId){
?>
	<div class="container">
		<table class="table">
			<thead>
				<tr>
					<th>List of Students<th>
				</tr>
			</thead>
			<tbody>
			<?php 
                $i = 0;
                foreach(callStudentSubject($streamId, $subjectId) as $student){
                    $i++;
				    echo"<tr>
                            <td>{$i} &nbsp
						    <a href=?action=viewResults&&streamId={$streamId}&&subjectId={$subjectId}&&sfname={$student['sfname']}&&slname={$student['slname']}&&studentid={$student['id']}>
                           {$student['sfname']} {$student['slname']}</a></td>
					    <tr>";
                }
            ?>
			</tbody>
		</table>
	</div>
<?php
	}
?>