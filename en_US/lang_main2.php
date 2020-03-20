<?php
/***************************************************************************
 *                            lang_main2.php [English]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_main2.php,v 1.85.2.15 2003/06/10 00:31:19 psotfx Exp $
 *
 ****************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/
if ( !defined('IN_PHPBB') )
{
        die("Hacking attempt");
}
//Mass and Club e-mail
$lang['M_Email'] = "Usergroup E-mail";
$lang['Send_email_msg'] = "Send an e-mail message";
$lang['No_user_specified'] = "No user was specified";
$lang['User_prevent_email'] = "This user does not wish to receive e-mail. Try sending them a private message.";
$lang['User_no_email'] = "This user does not have a valid e-mail address. Try sending them a %sprivate message.%s";
$lang['User_not_exist'] = "That user does not exist";
$lang['CC_email'] = "Send a copy of this e-mail to yourself";
$lang['CC_email_2'] = "(not agenda e-mail #3)";
$lang['Email_message_desc'] = "Replies to this email will be sent to your e-mail address.";
$lang['Flood_email_limit'] = "You cannot send another e-mail at this time. Try again later.";
$lang['Recipient'] = "Recipient";
$lang['Email_sent'] = "The e-mail has been sent to the following recipients:";
$lang['Send_email'] = "Send e-mail";
$lang['Empty_subject_email'] = "You must specify a subject for the e-mail.";
$lang['Empty_message_email'] = "You must enter a message to be e-mailed.";
$lang['Contact_Support'] = "Contact Support";
$lang['Too_many'] = "Please use the Mass e-mail screen for this many recipients";


//E-mail agenda
$lang['Email_text'] = "I think that you would be interested in the following meeting shown on the";
$lang['Event_text'] = "I think that you would be interested in the following event shown on the";

//
// Visual confirmation system strings
//
$lang['Confirm_code_wrong'] = "The confirmation code you entered was incorrect";
$lang['Too_many_registers'] = "You have exceeded the number of registration attempts for this session. Please try again later.";
$lang['Confirm_code_impaired'] = "If you are visually impaired or cannot otherwise read this code please contact the %sAdministrator%s for help.";
$lang['Confirm_code'] = "Confirmation code";
$lang['Confirm_code_explain'] = "Enter the code exactly as you see it.";

//
// Memberlist
//
$lang['Select_sort_method'] = "Sorted by";
$lang['Sort'] = "Sort";
$lang['Sort_Top_Ten'] = "Top Ten Posters";
$lang['Sort_Joined'] = "Joined Date";
$lang['M_status'] = "Membership status";
$lang['Sort_Username'] = "Username";
$lang['Sort_Posts'] = "Total posts";
$lang['Sort_Email'] = "E-mail";
$lang['Sort_Website'] = "Website";
$lang['Sort_Ascending'] = "Ascending";
$lang['Sort_Descending'] = "Descending";
$lang['Order'] = "Order";

//
// Group control panel
//
$lang['Group_Control_Panel'] = "Group Control Panel";
$lang['Group_member_details'] = "Group Membership Details";
$lang['Group_member_join'] = "Join a Group";

$lang['Group_Information'] = "User Group Information";
$lang['Group_name'] = "Group name";
$lang['Group_description'] = "Group description";
$lang['Group_membership'] = "Group membership";
$lang['Group_Members'] = "Group Members";
$lang['Group_Moderator'] = "Group Moderator";
$lang['Pending_members'] = "Pending Members";

$lang['Group_type'] = "Group type";
$lang['Group_open'] = "Open group";
$lang['Group_closed'] = "Closed group";
$lang['Group_hidden'] = "Hidden group";
$lang['Group_auto'] = "Auto join group";

$lang['Current_memberships'] = "Current memberships";
$lang['Non_member_groups'] = "Non-member groups";
$lang['Memberships_pending'] = "Memberships pending";

$lang['No_groups_exist'] = "No Groups Exist";
$lang['Group_not_exist'] = "That user group does not exist";

$lang['Join_group'] = "Join Group";
$lang['No_group_members'] = "This group has no members";
$lang['Group_hidden_members'] = "This group is hidden; you cannot view its membership";
$lang['Group_joined'] = "You have successfully requested subscription to this group.<br />You will be notified when your subscription is approved by the group moderator.";
$lang['Group_request'] = "A request to join your group has been made.";
$lang['Group_approved'] = "Your request has been approved.";
$lang['Group_added'] = "You have been added to this usergroup.";
$lang['Already_member_group'] = "You are already a member of this group";
$lang['User_is_member_group'] = "User is already a member of this group";
$lang['Group_type_updated'] = "Successfully updated group type.";

$lang['Could_not_add_user'] = "The user you selected does not exist.";
$lang['Could_not_anon_user'] = "You cannot make Anonymous a group member.";

$lang['Confirm_unsub'] = "Are you sure you want to unsubscribe from this group?";
$lang['Confirm_unsub_mail'] = "Are you sure you want to unsubscribe from the %s group?";
$lang['Confirm_unsub_pending'] = "Your subscription to this group has not yet been approved; are you sure you want to unsubscribe?";

$lang['Unsub_success'] = "You have been un-subscribed from this group.";

$lang['Approve_selected'] = "Approve Selected";
$lang['Deny_selected'] = "Deny Selected";
$lang['Remove_selected'] = "Remove Selected";
$lang['Add_member'] = "Add Member";
$lang['Not_add_member'] = "You do not have system permissions to add members";
$lang['Not_group_moderator'] = "You are not this group's moderator, therefore you cannot perform that action.";

$lang['Login_to_join'] = "Log in to join or manage group memberships";
$lang['This_open_group'] = "This is an open group: click to request membership";
$lang['This_closed_group'] = "This is a closed group: no more users accepted";
$lang['This_hidden_group'] = "This is a hidden group: automatic user addition is not allowed";
$lang['This_auto_group'] = "This is an automatically approved group: click to request membership";
$lang['Member_this_group'] = "You are a member of this group";
$lang['Pending_this_group'] = "Your membership of this group is pending";
$lang['Are_group_moderator'] = "You are the group moderator";
$lang['None'] = "None";

$lang['Subscribe'] = "Subscribe";
$lang['Unsubscribe'] = "Unsubscribe";
$lang['View_Information'] = "View Information";

//
// Search
//
$lang['Search_query'] = "Search Query";
$lang['Search_options'] = "Search Options";

$lang['Search_keywords'] = "Search for Keywords";
$lang['Search_keywords_explain'] = "You can use <u>AND</u> to define words which must be in the results, <u>OR</u> to define words which may be in the result and <u>NOT</u> to define words which should not be in the result. Use * as a wildcard for partial matches";
$lang['Search_author'] = "Search for Author";
$lang['Search_author_explain'] = "Enter a name or username (or part of a name or address)"; 

$lang['Search_for_any'] = "Search for any terms or use query as entered";
$lang['Search_for_all'] = "Search for all terms";
$lang['Search_title_msg'] = "Search topic title and message text";
$lang['Search_msg_only'] = "Search message text only";
$lang['Exact'] = "Exact match";

$lang['Return_first'] = "Return first"; // followed by xxx characters in a select box
$lang['characters_posts'] = "characters of posts";

$lang['Search_previous'] = "Search previous"; // followed by days, weeks, months, year, all in a select box

$lang['Sort_by'] = "Sort by";
$lang['Sort_Time'] = "Post Time";
$lang['Sort_Post_Subject'] = "Post Subject";
$lang['Sort_Topic_Title'] = "Topic Title";
$lang['Sort_Author'] = "Author";
$lang['Sort_Forum'] = "Forum";

$lang['Display_results'] = "Display results as";
$lang['All_available'] = "All available";
$lang['No_searchable_forums'] = "You do not have permissions to search any forum on this site.";

$lang['No_search_match'] = "No topics or posts met your search criteria";
$lang['Found_search_match'] = "Search found %d match"; // eg. Search found 1 match
$lang['Found_search_matches'] = "Search found %d matches"; // eg. Search found 24 matches
$lang['Search_Flood_Error'] = "You cannot make another search so soon after your last; please try again in a short while.";
$lang['Search_member'] = "Search for a User";
$lang['Search_club'] = "Search for a club";


$lang['Close_window'] = "Close Window";
$lang['Comment'] = "Comment";

//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = "Sorry, but only %s can post announcements in this forum.";
$lang['Sorry_auth_sticky'] = "Sorry, but only %s can post sticky messages in this forum.";
$lang['Sorry_auth_read'] = "Sorry, but only %s can read topics in this forum.";
$lang['Sorry_auth_post'] = "Sorry, but only %s can post topics in this forum.";
$lang['Sorry_auth_reply'] = "Sorry, but only %s can reply to posts in this forum.";
$lang['Sorry_auth_edit'] = "Sorry, but only %s can edit posts in this forum.";
$lang['Sorry_auth_delete'] = "Sorry, but only %s can delete posts in this forum.";
$lang['Sorry_auth_vote'] = "Sorry, but only %s can vote in polls in this forum.";

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = "<b>anonymous users</b>";
$lang['Auth_Registered_Users'] = "<b>registered users</b>";
$lang['Auth_Users_granted_access'] = "<b>users granted special access</b>";
$lang['Auth_Moderators'] = "<b>moderators</b>";
$lang['Auth_Administrators'] = "<b>administrators</b>";

$lang['Not_Moderator'] = "You are not a moderator of this forum.";
$lang['Not_Authorised'] = "Not Authorised";

$lang['You_been_banned'] = "This IP address or user has been banned from using the system.<br />Please contact the webmaster or board administrator for more information.";
$lang['You_banned'] = "SECURITY ALERT - ROBOT REGISTRATION ATTEMPT <br />This IP address has been banned from using the system.";           //NTR


//
// Viewonline
//
$lang['Reg_users_zero_online'] = "There are 0 Registered users and "; // There are 5 Registered and
$lang['Reg_users_online'] = "There are %d Registered users and "; // There are 5 Registered and
$lang['Reg_user_online'] = "There is %d Registered user and "; // There is 1 Registered and
$lang['Hidden_users_zero_online'] = "0 Hidden users online"; // 6 Hidden users online
$lang['Hidden_users_online'] = "%d Hidden users online"; // 6 Hidden users online
$lang['Hidden_user_online'] = "%d Hidden user online"; // 6 Hidden users online
$lang['Guest_users_online'] = "There are %d Guest users online"; // There are 10 Guest users online
$lang['Guest_users_zero_online'] = "There are 0 Guest users online"; // There are 10 Guest users online
$lang['Guest_user_online'] = "There is %d Guest user online"; // There is 1 Guest user online
$lang['No_users_browsing'] = "There are no users currently browsing this forum";

$lang['Online_explain'] = "This data is based on users active over the past five minutes";

$lang['Forum_Location'] = "Location";
$lang['Last_updated'] = "Last Updated";

$lang['Forum_index'] = "Forum index";
$lang['Logging_on'] = "Logging on";
$lang['Posting_message'] = "Posting a message";
$lang['Searching_forums'] = "Searching";
$lang['Viewing_profile'] = "Viewing profile";
$lang['Viewing_location'] = "Viewing location";
$lang['Viewing_stats'] = "Viewing TM statistics";
$lang['Viewing_clubdata'] = "Viewing TM Club Data";
$lang['Viewing_speechdata'] = "Viewing Speeches";
$lang['Viewing_CLdata'] = "Viewing Leadership Data";
$lang['Viewing_CCdata'] = "Viewing Communications Data";
$lang['Viewing_attendprint'] = "Printing Labels & Badges";
$lang['Viewing_userstats'] = "Viewing Member Stats";
$lang['Viewing_member_list'] = "Viewing member list";
$lang['Viewing_priv_msgs'] = "Viewing Private Messages";
$lang['Viewing_FAQ'] = "Viewing FAQ";
$lang['Viewing_group'] = "Group Control Panel";
$lang['Front_page'] = "Front page";

$lang['Mass_email'] = "Mass e-mail";
$lang['Viewing_officers'] = "Viewing Club Officers";
$lang['Meeting_agenda'] = "Meeting Agenda";
$lang['Meeting_list'] = "Meeting List";
$lang['Meeting_audit'] = "Viewing Assignment Log";
$lang['Viewing_calendar'] = "Viewing Calendar";
$lang['Viewing_KB'] = "Viewing KB";
$lang['Viewing_directory'] = "Viewing Directory";
$lang['Conf_agenda'] = "Conference Agenda";
$lang['Conf_booking'] = "Booking Conference";
$lang['Viewing_candidates'] = "Candidates Corner";
$lang['Viewing_gallery'] = "Portrait Gallery";
$lang['Viewing_language'] = "Translation Utility";
$lang['Viewing_objective'] = "Viewing Speech Objectives";
$lang['Signup_page'] = "Signing up for roles";
$lang['Requesting_speech'] = "Requesting Speech";
$lang['Schedule_speech'] = "Scheduling Speeches";
$lang['Viewing_portal']= "Viewing Portal";
$lang['Viewing_DCP'] = "Viewing DCP";
$lang['Viewing_Goals'] = "Member goals";
$lang['Viewing_Charts'] = "Member Charts";

//
// Moderator Control Panel
//
$lang['Mod_CP'] = "Moderator Control Panel";
$lang['Mod_CP_explain'] = "Using the form below you can perform mass moderation operations on this forum. You can lock, unlock, move or delete any number of topics.";

$lang['Select'] = "Select";
$lang['Move'] = "Move";
$lang['Lock'] = "Lock";
$lang['Unlock'] = "Unlock";

$lang['Topics_Removed'] = "The selected topics have been successfully removed from the database.";
$lang['Topics_Locked'] = "The selected topics have been locked.";
$lang['Topics_Moved'] = "The selected topics have been moved.";
$lang['Topics_Unlocked'] = "The selected topics have been unlocked.";
$lang['No_Topics_Moved'] = "No topics were moved.";

$lang['Confirm_delete_topic'] = "Are you sure you want to remove the selected topic/s?";
$lang['Confirm_lock_topic'] = "Are you sure you want to lock the selected topic/s?";
$lang['Confirm_unlock_topic'] = "Are you sure you want to unlock the selected topic/s?";
$lang['Confirm_move_topic'] = "Are you sure you want to move the selected topic/s?";

$lang['Move_to_forum'] = "Move to forum";
$lang['Leave_shadow_topic'] = "Leave shadow topic in old forum.";

$lang['Split_Topic'] = "Split Topic Control Panel";
$lang['Split_Topic_explain'] = "Using the form below you can split a topic in two, either by selecting the posts individually or by splitting at a selected post";
$lang['Split_title'] = "New topic title";
$lang['Split_forum'] = "Forum for new topic";
$lang['Split_posts'] = "Split selected posts";
$lang['Split_after'] = "Split from selected post";
$lang['Topic_split'] = "The selected topic has been split successfully";

$lang['Too_many_error'] = "You have selected too many posts. You can only select one post to split a topic after!";

$lang['None_selected'] = "You have not selected any topics to perform this operation on. Please go back and select at least one.";
$lang['New_forum'] = "New forum";

$lang['This_posts_IP'] = "IP address for this post";
$lang['Other_IP_this_user'] = "Other IP addresses this user has posted from";
$lang['Users_this_IP'] = "Users posting from this IP address";
$lang['Users_logged_this_IP'] = "Users who logged in from this IP address";
$lang['IP_info'] = "IP Information";
$lang['Lookup_IP'] = "Look up IP address";


//
// Timezones ... for display on each page
//
$lang['All_times'] = "All system times are %s"; // eg. All times are GMT - 12 Hours (times from next block)
$lang['Club_times'] = "Meeting times are shown as local time";

// These are displayed in the timezone select box
$lang['tz']['-12'] = "GMT - 12 Hours";
$lang['tz']['-11'] = "GMT - 11 Hours";
$lang['tz']['-10'] = "GMT - 10 Hours";
$lang['tz']['-9'] = "GMT - 9 Hours";
$lang['tz']['-8'] = "GMT - 8 Hours";
$lang['tz']['-7'] = "GMT - 7 Hours";
$lang['tz']['-6'] = "GMT - 6 Hours"; 
$lang['tz']['-5'] = "GMT - 5 Hours";
$lang['tz']['-4'] = "GMT - 4 Hours";
$lang['tz']['-3.5'] = "GMT - 3.5 Hours";
$lang['tz']['-3'] = "GMT - 3 Hours";
$lang['tz']['-2'] = "GMT - 2 Hours";
$lang['tz']['-1'] = "GMT - 1 Hour";
$lang['tz']['0'] = "GMT";
$lang['tz']['1'] = "GMT + 1 Hour";
$lang['tz']['2'] = "GMT + 2 Hours";
$lang['tz']['3'] = "GMT + 3 Hours";
$lang['tz']['3.5'] = "GMT + 3.5 Hours";
$lang['tz']['4'] = "GMT + 4 Hours";
$lang['tz']['4.5'] = "GMT + 4.5 Hours";
$lang['tz']['5'] = "GMT + 5 Hours";
$lang['tz']['5.5'] = "GMT + 5.5 Hours";
$lang['tz']['6'] = "GMT + 6 Hours";
$lang['tz']['6.5'] = "GMT + 6.5 Hours";
$lang['tz']['7'] = "GMT + 7 Hours";
$lang['tz']['8'] = "GMT + 8 Hours";
$lang['tz']['9'] = "GMT + 9 Hours";
$lang['tz']['9.5'] = "GMT + 9.5 Hours";
$lang['tz']['10'] = "GMT + 10 Hours";
$lang['tz']['11'] = "GMT + 11 Hours";
$lang['tz']['12'] = "GMT + 12 Hours";
//$lang['tz']['.0001'] = "UTC - Online meetings";

//Alpha representations of time
$lang['tza']['-12'] = "GMT - 12 Hours";
$lang['tza']['-11'] = "HST (GMT-11 hrs)";
$lang['tza']['-10'] = "GMT - 10 Hours";
$lang['tza']['-9'] = "GMT - 9 Hours";
$lang['tza']['-8'] = "PST (GMT-8 hrs)";
$lang['tza']['-7'] = "MST (GMT-7 hrs)";
$lang['tza']['-6'] = "CST (GMT-6 hrs)";
$lang['tza']['-5'] = "EST (GMT-5 hrs)";
$lang['tza']['-4'] = "GMT - 4 Hours";
$lang['tza']['-3.5'] = "GMT - 3.5 Hours";
$lang['tza']['-3'] = "GMT - 3 Hours";
$lang['tza']['-2'] = "GMT - 2 Hours";
$lang['tza']['-1'] = "GMT - 1 Hour";
$lang['tza']['0'] = "GMT";
//$lang['tza']['0.0001'] = "UTC - Online meetings";
$lang['tza']['1'] = "CET (GMT+1 hr)";
$lang['tza']['2'] = "EET (GMT+2 hrs)";
$lang['tza']['3'] = "GMT + 3 Hours";
$lang['tza']['3.5'] = "GMT + 3.5 Hours";
$lang['tza']['4'] = "GMT + 4 Hours";
$lang['tza']['4.5'] = "GMT + 4.5 Hours";
$lang['tza']['5'] = "GMT + 5 Hours";
$lang['tza']['5.5'] = "GMT + 5.5 Hours";
$lang['tza']['6'] = "GMT + 6 Hours";
$lang['tza']['6.5'] = "GMT + 6.5 Hours";
$lang['tza']['7'] = "GMT + 7 Hours";
$lang['tza']['8'] = "GMT + 8 Hours";
$lang['tza']['9'] = "GMT + 9 Hours";
$lang['tza']['9.5'] = "GMT + 9.5 Hours";
$lang['tza']['10'] = "GMT + 10 Hours";
$lang['tza']['11'] = "GMT + 11 Hours";
$lang['tza']['12'] = "NZ (GMT+12 Hours)";

$lang['datetime']['Sunday'] = "Sunday";
$lang['datetime']['Monday'] = "Monday";
$lang['datetime']['Tuesday'] = "Tuesday";
$lang['datetime']['Wednesday'] = "Wednesday";
$lang['datetime']['Thursday'] = "Thursday";
$lang['datetime']['Friday'] = "Friday";
$lang['datetime']['Saturday'] = "Saturday";

$lang['datetime']['Sun'] = "Sun";   //Must be three characters
$lang['datetime']['Mon'] = "Mon";
$lang['datetime']['Tue'] = "Tue";
$lang['datetime']['Wed'] = "Wed";
$lang['datetime']['Thu'] = "Thu";
$lang['datetime']['Fri'] = "Fri";
$lang['datetime']['Sat'] = "Sat";

$lang['datetime']['January'] = "January";
$lang['datetime']['February'] = "February";
$lang['datetime']['March'] = "March";
$lang['datetime']['April'] = "April";
$lang['datetime']['May'] = "May";
$lang['datetime']['June'] = "June";
$lang['datetime']['July'] = "July";
$lang['datetime']['August'] = "August";
$lang['datetime']['September'] = "September";
$lang['datetime']['October'] = "October";
$lang['datetime']['November'] = "November";
$lang['datetime']['December'] = "December";

$lang['datetime']['Jan'] = "Jan";   //Must be three characters
$lang['datetime']['Feb'] = "Feb";
$lang['datetime']['Mar'] = "Mar";
$lang['datetime']['Apr'] = "Apr";
$lang['datetime']['Jun'] = "Jun";
$lang['datetime']['Jul'] = "Jul";
$lang['datetime']['Aug'] = "Aug";
$lang['datetime']['Sep'] = "Sep";
$lang['datetime']['Oct'] = "Oct";
$lang['datetime']['Nov'] = "Nov";
$lang['datetime']['Dec'] = "Dec";

$lang['datemonth']['01'] = "January";
$lang['datemonth']['02'] = "February";
$lang['datemonth']['03'] = "March";
$lang['datemonth']['04'] = "April";
$lang['datemonth']['05'] = "May";
$lang['datemonth']['06'] = "June";
$lang['datemonth']['07'] = "July";
$lang['datemonth']['08'] = "August";
$lang['datemonth']['09'] = "September";
$lang['datemonth']['10'] = "October";
$lang['datemonth']['11'] = "November";
$lang['datemonth']['12'] = "December";

$lang['interval'] = "days";

$lang['Day']['0'] = " ";             //NTR
$lang['Day']['1'] = "Monday";
$lang['Day']['2'] = "Tuesday";
$lang['Day']['3'] = "Wednesday";
$lang['Day']['4'] = "Thursday";
$lang['Day']['5'] = "Friday";
$lang['Day']['6'] = "Saturday";
$lang['Day']['7'] = "Sunday";
$lang['Select_one'] = "- Select -";

$lang['TimeofDay']['0'] = "Morning";
$lang['TimeofDay']['1'] = "Mid-day";
$lang['TimeofDay']['2'] = "Evening";

//
// Photo Album Addon v2.x.x by Smartor
//
$lang['Album'] = "Photo Album";
$lang['Personal_Gallery_Of_User'] = "Personal Gallery of %s";

//
// Errors (not related to a
// specific failure on a page)
//
$lang['Information'] = "Information";
$lang['Critical_Information'] = "Critical Information";

$lang['General_Error'] = "General Error";
$lang['Critical_Error'] = "Critical Error";
$lang['An_error_occured'] = "An Error Occurred";
$lang['A_critical_error'] = "A Critical Error Occurred";
$lang['Admin_reauthenticate'] = "To use the Control Panel you must re-authenticate yourself.";
$lang['Dragons'] = "Here be dragons!";
$lang['Access_explain'] = "Access to this area is NOT needed for ANY routine action once your club is running on easy-Speak";
$lang['Dragons_explain'] = "The only reason to enter the Control Panel would be that your club relocated, changed meeeting day or needs to create a new meeting role or member status that did not previously exist.<br /><br />
    Well intentioned but poorly considered changes can trash your club's use of easy-Speak.";
$lang['Procede'] = "Do not procede unless you really know what you are doing";
$lang['Yes_I_know'] = "I know what I'm doing";
// Add to search mod
$lang['Select_time']="Select time";
$lang['Or'] = "or";
$lang['15_min'] = "15 min";
$lang['30_min'] = "30 min";
$lang['45_min'] = "45 min";
$lang['1_Hour'] = "1 Hour";
$lang['2_Hour'] = "2 Hours";
$lang['6_Hour'] = "6 Hours";
$lang['12_Hour'] = "12 Hours";

$lang['Watched_Topics'] = "Watched Topics";
$lang['Watched_Topics_Started'] = "Topic Started";
$lang['Watched_Topics_Stop'] = "Stop Watching";
$lang['Check_All'] = "Check All";
$lang['UnCheck_All'] = "UnCheck All";
//
// Email topic to friend
//
$lang['Email_topic'] = "E-mail topic to a friend";
$lang['Email_topic_settings'] = "E-mail topic information";
$lang['Friend_name'] = "Friend's name";
$lang['Friend_email'] = "Friend's e-mail";
$lang['Email_max_exceeded'] = "Sorry, but you have already sent %d e-mails in the past %d hours";
$lang['No_friend_specified'] = "You must fill in a message and your friend's name and e-mail address";
$lang['Next_post'] = "Next";
$lang['Prev_post'] = "Previous";
$lang['Email_overload'] = "You may only specify a single e-mail address";

$lang['Email_agenda_settings'] = "E-mail agenda information";

// addded to mass email mod
$lang['group_allow_email'] = "Permissions to mass e-mail";
$lang['group_removed'] = "You have been removed from group ";
$lang['group_allow_email_explain'] = "Select which type of users have the rights to mass e-mail this group.";
$lang['Group_not_member'] = "You are no longer a member of the %s group";
$lang['Club_not_member'] = "You are no longer a member of";
$lang['Club_never_member'] = "You are not a member of";
$lang['Max_client_in_email'] = "Maximum clients in a mass e-mail";

$lang['Site_history'] = "Site history";

// added for extended user profile
$lang['Bus_phone'] = "Daytime Phone";
$lang['Phone'] = "Evening Phone";
$lang['Mobile'] = "Mobile";
$lang['Contact_Numbers'] = "Contact Numbers";
$lang['Bus_phone_short'] = "W";
$lang['Phone_short'] = "H";
$lang['Mobile_short'] = "M";
$lang['Phones'] = "Phone Numbers";
$lang['Phone_format'] = "eg: +44 1234 567890";
$lang['Fax'] = "Fax";
$lang['Name1'] = "First or given Name";
$lang['Name2'] = "Family Name";
$lang['NameF'] = "Name";
$lang['Hide_phone'] = "Phone numbers will be visible to";
$lang['Hide_photo'] = "Show photo in my navigation box";
$lang['Hide_mobile'] = "Mobile number will be visible to";
$lang['Address'] = "Address";
$lang['Hide_address'] = "Address will be visible to";
$lang['Hide_name'] = "Name will be visible to";
$lang['Hidden'] = "Hidden";
$lang['Forgotten'] = "Forgotten User";
$lang['Forgotten_explain'] = "This user has excercised their right to be forgotten and all data has been removed";
$lang['Street_Address'] = "Street Address";
$lang['City'] = "City/Town";
$lang['State'] = "State/County/Region";
$lang['Country_code'] = "Country";
$lang['Postcode'] = "Post Code/Zip";
$lang['Reset_password'] = "Reset Password";

$lang['Reg'] = "Registration";
$lang['Personal'] = "Personal";
$lang['Communic'] = "Communication";
$lang['Images'] = "Images";
$lang['Attachments'] = "Attachments";
$lang['Watching'] = "Watching";

$lang['C_unknown'] = "Country unknown";
$lang['C_code']['0'] = "Select country";

$lang['C_code']['355'] = "Albania";
$lang['C_code']['376'] = "Andorra";
$lang['C_code']['244'] = "Angola";
$lang['C_code']['1-264'] = "Anguilla";
$lang['C_code']['1-268'] = "Antigua And Barbuda";
$lang['C_code']['54'] = "Argentina";
$lang['C_code']['61'] = "Australia";
$lang['C_code']['43'] = "Austria";
$lang['C_code']['1-242'] = "Bahamas";
$lang['C_code']['973'] = "Bahrain";
$lang['C_code']['880'] = "Bangladesh";
$lang['C_code']['1-246'] = "Barbados";
$lang['C_code']['32'] = "Belgium";
$lang['C_code']['1-441'] = "Bermuda";
$lang['C_code']['387'] = "Bosnia And Herzegovina";
$lang['C_code']['267'] = "Botswana";
$lang['C_code']['55'] = "Brazil";
$lang['C_code']['246'] = "British Indian O. Terr.";
$lang['C_code']['673'] = "Brunei Darussalam";
$lang['C_code']['359'] = "Bulgaria";
$lang['C_code']['226'] = "Burkina Faso";
$lang['C_code']['237'] = "Cameroon";
$lang['C_code']['.1'] = "Canada";
$lang['C_code']['1-345'] = "Cayman Islands";
$lang['C_code']['56'] = "Chile";
$lang['C_code']['86'] = "China";
$lang['C_code']['242'] = "Congo";
$lang['C_code']['243'] = "Congo D.R.";
$lang['C_code']['506'] = "Costa Rica";
$lang['C_code']['225'] = "Cote DIvoire";
$lang['C_code']['385'] = "Croatia";
$lang['C_code']['599'] = "Curacao";
$lang['C_code']['357'] = "Cyprus";
$lang['C_code']['420'] = "Czech Republic";
$lang['C_code']['45'] = "Denmark";
$lang['C_code']['1-809'] = "Dominican Republic";
$lang['C_code']['20'] = "Egypt";
$lang['C_code']['372'] = "Estonia";
$lang['C_code']['358'] = "Fiji";
$lang['C_code']['679'] = "Finland";
$lang['C_code']['33'] = "France";
$lang['C_code']['49'] = "Germany";
$lang['C_code']['233'] = "Ghana";
$lang['C_code']['350'] = "Gibraltar";
$lang['C_code']['30'] = "Greece";
$lang['C_code']['299'] = "Greenland";
$lang['C_code']['1-473'] = "Grenada";
$lang['C_code']['509'] = "Haiti";
$lang['C_code']['852'] = "Hong Kong";
$lang['C_code']['36'] = "Hungary";
$lang['C_code']['354'] = "Iceland";
$lang['C_code']['91'] = "India";
$lang['C_code']['62'] = "Indonesia";
$lang['C_code']['98'] = "Iran";
$lang['C_code']['964'] = "Iraq";
$lang['C_code']['353'] = "Ireland";
$lang['C_code']['972'] = "Israel";
$lang['C_code']['39'] = "Italy";
$lang['C_code']['81'] = "Japan";
$lang['C_code']['.7'] = "Kazakhstan";
$lang['C_code']['962'] = "Jordan";
$lang['C_code']['254'] = "Kenya";
$lang['C_code']['965'] = "Kuwait";
$lang['C_code']['996'] = "Kyrgyzstan";
$lang['C_code']['371'] = "Latvia";
$lang['C_code']['961'] = "Lebanon";
$lang['C_code']['266'] = "Lesotho";
$lang['C_code']['370'] = "Lithuania";
$lang['C_code']['352'] = "Luxembourg";
$lang['C_code']['389'] = "Macedonia ";
$lang['C_code']['265'] = "Malawi";
$lang['C_code']['853'] = "Macau";
$lang['C_code']['60'] = "Malaysia";
$lang['C_code']['230'] = "Mauritius";
$lang['C_code']['356'] = "Malta";
$lang['C_code']['52'] = "Mexico";
$lang['C_code']['691'] = "Micronesia";
$lang['C_code']['377'] = "Monaco";
$lang['C_code']['1-664'] = "Montserrat";
$lang['C_code']['212'] = "Morocco";
$lang['C_code']['258'] = "Mozambique";
$lang['C_code']['264'] = "Namibia";
$lang['C_code']['31'] = "Netherlands";
$lang['C_code']['977'] = "Nepal";
$lang['C_code']['64'] = "New Zealand";
$lang['C_code']['505'] = "Nicaragua";
$lang['C_code']['227'] = "Niger";
$lang['C_code']['234'] = "Nigeria";
$lang['C_code']['47'] = "Norway";
$lang['C_code']['968'] = "Oman";
$lang['C_code']['92'] = "Pakistan";
$lang['C_code']['970'] = "Palestine";
$lang['C_code']['507'] = "Panama";
$lang['C_code']['675'] = "Papua New Guinea";
$lang['C_code']['595'] = "Paraguay";
$lang['C_code']['51'] = "Peru";
$lang['C_code']['63'] = "Philippines";
$lang['C_code']['48'] = "Poland";
$lang['C_code']['351'] = "Portugal";
$lang['C_code']['1-787'] = "Puerto Rico";
$lang['C_code']['974'] = "Qatar";
$lang['C_code']['40'] = "Romania";
$lang['C_code']['7'] = "Russian Federation";
$lang['C_code']['250'] = "Rwanda";
$lang['C_code']['378'] = "San Marino";
$lang['C_code']['966'] = "Saudi Arabia";
$lang['C_code']['221'] = "Senegal";
$lang['C_code']['381'] = "Serbia And Montenegro";
$lang['C_code']['248'] = "Seychelles";
$lang['C_code']['232'] = "Sierra Leone";
$lang['C_code']['65'] = "Singapore";
$lang['C_code']['421'] = "Slovakia";
$lang['C_code']['386'] = "Slovenia";
$lang['C_code']['27'] = "South Africa";
$lang['C_code']['82'] = "South Korea";
$lang['C_code']['34'] = "Spain";
$lang['C_code']['94'] = "Sri Lanka";
$lang['C_code']['1-758'] = "St Lucia";
$lang['C_code']['268'] = "Swaziland";
$lang['C_code']['46'] = "Sweden";
$lang['C_code']['41'] = "Switzerland";
$lang['C_code']['886'] = "Taiwan";
$lang['C_code']['255'] = "Tanzania";
$lang['C_code']['66'] = "Thailand";
$lang['C_code']['216'] = "Tunisia";
$lang['C_code']['90'] = "Turkey";
$lang['C_code']['256'] = "Uganda";
$lang['C_code']['380'] = "Ukraine";
$lang['C_code']['971'] = "United Arab Emirates";
$lang['C_code']['44'] = "United Kingdom";
$lang['C_code']['1'] = "United States";
$lang['C_code']['598'] = "Uruguay";
$lang['C_code']['58'] = "Venezuela";
$lang['C_code']['84'] = "Vietnam";
$lang['C_code']['967'] = "Yemen";
$lang['C_code']['260'] = "Zambia";
$lang['C_code']['263'] = "Zimbabwe";

$lang['Hidden_explain']['1'] = "Data marked 'Hidden' are only available to Club Members or Officers";
$lang['Hidden_explain']['2'] = "Data marked 'Hidden' are only available to Club & District Officers";
$lang['Hidden_explain']['3'] = "<br>Data in italics are not visible to the public";
$lang['Warn_star'] = "<br><b><font color=#FF0000>*</font></b> Indicate problems for the public to contact this club";
$lang['Officers'] = "Officers";
$lang['Members'] = "Members";
$lang['The_public'] = "The Public";
$lang['Only'] = "only";
$lang['And_neighbours'] = "and neighbouring clubs";
$lang['All_events'] = "All events";
$lang['Nothing_scheduled'] = "Unknown";
$lang['Warn_contact'] = "WARNING - This club cannot be contacted %s by members of the public";
$lang['Warn_contact_e'] = "%s club officers could be contacted by potential visitors.<br>%s club officers have valid e-mail addresses.<br>%s club officers have made a phone number public.<br>%s club officers have made their name public";
$lang['Easily'] = "easily";
$lang['At_all'] = "AT ALL";

$lang['Event'] = "Event";
$lang['Event_Start'] = "Start Date";
$lang['Event_End'] = "End Date";
$lang['Page_set'] = 'Page Set';
$lang['Calendar_event_title'] = "Calendar Event";
$lang['View_calendar'] = "Calendar";
$lang['View_previous_month'] = "View Previous Month";
$lang['View_next_month'] = "View Next Month";
$lang['View_previous_year'] = "View Previous Year";
$lang['View_next_year'] = "View Next Year";
$lang['Calendar_repeat'] = "Repeat";
$lang['Calendar_start_monday'] = false;       //NTR
$lang['Main_calendar_start_monday'] = true;   //NTR
$lang['Date_selector'] = "Date Selector";   // title/header for Date Selector Window
$lang['Calendar_event_start'] = "Starting at";
$lang['Calendar_event_club'] = "Club Name";
$lang['Calendar_event_theme'] = "Meeting Theme";
$lang['Calendar_event_meeting'] = "Meeting Number";
$lang['Calendar_event_venue'] = "Venue";
$lang['Virtual_venue'] = "Meet online";
$lang['Virtual_meeting'] = "Click here to join meeting";
$lang['Virtual_mmissing'] = "Meeting ID not available";
$lang['Details'] = "Details of";
$lang['Next_tm'] = "Next Meeting";
$lang['Last_tm'] = "Last Meeting";
$lang['Every'] = "Every";
$lang['Inactive_event'] = "Contact the webmaster to enable all meeting types";
$lang['GDPR_warn'] = "Warning %s Users on this screen have not confirmed their privacy options and are at risk of being removed from easy-Speak";

$lang['Toastmasters'] = "Toastmasters";

$lang['Welcome'] = "Welcome";
$lang['WelcomeB'] = "Welcome back";

// Who viewed this topic
$lang['Topic_view_users'] = "List users who have viewed this topic";
$lang['Topic_view_agenda'] = "List users who have viewed this meeting";

$lang['Topic_count'] = "View count";
$lang['Viewed_topic_list'] = "Users who viewed this topic";
$lang['Viewed_agenda_list'] = "Users who viewed this agenda";

//TM language needed in many areas
$lang['Select_club'] = "Select a Club";
$lang['Agenda_not_exist'] = "The meeting you requested does not exist or has nothing in the agenda for you to assign.";
$lang['A_role'] = "a role";
$lang['A_roles'] = "The following roles: ";
$lang['Not_a_club'] = "Not a TM club";
$lang['Not_a_Member'] = "Not a member";
$lang['All_users'] = "All users";
$lang['TM_club'] = "Toastmaster club";
$lang['Club'] = "Club";
$lang['Member_of_clubs'] = "Connected to these Toastmaster clubs";
$lang['TM_club_group_explain'] = "If this group is a Toastmaster club, select the club name";
$lang['No_update_status'] = "Unable to update user status for this club";
$lang['B_speech'] = "Request a speech";
$lang['Status'] = "Status";
$lang['Meeting_details']= "Meeting details";
$lang['Change'] = "Change";
$lang['Is_tm_forum'] = "This is the discussion forum for the";
$lang['Print_s'] = "Print";
$lang['Printable'] = "Printable";
$lang['No_older_agenda'] = "There is no earlier meeting of this type";
$lang['No_newer_agenda'] = "No later meetings of this type created";
$lang['Click_new_meeting'] = "Click %sHere to create a new meeting%s"; // %s's here are for uris, do not remove!
$lang['Notify_photo'] = "Notify this user of new uploaded pictures";
$lang['Not_scheduled'] = "Not Scheduled";
$lang['Date_not_known'] = "Date not known";
$lang['Speeches_scheduled'] = "Speeches: %d requested, %d scheduled";
$lang['Meeting'] = "Meeting";
$lang['Not_attended'] = "Advised not attending";
$lang['Not_attended_short'] = "Not attending";
$lang['Losing_interest'] = "Losing interest?";
$lang['WOTD_title'] = "Word of the Day";
$lang['Newsletters'] = "Newsletters";
$lang['Training_summary'] = "Training Events";
$lang['Contest_summary'] = "Contest Events";
$lang['Officer_history'] = "Officer History";

//TM Edit user data
$lang['No_auth'] = "You may not edit this user";
$lang['User_updated'] = "The user was updated";

//TM club status
$lang['Club_stat'][CLUB_STATUS_ACTIVE] = "Active";
$lang['Club_stat'][CLUB_STATUS_DEMO] = "Demo";
$lang['Club_stat'][CLUB_STATUS_PRACTICE] = "Practice";
$lang['Club_stat'][CLUB_STATUS_INACTIVE] = "Summary";
$lang['Club_stat'][CLUB_STATUS_DORMANT] = "Dormant";
//$lang['Club_stat'][CLUB_STATUS_CL_ONLY] = "CL Only";
$lang['Club_stat'][CLUB_STATUS_TEMPLATE] = "Template";
$lang['Club_stat'][CLUB_STATUS_TEMPLATE_I] = "I Template";

$lang['Refer_club'] = "<br />If you would like to restart this club,<br /> please contact the Area Director";
$lang['ES_inactive_club'] = "The club no longer uses this system.<br />If you wish to restart easy-Speak for your club please contact support";
$lang['ES_activate_club'] = "The club does not use easy-Speak.<br />If you wish to start easy-Speak for your club please contact support";

$lang['Email_lock'] = "Your ability to use this site has been temporarily disabled because e-mail sent to you has bounced back as undeliverable.<br>The e-mail address in your profile has been marked as invalid.<br />Please go to your %sProfile%s, and update your email address.";

$lang['Edit_post_time'] = "Edit posting time";
$lang['Topic_time'] = "Topic time";
$lang['Post_time'] = "Post time";
$lang['Post_time_successfull_edited'] = "<b>Time update successfull.</b></span><br /><span class=\'postdetails\'>This window will be closed after 3 seconds.";

$lang['Hacking_attempt'] = "HACKING ATTEMPT";        //NTR

$lang['Login_attempts_exceeded'] = "SECURITY ALERT<br /><br />The maximum number of %s incorrect login attempts has been exceeded. You are not allowed to login for the next %s minutes.";
$lang['Please_remove_install_contrib'] = "Please ensure both the install/ and contrib/ directories are deleted";        //NTR

$lang['Session_invalid'] = "Invalid Session. Please resubmit the form.";


// Anti-bot Guest Post Mod
$lang['Confirm_post'] = "Human Guest?";
$lang['Confirm_post_explain'] = "Please select \'Yes\' before saving your message ";
$lang['Confirm_post_error'] = "As a precaution against robots posting spam messages, human guests must select \'Yes\' in \'Human Guest\'";

$lang['upload_image'] = "Upload Image";
//
// IM Portal http://www.integramod.com
//
$lang['Maps'] = "Maps";
$lang['Map'] = "Map";
$lang['Go_to'] = "View";
$lang['Map_D_explain'] = "Show clickable maps for the District";
$lang['Home'] = "Home";
$lang['Find_club'] = "Find a club - maps";
$lang['Full_info'] = "Full Information";
$lang['Conf_explain'] = "%s Conference Information";
$lang['About_TM_explain'] = "Show Information about Toastmasters";
$lang['Find_explain'] = "Show Google-map with many features";
$lang['Conference_qa'] = "Conference Q&A";
$lang['View_help'] = "View or add requests";
$lang['Title_forum'] = "News";
$lang['Comments'] = "Comments";
$lang['View_comments'] = "View Comments";
$lang['Post_your_comment'] = "Post your comment";
$lang['Read_Full'] = "Read Full Article";
$lang['All_art'] = "Back";
$lang['Newest_pic'] = "Newest Pic";
$lang['No_recent_pic'] = "No recent Club pictures";
$lang['Title_online_users'] = "Who is Online";
$lang['View_complete_list'] = "View complete list";
$lang['Title_poll'] = "Poll";
$lang['Poll'] = "Poll";
$lang['Vote'] = "Vote";
$lang['No_poll'] = "No poll at the moment";
$lang['Title_search'] = "Searching";
$lang['Advanced_search'] = "Advanced Search";
$lang['Title_statistics'] = "Statistics";
$lang['total_topics'] = " within <b>%s</b> topics";
$lang['Title_user_block'] = "User Block";
$lang['Register_new_account'] = "Don't have an account yet?<br />You can %sregister%s for FREE";
$lang['Remember_me'] = "Remember me";
$lang['Next_meetings'] = "Forthcoming meetings";
$lang['Next_contest'] = "Contests";
$lang['Next_training'] = "Officer training";
$lang['Next_exec'] = "Executive Meetings";
$lang['Next_council'] = "Council Meetings";
$lang['Next_exec_c'] = "Executive Council";
$lang['Next_help'] = "Click on a date to see the detail";
$lang['Other_events'] = "Other Events";
$lang['Your_clubs'] = "Links";
$lang['Select_district'] = "Select a District";
$lang['Site_map_including'] = "Site Map & club list";     //Must be short - ideally < 19 char
$lang['By'] = "by";

//Gmap
$lang['G_map_explain'] = "Hover over an icon for information or click on an icon for full detail of the Club";
$lang['G_map_nav'] = "You may move around by dragging the map with your mouse or clicking on the arrows<br />To <font color=#FF0000><b>zoom in or out</b></font> - click on the + and -<br />Double click to centre the map on a point";
$lang['Click_club_search'] = "Click %sHere to search for a club by name or address%s";
$lang['Print_m'] = "Print Map";
$lang['Alt_div_map'] = "Click %sHere to view map of the Division and Area structure%s";
$lang['POI_explain'] = "Download the club locations for a GPS of this ";
$lang['POI_tomtom'] = "Download the TomTom file";
$lang['POI_garmin'] = "Download the Garmin file";
$lang['POI_satnav_guide'] = "Instructions for use";

// End Display Searchbot mod

// Change Poster
$lang['Change_poster'] = "Change poster";
$lang['Post_updated'] = "Post succesfully updated";
$lang['Select_new_user'] = "Select new user for this item";
$lang['Move_all'] = "Tick this checkbox to change <em><b>all</b></em> posts by <b>%s</b> to the new user (**WARNING!! This action is irreversible - use at your own risk**)";
$lang['Moved_posts'] = "%d posts moved from <b>%s</b> to <b>%s</b>";
$lang['Move_posts_confirm'] = "Are you sure that you want to move all posts from <b>%s</b> to <b>%s</b>?";

$lang['Sitemap'] = "Sitemap";
$lang['Language'] = "Language";
$lang['Translation'] = "Translation";

$lang['BBCode_box_hidden'] = "Hidden";
$lang['BBcode_box_view'] = "Click to View Content";
$lang['BBcode_box_hide'] = "Click to Hide Content";

// UploadPic
$lang['UploadPic'] = "Upload a Picture";
$lang['UP_Back'] = "Back";
$lang['UP_BBCode'] = "BBCode";
$lang['UP_CloseWindow'] = "Cancel";
$lang['UP_Converted'] = "Larger images will be resized";
$lang['UP_CopyCode'] = "Standard";
$lang['UP_CopyCodeLeft'] = "Left";
$lang['UP_CopyCodeRight'] = "Right";
$lang['UP_CopyText'] = "Insert picture";
$lang['UP_CopyURL'] = "Insert as link";
$lang['UP_Custom'] = "Custom size";
$lang['UP_Datatypes'] = "Datatypes";
$lang['UP_Dimensions'] = "Dimensions";
$lang['UP_ErrCreateGIF'] = "Image too big.<br />A GIF-image must not be larger than %dx%d pixels in size.";
$lang['UP_ErrCreatePic'] = "Image could not be created.<br />Try uploading a smaller picture.";
$lang['UP_ErrDatatype'] = "The datatype <strong>%s</strong> is not supported.";
$lang['UP_ErrFilesize'] = "Filesize exceeds limit.";
$lang['UP_ErrGDLib'] = "GD-Library not available.";                                //NTR
$lang['UP_ErrImgDir'] = "Image-directory doesn't exist.";                         //NTR
$lang['UP_ErrLogin'] = "Please login.";
$lang['UP_ErrMinposts'] = "You have to write at least %d posts to be allowed to upload images.";
$lang['UP_ErrNoGallery'] = "Gallery not activated.";
$lang['UP_ErrPermission'] = "You don't have permission to upload.";
$lang['UP_ErrUpload'] = "Image could not be uploaded.";
$lang['UP_ErrWritable'] = "Image-directory is not writable.";                      //NTR
$lang['UP_Files'] = "Files";
$lang['UP_Gallery'] = "Gallery";
$lang['UP_Help'] = "Upload a picture and insert it into your message.";
$lang['UP_Maximum'] = "max.";
$lang['UP_Multiple'] = "Insert picture and upload another one";
$lang['UP_Note'] = "Note";
$lang['UP_PFile'] = "Picture file";
$lang['UP_Pixel'] = "pixel";              //NTR
$lang['UP_Resized'] = "resized";
$lang['UP_Rotate'] = "Rotation (right)";
$lang['UP_Rotate0'] = "None";             //NTR
$lang['UP_Rotate180'] = "180&deg;";       //NTR
$lang['UP_Rotate270'] = "270&deg;";       //NTR
$lang['UP_Rotate90'] = "90&deg;";         //NTR
$lang['UP_send'] = "Send";
$lang['UP_Title'] = "Upload picture";
$lang['UP_YourPics'] = "Your uploaded files";
$lang['UP_Information'] = ""; //NTR
//
// RSS
//
$lang['rss_forum'] = "forum RSS feed";
$lang['rss_topic'] = "topic RSS feed";
$lang['rss_latest'] = "latest topics RSS feed";
$lang['rss_portal'] = "portal RSS feed";
$lang['rss_kb'] = "knowledgebase RSS feed";

//Timeshift meetings
$lang['TZ_shift'] = 'Shift Meeting times';
$lang['TZ_help'] = 'Select the starting date and the ending date for meetings where you wish to move the times and then select the number of hours they are to be moved <br>(+ for later, - for earlier)';
$lang['TZ_start'] = 'First date to move';
$lang['TZ_end'] = 'Last date to move';
$lang['TZ_hours'] = 'Move by this many hours';


// End of language
// That's all, Folks!

?>