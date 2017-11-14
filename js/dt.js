$(document).ready(function(){
	$("#tabela").dataTable({
        responsive: false,
        "language": {
            "url": "DataTables-1.10.4/i18n/serbian.json"
        }



    }).makeEditable({
      sDeleteURL: "skripte/delete.php",
      sUpdateURL: "skripte/update.php",
      sDeleteHttpMethod: "GET"

  });
});