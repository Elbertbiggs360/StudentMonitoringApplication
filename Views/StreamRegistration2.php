<?php
    function streamRegistration2(){
        //have not yet filed in the form parameters

?>
    <form role="" method="" action="">
        <div class="form-group">
            <label for="subject">Select Subject</label>
            <select class="form-control" id="subject">
			    <option value="geog">Geography</option>
                <option value="his">History</option>
                <option value="eng">English</option>
                <option value="phy">Physics</option>
                <option value="ent">Entrepreneurship</option>
                <option value="math">Mathematics</option>
                <option value="chem">Chemistry</option>
                <option value="fre">French</option>
                <option value="ger">German</option>
                <option value="com">Commerce</option>
                <option value="cre">Christian Religious Education</option>
                <option value=""></option>
                <option value=""></option>
		    </select>
        </div>
        <div class="form-group">
            <label for="teacher">Select Teacher</label>
            <select class="form-group" id="teacher">
                <?php 
                    foreach(callAllTeachers() as $teacher){
                        echo"<option>"+$teacher['name']+"</option>";
                    }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="subject">Select Subject</label>
            <select class="form-control" id="subject">
			    <option value="geog">Geography</option>
                <option value="his">History</option>
                <option value="eng">English</option>
                <option value="phy">Physics</option>
                <option value="ent">Entrepreneurship</option>
                <option value="math">Mathematics</option>
                <option value="chem">Chemistry</option>
                <option value="fre">French</option>
                <option value="ger">German</option>
                <option value="com">Commerce</option>
                <option value="cre">Christian Religious Education</option>
                <option value=""></option>
                <option value=""></option>
		    </select>
        </div>
        <div class="form-group">
            <label for="teacher">Select Teacher</label>
            <select class="form-group" id="teacher">
                <?php 
                    foreach(callAllTeachers() as $teacher){
                        echo"<option>"+$teacher['name']+"</option>";
                    }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="subject">Select Subject</label>
            <select class="form-control" id="subject">
			    <option value="geog">Geography</option>
                <option value="his">History</option>
                <option value="eng">English</option>
                <option value="phy">Physics</option>
                <option value="ent">Entrepreneurship</option>
                <option value="math">Mathematics</option>
                <option value="chem">Chemistry</option>
                <option value="fre">French</option>
                <option value="ger">German</option>
                <option value="com">Commerce</option>
                <option value="cre">Christian Religious Education</option>
                <option value=""></option>
                <option value=""></option>
		    </select>
        </div>
        <div class="form-group">
            <label for="teacher">Select Teacher</label>
            <select class="form-group" id="teacher">
                <?php 
                    foreach(callAllTeachers() as $teacher){
                        echo"<option>"+$teacher['name']+"</option>";
                    }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="subject">Select Subject</label>
            <select class="form-control" id="subject">
			    <option value="geog">Geography</option>
                <option value="his">History</option>
                <option value="eng">English</option>
                <option value="phy">Physics</option>
                <option value="ent">Entrepreneurship</option>
                <option value="math">Mathematics</option>
                <option value="chem">Chemistry</option>
                <option value="fre">French</option>
                <option value="ger">German</option>
                <option value="com">Commerce</option>
                <option value="cre">Christian Religious Education</option>
                <option value=""></option>
                <option value=""></option>
		    </select>
        </div>
        <div class="form-group">
            <label for="teacher">Select Teacher</label>
            <select class="form-group" id="teacher">
                <?php 
                    foreach(callAllTeachers() as $teacher){
                        echo"<option>"+$teacher['name']+"</option>";
                    }
                ?>
            </select>
        </div>
    </form>
<?php
    }
?>
