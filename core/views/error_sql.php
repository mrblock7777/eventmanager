<html>
<head>
<title>SQL Syntax Error</title>

<style type="text/css">

body {
	background-color: #fff;
	margin: 40px;
	font-family: 'Lucida Grande', Verdana, Sans-serif;
	font-size: 12px;
	color: #4F5155;
}

a {
	color: #003399;
	background-color: transparent;
	font-weight: normal;
}

h1 {
	color: #444;
	background-color: transparent;
	border-bottom: 1px solid #D0D0D0;
	font-size: 16px;
	font-weight: bold;
	margin: 24px 0 2px 0;
	padding: 5px 0 6px 0;
}

code {
	font-family: Monaco, Verdana, Sans-serif;
	font-size: 12px;
	background-color: #FFF6BF;
	border: 1px solid #FFD324;
	color: #444444;
	display: block;
	margin: 14px 0 14px 0;
	padding: 12px 10px 12px 10px;
}

.code {
	font-family: Monaco, Verdana, Sans-serif;
	font-size: 12px;
	background-color: #DEFFAF;
	border: 1px solid #ACD919;
	color: #444444;
	display: block;
	margin: 14px 0 14px 0;
	padding: 12px 10px 12px 10px;
}

pre {
	font-family: Monaco, Verdana, Sans-serif;
	font-size: 12px;
	background-color: #f9f9f9;
	border: 1px solid #D0D0D0;
	color: #002166;
	display: block;
	margin: 14px 0 14px 0;
	padding: 12px 10px 12px 10px;
}

</style>
</head>
<body>

<h1>SQL Syntax Error</h1>

<p>This error page generate dynamically by this framework.</p>

<p>We found SQL syntax error:</p>
<code><?php echo $error_msg; ?></code>

<p>To solve this problem, please check model function usage under the model file:</p>
<code class='code'><?php echo CONTROLLER_NAME; ?>.php</code>

<p>Locate the model file under:</p>
<code class='code'><?php echo APPDIR . 'models' . DS; ?></code>

<p>Stack Trace</p>
<pre class="code">
<?php echo $error_trace; ?>
</pre>
</body>
</html>