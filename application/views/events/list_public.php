<style>
#table-events,#table-events td, #table-events th {
	margin-top:50px;
	padding-left:150px;
}
.modal-header{
	background: maroon linear-gradient(to bottom left, black, maroon);
}
.modal-header h4{
	color:white;
}


</style>

<table class="table" id="table-events">
    <thead>
      	<tr>
		<th>DATE/TIME</th>
	<th>EVENT</th>
	<th>FEE</th>
</tr>

    </thead>
    <tbody>
		<?php $img = array() ?>
		<?php foreach($events as $row): ?>
		<tr>
	<td><p><?php echo date('d M Y',strtotime($row['start_date'])); ?></p>
	<p><?php echo date("g:i ",strtotime($row['start_time'])).'-'.date("g:i a",strtotime($row['end_time'])) ?></p></td>
	<td><p><img src="<?php echo CONF_BASE_URL ?>/media/img/<?php echo $row['image_src'] ?>" alt="no image available"></p><p><a href="#view_event<?php echo $row['event_id'] ?>" data-toggle="modal"><?php echo $row['title']; ?></a></p>
	<p><?php echo $row['organiser']; ?></p></td>
	<td><?php echo 'RM '. $row['fee']; ?></td>

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
						<?php if($rows['location_id']==$row['location_id']): ?>
						<div class="col-md-9"><?php echo $rows['room'] ?></div>
						<?php endif;?>
						<?php endforeach; ?>
					</div>
					<div class="row">
						<div class="col-md-3">Organiser:</div>
						<div class="col-md-9"><?php echo $row['organiser']; ?></div>
					</div>
					<div class="row">
						<div class="col-md-3">Date:</div>
						<div class="col-md-9"><?php echo date('d M Y',strtotime($row['start_date'])).' - '. date('d M Y',strtotime($row['end_date'])) ?></div>
					</div>
					<div class="row">
						<div class="col-md-3">Time:</div>
						<div class="col-md-9"><?php echo date('g:i ',strtotime($row['start_time'])).' - '.date('g:i a',strtotime($row['end_time'])); ?></div>
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
						<?php if(($row['isregister']==1) && ($row['end_date']> date('Y-m-d'))){ ?>
							<div class="col-md-9"><a href="<?php echo CONF_BASE_PATH ?>/events/view/<?php echo $row['event_id'] ?>">View available seats</a></div>
						<?php }else if(($row['isregister']==0)  && ($row['end_date'])> date('Y-m-d')){ ?>
							<div class="col-md-9">No registration required</div>
						<?php } else if($row['end_date']<date('Y-m-d')){?>
							<div class="col-md-9">The event is finished</div>
						<?php } ?>

					</div>
					<div class="row">
						<div class="col-md-3">Fee:</div>
						<div class="col-md-9"><?php echo $row['fee']; ?></div>
					</div>
							
				</div>

				<div class="modal-footer">
					<a data-dismiss="modal" class="btn btn-primary">Close</a>
				</div>
			</div>
		</div>
	</div>
</tr>
	
		<?php endforeach; ?>
    </tbody>
  </table>