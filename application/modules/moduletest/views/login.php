<div>
<?php 
$attributes = array('role' => 'form', 'class' => 'form-horizontal');
?>
</div>
<div class="col-lg-6">
<?php 
echo validation_errors();
echo (form_error('check_user'));
if ($this->session->flashdata('error_login')) {
	echo $this->session->flashdata('error_login');
}

echo form_open('moduletest/login/index', $attributes); 
?>

		<div class="form-group">
			<label class="col-lg-2 control-label">Email</label>
			<div class="col-lg-6">
				<input type="text" name="email" value="<?php echo set_value('email'); ?>" 
				size="50"  class="form-control " placeholder="Enter email"/>
			</div>
		</div>

		<div class="form-group">
			<label class="col-lg-2 control-label">Password</label>
			<div class="col-lg-6">
				<input  value="<?php echo set_value('password'); ?>" size="50" type="password" 
				class="form-control" placeholder="Password"  name="password"/>
			</div>
		</div>
  		<div class="form-group">
    		<div class="col-lg-offset-2 col-lg-10">
				<button type="submit" class="btn btn-default">Submit</button>
			</div>
		</div>
	</form>
</div>
<div class="col-lg-6">
<?php
echo (form_error('email_inscription'));
echo form_open('moduletest/login/inscription', $attributes);

?>
		<div class="form-group">
			<label class="col-lg-2 control-label">Email</label>
			<div class="col-lg-6">
				<input name="email_inscription" value="<?php echo set_value('email_inscription'); ?>" 
				size="50" type="text" class="form-control " placeholder="Enter email"/>
			</div>
		</div>

		<div class="form-group">
			<label class="col-lg-2 control-label">Password</label>
			<div class="col-lg-6">
				<input  value="<?php echo set_value('password_inscription', ''); ?>" size="50" type="password" 
				class="form-control" placeholder="Password" name="password_inscription"/>
			</div>
		</div>
		<div class="form-group">
			<label class="col-lg-2 control-label">Password</label>
			<div class="col-lg-6">
				<input  value="<?php echo set_value('confirme_inscription'); ?>" size="50" type="password" 
				class="form-control" placeholder="Confirme" name="confirme_inscription"/>
			</div>
		</div>		
  		<div class="form-group">
    		<div class="col-lg-offset-2 col-lg-10">
				<button type="submit" class="btn btn-default">Submit</button>
			</div>
		</div>
	</form>	
</div>