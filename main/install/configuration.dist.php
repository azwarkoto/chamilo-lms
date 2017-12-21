<?php
// Chamilo version {NEW_VERSION}
// File generated by /install/index.php script - {DATE_GENERATED}
/* For licensing terms, see /license.txt */
/**
 * Campus configuration
 *
 * This file contains a list of variables that can be modified by the campus
 * site's server administrator. Pay attention when changing these variables,
 * some changes may cause Chamilo to stop working.
 * If you changed some settings and want to restore them, please have a look at
 * configuration.dist.php. That file is an exact copy of the config file at
 * install time.
 */

/**
 * $_configuration define only the bare essential variables
 * for configuring the platform (paths, database connections, ...).
 * Changing a $_configuration variable CAN generally break the installation.
 * Besides the $_configuration, a $_settings array also exists, that
 * contains variables that can be changed and will not break the platform.
 * These optional settings are defined in the database, now
 * (table settings_current).
 */

/**
 * Database connection settings
 */
// Database host
$_configuration['db_host'] = '{DATABASE_HOST}';
// Database port
$_configuration['db_port'] = '{DATABASE_PORT}';
// Database name
$_configuration['main_database'] = '{DATABASE_MAIN}';
// Database username
$_configuration['db_user'] = '{DATABASE_USER}';
// Database password
$_configuration['db_password'] = '{DATABASE_PASSWORD}';
// Enable access to database management for platform admins.
$_configuration['db_manager_enabled'] = false;

/**
 * Directory settings
 */
// URL to the root of your Chamilo installation, e.g.: http://www.mychamilo.com/
$_configuration['root_web'] = '{ROOT_WEB}';

// Path to the webroot of system, example: /var/www/
$_configuration['root_sys'] = '{ROOT_SYS}';

// Path from your WWW-root to the root of your Chamilo installation,
// example: chamilo (this means chamilo is installed in /var/www/chamilo/
$_configuration['url_append'] = '{URL_APPEND_PATH}';

/**
 * Login modules settings
 */
// CAS IMPLEMENTATION
// -> Go to your portal Chamilo > Administration > CAS to activate CAS
// You can leave these lines uncommented even if you don't use CAS authentification
//$extAuthSource["cas"]["login"] = $_configuration['root_sys']."main/auth/cas/login.php";
//$extAuthSource["cas"]["newUser"] = $_configuration['root_sys']."main/auth/cas/newUser.php";

// NEW LDAP IMPLEMENTATION BASED ON external_login info
// -> Uncomment the two lines bellow to activate LDAP AND edit main/auth/external_login/ldap.conf.php for configuration
// $extAuthSource["extldap"]["login"] = $_configuration['root_sys']."main/auth/external_login/login.ldap.php";
// $extAuthSource["extldap"]["newUser"] = $_configuration['root_sys']."main/auth/external_login/newUser.ldap.php";
//
// FACEBOOK IMPLEMENTATION BASED ON external_login info
// -> Uncomment the line bellow to activate Facebook Auth AND edit app/config/auth.conf.php for configuration
// $_configuration['facebook_auth'] = 1;
//
// OTHER EXTERNAL LOGIN INFORMATION
// To fetch external login information, uncomment those 2 lines and modify  files auth/external_login/newUser.php and auth/external_login/updateUser.php files
// $extAuthSource["external_login"]["newUser"] = $_configuration['root_sys']."main/auth/external_login/newUser.php";
// $extAuthSource["external_login"]["updateUser"] = $_configuration['root_sys']."main/auth/external_login/updateUser.php";

/**
 *
 * Hosting settings - Allows you to set limits to the Chamilo portal when
 * hosting it for a third party. These settings can be overwritten by an
 * optionally-loaded extension file with only the settings (no comments).
 * The settings use an index at the first level to represent the ID of the
 * URL in case you use multi-url (otherwise it will always use 1, which is
 * the ID of the only URL inside the access_url table).
 */
// Set a maximum number of users. Default (0) = no limit
$_configuration[1]['hosting_limit_users'] = 0;
// Set a maximum number of teachers. Default (0) = no limit
$_configuration[1]['hosting_limit_teachers'] = 0;
// Set a maximum number of courses. Default (0) = no limit
$_configuration[1]['hosting_limit_courses'] = 0;
// Set a maximum number of sessions. Default (0) = no limit
$_configuration[1]['hosting_limit_sessions'] = 0;
// Set a maximum disk space used, in MB (set to 1024 for 1GB, 5120 for 5GB, etc)
// Default (0) = no limit
$_configuration[1]['hosting_limit_disk_space'] = 0;
// Set a maximum number of usable courses. Default (0) = no limit.
// Should always be lower than the hosting_limit_courses.
// If set, defining a course as "hidden" will free room for
// new courses (up to the hosting_limit_courses, if any value is set there).
// hosting_limit_enabled_courses is the maximum number of courses that are *not* hidden.
$_configuration[1]['hosting_limit_active_courses'] = 0;
// Email to warn if limit was reached.
//$_configuration[1]['hosting_contact_mail'] = 'example@example.org';
// Portal size limit in MB (set to 1024 for 1GB, 5120 for 5GB, etc).
// Check main/cron/hosting_total_size_limit.php for how to use this limit.
$_configuration['hosting_total_size_limit'] = 0;

/**
 * Content Delivery Network (CDN) settings. Only use if you need a separate
 * server to serve your static data. If you don't know what a CDN is, you
 * don't need it. These settings are for simple Origin Pull CDNs and are
 * experimental. Enable only if you really know what you're doing.
 * This might conflict with multiple-access urls.
 */
// Set the following setting to true to start using the CDN
$_configuration['cdn_enable'] = false;
// The following setting will be ignored if the previous one is set to false
$_configuration['cdn'] = array(
    // You can define several CDNs and split them by extensions
    // Replace the following by your full CDN URL, which should point to
    // your Chamilo's root directory. DO NOT INCLUDE a final slash! (won't work)
    'http://cdn.chamilo.org' => array(
        '.css',
        '.js',
        '.jpg',
        '.jpeg',
        '.png',
        '.gif',
        '.avi',
        '.flv'
    ),
    // copy the line above and modify following your needs
);

/**
 * Misc. settings
 */
// Security word for password recovery
$_configuration['security_key'] = '{SECURITY_KEY}';
// Hash function method
$_configuration['password_encryption'] = '{ENCRYPT_PASSWORD}';
// You may have to restart your web server if you change this
$_configuration['session_stored_in_db'] = false;
// Session lifetime
$_configuration['session_lifetime'] = SESSION_LIFETIME;
// Activation for multi-url access
// When enabling multi-url, settings can be configured by multi-url using a simple
// sub-element. E.g. $_configuration['session_lifetime'][1] = true; could be turned into
// something like $_configuration['session_lifetime'][2] = false; to affect only URL
// with ID 2. The ID can be found in the access_url table.
//$_configuration['multiple_access_urls'] = true;
$_configuration['software_name'] = 'Chamilo';
$_configuration['software_url'] = 'https://chamilo.org/';
// Deny the elimination of users
$_configuration['deny_delete_users'] = false;
// Version settings
$_configuration['system_version'] = '{NEW_VERSION}';
$_configuration['system_stable'] = NEW_VERSION_STABLE;

/**
 * Settings to be included as settings_current in future versions
 */
// Uncomment the following to prevent all admins to use the "login as" feature
//$_configuration['login_as_forbidden_globally'] = true;
// If session_stored_in_db is false, an alternative session storage mechanism
// can be used, which allows for a volatile storage in Memcache, and a more
// permanent "backup" storage in the database, every once in a while (see
// frequency). This is generally used in HA clusters configurations
// This requires memcache or memcached and the php5-memcache module to be setup
//$_configuration['session_stored_in_db_as_backup'] = true;
// Define the different memcache servers available
//$_configuration['memcache_server'] = array(
//    0 => array(
//        'host' => 'chamilo8',
//        'port' => '11211',
//    ),
//    1 => array(
//        'host' => 'chamilo9',
//        'port' => '11211',
//    ),
//);
// Define the frequency to which the data must be stored in the database
//$_configuration['session_stored_after_n_times'] = 10;
// If the database is down this css style will be used to show the errors.
//$_configuration['theme_fallback'] = 'chamilo'; // (chamilo theme)
// The default template that will be use in the system.
//$_configuration['default_template'] = 'default'; // (main/template/default)
// Hide fields in the main/user/user.php page
//$_configuration['hide_user_field_from_list'] = ['fields' => ['username']];
// Aspell Settings
//$_configuration['aspell_bin'] = '/usr/bin/hunspell';
//$_configuration['aspell_opts'] = '-a -d en_GB -H -i utf-8';
//$_configuration['aspell_temp_dir'] = './';
// Custom name_order_conventions
//$_configuration['name_order_conventions'] = array(
// 'french' => array('format' => 'title last_name first_name', 'sort_by' => 'last_name')
//);
// Course log - Default columns to hide
//$_configuration['course_log_hide_columns'] = array(1, 9);
// Unoconv binary file
//$_configuration['unoconv.binaries'] = '/usr/bin/unoconv';
// Proxy settings for access external services
/*$_configuration['proxy_settings'] = [
    'stream_context_create' => [
        'http' => [
            'proxy' => 'tcp://example.com:8080',
            'request_fulluri' => true
        ]
    ],
    'curl_setopt_array' => [
        'CURLOPT_PROXY' => 'http://example.com',
        'CURLOPT_PROXYPORT' => '8080'
    ]
];*/

// E-mail accounts to send notifications to when executing cronjobs - works for main/cron/import_csv.php
//$_configuration['cron_notification_mails'] = array('email@example.com', 'email2@example.com');

// Only shows the fields in this list
/*$_configuration['allow_fields_inscription'] = [
    'fields' => [
        'official_code',
        'phone',
        'status',
        'language'
    ],
    'extra_fields' => [
        'birthday'
    ]
];*/
// Boost option to ignore encoding check for learning paths
//$_configuration['lp_fixed_encoding'] = 'false';
// Fix urls changing http with https in scorm packages.
//$_configuration['lp_replace_http_to_https'] = false;
// Fix embedded videos inside lps, adding an optional popup
//$_configuration['lp_fix_embed_content'] = false;
// Manage deleted files marked with "DELETED" (by course and only by allowed by admin)
//$_configuration['document_manage_deleted_files'] = false;
// Hide tabs in the main/session/index.php page
//$_configuration['session_hide_tab_list'] = array();
// Show invisible exercise in LP list
//$_configuration['show_invisible_exercise_in_lp_list'] = false;
// Chamilo is installed/downloaded. Packagers can change this
// to reflect their packaging method. The default value is 'chamilo'. This will
// be reflected on the https://version.chamilo.org/stats page in the future.
//$_configuration['packager'] = 'chamilo';
// If true exercises added in LP can be modified.
//$_configuration['force_edit_exercise_in_lp'] = false;
// List of driver to plugin in ckeditor
//$_configuration['editor_driver_list'] = ['PersonalDriver', 'CourseDriver'];
// Hide send to hrm users options in announcements
//$_configuration['announcements_hide_send_to_hrm_users'] = true;
// Hide certificate link in index/userportal pages
//$_configuration['hide_my_certificate_link'] = false;
// Hide header and footer in certificate pdf
//$_configuration['hide_header_footer_in_certificate'] = false;
// Security: block direct access from logged in users to contents in OPEN (but not public) courses. Set to true to block
//$_configuration['block_registered_users_access_to_open_course_contents'] = false;
// Allows syncing the database with the current entity schema
//$_configuration['sync_db_with_schema'] = false;
// When exporting a LP, all files and folders in the same path of an html will be exported too.
//$_configuration['add_all_files_in_lp_export'] = false;
// Send exercise student score to manager in email notification
//$_configuration['send_score_in_exam_notification_mail_to_manager'] = false;
// Show blocked LPs by prerequisite to students
//$_configuration['show_prerequisite_as_blocked'] = false;
// Mail header extra HTML attributes
//$_configuration['mail_header_style'] = '';
// Mail body extra HTML attributes
//$_configuration['mail_content_style'] = '';
// Show all agenda events in personal agenda from all session no matter the visibility.
//$_configuration['personal_agenda_show_all_session_events'] = false;
// Allows to redirect to the session after the inscription in session about
// $_configuration['allow_redirect_to_session_after_inscription_about'] = false;
// Allows to do a remove_XSS in course introduction with user status COURSEMANAGERLOWSECURITY
// in order to accept all embed type videos (like vimeo, wistia, etc)
// $_configuration['course_introduction_html_strict_filtering'] = true;
// Prevents the duplicate upload in assignments
// $_configuration['assignment_prevent_duplicate_upload'] = false;
//Show student progress in My courses page
//$_configuration['course_student_info']['score'] = false;
//$_configuration['course_student_info']['progress'] = false;
//$_configuration['course_student_info']['certificate'] = false;
// Set ConsideredWorkingTime work extra field variable to show in MyStudents page works report
// (with internal id 'work_time' as below) and enable the following line to show in MyStudents page works report
// $_configuration['considered_working_time'] = 'work_time';
// During CSV special imports update users emails to x@example.com
// $_configuration['update_users_email_to_dummy_except_admins'] = false;
// Certification pdf export orientation
// $_configuration['certificate_pdf_orientation'] = 'landscape'; // It can be 'portrait' or 'landscape'
// Hide main navigation menu (left column in userportal)
// $_configuration['hide_main_navigation_menu'] = false;
// PDF image dpi value. Default value 96
// $_configuration['pdf_img_dpi'] = 96;
// Hide LP time in reports.
// $_configuration['hide_lp_time'] = false;
// Hide rating elements in pages ("Courses catalog" & "Most Popular courses")
// $_configuration['hide_course_rating'] = false;
// Customize password generation and verification
/*$_configuration['password_requirements'] = [
    'min' => [
        'lowercase' => 2,
        'uppercase' => 2,
        'numeric' => 2,
        'length' => 8
    ]
];*/
// Customize course session tracking columns
/*
$_configuration['tracking_columns'] = [
    'course_session' => [
        'course_title' => true,
        'published_exercises' => true,
        'new_exercises' => true,
        'my_average' => true,
        'average_exercise_result' => true,
        'time_spent' => true,
        'lp_progress' => true,
        'score' => true,
        'best_score' => true,
        'last_connection' => true,
        'details' => true,
    ],
    'my_students_lp' => [
        'lp' => true,
        'time' => true,
        'best_score' => true,
        'latest_attempt_avg_score' => true,
        'progress' => true,
        'last_connection' => true,
    ],
    'my_progress_lp' => [
        'lp' => true,
        'time' => true,
        'progress' => true,
        'score' => true,
        'best_score' => true,
        'last_connection' => true,
    ],
    'my_progress_courses' => [
        'course_title' => true,
        'time_spent' => true,
        'progress' => true,
        'best_score_in_lp' => true,
        'best_score_not_in_lp' => true,
        'latest_login' => true,
        'details' => true
    ]
];
*/
// Hide session link of course_block on index/userportal
//$_configuration['remove_session_url']= false ;
//
//
// ------ AGENDA CONFIGURATION SETTINGS
// Shows a legend in the agenda tool
/*
$_configuration['agenda_legend'] = [
    'red' => 'red caption',
    '#f0f' => 'another caption'
];*/
// Set customs colors to agenda events
/*
$_configuration['agenda_colors'] = [
    'platform' => 'red',
    'course' => '#458B00',
    'group' => '#A0522D',
    'session' => '#00496D',
    'other_session' => '#999',
    'personal' => 'steel blue',
    'student_publication' => '#FF8C00'
];
*/
// ------
//
// Save some tool titles with HTML editor
// $_configuration['save_titles_as_html'] = false;
// Show the full toolbar set to all CKEditor
//$_configuration['full_ckeditor_toolbar_set'] = false;
// Allow change the orientation when export a (course progress) thematic to pdf. Portrait or landscape
//$_configuration['thematic_pdf_orientation'] = 'landscape';
// Show number of users in session list
//$_configuration['session_list_show_count_users'] = false;
// Session admin access to all course content
//$_configuration['session_admins_access_all_content'] = false;
// Adds roles to the system announcements (requires DB change BT#12476)
//$_configuration['system_announce_extra_roles'] = false;
// Limits the features that a session admin has access to from the main admin panel (removes users import and usergroups)
//$_configuration['limit_session_admin_role'] = false;
// Course tools visibility edition in sessions
//$_configuration['allow_edit_tool_visibility_in_session'] = false;
// Enable the support to ODF files
//$_configuration['enabled_support_odf'] = true;
// Pdf orientation when exporting documents
// $_configuration['document_pdf_orientation'] = 'landscape'; // It can be 'portrait' or 'landscape'
// Use alternative footer when exporting document to PDF
//$_configuration['use_alternative_document_pdf_footer'] = false;
// If the MySpace page takes too long to load, you might want to remove the
// processing of generic statistics for the user. In this case set the following to true.
//$_configuration['tracking_skip_generic_data'] = false;
// Show view accordion lp_category
//$_configuration['lp_category_accordion'] = false;
//
// ------ HTTP headers security
// This section relates to options to increase the security of your Chamilo
// portal against attacks specifically focused on HTTP headers vulnerabilities
// These are all disabled by default, because some of these settings might
// affect some features of Chamilo, like the inclusion of iframes or the
// submission of forms by anonymous users. Please make sure you do the due
// tests before enabling in production. Learn more about how to form secure
// headers at https://securityheaders.io/
//
// HTTP Strict Transport Security is an excellent feature to support on your
// site and strengthens your implementation of TLS by getting the User Agent
// to enforce the use of HTTPS. Recommended value
// "strict-transport-security: max-age=31536000; includeSubDomains".
//$_configuration['security_strict_transport'] = 'strict-transport-security: max-age=31536000; includeSubDomains';
//
// Content Security Policy is an effective measure to protect your site from
// XSS attacks. By whitelisting sources of approved content, you can prevent
// the browser from loading malicious assets.
// The provided default is an *example*, please customize.
// This setting is particularly complicated to set with CKeditor, but if you
// add all domains that you want to authorize for iframes inclusion in the
// child-src statement, this example should work for you
//$_configuration['security_content_policy'] = 'default-src 'self'; script-src 'self' 'unsafe-eval' 'unsafe-inline'; style-src 'self' 'unsafe-inline'; child-src 'self' *.youtube.com yt.be *.vimeo.com *.slideshare.com;';
//$_configuration['security_content_policy_report_only'] = 'default-src \'self\'; script-src *://*.google.com:*';
//
// HTTP Public Key Pinning protects your site from MiTM attacks using rogue
// X.509 certificates. By whitelisting only the identities that the browser
// should trust, your users are protected in the event a certificate
// authority is compromised.
//$_configuration['security_public_key_pins'] = '';
//$_configuration['security_public_key_pins_report_only'] = '';
//
// X-Frame-Options tells the browser whether you want to allow your site to
// be framed or not. By preventing a browser from framing your site you can
// defend against attacks like clickjacking.
// Recommended value "x-frame-options: SAMEORIGIN".
//$_configuration['security_x_frame_options'] = 'x-frame-options: SAMEORIGIN';
//
// X-XSS-Protection sets the configuration for the cross-site scripting
// filter built into most browsers.
// Recommended value "X-XSS-Protection: 1; mode=block".
//$_configuration['security_xss_protection'] = 'X-XSS-Protection: 1; mode=block';
//
// X-Content-Type-Options stops a browser from trying to MIME-sniff the
// content type and forces it to stick with the declared content-type. The only
// valid value for this header is "X-Content-Type-Options: nosniff".
//$_configuration['security_x_content_type_options'] = 'X-Content-Type-Options: nosniff';
//
// Referrer Policy is a new header that allows a site to control how much
// information the browser includes with navigation away from a document
// and should be set by all sites.
//$_configuration['security_referrer_policy'] = 'origin-when-cross-origin';
// ------ HTTP headers security section ends here
//
// ------ Survey configuration settings
// Add answered_at field in table survey_invitation
// Requires DB change:
// ALTER TABLE c_survey_invitation ADD answered_at DATETIME DEFAULT NULL;
//$_configuration['survey_answered_at_field'] = false;
// Add support to mandatory surveys. The user will not be able to enter to the course until fill the mandatory surveys
// Requires DB change:
/*
INSERT INTO extra_field (extra_field_type, field_type, variable, display_text, visible_to_self, changeable, created_at)
VALUES (12, 13, 'is_mandatory', 'IsMandatory', 1, 1, NOW());
*/
//$_configuration['allow_mandatory_survey'] = false;
// Allow required survey questions. Applies to yesno/multiplechoice question type. Requires DB change:
/*
ALTER TABLE c_survey_question ADD is_required TINYINT(1) DEFAULT 0 NOT NULL;
*/
//$_configuration['allow_required_survey_questions'] = false;
// Hide Survey Reporting button
//$_configuration['hide_survey_reporting_button'] = false;
// Hide survey edition tools for all or some surveys.
//Set an asterisk to hide for all, otherwise set an array with the survey codes in which the options will be blocked
//$_configuration['hide_survey_edition'] = ['codes' => []];
// ------

// Allow career diagram, requires a DB change:
//UPDATE extra_field_values SET created_at = NULL WHERE CAST(created_at AS CHAR(20)) = '0000-00-00 00:00:00';
//UPDATE extra_field_values SET updated_at = NULL WHERE CAST(updated_at AS CHAR(20)) = '0000-00-00 00:00:00';
//ALTER TABLE extra_field_values modify column value longtext null;
//$_configuration['allow_career_diagram'] = false;
// Allow scheduled emails to session users.
//CREATE TABLE scheduled_announcements (id INT AUTO_INCREMENT NOT NULL, subject VARCHAR(255) NOT NULL, message LONGTEXT NOT NULL, date DATETIME DEFAULT NULL, sent TINYINT(1) NOT NULL, session_id INT NOT NULL, c_id INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;
//$_configuration['allow_scheduled_announcements'] = false;
// Add the list of emails as a bcc when sending an email.
/*
$_configuration['send_all_emails_to'] = [
    'emails' => [
        'admin1@example.com',
        'admin2@example.com',
    ]
];*/
// Allow ticket projects to be access by specific chamilo roles
/*$_configuration['ticket_project_user_roles'] = [
    'permissions' => [
        1 => [17] // project_id = 1, STUDENT_BOSS = 17
    ]
];*/
//

// Exercises configuration settings
// Send only quiz answer notifications to course coaches and not general coach
//$_configuration['block_quiz_mail_notification_general_coach'] = false;
// Show question feedback (requires DB change: "ALTER TABLE c_quiz_question ADD COLUMN feedback text;")
//$_configuration['allow_quiz_question_feedback'] = false;
// Add option in exercise to show or hide the "previous" button.
//ALTER TABLE c_quiz ADD show_previous_button TINYINT(1) DEFAULT 1;
//$_configuration['allow_quiz_show_previous_button_setting'] = false;
// Allow to teachers review exercises question with audio notes
//$_configuration["allow_teacher_comment_audio"] = false;
// Hide search form in session list
//$_configuration['hide_search_form_in_session_list'] = false;
// Allow exchange of messages from teachers/bosses about a user.
//$_configuration['private_messages_about_user'] = false;
// Allow send email notification per exercise
//ALTER TABLE c_quiz ADD COLUMN notifications VARCHAR(255) NULL DEFAULT NULL;
//$_configuration['allow_notification_setting_per_exercise'] = false;
// Hide free/oral/annotation question result see BT#12613
//$_configuration['hide_free_question_score'] = false;
// Hide user information in the quiz result's page
//$_configuration['hide_user_info_in_quiz_result'] = false;

// Score model
// Allow to convert a score into a text/color label
// using a model if score is inside those values. See BT#12898
/*
$_configuration['score_grade_model'] = [
    'models' => [
        [
            'id' => 1,
            'name' => 'ThisIsMyModel', // Value will be translated using get_lang
            'score_list' => [
                [
                    'name' => 'VeryBad', // Value will be translated using get_lang
                    'css_class' => 'btn-danger',
                    'min' => 0,
                    'max' => 20,
                    'score_to_qualify' => 0
                ],
                [
                    'name' => 'Bad',
                    'css_class' => 'btn-danger',
                    'min' => 21,
                    'max' => 50,
                    'score_to_qualify' => 25
                ],
                [
                    'name' => 'Good',
                    'css_class' => 'btn-warning',
                    'min' => 51,
                    'max' => 70,
                    'score_to_qualify' => 60
                ],
                [
                    'name' => 'VeryGood',
                    'css_class' => 'btn-success',
                    'min' => 71,
                    'max' => 100,
                    'score_to_qualify' => 100
                ]
            ]
        ]
    ]
];
*/

// Allow show link to request relation between HRM and user
//$_configuration['show_link_request_hrm_user'] = false;
// Allow CKEditor start up with ShowBlocks plugin active
//$_configuration['ckeditor_startup_outline_blocks'] = false;
// SETTINGS FOR USER COURSE LIST
// Manage the links to Session Index page
// 1 = Default. Works as it is now (default is to link to the special session page)
// 0 = No link (not clickable)
// 2 = Link to the course if there is only one course
// 3 = Session link will make course list foldable
//$_configuration['courses_list_session_title_link'] = 1;
// New grid view the list of courses
//$_configuration['view_grid_courses'] = true;
// Show courses grouped by categories when $_configuration['view_grid_courses'] is enabled
//$_configuration['view_grid_courses_grouped_categories_in_sessions'] = true;
// Load course notifications in user_portal.php using ajax
//$_configuration['user_portal_load_notification_by_ajax'] = false;
// Hide the "what's new" icon notifications in course list
// $_configuration['hide_course_notification'] = true;
// Show less session information in course list
//$_configuration['show_simple_session_info'] = true;
// Show course category list on My Courses page before the courses. Requires a DB change
//ALTER TABLE course_category ADD image varchar(255) NULL;
//ALTER TABLE course_category ADD description LONGTEXT NULL;
//$_configuration['my_courses_list_as_category'] = false;
// ------

// Skills can only visible for admins, teachers (related to a user via a course),
// and HRM users (if related to a user).
// $_configuration['allow_private_skills'] = false;
// Additional gradebook dependencies BT#13099
// ALTER TABLE gradebook_category ADD COLUMN depends TEXT DEFAULT NULL;
// ALTER TABLE gradebook_category ADD COLUMN minimum_to_validate INT DEFAULT NULL;
// ALTER TABLE gradebook_category ADD COLUMN gradebooks_to_validate_in_dependence INT DEFAULT NULL;
// $_configuration['gradebook_dependency'] = false;
// Courses id list to check in the gradebook sidebar see BT#13099
/*$_configuration['gradebook_dependency_mandatory_courses'] = [
    'courses' => [1, 2]
];*/
// Gradebook id list needed to build the gradebook sidebar see BT#13099
/*
$_configuration['gradebook_badge_sidebar'] = [
    'gradebooks' => [1, 2, 3]
];*/

// Show language selector in main menu an update the language in the user's
// profile.
//$_configuration['show_language_selector_in_menu'] = false;

// When using the my-courses list filter by category, set this option to true
// to only show courses in the user's configured language
// $_configuration['my_courses_show_courses_in_user_language_only'] = false;

// Hide base course announcements when entering a group.
//$_configuration['hide_base_course_announcements_in_group'] = false;

// Disable delete all announcements button
//$_configuration['disable_delete_all_announcements'] = false;

// Default glossary view "table" or "list"
//$_configuration['default_glossary_view'] = 'table';

// Allow or block user subcriptions to a lp/lp category
/*$_configuration['lp_subscription_settings'] = [
    'options' => [
        'allow_add_users_to_lp' => true,
        'allow_add_users_to_lp_category' => true,
    ]
];*/

// Allow public courses access with no terms and conditions validation.
//$_configuration['allow_public_course_with_no_terms_conditions'] = false;

// Allow delete user for session admin
//$_configuration['allow_delete_user_for_session_admin'] = false;
// Allow enable/disable user accounts for session admin
//$_configuration['allow_disable_user_for_session_admin'] = false;
// Allow edit/delete agenda events for HRM users
//$_configuration['allow_agenda_edit_for_hrm'] = false;
// Allow double validation in registration page
//$_configuration['allow_double_validation_in_registration'] = false;
// Allow multiple anon users see BT#13324
//$_configuration['max_anonymous_users'] = 0;

// Send email notification to admin when a user is created
//$_configuration['send_notification_when_user_added'] = ['admins' => [1] ];

// Hide email content forcing using to click in a link to visit the portal to check the message
//$_configuration['messages_hide_mail_content'] = false;
// If you install plugin redirection you need to change to true
//$_configuration['plugin_redirection_enabled'] = false;
// Customize on hover agenda view. Show agenda comment and/or description
/*$_configuration['agenda_on_hover_info'] = [
    'options' => [
        'comment' => true,
        'description' => true,
    ]
];*/
// Disable jquery, jquery-ui libs added in the learning path view
//$_configuration['disable_js_in_lp_view'] = true;
// Show all sessions (old, current, future) in my course page
//$_configuration['show_all_sessions_on_my_course_page'] = true;
// Redirect to home tool after uploading a student publication or a adding a comment
//$_configuration['allow_redirect_to_main_page_after_work_upload'] = false;
// Empty the session student list when subscribing multiple users
//$_configuration['session_multiple_subscription_students_list_avoid_emptying'] = false;
// Disable the option to set course coach in session when editing course
//$_configuration['disabled_edit_session_coaches_course_editing_course'] = false;
// Show sender's email when receiving email notifications.
//$_configuration['show_user_email_in_notification'] = false;
// Set skill levels name, then later it will be parsed using get_lang BT#13586
/*$_configuration['skill_levels_names'] = [
    'levels' => [
        1 => 'Skills',
        2 => 'Capability',
        3 => 'Dimension',
    ]
];*/

// Hide skill levels options
//$_configuration['hide_skill_levels'] = false;

// Hide the session list in Reporting tool. Useful when a course has too many sessions.
//$_configuration['hide_reporting_session_list'] = false;

// Allow session admin to read careers
//$_configuration['allow_session_admin_read_careers'] = true;

// Send score in percentage in the exam result notification
//$_configuration['send_notification_score_in_percentage'] = false;

// Google translate key (for the text2speech feature in the documents tool)
// To get it, go to https://console.cloud.google.com/apis/library, create or
// use your own project, then search for "speech" and follow the instructions
// This service has a cost above 60 minutes of use.
//$_configuration['translate_app_google_key'] = '';

// Block access to any user to "my progress" page
//$_configuration['block_my_progress_page'] = false;


// ------ Custom DB changes
// Add user activation by confirmation email
// This option prevents the new user to login in the platform if your account is not confirmed via email
// You need add a new option called "confirmation" to the registration settings
//INSERT INTO settings_options (variable, value, display_text) VALUES ('allow_registration', 'confirmation', 'MailConfirmation');
// ------ (End) Custom DB changes
