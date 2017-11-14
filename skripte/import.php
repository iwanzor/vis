<?php 
	if (isset($_POST['submitCsv'])) {
	            $mimes = array('application/vnd.ms-excel','text/plain','text/csv','text/tsv');
	            if(in_array($_FILES['csvfile']['type'],$mimes)){
	                $handle = fopen($_FILES['csvfile']['tmp_name'], "r");
	                $data = fgetcsv($handle, 1000, ",");
	                $i=0;
	                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
	                   $id=$data[0];
	                   if ($id!=0) {
		                   $sql="SELECT id FROM table1 WHERE id='$id'";
		                   $q=$mysqli->query($sql);
		                   $red=$q->fetch_object();
		                   if(!empty($red->id)) {
		                   	$sql1="DELETE FROM table1 WHERE id='$id'";
		                   	$q1=$mysqli->query($sql1);
		                   } 
		                   $sql2="INSERT INTO table1 (id, nationality, country, office, visatype, document, description, note, document_de, note_de) VALUES ('".$data[0]."','".$data[1]."','".$data[2]."','".$data[3]."','".$data[4]."' ,'".$data[5]."' ,'".$data[6]."','".$data[7]."','".$data[8]."','".$data[9]."')";
		                   $q2=$mysqli->query($sql2);
		                }
	                   $i++;

	                }

	                fclose($handle);
	                echo '<script type="text/javascript">';
	                echo 'setTimeout(function () {swal({   
	                   title: "Success",   
	                   text: "CSV is successfully imported!",   
	                   type: "success",   
	                   showCancelButton: false,   
	                   confirmButtonColor: "#DD6B55",   
	                   confirmButtonText: "OK!",   
	                   cancelButtonText: "Cancel!",   
	                   closeOnConfirm: true,   
	                   closeOnCancel: false 
	               }, 
	               function(isConfirm){
	                 if (isConfirm) {
	                    window.location="data.php";
	               } 
	                });';
	                echo '}, 1000);</script>';
	            } else {
	              echo '<script type="text/javascript">';
	              echo 'setTimeout(function () {swal("Warning!","Sorry, only CSV files are allowed.", "error");';
	              echo '}, 1000);</script>';
	            }
	            

	        }

?>