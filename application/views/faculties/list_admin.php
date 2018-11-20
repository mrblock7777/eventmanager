<h2>List of Faculties</h2>
<table class="display nowrap">
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

	<td><a href="<?php echo CONF_BASE_PATH ?>/faculties/event/<?php echo $row['faculty_id']?>" class="btn btn-info">View</a> <?php if($session['user_id'] == $row['faculty_id']+1): ?> <a href="<?php echo CONF_BASE_PATH; ?>/faculties/update/<?php echo $row['faculty_id']; ?>" class="btn btn-warning">Update</a> <a href="<?php echo CONF_BASE_PATH; ?>/faculties/delete/<?php echo $row['faculty_id']; ?>" onclick="return confirm('Are you sure to delete this data?')" class="btn btn-danger">Delete</a></td>
</tr>
	<?php endif; ?>
		<?php endforeach; ?>
    </tbody>
  </table>
    