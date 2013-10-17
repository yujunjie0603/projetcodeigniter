<div class="container">
	<div class="banner">
	    <ul>
	        <li style="background-image: url(<?=base_url() . 'images/1.png';?>);">This is a slide.</li>
	        <li style="background-image: url(<?=base_url() . 'images/2.png';?>);">This is another slide.</li>
	        <li style="background-image: url(<?=base_url() . 'images/3.png';?>);">This is a final slide.</li>
	    </ul>
	</div>
	<div class="row">
	  <div class="col-md-2">
<?php
$attributes = array('role' => 'form', 'class' => 'form-horizontal');
if (!$this->session->userdata('connect')){
	echo form_open('/moduletest/login/index', $attributes); 
?>
		<div class="form-group">
			<label class="control-label">Email</label>
			<div class="">
				<input type="text" name="email" value="<?php echo set_value('email'); ?>" 
				size="50"  class="form-control " placeholder="Enter email"/>
			</div>
		</div>

		<div class="form-group">
			<label class="control-label">Password</label>
			<div class="">
				<input  value="<?php echo set_value('password'); ?>" size="50" type="password" 
				class="form-control" placeholder="Password"  name="password"/>
			</div>
		</div>
  		<div class="form-group">
    		<div class="">
				<button type="submit" class="btn btn-default">Submit</button>
			</div>
		</div>
	</form>
<?php			
} else {
?>
<div>
	<h4>Bonjour <?=$this->session->userdata['auth'][0]->first_name . " " . $this->session->userdata['auth'][0]->name;?></h4>
</div>
<?php	
}
?>
	</div>

	  	<div class="col-md-10">
	  		<nav class="navbar navbar-default" role="navigation">
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<div>
					  <ul class="nav navbar-nav">
					    <li class="active"><a href="#">chhhhanpin</a></li>
					    <li class="dropdown">
					      <a href="#" class="dropdown-toggle" data-toggle="dropdown">cccccchhppppp<b class="caret"></b></a>
					      <ul class="dropdown-menu">
<?php
if (isset($listCategoryMenu)) {

	foreach ($listCategoryMenu as $key => $value) {
?>
					        <li><a href="#">Action</a></li>
<?php
	}
}
?>					      	
					        <li><a href="<?=base_url() . 'product/category';?>">Another action</a></li>
					        <li><a href="">Something else here</a></li>
					        <li class="divider"></li>
					        <li class="dropdown-header">Nav header</li>
					        <li><a href="#">Separated link</a></li>
					        <li><a href="#">One more separated link</a></li>
					      </ul>
					    </li>
					    <li><a href="#">sfsfsfqsf</a></li>
					    <li><a href="#">Lisfsfsfnk</a></li>
					  </ul>
					  <ul class="nav navbar-nav navbar-right">
					    <li class="active"><a href="./">Default</a></li>
					    <li><a href="../navbar-static-top/">Static top</a></li>
					    <li><a href="../navbar-fixed-top/">Fixed top</a></li>
<?php
if ($this->session->userdata('connect')){
?>					    
					    <li><a href="<?=base_url() . 'moduletest/login/logout';?>">Deconnecter</a></li>
<?php
}
?>					    
					  </ul>
					</div><!--/.nav-collapse -->
				</div>
			</nav>
			<div class="content">
			<?php
			$this->load->view($module . "/" . $view_file);
			?>
			</div>
		</div>
	</div>
</div>