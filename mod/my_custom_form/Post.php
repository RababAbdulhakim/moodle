<?php
var_dump($_POST);
global $DB;
$record = new stdClass();
$record->text         = 'overview';
$record->date = date("Y/m/d");
$lastinsertid = $DB->insert_record('mdl_custom_rabab', $record, false);