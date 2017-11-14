<!DOCTYPE html>
<html>
<head>
	<title>CSV Importer</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Uključivanje Bootstrap css fajla -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
	<?php 
			include "skripte/konekcija.php";
            include "skripte/import.php";
     ?>
</head>
<body>
	<div class="container">
		<!-- Navigaioni bar -->
		<nav class="navbar navbar-default navbar-inverse">
		  <div class="container">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="index.php">Vis</a>
		    </div>

		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li class="active"><a href="#">Početna <span class="sr-only">(current)</span></a></li>
		        <li><a href="data.php">Data</a></li>
		      </ul>
		    </div>
		  </div>
		</nav>
		<div class="row">
			<div class="col-lg-12">
				<div class="jumbotron">
				  <h1>CSV Importer</h1>
				  <p>In computing, a comma-separated values (CSV) file stores tabular data (numbers and text) in plain text. Each line of the file is a data record. Each record consists of one or more fields, separated by commas. The use of the comma as a field separator is the source of the name for this file format.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="well">
					<h2>Upload CSV</h2>
					<form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Choose file</label>
                            <input type="file" class="form-control" name="csvfile"  placeholder="Csv File">
                   		</div>
                   <button type="submit" name="submitCsv" class="btn btn-success"><i class="fa fa-upload"></i> Upload</button>
                   </form>
				</div>
			</div>
		</div>
	</div>



	
	<!-- Ukljucivanje JS biblioteka -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="https://use.fontawesome.com/56181d7858.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
</body>
</html>