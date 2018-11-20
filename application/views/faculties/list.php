<h2>List of Faculties</h2>
<p><b><a href="<?php echo CONF_BASE_PATH; ?>/faculties/create" class="btn btn-success">Add New</a></b></p>
<table class="table">
    <thead>
      	<tr>
		<th>FACULTY ID</th>
	<th>FACULTY NAME</th>
<th>ACTION</th>
</tr>

    </thead>
    <tbody>
		<?php foreach($faculties as $row): ?>
		<tr>	<td><?php echo $row['faculty_id']; ?></td>
	<td><?php echo $row['faculty_name']; ?></td>

	<td><a href="<?php echo CONF_BASE_PATH; ?>/faculties/view/<?php echo $row['faculty_id']; ?>" class="btn btn-info">View</a> <a href="<?php echo CONF_BASE_PATH; ?>/faculties/update/<?php echo $row['faculty_id']; ?>" class="btn btn-warning">Update</a> <a href="<?php echo CONF_BASE_PATH; ?>/faculties/delete/<?php echo $row['faculty_id']; ?>" onclick="return confirm('Are you sure to delete this data?')" class="btn btn-danger">Delete</a></td>
</tr>
		<?php endforeach; ?>
    </tbody>
  </table>