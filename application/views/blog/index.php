
<a href="#" class="badge badge-primary">You can edit user profiles here</a>	
	<h3>Admin Panel</h3>

	<?php
		if($this->session->flashdata('success_msg')){
	?>
		<div class="alert alert-success">
			<?php echo $this->session->flashdata('success_msg'); ?>
		</div>
	<?php		
		}
	?>


	<?php
		if($this->session->flashdata('error_msg')){
	?>
		<div class="alert alert-success">
		<?php echo $this->session->flashdata('error_msg'); ?>
		</div>
	<?php		
		}
	?>

	<a href="<?php echo base_url('index.php/blog/add'); ?>" class="btn btn-primary">Add New</a>
	<table class="table table-striped table-dark">
		<thead class=thead-dark">
			<tr>
				<td>user_ID</td>
				<th>user_Name</th>
				<th>email</th>
			
			</tr>
		</thead>
		<tbody>
		<?php 
			if($blogs){
				foreach($blogs as $blog){
		?>
			<tr>
				<td><?php echo $blog->user_id; ?></td>
				<td><?php echo $blog->user_name; ?></td>
				<td><?php echo $blog->email; ?></td>
				<td>
					<a href="<?php echo base_url('index.php/blog/edit/'.$blog->user_id); ?>" class="btn btn-info">Edit</a>
					<a href="<?php echo base_url('index.php/blog/delete/'.$blog->user_id); ?>" class="btn btn-danger" onclick="return confirm('Do you want to delete this record?');">Delete</a>
				</td>
			</tr>
		<?php
				}
			}
		?>
		</tbody>
	</table>
<!-- <?php include('include/footer.php')?> -->