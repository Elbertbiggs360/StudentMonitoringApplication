<?php	
    function teacherNavigation(){
?>

	 <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Teacher</a>
            </div>
            <div>
                <ul class="nav navbar-nav">	
                        <li><a href="?action=home">Home</a></li>				
					    <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown">Marks<span class="caret"></span> </a> 
						    <ul class="dropdown-menu"> 
							    <li class="divider"></li>
							    <li><a href="?view=viewMarks">View Marks</a></li>
							    <li class="divider"></li>
							    <li><a href="?action=insMarks">Insert Marks</a></li>
							    <li class="divider"></li>
						    </ul> 
					    </li> 
					
					    <li><a href="?view=studentList">Student List</a></li> 
                </ul>
                <ul class="nav navbar-nav navbar-right">
                        <li><a href="?action=logout"><span class="glyphicon glyphicon-log-out"></span> LOGOUT</a></li>
                </ul>
            </div>
        </div>
    </nav>
    	
<?php
    }
?>
