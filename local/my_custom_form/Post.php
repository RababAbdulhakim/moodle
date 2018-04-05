<?php

require_once('../../config.php');

global $DB;

// posting the data

$record = new stdClass();
$record->text = $_POST['text'];
$record->date = date("Y/m/d");

$lastinsertid = $DB->insert_record('local_my_custom_form', $record);
if ($lastinsertid) {
    
     redirect("index.php");
}