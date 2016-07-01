<?php 
	function viewIndividualResults($subjectId, $sfname, $slname, $studentid){
        echo "<label>Results Of {$sfname} {$slname}</label>";
?>
    
	<div class="container">
		<table class="table">
			<thead>
				<tr>
					<th>Term</th>
                    <th>Test Type</th>
                    <th>Year</th>
                    <th>Marks</th>
				</tr>
			</thead>
			<tbody>
			<?php 
                foreach(callIndividualResults($studentid, $subjectId) as $results){
				    echo"<tr>
                            <td>{$results['term']}</td>
                            <td>{$results['test_type']}</td>
                            <td>{$results['year']}</td>
                            <td>{$results['marks']}</td>
					    <tr>";
                }
            ?>
			</tbody>
		</table>

        <div id="container" style="width: 100%; height: 400px; margin: 0 auto"></div>
	</div>
<?php
	}
?>