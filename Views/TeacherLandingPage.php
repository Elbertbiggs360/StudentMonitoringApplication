<?php 
	function chooseStream(){
?>
 
		<table class="table">
			<thead>
				<tr>
					<th>Subject</th>
					<th>Stream</th>
                    <th>Link</th>
				</tr>
			</thead>
			<tbody>	
			<?php
				foreach(callTeacherSubjects($_SESSION['SESS_ID']) as $subject){
					echo"<tr>
							<td>{$subject['name']}</td>
							<td>{$subject['stream']}</td>
                            <td><a href= ?action=students>-></a></td>
						</tr>";
				}
			?>
			</tbody>
		</table>
<?php 
	}
?>