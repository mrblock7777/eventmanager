<html>
<head>
	<title>Authorize Area</title>
	<link rel="stylesheet" href="<?php echo CONF_BASE_URL; ?>/media/css/flatly/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo CONF_BASE_URL; ?>media/css/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="<?php echo CONF_BASE_URL;?>/media/css/jquery.dataTables.css">
	<link rel="stylesheet" href="<?php echo CONF_BASE_URL;?>/media/css/dataTables.bootstrap.css">
	<link rel="stylesheet" href="<?php echo CONF_BASE_URL;?>/media/css/responsive.bootstrap.css">
	<link rel="stylesheet" href="<?php echo CONF_BASE_URL; ?>/media/css/jquery-ui.min.css">
	<script src="<?php echo CONF_BASE_URL; ?>/media/plugins/jQuery/jquery-2.2.3.min.js"></script>
	<script src="<?php echo CONF_BASE_URL; ?>/media/js/jquery-ui.min.js"></script>
	<script src="<?php echo CONF_BASE_URL; ?>/media/js/bootstrap.min.js"></script>
	<script src="<?php echo CONF_BASE_PATH; ?>/media/js/jquery.dataTables.min.js"></script>



	<link href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
	<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.5.min.js" type="text/javascript"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<style type="text/css">
	input{
		width: 180px;
		margin-bottom: 5px;
	}

	br{
		clear: left;
	}
	div{
		margin-bottom:10px;
	}
	#outer{
		display:table;
		position:absolute;
		height:100%;
		width:100%;
		background: radial-gradient(maroon,black );

	}
	#middle{
		display:table-cell;
		vertical-align:center;
		text-align:center;
	}
	#inner{
		margin-left:auto;
		margin-right:auto;
		width:300px;
		padding:100px 20px;
		margin-top:10%;
		color: white;

		
	}
	body{
		height:100%;
		background-color:#ccc;
	}
	.btn-success, .input-group{
		position:relative;
	}
	.input-control{
		width:200px;
		border:0px;
		border-bottom:1px solid grey;
		background-color:transparent;
		position: relative;
		left:25px;
		color:white;
	}
	.input-control:focus{
		outline:none;
		transition:0.5s;
	}
	.btn-warning{
		width:80px;
	}
	</style>	
</head>
<body>

<form action="<?php echo CONF_BASE_PATH; ?>/session/login" method="post">
<div id="outer">
	<div id="middle">
			<div id="inner">
			<b><i><h2 style="font-size:40px">Sign In</h2></i></b>
				<?php if (!empty($error)) echo '<span style="color: pink;">' . $error . '</span>'; ?>
				<div class="input-group">
					<input placeholder="username" class="input-control" type="text" name="data[username]" maxlength="30" /><br />
				</div>
				<div class="input-group">
					<input placeholder="password" class="input-control" type="password" name="data[password]" maxlength="30" /><br />
				</div>
				<input type="submit" class="btn btn-warning" value="Submit">
				<a href="<?php echo CONF_BASE_PATH ?>/faculties/" class="btn btn-default">Cancel</a> <br/>
				<a href="<?php echo CONF_BASE_PATH ?>/users/create">Register</a>
			</div>	
			
	</div>	
</div>
</form>
</body>

