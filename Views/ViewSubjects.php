<?php
    function viewSubjects(){
?>
<table class="table table-hover">
	<caption> List of Teachers</caption>
	<thead>
	<tr>
		<th>CODE</th>
        <th>NAME</th>
		<th>NUMBER OF PAPERS</th>
	</tr>
	</thead>
	<tbody>
	<?php    
        foreach(callAllSubjects() as $subject){
			echo"<tr>
					<td>{$subject['code']}</td>
                    <td>{$subject['name']}</td>
					<td>{$subject['pnumber']}</td>
				<tr>";
		}
	?>
	</tbody>
</table>
<?php
    }
?>