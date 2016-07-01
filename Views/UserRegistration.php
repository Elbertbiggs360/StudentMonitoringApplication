<?php	
	function userRegistration()
	{
?>
		<nav id="navigation">
			<div class="menu">
                <nav class="navbar navbar-inverse">
                  <div class="container-fluid">
                    <div class="navbar-header">
                      <a class="navbar-brand" href="#">SMA REGISTRATION</a>
                    </div>
                    <div>

                        <ul class="nav navbar-nav navbar-right">
                           <?php if($i == 1){?> <li class="active"> <?php } else{?> <li> <?php } ?><a href="?action=registerParent"><span class="glyphicon glyphicon-user"></span> PARENT REGISTRATION</a></li>
                           <?php if($i == 2){?><li class="active"> <?php } else{?> <li> <?php } ?><a href="?action=registerTeacher"><span class="glyphicon glyphicon-user"></span>  TEACHER REGISITRATION</a></li>
                            <?php if($i == 3){?><li class="active"> <?php } else{?> <li> <?php } ?><a href="?action=login"><span class="glyphicon glyphicon-log-in"></span>  LOGIN</a></li>
                        </ul>

                    </div>
                  </div>
                </nav>


				<?php
				?>
				
			</div>
		</nav>
<?php
	}
?>