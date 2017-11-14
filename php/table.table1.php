<?php

/*
 * Editor server script for DB table table1
 * Created by http://editor.datatables.net/generator
 */

// DataTables PHP library and database connection
include( "lib/DataTables.php" );

// Alias Editor classes so they are easy to use
use
	DataTables\Editor,
	DataTables\Editor\Field,
	DataTables\Editor\Format,
	DataTables\Editor\Mjoin,
	DataTables\Editor\Options,
	DataTables\Editor\Upload,
	DataTables\Editor\Validate;

// The following statement can be removed after the first run (i.e. the database
// table has been created). It is a good idea to do this to help improve
// performance.
$db->sql( "CREATE TABLE IF NOT EXISTS `table1` (
	`id` int(10) NOT NULL auto_increment,
	`nationality` varchar(255),
	`country` varchar(255),
	`office` varchar(255),
	`visatype` varchar(255),
	`document` varchar(255),
	`description` varchar(255),
	`note` varchar(255),
	PRIMARY KEY( `id` )
);" );

// Build our Editor instance and process the data coming from _POST
Editor::inst( $db, 'table1', 'id' )
	->fields(
		Field::inst( 'id' ),
		Field::inst( 'nationality' ),
		Field::inst( 'country' ),
		Field::inst( 'office' ),
		Field::inst( 'visatype' ),
		Field::inst( 'document' ),
		Field::inst( 'description' ),
		Field::inst( 'note' ),
		Field::inst( 'document_de' ),
		Field::inst( 'note_de' )
	)
	->process( $_POST )
	->json();
