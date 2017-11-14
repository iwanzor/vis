
/*
 * Editor client script for DB table table1
 * Created by http://editor.datatables.net/generator
 */

(function($){

$(document).ready(function() {
	var editor = new $.fn.dataTable.Editor( {
		ajax: 'php/table.table1.php',
		table: '#table1',
		fields: [
			{
				"label": "id:",
				"name": "id"
			},
			{
				"label": "nationality:",
				"name": "nationality"
			},
			{
				"label": "country:",
				"name": "country"
			},
			{
				"label": "office:",
				"name": "office"
			},
			{
				"label": "visatype:",
				"name": "visatype"
			},
			{
				"label": "document:",
				"name": "document"
			},
			{
				"label": "description:",
				"name": "description"
			},
			{
				"label": "note:",
				"name": "note"
			},
			{
				"label": "document_de:",
				"name": "document_de"
			},
			{
				"label": "note_de:",
				"name": "note_de"
			}
		]
	} );

	var table = $('#table1').DataTable( {
		dom: 'Bfrtip',
		ajax: 'php/table.table1.php',
		columns: [
			{
				"data": "id"
			},
			{
				"data": "nationality"
			},
			{
				"data": "country"
			},
			{
				"data": "office"
			},
			{
				"data": "visatype"
			},
			{
				"data": "document"
			},
			{
				"data": "description"
			},
			{
				"data": "note"
			},
			{
				"data": "document_de"
			},
			{
				"data": "note_de"
			}
		],
		select: true,
		lengthChange: true,
		buttons: [
			{ extend: 'create', editor: editor },
			{ extend: 'edit',   editor: editor },
			{ extend: 'remove', editor: editor }
		]
	} );
} );

}(jQuery));

