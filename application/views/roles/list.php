<h2>List of Roles</h2>
<p><b><a href="<?php echo CONF_BASE_PATH; ?>/roles/create" class="btn btn-success">Add New</a></b></p>
<table class="table">
    <thead>
      	<tr>
		<th>ROLE ID</th>
	<th>GROUP ID</th>
	<th>MODULE</th>
	<th>ROLE</th>
<th>ACTION</th>
</tr>

    </thead>
    <tbody>
		<?php foreach($roles as $row): ?>
		<tr>	<td><?php echo $row['role_id']; ?></td>
	<td><?php echo $row['group_id']; ?></td>
	<td><?php echo $row['module']; ?></td>
	<td><?php echo $row['role']; ?></td>

	<td><a href="<?php echo CONF_BASE_PATH; ?>/roles/view/<?php echo $row['role_id']; ?>" class="btn btn-info">View</a> <a href="<?php echo CONF_BASE_PATH; ?>/roles/update/<?php echo $row['role_id']; ?>" class="btn btn-warning">Update</a> <a href="<?php echo CONF_BASE_PATH; ?>/roles/delete/<?php echo $row['role_id']; ?>" onclick="return confirm('Are you sure to delete this data?')" class="btn btn-danger">Delete</a></td>
</tr>
		<?php endforeach; ?>
    </tbody>
  </table>