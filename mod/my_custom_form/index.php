<?php

require_once('../../config.php');
global $CFG, $PAGE;

$PAGE->set_context(context_system::instance());
$PAGE->set_pagelayout('standard');
$PAGE->set_title('Form name');
$PAGE->set_heading('Form name');
$PAGE->set_url($CFG->wwwroot.'/local/my_custom_form/index.php');
echo $OUTPUT->header();

?>

<form method="post" action="post.php">

    <input type="text" name="text">
    <input type="hidden" name="date" value="<?php echo date("Y/m/d");?>">
    <button type="submit">Send</button>
</form>

<?php


echo $OUTPUT->footer();
