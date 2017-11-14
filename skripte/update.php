<?php
include "konekcija.php";
$mysqli = new mysqli($db_server, $db_user, $db_pass, $db_db);
if ($mysqli->connect_error) {
    die("err");
} 

switch ($_REQUEST ['columnId']){

	case 1:
		$sql = "UPDATE table1 SET nationality='".$_REQUEST['value']."' WHERE id=".$_REQUEST['id'];
	break;
	case 2:
		$sql = "UPDATE table1 SET country='".$_REQUEST['value']."' WHERE id=".$_REQUEST['id'];
	break;
	case 3:
		$sql = "UPDATE table1 SET office='".$_REQUEST['value']."' WHERE id=".$_REQUEST['id'];
	break;
	case 4:
		$sql = "UPDATE table1 SET visatype='".$_REQUEST['value']."' WHERE id=".$_REQUEST['id'];
	break;
	case 5:
		$sql = "UPDATE table1 SET document='".$_REQUEST['value']."' WHERE id=".$_REQUEST['id'];
	break;
	case 5:
		$sql = "UPDATE table1 SET description='".$_REQUEST['value']."' WHERE id=".$_REQUEST['id'];
	break;
	case 6:
		$sql = "UPDATE table1 SET note='".$_REQUEST['value']."' WHERE id=".$_REQUEST['id'];
	break;
	case 7:
		$sql = "UPDATE table1 SET document_de='".$_REQUEST['value']."' WHERE id=".$_REQUEST['id'];
	break;
	case 7:
		$sql = "UPDATE table1 SET note_de='".$_REQUEST['value']."' WHERE id=".$_REQUEST['id'];
	break;

}

if ($mysqli->query($sql) === TRUE) {
    echo $_REQUEST["value"];
} else {
    echo "err";
}

$mysqli->close();

?>
