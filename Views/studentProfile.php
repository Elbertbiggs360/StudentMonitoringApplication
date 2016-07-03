<?php
    function studentProfile(){
        $student = findStudent($_SESSION['SESS_STUDENT_ID']);
        $sfname = "";
        $slname = "";
        $sid = "";
        $subjects = callSubjectsStudent($_SESSION['SESS_STUDENT_ID']);
        ?>
<main class="mdl-layout__content">
 <div class="page-content"><!-- Your content goes here -->
  <div class="container">
    <div class="classInfo" style="background-color:#eee">
        <!-- Square card -->
<style>
.demo-card-square.mdl-card {
  width: 240px;
  height: 120px;
}
.demo-list-icon {
  width: 300px;
}
.demo-card-square > .mdl-card__title {
  color: #fff;
  background:
    url('../assets/demos/dog.png') bottom right 15% no-repeat #46B6AC;
}
</style>
        <?php
        foreach($student as $stud){      
?>
    <div class="demo-card-square mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title mdl-card--expand">
    <h2 class="mdl-card__title-text"><?php echo $stud['student_first_name'].' '.$stud['student_last_name']?></h2>
  </div>
  <div class="mdl-card__supporting-text">
    <?php echo $stud['student_id']?>
  </div>
    <?php
            $sfname = $stud['student_first_name'];
            $slname = $stud['student_last_name'];
            
        }
       
    ?>

</div>
        <div class="smaContent">
        <div style="margin-left:20%">
        <table style="width:50%" class="table table-hover">
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
                    echo"<tr><td>
    <span class='mdl-list__item-primary-content'>
                            <a href=?action=viewResults&&subjectId={$subject['id']}&&sfname=$sfname&&slname=$slname>
                            <i class='material-icons'>book</i>\t{$subject['code']}</a></td>
						    <td>{$subject['name']}</td></tr>
						    ";
                }
                
            ?>
            </tbody>
	    </table>
        </div>
        </div>
        </div>
        </div>
        </div>
        </main>
    	
<?php
    }
?>