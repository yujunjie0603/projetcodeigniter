<div class="col-lg-6">
<?php 
echo validation_errors();
$attributes = array('role' => 'form', 'class' => 'form-horizontal');
echo form_open('moduletest/login/auth', $attributes); ?>

		<div class="form-group">
			<label class="col-lg-2 control-label">Username</label>
			<div class="col-lg-6">
				<input type="text" name="email" value="<?php echo set_value('email'); ?>" 
				size="50" type="email" class="form-control " placeholder="Enter email"/>
			</div>
		</div>

		<div class="form-group">
			<label class="col-lg-2 control-label">Password</label>
			<div class="col-lg-6">
				<input  value="<?php echo set_value('password'); ?>" size="50" type="password" 
				class="form-control" placeholder="Password"/>
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
</div>