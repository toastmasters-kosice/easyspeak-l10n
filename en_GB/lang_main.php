<?php
/***************************************************************************
 *                            lang_main.php [English]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_main.php,v 1.85.2.15 2003/06/10 00:31:19 psotfx Exp $
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

//
// CONTRIBUTORS:
//         Add your details here if wanted, e.g. Name, username, email address, website
// 2002-08-27  Philip M. White        - fixed many grammar problems
//

//
// The format of this file is ---> $lang['message'] = "text";
//
// You should also try to set a locale and a character encoding (plus direction). The encoding and direction
// will be sent to the template. The locale may or may not work, it's dependent on OS support and the syntax
// varies ... give it your best guess!
//
$lang['ENCODING'] = "utf-8";     //NTR

$lang['lang_code'] = "1";      //Enter the language code from constants file (used to lookup fixed text)


$lang['junk']  = "JunkZ";
$lang['junk2']  = "JunkCCC";
//
// Common, these terms are used
// extensively on several pages
//
$lang['Forum'] = "Forum";
$lang['Category'] = "Category";
$lang['Topic'] = "Topic";
$lang['Topics'] = "Topics";
$lang['Replies'] = "Replies";
$lang['Views'] = "Views";
$lang['Post'] = "Post";
$lang['Posts'] = "Posts";
$lang['Times'] = "Times";
$lang['Posted'] = "Posted";
$lang['Username'] = "Username";
$lang['Password'] = "Password";
$lang['Email'] = "E-mail";
$lang['Mail'] = "Mail";
$lang['Poster'] = "Poster";
$lang['Author'] = "Author";
$lang['Time'] = "Time";
$lang['Hours'] = "Hours";
$lang['Hour'] = "Hour";
$lang['Minutes'] = "Mins";
$lang['Message'] = "Message";
$lang['Return'] = "Return";
$lang['Display'] = "Display";
$lang['Club_user_mode'] = "Club member view";
$lang['Club_officer_mode'] = "Officer view";

$lang['1_Day'] = "1 Day";
$lang['7_Days'] = "7 Days";
$lang['2_Weeks'] = "2 Weeks";
$lang['1_Month'] = "1 Month";
$lang['3_Months'] = "3 Months";
$lang['6_Months'] = "6 Months";
$lang['1_Year'] = "1 Year";

$lang['Go'] = "Go";
$lang['And'] = "and";
$lang['OR']= "OR";
$lang['Jump_to'] = "Jump to";
$lang['Submit'] = "Submit";
$lang['Reset'] = "Reset";
$lang['Cancel'] = "Cancel";
$lang['OK'] = "OK";
$lang['Preview'] = "Preview";
$lang['Confirm'] = "Confirm";
$lang['Spellcheck'] = "Spellcheck";
$lang['Yes'] = "Yes";
$lang['No'] = "No";
$lang['Never'] = "Never";
$lang['Y'] = "Y";           //Short form
$lang['N'] = "N";
$lang['D'] = "D";           // for 'detail'
$lang['Enabled'] = "Enabled";
$lang['Disabled'] = "Disabled";
$lang['Error'] = "Error";
$lang['Edit'] = "Edit";
$lang['Insert'] = "Insert";
$lang['Insert_above'] = "Insert above";
$lang['Delete'] = "Delete";
$lang['Action'] = "Action";
$lang['Move_up'] = "Move up";
$lang['Move_down'] = "Move down";
$lang['Top'] = "To Top";
$lang['Bottom'] = "To Bottom";
$lang['Anonymous'] = "Anonymous";
$lang['Please_wait'] = "Please wait...";

$lang['Next'] = "Next";
$lang['Back'] = "Back";
$lang['Previous'] = "Previous";
$lang['Goto_page'] = "Go to page";
$lang['Joined'] = "Joined Date";
$lang['IP_Address'] = "IP Address";
$lang['at'] = "at";
$lang['Hosted'] = "Hosted by";

$lang['Select_forum'] = "Select an area";
$lang['View_latest_post'] = "View latest post";
$lang['View_newest_post'] = "View newest post";
$lang['Page_of'] = "Page <b>%d</b> of <b>%d</b>"; // Replaces with: Page 1 of 2 for example

$lang['ICQ'] = "ICQ Number";
$lang['AIM'] = "AIM Address";
$lang['MSNM'] = "MSN Messenger";
$lang['GTALK'] = "Google Talk";
$lang['YIM'] = "Yahoo Messenger";
$lang['SKYPE'] = "Skype ID";
$lang['Aboutme_id'] = "about.me Username";
$lang['LinkedIn'] = "LinkedIn Profile";
$lang['Facebook'] = "Facebook Profile";
$lang['Twitter'] = "Twitter Account";
$lang['Youtube'] = "YouTube Account";
$lang['Gplus'] = "Google+ Account";
$lang['Meetup'] = "Meetup Account";
$lang['Aboutme'] = "about.me profile";
$lang['LinkedIn_explain'] = "Get the full URL from your LinkedIn Profile>View profile. e.g. - <br>www.linkedin.com/profile/view?id=12345&...";
$lang['Facebook_explain'] = "Get the full URL of your Facebook Profile. EITHER: <br>www.facebook.com/profile.php?id=1234567890<br>OR: <br>www.facebook.com/your.name";
$lang['Forum_Index'] = "%s Discussion Index";  // eg. sitename Forum Index, %s can be removed if you prefer

$lang['Post_new_topic'] = "Post new topic";
$lang['Post_new_event'] = "Create new event";
$lang['Reply_to_topic'] = "Reply to topic";
$lang['Reply_with_quote'] = "Reply with quote";

$lang['Click_return_topic'] = "Click %sHere to return to the topic%s"; // %s's here are for uris, do not remove!
$lang['Click_return_login'] = "Click %sHere to try again%s";
$lang['Click_return_forum'] = "Click %sHere to return to the forum%s";
$lang['Click_view_message'] = "Click %sHere to view your message%s";
$lang['Click_view_event'] = "Click %sHere to view your event%s";
$lang['Click_add_event'] = "Click %sHere to add another event%s";
$lang['Click_return_modcp'] = "Click %sHere to return to the Moderator Control Panel%s";
$lang['Click_return_group'] = "Click %sHere to return to group information%s";
$lang['Click_return_calendar'] = "Click %sHere to return to the calendar%s";
$lang['Click_return_memberlist'] = "Click %sHere to return to the User List%s";
$lang['Click_review_group'] = "Click %sHere to review your remaining group memberships%s";
$lang['Click_return_home'] = "Click %sHere to return to the home page%s";
$lang['Click_return_last'] = "Click %sHere to go to the last meeting%s";
$lang['Click_return_next'] = "Click %sHere to go to the next meeting%s";
$lang['Click_return_club'] = "Click %sHere to return to the club detail%s";
$lang['Click_return_agenda'] = "Click %sHere to return to the agenda%s";
$lang['Click_return_a_speech'] = "Click %sHere to return to speech allocation%s";
$lang['Click_return_e_agenda'] = "Click %sHere to return to edit agenda%s";
$lang['Click_return_booking'] = "Click %sHere to return to the booking form%s";
$lang['Click_return_assignment'] = "Click %sHere to return to the assignment screen%s";
$lang['Click_next_assignment'] = "Click %sHere to go to the NEXT meeting assignment screen%s";
$lang['Click_return_actual'] = "Click %sHere to finish entering actuals%s";
$lang['Click_return_welcome'] = "Click %sHere to return to the Home page%s";
$lang['Click_return_album'] = "Click %sHere to return to the Photo Album%s";
$lang['Click_return_clubadmin'] = "Click %sHere to go to Club Administration%s";
$lang['Click_return_clubregister'] = "Click %sHere to go to Club Registration%s";
$lang['Click_return_link_manager'] = "Click %sHere to return to the Link Manager%s";
$lang['Click_return_loc_manager'] = "Click %sHere to return to the Location Manager%s";
$lang['Click_return_role_manager'] = "Click %sHere to return to the Role Manager%s";
$lang['Click_return_email'] = "Click %sHere to return to the Mass Mail page%s";
$lang['Click_return_a_email'] = "Click %sHere to return to the Agenda E-mail screen%s";
$lang['Click_return_status_manager'] = "Click %sHere to return to the Status Manager%s";
$lang['Click_return_inbox'] = "Click %sHere to return to your Inbox%s";
$lang['Click_return_index'] = "Click %sHere to return to the Forum Index%s";
$lang['Click_return_orgdata'] = "Click %sHere to return to the District or Division%s";
$lang['Click_return_kb'] = "Click %sHere to return to the Knowledgebase%s";
$lang['Click_return_post'] = "Click %sHere to return to the post%s";
$lang['Click_go_profile'] = "Click %sHere to edit your Profile%s";
$lang['Click_return_event'] = "Click %sHere to return to the event%s";
$lang['Click_return_gmaps'] = "Click %sHere to return to Google map administration%s";
$lang['Click_return_candidates'] = "Click %sHere to return to Candidates profiles%s";
$lang['Click_return_conference'] = "Click %sHere to return to the conference pages%s";

$lang['Click_ti_login'] = "Please remember to update your personal data with Toastmasters International<br> Click %sHere to log in at the TI website%s";
$lang['TI_login'] = "Log in at the TI website";
$lang['TI_officer_manuals'] = "Download Club Officer Manuals";

$lang['Admin_panel'] = "Go to Administration Panel";
$lang['Club_admin_panel'] = "Club Control Panel";

$lang['Board_disable'] = "Sorry, but this site is currently closed for maintenance.  Please try again later.";
$lang['Redirected_club'] = "REDIRECTED<br /><br />This club has now moved<br /><br />Please change your favourites to use this new URL<br /><br />";

//
// Global Header strings
//
$lang['Registered_users'] = "Registered Users:";
$lang['Browsing_forum'] = "Users browsing this forum:";
$lang['Online_users_zero_total'] = "Total of  <b>0</b> users online: ";
$lang['Online_users_total'] = "Total of  <b>%d</b> users online: ";
$lang['Online_user_total'] = "Total of <b>%d</b> user online: ";
$lang['Reg_users_zero_total'] = "0 Registered, ";
$lang['Reg_users_total'] = "%d Registered, ";
$lang['Reg_user_total'] = "%d Registered, ";
$lang['Hidden_users_zero_total'] = "0 Hidden and ";
$lang['Hidden_user_total'] = "%d Hidden and ";
$lang['Hidden_users_total'] = "%d Hidden and ";
$lang['Guest_users_zero_total'] = "0 Guests";
$lang['Guest_users_total'] = "%d Guests";
$lang['Guest_user_total'] = "%d Guest";
$lang['Record_online_users'] = "Most users ever online was <b>%s</b> on %s"; // first %s = number of users, second %s is the date.

$lang['Admin_online_color'] = "%sAdministrator%s";
$lang['Mod_online_color'] = "%sModerator%s";

$lang['You_last_visit'] = "You last visited on %s"; // %s replaced by date/time
$lang['Current_time'] = "The time now is %s"; // %s replaced by time

$lang['Search_new'] = "View posts since last visit";
$lang['Search_your_posts'] = "View your posts";
$lang['Search_unanswered'] = "View unanswered posts";

$lang['Register'] = "Register";
$lang['Register_new'] = "Register as a new user";
$lang['Forgot_username'] = "Forgot your user name? - %sClick here to search for your name%s";
$lang['Profile'] = "Profile";
$lang['Edit_profile'] = "Edit your profile";
$lang['Edit_other'] = "Edit user profile";
$lang['Search'] = "Search";
$lang['Search_w'] = "Word search";
$lang['Search_u'] = "User search";
$lang['Search_c'] = "Club search";
$lang['Search_f'] = "Search Discussion Forums";
$lang['Search_k'] = "Search Knowledge Base";
$lang['Memberlist'] = "User List";
$lang['Annual_review'] = "Annual Meeting Review";
$lang['Officerlist'] = "Officer List";
$lang['FAQ'] = "FAQ";
$lang['News'] = "News";

$lang['KB_title'] = "Knowledge Base";
$lang['KB_map'] = "Knowledge Map";
$lang['Yahoogroups'] = "Yahoo! groups";
$lang['TIinfo'] = "TI Information";
$lang['TIstats'] = "District Stats";
$lang['DCPstats'] = "DCP Analysis";
$lang['Neighbouring'] = "Neighbouring Clubs";
$lang['Basecamp'] = "Pathways Base Camp";

$lang['BBCode_guide'] = "BBCode Guide";
$lang['Usergroups'] = "Usergroups";
$lang['Last_Post'] = "Last Post";
$lang['Moderator'] = "Moderator";
$lang['Moderators'] = "Moderators";

//
// Stats block text
//
$lang['Posted_articles_zero_total'] = "Our users have posted a total of <b>0</b> articles"; // Number of posts
$lang['Posted_articles_total'] = "Our users have posted a total of <b>%d</b> articles"; // Number of posts
$lang['Posted_article_total'] = "Our users have posted a total of <b>%d</b> article"; // Number of posts
$lang['Registered_users_zero_total'] = "We have <b>0</b> registered users"; // # registered users
$lang['Registered_users_total'] = "We have <b>%d</b> registered users"; // # registered users
$lang['Registered_user_total'] = "We have <b>%d</b> registered user"; // # registered users
$lang['Newest_user'] = "The newest registered user is <b>%s%s%s</b>"; // a href, username, /a
$lang['Newest_club_user'] = "The newest user in this club is <b>%s%s%s</b>"; // a href, username, /a
$lang['Newest_club'] = "The newest live club is <b>%s%s%s</b>"; // a href, clubname, /a
$lang['Live_clubs'] = "There are <b>%d</b> live Toastmaster Clubs on the system";
$lang['Number_clubs'] = "Live Toastmaster Clubs";
$lang['Number_tm_users'] = "TM user/Club combinations";
$lang['Number_tm_speeches'] = "Total number of speeches";
$lang['Number_club_speeches'] = "Number of speeches (club_id = %s)";
$lang['Average_tm_users'] = "Average users per club";
$lang['Managed_meetings'] = "We are managing <b>%d</b> Toastmaster meetings";
$lang['Managed_speeches'] = "We have details of <b>%d</b> Toastmaster speeches";
$lang['Number_meetings'] = "Managed Toastmaster Meetings";

$lang['No_new_posts'] = "No new posts";
$lang['New_posts'] = "New posts";
$lang['New_post'] = "New post";
$lang['No_new_posts_hot'] = "No new posts [ Popular ]";
$lang['New_posts_hot'] = "New posts [ Popular ]";
$lang['No_new_posts_locked'] = "No new posts [ Locked ]";
$lang['New_posts_locked'] = "New posts [ Locked ]";
$lang['Forum_is_locked'] = "Forum is locked";


//
// Login
//
$lang['Enter_password'] = "Please enter your username and password to log in.";
$lang['Change_password_title'] = "Use the form below to change your password.";

$lang['Login'] = "Log in";
$lang['Logout'] = "Log out";
$lang['Change_password'] = "Change Password";

$lang['Forgotten_password'] = "I forgot my password";

$lang['Log_me_in'] = "Log me on automatically each visit";

$lang['Error_login'] = "You have specified an incorrect or inactive username, or an invalid password.";
$lang['login_warn'] = "You have made %s incorrect login attempts from an IP address different from the one used in your last valid login<br>A further invalid login will cause the IP address %s to be banned and prevent ANY further access to the system<br><br>Use the 'I forgot my password' routine to get your password reset";

//
// Index page
//
$lang['No_Posts'] = "No Posts";
$lang['No_forums'] = "This board has no forums";

$lang['Private_Message'] = "Private Message";
$lang['Private_Messages'] = "Private Messages";
$lang['Messages'] = "Messages";
$lang['Who_is_Online'] = "Who is Online";
$lang['Prv_Msg'] = "Prv Msg.";

$lang['Mark_all_forums'] = "Mark all forums read";
$lang['Forums_marked_read'] = "All forums have been marked read";


//
// Viewforum
//
$lang['View_forum'] = "View Forum";

$lang['Forum_not_exist'] = "The forum you selected does not exist.";
$lang['Reached_on_error'] = "You have reached this page in error.";

$lang['Display_topics'] = "Display topics from previous";
$lang['All_Topics'] = "All Topics";

// Language based descriptions of topic types entered here OVERRIDE the descriptions in the table
$lang['Topic_type']['0'] = "";                     //NTR Normal posting
$lang['Topic_type']['1'] = "Sticky";
$lang['Topic_type']['2'] = "Announcement";
$lang['Topic_type']['3'] = "News";
$lang['Topic_type']['4'] = "Welcome";
$lang['Topic_type']['5'] = "[Parked]";

$lang['Topic_Moved'] = "Moved";
$lang['Topic_Poll'] = "[ Poll ]";

$lang['Mark_all_topics'] = "Mark all topics read";
$lang['Topics_marked_read'] = "The topics for this forum have now been marked read";

$lang['Rules_event_can'] = "You <b>can</b> create new events for this club";
$lang['Rules_post_can'] = "You <b>can</b> post new topics in this forum";
$lang['Rules_post_cannot'] = "You <b>cannot</b> post new topics in this forum";
$lang['Rules_reply_can'] = "You <b>can</b> reply to topics in this forum";
$lang['Rules_reply_cannot'] = "You <b>cannot</b> reply to topics in this forum";
$lang['Rules_edit_can'] = "You <b>can</b> edit your posts in this forum";
$lang['Rules_edit_cannot'] = "You <b>cannot</b> edit your posts in this forum";
$lang['Rules_delete_can'] = "You <b>can</b> delete your posts in this forum";
$lang['Rules_delete_cannot'] = "You <b>cannot</b> delete your posts in this forum";
$lang['Rules_vote_can'] = "You <b>can</b> vote in polls in this forum";
$lang['Rules_vote_cannot'] = "You <b>cannot</b> vote in polls in this forum";
$lang['Rules_moderate'] = "You <b>can</b> %smoderate this forum%s"; // %s replaced by a href links, do not remove!

$lang['No_topics_post_one'] = "There are no posts in this forum.<br />Click on the <b>Post New Topic</b> link on this page to post one.";


//
// Viewtopic
//
$lang['View_topic'] = "View topic";

$lang['Guest'] = "Guest";
$lang['Post_subject'] = "Post subject";
$lang['View_next_topic'] = "View next topic";
$lang['View_previous_topic'] = "View previous topic";
$lang['Submit_vote'] = "Submit Vote";
$lang['View_results'] = "View Results";

$lang['Topic_post_not_exist'] = "The topic or post you requested does not exist";
$lang['No_posts_topic'] = "No posts exist for this topic";
$lang['Event_not_exist'] = "Please check the calendar - The meeting you requested does not exist";

$lang['Display_posts'] = "Display posts from previous";
$lang['All_Posts'] = "All Posts";
$lang['Newest_First'] = "Newest First";
$lang['Oldest_First'] = "Oldest First";

$lang['Back_to_top'] = "Back to top";

$lang['Read_profile'] = "View user's profile";

$lang['No_send_email'] = "User e-mail address invalid";
$lang['No_spam_email'] = "User e-mail address bounces as spam";
$lang['Visit_website'] = "Visit their website";
$lang['ICQ_status'] = "ICQ Status";
$lang['Edit_delete_post'] = "Edit/Delete this post";
$lang['View_IP'] = "View IP address of poster";
$lang['Delete_post'] = "Delete this post";
$lang['Delete_event'] = "Delete this event";

$lang['wrote'] = "wrote"; // proceeds the username and is followed by the quoted text
$lang['Quote'] = "Quote"; // comes before bbcode quote output.
$lang['Code'] = "Code"; // comes before bbcode code output.

$lang['Edited_time_total'] = "Last edited by %s on %s; edited %d time in total"; // Last edited by me on 12 Oct 2001; edited 1 time in total
$lang['Edited_times_total'] = "Last edited by %s on %s; edited %d times in total"; // Last edited by me on 12 Oct 2001; edited 2 times in total

$lang['Lock_topic'] = "Lock this topic";
$lang['Unlock_topic'] = "Unlock this topic";
$lang['Move_topic'] = "Move this topic";
$lang['Delete_topic'] = "Delete this topic";
$lang['Split_topic'] = "Split this topic";

$lang['Stop_watching_topic'] = "Stop watching this topic";
$lang['Start_watching_topic'] = "Watch this topic for replies";
$lang['No_longer_watching'] = "You are no longer watching this topic";
$lang['You_are_watching'] = "You are now watching this topic";
$lang['Stop_watching_forum'] = "Stop watching this forum";
$lang['Start_watching_forum'] = "Watch this forum for posts";
$lang['No_longer_watching_forum'] = "You are no longer watching this forum.";
$lang['You_are_watching_forum'] = "You are now watching this forum.";

$lang['Total_votes'] = "Total Votes";
$lang['Voted_show'] = "Users who voted : "; // it means :  users that voted  (the number of voters will follow)
$lang['Poll_expires'] = "Results will be visible in : ";
$lang['Who_Voted'] = "Who Voted";
$lang['No_one'] = "No one";

//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = "Message body";
$lang['Topic_review'] = "Topic review";

$lang['No_post_mode'] = "No post mode specified"; // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

$lang['Post_a_new_topic'] = "Post a new topic";
$lang['Post_a_new_event'] = "Post a new event";
$lang['Post_a_reply'] = "Post a reply";
$lang['Post_topic_as'] = "Post topic as";
$lang['Edit_Post'] = "Edit post";
$lang['Options'] = "Options";

$lang['Post_Announcement'] = "Announcement";
$lang['Post_Sticky'] = "Sticky";
$lang['Post_Normal'] = "Normal";
$lang['Post_Poll'] = "Poll";

$lang['Event_type'] = "Event Type";
$lang['PT_cal_event'] = "Other Event";
$lang['PT_tm_event'] = "Toastmaster Meeting";
$lang['PT_tm_exec'] = "Committee Meeting";
$lang['PT_conf'] = "Conference";
$lang['PT_trn'] = "Officer Training";
$lang['DOT_trn'] = "District Officer Training";
$lang['Council'] = "Council";
$lang['ECouncil'] = "Exec Council";
$lang['Duplicate_meeting'] = "You already have a meeting of this type at the same time on this date";
$lang['Invalid_date'] = "There was a problem with the date selected - it has been changed to today's date<br>*** Go to the event and correct date AND time ***";

$lang['Confirm_delete'] = "Are you sure you want to delete this post?";
$lang['Confirm_delete_event'] = "Are you sure you want to delete this event?";
$lang['Confirm_delete_poll'] = "Are you sure you want to delete this poll?";

$lang['Flood_Error'] = "You cannot make another post so soon after your last; please try again in a short while.";
$lang['Empty_subject'] = "You must specify a subject when posting a new topic.";
$lang['Empty_message'] = "You must enter a message when posting.";
$lang['No_date'] = "You must enter a date for this event.";
$lang['Forum_locked'] = "This forum is locked: you cannot post, reply to, or edit topics.";
$lang['Topic_locked'] = "This topic is locked: you cannot edit posts or make replies.";
$lang['No_post_id'] = "You must select a post to edit";
$lang['No_role_id'] = "You must select a role";
$lang['No_topic_id'] = "You must select a topic to reply to";
$lang['No_valid_mode'] = "You can only post, reply, edit, or quote messages. Please return and try again.";
$lang['No_such_post'] = "There is no such post. Please return and try again.";
$lang['Deleted_post'] = "This meeting or role has been deleted";
$lang['Edit_own_posts'] = "Sorry, but you can only edit your own posts.";
$lang['Delete_own_posts'] = "Sorry, but you can only delete your own posts.";
$lang['Cannot_delete_replied'] = "Sorry, but you may not delete posts that have been replied to.";
$lang['Cannot_delete_poll'] = "Sorry, but you cannot delete an active poll.";
$lang['Empty_poll_title'] = "You must enter a title for your poll.";
$lang['To_few_poll_options'] = "You must enter at least two poll options.";
$lang['To_many_poll_options'] = "You have tried to enter too many poll options.";
$lang['Post_has_no_poll'] = "This post has no poll.";
$lang['Already_voted'] = "You have already voted in this poll.";
$lang['No_vote_option'] = "You must specify an option when voting.";
$lang['Short_url'] = 'Information is missing - please paste the complete link from the e-mail into your browser';

$lang['Add_poll'] = "Add a Poll";
$lang['Add_poll_explain'] = "If you do not want to add a poll to your topic, leave the fields blank.";
$lang['Poll_question'] = "Poll question";
$lang['Poll_option'] = "Poll option";
$lang['Add_option'] = "Add option";
$lang['Add_option_explain']= "Add each option before submitting the posting";
$lang['Update'] = "Update";
$lang['Poll_for'] = "Run poll for another";
$lang['Days'] = "Days"; // This is used for the Run poll for ... Days + in admin_forums for pruning
$lang['Poll_for_explain'] = "Enter 0 or leave blank for a never-ending poll";
$lang['Delete_poll'] = "Delete Poll";
$lang['Max_vote'] = "Maximum selections";
$lang['Max_vote_explain'] = "Enter 1 or leave blank to allow a vote for only one selection";
$lang['Max_voting_1_explain'] = "Please select only ";
$lang['Max_voting_2_explain'] = " answers";
$lang['Max_voting_3_explain'] = " (selections above this limit will be ignored)";
$lang['Vhide'] = "Hide results until poll expires";
$lang['Hide_vote'] = "Results";
$lang['Tothide_vote'] = "and number of votes";
$lang['Hide_vote_explain'] = "Hide until poll expires";
$lang['Vote_hide'] = "The results can only be seen when the poll is completed.";
$lang['Show_results'] = "Show poll results";
$lang['Poll_to_go'] = "Time remaining to vote";
$lang['Open_poll'] = "Unlimited";

$lang['Disable_HTML_post'] = "Disable HTML in this post";
$lang['Disable_BBCode_post'] = "Disable BBCode in this post";
$lang['Disable_Smilies_post'] = "Disable Smilies in this post";

$lang['HTML_is_ON'] = "HTML is <u>ON</u>";
$lang['HTML_is_OFF'] = "HTML is <u>OFF</u>";
$lang['BBCode_is_ON'] = "%sBBCode%s is <u>ON</u>"; // %s are replaced with URI pointing to FAQ
$lang['BBCode_is_OFF'] = "%sBBCode%s is <u>OFF</u>";
$lang['Smilies_are_ON'] = "Smilies are <u>ON</u>";
$lang['Smilies_are_OFF'] = "Smilies are <u>OFF</u>";

$lang['Attach_signature'] = "Attach signature (signatures can be changed in profile)";
$lang['Notify'] = "Notify me when a reply is posted";


$lang['Stored'] = "Your message has been entered successfully.";
$lang['Stored_e'] = "Your event has been entered successfully.";
$lang['Deleted'] = "Your message has been deleted successfully.";
$lang['Deleted_e'] = "Your event has been deleted successfully.";
$lang['Poll_delete'] = "Your poll has been deleted successfully.";
$lang['Vote_cast'] = "Your vote has been cast.";

$lang['Topic_reply_notification'] = "Topic Reply Notification";

$lang['bbcode_b_help'] = "Bold text: [b]text[/b]  (alt+b)";
$lang['bbcode_i_help'] = "Italic text: [i]text[/i]  (alt+i)";
$lang['bbcode_u_help'] = "Underline text: [u]text[/u]  (alt+u)";
$lang['bbcode_q_help'] = "Quote text: [quote]text[/quote]  (alt+q)";
$lang['bbcode_c_help'] = "Code display: [code]code[/code]  (alt+c)";
$lang['bbcode_l_help'] = "List: [list]text[/list] (alt+l)";
$lang['bbcode_o_help'] = "Ordered list: [list=]text[/list]  (alt+o)";
$lang['bbcode_p_help'] = "Insert image: [img( | =left | =right )]http://image_url[/img]  (alt+p)";
$lang['bbcode_w_help'] = "Insert URL: [url]http://url[/url] or [url=http://url]URL text[/url]  (alt+w)";
$lang['bbcode_a_help'] = "Close all open bbCode tags";
$lang['bbcode_s_help'] = "Font color: [color=red]text[/color]  Tip: you can also use color=#FF0000";
$lang['bbcode_f_help'] = "Font size: [size=x-small]small text[/size]";

//
// bbcode help format goes like this
// $lang['bbcode_help']['value'] = "BBCode Name: Info (Alt+%s)";
//
// value is what you put in $EMBB_values in posting.php
// %s gets replaced with the automatic hotkey that the bbcode gets assigned
//
$lang['bbcode_help']['value'] = "BBCode Name: Info (Alt+%s)";

$lang['bbcode_g_help'] = "Tables:   Click the question mark for more info..  (alt+g)";

$lang['Emoticons'] = "Emoticons";
$lang['More_emoticons'] = "View more Emoticons";

$lang['Font_color'] = "Font colour";
$lang['color_default'] = "Default";
$lang['color_dark_red'] = "Dark Red";
$lang['color_red'] = "Red";
$lang['color_orange'] = "Orange";
$lang['color_brown'] = "Brown";
$lang['color_yellow'] = "Yellow";
$lang['color_green'] = "Green";
$lang['color_olive'] = "Olive";
$lang['color_cyan'] = "Cyan";
$lang['color_blue'] = "Blue";
$lang['color_dark_blue'] = "Dark Blue";
$lang['color_indigo'] = "Indigo";
$lang['color_violet'] = "Violet";
$lang['color_white'] = "White";
$lang['color_black'] = "Black";

$lang['Font_size'] = "Font size";
$lang['font_tiny'] = "Tiny";
$lang['font_small'] = "Small";
$lang['font_normal'] = "Normal";
$lang['font_large'] = "Large";
$lang['font_huge'] = "Huge";

$lang['Close_Tags'] = "Close Tags";
$lang['Styles_tip'] = "Tip: Styles can be applied quickly to selected text.";


//
// Private Messaging
//
$lang['Private_Messaging'] = "Private Messaging";

$lang['Login_check_pm'] = "Log in to check your private messages";
$lang['New_pms'] = "%d new messages"; // You have 2 new messages
$lang['New_pm'] = "%d new message"; // You have 1 new message
$lang['No_new_pm'] = "No new messages";
$lang['Unread_pms'] = "%d unread messages";
$lang['Unread_pm'] = "%d unread message";
$lang['No_unread_pm'] = "No unread messages";
$lang['You_new_pm'] = "A new private message is waiting for you in your Inbox";
$lang['You_new_pms'] = "New private messages are waiting for you in your Inbox";
$lang['You_no_new_pm'] = "No new private messages are waiting for you";

$lang['Unread_message'] = "Unread message";
$lang['Read_message'] = "Read message";

$lang['Read_pm'] = "Read message";
$lang['Post_new_pm'] = "Post message";
$lang['Post_reply_pm'] = "Reply to message";
$lang['Post_quote_pm'] = "Quote message";
$lang['Edit_pm'] = "Edit message";

$lang['Inbox'] = "Inbox";
$lang['Outbox'] = "Outbox";
$lang['Savebox'] = "Savebox";
$lang['Sentbox'] = "Sentbox";
$lang['Flag'] = "Flag";
$lang['Subject'] = "Subject";
$lang['From'] = "From";
$lang['Lastvisit'] = "Last online";
$lang['To'] = "To";
$lang['Date'] = "Date";
$lang['Mark'] = "Mark";
$lang['Sent'] = "Sent";
$lang['Saved'] = "Saved";
$lang['Delete_marked'] = "Delete Marked";
$lang['Delete_all'] = "Delete All";
$lang['Save_marked'] = "Save Marked";
$lang['Save_message'] = "Save Message";
$lang['Delete_message'] = "Delete Message";
$lang['Usage'] = "This system must be used ONLY for Toastmasters Club, Area, Division or District business";

$lang['Display_messages'] = "Display messages from previous"; // Followed by number of days/weeks/months

$lang['No_messages_folder'] = "You have no messages in this folder";

$lang['Cannot_send_privmsg'] = "Sorry, but the administrator has prevented you from sending private messages or e-mail.";
$lang['No_to_user'] = "You must specify a username to whom to send this message.";
$lang['No_such_user'] = "Sorry, but no such user exists.";
$lang['No_email_cannot_send'] = "You must %sadd an e-mail address in your profile%s before you can send e-mail.";

$lang['Disable_HTML_pm'] = "Disable HTML in this message";
$lang['Disable_BBCode_pm'] = "Disable BBCode in this message";
$lang['Disable_Smilies_pm'] = "Disable Smilies in this message";

$lang['Message_sent'] = "Your message has been sent.";

$lang['Send_a_new_message'] = "Send a new private message";
$lang['Send_a_reply'] = "Reply to a private message";
$lang['Edit_message'] = "Edit private message";

$lang['Notification_subject'] = "New Private Message has arrived!";

$lang['Find_username'] = "Find a user";
$lang['Find'] = "Find";
$lang['No_match'] = "No matches found.";
$lang['Select_username'] = "Select this user";
$lang['Invalid_email'] = "Mark as invalid";
$lang['Bounced_email'] = "Mark as bouncing";

$lang['No_such_folder'] = "No such folder exists";

$lang['Mark_all'] = "Mark all";
$lang['Unmark_all'] = "Unmark all";

$lang['Confirm_delete_pm'] = "Are you sure you want to delete this message?";
$lang['Confirm_delete_pms'] = "Are you sure you want to delete these messages?";

$lang['Inbox_size'] = "Your Inbox is %d%% full"; // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = "Your Sentbox is %d%% full";
$lang['Savebox_size'] = "Your Savebox is %d%% full";

$lang['Click_view_privmsg'] = "Click %sHere to visit your Inbox%s";
// START - SEND PM ON REGISTER MOD - AbelaJohnB
$lang['register_pm_subject'] = "Welcome to %s";
$lang['register_pm'] = "Hello<br /><br />Welcome to %s. <br /><br />We hope you enjoy your time at this site.<br /><br />To get help on any aspect of using the site click 'Knowledgebase' at the top of any screen.<br />This link will take you to an overview of the system from a user point-of-view: https://<servername>/kb.php?mode=cat&cat=6<br />This link will take you to an overview of the Club Management: https://<servername>/kb.php?mode=cat&cat=5<br /><br />To gain full access to the areas that interest you please request membership of the appropriate groups.<br /><br />The following groups are available %s<br>You may use these links to request group membership now or click on 'usergroups' (menu of all screens) at any time.<br /><br />Membership of some groups is processed automatically but some require approval from the group moderator - in which case you will be advised by e-mail when your request has been processed.<br /><br />Click on the calendar and select a meeting that interests you. If you want to attend, click on the 'Thumbs up' next to your name and you will be added automatically to the guest list.<br /><br />~Enjoy!<br />%s  ";



//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = "Viewing profile :: %s"; // %s is username
$lang['About_user'] = "All about %s"; // %s is username
$lang['User_admin_for'] = "User Administration for %s"; // %s is username

$lang['Preferences'] = "Preferences";
$lang['TM_club_info'] = "Toastmaster Club Information";
$lang['Items_required'] = "Items marked with a * are required unless stated otherwise.";
$lang['Add_explain'] = "You may <b>EITHER</b> add a new user by completing the form <b>OR</b> connect an existing user to your club";
$lang['Registration_info'] = "Registration Information";
$lang['Status_history'] = "Status history";
$lang['Profile_info'] = "Profile Information";
$lang['TM_club_add'] = "Connect an existing system user to your club";
$lang['TM_c_explain'] = "If the user already exists on this system, use the 'Find User' button to locate them and then connect them to your club";
$lang['Profile_info_warn'] = "This information will be publicly viewable (but you may restrict who can see phone numbers and your name)";
$lang['Avatar_panel'] = "Avatar control panel";
$lang['Avatar_gallery'] = "Avatar gallery";
$lang['File_upload'] = "File Attachment Quota";
$lang['Both_names_required'] = "Both a first and a second name are required";
$lang['My_profile'] = "My User Profile";



//Club Registration Wizard
$lang['Club_Registration'] = "Club Registration";
$lang['tab_Web'] = "Web";
$lang['tab_Club_Info'] = "Club Info";
$lang['tab_Meeting'] = "Meeting";
$lang['tab_Region'] = "Region";
$lang['tab_Location'] = "Map";




$lang['Website'] = "Website";
$lang['Location'] = "Location";
$lang['Contact'] = "Contact";
$lang['Email_address'] = "E-mail address";
$lang['Send_private_message'] = "Send private message";
$lang['Subdomain'] = "Hosted site";

$lang['Interests'] = "Personal Background";
$lang['Occupation'] = "Occupation";
$lang['Poster_rank'] = "Poster rank";
$lang['Member_rank'] = "Status";

$lang['Total_posts'] = "Total posts";
$lang['User_post_pct_stats'] = "%.2f%% of total"; // 1.25% of total
$lang['User_post_day_stats'] = "%.2f posts per day"; // 1.5 posts per day
$lang['Search_user_posts'] = "Find all posts by %s"; // Find all posts by username

$lang['No_user_id_specified'] = "Sorry, but that user does not exist.";
$lang['Wrong_Profile'] = "You cannot modify a profile that is not your own.";

$lang['Only_one_avatar'] = "Only one type of avatar can be specified";
$lang['File_no_data'] = "The file at the URL you gave contains no data";
$lang['No_connection_URL'] = "A connection could not be made to the URL you gave";
$lang['Incomplete_URL'] = "The URL you entered is incomplete";
$lang['Wrong_remote_avatar_format'] = "The URL of the remote avatar is not valid";
$lang['No_send_account_inactive'] = "Sorry, but your password cannot be retrieved because your account is currently inactive.<br />User the link on the e-mail sent to you at registration or contact the site administrator for more information.";
$lang['No_send_invalid_email'] = "Sorry, but your password cannot be retrieved because your account does not have a valid e-mail address.<br />User the link on the e-mail sent to you at registration or contact the site administrator for more information.";
$lang['Unknown'] = "No record";
$lang['User_not_active'] = "Not activated";
$lang['Always_smile'] = "Always enable Smilies";
$lang['Always_html'] = "Always allow HTML";
$lang['Always_bbcode'] = "Always allow BBCode";
$lang['Always_add_sig'] = "Always attach my signature";
$lang['Always_notify'] = "Always notify me of replies";
$lang['Always_notify_explain'] = "Sends an e-mail when someone replies to a topic you have posted in. This can be changed whenever you post.";

$lang['Board_style'] = "Colour Scheme";
$lang['Board_lang'] = "Board Language";
$lang['User_lang'] = "Default language";
$lang['Change_user_lang'] = "Change default language";
$lang['Timezone'] = "Timezone";
$lang['DST'] = "Ignoring Daylight-saving time";
$lang['Date_format'] = "Date format";
$lang['Date_format_explain'] = "The syntax used is identical to the PHP <a href='http://www.php.net/date' target='_other'>date()</a> function.";     //NTR
$lang['Signature'] = "Signature";
$lang['Signature_explain'] = "This is a block of text that can be added to posts you make. There is a %d character limit";
$lang['Public_view_email'] = "Always show my e-mail address";

$lang['Current_password'] = "Current password";
$lang['New_password'] = "New password";
$lang['Confirm_password'] = "Confirm password";
$lang['Confirm_password_explain'] = "You must confirm your current password if you wish to change your e-mail address.";
$lang['password_if_changed'] = "You only need to supply a password if you want to change it";
$lang['password_confirm_if_changed'] = "You only need to confirm your password if you changed it above";
$lang['Confirm_password_short'] = "You must enter your current password above to take this option";

$lang['Avatar'] = "Avatar";
$lang['Avatar_explain'] = "Displays a small graphic image below your details in posts. Only one image can be displayed at a time, its width can be no greater than %d pixels, the height no greater than %d pixels, and the file size no more than %d KB.";
//$lang['Avatar_explain'] = "Displays a small graphic image below your details in posts. Only one image can be displayed at a time. A %d x %d pixels height/width thumbnail will be created from your upload image. You may upload any size image, but if the photo is large it will take a few minutes to upload and create the thumbnail. Please be patient.";
$lang['Upload_Avatar_file'] = "Upload Avatar from your machine";
$lang['Upload_Avatar_URL'] = "Upload Avatar from a URL";
$lang['Upload_Avatar_URL_explain'] = "Enter the URL of the location containing the Avatar image, it will be copied to this site.";
$lang['Link_remote_Avatar'] = "Link to off-site Avatar";
$lang['Link_remote_Avatar_explain'] = "Enter the URL of the location containing the Avatar image you wish to link to.";
$lang['Select_from_gallery'] = "Select Avatar from gallery";
$lang['View_avatar_gallery'] = "Show gallery";

$lang['Select_avatar'] = "Select avatar";
$lang['Return_profile'] = "Cancel avatar";
$lang['Select_category'] = "Select category";

$lang['Delete_Image'] = "Delete Image";
$lang['Current_Image'] = "Current Image";

$lang['Notify_on_privmsg'] = "Notify on new Private Message";
$lang['Popup_on_privmsg'] = "Pop up window on new Private Message";
$lang['Popup_on_privmsg_explain'] = "Some templates may open a new window to inform you when new private messages arrive.";
$lang['Hide_user'] = "Hide your online status";

$lang['Profile_updated'] = "Your profile has been updated";
$lang['Profile_updated_inactive'] = "Your profile has been updated. However, you have changed vital details, thus your account is now inactive. Check your e-mail to find out how to reactivate your account, or if admin activation is required, wait for the administrator to reactivate it.";

$lang['Password_mismatch'] = "The passwords you entered did not match.";
$lang['Already_member'] = "The user is already connected to this club.";
$lang['Current_password_mismatch'] = "The current password you supplied does not match that stored in the database.";
$lang['Password_long'] = "Your password must be no more than 32 characters.";

$lang['Username_taken'] = "Sorry, but this username has already been taken.";
$lang['Name_invalid'] = "Sorry, but this user's name contains an invalid character such as '@'";
$lang['Username_invalid'] = "Sorry, but this username contains an invalid character such as '@', '.' or a blank";
$lang['Username_disallowed'] = "Sorry, but this username has been disallowed.";
$lang['Name_duplicate'] = "We already have a member named %s. Please log in or request your password be resent";
$lang['Name_in_username'] = "To protect privacy you may not use the full Family Name as part of the username";
$lang['Forget_me_explain'] = "I exercise my 'right to be forgotten' and request that all information about me be removed from the easy-Speak system.
	<br />I understand that this will remove <b>ALL</b> my data including membership of any club and any past or future roles.
	<br /><br /><b>This CANNOT be reversed</b>, you will need to (re)join a club and enter any past history by hand if you change your mind";
$lang['Forget_me'] ="Remove ALL my data";
$lang['Disclose'] ="Show everything easy-Speak knows about me";

$lang['Email_taken'] = "Sorry, but this e-mail address is already registered to another user";
$lang['Email_banned'] = "Sorry, but this e-mail address has been banned.";
$lang['Email_unwanted'] = "Sorry, but we cannot accept e-mail for";
$lang['Email_invalid'] = "Sorry, but that e-mail address is invalid.";
$lang['Email_unverified'] = "Sorry, but this e-mail address cannot be verified, see the %s page for further information "; // %s is replaced with a link to the FAQ page
$lang['No_connection'] = "Could not validate this address by connecting to the mail server.";
$lang['Email_spam'] = "This address is invalid - possible anti-spam problem";
$lang['Email_bounced'] = "This address is invalid - E-mail to this address bounced";
$lang['Email_SMTP'] = "This address '%s' is invalid - it failed a SMTP check";
$lang['Email_Cloud'] = "This address '%s' has been refused by Cloudmark - refer to the problem reports forum";
$lang['Email_reval'] = "I confirm that I have<b> whitelisted %s</b> with the mail service at<b> %s</b> and would like easy-Speak to continue using %s as an e-mail address";
$lang['Email_reval1'] = "I confirm that the problems with this address are resolved and would like easy-Speak to continue using %s as an e-mail address";
$lang['Server_SMTP'] = "The remote mail server said";

$lang['TM_Number_duplicate'] = "Duplicate TMI Membership Number: %s";
$lang['Email_duplicate'] = "Another user is registered with the E-mail Address: %s";
$lang['Username_duplicate'] = "Duplicate Username: %s.  Next Available: %s";

$lang['Signature_too_long'] = "Your signature is too long.";
$lang['Fields_empty'] = "You must fill in the required fields.";
$lang['Avatar_filetype'] = "The avatar filetype must be .jpg, .gif or .png";
$lang['Avatar_filesize'] = "The avatar image file size must be less than %d KB"; // The avatar image file size must be less than 6 KB
$lang['Avatar_imagesize'] = "The avatar must be less than %d pixels wide and %d pixels high";
$lang['Status_date_error'] = "Status change far into the future!";

$lang['Welcome_subject'] = "Welcome to %s Toastmaster Automation site"; // Welcome to my.com Toastmaster Automation
$lang['New_account_subject'] = "New user account";
$lang['Account_activated_subject'] = "Account Activated";

$lang['New_account_tm'] = "a club administrator from %s has created a user-id for you on this site.";
$lang['New_account_tm2'] = "You may book in to the next Club meeting by %sclicking on this link%s";
$lang['New_account_tm3'] = "You may see all contact details by %sclicking on this link%s";
$lang['Account_added'] = "Thank you for registering. Your account has been created. You will now be logged in with your username and password - Please remember them for future use.";
$lang['Account_added_tm'] = "The account has been created and a welcoming e-mail sent to the user";
$lang['Account_added_no_em'] = "The account has been created WITHOUT AN EMAIL ADDRESS";
$lang['Account_added_not_sent'] = "The account has been created, but no email has been sent to the user";
$lang['Account_inactive'] = "Your account has been created. However, this site requires account activation.<br /><br />An activation key has been sent to the e-mail address you provided.<br /><br />Please check your e-mail for further information.<br/>You will not be able to use this service until you use the confirmation link on the e-mail.";
$lang['Account_inactive_admin'] = "Your account has been created. However, this site requires account activation by the administrator. An e-mail has been sent to them and you will be informed when your account has been activated";
$lang['Account_active'] = "Your account has now been activated. Thank you for registering";
$lang['Account_active_admin'] = "The account has now been activated";
$lang['Reactivate'] = "Reactivate your account!";
$lang['Already_activated'] = "You have already used that link to activate your account.<br>You should now log in using the password you set.";
$lang['COPPA'] = "Your account has been created but has to be approved. Please check your e-mail for details.";
$lang['Your_username'] = "Your username and password for";
$lang['Password_reset'] = "An e-mail has been sent to the user advising of their new password";

$lang['Registration'] = "Registration Agreement Terms";
$lang['Reg_agreement'] = "While the administrators and moderators of this site will attempt to remove or edit any generally objectionable material as quickly as possible, it is impossible to review every message. Therefore you acknowledge that all posts made to this website express the views and opinions of the author and not the administrators, moderators or webmaster (except for posts by these people) and hence will not be held liable.
<br /><br />You agree not to post any abusive, obscene, vulgar, slanderous, hateful, threatening, sexually-oriented or any other material that may violate any applicable laws. Doing so may lead to you being immediately and permanently banned (and your service provider being informed). The IP address of all posts is recorded to aid in enforcing these conditions.
<br />You agree that the webmaster, administrator and moderators of this forum have the right to remove, edit, move or close any topic at any time should they see fit.
<br />You confirm that you have read and consent to the Terms and Conditions for use of this site, which are available through the link at the foot of the page.
<br /><br />We record information about you and your participation in Toastmasters and provide the facilities to enable you and the Toastmasters organisation to record, plan and manage your progress through the Toastmasters educational program. You consent that this information be recorded and confirm that you will review the privacy choices in your personal profile. You may exercise your \"Right to be forgotten\" at any time by selecting that option in your personal profile.
<br />Our Privacy policy is always available through the link at the foot of every page.
<br /><br />By clicking Register below you agree to be bound by these conditions.";

$lang['Agree_under_13'] = "I Agree to these terms and am <b>under</b> 13 years of age";
$lang['Agree_over_13'] = "I Agree to these terms";
$lang['Agree_not'] = "I do not agree to these terms";

$lang['Wrong_activation'] = "The activation key you supplied does not match any in the database.";
$lang['Send_password'] = "Send me a new password";
$lang['Password_updated'] = "A new password has been created; please check your e-mail for details on how to activate it.";
$lang['Password_updated_U'] = "A new password has been created and sent to this user.";
$lang['No_email_match'] = "The e-mail address you supplied does not match the one listed for that username.";
$lang['No_username_match'] = "The username entered does not match the one stored in the database";
$lang['New_password_activation'] = "New password activation";
$lang['Password_activated'] = "Your account has been re-activated and you will be logged in automatically.<br>Now you MUST set a new password";
$lang['Other_reg'] = "Other registrations";
$lang['Admin_no_edit'] = "No authority to edit an ADMIN level user<br>DO NOT PROCEED - YOU WILL BE BANNED";
$lang['Password_set'] = "Set Password for: ";
$lang['Password_message_strict'] = "Must contain at least one number and one uppercase, one lowercase letter, one non-alphanumeric character and at least %s characters";
$lang['Password_message_lax'] = "Must contain at least one number and one uppercase or lowercase letter, and at least %s characters";
$lang['Password_message'] = "Password must contain the following:";
$lang['Password_lowercase'] = "A lowercase letter";
$lang['Password_uppercase'] = "A capital (uppercase) letter";
$lang['Password_letter'] = "A capital (uppercase) or lowercase letter";
$lang['Password_nonalpha'] = "A non-alphanumeric character e.g *@!/ etc.";
$lang['Password_number'] = "A number";
$lang['Password_min_length'] = "Minimum %s characters";
$lang['Password_show'] = "Show Password";
$lang['Password_match'] = "Match";
$lang['Password_not_match'] = "Not matching";
$lang['Password_reset'] = "Password has been reset ";
$lang['Password_change_click'] = "To change your password click: ";
$lang['Change_password'] = "Change Password";
$lang['Current_password_wrong'] ="Current password is wrong";
$lang['Enter_email'] = "Enter your email address";
$lang['Enter_username'] = "Enter your username";
$lang['Reset_email'] = "The resest email must be actioned within %s minutes<br/>Please inform the member before clicking the button";
$lang['Expired_link'] = "The Email Link has expired, please try again";
$lang['Invalid_link'] = "The Email Link is invalid, please try again";
$lang['Password_changed_email'] = "Password Changed Notification";
$lang['Password_change_action'] = " changed your password ";
$lang['Email_change_action'] = " changed your email address ";

$lang['Privacy_prompt'] = "It has been some time since you reviewed your personal settings, including your privacy choices.<br>Keeping your personal information up to date can help better protect your account.<br ><br >easy-Speak allows you to choose whether the public, club members or only Club and District officers are able to see your name and phone numbers etc.
	<br>You may also exercise your right to be forgotten - to remove all data, including membership of any clubs known to easy-Speak";
$lang['Privacy_click'] = "Please %sclick here to view and edit your profile%s, including your privacy choices.<br><br>You may view and edit your Profile at any time from the Menubar > Profile.";
$lang['Privacy_review'] = "Please review your privacy settings and press \"Save\" to confirm your choices.<br><br>Our Privacy Policy is always available from the link at the bottom of every page<br />and you may review and edit your profile at any time through the Menubar > Profile screen.";

// Webcal
$lang['Webcal_subs_title'] = "Subscribe to Web Calendar";
$lang['Webcal_subs_subtitle_mobile'] = "Mobile";
$lang['Webcal_subs_platf_iOS'] = "iPhone, iPad and iPod touch";
$lang['Webcal_subs_platf_iOS_note'] = "E-mail with instructions how to subscribe will be sent to your e-mail address. Open the e-mail on your iDevice and follow the instructions.";
$lang['Webcal_subs_platf_Android'] = "Android Device";
$lang['Webcal_subs_platf_Android_note'] = "Subscribe in Google Calendar that you use in your Android device.";
$lang['Webcal_subs_subtitle_web'] = "Web";
$lang['Webcal_subs_platf_Google_cal'] = "Google Calendar";
$lang['Webcal_subs_platf_Live_cal'] = "Microsoft Outlook.com/Live/Hotmail Calendar";
$lang['Webcal_subs_platf_Live_cal_note'] = "In the Outlook.com Calendar Import/Subscribe page, select the option to <b>Subscribe</b>.";
$lang['Webcal_subs_subtitle_desktop'] = "Desktop";
$lang['Webcal_subs_platf_Outlook'] = "Microsoft Outlook 2007 and higher";
$lang['Webcal_subs_platf_Outlook_note'] = "<a href='%s'target='_blank' class='nav'>Read more</a> about subscribing to web calendars in Microsoft Outlook.";
$lang['Webcal_subs_platf_OSX_Cal'] = "OS X Calendar";
$lang['Webcal_subscribe'] = "Subscribe";
$lang['Webcal_subs_email_conformation'] = "E-mail with instructions how to subscribe will be sent to your e-mail address.";
$lang['Webcal_subs_email_success'] = "E-mail sent. Check your Spam folder if you cannot find the email in your Inbox. If the email has not arrived, open this page on your iDevice and subscribe there.";
$lang['Webcal_subs_email_error'] = "Error sending e-mail.";
$lang['Webcal_timezone_name_missing'] = "Time zone name must be set in club data in order to publish web calendar for your club. Please contact your club administrator to make this change.";
$lang['Webcal_not_club'] = "Web calendars are published only for clubs. Select a club and revisit this page.";

// Start Display Searchbot mod
$lang['google'] = "Google Bot";                     //NTR
$lang['inktomi'] = "Yahoo/Inktomi Bot";             //NTR
$lang['lycos'] = "Lycos Bot";                       //NTR
$lang['infoseek'] = "InfoSeek Bot";                 //NTR
$lang['msn'] = "MSN Bot";                           //NTR
$lang['altavista'] = "Altavista Bot";               //NTR
$lang['excite'] = "Excite Bot";                     //NTR
$lang['northernlight'] = "Northen Light Bot";       //NTR
$lang['wisenut'] = "Wisenut Bot";                   //NTR
$lang['askjeeves '] = "Ask Jeeves Bot";             //NTR
// End Display Searchbot mod

?>
