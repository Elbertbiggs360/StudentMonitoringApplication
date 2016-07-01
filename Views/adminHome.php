<?php	
    session_start();
    function adminHome(){
?>

	 <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">ADMINISTRATOR</a>
            </div>
            <div>
                <ul class="nav navbar-nav">					
					    <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown">Stream<span class="caret"></span> </a> 
						    <ul class="dropdown-menu"> 
							    <li class="divider"></li>
							    <li><a href="?view=viewStream">View Stream</a></li>
							    <li class="divider"></li>
							    <li><a href="?view=insStream">Insert Stream</a></li>
							    <li class="divider"></li>
						    </ul> 
					    </li> 
					
					    <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown">Subject<span class="caret"></span> </a> 
						    <ul class="dropdown-menu">
                                <li class="divider"></li> 
							    <li><a href="?insert=insSubject">Insert Subject</a></li> 
                                <li class="divider"></li>
							    <li><a href="?insert=viewSubject">View Subject</a></li> 
                                <li class="divider"></li>
						    </ul> 
					    </li>
                        <li><a href="?view=viewTeachers">Teachers</a></li>	
                        
                        <li><a href="?view=viewParents">Parents</a></li>

                        <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown">Student<span class="caret"></span> </a> 
						    <ul class="dropdown-menu">
                                <li class="divider"></li> 
							    <li><a href="?view=viewStudent">View Student</a></li>
                                <li class="divider"></li>
							    <li><a href="?insert=insStudent">Insert Student</a></li> 
                                <li class="divider"></li>
						    </ul> 
					    </li>   
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
