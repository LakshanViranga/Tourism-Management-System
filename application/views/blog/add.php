
	<h3>Add New User</h3>
	<!-- <a href="<?php echo base_url('index.php/blog/index'); ?>" class="btn btn-default">Back</a> -->
	<form action="<?php echo base_url('index.php/blog/submit') ?>" method="post" class="form-horizontal">
		<div class="form-group">
			<label for="title" class="col-md-2 text-right">User Name</label>
			<div class="col-md-10">
				<input type="text" name="txt_title" placeholder="User name with initilas"class="form-control" required>
			</div>
		</div>
		<div class="form-group">
			<label for="description" class="col-md-2 text-right">Email</label>
			<div class="col-md-10">
				<input name="txt_description" placeholder="user@xyz.com"class="form-control" required></input>
			</div>
		</div>
		
		
        
		<div class="form-group">
			<label for="description" class="col-md-2 text-right">Password</label>
			<div class="col-md-10">
				<input name="txt_description" placeholder="********"class="form-control" required></input>
			</div>
		</div>
		<div class="form-group">
			<label for="description" class="col-md-2 text-right">Confirm the password</label>
			<div class="col-md-10">
				<input name="txt_description" placeholder="********"class="form-control" required></input>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-2 text-right"></label>
			<div class="col-md-10">
				<input type="submit" name="btnSave" class="btn btn-primary" value="Save">
			</div>
		</div>
	</form>
	
