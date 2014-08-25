<?php
require ('inc.head.php');
require ('inc.header.php');
 ?>
    <div class="wall smallBrick" id="photos" style="height: 1000px;">
<!--- seccion centro-->
         <div class="formulario">
         	<form class="form-horizontal" id="registro" action="register.php" method="post">
         	<fieldset>
         		<legend>SIGNUP</legend>
	        	<div class="control-group required">
	        	 <label class="control-label">Email</label>
	        	 <div class="controls">
	        	 		<div class="input-prepend">
	        	 			<input type="email" name="email" id="email" />
	        	 		</div>
	        	 </div>
	        	</div>
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
	        	<div class="control-group required">
	        	<label class="control-label">Phone</label>
	        		<div class="controls">
	        	 		<div class="input-prepend">
	        				<input type="text" name="phone" id="phone" />
	        			</div>
	        		</div>
	        	</div>
	        	<div class="control-group required">
	        	<label class="control-label">Picture</label>
	        		<div class="controls">
	        	 		
	        				
	        				<span class="btn btn-success fileinput-button">
						        <i class="glyphicon glyphicon-plus"></i>
						        <span>Select file...</span>
						    
						        <input id="fileupload" type="file" name="files">
						    </span>
	        			
	        		</div>
	        	</div>
	        	<div id="files" class="files"> 
	        	 <img src="" id="pfiles" width="40" />
	        	</div>
	        	    <div id="progress" class="progress">
				        <div class="progress-bar progress-bar-success"></div>
				    </div>
	        	<input type="hidden" id="picture" name="picture" value="">
	        	<a href="#" id="send" class="sendButton btn btn-success">Sign Up</a>
        	</fieldset>
        </form>
     </div>
<!--- seccion centro-->                
  </div>
<?php require ('inc.footer.php');
require ('inc.foot.php'); ?>