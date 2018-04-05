<?php
require_once('../../config.php');
global $CFG, $PAGE;

// create a page 
$PAGE->set_context(context_system::instance());
$PAGE->set_pagelayout('standard');
$PAGE->set_title('form area');
$PAGE->set_heading('Please add a text');
$PAGE->set_url($CFG->wwwroot . '/local/my_custom_form/index.php');
echo $OUTPUT->header();


require_once("$CFG->libdir/formslib.php");

class my_custom_form extends moodleform {

    //Add elements to form
    public function definition() {

        $mform = $this->_form; // Don't forget the underscore! 

        $mform->addElement('textarea', 'text', 'text', 'wrap="virtual" rows="20" cols="50"');
        $mform->addRule('text', null, 'required', null, 'client');

        $mform->setType('text', PARAM_NOTAGS);                   //Set type of element
        $mform->setDefault('email', 'Please add a dumy data');

        $mform->addElement('submit', 'intro', "Submit");
    }

//    //Custom validation should be added here
//    function validation($data, $files) {
//        return array();
//    }
}

//instantiate the form and displaying it
//$mforms = new my_custom_form();
 $mforms = new my_custom_form($CFG->wwwroot . '/local/my_custom_form/post.php');
$mforms->display();

?>

<!--<form method="post" action="post.php">

    <input type="text" name="text">
    <input type="hidden" name="date" value="//<?php // echo date("Y/m/d"); ?>">
    <button type="submit">Send</button>
</form>-->

<?php
echo $OUTPUT->footer();
