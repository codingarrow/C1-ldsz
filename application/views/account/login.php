    <div class="midmrtitle t3" style="padding-left: 400px; padding-bottom: 15px;">LOG IN</div>           
	  
		<?php echo $this->session->flashdata('message'); ?>        
		<?php if (isset($message) && $message): echo $message; endif; ?>        
		<?php echo validation_errors(); ?>            
		<div style="padding-left: 400px;">
		<?php echo form_open('account/login', array('name' => 'form2', 'id' => 'form2')); ?>   
		
			<strong>Username</strong><br><input type="text" name="username" value="<?php echo set_value('username'); ?>" class="f3 t5c"><br>          
			<strong>Password</strong><br><input type="password" name="password" class="f3 t5c"><br>            
			<!--hr/-->            
			<div>                
				<button class="btn btn-primary" type="submit"><i class="icon-ok icon-white"></i> Login</button>
                <button class="btn" type="reset"><i class="icon-ok icon-remove"></i> Cancel</button>            
			</div>        
		</form>
		</div>
	<!--/div-->
