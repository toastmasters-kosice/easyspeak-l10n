<?php
/***************************************************************************
 * Filename:          lang_import.php
 * Description:       Import Tools Langauge File
 * Author:            Graham Eames (phpbb@grahameames.co.uk)
 * Last Modified:     28-Feb-2004
 * File Version:      1.0
 *
 ***************************************************************************/
if ( !defined('IN_PHPBB') )
{
        die("Hacking attempt");
}

// Error Messages
$lang['import_file_missing'] = "File not found";
$lang['import_file_missing_details'] = "The %s file was not found."; // e.g. "The members.csv file was not found"
$lang['import_error_user_id'] = "Could not obtain next user_id information";
$lang['error_user_m'] = "Missing user name";
$lang['error_user_d'] = "Duplicate user name";
$lang['error_user_n'] = "User name does not exist";
$lang['error_user_l'] = "Username must be shorter than 25 char, not contain an '@', and not contain the last name in full";
$lang['error_email'] = "Invalid email address";
$lang['GDPR_error_email'] = "For data protection, a working Email is required";
$lang['error_insert'] = "Could not add record";
$lang['error_insert_c'] = "Could not add Club record";
$lang['error_email_m'] = "Email does not match";
$lang['error_name_m'] = "Names do not match";
$lang['error_name1'] = "Missing first name";
$lang['error_name2'] = "Missing surname";
$lang['error_password'] = "Missing password";
$lang['blank'] = "(blank)";
$lang['Bad_upload_size'] = "Bad upload file size";
$lang['No_file'] = "Please select a file to upload";
$lang['No_status'] = "Please select a status for these users";
$lang['Not_allowed_type'] = "The upload MUST be a .CSV or .XLS (Club-Membership-Roster) file";
$lang['Error_user'] = "Invalid user name";
$lang['Error_date'] = "Invalid speech date";
$lang['Error_evaluator'] = "Invalid evaluator";
$lang['Error_assigned'] = "Speech already assigned";
$lang['Error_task'] = "Invalid Workb'k or Asn't";      //Must be SHORT 25 char max.
$lang['Error_dup'] = "Speech already on file";
$lang['Error_joined'] = "Invalid joined date";

// Information Messages
$lang['import_complete'] = "Import Complete";
$lang['Processing_complete'] = "Processing Complete";
$lang['import_errors'] = "%d lines(s) had errors and were not imported";
$lang['import_complete_members'] = "%d member(s) have been imported successfully";
$lang['Import_complete_speeches'] = "%d speeches(s) have been imported successfully";
$lang['Import_complete_officers'] = "%d officer(s) have been imported successfully";
$lang['import_in_progress'] = "Import In Progress";
$lang['import_in_progress_members'] = "The import of the members into the system is still in progress. Please click the button below to continue with the next batch of members.";
$lang['line'] = "Line %d : ";
$lang['No_meeting'] = "Not on easy-Speak";
$lang['Import_continue'] = "Import Stage Complete - Please check and confirm if you wish to proceed";
$lang['Records'] = "records";

// Settings Messages - Members
$lang['import_settings'] = "Import Settings";
$lang['CSV_format'] = "CSV Formatting Instructions";
$lang['import_explain_csv'] = "To upload a .CSV file,  create a spreadsheet using the format below (without the header line). Save it as a .CSV file.  Refer to the Knowledgebase for instructions and more information.";
$lang['import_explain_members'] = "This tool allows you to import a list of user or to create user accounts for all those members on your club. Users can be imported from the TMI Membership Roster exported to .CSV from www.toastmasters.org or from a .CSV file on your PC.";
$lang['import_password_format'] = "Password Format";
$lang['import_password_format_explain'] = "This setting specifies the format used for the passwords in the file we are importing from.";
$lang['import_password_format_plain'] = "Plain text";
$lang['import_password_format_md5'] = "MD5";
$lang['import_rate'] = "Import Rate";
$lang['import_rate_explain'] = "This setting determines the number of lines imported on each pass through the file.";
$lang['import_start'] = "Start Import";
$lang['Load_club_status'] = "Give users imported from this file the status of";
$lang['Manual_entry'] = "Enter records manually";
$lang['Name1_s'] = "First Name";
$lang['Bus_phone_s'] = "Daytime Phone";
$lang['Phone_s'] = "Evening Phone";
$lang['Joined_date'] = "01OCT2005";                  //example date in your language
$lang['Upload_officer_file'] = "Select the Club officer file to upload for this District";
$lang['upload_file'] = "Select the downloaded TMI Roster file or select your manually created CSV file (see help link below for file format info) to upload, or enter info manually.<br />If you edit the TMI club roster you <b>MUST</b> retain the column headers on the first line.";
$lang['upload_s_file'] = "Select the file";
$lang['Number_format'] = "My PC stores numbers in this format";
$lang['Number_format_explain'] = "If you use 'European' format numbers Excel will change the character used <br>to separate fields from a ',' to a '";
$lang['Number_format_explain2'] = "Note that if you use 'European' numbers you <b>must</b> use a '>' for new lines in the address";
$lang['Member_number'] = "TM number";
$lang['Tracks'] = "Awards";
$lang['Import_explain_awards'] = "Use these codes for each member's achievements on the Communications and Leadership tracks:";
$lang['Import_additional'] = "Two further optional columns are available:<br />&nbsp;&nbsp;Column M - Address<br />&nbsp;&nbsp;Column N - Postcode";
$lang['British'] = "British";
$lang['European'] = "European";
$lang['Import_explain'] = "Both names must be at least two characters long. Usernames must be 5-24 characters and NOT include the surname in full.<br>Passwords must be at least four characters long.";
$lang['Import_psswd'] = "KEEP A RECORD OF USERNAMES & PASSWORDS so that you can give this information to each member.";

// Settings dual members import
$lang['import_explain_dual'] = "This tool allows you to import a list of members who are already easy-Speak users and create user accounts for these dual members of your club.<br />The user name must exist and match the First Name, Family Name and e-mail address.<br />The members will be imported from a .CSV file on your PC which contains entries of the format shown below, without the header line.<br />Refer to the Knowledgebase for instructions and more information.";

// Settings Messages - Speeches
$lang['Import_explain_speeches'] = "This tool allows you to import a list of speeches already made by members on your club. The speeches will be imported from a .CSV file on your PC which contains entries of the format shown below, without the header line. There is a MAXIMUM of 100 lines in any import file<br />Refer to the Knowledgebase for instructions and more information.";
$lang['Import_explain_workbook'] = "Here is a list of the numbers to use for each Workbook:";
$lang['Imp_speeches'] = "Speeches";
$lang['I_Assign'] = "Asn";
$lang['Confirm_speeches'] = "Confirm and process these speeches?";
$lang['Confirm_explain'] = "Press 'Yes' to process the valid lines shown above or press 'No' to abandon this run and return later after you have corrected the spreadsheet";

// Settings Messages - Club Officers
$lang['Import_explain_officers'] = "This tool allows you to import a list of club officers sent by TI. The officers will be imported from a .CSV file on your PC which contains entries of the format shown in the Knowledgebase. There is a MAXIMUM of 1500 lines in any import file but you may run multiple imports to build the TMI datafile

Set your timezone to the correct time for the District being processed.

Erase old data from the file

Import TMI data from a spreadsheet
Process and reduce blank codes to zero and then run remaining processes in sequence.
Review the log files to locate problems

Users will be added in batches of 50 - you may need to rerun this process. Pause between each batch to avoid e-mail server problems.

Refer to the Knowledgebase for instructions and more information.";       
$lang['Imp_officers'] = "Import Club Officers";
$lang['Member_no'] = "Member no";
$lang['Confirm_officers'] = "Confirm and process these officers?";
$lang['Import_erase_previous'] = "Erase previous upload of TMI data";
$lang['Import_erase'] = "Erase";
$lang['Import_process_users'] = "Update old user data and load new users";
$lang['Process_update'] = "Process Data";
$lang['Import_add'] = "Import officers and ADD to the file";
$lang['Import_process_1'] = "Process user and club updates to TMI file";
$lang['Import_process_2'] = "Process user updates to master file";
$lang['Import_process_3'] = "Add missing users (repeat if necessary)";
$lang['Import_process_4'] = "Update Officer Records";
$lang['Import_process_5'] = "Add missing users with same name as another officer";
$lang['Import_process_6'] = "Add officers to their club data";
$lang['Import_process_9'] = "Clean up missing e-mail addresses and make cross-reference check";
$lang['Update_users'] = "Update Users";
$lang['Add_users'] = "Add users";
$lang['Clean_up'] = "Clean bad data";
$lang['Add_double'] = "Add double named users";
$lang['Update_officers'] = "Update Officers";
$lang['Update_clubs'] = "Update Club Records";
$lang['Import_summary'] = "Summary of data in club master file";
$lang['Import_blank'] = "Clubs without a TI number";
$lang['Log_users'] = "View users log";
$lang['Log_officers'] = "View officers log";
$lang['Log_clubs'] = "View clubs log";
$lang['Log_unprocessed'] = "View unprocessed log";
$lang['Log_update_u'] = "View user update log";
$lang['Log_update_o'] = "View officer update log";
$lang['Log_error'] = "View error log";
$lang['Log_compare'] = "View comparison list";

?>