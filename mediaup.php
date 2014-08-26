<?php
require ('inc.head.php');
require ('inc.header.php');
 ?>
    <div class="wall smallBrick" id="photos" style="height: 1000px;">
<!--- seccion centro-->
         <div class="formulario">
         	<form class="form-horizontal" id="formpost">
         	<fieldset>
         		<legend>New Post</legend>
	        	
	        	<div class="control-group required">
	        		<label class="control-label">Comment</label>
	        		<div class="controls">
	        	 		<div class="input-prepend">
	        				<textarea id="comentario" name="comentario"></textarea>
	        			</div>
	        		</div>
	        		
	        	</div>
	            <div class="control-group required">
	        	<label class="control-label">Up media</label>
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
	        	<input type="hidden" id="picture" class="picture" name="picture" value="">
	        	<a href="#" id="sendpost" class="sendButton btn btn-success">Send</a>
        	</fieldset>
        </form>
     </div>
<!--- seccion centro-->                
  </div>
<?php require ('inc.footer.php');
require ('inc.foot.php'); ?>