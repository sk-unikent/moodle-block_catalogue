<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Initially developped for :
 * Université de Cergy-Pontoise
 * 33, boulevard du Port
 * 95011 Cergy-Pontoise cedex
 * FRANCE
 *
 * Displays a catalogue of all the blocks, modules, reports and customlabels the teacher can use in his course.
 *
 * @package    block_catalogue
 * @author     Brice Errandonea <brice.errandonea@u-cergy.fr>, Salma El-mrabah <salma.el-mrabah@u-cergy.fr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 * File : index.php
 * Main catalogue page
 */

require_once('../../config.php');
require_once('lib.php');
global $DB, $OUTPUT, $PAGE, $USER;

// Check params.
$thislistname = required_param('name', PARAM_ALPHA);
$courseid = required_param('course', PARAM_INT);
$elementname = optional_param('element', '', PARAM_TEXT);
$edit = optional_param('edit', '', PARAM_ALPHA);
$newvalue = optional_param('newvalue', '', PARAM_TEXT);
$editing = optional_param('editing', 0, PARAM_INT);

$course = get_course($courseid);
require_login($course);
$coursecontext = context_course::instance($courseid);
$usereditor = has_capability('block/catalogue:edit', $coursecontext);
$thislist = block_catalogue_instanciate_list($thislistname);
$open = $thislist->get_open();
$categories = $thislist->get_categories();
$availables = $thislist->get_availables();
?>

<script src="<?php echo $CFG->wwwroot; ?>/blocks/catalogue/js/block_catalogue.js"></script>

<style>
    <?php
    require_once('block_catalogue.css');
    ?>
</style>

<?php
// Apply changes.
$usedcategory = null;
if ($edit && $elementname && $usereditor && confirm_sesskey() && data_submitted()) {
    block_catalogue_update_element($thislistname, $elementname, $edit, $newvalue);
    foreach ($categories as $category) {
        $categorymembers = $availables[$category];
        if (in_array($elementname, $categorymembers)) {
            $usedcategory = $category;
        }
    }
    reset($categories);
}

// Header code.
$args = array('name' => $thislistname, 'course' => $courseid);
$moodlefilename = '/blocks/catalogue/index.php';
$PAGE->set_url($moodlefilename, $args);
$thislistlocalname = $thislist->get_localname();
$PAGE->set_title($thislistlocalname);
$PAGE->set_pagelayout('standard');
$PAGE->set_heading($thislistlocalname);

// Manager interface button.
if ($usereditor) {
    $editlink = $CFG->wwwroot.$moodlefilename.'?name='.$thislistname.'&course='.$courseid;
    if ($editing) {
        $editlink .= '&editing=0';
    } else {
        $editlink .= '&editing=1';
    }
    $editlabel = get_string("edit$editing", 'block_catalogue');
    $PAGE->set_button($OUTPUT->single_button($editlink, $editlabel));
    $usereditor = $editing;
}

// Header with tabs.
echo $OUTPUT->header();
block_catalogue_display_tabs($courseid, $thislistname, $editing);

// Main content.
foreach ($categories as $category) {
    if ($availables[$category]) {
        $categorylocalname = $thislist->langstring($category);
        ?>
        <br>
        <div onclick="flipflop('<?php echo "$categorylocalname"; ?>');" class='block_catalogue_flipflop'>
            <?php echo $categorylocalname; ?>
            <img src ="pix/open.png" alt="open" style="float: right"  height="15" width="15">
        </div>
        <?php
        if (($category == $usedcategory)||$open) {
            $display = 'block';
        } else {
            $display = 'none';
        }
        echo "<div id ='$categorylocalname' style='width:100%;display:$display'><br>";
        echo "<div class='block_catalogue_categorycontent'>";

        if (!$editing) {
            echo '<div class="block_catalogue_hoverlabel">';
            echo get_string('hover', 'block_catalogue');
            echo '</div>';
        }
        block_catalogue_display_category($course, $usereditor, $thislist, $availables[$category]);

        echo '</div>';
        echo '</div>';
    }
}

// Footer.
echo $OUTPUT->footer();
