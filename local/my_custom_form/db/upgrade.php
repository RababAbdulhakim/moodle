

<?php
 
function xmldb_my_custom_form_upgrade($oldversion) {
    global $CFG;
 
    $result = TRUE;
 
// Insert PHP code from XMLDB Editor here
     if ($oldversion < XXXXXXXXXX) {

        // Define table local_my_custom_form to be created.
        $table = new xmldb_table('local_my_custom_form');

        // Adding fields to table local_my_custom_form.
        $table->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE, null);
        $table->add_field('text', XMLDB_TYPE_CHAR, '55', null, null, null, null);
        $table->add_field('date', XMLDB_TYPE_CHAR, '55', null, null, null, null);

        // Adding keys to table local_my_custom_form.
        $table->add_key('primary', XMLDB_KEY_PRIMARY, array('id'));

        // Conditionally launch create table for local_my_custom_form.
        if (!$dbman->table_exists($table)) {
            $dbman->create_table($table);
        }

        // My_custom_form savepoint reached.
        upgrade_plugin_savepoint(true, XXXXXXXXXX, 'local', 'my_custom_form');
    }

    return $result;
}
?>