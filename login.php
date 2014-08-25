<?php
require ('inc.head.php');
require ('inc.header.php');
 ?>
    <div class="wall smallBrick" id="photos" style="height: 1000px;">
<!--- seccion centro-->
         <div class="formulario">
         	<form class="form-horizontal" id="formlogin">
         	<fieldset>
         		<legend>Log In</legend>
	        	
	        	<div class="control-group required">
	        		<label class="control-label">Username</label>
	        		<div class="controls">
	        	 		<div class="input-prepend">
	        				<input type="text" name="username" id="username" />
	        			</div>
	        		</div>
	        		
	        	</div>
	        	<div class="control-group required">
	        	<label class="control-label">Password</label>
	        	   <div class="controls">
	        	 		<div class="input-prepend">
	        				<input type="password" name="password" id="password" />
	        			</div>
	        	   </div>
	        	</div>
	       
	        	<a href="#" id="login" class="sendButton btn btn-success">Log In</a>
        	</fieldset>
        </form>
     </div>
<!--- seccion centro-->                
  </div>
<?php require ('inc.footer.php');
require ('inc.foot.php'); ?>