<!DOCTYPE html>
<html>
<head>
	<title>CSV Importer</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Uključivanje Bootstrap css fajla -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
	<link rel="stylesheet" type="text/css" href="DataTables-1.10.4/media/css/jquery.dataTables.min.css" />
	<link rel="stylesheet" href="css/css.css">
	<?php 
			include "skripte/konekcija.php";
			$sql="SELECT * FROM table1";
          	$q=$mysqli->query($sql);
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
					<h2>Data</h2>
					<div class="table-responsive">
						<table id="tabela" class="table-responsive table-bordered table-striped table-hover">
						 <thead>
						          <tr>
						          	<th>ID</th>
						            <th>Nationality</th>
						            <th>Country</th>
						            <th>Office</th>
						            <th>Visa Type</th>
						            <th>Document</th>
						            <th>Description</th>
						            <th>Note</th>
						            <th>Document (DE)</th> 
						            <th>Note (DE)</th>  
						          </tr>
						        </thead>
						<tbody>
						  <?php
						          while ($red=$q->fetch_object()){
						            ?>
						 <tr id="<?php echo $red->id; ?>">
						 			<td><?php echo $red->id; ?></td>
						    		<td><?php echo $red->nationality; ?></td>
						            <td><?php echo $red->country; ?></td>
						            <td><?php echo $red->office; ?></td>
						            <td><?php echo $red->visatype; ?></td>
						            <td><?php echo $red->document; ?></td>
						            <td><?php echo $red->description; ?></td>
						            <td><?php echo $red->note; ?></td>
						            <td><?php echo $red->document_de; ?></td>
						            <td><?php echo $red->note_de; ?></td>
						          </tr>
						          <?php
						           } 
						          ?>
						</tbody>
						</table>
					</div>
				</div>
			</div>
			<button class="btn btn-primary" id="btnDeleteRow">Delete</button>
		</div>
	</div>



	
	<!-- Ukljucivanje JS biblioteka -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="https://use.fontawesome.com/56181d7858.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
	<script src="DataTables-1.10.4/media/js/jquery.dataTables.min.js"></script>
	<script src="js/jquery.jeditable.mini.js"></script>
	<script src="DataTables-1.10.4/extensions/editable/jquery.dataTables.editable.js"></script>
	<script src="js/dt.js"></script>
</body>
</html>