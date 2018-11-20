<h2>List of Venues</h2>
<p><b><a href="<?php echo CONF_BASE_PATH; ?>/venues/create" class="btn btn-success">Add New</a></b></p>
<table class="table">
    <thead>
      	<tr>
		<th>LOCATION ID</th>
	<th>FACULTY ID</th>
	<th>LEVEL</th>
	<th>BLOCK</th>
	<th>ROOM</th>
<th>ACTION</th>
</tr>

    </thead>
    <tbody>
		<?php foreach($venues as $row): ?>
		<tr>	<td><?php echo $row['location_id']; ?></td>
	<td><?php echo $row['faculty_id']; ?></td>
	<td><?php echo $row['level']; ?></td>
	<td><?php echo $row['block']; ?></td>
	<td><?php echo $row['room']; ?></td>

	<td><a href="<?php echo CONF_BASE_PATH; ?>/venues/view/<?php echo $row['location_id']; ?>" class="btn btn-info">View</a> <a href="<?php echo CONF_BASE_PATH; ?>/venues/update/<?php echo $row['location_id']; ?>" class="btn btn-warning">Update</a> <a href="<?php echo CONF_BASE_PATH; ?>/venues/delete/<?php echo $row['location_id']; ?>" onclick="return confirm('Are you sure to delete this data?')" class="btn btn-danger">Delete</a></td>
</tr>
		<?php endforeach; ?>
    </tbody>
  </table>