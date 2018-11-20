<h2>List of Events</h2>
<p><b><a href="<?php echo CONF_BASE_PATH; ?>/events/create/<?php echo $faculty_id ?>" class="btn btn-success">Add New</a></b> <a href="<?php echo CONF_BASE_PATH ?>/faculties/" class="btn btn-default">All faculties</a></p>
<table class="table table-bordered">
    <thead>
      	<tr>
		<th>NO.</th>
	<th>TITLE</th>
	<th>DESCRIPTION</th>
	<th>ORGANISER</th>
	<th>DATE</th>
	<th>COORDINATOR</th>
	<th>CAPACITY</th>
	<th>ISREGISTER</th>
	<th>FEE</th>
<th>ACTION</th>
</tr>

    </thead>
    <tbody>
		<?php foreach($events as $row): ?>
		<tr>	<td><?php echo ++$no ?></td>
	<td><?php echo $row['title']; ?></td>
	<td><?php echo $row['description']; ?></td>
	<td><?php echo $row['organiser']; ?></td>
	<td><?php echo $row['start_date']; ?></td>
	<td><?php echo $row['coordinator']; ?></td>
	<td><?php echo $row['capacity']; ?></td>
	<td><?php echo $row['isregister']; ?></td>
	<td><?php echo 'RM '. $row['fee']; ?></td>

	<td><a href="#view_event<?php echo $row['event_id']; ?>" data-toggle="modal" class="btn btn-info"><i class="fa fa-info" aria-hidden="true"></i></a><?php if($session['user_id'] == $row['faculty_id']+1): ?> <a href="#update_event<?php echo $row['event_id']; ?>" class="btn btn-warning" data-toggle="modal"><i class="fa fa-pencil" aria-hidden="true"></i></a> <a href="<?php echo CONF_BASE_PATH; ?>/events/delete/<?php echo $row['event_id']; ?>" onclick="return confirm('Are you sure to delete this data?')" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a><?php endif; ?></td>
	<div class="modal fade" id="view_event<?php echo $row['event_id'] ?>">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4><?php echo $row['title'] ?></h4>	
				</div>

				<div class="modal-body">
					<div class="row">
						<div class="col-md-3">Description:</div>
						<div class="col-md-9"><?php echo $row['description']; ?></div>
					</div>
					<div class="row">
						<div class="col-md-3">Venue:</div>
						<?php foreach($venues as $rows): ?>
						<?php if($row['location_id']==$rows['location_id']):?>
							<div class="col-md-9"><?php echo $rows['room'];?></div>
						<?php endif; ?>
						<?php endforeach; ?>
					</div>
					<div class="row">
						<div class="col-md-3">Organiser:</div>
						<div class="col-md-9"><?php echo $row['organiser']; ?></div>
					</div>
					<div class="row">
						<div class="col-md-3">Start Date:</div>
						<div class="col-md-9"><?php echo $row['start_date']; ?></div>
					</div>
					<div class="row">
						<div class="col-md-3">Start Time:</div>
						<div class="col-md-9"><?php echo $row['start_time']; ?></div>
					</div>
					<div class="row">
						<div class="col-md-3">Coordinator:</div>
						<div class="col-md-9"><?php echo $row['coordinator']; ?></div>
					</div>
					<div class="row">
						<div class="col-md-3">Capacity:</div>
						<div class="col-md-9"><?php echo $row['capacity']; ?></div>
					</div>
					<div class="row">
						<div class="col-md-3">Registration:</div>
						<?php if($row['isregister']==1){ ?>
							<div class="col-md-9">Ok</div>
						<?php }else{ ?>
							<div class="col-md-9">Ko</div>
						<?php }?>

					</div>
					<div class="row">
						<div class="col-md-3">Fee:</div>
						<div class="col-md-9"><?php echo $row['fee']; ?></div>
					</div>		
				</div>

				<div class="modal-footer">
					<a class="btn btn-danger" href="<?php echo CONF_BASE_PATH ?>/events/view/<?php echo $row['event_id'] ?>">Participants</a> <a data-dismiss="modal" class="btn btn-primary">Close</a>
				</div>
			</div>
		</div>
	</div>
<!-- End View -->
<div class="modal fade" id="update_event<?php echo $row['event_id'] ?>">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4><?php echo 'Edit '. $row['title'] ?></h4>	
				</div>
				<div class="modal-body">
					<form role="form" action="<?php echo CONF_BASE_PATH; ?>/events/update/<?php echo $row['event_id']; ?>" method="post">
					<input type="hidden" name="update[event_id]" value="<?php echo $row['event_id']; ?>">
					<div class="form-group">
						<label hidden for="data[faculty_id]">Faculty Id:</label>
						<input type="hidden" class="form-control" name="data[faculty_id]" size="40" value="<?php echo $row['faculty_id'] ?>">
					</div>
					<div class="form-group">
						<label for="data[location_id]">Venue:</label>
						<select  class="form-control" name="data[location_id]">
							<?php foreach($venues as $rows): ?>
								<option value="<?php echo $rows['location_id'] ?>"<?php if($rows['location_id']==$row['location_id']){ ?> selected="selected"<?php }?>><?php echo $rows['room'] ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="form-group">
						<label for="data[title]">Title:</label>
						<input type="text" class="form-control" name="data[title]" size="40" value = "<?php echo $row['title'] ?>">
					</div>
					<div class="form-group">
						<label for="data[description]">Description:</label>

						<textarea class="form-control" name="data[description]" rows="5" cols="40"><?php echo $row['description'] ?></textarea>
					</div>
					<div class="form-group">
						<label for="data[organiser]">Organiser:</label>
						<input type="text" class="form-control" name="data[organiser]" size="40" value = "<?php echo $row['organiser'] ?>">
					</div>
					<div class="form-group">
						<label for="data[start_date]">Start Date:</label>
						<input type="text" class="form-control datepicker" name="data[start_date]" size="40" value = "<?php echo $row['start_date'] ?>">
					</div>
					<div class="form-group">
						<label for="data[end_date]">End Date:</label>
						<input type="text" class="form-control datepicker" name="data[end_date]" size="40" value = "<?php echo $row['end_date'] ?>">
					</div>
					<div class="form-group timepicker">
						<label for="data[start_time]">Start Time:</label>
						<input type="text" class="form-control" name="data[start_time]" size="40" value = "<?php echo $row['start_time'] ?>">
					</div>
					<div class="form-group timepicker">
						<label for="data[end_time]">End Time:</label>
						<input type="text" class="form-control" name="data[end_time]" size="40" value = "<?php echo $row['end_time'] ?>">
					</div>
					<div class="form-group">
						<label for="data[coordinator]">Coordinator:</label>
						<input type="text" class="form-control" name="data[coordinator]" size="40" value = "<?php echo $row['coordinator'] ?>">
					</div>
					<div class="form-group">
						<label for="data[capacity]">Capacity:</label>
						<input type="text" class="form-control" name="data[capacity]" size="40" value = "<?php echo $row['capacity'] ?>">
					</div>
					<div class="form-group">
						<label for="data[isregister]">Isregister:</label>
						<select class="form-control" name="data[isregister]">
							<option style="display:none">-</option>
							<option value="1" <?php if($row['isregister']==1){ echo 'selected="selected"' ?>>Register</option>
							<option value="0" <?php }else if($row['isregister']==0) echo 'selected="selected"' ?>>No register</option>
						</select>
					</div>
					<div class="form-group">
						<label for="data[fee]">Fee:</label>
						<input type="text" class="form-control" name="data[fee]" size="40" value = "<?php echo $row['fee'] ?>">
					</div>
					<div class="form-group">
						<label for="data[image_src]">Image file</label>
						<input type="file" class="form-control" name="data[image_src]">
					</div>
				<div class="modal-footer">
						<input type="submit" class="btn btn-primary" value="Submit">	
					</form>
					<a data-dismiss="modal" class="btn btn-primary">Close</a>
				</div>
			</div>
		</div>
	</div>

</tr>
		<?php endforeach; ?>
    </tbody>
  </table>