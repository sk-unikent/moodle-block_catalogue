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
 * @copyright  Brice Errandonea <brice.errandonea@u-cergy.fr>, Salma El-mrabah <salma.el-mrabah@u-cergy.fr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 *
 * File : lang/en/block_catalogue.php
 * English strings.
 */

defined('MOODLE_INTERNAL') || die();
$string['pluginname'] = 'Catalogue';
$string['catalogue'] = 'Catalogue';
$string['config_blocktitle_default'] = 'Catalogue';
$string['catalogue:addinstance'] = 'Add a new Catalogue block';
$string['catalogue:myaddinstance'] = 'Add a new Catalogue block to the My Moodle page';
$string['catalogue:view'] = 'View the catalogue block';
$string['catalogue:viewlists'] = 'View the catalogue\'s lists (and not just the favorites)';
$string['catalogue:edit'] = 'Edit descriptions and links in the catalogue block';
$string['catalogue:togglefav'] = 'Add or remove favorites in block Catalogue';
$string['catalogue:togglehide'] = 'Hide or show elements in block Catalogue';
$string['addnew'] = 'Adding a new ';
$string['chooseplace'] = 'Please choose a section';
$string['sortorder'] = 'Sort order';
$string['hover'] = 'Hover a description with your mouse to read complete text';
$string['doc'] = 'Documentation';
$string['favorites'] = 'Favorites';
$string['favorites_help'] = 'You can add or remove favorites by visiting the above categories.';
$string['nofavs'] = 'You haven\'t declared any favorite yet.';
$string['on_fav'] = 'Add to favorites';
$string['off_fav'] = 'Remove from favorites';
$string['on_hide'] = 'Hide';
$string['off_hide'] = 'Show';
$string['maintitle'] = 'Block main title';
$string['descmaintitle'] = 'The title displayed on top of your block';
$string['headerconfig'] = 'Catalogue blocks settings';
$string['descconfig'] = 'Please choose which lists will be displayed in the catalogue blocks, and in which order.';
$string['displayedlists'] = 'Displayed lists';
$string['descdisplayedlists'] = 'Possible values : activities, blocks, customlabels (requires mod_customlabel), enrols, grades, mods(activities and resources together), reports, resources, sections. Write them with no blanck space, separated by commas.';
$string['getremotedata'] = 'Look for remote data';
$string['descgetremotedata'] = 'If set, will search the Moodle online documentation and the Moodle plugin directory for data about the items in the catalogue, causing a longer loading delay for the page. Once found, a data is stored locally and not searched anymore.';
$string['bgcolor'] = 'Background color';
$string['descbgcolor'] = 'Will appear in the block, behind the icons.';
$string['courseviewonly'] = 'Course home pages only.';
$string['desccourseviewonly'] = 'If set, the block will only appear on course home pages. If not, it can show up anywhere on the site, depending on the user\'s capabilities in the given context.';
$string['edit1'] = 'Close manager interface';
$string['edit0'] = 'Open manager interface';
$string['activities_listname'] = 'Activities';
$string['activities_exercise'] = 'Exercises';
$string['activities_collaborative'] = 'Collaboration';
$string['activities_resource'] = 'Resources';
$string['activities_other'] = 'Other';
$string['activities_use'] = 'Add to course';
$string['blocks_listname'] = 'Blocks';
$string['blocks_monitor'] = 'Monitor learners';
$string['blocks_communicate'] = 'Communicate with learners';
$string['blocks_other'] = 'Other blocks';
$string['blocks_use'] = 'Add new';
$string['blocks_description_activity_modules'] = 'An activity is generally an interactive learning segment for a student in a course. The teacher adds activities by a pull down menu found in their course\'s sections when the edit mode is turned on.';
$string['blocks_description_calendar_upcoming'] = 'The Upcoming events block displays future events in a summarized list.';
$string['blocks_description_comments'] = 'The comments block can be added to any page to allow users to add comments.';
$string['blocks_description_community'] = 'The community finder block enables users to access public community hubs, such as MOOCH, and search for courses to download or enrol in.';
$string['blocks_description_blog_menu'] = 'The blog menu block provides links to View all my entries Add a new entry plus context-sensitive links for adding an entry about the course or a particular activity.';
$string['blocks_description_blog_tags'] = "A Blog Tags block displays a list of blogs where font size visually indicates each blog's use.";
$string['blocks_description_course_summary'] = "The course/site summary block provides a summary and/or description for your course as contained in the summary text of the course settings.";
$string['blocks_description_feedback'] = "The Feedback block may be added to courses to provide a quick link to global feedback activities which have been set up from the front page.";
$string['blocks_description_glossary_random'] = "The random glossary block can be used to display random entries from a glossary, which usually take the form of dictionary style definitions.";
$string['blocks_description_login'] = "The Login block provides logged out users an in-site area to enter their Username and Password and login, Create a new account or retrieve/reset their password.";
$string['blocks_description_participants'] = "Participants are the teachers and students who are part of a course.";
$string['blocks_description_myprofile'] = "The logged in user block displays certain information about the user who is currently logged in to a Moodle course.";
$string['blocks_description_course_main_menu'] = "The Course Menu block for Moodle provides navigation between course sections (topics/weeks)";
$string['blocks_description_mnet_hosts'] = "The Network Servers block allows you to roam to other Moodle (or Mahara) servers.";
$string['blocks_description_settings'] = "The settings block provides context-sensitive links to settings pages.";
$string['blocks_description_course_contents'] = "Course contents block produces a table of contents for the course - that is a list of all visible sections (topics or weeks) in the course.";
$string['blocks_description_course_list'] = "The Courses block lists and allows navigation between all of the courses in which the logged in user is a participant (as tutor and/or student).";
$string['blocks_description_course_overview'] = "The Course overview block is visible on a user's My home page and shows a list of all courses in which a user is enrolled/has an assigned role.";
$string['blocks_description_html'] = "A HTML block is a standard block used to add text or images on a site or course page. The title bar can be left blank.";
$string['blocks_description_private_files'] = "The My private files block enables access to a user's private files area.";
$string['blocks_description_blog_recent'] = "This block can be configured to display the last N blog entries, filtered by context.";
$string['blocks_description_quiz_results'] = "The quiz results block displays the highest and/or lowest grades achieved on a quiz within a course. There must be a quiz in the course to correctly configure this block.";
$string['blocks_description_recent_activity'] = "The Recent activity block lists course activity, such as updated resources and activities, forum posts and assignment submissions, since the user last accessed the course.";
$string['blocks_description_section_links'] = "The Section links block helps the student or teacher to quickly navigate to a particular topic/week section of the course.";
$string['blocks_description_site_main_menu'] = "The main menu block can be added to the front page of the site by a site administrator.";
$string['blocks_description_social_activities'] = "This block enables additional activities to be added to a course in social format.";
$string['blocks_description_activity_results'] = "The Activity results block displays results from graded or rated activities in a course.";
$string['blocks_description_calendar_month'] = "Displays events for the current month.";
$string['blocks_description_online_users'] = "The Online users block shows a list of users who have been logged into the current course.";
$string['blocks_description_mentees'] = "A Mentees block is a frontpage block that provides mentors with quick access to their mentee(s) profile page(s).";
$string['blocks_description_completionstatus'] = "The course completion status block shows what has been done towards completing the course. The student and teacher will both see this block.";
$string['blocks_description_messages'] = "The message block displays a list of new messages you have received, with a link to your Messages window.";
$string['blocks_description_rss_client'] = "The RSS feeds block enables RSS feeds from external websites to be displayed within Moodle.";
$string['blocks_description_search_forums'] = "The Search forum block allows you to search the course forums for a word or phrase. Type the word or phrase you want to find in the text field space.";
$string['blocks_description_selfcompletion'] = "The self completion block provides a link for students to declare that they have completed the course. This may be part of the Course completion requirements.";
$string['blocks_description_badges'] = "The latest badges block can be added to the Site front page, a user's Dashboard or a course page and will display badges earned.";
$string['blocks_description_news_items'] = "Recent posts made in the News forum are displayed in the Latest news block, along with a link to older archived news.";
$string['blocks_description_navigation'] = "The navigation block appears on every page of the site. It contains an expanding tree menu which includes My Home, Site Pages, My Profile, and Courses.";
$string['blocks_description_tag_youtube'] = "The Youtube block can only be added to a Tags page. Once you have edited your Profile or made a Blog entry and provided key words in the interests' portion, these words become tags.";
$string['blocks_description_tag_flickr'] = "The Flickr block can only be added to a Tags page. The Flickr block settings allow you to change the images that are displayed in the block based on Relevance (default), Date Posted, Date Taken and Interestingness.";
$string['blocks_description_tags'] = "A very effective way of viewing all tags is in a tags block, or tag cloud. A unique feature of tag clouds are that the size of each tag is related to the number of items associated with it.";
$string['blocks_description_admin_bookmarks'] = "The intent of this block is to bookmark pages so that an administrator role can see them as a list of links.";
$string['blocks_link_activity_modules'] = 'en/Activities_block';
$string['blocks_link_activity_results'] = 'en/Activity_results_block';
$string['blocks_link_admin_bookmarks'] = 'en/Admin_bookmarks_block';
$string['blocks_link_badges'] = 'en/My_latest_badges_block';
$string['blocks_link_blog_menu'] = 'en/Blog_menu_block';
$string['blocks_link_blog_recent'] = 'en/Recent_blog_entries_block';
$string['blocks_link_blog_tags'] = 'en/Blog_tags_block';
$string['blocks_link_calendar_month'] = 'en/Calendar_block';
$string['blocks_link_calendar_upcoming'] = 'en/Upcoming_events_block';
$string['blocks_link_comments'] = 'en/Comments_block';
$string['blocks_link_community'] = 'en/Community_finder_block';
$string['blocks_link_completionstatus'] = 'en/Course_completion_status_block';
$string['blocks_link_course_list'] = 'en/Courses_block';
$string['blocks_link_course_overview'] = 'en/Course_overview_block';
$string['blocks_link_feedback'] = 'en/Feedback_block';
$string['blocks_link_glossary_random'] = 'en/Random_glossary_entry_block';
$string['blocks_link_html'] = 'en/HTML_block';
$string['blocks_link_login'] = 'en/Login_block';
$string['blocks_link_mentees'] = 'en/Mentees_block';
$string['blocks_link_messages'] = 'en/Messages_block';
$string['blocks_link_mnet_hosts'] = 'en/Network_servers_block';
$string['blocks_link_myprofile'] = 'en/Logged_in_user_block';
$string['blocks_link_navigation'] = 'en/Navigation_block';
$string['blocks_link_news_items'] = 'en/Latest_news_block';
$string['blocks_link_online_users'] = 'en/Online_users_block';
$string['blocks_link_participants'] = 'en/People_block';
$string['blocks_link_private_files'] = 'en/Private_files_block';
$string['blocks_link_quiz_results'] = 'en/Quiz_results_block';
$string['blocks_link_recent_activity'] = 'en/Recent_activity_block';
$string['blocks_link_rss_client'] = 'en/Remote_RSS_feeds_block';
$string['blocks_link_search_forums'] = 'en/Search_forums_block';
$string['blocks_link_section_links'] = 'en/Section_links_block';
$string['blocks_link_selfcompletion'] = 'en/Self_completion_block';
$string['blocks_link_site_main_menu'] = 'en/Main_menu_block';
$string['blocks_link_social_activities'] = 'en/Social_activities_block';
$string['blocks_link_tags'] = 'en/Tags_block';
$string['blocks_link_tag_flickr'] = 'en/Flickr_block';
$string['blocks_link_tag_youtube'] = 'en/Youtube_block';
$string['customlabels_listname'] = 'Custom labels';
$string['customlabels_pedagogic'] = 'Pedagogy elements';
$string['customlabels_structure'] = 'Structural elements';
$string['customlabels_other'] = 'Other elements';
$string['customlabels_use'] = 'Add new';
$string['customlabels_help_singular'] = 'Please use this to display a';
$string['customlabels_help_plural'] = 'Please use this to display';
$string['customlabels_inyourcourse'] = 'in your course.';
$string['customlabels_doclink'] = 'https://docs.moodle.org/26/en/Customlabel_module_%28Course_elements%29';
$string['enrols_listname'] = 'Enrolments';
$string['enrols_methods'] = 'Enrolment methods';
$string['enrols_users'] = 'Users and groups';
$string['enrols_use'] = 'Check';
$string['enrols_manualenrol'] = 'Manual enrolment';
$string['enrols_description_user_index'] = 'Course users list. Learners can view it.';
$string['enrols_description_group_index'] = 'Manage groups and groupings.';
$string['enrols_description_enrol_users'] = 'Manually enrol or unenrol a course user.';
$string['enrols_description_report_roster'] = 'Roster with the learners avatars.';
$string['enrols_description_enrol_vet'] = "Enrol a whole class in the course.";
$string['enrols_description_enrol_self_edit'] = "Set a passwords for the students to enrol themselves in this course.";
$string['enrols_description_mass_enroll'] = "Massive enrolment from a CSV file.";
$string['enrols_description_group_copygroup'] = "Import groups from another course.";
$string['enrols_description_block_demands'] = "If students asked for enrolment in this course, answer them here.";
$string['grades_listname'] = 'Grades';
$string['grades_gradereport'] = 'Grade reports';
$string['grades_gradesetting'] = 'Grade settings';
$string['grades_outcome'] = 'Outcomes, competencies, badges';
$string['grades_use'] = 'Check';
$string['grades_mybadges'] = 'My badges';
$string['grades_categoriesanditems'] = 'Categories and items';
$string['grades_description_gradesetting_scale'] = "A scale is a list of grades a learner can receive in this course activities.";
$string['grades_description_gradesetting_tree'] = "Adjust weights for each graded activity.";
$string['grades_description_gradesetting_letter'] = "Letter grades (A, B, C, D, E, F)";
$string['grades_description_gradesetting_settings'] = "Settings for the gradebook.";
$string['grades_description_gradereport_singleview'] = "Check grades for one student in one activity.";
$string['grades_description_gradereport_history'] = "A grader report for Moodle that allows you to view an audit trail of what happened to grades overtime.";
$string['grades_description_gradereport_overview'] = "Global view of a student's grades in all his online courses (depending on your viewing rights).";
$string['grades_description_gradereport_grader'] = "Gradebook for this course.";
$string['grades_description_gradereport_user'] = "Grades for one student in this course.";
$string['grades_description_badges_mybadges'] = "Check my own badges.";
$string['grades_description_badges_index'] = "Create and manage badges for this course.";
$string['grades_description_gradesetting_outcome'] = "Shows outcomes defined on the site and available for your course.";
$string['grades_description_gradesetting_outcomecourse'] = "Manage which outcomes are used in your course.";
$string['grades_description_gradereport_outcomes'] = "Shows how well each course outcome has been achieved by students.";
$string['reports_listname'] = 'Reports';
$string['reports_report'] = 'Reports';
$string['reports_use'] = 'Check';
$string['reports_description_report_progress'] = "Did this learner complete/view this activity/resource ?";
$string['reports_description_report_completion'] = "Shows a student's progress through the course, against specific criteria.";
$string['reports_description_report_outline'] = "Shows all the activities and resources in the course, sorted out by section.";
$string['reports_description_report_log'] = "Lists the actions performed in this course by the learners and teachers.";
$string['reports_description_report_loglive'] = "To follow the actions performed right now in the course.";
$string['reports_description_report_engagement'] = "Follow the students engagement against a set of indicators.";
$string['reports_description_report_participation'] = "Shows the learners participation in the course, sorted by activity module, status and group.";
$string['reports_description_report_stats'] = "Some figures about the course.";
$string['reports_description_report_exportlist'] = "Export the students list for a group (or the whole course) as a CSV file.";
$string['reports_description_report_courseoverview'] = "Shows in which courses a given user is enroled, with notes if there are things to do in theses courses.";
$string['reports_description_report_roster'] = 'Roster of the students. Names can be hidden to help you learn them.';
$string['resources_listname'] = 'Resources';
$string['resources_resource'] = 'Resources';
$string['resources_use'] = 'Add to course';
$string['mods_listname'] = 'Modules';
$string['mods_resource'] = 'Resources';
$string['mods_exercise'] = 'Exercises';
$string['mods_collaborative'] = 'Collaboration';
$string['mods_other'] = 'Other';
$string['mods_use'] = 'Add to course';
$string['sections_listname'] = 'Sections';
$string['sections_coursesections'] = 'Course sections';
$string['sections_use'] = 'OK';
$string['sections_goto'] = 'Table of contents';
$string['sections_add'] = 'Add section';
$string['sections_edit'] = 'Edit section';
$string['sections_delete'] = 'Delete section';
$string['sections_highlight'] = 'Highlight section';
$string['sections_hideshow'] = 'Hide/show section';
$string['sections_picture'] = 'Change section picture';
$string['sections_description_goto'] = 'Browse to the section you want.';
$string['sections_description_add'] = 'Add a new section to the course.';
$string['sections_description_edit'] = 'Edit the title or the description of a section.';
$string['sections_description_delete'] = 'Definetely delete a given section and all its content.';
$string['sections_description_highlight'] = 'Choose which section of the course you want to highlight for now.';
$string['sections_description_hideshow'] = 'Change the visibility of a section.';
$string['sections_description_picture'] = 'Change section picture';
$string['here'] = 'Here';
