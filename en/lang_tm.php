<?php
/***************************************************************************
 *                                 lang_tm.php
 *                            -------------------
 *   begin                : 17th Jan 2005
 *   copyright            : Malcolm Warden
 *                        : malcolm.warden@virgin.net
 *
 *
 ***************************************************************************/
if ( !defined('IN_PHPBB') )
{
        die("Hacking attempt");
}

$lang['For'] = "for";
$lang['Last'] = "Last";
$lang['New_user'] = "++ New++";                //Should be 8 chars long
$lang['User'] = "User %d";

//Error Messsages
$lang['Restricted_data'] = "This information is restricted to full members of %s";
$lang['Cannot_Print'] = "Missing Data - Cannot Print the Agenda!";
$lang['Cannot_Close'] = "Missing Data - Cannot Close the Meeting!";
$lang['Refresh'] = "Refresh this Page";
$lang['timed_out'] = "This page has timed out. %s Refresh this Page.%s";
$lang['When_asked'] = "When asked why, they replied";
$lang['No_meeting'] = "Sorry, the meeting requested cannot be found";
$lang['Not_current_GDPR'] = "WARNING - This user last updated their privacy settings %s and is at risk of being 'forgotten'";
$lang['Not_active_club'] = "This user has not confirmed their connection to the club";
$lang['Not_active_club_s'] = "Not confirmed club connection";

//Club selection
$lang['Club_selected'] = "Selection successful";
$lang['C_select_explain'] = "Select the club that you wish to look at";
$lang['subdomain_select'] = "subdomain membership for";
$lang['Find_clubname'] = "Select a club";
$lang['Search_club_explain'] = "Enter a City, Town or part of the address or street directions";
$lang['This_club'] = "This Club";

$lang['Club_Name'] = "Club Name";
$lang['Abbreviation'] = "Abbreviation";
$lang['Public_link'] = "Public url for this";
$lang['Club_number'] = "Club Number";
$lang['Club_area'] = "Area";
$lang['Club_district'] = "District";
$lang['Club_division'] = "Division";
$lang['Club_type_l'] = "Club type";
$lang['Club_sponsor_s'] = "Sponsor";
$lang['Not_applicable'] = "Not applicable";
$lang['Meeting_info'] = "Meeting Information";
$lang['Meeting_day'] = "The club normally meets on:";
$lang['Meeting_Place'] = "Meeting Place";
$lang['International'] = "Toastmasters International";
$lang['Meetings'] = "Meetings";
$lang['At'] = "of the month at";
$lang['At_only'] = "at";
$lang['TM_no'] = "Member No.";
$lang['No_pictures'] = "No photo gallery";
$lang['No_photo_gallery'] = "The club's photo gallery is missing.  Please contact easy-Speak support.";
$lang['Other_local']= "Neighbouring Clubs";
$lang['Other_selected'] = "Selected Clubs";
$lang['Distance_explain'] = "Distances are measured in a straight line ignoring any obstacles";
$lang['Distance_explain2'] = "Distances are %s measured in a straight line from %s ignoring any obstacles";
$lang['dist']['1'] = "miles";
$lang['dist']['2'] = "Km";
$lang['Meeting_days_explain'] = "ONLY IF YOU NEED TO OVERRIDE CALCULATED DATA FOR THE DESCRIPTION";
$lang['Agenda_format_description'] = "Meeting roles, agenda templates and other initial settings will be imported based on this parameter";
$lang['Google_no'] = "Google Maps doesn't understand your address!  Please try again!";
$lang['Map_move'] = "Move the map to pin-point the exact location of your club.  Set the appropriate zoom level for visitors.<br>(Hint, if Google has difficulty with the address, make sure that you lay it out as if addressing and envelope and include the country)";
$lang['Club_it_support'] = "Club IT Support (Username)";
$lang['Club_it_support_description'] = "The username of the person who will be setting up all the members, officers, and agendas etc for the new club";

$lang['Club_founded']= "Club Founded";
$lang['Def_time']= "Default Meeting Time";
$lang['Def_location']= "Default Location";
$lang['Club_info'] = "Club and Officer Information";
$lang['Contact_info'] = "Contact Information";
$lang['Phone_contact'] = "Phone Contact";
$lang['Club_type']['-1'] = "Gavel Club";
$lang['Club_type']['1'] = "Community Club";
$lang['Club_type']['2'] = "Company Club";
$lang['Club_type']['3'] = "Government Agency";
$lang['Club_type']['4'] = "Military Club";
$lang['Club_type']['5'] = "Correctional Institution";
$lang['Club_type']['6'] = "College Club";
$lang['Club_type']['7'] = "Church Club";
$lang['Club_type']['8'] = "Advanced Toastmasters";
$lang['Club_type']['9'] = "Other Institution or Specialised Club";
$lang['Club_type']['10'] = "Prospective Club";
$lang['Club_type'][DISTRICT] = "District";
$lang['Club_type'][DIVISION] = "Division";
$lang['Club_type'][AREA] = "Area";
$lang['Club_type'][EVENT] = "Conference Team";
$lang['Club_type'][SHOP] = "Shop";
$lang['Club_type'][CLUB] = "Club";
$lang['Club_type'][''] = "";            //NTR
$lang['Areas_in'] = "Areas in";
$lang['Club_open'] = "This club is";
$lang['Club_open_code']['O'] = "Open to all interested persons";
$lang['Club_open_code']['G'] = "Open only to members of a specific organisation or group";
$lang['Club_open_all'] = "Open to all";
$lang['Club_open_no'] = "Eligible members only";
$lang['Next_link'] = "Select the code from the text box and paste it into your club website to display the date of the next meeting automatically";
$lang['Next_QR'] = "Select this QR code and paste it into your publicity material to display the next meeting";
$lang['Website_QR'] ="Select this QR code and paste it into your publicity material to display the hosted website";

$lang['Sample'] = "Demonstration and sample of code for your Club website";
$lang['Print_invoice'] = "Print Invoice";
$lang['Last_donated'] = "Last contribution";
$lang['Thanks_donated'] = "Thank you for your contribution to easy-Speak running costs";
$lang['Populate'] = "Add hierarchy";
$lang['Synch_TI'] = "Use TI organisation";
$lang['QR'] = "QR codes to use on your printed material";

//Workbook Status
$lang['Educational_workbook'] = "Educational Workbook";
$lang['Speech_workbook'] = "Speech Workbook";
$lang['Leadership_workbook'] = "Leadership Workbook";
$lang['System_workbook'] = "System Workbook";
$lang['Duplicate_workbook'] = "This is a duplicate workbook.  Workbooks must be completed before they can be repeated.";
$lang['Select_workbook_error'] = "You should select a speech manual and assignment<br /><br />Unspecified speeches cleared for User";

$lang['TMI_info'] = "Information from the Toastmaster International website";
$lang['TMI_DCP'] = "Distinguished Club status";
$lang['Awards_by'] = "Educational Awards by";
$lang['Summaries'] = "Summaries";
$lang['Ind_based'] = "Indirectly based on TI website data";
$lang['Take_time'] = "May take some time to calculate";
$lang['Ed_history'] = "Club Educational History";
$lang['DCP_history'] = "Club DCP History";
$lang['Status_info'] = "Status Information";
$lang['TI_other'] = "Other information and change requests";
$lang['Dist_ed_history'] = "District %s Educational Awards History";
$lang['E_store'] = "On-line Store";
$lang['E_download_digital'] = "Download Digital Content";
$lang['V_brand'] = "Toastmaster virtual brand portal";
$lang['Renewal_by'] = "Renewal by";
$lang['TMI_award'] = "Award";
$lang['Club_id'] = "Easy-Speak ID";
$lang['TMI_OFF'] = "Officer list by";
$lang['TMI_DIV'] = "Distinguished Division/Area";
$lang['TMI_CLUB'] = "Distinguished Club by Division/Area";
$lang['TMI_DIST'] = "District Performance Detail";
$lang['TMI_spreadsheet'] = "Download Performance Spreadsheet";
$lang['TMI_summary'] = "District Performance Summary";
$lang['TMI_points'] = "Distinguished District by Points";
$lang['TMI_DPR'] = "District Performance Reports";
$lang['TMI_2'] = "Toastmasters Reports2 Suite";
$lang['District_stats'] = "District Statistics";
$lang['Raffety_retention'] = "Member retention report";
$lang['Performance_hist'] = "Performance History";
$lang['Change_TI'] = "Change Personal or Club data, Register awards";
$lang['DCP_summary'] = "Club DCP Summary";
$lang['New_clubs'] = "New Clubs by";
$lang['Club_sponsors'] = "Sponsors & Mentors by";
$lang['Club_coaches'] = "Club Coaches by";
$lang['Prospective_clubs'] = "Prospective Clubs by";
$lang['Charter_date'] = "Charter Date";
$lang['Name'] = "Name";
$lang['Active'] = "The club uses meeting management<br>through this site";
$lang['CL_status'] = "The club uses CL management<br>through this site";
$lang['Find_club_TMI'] = "Find a club anywhere in the world";
$lang['Limit_search_explain'] = "Limit your search to clubs that meet";
$lang['Find_TMI_explain'] = "You may enter as much detail as you choose to narrow the search";
$lang['Find_Club_fail'] = "Sorry, no clubs found that matched this request - please broaden the search";
$lang['Find_Club_overload'] = "Sorry, too many clubs found that matched this request - please narrow the search";
$lang['M_place'] = "Meeting Place";
$lang['DCP']['P'] = "President's Distinguished Club";
$lang['DCP']['S'] = "Select Distinguished Club";
$lang['DCP']['D'] = "Distinguished Club";
//$lang['City'] = "Town/City";
//$lang['State'] = "County/State/Province";
$lang['Meeting_t'] = "Meeting Time";
$lang['Day_s'] = "you may tick as<br>many as you like";
$lang['Clubs'] = "Clubs";
$lang['Club_closed']= "Description if the Club is closed for summer etc";

$lang['part_of'] = "Part of ";

//links
$lang['Loc_address'] = "Address";
$lang['Loc_directions'] = "How to get there";
$lang['Directions_to'] = "How to get to";

// roles
$lang['Role_name'] = "Role Name";
$lang['Role_is_speaker']= "Speaker";
$lang['Role_is_evaluator'] = "Evaluator";
$lang['Role_is_educational'] = "Educational";
$lang['Officers'] = "Officers";
$lang['Contest_only'] = "Contest only";

//role validations
$lang['role_val_s'] = "The %s role (reported to TI as %s) ";       //Note trailing blank!
$lang['role_val'][1] = "MUST be set as a speaker";
$lang['role_val'][2] = "must NOT be set as a speaker";
$lang['role_val'][3] = "MUST be set as an Educational";
$lang['role_val'][5] = "MUST be set as an Evaluator";
$lang['role_val'][6] = "must NOT be set as Evaluator";
$lang['role_val'][7] = "MUST be set as General Evaluator";

$lang['duplicate_officer'] = "You cannot show two officers in easy-Speak as %s.";

$lang['TI_name']['-1'] = "Mentor";
$lang['TI_name']['0'] = "--- Not reported ---";
$lang['TI_name']['1'] = "President";                    //Need to be short to fit on navigation
$lang['TI_name']['2'] = "Vice President Education";
$lang['TI_name']['3'] = "Vice President Membership";
$lang['TI_name']['4'] = "Vice President PR";
$lang['TI_name']['5'] = "Secretary";
$lang['TI_name']['6'] = "Treasurer";
$lang['TI_name']['7'] = "Sergeant at Arms";            //Less than 20 - report to TI on semi-annual

$lang['TI_name']['20'] = "Club Webmaster";
$lang['TI_name']['21'] = "Newsletter Editor";
$lang['TI_name']['30'] = "Special Event Chair";
$lang['TI_name']['31'] = "Membership Campaign Chair";
$lang['TI_name']['32'] = "PR Campaign Chair";

$lang['TI_name']['36'] = "Assist Newsletter Editor";
$lang['TI_name']['38'] = "Assist Club Webmaster";

$lang['TI_name']['44'] = "Immediate Past President";

$lang['TI_name']['50'] = "Other Area Officer";                 //Note to developers - add new codes to constants file
$lang['TI_name']['51'] = "REP Ambasador";                 
$lang['TI_name']['54'] = "Immediate Past Area Director";
$lang['TI_name']['56'] = "Assistant Area Director";
$lang['TI_name']['58'] = "Area Director";
$lang['TI_name']['60'] = "Other Division Officer";
$lang['TI_name']['61'] = "REP Ambasador";                 
$lang['TI_name']['64'] = "Assistant Division Director";
$lang['TI_name']['66'] = "Immediate Past Div Director";
$lang['TI_name']['68'] = "Division Director";
$lang['TI_name']['70'] = "Other District Officer";
$lang['TI_name']['71'] = "District Webmaster";
$lang['TI_name']['72'] = "District Statistician";
$lang['TI_name']['73'] = "REP Chief Ambasador";                 
$lang['TI_name']['76'] = "District Finance Manager";
$lang['TI_name']['78'] = "District Administration Manager";
$lang['TI_name']['80'] = "PR Manager";
$lang['TI_name']['82'] = "Club Growth Director";
$lang['TI_name']['84'] = "Program Quality Director";
$lang['TI_name']['86'] = "Immediate Past Dist Dir";
$lang['TI_name']['88'] = "District Director";
//$lang['TI_name']['99'] = "Other Officer";
$lang['User_level'][ADMIN] = "Site Administrator";
$lang['User_level'][TM_ADMIN] = "TM Administrator";
$lang['User_level'][DISTRICT_ADMIN] = "District Administrator";


$lang['Senior_officer'][CLUB] = $lang['TI_name']['2'];			//NTR
$lang['Senior_officer'][EVENT] = $lang['Officers'];				//NTR
$lang['Senior_officer'][DISTRICT] = $lang['TI_name']['88'] ;	//NTR
$lang['Senior_officer'][DIVISION] = $lang['TI_name']['68'];		//NTR
$lang['Senior_officer'][AREA] = $lang['TI_name']['58'];			//NTR

$lang['TI_name']['100'] = "Speaker";                    //Less than 100 - use as officer names
$lang['TI_name']['101'] = "Toastmaster";
$lang['TI_name']['102'] = "General Evaluator";
$lang['TI_name']['103'] = "Evaluator";
$lang['TI_name']['104'] = "Topicsmaster";
$lang['TI_name']['105'] = "Table Topic Speaker";
$lang['TI_name']['106'] = "Table Topic Evaluator";
$lang['TI_name']['107'] = "Timekeeper";
$lang['TI_name']['108'] = "Guest Hospitality";
$lang['TI_name']['109'] = "Sergeant at Arms";
$lang['TI_name']['110'] = "Speech Contest Chair";
$lang['TI_name']['111'] = "Grammarian";
$lang['TI_name']['112'] = "Ah-Counter";
$lang['TI_name']['113'] = "Grammarian & Ah-Counter";
$lang['TI_name']['114'] = "Educational";

//Club Meeting  - 125+
$lang['TI_name'][RIBBON_FIRSTTIME] = "First Timer Award";
$lang['TI_name'][RIBBON_SPEAKER] = "Best Speaker Award";
$lang['TI_name'][RIBBON_TT] = "Best Table Topics Award";
$lang['TI_name'][RIBBON_TT_PART] = "Table Topics Speaker";
$lang['TI_name'][RIBBON_EVALUATOR] = "Best Evaluator Award";
$lang['TI_name'][RIBBON_GESTURES] = "Best Gestures Award";
$lang['TI_name'][RIBBON_HUMOR] = "Best Humour Award";
$lang['TI_name'][RIBBON_ENTHUSIASM] = "Enthusiasm Award";
$lang['TI_name'][RIBBON_IMPROVED] = "Most Improved Award";
$lang['TI_name'][RIBBON_IMPROVED_EVAL] = "Most Improved Evaluator Award";
$lang['TI_name'][RIBBON_IMPROVED_SPEAKER] = "Most Improved Speaker Award";
$lang['TI_name'][RIBBON_IMPROVED_TT] = "Most Improved Table Topics Award";
$lang['TI_name'][RIBBON_WELCOME] = "Welcome Ribbon";
//Speech Contest - 140+
$lang['TI_name'][RIBBON_FIRST_SPEAKER] = "Speaker First Place";
$lang['TI_name'][RIBBON_SECOND_SPEAKER] = "Speaker Second Place";
$lang['TI_name'][RIBBON_THIRD_SPEAKER] = "Speaker Third Place";
$lang['TI_name'][RIBBON_PARTICIPANT_SPEAKER] = "Speaker Contest Participant";
$lang['TI_name'][RIBBON_FIRST_EVALUATOR] = "Evaluator First Place";
$lang['TI_name'][RIBBON_SECOND_EVALUATOR] = "Evaluator Second Place";
$lang['TI_name'][RIBBON_THIRD_EVALUATOR] = "Evaluator Contest Third Place";
$lang['TI_name'][RIBBON_PARTICIPANT_EVALUATOR] = "Evaluation Contest Participant";
$lang['TI_name'][RIBBON_FIRST_TT] = "Table Topics First Place";
$lang['TI_name'][RIBBON_SECOND_TT] = "Table Topics Second Place";
$lang['TI_name'][RIBBON_THIRD_TT] = "Table Topics Third Place";
$lang['TI_name'][RIBBON_PARTICIPANT_TT] = "Table Topics Contest Participant";

$lang['Add_a_Club'] = "Add a Club";
$lang['Add_Club'] = "Add Club";
$lang['Add_club_now'] = "In order add your club to easy-Speak, you will need to provide us with some details.<br>To start with, you will need your Toastmasters International Club Number.";
$lang['Add_club_mail'] = "If your club  chartered recently but is not available when you use the option above please send an e-mail with your club number and charter date.<br /><br />If your club is not yet chartered, then register as a user on this site and send us an email with your club's information. We will respond as soon as we can.";

//Communicator Track -150+
//$lang['TI_name']['160'] = "Half Competent Communicator";
$lang['TI_name']['161'] = "Competent Communicator";
$lang['TI_name']['152'] = "Advanced Communicator Bronze";
$lang['TI_name']['153'] = "Advanced Communicator Silver";
$lang['TI_name']['154'] = "Advanced Communicator Gold";
//Leadership Track - 156+
$lang['TI_name']['156'] = "Half Competent Leader";
$lang['TI_name']['157'] = "Competent Leader";
$lang['TI_name']['158'] = "Advanced Leader Bronze";
$lang['TI_name']['159'] = "Advanced Leader Silver";
$lang['TI_name']['160'] = "Distinguished Toastmaster";
//District Ribbons - 170+
$lang['TI_name']['170'] = "Director's Award";
$lang['TI_name']['171'] = "President Distinguished Club";
$lang['TI_name']['172'] = "Select Distinguished Club";
$lang['TI_name']['173'] = "Committee";
$lang['TI_name']['174'] = "Chair";
$lang['TI_name']['175'] = "International Director";
$lang['TI_name']['176'] = "District Director";
$lang['TI_name']['177'] = "International President";
$lang['TI_name']['178'] = "Committee";
$lang['TI_name']['179'] = "Area Director";
$lang['TI_name']['180'] = "Division Director";
$lang['TI_name']['201'] = "Site Administrator";
$lang['TI_name']['210'] = "TM Administrator";
$lang['TI_name']['220'] = "District Administrator";

//Ribbon Eligibility - bitwise
$lang['Ribbon_Eligibility'][RELIG_SPEAKER] = "Speakers Only";
$lang['Ribbon_Eligibility'][RELIG_EVALUATOR] = "Evaluators Only";
$lang['Ribbon_Eligibility'][RELIG_PARTICIPANT] = "Any Participant";
$lang['Ribbon_Eligibility'][RELIG_MEMBER] = "Any Member";
$lang['Ribbon_Eligibility'][RELIG_NONMEMBER] = "Any Non-Member";
$lang['Ribbon_Eligibility'][RELIG_ANYONE] = "Anybody";
//Ribbon Type - bitwise
$lang['Ribbon_Type'][RTYPE_PARTICIPATION] = "Participation";
$lang['Ribbon_Type'][RTYPE_BEST] = "Best";
$lang['Ribbon_Type'][RTYPE_IMPROVED] = "Most Improved";
$lang['Ribbon_Type'][RTYPE_COMPETITION] = "Competition";

//Ribbons
$lang['Select_recipient'] = "Select Recipient";
$lang['Another_ribbon'] = "Add Another Award";
$lang['Ribbon'] = "Ribbon";
$lang['Award'] = "Ribbon / Award";
$lang['Recipient']= "Recipient";
$lang['Remove_Ribbon'] = "Remove Award";
$lang['Official_ribbon'] = "Official or Custom?";
$lang['Ribbon_type'] = "Type";
$lang['Create_new_ribbon'] = "Create new Custom Award:";
$lang['Meeting_participant_only'] = "Yes";
$lang['Speaker_only'] = "...and must be Speaker";
$lang['Evaluator_only'] = "...and must be Evaluator";
$lang['Any_role'] = "...but does not need a specific role";
$lang['Anyone'] = "It doesn't matter";
$lang['Member_only'] = "Needs to be a full member (eg: Most Improved)";
$lang['Nonmember_only'] = "Is required that they NOT be a member (eg: Welcome Ribbon)";
$lang['Need_to_be_a_member'] = "Does the Recipient need to be a member of this club?";
$lang['Need_to_be_a_participant'] = "Is the Recipient a participant at this meeting (eg: Best Speaker)?";
$lang['Select_type_of_ribbon'] = "Select an Award Type";
$lang['What_type_of_ribbon'] = "What type of award is this? (this will determine what meetings it appears in by default)";
$lang['Give_ribbon_a_name'] = "What is the name of this Award?";
$lang['Ribbon_manager'] = "Meeting Award Manager";
$lang['Ribbon_manager_desc'] = "The standard Toastmaster 'ribbon' Meeting Awards are provided by default, and their setting cannot be changed.  However, if you do not use a particular Award in your Club, you may disable it (it will not appear in future meetings, although members who received it in the past will continue to be accredited).  <br><br>If your Club has Club-specific Awards, you may add these, and they will appear for all future meetings.  They may be added to past meetings by reopening the meeting and adding the Award via the dropdown.";
$lang['Meeting_award_recipients'] = "Meeting Award Recipients";
$lang['Edit_online_id'] = "Edit meeting link";

$lang['Hide_Ribbon'] = "Disable";
$lang['Unhide_Ribbon'] = " Enable";
$lang['Delete_Ribbon'] = "Delete award";
$lang['Edit_ribbon'] = "Edit Meeting Award - '%s'";
$lang['New_ribbon'] = "New Award";
$lang['Custom'] = "Custom";
$lang['Official'] = "Official TMI";
$lang['edit_ribbon_description'] = "Create a new 'custom' Award if your club recognizes achievements which are not included in the standard Toastmaster International Ribbonset. Once you have created an Award, and at least one person has received it, it cannot be deleted (but it can  be disabled, whereby it will no longer appear as a choice in the future).";
$lang['ribbon_sort'] = "This is the order in which this Award will appear on the Meeting page, and in all reports";
$lang['ribbon_comment'] = "Under what circumstance this Award should be bestowed?  Make a note here.";
$lang['Ribbon_saved'] = "Your custom Award has been saved!";
$lang['Ribbon_deleted'] = "Your custom Award has been deleted!";
$lang['Ribbon_enabled'] = "Your custom Award has been enabled!";
$lang['Ribbon_disabled'] = "Your custom Award has been disabled!";
$lang['Click_return_ribbon_manager'] = "Click %sHere to return to the Meeting Award Manager%s";
$lang['Select_role'] = "Select a Role";
$lang['Convert_role_to_Ribbon'] = "If you have been using a Role to record Meeting Awards recipients in the past, you can now convert these to a Meeting Award.  Roles to be converted must start with the English word 'Best', be assignable, not fillable (not allow volunteers), and not be a Speaker or Evaluator role.";
$lang['Unreversable'] = "WARNING: THIS ACTION IS UN-REVERSABLE!";
$lang['Convert_role'] = "Convert Role";
$lang['Roles_converted'] = "Congratulations!  %s Role assignations have been successfully converted to this Ribbon.  This role has been deleted, and removed from all agenda templates and meetings.";
$lang['Ribbon_conversion']  = "Convert Roles into Meeting Awards";
$lang['Ribbon_settings'] = "Meeting Award Settings";
$lang['Convert_role_to'] = "Convert a Role to '%s' Meeting Award";
$lang['Ribbon_equivalent_to'] = "'%s' is equivalent to the role:";

$lang['Incoming'] = "Incoming";
$lang['Incoming_warning'] = "There %s set up in your club for the new year.<br>You MUST identify your incoming officers before 1st July for continuing administrative access.";
$lang['Incoming_link'] = "%sClick <b>here</b> to go to the maintenance screen%s";
$lang['Is_one_off'] = "is only ONE officer";
$lang['Morethan_one_off'] = "are %s officers";
$lang['Incoming_officers'] = "%s<b>Go to officer maintenance screen for %s-%s</b> %s";
$lang['New_directory'] = "%s<b>Go to the directory data for %s-%s</b> %s";
$lang['PDF_directory'] = "%s<b>Download the directory as a PDF</b> %s";
$lang['Status_warning'] = "WARNING - The settings in your Club Control Panel for Visitors and Mailing List are invalid and will prevent visitors who find you online from booking their attendance at your meetings";
$lang['Maintenance_needed'] = "Maintenance is needed for";
$lang['Urgent'] = "Urgent";

// Club/Member data
//$lang['User'] = "User %d";
$lang['TM_member'] = "Toastmaster Membership Number";
$lang['TM_start'] = "First associated with this Club";
$lang['TM_effective'] = "Effective from";
$lang['TM_change'] = "Change to this status";
$lang['TM_associated'] = "First Associated with Club";
$lang['Mentor'] = "Mentor";
$lang['Mentors'] = "Mentors";
$lang['Mentee'] = "Mentee(s)";
$lang['Introducer'] = "Introduced to the club by";
$lang['User_inactive'] = "Member is inactive";
$lang['User_inactive_explain'] = "Stops automatic role allocation";
$lang['Buddy'] = "Computer 'Buddy' (If this member is not a computer user)";
$lang['TM_status'] = "Current Toastmaster achievements";
$lang['TM_c_status'] = "Communication Track";
$lang['TM_other_award'] = "Other Toastmasters Awards";
$lang['TM_l_status'] = "Leadership Track";
$lang['Refer_other']['-12'] = "Meetup";
$lang['Refer_other']['-11'] = "TI Website";
$lang['Refer_other']['-10'] = "Speechcraft";
$lang['Refer_other']['-9'] = "Newspaper Advertising";
$lang['Refer_other']['-8'] = "Other Media Advertising";
$lang['Refer_other']['-7'] = "Newspaper Article";
$lang['Refer_other']['-6'] = "Leaflet drop";
$lang['Refer_other']['-5'] = "Radio interview";
$lang['Refer_other']['-4'] = "Other PR activity";
$lang['Refer_other']['-3'] = "District Website";
$lang['Refer_other']['-2'] = "Club Website";
$lang['Refer_other']['-1'] = "Other activity";
$lang['Connect_Existing_User'] = "Connect Existing User";
$lang['Connect_User'] = "Connect User";
$lang['Create_New_User'] = "Create New User";
$lang['User_Found'] = "A user has been found with the username you supplied.  Connect with this user?";
$lang['Go_back'] = "< Go Back";
$lang['Not_existing'] = "There is no system user with '%s' as a username.";
$lang['Show_hidden'] = "Show 'past' users";
$lang['Show_members'] = "Show members";
$lang['Officers_only'] = "Officers only";
$lang['Show_nonmembers'] = "Show non-members";
$lang['Contact_information'] = "Contact Info";
$lang['Attendance_information'] = "Attendance Info";
$lang['Add_user'] = "Add User to %s";
$lang['Search_by_name'] = "Input full name and email ";
$lang['Wildcards'] = "Wildcards: '*' and '?'";
$lang['VPM_view'] = "Visitor Management View";
$lang['No_matches_found'] = "No matches found";
$lang['Connect_with_status'] = "Connect to %s with status";
$lang['error_insert'] = "Could not add record";
$lang['Userlist_link'] = "%sClick <b>here</b> to go to the user list%s";
$lang['Leave_unchanged'] = "Leave Unchanged";

$lang['Matches'] = "Duplicate";
$lang['username']  = "username";
$lang['email']  = "email";
$lang['TMI_number']  = "TMI Number";


$lang['List_previous_members'] = "Select from a list of previous club members & visitors";
$lang['Input_username'] = "Input the user's username";
$lang['User_added_to_meeting'] = "User has been created and added to the meeting";
$lang['User_added_to_club']  = "User has been added to this club";

$lang['Username_4_chars'] = "Username must be greater than 4 characters";
$lang['Password_6_chars'] = "Password must be at least 6 characters";
$lang['Password_not_match'] = "Passwords do not match";

$lang['View_communicator'] = "View Communicator Progress for %s";
$lang['View_leadership'] = "View Leadership Progress for %s";


//Award Abbreviations
$lang['TM_award'] = "TM Award";
$lang['TM_c'][CC] = "CC";                 //NTR Note to translators - do not change these abbreviations
$lang['TM_c'][ACB] = "ACB";                //NTR
$lang['TM_c'][ACS] = "ACS";                //NTR
$lang['TM_c'][ACG] = "ACG";                //NTR
$lang['TM_c'][DTM] = "DTM";                //NTR
$lang['TM_l'][CL] = "CL";                 //NTR
$lang['TM_l'][AL] = "AL";                 //NTR
$lang['TM_l'][ALB] = "ALB";                //NTR
$lang['TM_l'][ALS] = "ALS";                //NTR
$lang['TM_l'][OCL] = "OCL";               //NTR
$lang['TM_l'][HPL] = "HPL";               //NTR

//TM Awards
$lang['Set_Goal'] = "Set a New Goal";
//Goal Type
$lang['Goal_type'][GOAL_COMMUNICATOR] = "Communicator Goals";
$lang['Goal_type'][GOAL_LEADERSHIP] = "Leadership Goals";
//Goal
$lang['Goal_c'][CC] = "Achieve Competent Communicator";
$lang['Goal_c'][ACB] = "Achieve Advanced Communicator Bronze";
$lang['Goal_c'][ACS] = "Achieve Advanced Communicator Silver";
$lang['Goal_c'][ACG] = "Achieve Advanced Communicator Gold";
$lang['Goal_c'][DTM] = "Achieve Distinquished Toastmaster";
$lang['Goal_c'][SPEECHES] = "Complete %s Speeches";
$lang['Goal_c'][WORKBOOK] = "Complete the '%s' Workbook";
$lang['Goal_c'][SPEECHESWORKBOOK] = "Complete %s Speeches from '%s'";
$lang['Goal_l'][CL] = "Achieve Competent Leadership";
$lang['Goal_l'][AL] = "Achieve Advanced Leadership";
$lang['Goal_l'][ALB] = "Achieve Advanced Leadership Bronze";
$lang['Goal_l'][ALS] = "Achieve Advanced Leadership Silver";
$lang['Goal_l'][HPL] = "Achieve High Performance Leadership";
$lang['Goal_l'][PROJECT] = "Complete Project %s";
$lang['Goal_l'][TASKS] = "Complete %s CL Tasks";
$lang['Goal_l'][PROJECTS] = "Complete %s CL Projects";
$lang['Educational_Goal'] = "Educational Goals";
$lang['Speeches_meet_goal'] = "Speeches Needed";
$lang['Weeks_between_speeches'] = "Weeks per Speech";
$lang['Projects_meet_goal'] = "Projects Needed";
$lang['Weeks_between_projects'] = "Weeks per Project";
$lang['Tasks_meet_goal'] = "Tasks Required";
$lang['Weeks_between_tasks'] = "Weeks between Tasks";
$lang['Target_Date'] = "Target Date";
$lang['Current_Status'] = "Current Status";
$lang['Target_Set'] = "Target Set On";
$lang['Delete_goal'] = "Delete Goal";
$lang['Edit_goal'] = "Edit Goal";
$lang['Select_a_workbook'] = "Select a Workbook";
$lang['Select_a_project'] = "Select a Project";
$lang['Plan'] = "Plan";
$lang['Actual'] = "Actual";
$lang['Remain'] = "Remain";

$lang['Project'] = "Project";
$lang['Projects_from'] = "Projects towards Competent Leader";
$lang['Tasks_from'] = "Tasks towards Competent Leader";

$lang['Hide_Goals'] = "Hide Goals";
$lang['Show_Goals'] = "Show Goals";
$lang['Goals_speeches_days'] = "%s speeches, %s days/speech";

$lang['requested_speeches'] = "Requested Speeches";
$lang['Complete'] = "Complete";
$lang['Speeches'] = "Speeches";
$lang['Speeches_from'] = "Speeches from";
$lang['Complete_goal_by'] = "I will complete this goal by";
$lang['Confirm_delete_goal'] = "Are you sure you want to delete this goal?";



//Toastmaster Agenda
$lang['Unassigned'] = "Unassigned";
$lang['Agenda_detail'] = "View agenda details";
$lang['Stop_watching_agenda'] = "Stop watching this meeting";
$lang['Start_watching_agenda'] = "Watch this meeting for changes";
$lang['No_longer_a_watching'] = "You are no longer watching this meeting for changes";
$lang['You_are_a_watching'] = "You are now watching this meeting for changes";
$lang['Click_go_agenda'] = "Click %sHere to view the agenda%s"; // %s's here are for uris, do not remove!
$lang['View_agenda'] = "View agenda";
$lang['Email_agenda'] = "E-mail meeting to a friend";
$lang['Print_agenda'] = "Click on the 'Printer' button to see full agenda detail";
$lang['A_mail_pending'] = "%d assignment e-mail pending.  Send 'e-mail three' when you have finished assigning roles";
$lang['A_mail_pending_hlink'] = "%d assignment e-mails pending.  Send '%s' when you have finished assigning roles";
$lang['email_three'] = "Third e-mail";
$lang['View_next_agenda'] = "Following meeting";
$lang['Next_Meeting'] = "Next Meeting";
$lang['Next_meeting_of'] = "The next meeting of %s will be";
$lang['View_previous_agenda'] = "Previous meeting";
//$lang['View_previous_cte'] = "Previous committee meeting";
//$lang['View_next_cte'] = "Following committee meeting";
//$lang['View_next_conf'] = "Following conference";
//$lang['View_previous_conf'] = "Previous conference";
$lang['Click_location'] = "Click here for a map";
$lang['Print_awards']= "Print awards sheet";
$lang['Print_badges']= "Print name badges";
$lang['Print_a_summary']= "Print summary agenda";
$lang['Print_a_detail']= "Print detail agenda";
$lang['Print_roster']= "Print attendance";
$lang['Print_a_roster']= "Print attendance checklist";
$lang['Detail_only'] = "Detail agenda only";
$lang['Awards'] = "Awarded to";
$lang['Awards_1']= "Best speaker";
$lang['Awards_2']= "Best Table Topic";
$lang['Awards_3']= "Best Evaluator";
$lang['at_time'] = "at"; //eg: 23rd June AT 8:00pm
$lang['Contest'] = "Contest";
$lang['Meeting_list'] = "Meeting List";
$lang['Meet_online'] = "This is an online meeting, %sclick here to get the date and time at your location%s%s"; //Link to timeanddate.com
$lang['Virtual_time'] = "%sClick here to get the date and time at your location%s"; //Link to timeanddate.com
$lang['Hide_Meeting_Text'] = "Hide Meeting Text";
$lang['Show_Meeting_Text'] = "Show Meeting Text";
$lang['Edit_Meeting_Text'] = "Edit Meeting Text";

$lang['Speeches_Introductions'] = "Speeches & Introductions";
$lang['Print_Introductions'] = "Print Speeches & Intros";

$lang['Click_login_or_register'] = "You must %s or %s to book your attendance at the meeting";
$lang['Click_volunteer'] = "Click on 'Thumbs up' button to accept a role";
$lang['Click_confirm_role'] = "Click on 'Thumbs up' button to confirm acceptance of a role";
$lang['Click_reject'] = "Click on 'Thumbs down' button if you cannot attend this meeting";
$lang['Click_attend'] = "Click on 'Thumbs up' or 'Thumbs down' button to show if you can attend this meeting";
$lang['Click_not_attend'] = "Click on 'Thumbs down' button if you can not now attend this meeting";

$lang['Restricted_club'] = "This club has restricted membership. Please telephone the club to confirm that you may attend the meeting";

$lang['TBA'] = "TBA";
$lang['Still_TBA'] = "Please remember to enter a title for your speech";
$lang['M_manager'] = "Meeting Manager";
$lang['C_manager'] = "Conference Enquiries";
$lang['Agenda'] = "Meeting Agenda";
$lang['Role'] = "Role";
$lang['Presenter'] = "Presenter";
$lang['Assigned'] = "Assigned";
$lang['Duration'] = "Duration";
$lang['Green'] = "Green";
$lang['Amber'] = "Amber";
$lang['Red'] = "Red";
$lang['Accept'] = "Accept";
$lang['AttendA'] = "Attend";
$lang['Confirmed'] = "Accepted";
$lang['Confirmed_on'] = "Accepted by %s on %s ";
$lang['Attending?'] = "Attendance unknown";
$lang['Not_attending'] = "NOT attending";
$lang['I_Attending'] = "I WILL be there";
$lang['I_Not_attending'] = "I am NOT attending";
$lang['Question'] = "Role Not Confirmed";
$lang['Already_confirmed'] = "Already confirmed";
$lang['Un_approve'] = "DECLINE this role";
$lang['Un_approve_s'] = "Are you sure you wish to DECLINE this role";
$lang['Un_approve_m'] = "Are you sure you wish to DECLINE %d roles at this meeting";
$lang['Un_approve_a'] = "You have %d other roles assigned for this meeting";
$lang['Un_approve_1'] = "You have another role assigned for this meeting";
$lang['Un_approve_c'] = "Do you wish to decline because you will not be attending the meeting?";
$lang['Acknowledge_not_attending_meeting'] = "Thank you for letting us know you will not be attending this meeting";
$lang['Acknowledge_attending_meeting'] = "You have successfully declined this role.  See you at the meeting!";
$lang['Re_assigned'] = "Too late - This role has been re-assigned";
$lang['Now_assigned'] = "Too late - This role has now been assigned";
$lang['Assigned_other'] = "This role has been assigned to another user";
$lang['Agenda_added'] = "Agenda item added";
$lang['Agenda_i_updated'] = "Agenda item updated";
$lang['Agenda_updated'] = "Agenda updated";
$lang['Agenda_deleted'] = "Agenda item deleted";
$lang['Which_reassigned'] = "which you have re-assigned";
$lang['Which_deleted'] = "which you have deleted";
$lang['Warning'] = "WARNING";
$lang['Confirm_delete_agenda'] = "Are you sure you want to delete this agenda item?";
$lang['Click_join'] = "Please click next to your name %s if you would like to attend this meeting";
$lang['Join'] = "Please click if you would like to attend this meeting";
$lang['Make_visible'] = "Make agenda visible";
$lang['Edit_delete_meeting'] = "Edit or delete this meeting";
$lang['Edit_meeting'] = "Edit theme or times for this meeting";
$lang['Thanks']['1'] = "Thank you for telling me that you <b>WILL</b> be at the meeting";
$lang['Thanks']['2'] = "Thank you for telling me that you will <font color=#FF0000><b> NOT </b></font>be at the meeting";
$lang['Thanks']['9'] = "Thank you for telling me that you <b>WILL</b> take this role at the meeting";
$lang['No_agenda'] = "An agenda template has not yet been selected";
$lang['Enter_actuals'] = "Enter actual results and CLOSE this meeting";
$lang['Ask_senior_officer_actuals']  = "Ask your %s to enter actuals and CLOSE this meeting";
$lang['Meeting_closed'] = "This meeting is closed for changes";
$lang['Close_Meeting'] = "Close Meeting";
$lang['Reopen_Meeting'] = "Reopen meeting";
$lang['Reply'] = "Replied";
$lang['Pre_reply'] = "Pre-meeting reply";
$lang['Previous_evaluators'] = "Previous Evaluators";
$lang['attendees_with_roles'] = "%s (with roles)";
$lang['Not_advised'] = "Role not yet advised to member";
$lang['Limit_attenders'] = "There were %d possible attenders for this meeting";
$lang['Limit_assigned'] = "There were %d people who could be assigned a role at this meeting";
$lang['Limit_action'] = "Some status were removed from the screen. Go to User List > Visitor Management view and reclassify old Visitors and Guests who are not active";
$lang['Limit_max'] = "You show %d full members in the club. %d Members are registered with Toastmasters International. <br />Some users were removed from this screen. Go to User List and reclassify old Members who are not active";
$lang['Limit_max_mail'] = "You show %d full members in the club. %d Members are registered with Toastmasters International. <br />Mass e-mail is not possible. Go to User List and reclassify old Members who are not active";
$lang['Limit_maint'] = "Your club shows %d people as potential attenders and %d people who could be assigned a role at meetings. Edit your userlist and move people to the approprate status";

$lang['Assignment_future'][STATUS_UNKNOWN] = "Not Yet Replied";
$lang['Assignment_future'][STATUS_YES] = "Confirmed";
$lang['Assignment_future'][STATUS_NO] = "Declined";
$lang['Assignment_future'][STATUS_TIMED_OUT] = "";
$lang['Assignment_future'][STATUS_NO_SHOW] = "undefined";
$lang['Assignment_future'][STATUS_MAYBE] = "Tentative";

$lang['Assignment_past'][OUTCOME_UNKNOWN] = "undefined";
$lang['Assignment_past'][OUTCOME_YES] = "Performed Role";
$lang['Assignment_past'][OUTCOME_NO] = "Did NOT do Role";
$lang['Assignment_past'][OUTCOME_REASSIGNED] = "Reassigned"; // person attended, but didn't do the role
$lang['Assignment_past'][OUTCOME_NO_SHOW] = "Did not Attend (No Show)";
$lang['Assignment_past'][OUTCOME_UNEXPECTED] = "Substituted for Assignee";

$lang['Attended_future'][STATUS_UNKNOWN] = "Unknown";
$lang['Attended_future'][STATUS_YES] = "Attending";
$lang['Attended_future'][STATUS_NO] = "NOT Attending";
$lang['Attended_future'][STATUS_TIMED_OUT] = "Timed Out";
$lang['Attended_future'][STATUS_NO_SHOW] = "undefined";
$lang['Attended_future'][STATUS_MAYBE] = "Tentative";

$lang['Attended_past'][OUTCOME_UNKNOWN] = "Unknown";
$lang['Attended_past'][OUTCOME_YES] = "Attended";
$lang['Attended_past'][OUTCOME_NO] = "Did NOT Attend";
$lang['Attended_past'][OUTCOME_REASSIGNED] = "undefined";
$lang['Attended_past'][OUTCOME_NO_SHOW] = "Did NOT Attend (No Show)";
$lang['Attended_past'][OUTCOME_UNEXPECTED] = "Attended Unexpectedly";

$lang['I_Attended_future'][STATUS_UNKNOWN] = "I WILL / WILL NOT attend this meeting";
$lang['I_Attended_future'][STATUS_YES] = "I AM attending this meeting";
$lang['I_Attended_future'][STATUS_NO] = "I am NOT attending this meeting";
$lang['I_Attended_future'][STATUS_TIMED_OUT] = "Timed Out";
$lang['I_Attended_future'][STATUS_NO_SHOW] = "undefined";
$lang['I_Attended_future'][STATUS_MAYBE] = "I MIGHT attend this meeting";

$lang['I_Attended_past'][OUTCOME_UNKNOWN] = "I didn't respond";
$lang['I_Attended_past'][OUTCOME_YES] = "I went to this meeting!";
$lang['I_Attended_past'][OUTCOME_NO] = "I didn't go to this meeting";
$lang['I_Attended_past'][OUTCOME_REASSIGNED] = "undefined";
$lang['I_Attended_past'][OUTCOME_NO_SHOW] = "I missed this meeting!";
$lang['I_Attended_past'][OUTCOME_UNEXPECTED] = "I made it to this meeting!";

$lang['Volunteer'] = "You may accept a vacant role";
$lang['Taken'] = "Taken";
$lang['Accepted'] = "Accepted";
$lang['Reassgn'] = "Was Reassigned";
$lang['Reassign_role'] = "Reassign this role";
$lang['Assgn_m'] = "Assigned at meeting";
$lang['Reassgn_m'] = "Reassigned to someone else at meeting";
$lang['Accpt'] = "Accp";              //Short form for agenda screen
$lang['Refused'] = "DECLINED";
$lang['Uncertain'] = "DOUBTS ABOUT ATTENDING and is assigned";
$lang['In'] = " in ";
$lang['Last_changes'] = "Last on-line changes in";
$lang['Agenda_visible'] = "The agenda detail will be available in";
$lang['No_more_changes'] = "Agenda closed to online user changes";
$lang['Cal_finalised'] = "Actual meeting detail entered on";
$lang['Cal_not_finalised'] = "Actual meeting detail NOT YET ENTERED";
$lang['Cal_future'] = "Future meeting";
$lang['Cal_reopen'] = "Reopen meeting";
$lang['Cal_reopened'] = "The meeting has been reopened";
$lang['Cal_part_finalised'] = "Actual meeting detail PART entered on";
$lang['Did_not_respond'] = "Did Not Respond";
$lang['Hide_Speeches'] = "Hide Speech Details";
$lang['Show_Speeches'] = "Show Speech Details";
$lang['Show_Comments'] = "Show Comments";
$lang['Hide_Comments'] = "Hide Comments";
$lang['Edit_Comments'] = "Edit Comments";
$lang['View_Comments'] = "View Comments";
$lang['Show_last_attended'] = "Show Last Attended";
$lang['Show_roles'] = "Show # of Roles";
$lang['Roles_s'] = "%s role(s)";

$lang['rt']['a'] = "Alternate";
$lang['rt']['e'] = "Every";
$lang['rt']['l'] = "Last";
$lang['rt']['1'] = "1st";
$lang['rt']['2'] = "2nd";
$lang['rt']['3'] = "3rd";
$lang['rt']['4'] = "4th";
$lang['rt']['5'] = "5th";
$lang['rt']['6'] = "6th";
$lang['rt']['7'] = "7th";
$lang['rt']['8'] = "8th";
$lang['rt']['9'] = "9th";
$lang['rt']['10'] = "10th";
$lang['rt']['11'] = "11th";
$lang['rt']['12'] = "12th";
$lang['rt']['13'] = "13th";
$lang['rt']['14'] = "14th";
$lang['rt']['15'] = "15th";
$lang['rt']['16'] = "16th";
$lang['rt']['99'] = "<font color=#FF0000><b>ERROR</b></font>";
$lang['Assign_to_roles'] = "Assign members to these roles";
$lang['Assign_attendance'] = "Assign attendance for this meeting";
$lang['Assign_speeches'] = "Assign speeches for this meeting";
$lang['Assign_actuals'] = "Record actual assignment and attendance";
$lang['The_role'] = "the role of";
$lang['Reassigned'] = "used the management screen to assign";
$lang['Missing_workbook'] = "%s (%s) does not have a Workbook Assignment!";//2nd Speaker (Paul Osborn) does not have have a Workbook Assignment

$lang['Various_speeches'] = "speeches";
$lang['Various_role'] = "various roles";
$lang['On_time_accept'] = " %d%% of roles confirmed on time";
$lang['On_time_attend'] = " %d%% of members advised attendance on time";
$lang['On_time_attend_number'] = "%d members advised attendance on time";
$lang['Next_reply'] = "(Please use the website before %s to tell me whether you will come to this meeting.)";

//Footer Notes
$lang['Note'] = "Click on a name to see Contact Details or on a role to see the Knowledgebase article.";
$lang['Note_signup'] = "Click on a name to see Contact Details or on a role to go to the Knowledgebase article.<br>Click on a meeting date to go to that meeting.  Mouse-over the meeting date for the meeting theme.";
$lang['Note_knowledgebase'] = "Click on a role to see the Knowledgebase article.";
$lang['Note_participation'] = "Click on a name to see Contact Details or on a role to see the Participation Record for that role.";
$lang['Note_survey'] = "Surveys are recorded quarterly - only the last survey completed each Calendar quarter is kept.";
$lang['Note_otm'] = "OTM scores are calculated Year-To-Date.";

//CL Reports
$lang['Cl_meeting'] = "List of leadership roles for evaluation at this meeting";
$lang['Table_topic_CL'] = "Table Topic may be evaluated for CL";
$lang['First_time_r'] = "Members performing a role for the first time at this meeting";
$lang['First_visit'] = "First time visitors";

//Agenda edit
$lang['Edit_agenda']= "Edit agenda";
$lang['Edit_theme']= "Edit theme";
$lang['Edit_agenda_explain']= "Use this screen to add or remove items from the agenda<br>If you will use this new agenda frequently - save it as a template";
$lang['Edit_item']= "Edit agenda item";
$lang['Create_item']= "New agenda item";
$lang['Agenda_item_explain']= "This screen allows you to edit a line on your meeting agenda";
$lang['Agenda_speaker']= "Note: Speech titles and timings are updated automatically when you assign a speech";
$lang['Time_explain']= "Enter the total time allowed for this item.";
$lang['Repeat']= "Repeat";
$lang['Repeat_explain']= "If the role repeats (for example speaker or evaluator) which occurance is this? Leave as zero if the role does not repeat.";
$lang['Min'] = "min";
$lang['Sec'] = "sec";
$lang['Role_assigned'] = "Please cancel assignments before deleting this agenda item";
$lang['Role_assigned_c'] = "Please cancel assignments before changing this agenda item";
$lang['Print_spacer'] = "Print spacer after this line?";
$lang['Print_time'] = "Print the start time for this item?";
$lang['Print_summary'] = "Print this item on the summary agenda?";
$lang['Confirm_delete_template'] = "Are you sure that you wish to delete this template?";
$lang['Role_repeat_error'] = "The you must select a repeat number for the %s role<br>(Data changed to repeat %s)";
$lang['Role_repeat_error0'] = "The %s role cannot repeat<br>(Data changed to repeat 0)";
$lang['Role_repeat_speaker'] = "You already have a %s %s in this meeting<br>(Data changed to repeat %s)";
$lang['Ignoring'] = "Ignoring item %s";
$lang['Lines_moved'] = "Summary: %s agenda item(s) moved or deleted and now renumbered";
$lang['Deleted_item'] = "Item %s deleted";
$lang['Invalid_delete'] = "Invalid sort order entered - use a number or  'x' to delete";
$lang['Changes made'] = "The following changes were made to the sort order";
$lang['No_changes made'] = "NO changes were made to the sort order";
$lang['Moved_item'] = "Moved item %s to %s";
$lang['Assigned_to'] = "Assigned to";
$lang['Not_assigned'] = "Not yet assigned";
$lang['Cannot_assign'] = "Role cannot be assigned";
$lang['Not_auth_agenda'] = "Not authorised to edit the agenda";
$lang['Times_not_logical'] = "WARNING - the times %s, %s, %s - total %s are not logical!";
$lang['Times_inconsistent'] = "The timings are inconsistent";
$lang['Try_again'] = "Please correct, and try again!";
$lang['greater than'] = " is greater than ";
$lang['less than'] = " is less than ";
$lang['Template_warn'] = "You have %d saved templates - please delete any not regularly used to create new meetings";


//Conference booking
$lang['Bookings'] = "Bookings";
$lang['People'] = "The People";
$lang['Booking_info'] = "Booking Information";
$lang['Booking_reports'] = "Booking Reports";
$lang['Costs'] = "Cost";
$lang['Total_team'] = "Payable to Conference Treasurer";
$lang['Total_cost'] = "Payable";
$lang['Total_paid'] = "Total Paid";
$lang['To_pay'] = "To Pay";
$lang['Booking_changed'] = "Update ABORTED at line %s<br><br>The package structure changed while you were entering your order";
$lang['Total_value'] = "Please check and <font color=#FF0000><b>CONFIRM</b></font> the Total Conference Value of ";
$lang['Vendor_external'] = "Additionally, we forwarded your booking for the following";
$lang['Booking_confirmed'] = "Thank you for your order. A confirmation has been sent by e-mail";
$lang['Booking_cancelled'] = "Your order has been cancelled. A confirmation has been sent by e-mail";
$lang['Booking_novalue'] = "You do not seem to have ordered anything";
$lang['Booking_noemail'] = "You must have a valid e-mail address to enter an order<br>Click on 'Profile' in the menu bar to edit your e-mail address";
$lang['Booking_login'] = "To book your place online you must be a registered user and logged in.<br>If you have an id - log in, if not, select Register on the menubar at the top of the screen";
$lang['Edit_order'] = "Your previous order is available to be changed";
$lang['Changed'] = "changed ";
$lang['Booked'] = "Booked";
$lang['L_change'] = "Last change";
$lang['Order_entered'] = "Order entered %s";
$lang['Order_changed'] = "Last Changed %s by %s";
$lang['Order_reference'] = "Order Reference";
$lang['New_order'] = "New Order";
$lang['Changed_order'] = "Changed Order";
$lang['Topic_view_event'] = "List users who have viewed this booking form";
$lang['No_edit_order'] = "Please contact the event administrator if you wish to change your order";
$lang['No_add_order'] = "Please contact the event administrator if you wish to place an order";
$lang['Payment_details'] = "Full details of how to pay will be sent to you by e-mail and you may contact the Conference Administrator<br>by clicking on the button next to their name";
$lang['Click_pay_now'] = "Click Here to make a payment for your conference booking";
$lang['Conf_past'] = "Mailshot past conference attenders";
$lang['Conf_booked'] = "Include people who booked";
$lang['Conf_past_only'] = "<b>ONLY</b> mailshot past attenders (ignore officer selection)";
$lang['Conf_booked_only'] = "<b>ONLY</b> mailshot people with bookings (ignore officer selection)";
$lang['Conf_paid'] = "Include people who paid";
$lang['Conf_part_paid'] = "<b>ONLY</b> where there is a balance owing for this many days";
$lang['All'] = "All";

$lang['View_event'] = "View Conference";
$lang['Email_event'] = "E-mail Conference information to a friend";
$lang['Could_not_book_user'] = "You cannot make a booking for Anonymous";
$lang['Unit_message'] = "You must book this item for %s people at a time";
$lang['Unit_message_share'] = "You may either book this item for %s people at a time or request a room share";
$lang['Review_order'] = "Full details of %syour order are here%s";
$lang['Balance_remaining'] = "There is a balance of %s remaining to be paid.";
$lang['Contact_order'] = "%sMy contact details%s";
$lang['Contact_IM'] = "Or use the link to contact me by Skype or IM";
$lang['Menu_name'] = "Menu name";
$lang['Notify_users'] = "Copy these user ids on bookings";
$lang['Notify_payment'] = "Copy these user ids on payments";
$lang['Entry_page'] = "Entry page";
$lang['Currency'] = "Currency";
$lang['Promotion_text'] = "Promotion Graphic for navigation";
$lang['Prompt_text'] = "Prompt text on booking screen";
$lang['Comment_text'] = "Additional information for the booking administrator";
$lang['Internal_text'] = "Internal comment to the conference team";
$lang['Email_book_text'] = "Booking text to go on e-mail";
$lang['Email_pay_text'] = "Payment text to go on e-mail";
$lang['Payment_text']= "Payment text to go on booking screen";
$lang['View_conference'] = "Show Conference information in navigation block";
$lang['Allow_bookings'] = "Allow conference bookings";
$lang['Allow_share'] = "Allow shared package requests";
$lang['Item_closed'] = "Sold out.";
$lang['Item_date_limit'] = "No longer available.";
$lang['Item_closed_ordered'] = "Please contact the Event administrator if you wish to change your order";
$lang['Item_closed_vendor'] = "Please contact %s if you wish to change your order";
$lang['Internal_comment'] = "Internal Comment";
$lang['Enter_names'] = "Please name the people booking this item (%s)";
$lang['Confirm_names'] = "Please check the people booking this item (%s)";
$lang['Show_names'] = "This item is a booking for:";
$lang['Ask_names'] = "Please enter a name";
$lang['Entered_invalid_email'] = "Order entered - but e-mail address is invalid";
$lang['Room_share'] = "I request a room share with %s other";
$lang['Room_share_s']['-1'] = "male";
$lang['Room_share_s']['-2'] = "female";
$lang['Room_share_ask'] = "Please specify a gender";
$lang['Make_payment'] = "Make a payment";
$lang['Review_payment'] = "Review payment";
$lang['C_payment_explain'] = "Make a payment for your Conference booking using one of the methods below";
$lang['Contact'] = "Contact";
$lang['Reference'] = "Reference";
$lang['Available'] = "Available";

//Candidates
$lang['Candidate_profile'] = "Candidate Profile";
$lang['Publish'] = "Publish";
$lang['No_publish'] = "Prohibit profile from public display";
$lang['Election_date'] = "Election date";
$lang['Publish_date'] = "Profiles will be made public";
$lang['Profile_locked'] = "Profile locked";
$lang['Nominated'] = "Nomination complete";
$lang['Elected'] = "Declared Election Winner";
$lang['No_photo'] = "No profile photo";
$lang['Candidate_name'] = "Candidate username";
$lang['Candidate_buddy'] = "Computer buddy";
$lang['Candidates_corner'] = "Candidates Corner";
$lang['Election_results'] = "Election Results";
$lang['Candidates_for'] = "Candidates for";
$lang['Candidate_for'] = "Candidate for";
$lang['Click_candidate'] = "Click on an image to see their Candidate's Profile";
$lang['View_candidate'] = "View profile";
$lang['No_view_candidate'] = "Profile not available";
$lang['Edit_candidate'] = "Edit profile";
$lang['No_edit_candidate'] = "Profile locked";
$lang['Candidate_closed'] = "Profile are not shown after";
$lang['Candidate_open'] = "Profile detail will be available after";
$lang['Return_sum'] = "Return to list of candidates";
$lang['No_open_elect'] = "No open Elections!";
$lang['Missing_data_c'] = "You MUST select a candidate, election date and position";
$lang['Initial_profile'] = "Home Club:<br><br><br><br>Personal statement:<br><br>Qualifications for Service:<br><br>Job Title/Employer:<br><br>Relevant Work Experience:<br><br>Education:<br><br>Hobbies and Interests:<br><br>Volunteer Experience:<br><br>Honours/Recognition inside Toastmasters:<br><br>Honours/Recognition outside Toastmasters:<br><br>Other information:<br><br>";
$lang['Candidate_mail_1'] = "You may begin to prepare your candidate profile now and it will be visible to the public from";
$lang['Candidate_mail_2'] = "Your information will only be visible when you have ticked 'Publish'";
$lang['Candidate_mail_lnk'] = "You may access your Candidate Profile here";
$lang['Mass_mailout'] = "will send a single mass mailout to all Council members with a maximum of 100 words from each candidate.<br>To make use of this opportunity you must have your message <b>completed and saved before %s.</b>";
$lang['Candidate_updated'] = "Profile updated";
$lang['Massmail_explain'] = "(100 words max)<br />Your name, the officer position and links to your profile will be added automatically";
$lang['Massmail_date'] = "The mailout will use any message available here on "; //Must end with a blank
//WOTD
$lang['WOTD_word'] = "Word for the Day";
$lang['WOTD_contrib'] = "Contributed by";
$lang['WOTD_date'] = "Date";
$lang['WOTD_phon'] = "Phonic";
$lang['Missing_wotd'] = "You MUST select a word and date";
$lang['WOTD_compiled'] = "for Toastmasters everywhere";
$lang['WOTD_previous'] = "Previous word";
$lang['WOTD_next'] = "Next word";
$lang['WOTD_today'] = "Today's word";
$lang['WOTD_join'] = "Join the Contributors";
$lang['WOTD_chat'] = "Suggestions & Comment";
$lang['WOTD_link'] = "Link to us";
$lang['WOTD_print'] = "Grammarian's Print";
$lang['WOTD_clue'] = "Crossword clue";
$lang['WOTD_tomorrow'] = "Crossword clue for tomorrow's word";
$lang['WOTD_Y_winner'] = "Yesterday's winner";
$lang['WOTD_winner'] = "Quiz Winner for today's word";
$lang['WOTD_enter'] = "E-mail your solution";
$lang['WOTD_free'] = "A free word of the day for your Club website";
$lang['WOTD_explain'] = "All it takes is one line of code to display a new Word Of The Day on your club website - every day.";
$lang['WOTD_timezone'] = "To make the word change at midnight your time - select your timezone";
$lang['WOTD_select'] = "Select the code, then copy and paste it into your Web page.";
$lang['Sound_filetype'] = "Sounds must be .wav files";
$lang['Sound_error'] = "Error loading file";
$lang['Sound_size'] = "File is too big - limit %s bytes";
$lang['WOTD_sound'] = "Upload a .wav sound file";
$lang['Archive_for'] = "Archive for";
$lang['Archive'] = "Archive";

// WOTD Popup
$lang['Edit_wotd'] = "Change the Word of the Day";
$lang['Add_wotd'] = "Add the Word of the Day to this meeting";
$lang['Wotd_not_entered'] = "Not Yet Chosen";
$lang['Wotd'] = "Word of the Day";
$lang['Wotd_definition'] = "View the definition of '%s'";
$lang['Definition'] = "Definition";
$lang['Hidden_until_meeting'] = "Hidden Until Meeting";
$lang['DblClick_Grammarian'] = "Double Click for the Grammarian's Print";

// Template to/from agenda
$lang['Template_choose'] = "Use this agenda to replace the template: ";
$lang['Template_choose_d'] = "Delete this template: ";
$lang['Template_save'] = "Create or replace a template based on this agenda";
$lang['Replace'] = "Replace";
$lang['Sort_order'] = "Sort Order";
$lang['Save_new_order'] = "Save new sort order and remove entries marked 'X'";
$lang['Reverse'] = "Reverse all items in this agenda";
$lang['Template_create'] = "Use this agenda to create a new template named: ";
$lang['Template_no_replace'] = "Leave current agenda";
$lang['Template_selected'] = "Agenda already created.";
$lang['Template_replace'] = "REPLACE with a different template?";
$lang['No_template_name'] = "You must enter a name to create a new template";
$lang['No_template_data'] = "There is no template data to save!";
$lang['No_template_update'] = "You must select the template that you wish to replace";
$lang['No_template_delete'] = "You must select the template that you wish to delete";
$lang['New'] = "New Template";
$lang['Template_updated'] = "Template replaced";
$lang['Template_created'] = "New Template '%s' created";
$lang['Template_duplicated'] = "This template name is already in use";
$lang['Template_not_yet'] = "Leave until later";
$lang['Template_select'] = "Select Agenda";
$lang['Agenda_reversed'] = "The agenda order has been reversed";
$lang['Template_deleted'] = "Template Deleted";
$lang['Template_replaced'] = "Template replaced";
$lang['Meeting_body_updated']  = "Meeting Body updated.  ";
$lang['Meeting_theme_updated']  = "Meeting Theme updated.  ";

// Sign Up
$lang['Sign_up'] = "Sign Up for Meetings";
$lang['Print_signup'] = "Print Sign Up Sheet";
$lang['Sign_up_title'] = "Role Sign Up Sheet";
$lang['Date_range'] = "Date Range";
$lang['No_more'] = "No more dates available";


// Assignment to roles
$lang['Assign_header'] = "Assign members to roles";
$lang['Attend_officer'] = "Record Committee Attendance";
$lang['A_member'] = "Assigned member";
$lang['Member'] = "Member";
$lang['Recent'] = "in recent contact";
$lang['Submit_att'] = "Submit Attendance";
$lang['Submit_ass'] = "Record Actual Roles";
$lang['Submit_A_att'] = "Actual Attendance";
$lang['Submit_A_ass'] = "Actual Meeting Roles";
$lang['Member_info'] = "Role Summary & Reply Log for %s";
$lang['Role_info'] = "Member Summary & Reply Log for %s";
$lang['Attend_info'] = "Confirm Attendance";
$lang['Attending'] = "Attendance";
$lang['Excused_info'] = "Apologies received";
$lang['Roles_info'] = "Sign Up for Roles";
$lang['Assignment_info'] = "Assignment Actions";
$lang['Assignment_attend'] = "Speeches are not available if a member has said they cannot attend this meeting.<br>Educational presentations may only be assigned to 'Educational' items in the agenda.";
$lang['Assignment_educational'] = "Educational presentations may only be assigned to 'Educational' items in the agenda.";
$lang['Attendance_info'] = "Attendance Actions";
$lang['Assignment_updated'] = "Assignments at the meeting were updated";
$lang['Assignment_three'] = "Send 'e-mail three' when you have finished assigning roles";
$lang['Attendance_updated'] = "Attendance at the meeting was updated";
$lang['Assignment_warning'] = "%d assignment cancelled";
$lang['Attend'] = "Attendance";
$lang['Last_attend'] = "Last visit";
$lang['Paid_until'] = "Paid until";
$lang['Cancelled'] = "Cancelled by user";
$lang['Saved_successfully'] = "Saved Successfully!";
$lang['Deleted'] = "Deleted Successfully!";
$lang['Paid_until_at'] = "Paid until at %s";
$lang['Member_paid_until'] = "%s has paid TM dues up to the end of";
$lang['Last_role'] = "Last role";
$lang['Last_contact'] = "Last note";
$lang['Edit_notes'] = "click  to edit notes";
$lang['edit'] = "edit";
$lang['Speech_progress'] = "Speech Progress"; //Kai Steinbach, Jan 2009
$lang['Last_spoke'] = "Last spoke";
$lang['Agenda_changed'] = "Update ABORTED at line %s<br><br>The structure of this meeting changed while you were making assignments";
$lang['No_create_assign'] = "Unable to create assignment";
$lang['No_expire_assign'] = "Unable to cancel assignment";
$lang['Had_accepted'] = "had <b>accepted</b> the role of";
$lang['Was assigned'] = "was assigned the role of";
$lang['St_flag'][''] = "&nbsp;";    //NTR
$lang['St_flag']['0'] = "?";        //NTR
$lang['St_flag']['1'] = "Y";
$lang['St_flag']['2'] = "N";
$lang['Previous_eval'] = "(Previous evaluation:&nbsp;";
$lang['Entered'] = "already entered";
$lang['Not_entered'] = "NOT yet entered";
$lang['Auto_assign'] = "Auto Assign";
$lang['No_auto'] = "No Auto Assign";
$lang['No_auto_message'] = "Auto role-allocation is not available until old meetings are closed";
$lang['No_assign'] = "Role allocation is not available until old meetings are closed or deleted";
$lang['No_add'] = "You cannot add new meetings until old meetings are closed or deleted";
$lang['Warn_assign'] = "WARNING - NO assignments will be possible if %s meetings remain open";
$lang['Cannot_auto'] = "Auto Assign not available for your first ever meeting.";
$lang['Open meetings'] = "Actual results not yet entered for %d meeting.";
$lang['May_close'] = "Would you like to enter actual results for the last meeting?";
$lang['At_least'] = "Actual results not yet entered for at least 25 meeting. Would you like to enter actual results for the last meeting?";
$lang['Must_close'] = "You <b>must</b> enter actual results for the %slast meeting%s";
$lang['Audit_trail'] = "View assignment audit trail";
$lang['Insufficient'] = "*** Insufficient members available to fill all roles ***";
$lang['No_one_available'] = "*** Cannot Auto-assign - no-one free ***";
$lang['CL_poss'] = "CL?";          //NTR
$lang['CL_error'] = "You cannot use more than one leadership role for a person in a meeting";
$lang['Swop_user'] = "Move to next repeat of the same role";
$lang['Speech_Category']['1'] = "Educational Speaker";
$lang['Speech_Category']['2'] = "Informational Speaker";
$lang['Speech_Category']['3'] = "Persuasive Speaker";
$lang['Speech_Category']['4'] = "Humorous Speaker";
$lang['Speech_Category']['5'] = "Inspirational Speaker";
$lang['Speech_Category']['6'] = "Storyteller";
$lang['Speech_Category']['7'] = "Master of Ceremonies";
$lang['Speech_Category']['8'] = "Conversationalist";
$lang['Speech_Category']['9'] = "Discussion Facilitator";
$lang['Speech_Category']['11'] = "Icebreaker";
$lang['Speech_Category']['12'] = "Other";
$lang['Attendance_info'] = "Attendance and Roles";

// Agenda email
$lang['Agenda_email']= "Agenda E-mail";
$lang['Invalid_agenda'] = "Request does not include a valid agenda";
$lang['Agenda_email_explain'] = "Here you can create a message to all users of a certain type, those that have roles at this meeting etc.<br>If you are e-mailing a large group of people please be patient after submitting and do not stop the page halfway through. It is normal for a mass e-mailing to take a long time, you will be notified when the script has completed. In the normal course of events you should NOT e-mail ex-members.";
$lang['Agenda_e_email_explain'] = "Here you can create a message about the committee meeting to all club officers<br>";
$lang['Agenda_email_not_allowed'] = "You are not authorised to send e-mail for the agenda";
$lang['Toastmaster_club']= "Toastmaster Club";
$lang['No_role_email_sent'] = "The e-mail has been sent to users with no assigned role.";
$lang['Contest_details'] = "This meeting is a contest so speech objectives and details have not been sent";
$lang['Click_link'] = "You can use this link to %sview the details%s";
$lang['Club_time'] = "All times are shown %s";

$lang['A_explain']['E'] = "Send meeting e-mail to officers who have not yet advised attendance";
$lang['A_explain']['1'] = "Send first meeting e-mail to members who have not yet advised attendance and whose status with the club is:";
$lang['A_explain']['2'] = "Thank you for confirming/not confirming... I have NOT assigned you a role";
$lang['A_explain']['3'] = "Thank you for confirming/not confirming... I HAVE assigned you a role";
$lang['A_explain']['4'] = "Asking for volunteers for vacant roles";
$lang['A_explain']['5'] = "Final agenda - sent to users who have roles or who will attend";
$lang['A_explain']['6'] = "Send e-mail to mentors where their mentees have roles";
$lang['A_explain']['P'] = "Add your review in the text and send follow-up meeting e-mail to members whose status with the club is:";
$lang['A_mail']['E'] = "Officer e-mail";
$lang['A_mail']['1'] = "First e-mail";
$lang['A_mail']['2'] = "Second e-mail";
$lang['A_mail']['3'] = "Third e-mail";
$lang['A_mail']['4'] = "Fourth e-mail";
$lang['A_mail']['5'] = "Fifth e-mail";
$lang['A_mail']['6'] = "Mentors' e-mail";
$lang['A_mail']['0'] = "E-mail 2-5";
$lang['A_mail']['P'] = "Follow up e-mail";
$lang['Not_yet'] = "Not previously sent";
$lang['Sent_P'] = "Previously sent";
$lang['Remind_mail3'] = "Send reminder to users who confirmed their roles more than two weeks ago";
$lang['Resend_mail3'] = "Resend e-mail to users who have not replied in";
$lang['No_reply_mail'] = "Also send e-mail to members who have not replied";
$lang['No_reply_mail_O'] = "Also send e-mail to officers who have not replied";
$lang['Copy_vpe'] = "Copy VPE on these e-mail";
$lang['On'] = "on";
$lang['A_mail_c_words'] = "This is to remind you of the council meeting for";
$lang['A_mail_t_words'] = "This is to remind you of the officer training for";
$lang['A_mail_e_words'] = "This is a reminder for the next COMMITTEE meeting of";
$lang['A_mail_words'] = "This is a reminder of our %s meeting of %s";                   //Club then date will be inserted
$lang['A_mail_words2'] = "Full details of the agenda will be available on the website from %s.";
$lang['A_mail_words3'] = "Please use the website or click on one of the following links before %s to tell me if you will be at the meeting.";
$lang['A_mail_words3e'] = "Please use the website or click on one of the following links to tell me if you will be at the meeting.";
$lang['A_mail_words4'] = "We haven't yet heard if you can come to the next meeting. Please use the website or click on one of the following links to tell me if you will be there.";
$lang['A_mail_words5'] = "or click on this link to tell me that you will NOT be at the meeting.";
$lang['A_mail_words6'] = "Please use the website or click on one of the following links as soon as possible, but before %s, to confirm that you can accept this role.";
$lang['A_mail_words7'] = "If you find that you cannot now take this role please use the website or click on the following link as soon as possible, but before %s.";
$lang['A_mail_wordsC'] = "This role could be evaluated for <b>project %s (%s)</b> in the leadership track.</b>";
$lang['A_mail_wordsCU'] = "Please remember to bring your CL manual with you.";
$lang['A_mail_wordsCM'] = "Please remind %s to bring the CL manual to the meeting.";
$lang['A_mail_wordsSB'] = "At the moment I do not have a title for the speech.";
$lang['A_mail_wordsSBS'] = "Please enter this before the meeting.";
$lang['A_mail_wordsSY'] = "The title of the speech is '%s'.";
$lang['A_mail_wordsST'] = "<b>Speech %s</b> from the <b>%s</b> manual - <b>%s.</b>";
$lang['A_mail_wordsSE'] = "At the moment you are scheduled to evaluate %s.\n<br>Please check the website to confirm these details prior to the meeting.";
$lang['A_mail_wordsSW'] = "If these details are incorrect you may change them by clicking on the speech title on the agenda screen.";
$lang['A_mail_wordsOB'] = "The objectives for this speech are:";
$lang['A_mail_wordsSM'] = "Currently, %s is scheduled to evaluate %s";
$lang['Speech_timings'] = "Speech timings: ";
$lang['Educational_wordsST'] = "'%s' presentation from the %s";
$lang['Objectives'] = "Objectives";
$lang['You_will'] = "You will present";
$lang['They_will'] = "This is";

$lang['Role_helper'] = "If this role is new to you, %sthere is information available on the website.%s";
$lang['Role_wotd'] = "Need a Word of the Day? Take a look at %swotd.easy-speak.org%s \n<br>Written for Toastmasters by Toastmasters";
$lang['Replied']['0'] = "se attendance is unknown";
$lang['Replied']['1'] = " are attending the meeting";
$lang['Replied']['2'] = " are not attending the meeting";
$lang['Replied']['5'] = " are uncertain about attending the meeting";
$lang['A_mail_nothing'] = "No email to send";
$lang['No_volunteer'] = "Club setting do not allow users to volunteer on-line";

$lang['Can_attend'] = "I <b>WILL</b> be at the %s meeting";
$lang['Not_attend'] = "I will <font color=#FF0000><b>NOT</b></font> be at the %s meeting";
$lang['Look_agenda'] = "View or print the agenda for the %s meeting.";

$lang['Yes_attending'] = "Thank you for telling me that you will be coming to this meeting.";
$lang['No_reply'] = "The web-site does not yet show a reply to my email from";
$lang['Old_reply'] = "This is a courtesy message to remind you that you already accepted this role (at";
$lang['No_role'] = "For the moment I have not assigned you a role";
$lang['Volunteer_role'] = "but please keep looking at the website and volunteer if a role becomes available.";
$lang['Vacant_roles'] = "There are some roles that still need to be filled, so if you would like to volunteer for one %splease click here.%s";
$lang['Vacant_roles_n'] = "There are some roles that still need to be filled, so if you would like to volunteer for one please e-mail or call me.";
$lang['See_you_there'] = "The full agenda is now out on the website if you would like to print it.\n<br>See you there.";
$lang['Unsub_1'] = "If you do not wish to receive meeting information from %s in future then click this link to unsubscribe.";
$lang['Unsub_2'] = "Please note that this will also remove your membership of the %s .";
$lang['Assign_role'] = "I have %sassigned you the role of '%s'.";
$lang['Assign_m_role'] = "Please note that I have %sassigned %s the role of '%s' at this meeting.";
$lang['Dear'] = "Dear";
$lang['Accept_role'] = "I ACCEPT the '%s' role";
$lang['Decline_role'] = "I DECLINE the '%s' role";
$lang['Provisional'] = "provisionally "; //Leave the blank at the end!
$lang['Mentor_info'] = "** MENTOR INFORMATION **";
$lang['First_time'] = "This is a first time for that role.";
$lang['Sent_by'] = "Sent by %s on behalf of %s";
$lang['Reply_to'] = "Please reply to ";

$lang['Enter_cancellation_note'] = "Enter a note about this cancellation";

$lang['This_is_tm'] = "This is the membership group for the";
$lang['TM_group_moderator'] = "You may add or edit users";
$lang['Expired_member'] = "You are shown as a past member of this club and may use the agenda screen to book attendance at a meeting.";
$lang['Unsub_n'] = "Or, if you do not wish to receive information from %s in future then click this link to unsubscribe.";

//Statistics
$lang['Notes'] = "Notes";
$lang['Statistics'] = "Statistics";
$lang['How_many'] = "No. times";
$lang['Last_time'] = "Last time";
$lang['Detail_header'] = "Reply Log";
$lang['Show_detail'] = "Show %sReply Log%s (this meeting)";
$lang['Complete_header'] = "Reply Log";
$lang['Show_complete'] = "Show %sReply Log%s (all meetings)";
$lang['Summary_header'] = "Role Summary";
$lang['Show_summary'] = "Show %sRole Summary%s";
$lang['Log_header'] = "Reply Log";
$lang['Show_log'] = "Show %sReply Log%s (this meeting)";
$lang['History_header'] = "Member Summary";
$lang['Show_history'] = "Show %sMember Summary%s";
$lang['Sort_date'] = "Sort by date";
$lang['Sort_date_no'] = "Don't sort by date";
$lang['Explain_stats'] = "Click on a role to see who has done this recently or click on a name to see their recent roles";
$lang['Start_message'] = "Based on meetings since";
$lang['Attendance'] = "Attended %d out of %d meetings (%s)";
$lang['No_shows'] = "%d no-show,  %d attended unexpectedly";
$lang['On_line'] = "%d advised online (%s)";
$lang['On_time'] = "%d advised on time (current timetable) (%s)";
$lang['R_on_time'] = "%d role confirmed on time (current timetable) (%s)";
$lang['No_roles'] = "No Data";
$lang['Membernote'] = "Member's Note";
$lang['Officernote'] = "Club Officers' Note";
$lang['Meetingnote'] = "Meeting Note";
$lang['Show_membernote'] = "Show %sMember's Note%s";
$lang['Show_officernote'] = "Show %sClub Officers' Note%s";
$lang['Show_meetingnote'] = "Show %sMeeting Note%s (this meeting)";
$lang['Show_notes'] = "Show Notes";
$lang['Hide_notes'] = "Hide Notes";
$lang['Comment_updated'] = "Last updated by %s on %s ";
$lang['Explain_role_decline'] = "Briefly explain why you wish to decline this role";
$lang['Explain_not_attending'] = "Briefly explain why you cannot attend";

//TM speech display
$lang['Speech_summary'] = "Speech List";
$lang['Speech_scheduled'] = "Requested and Scheduled Speeches";
$lang['Speech_recent'] = "Recent speeches";
$lang['Speech_all'] = "All known speeches";
$lang['Speech_info'] = "Information on Speeches";
$lang['Workbook'] = "Workbook";
$lang['Speech'] = "Speech";
$lang['Detail'] = "Detail";
$lang['Assignment'] = "Assignment";
$lang['Title'] = "Title";
$lang['Ready'] = "Ready";
$lang['Requested'] = "Requested";
$lang['Requested_short'] = "Req";                  //Note to translators - keep this VERY short
$lang['Preference_short'] = "Pref";              //'Preference     Note to translators - keep this VERY short
$lang['Scheduled_short'] = "Sch";                  //Note to translators - keep this VERY short
$lang['Completed_short'] = "Comp";                      //Note to translators - keep this VERY short
$lang['Preference_long'] = "Preference";              //'Preference     Note to translators - keep this VERY short
$lang['1st_Preference'] = "1st Preference Date";
$lang['Scheduled'] = "Scheduled";
$lang['Completed'] = "Completed";
$lang['Any_club'] = "Any club";
$lang['WB_select'] = "Select";
$lang['Select_workbook'] = "Start a new workbook";
$lang['Repeat_workbook'] = "Repeat a workbook";
$lang['New_workbook'] = "Start New Workbook...";
$lang['Change_assignment'] = "Change Speech Number";
$lang['Choose_workbook'] = "Choose This Workbook";
$lang['Choose_assignment'] = "Choose This Speech";
$lang['Choose_Another_Workbook'] = "Choose Another Workbook";
$lang['Select_another_workbook'] = "Start another workbook";
$lang['Select_1workbook'] = "Which workbook are you using?";
$lang['Select_from_workbook'] = "Select a workbook";
$lang['Speech_title'] = "Speech Title";
$lang['Weeks'] = "in %s weeks&nbsp;&nbsp;&nbsp;[after %s]";
$lang['Speech_ready'] = "I will be ready to present this speech";
$lang['Empty_task'] = "You MUST select an assignment";
$lang['Ready_now'] = "Ready now";
$lang['Select_speak_club'] = "at";
$lang['Speech_OK'] = "Your speech has been saved";
$lang['Speech_to_be_assigned'] = "Your VPE or Toastmaster will notify you once your speech has been accepted.";
$lang['Speech_taken'] = "Your speech cannot be scheduled for this meeting.  This space in the agenda is already taken.";
$lang['Speech_not_OK'] = "Your speech cannot be scheduled at this time.  Educational speeches cannot be assigned to Speaker slots, and vice versa.";
$lang['Speech_deleted'] = "Your speech has been deleted";
$lang['Speech_already_scheduled'] = "Your speech cannot be deleted.  It has already been scheduled by your VPE - decline the role and try again.";
$lang['E_speech'] = "Edit speech";
$lang['Request_speech'] = "Request Speech";//PO 2010-01-08
$lang['Close_auto'] = "This screen will close automatically";
$lang['Speech_short'] = "Insufficient speeches queued to run the meeting";
$lang['Show_all_speeches'] = "Show ALL speeches";
$lang['Evaluator'] = "Evaluator";
$lang['Workbook_deleted'] = "Workbook deleted";
$lang['Workbook__discontinued'] = "Workbook discontinued";
$lang['Workbook_reactivated'] = "Workbook reactivated";
$lang['Discontinued'] = "Discontinued";
$lang['Workbook_completed'] = "Workbook completed";
$lang['Complete_workbook'] = "Mark Workbook as Complete";
$lang['Discontinue_workbook'] = "Mark Workbook as Discontinued";
$lang['Reactivate_workbook'] = "Mark Workbook as Still Active"; 
$lang['Speech_already_del'] = "This speech has already been deleted";
$lang['started'] = "Started"; //PO: 2009-12-29
$lang['workbook_matrix'] = "Workbook Matrix"; //PO: 2009-12-29
$lang['communicator_progress'] = "My Communicator Progress"; //PO: 2009-12-29
$lang['workbook_history'] = "Workbook History"; //PO: 2009-12-29
$lang['Preference_legend'] = "[1] = 1st Date Pref, [2] = 2nd Date Pref, [3] = 3rd Date Pref";
$lang['Click_schedule_speeches'] = "Click %shere%s to schedule speeches at this club";
$lang['On_behalf'] = "The request was submitted by %s.";
$lang['On_behalf_by'] = " by %s";
$lang['Club_advise_speeches'][0] = "No Notifications";
$lang['Club_advise_speeches'][1] = "Mentors (and not Officers)";
$lang['Club_advise_speeches'][2] = "Officers (and not Mentors)";
$lang['Club_advise_speeches'][3] = "Officers and Mentors";
$lang['Drop_club'] = "Delete the connection and future roles with this club"; 
$lang['Drop_club_explain'] = "Remove my connection to %s and any future roles in the club?";
$lang['Drop_mail'] = "decided to delete their connection and future roles with";
$lang['Quit'] = "Left";
$lang['continued'] = "... continued.";

//Book speeches
$lang['Speech_error'] = "You must select an assignment";
$lang['External'] = "Speech was presented at an external event";
$lang['External_select'] = "Any Club or External (inc.non easySpeak Clubs)";
$lang['Extern'] = "Save external speech";
$lang['Extern_c'] = "Date speech presented";
$lang['Extern_eval'] = "Evaluated by";
$lang['Extern_club'] = "Speech recorded by";
$lang['Extern_speech'] = "Record Speech made outside Toastmaster Meeting";
$lang['This_event'] = "This Event";
$lang['schedule_speeches'] = "Schedule Speeches"; // PO 2010-01-31
$lang['view_speeches'] = "View Speech List"; // PO 2011-01-01
$lang['view_schedule_speeches'] = "View Schedule Speeches"; // PO 2011-01-01
$lang['in_x_days'] = "in %d days"; // PO 2010-01-31
$lang['x_days_ago'] = "%d days ago"; // PO 2010-01-31
$lang['days_ago'] = "days ago"; // PO 2010-01-31
$lang['Today'] = "Today"; // PO 2012-01-15
$lang['Next_scheduled'] = "Next Sch'd"; // PO 2010-01-31
$lang['Last_performed'] = "Last Perf"; // PO 2010-01-31
$lang['First_requested'] = "First Requested"; // PO 2010-01-31
$lang['Last_requested'] = "Last Requested"; // PO 2010-01-31
$lang['Undecided'] = "Undecided"; // PO 2010-01-31
$lang['Undecided_assignment'] = "Undecided assignment"; // PO 2010-01-31
$lang['Undecided_workbook'] = "Undecided workbook"; // PO 2010-01-31
$lang['Preference'] = "My 1st, 2nd & 3rd<br>Meeting Prefs"; // PO 2010-01-31
$lang['Theme'] = "Meeting Theme"; // PO 2010-01-31
$lang['Speeches_s'] = "Already<br>Scheduled"; // PO 2010-01-31
$lang['Select_speaker'] = "Select a Speaker from the list"; // PO 2010-01-31
$lang['speakers'] = "Speakers"; // PO 2010-01-31
$lang['not_yet_scheduled'] = "Meeting Not Yet Scheduled"; // PO 2010-01-31
$lang['Timing'] = "Timing"; // PO 2010-01-31
$lang['Type_intro_here'] = "Speech introduction (for Toastmaster):"; // PO 2010-01-31
$lang['Introduction'] = "Introduction"; // PO 2010-01-31
$lang['Preferred_Dates'] = "Preferred Dates"; // PO 2010-01-31
$lang['Save'] = "Save"; // PO 2010-01-31
$lang['Unassign'] = "Unassign this speech"; // PO 2010-01-31
$lang['Meeting_full'] = "Meeting Full";
$lang['Speech_Status'] = "Speech Status";
$lang['Show_schedule'] = "Show Preferred Dates";
$lang['Hide_schedule'] = "Show Schedule Speech";
$lang['Schedule_speech'] = "Schedule Speech"; // PO 2010-01-31
$lang['Missing'] = "Missing";
$lang['Required'] = "Required";


//Member charts
$lang['Memberchart'] = "Member Charts";
$lang['Chart_select'] = "Chart";
$lang['Chart_participation'] = "Participation Chart";
$lang['Chart_planning'] = "Roles by Member";
$lang['Chart_planningB'] = "Roles by Meeting";
$lang['Chart_speeches'] = "Communications Chart";
$lang['Chart_campaign'] = "Membership Campaign";
$lang['Chart_visitors'] = "Visitors Introduced";
$lang['Chart_s'] = "Club Charts";
$lang['Chart_CL'] = "Leadership Chart";
$lang['Chart_mentors'] = "Mentoring";
$lang['Chart_goals'] = "Goals Chart";
$lang['Chart_pathways'] = "Pathways Chart";
$lang['Chart_survey'] = "Member Survey Results";
$lang['Report_otm'] = "OTM Results";
$lang['Leadership_award'] = "Award";

$lang['Chart_speech'] = "Speech";
$lang['Chart_other'] = "Other role";
$lang['Chart_roles'] = "Role History";
$lang['All_roles'] = "All Roles";
$lang['All_evaluators'] = "All Evaluators";
$lang['Chart_note'] = "Hover over an icon for more information or click on it for meeting detail<br>Click on the manual name for a personal summary %s";
$lang['Speech_icon_note'] = "Hover over an icon for more information or click on it for meeting detail";
$lang['Edit_note'] = " and to <b>make changes</b><br>Click on the + to start a new leadership project";
$lang['Plan_note_a'] = "Click on a date or role for meeting detail or on a name to see the member's profile";
$lang['Plan_note'] = "Click on a date for meeting detail, a role to view the Knowledgebase or on a name to see the member's profile";
$lang['Icon_comp'] = "Completed";
$lang['Icon_comp_r'] = "Completed in last 6 months";
$lang['Icon_booked'] = "Scheduled";
$lang['Icon_request'] = "Requested";
$lang['Icon_box'] = "Not done";
$lang['Attended_yes'] = "Attended";
$lang['Attended_unexpected'] = "Attended - not expected";
$lang['Attended_question'] = "Attendance not advised";
$lang['Attended_no'] = "No show";
$lang['Role_recent'] = "Completed Recently";
$lang['Roles_since'] ="Roles since";
$lang['Role_med'] = "More than 3 months ago";
$lang['Role_old'] = "More than 6 months ago";
$lang['No_data'] = "There is no data to report in this category for your club";
$lang['Unclosed_message'] = "Please advise your VPE that actual data is not yet confirmed for %d meeting";
$lang['Look_ahead'] = "Look ahead up to";
$lang['Print_chart']= "Printable version";
$lang['Memb_intro'] = "%s introduced %s to the club since";
$lang['New_Members'] = "New Members";
$lang['New_Visitors'] = "Visitors";
$lang['Number'] = "Number";
$lang['Members_h'] = "%d Members have";
$lang['Member_h'] = "One Member has";
$lang['Recruits'] = "%d new Members%s";
$lang['Recruit'] = "one new Member";
$lang['O_total'] = "out of a total of";
$lang['Visitor'] = "one Visitor";
$lang['Visitors'] = "%d Visitors%s";
$lang['Percent'] = "Percent";
$lang['Graph'] = "Graph";
$lang['Task'] = "Task";
$lang['Detail_info'] = "View detail";
$lang['Add_leader'] = "Start new leadership award";
$lang['View_CC'] = "View Communications progress";
$lang['View_CL'] = "View leadership progress";


//Leeadership Progress
$lang['leadership_progress'] = "My Leadership Progress"; //PO: 2010-12-20
$lang['Progress'] = "Progress";
$lang['Requires'] = "Requires";
$lang['Note 8'] = "Requires 3 total - One of which must be a Chair";
$lang['CL_edit'] = "Click on name to record completed Leadership assignment";
$lang['CL_date_format'] = "Date format changed to assist in submission to TMI";
$lang['CL_record'] = "Completed Leadership Assignment";
$lang['CL_successfully_edited'] = "Leadership Assignment updated";
$lang['Remove'] = "Remove";
$lang['Which_award'] = "Start recording this leadership award";
$lang['CL_successfully_deleted'] = "Leadership Assignment deleted";
$lang['Completion_date'] = "Completion Date";
$lang['VPE_verfied'] = "Verified?";
$lang['Completed_date'] = "Completed %s";
$lang['Hide_details'] = "Hide Details";
$lang['Show_details'] = "Show Details";

//Goals Status
$lang['Goalstatus'][GOAL_AHEAD] = "OK";
$lang['Goalstatus'][GOAL_ONSCHEDULE] = "OK";
$lang['Goalstatus'][GOAL_BEHIND] = "Behind";
$lang['Goalstatus'][GOAL_WARNING] = "At Risk";
$lang['Goalstatus'][GOAL_CRITICAL] = "At Risk";
$lang['Goalstatus'][GOAL_FAILED] = "Failed";

//Officers
$lang['Officer_year'] = "%s Officers for the year July %s to June %s";
$lang['Officer_switch'] = "Click here to edit %s-%s Officers";
$lang['Officer_view'] = "View %s-%s Officers";
$lang['Officer_list'] = "Officers";
$lang['Get_from'] = "Get Officers from %s-%s";
$lang['Officer_submit'] = "Submit changes to %s-%s Officers";
$lang['Edit_officer'] = "Change to this username";
$lang['Officer_TI_nudge'] = "Remember - you must also submit changes in the key officers to Toastmasters International";

$lang['Club_data'] = "Data";
$lang['Directory'] = "Directory";
$lang['D_Directory'] = "Download Directory";
$lang['Go_to'] = "Go to ...";
$lang['Speech_data'] = "Speech List";
$lang['No-one'] = "Not assigned";
$lang['Change_officers'] = "Submit changes";

$lang['Quick_nav'] = "Quick Knowledgebase Navigation";
$lang['Map_explain'] = "Click on a club name to see the details";


//Attendance labels
$lang['Attendance_labels'] = "Attendance Labels and badges";
$lang['A_label_explain']= "Use this option to create labels or badges as a pdf document.<br>After clicking on 'Print Badges' you will see a page of labels which can be saved and/or printed directly.<br><b>TURN OFF all 'Scale to page' settings </b>when you send the file to your printer.";
$lang['Include_logo'] = "Print labels with TI Logo";
$lang['Print_stock'] = "Select label stock";
$lang['Print_row'] = "Reuse labels - start printing the sheet on row";
$lang['Print_for'] = "Print badges for";
$lang['Guest_only'] = "Guests only";
$lang['Club_names'] = "Print Club Names";
$lang['Everyone'] = "Everyone";
$lang['AllMembers'] = "All full members of this club";
$lang['Print_e_awards'] = "Print Educational Awards";
$lang['Print_logo_blanks'] = "Print logo on all blank labels";
$lang['Print_logo_large'] = "Print background logo";
$lang['Stock_3x7'] = "Print 3 x 7 labels per sheet (Avery 7160 or equivalent)";
$lang['Stock_2x7'] = "Print 2 x 7 labels per sheet (Avery 7163 or equivalent)";
$lang['Stock_2x4'] = "Print 2 x 4 labels per sheet (Avery 7165 or equivalent)";

$lang['COT_email']= "Send Officer Training E-mail";
$lang['COT_no_email']= "Remember to send the Officer Training E-mail";

//Contact form
$lang['Contact_missing']= "Sorry, I don't have contact information for the";
$lang['Contact_m_missing']= "Sorry, no person has been assigned the %s role yet";

//Portal
$lang['Blog_archive'] = "Blog archive";
$lang['Labels'] = "Labels";
$lang['Labels_explain'] = "Enter word(s) here that will be used in the word cloud on the right. You may enter several labels separated by commas";
$lang['Comments'] = "Comments";
$lang['Edit_blog'] = "Edit Blog entry";
$lang['Save_blog'] = "Save Blog entry";
$lang['New_blog'] = "NEW Blog entry";
$lang['Site_posting'] = "Site-wide posting";
$lang['Delete_entry'] = "Delete this entry";
$lang['Edit_message'] = "Edit Message";
$lang['Save_message'] = "Save Message";
$lang['New_message'] = "NEW Message";

//Help screen
$lang['Contact_es'] = "Contact easy-Speak";
$lang['Help']= "Help Options";
$lang['Help_explain']= "All support is provided by volunter Toastmasters - please look at the Knowledgebase articles and Discussion forum before you ask a general question";
$lang['KB_explain']= "The Knowledgebase contains many article about Toastmasters in general, how to run a successful club and full instructions on using this software.<br>It is organised into categories which are all listed if you select %sHelp Options > Knowledge Map%s from the menu bar.<br>You may search the Knowledgbase using the form on this page or %sHelp Options > Search%s from the menu bar<br><br>You may also go directly to one of the main Knowledgebase categories by clicking on its name here:";
$lang['Help_sources']= "Sources of Information";
$lang['Use_KB']= "Use the Knowledgebase";
$lang['Use_forums']= "Check the Discussion Forum";
$lang['Fill_support_ticket']= "Fill in a Support Request";
$lang['Forums_explain']= "The Discussion Forum provides an area where you may ask questions to the Toastmaster community<br>It is organised into categories which are all listed if you select %sHelp Options > Discussion Forum%s from the menu bar.<br>You may search the Discussion forum using the form on this page or %sHelp Options>Word Search%s from the menu bar<br><br>You may also go directly to one of the help forum by clicking on its name here:";
$lang['Search_information'] = "Search the Knowledgebase and Forum for Information";
$lang['Video_es'] = "easy-Speak Video";
$lang['Translate_es'] = "Help with easy-Speak translation";

$lang['UI_objects'] = "Reusable UI Objects";
$lang['UI_User'] = "User";
$lang['UI_Meeting'] = "Meeting";
$lang['UI_MeetingRole'] = "Meeting Role";
$lang['UI_Attendance'] = "Attendance";
$lang['UI_Workbook'] = "Workbook";
$lang['UI_Speech'] = "speech";
$lang['UI_Role'] = "Role";
$lang['UI_Assignment'] = "Assignment";


// MEMBER SURVEY
$lang['Member_survey'] = "Member Survey";
$lang['Survey_Question'] = "Survey Question";
$lang['Survey_Question_Change'] = "Change Survey Question";
$lang['Replies'] = "Replies";

$lang['Survey_reply'][SURVEY_YES] = "Yes";
$lang['Survey_reply'][SURVEY_NO] = "No";
// ------
$lang['Survey_reply'][SURVEY_HIGH] = "High Interest";
$lang['Survey_reply'][SURVEY_SOME] = "Some Interest";
$lang['Survey_reply'][SURVEY_LOW] = "No Interest";
// ------
$lang['Survey_reply'][SURVEY_ALWAYS] = "Always";
$lang['Survey_reply'][SURVEY_OFTEN] = "Often";
$lang['Survey_reply'][SURVEY_SOMETIMES] = "Sometimes";
$lang['Survey_reply'][SURVEY_NEVER] = "Never";
$lang['Survey_reply'][SURVEY_DONTKNOW] = "Don't Know";
// ---------
$lang['Survey_reply'][SURVEY_BEST] = "Top of Club";
$lang['Survey_reply'][SURVEY_GOOD] = "Good";
$lang['Survey_reply'][SURVEY_FAIR] = "Fair";
// ---------
$lang['Survey_reply'][SURVEY_6MONTHS] = "6 Months";
$lang['Survey_reply'][SURVEY_12MONTHS] = "12 Months";
$lang['Survey_reply'][SURVEY_NONE] = "None";


$lang['Survey_reply_short'][SURVEY_YES] = "Yes";
$lang['Survey_reply_short'][SURVEY_NO] = "No";
// ------
$lang['Survey_reply_short'][SURVEY_HIGH] = "High";
$lang['Survey_reply_short'][SURVEY_SOME] = "Some";
$lang['Survey_reply_short'][SURVEY_LOW] = "None";
// ------
$lang['Survey_reply_short'][SURVEY_ALWAYS] = "Alw";
$lang['Survey_reply_short'][SURVEY_OFTEN] = "Oft";
$lang['Survey_reply_short'][SURVEY_SOMETIMES] = "S'tms";
$lang['Survey_reply_short'][SURVEY_NEVER] = "Nvr";
$lang['Survey_reply_short'][SURVEY_DONTKNOW] = "?";
// ---------
$lang['Survey_reply_short'][SURVEY_BEST] = "Top";
$lang['Survey_reply_short'][SURVEY_GOOD] = "Good";
$lang['Survey_reply_short'][SURVEY_FAIR] = "OK";
// ---------
$lang['Survey_reply_short'][SURVEY_6MONTHS] = "6M";
$lang['Survey_reply_short'][SURVEY_12MONTHS] = "12M";
$lang['Survey_reply_short'][SURVEY_NONE] = "-";


$lang['Survey_type'][SURVEYTYPE_OTM] = "Outstanding Toastmaster Award";
$lang['Survey_type'][SURVEYTYPE_INTERESTS] = "Member Survey";

$lang['Survey_category'][SURVEYCATEGORY_CLUBEVALUATION] = "Your Evaluation of Our Club";
$lang['Survey_category'][SURVEYCATEGORY_IMPROVE] = "Why You Joined Toastmasters";
$lang['Survey_category'][SURVEYCATEGORY_INTERESTS] = "Your Toastmaster Interest Profile";
$lang['Survey_category'][SURVEYCATEGORY_NEWMEMBER] = "Professional Profile";
$lang['Survey_category'][SURVEYCATEGORY_HUMAN] = "Human Factors";
$lang['Survey_category'][SURVEYCATEGORY_PARTICIPATION] = "Meeting Participation";
$lang['Survey_category'][SURVEYCATEGORY_SERVICE] = "Service";
$lang['Survey_category'][SURVEYCATEGORY_AWARDS] = "Educational Awards";
$lang['Survey_category'][SURVEYCATEGORY_CONTESTS] = "Contests";
$lang['Survey_category'][SURVEYCATEGORY_MENTORSHIP] = "Mentorship";

$lang['Answer_type'][ANSWERTYPE_RADIOYN] = "Yes / No";
$lang['Answer_type'][ANSWERTYPE_RADIOHLS] = "High Interest / Some Interest / No Interest";
$lang['Answer_type'][ANSWERTYPE_RADIOAUSN] = "Always / Often / Sometimes / Never";
$lang['Answer_type'][ANSWERTYPE_TEXT] = "Free Text";
$lang['Answer_type'][ANSWERTYPE_RADIOBGF] = "Best in Club / Good / Fair";
$lang['Answer_type'][ANSWERTYPE_612] = "6 Months / 12 Months";
$lang['Answer_type'][ANSWERTYPE_COUNT] = "0-n";

// Interests - High Somewhat Low
$lang['TI_survey'][1] = "Complete the Competent Communication Program manual and the earn the Competent Communicator (CC) award";
$lang['TI_survey'][2] = "Complete the Advanced Communication Program manuals and the earn the Advanced Communicator Bronze, Silver, or Gold award";
$lang['TI_survey'][3] = "Earn the Competent Leader or Advanced Leader award";
$lang['TI_survey'][4] = "Help the Club with public relations and publicity";
$lang['TI_survey'][5] = "Contribute to or edit the Club newsletter or website";
$lang['TI_survey'][6] = "Learn about parliamentary procedure";
$lang['TI_survey'][7] = "Improve evaluation skills";
$lang['TI_survey'][8] = "Improve thinking skills";
$lang['TI_survey'][9] = "Improve meeting management skills";
$lang['TI_survey'][10] = "Improve listening skills";
$lang['TI_survey'][11] = "Improve management skills";
$lang['TI_survey'][12] = "Participate in club debates";
$lang['TI_survey'][13] = "Visit other Toastmaster Clubs";
$lang['TI_survey'][14] = "Be part of a Club speakers bureau";
$lang['TI_survey'][15] = "Serve as a mentor for a new member";
$lang['TI_survey'][16] = "Help to increase Club membership";
$lang['TI_survey'][17] = "Participate in Toastmasters activities outside the Club";
$lang['TI_survey'][18] = "Present modules from The Better Speaker Series, the Successful Club series, or the Leadership Excellence Series";
$lang['TI_survey'][19] = "Serve as a Club officer (specify office)";
$lang['TI_survey'][20] = "Lead or help with a Speechcraft program";
$lang['TI_survey'][21] = "Lead or help with a Youth Leadership program";
$lang['TI_survey'][22] = "Learn how to judge speech contests";
$lang['TI_survey'][23] = "Be a contestant in a speech contest";
$lang['TI_survey'][24] = "Organize a new Toastmasters Club";
$lang['TI_survey'][25] = "Serve as a District Officer";

//Free Text responses
$lang['TI_survey'][31] = "List a goal that you want to achieve in the next few months";
// evaluate your Club
$lang['TI_survey'][41] = "When you attended our first club meeting, were you warmly welcomed by Club officers and members?";
$lang['TI_survey'][42] = "When you joined the Club, did the Club induct you with a special ceremony?";
$lang['TI_survey'][43] = "Did our Club assign you a mentor to help with your first few speech projects and answer any questions about the educational program?";
$lang['TI_survey'][44] = "Did the Vice President Education ask you what you wanted to learn in Toastmasters when you joined?";
$lang['TI_survey'][45] = "Immediately after you joined, were you assigned a speaking role at a Club Meeting";
$lang['TI_survey'][46] = "Do you receive speech evaluations that are positive and helpful";
$lang['TI_survey'][47] = "Are our Club meetings well planned?";
$lang['TI_survey'][48] = "Are our Club meetings enjoyable?";
$lang['TI_survey'][49] = "Were you offered the opportunity to serve as a Club leader?";
$lang['TI_survey'][50] = "Do you plan to continue in our Club next term?";
$lang['TI_survey'][51] = "If not, why not?";
$lang['TI_survey'][52] = "List a goal that you want to achieve in the next few months";
$lang['TI_survey'][53] = "What can the Club do to help you accomplish your goals?";
$lang['TI_survey'][54] = "What suggestions do you have for improving our Club";
$lang['TI_survey'][55] = "What do you like about our Club?";

// New member profile
$lang['TI_survey'][31] = "Occupation and Employer";
$lang['TI_survey'][32] = "Accomplishments and Interests";
$lang['TI_survey'][33] = "Personal and Career Goals";
$lang['TI_survey'][34] = "What objectives do you hope to accomplish as a member of this Club?";
$lang['TI_survey'][35] = "Are business presentations, leadership or speaking in front of an audience requirements of your job or profession?";
$lang['TI_survey'][36] = "How would you describe your current skill level as a speaker and/or leader";
$lang['TI_survey'][37] = "Why did you chose to join a Toastmasters Club, and this Club in particular?";

// Do you wish to improve your ability to...
$lang['TI_survey'][60] = "Do you wish to improve your ability to...";
$lang['TI_survey'][61] = "Persuade and convince others?";
$lang['TI_survey'][62] = "Put ideas across clearly and understandably?";
$lang['TI_survey'][63] = "Improve your self confidence before a group of people?";
$lang['TI_survey'][64] = "Think quickly and clearly under pressure?";
$lang['TI_survey'][65] = "Become skilled in group leadership?";
$lang['TI_survey'][66] = "Listen effectively and critically?";
$lang['TI_survey'][67] = "Tactfully evaluate someone else's presentations?";
$lang['TI_survey'][68] = "Gracefully accept helpful criticism";



// OUTSTANDING TOASTMASTER
// Human factors
$lang['TI_survey'][101] = "<b>Enthusiasm</b> - Does the member reflect enthusiasm for fellow members, for the club,and for Toastmasters?";
$lang['TI_survey'][102] = "<b>Dedication</b> - Does the member readily and enthusiastically accept all assignments and willingly contribute to the club's well being?";
$lang['TI_survey'][103] = "<b>Helping Others</b> - Does the member evaluate others with the purpose of recognizing achievement, fostering continued improvement and building self-esteem?";
// Meeting Participation
$lang['TI_survey'][104] = "Meeting Attendance (%)";
$lang['TI_survey'][117] = "Meeting Awards - Best Speaker";
$lang['TI_survey'][118] = "Meeting Awards - Best Evaluator";
$lang['TI_survey'][119] = "Meeting Awards - Best Table Topics";
$lang['TI_survey'][120] = "Meeting Awards - Other";
$lang['TI_survey'][116] = "Manual Speeches given at the club";
$lang['TI_survey'][129] = "Manual Speeches given outside the club";
$lang['TI_survey'][132] = "Participated in Inter-Club Visit (joint meeting or speaker-evaluator exchange)";
// Service
$lang['TI_survey'][105] = "Club Officer Service";
$lang['TI_survey'][106] = "Newsletter Editor (not club Officer)";
$lang['TI_survey'][107] = "Webmaster";
$lang['TI_survey'][134] = "HPL Guidance Committee Member";
$lang['TI_survey'][135] = "HPL Project Leader";
$lang['TI_survey'][123] = "Speechcraft";
$lang['TI_survey'][124] = "Other Success/Leadership and Success/Communication";
$lang['TI_survey'][125] = "Youth Leadership";
// Educational Awards
$lang['TI_survey'][108] = "Competent Communicator";
$lang['TI_survey'][109] = "Advanced Communicator Bronze";
$lang['TI_survey'][110] = "Advanced Communicator Silver";
$lang['TI_survey'][111] = "Advanced Communicator Gold";
$lang['TI_survey'][112] = "Competent Leadership";
$lang['TI_survey'][113] = "Advanced Leadership Bronze";
$lang['TI_survey'][114] = "Advanced Leadership Silver";
$lang['TI_survey'][115] = "Distinguished Toastmaster";
// Contests
$lang['TI_survey'][121] = "Number of contests participated in";
$lang['TI_survey'][140] = "Number of Club level contests won";
$lang['TI_survey'][141] = "Number of Area level contests won";
$lang['TI_survey'][142] = "Number of Division level contests won";
$lang['TI_survey'][143] = "Number of District level contests won";
$lang['TI_survey'][144] = "Number of International level contests won";
// Mentorship
$lang['TI_survey'][126] = "Better Speaker Series Speeches";
$lang['TI_survey'][127] = "Successful Club Series Speeches";
$lang['TI_survey'][128] = "Leadership Excellence Series Speeches";
$lang['TI_survey'][130] = "Sponsored New Members";
$lang['TI_survey'][131] = "Mentor for New Member";
$lang['TI_survey'][133] = "Written and Verbal Evals for CL Project (must give both)";

$lang['survey_disabled'] = "Your survey question has been hidden.";
$lang['survey_deleted'] = "Your survey question has been deleted.";
$lang['survey_enabled'] = "Your survey question has been unhidden.";
$lang['survey_saved'] = "Your survey question has been saved.";
$lang['Click_return_survey_manager'] = "Click %sHere to return to the Member Survey Manager%s";
$lang['Hide_survey'] = "Hide Question";
$lang['Unhide_survey'] = "Unhide Question";
$lang['Delete_survey'] = "Delete Question";
$lang['survey_manager'] = "Member Survey Manager";
$lang['survey_category'] = "Category";
$lang['Official_survey'] = "TMI or Custom?";
$lang['New_survey'] = "New Survey Question";
$lang['Edit_survey_q'] = "Edit Survey Question";
$lang['survey_sort'] = "Order Number ";
$lang['Select_type_of_survey'] = "Select Answer Type";
$lang['Select_category_of_survey'] = "Select Question Category";
$lang['survey_dontknow'] = "Include a 'Don't Know' option";
$lang['survey_rows'] = "Number of text rows to display";
$lang['survey_settings'] = "Survey Question Settings";
$lang['edit_survey_description'] = "Here you can edit your Survey Question parameters";

$lang['roles_mode'] = "Main Roles";
$lang['awards_mode'] = "Meeting Award Winners";

$lang['Outstanding_toastmaster'] = "Outstanding Toastmaster";
$lang['Survey_period'] = "Survey Period";
$lang['Survey_date'] = "Survey Date";
$lang['Otm_period'] = "Toastmaster Year";
$lang['Otm_date'] = "Last Saved";
$lang['Interest'] = "Interest";
$lang['Mentoring_interest'] = "Wants Mentee?";

$lang['Enthusiasm'] = "Enthusiasm";
$lang['Dedication'] = "Dedication";
$lang['Helping_others'] = "Helping";
$lang['Score'] = "Score";
$lang['Points'] = "Points";
$lang['Never'] = "Never";
$lang['club_report'] = "Club OTM Report";
$lang['edit_survey'] = "Edit Member Survey for %s";

$lang['No_SM'] = "No Social media links were found for your club. Add details in the Club Control Panel if you have Facebook or Twitter etc.";

// Registration status:
$lang['Registration_Status'][REGSTATUS_NEW] = "New";
$lang['Registration_Status'][REGSTATUS_CREATED] = "Created";
$lang['Registration_Status'][REGSTATUS_CONFIRMED] = "Confirmed";
$lang['Reg_already'] = "This club is already registered with easy-Speak.  We are taking you to its directory page.";
$lang['Reg_already_s'] = "Club Already Registered";
$lang['Missing_data'] = "Missing Data";
$lang['Reg_bad_org'] = "You are trying to create a %s. Please select the District, Division, or Area and retry";

//Mobile
$lang['Overview'] = 'Overview';
$lang['Agenda_'] = 'Agenda';
$lang['Timer'] = 'Timer';
$lang['Actions'] = 'Actions';
$lang['Start'] = 'Start';
$lang['Stop'] = 'Stop';
$lang['Reset'] = 'Reset';
$lang['Reset_All'] = 'Reset All';
$lang['Close'] = 'Close';
$lang['SMS'] = 'SMS';
$lang['My_Roles'] = 'My Roles';
$lang['Roles'] = 'Roles';

// Club Registration
$lang['Registration_Successful'] = "Registration Successful";
$lang['Registration_successful_message'] = "Your registration has been received by our support desk, and you will be contacted within 24 hours.";
$lang['Registration_Failed'] = "Registration Failed";
$lang['Registration_failed_message'] = "There has been a problem with your registration please contact our support desk.  Most likely you or someone else has already registered the club and you will be contacted shortly.";
$lang['Confirm_delete_registration'] = "Are you sure that you want to delete this registration record.  This action is not reversable";
$lang['Delete_registration'] = "Delete Registration";
$lang['Registration_Deleted'] = "Registration Deleted";
$lang['Invalid_Club_Number'] = "Invalid Club Number";
$lang['Cannot_find_club'] = "We cannot find your Club.  Please check the number and retry!<br />Note: Check that your club is listed as chartered on the TI 'find a club' screen";
$lang['Special_instructions_for_support_staff'] = "Special instructions or questions to our Support Staff";
$lang['Club_dateformat']= "Date Format (short for screens)";
$lang['Club_dateformat_long']= "Date Format (long for e-mail and screen titles)";
$lang['Club_timeformat']= "Time Format";
$lang['Sort_name2'] = "Default membership sort sequence";

// Paypal Payments
$lang['PP_payment'] = "Make a contribution from %s to help cover the running costs of easy-Speak";
$lang['PP_supporter'] = "%s supports easy-Speak";
$lang['PP_amount'] = "Please enter an amount";
$lang['PP_Successful'] = "Payment Successful";
$lang['PP_successful_message'] = "Thank you.<br>Your payment has been processed by Paypal.<br>A receipt will be sent by e-mail";
$lang['PP_Cancelled'] = "Payment Cancelled";
$lang['PP_Cancelled_message'] = "Your payment was cancelled before being sent";
$lang['from'] = "from";
$lang['Active_ES_clubs'] = "There are <b>%s clubs in District %s</b> that use easy-Speak to manage their meetings";
$lang['Payments'] = "Payments Made";
$lang['Donate'] = "Support easy-Speak";
$lang['Payment_in'] = "Make a payment in";

$lang['Pay_PP'] = "Pay via PayPal";
$lang['Pay_IPN'] = "Pay via PayPal";
$lang['Pay_TW'] = "Pay via TransferWise";
$lang['Pay_Bank'] = "Pay with a Domestic Bank Transfer";
$lang['Pay_int_Bank'] = "Pay with an International Transfer";
$lang['Explain_PP'] = "You do not need a PayPal account and can pay with a Credit or Debit card";
$lang['Explain_TW'] = "Make an inter-country bank transfer for %s using this low cost provider (not available USA)";
$lang['Explain_Bank'] = "Make a bank transfer for %s using your own online bank";
$lang['Explain_d_TW'] = "Make an inter-country bank transfer using this low cost provider (not available USA)";
$lang['Explain_d_Bank'] = "Make a bank transfer using your own online bank";
$lang['Request_reference'] = "<font color=#FF0000><b>Please use the reference: %s</b></font> to allow us to recognise your payment";
$lang['Bank_a_name'] = "Account name";
$lang['Bank_name'] = "Bank name";
$lang['Bank_address'] = "Address";
$lang['Bank_account'] = "Account Number";
$lang['Bank_sort'] = "Sort Code";
$lang['Bank_BIC'] = "BIC Code";
$lang['Bank_IBAN'] = "IBAN Code";

$lang['Man_successful'] = "This payment of %s %s for %s has been processed.<br>A receipt will be sent by e-mail";
$lang['Corr_successful'] = "This correction of %s %s for %s has been processed.";
$lang['Man_payment'] = "Record a manual payment";
$lang['Man_correction'] = "Record a manual correction";
$lang['Conf_mail_subject'] = "Thank you for your conference payment";
$lang['Conf_thanks'] = "Dear %s<br /><br />Thank you for your payment of %s %s for the %s";
$lang['Signoff'] = "Kind regards";

//Newest Picture
$lang['Photo_id'] = "ID of Specific Photo (latest if left blank)";
$lang['Photo_id_subtitle'] = "Latest picture used if left blank.  Mouse over any picture in the Photo gallery to find the ID";
$lang['Thumbnail'] = "Show thumbnail";
$lang['thumbnail_subtitle'] = "Show the thumbnail of the picture";
$lang['Photo_source'] = "Photo Gallery";
$lang['NewestPic_source'][1] = "Club Photo Gallery";
$lang['NewestPic_source'][2] = "TMI Stock Photo";
$lang['NewestPic_source'][3] = "Random Club Photo";

//Newest Picture block
$lang['No_pictures_match'] = "No Pictures found which match your criteria";

// Blog Block
$lang['All_blogs'] = "All Blogs";
$lang['Club_only'] = "This club only";
$lang['Except_club'] = "All except this club";
$lang['Show_posting_dates'] = "Show posting dates on blog";

//Gallery block
$lang['Gallery_only'] = "Display ONLY if member has a photo ";

//Committee Block
$lang['Display_photos'] = "Display photos of officers";

// Club setup Block
$lang['not_empty'] = "Can not be empty";
$lang['Meeting_weeks'] = "In these weeks of each month";
$lang['Meeting_days'] = "Narrative of when the club meets";

//Global_forum block
$lang['G_forum'][1] = "Toastmasters Mission";
$lang['G_forum'][2] = "How Does it Work?";
$lang['G_forum'][3] = "Welcome to Toastmasters... more than 4 million...";
$lang['G_forum'][4] = "Why join Toastmasters";
$lang['G_forum'][5] = "The Educational process";
$lang['G_forum'][6] = "The Communications Track";
$lang['G_forum'][7] = "The Leadership Track";
$lang['G_forum'][8] = "Fear Factor";
$lang['G_forum'][9] = "10 Tips for Public Speaking";
$lang['G_forum'][10] = "easy-Speak - Tips & Tricks";
$lang['G_forum'][11] = "";	//Hidden option - will that work?

// Invitation Block
$lang['Application_Form'] = "TMI Application Form";
$lang['Be_a_guest'] = "Be a guest at our next meeting!";
$lang['email_officer'] = "Contact the %s";
$lang['download_a_form'] = "Download a %s";
$lang['When_do_we_meet'] = "When do we meet?";
$lang['Where_do_we_meet'] = "Where do we meet?";
$lang['Show_email_officer'] = "Show the contact officer's email address";
$lang['Show_officer_phone'] = "Show the contact officer's phone numbers";
$lang['Show_tmi_form'] = "Display link";
$lang['Invitation_tmi_form'] = "TMI Application Form";

// discusion invite Block
$lang['discussion_invite'] = "Do you have a comment or an idea to share to help make our club better?";
$lang['discussion_forum'] = "Club Members Discussion Forum";
$lang['forum_missing'] = "Contact the System Administrator.  This club is missing its discussion forum";
$lang['visit_forum'] = " Visit our %s, and make yourself heard!";

// ------ PORTAL --------------------
$lang['Add'] = "Add";
$lang['Delete_webpart_warning'] = "All web-parts will be removed and the page will be deleted!  Do you want to proceed?";
$lang['Page_deleted'] = "Page successfully deleted!";
$lang['Page_updated'] = "Page successfully updated!";
$lang['Webpart_deleted'] = "Web-Part successfully deleted!";
$lang['Webpart_delete_confirmation'] = "Delete the '%s' Web-Part?";
$lang['Edit_page_settings'] = "Edit Page Settings";
$lang['Delete_page'] = "Delete this Page";
$lang['Mousover_description'] = "Mouse over to see a description, click to select...";

$lang['Column_width'] = "Column Widths";
$lang['Percent_pixels'] = "Values of 100 or less interpreted as percentages";
$lang['width_not_set'] = "Not Set";
$lang['Tag_help'] = "META tags for keywords and description are generally deprecated - but you may edit them if you choose. %sClick here for a Tutorial%s<br>(Meta name is managed in the Club Control Panel)";
$lang['Not_published'] = "Not Published";
$lang['Page_name'] = "Page Name";
$lang['Page_name_h'] = "Will show in reverse bar for browser - Include your main keywords here";
$lang['Meta_desc'] = "Meta Description";
$lang['Meta_keyw'] = "Meta Keywords";

$lang['edit_text'] = "edit text";
$lang['save_text'] = "save text";

// Edit Block
$lang['Display_options'] = "Display Options";
$lang['Hide'] = "Hide";
$lang['Background'] = "Background";
$lang['Border'] = "Border";
$lang['Data_options'] = "Data Options";
$lang['Show'] = "Show";
$lang['Live'] = "Live";
$lang['Pending'] = "Pending";
$lang['Edit_webpart'] = "Edit Web-Part";
$lang['Edit_page_layout'] = "Edit page layout";
$lang['Save_page_layout'] = "Save page layout";
$lang['Remove_webpart'] = "Remove Web-Part";
$lang['Edit_webpart_settings'] = "Edit Web-Part Settings";
$lang['Add_webpart'] = "Add Web-Part";
$lang['Click_add_webpart'] = "Click to Add Web-Part";
$lang['Click_drag_webpart'] = "Click here to drag and drop Web-Part";
$lang['Drop_webparts'] = "Drop web-parts here";
$lang['Release_mouse'] = "Release the mouse over this text";
$lang['Menu_page'] = "Menu/Page";
$lang['Add_menu'] = "Add Menu";
$lang['Add_page'] = "Add Page";

$lang['Page_pagename'] = "Page: %s";
$lang['Menu_title'] = "Menu Title";
$lang['Menu_menutitle'] = "Menu: %s";
$lang['Menu_order'] = "Menu Order";
$lang['Page_title'] = "Page Title";
$lang['Viewable_by'] = "Viewable by";
$lang['Members_only'] = "Members Only";
$lang['block_position'][t] = "Top Banner";
$lang['block_position'][b] = "Bottom Banner";
$lang['block_position'][c] = "Left Column";
$lang['block_position'][d] = "Center Column";
$lang['block_position'][e] = "Right Column";
$lang['block_position'][r] = "Right Panel";
$lang['user_type'][USERTYPE_ALL] = "Everyone";
$lang['user_type'][USERTYPE_REGISTERED] = "Registered Users";
$lang['user_type'][USERTYPE_GUEST] = "Guests";
$lang['user_type'][USERTYPE_MEMBER] = "Members";
$lang['user_type'][USERTYPE_MODERATOR] = "Moderators";
$lang['user_type'][USERTYPE_ADMIN] = "Administrators";
$lang['Reset_portal'] = "Delete ALL custom data and pages?<br>Reset your website to the default pages?";
$lang['Reset_confirm'] = "Are you SURE you want to reset your website to the default pages?";
$lang['Type_yes'] = "Type %s and then press the Submit button if you are VERY sure you want to do this";

// titles
$lang['block_title']['blog'] = "Our Blog";			//Note no single quotes in the titles - breaks javascript
$lang['block_title']['freetext'] = "Free Text";
//$lang['block_title']['yahoo'] = "Yahoo";
$lang['block_title']['workflow'] = "workflow";
$lang['block_title']['wotd'] = "Word of the Day";
$lang['block_title']['word_search'] = "Word Search";
$lang['block_title']['websters'] = "Websters";
$lang['block_title']['user'] = "User Info";
//$lang['block_title']['webring'] = "webring";
$lang['block_title']['toastytip'] = "Toasty-Tip";
$lang['block_title']['statistics'] = "Statistics";
$lang['block_title']['recent_topics'] = "Recent Topics";
$lang['block_title']['search'] = "Search";
$lang['block_title']['quote_search'] = "Quote Search";
$lang['block_title']['recent_kb'] = "Recent KB";
$lang['block_title']['quotes'] = "Quotes";
//$lang['block_title']['poll'] = "Poll";
$lang['block_title']['qotd'] = "Quote of the Day";
$lang['block_title']['on_this_day'] = "On This Day";
$lang['block_title']['onelook'] = "OneLook";
$lang['block_title']['online_users'] = "Online Users";
$lang['block_title']['next_meetings'] = "Forthcoming Meetings";
$lang['block_title']['newest_pic'] = "Newest Picture";
$lang['block_title']['next_meeting'] = "Next Meeting";
$lang['block_title']['nav_tm'] = "Clubs Navigation";
$lang['block_title']['nav_kb'] = "KnowledgeBase";
$lang['block_title']['maps2'] = "Local Map";
$lang['block_title']['kb_article'] = "KB Article";
$lang['block_title']['help_wanted'] = "Help Wanted";
//$lang['block_title']['freerice'] = "Freerice";
$lang['block_title']['forum'] = "Discussion Forum";
$lang['block_title']['e_wotd'] = "Grammarian Word-Of-The-Day";
$lang['block_title']['district'] = "District";
$lang['block_title']['conference'] = "Conference";
$lang['block_title']['committee'] = "Committee Contact Info";
$lang['block_title']['district_o'] = "District Officer Contact Info";
$lang['block_title']['division_o'] = "Division Officer Contact Info";
$lang['block_title']['area_o'] = "Area Officer Contact Info";
$lang['block_title']['club_welcome'] = "Club Welcome";
$lang['block_title']['club_news'] = "News";
$lang['block_title']['invitation'] = "Guest Invitation to the Club";
$lang['block_title']['gallery'] = "Portrait Gallery of Members";
$lang['block_title']['affiliation'] = "Affiliations";
$lang['block_title']['global_forum'] = "Blocks of Toastmaster Text";
$lang['block_title']['directions'] = "Directions to the Club";
$lang['block_title']['club_logo'] = "Club Logo";
$lang['block_title']['club_sm'] = "Social Media";
$lang['block_title']['email'] = "E-mail form";
$lang['block_title']['discussion_invite'] = "Link to Discussion Forum";
$lang['block_title']['register_club'] = "Add a Club";
$lang['block_title']['help'] = "Sources of help";
$lang['block_title']['dcp'] = "Show recent DCP success";


// Descriptions
$lang['block_description']['blog'] = "Our Blog";
$lang['block_description']['freetext'] = "A flexible, formatted text and HTML editor.";
//$lang['block_description']['yahoo'] = "This Web-part present an HTML page with links to a Yahoo! discussion group. ";
$lang['block_description']['workflow'] = "This Web-part displays the TM navigation box. This block displays a personal navigation box for the user.";
$lang['block_description']['wotd'] = "This Web-part presents a javascript Word of The Day from dictionary.com.";
$lang['block_description']['word_search'] = "This Web-part will search for the entered word on dictionary.com, thesaurus.com and reference.com.";
$lang['block_description']['websters'] = "Websters Dictionary";
$lang['block_description']['user'] = "This Web-part presents information for the logged on user. 1 - Avatar Image (or photo if that exists and the avatar doesn't)  2 - Profile photo (or avatar if that exists and the profile photo doesn't)  3 - Time and date of last visit  4 - List the user's posts etc  5 - List clubs associated with the user";
//$lang['block_description']['webring'] = "This Web-part presents the Webring navigation box.";
$lang['block_description']['toastytip'] = "An easy-Speak Tip-Of-The-Day!  Introduce your members to some of the perhaps more obscure but handy functionality in easy-Speak";
$lang['block_description']['statistics'] = "This Web-part presents a list of site stats. User counts, newest user etc.";
$lang['block_description']['recent_topics'] = "This Web-part presents the forum, title and author of recent postings in selected forums.  Postings are only listed if the user has system permission to read them.  At least one posting, up to the portal defined maximum as long as they are more recent than old_postings.  Can be set to scroll or be static.";
$lang['block_description']['search'] = "This Web-part presents a simple forum-search option.";
$lang['block_description']['quote_search'] = "This Web-part presents a searchbox to find quotes on quotationspage.com.";
$lang['block_description']['recent_kb'] = "This Web-part presents the category, title and author of recent updates to the Knowledgebase.";
$lang['block_description']['quotes'] = "This Web-part presents a quote selected at random from the site quotes file.";
//$lang['block_description']['poll'] = "(Not currently configured)";
$lang['block_description']['qotd'] = "This Web-part presents a javascript Quote of The Day from Said-what?.";
$lang['block_description']['on_this_day'] = "This Web-part presents a link to reference.com for events that happened on the current day.";
$lang['block_description']['onelook'] = "This Web-part will search for the entered word in the dictionaries at onelook.com.";
$lang['block_description']['online_users'] = "This Web-part displays a list of users that are on-line";
$lang['block_description']['next_meetings'] = "This Web-part looks for the next club meetings in the calendar and displays them.  Optionally will include meetings for all local clubs (defined by the distance setting in your Club Control Panel) plus events for your Area, Division and District or a specific list of clubs. Optionally display Training events ONLY (for the whole District) - good to display officer training.";
$lang['block_description']['newest_pic'] = "This Web-part looks for the most recent picture. If it doesn't find anything specific in the last four months it looks site-wide.  If you enter a picture category it will always look there - otherwise it looks first at the category for the club.  A specific specific picture can be displayed (ignoring how old it is) by entering the picture identifier (pic_id)  (You may see the pic_id by hovering over the thumbnail while browsing the picture category in the Photo album)";
$lang['block_description']['next_meeting'] = "This Web-part is only meaningful for clubs using easy-Speak data management - it displays details of the next meeting using the javascript demonstrated on the club data page.";
$lang['block_description']['nav_tm'] = "This Web-part displays the TM navigation box. It will show the District, Divisions and Area for your club. If a club is selected it will show the link to neighbouring clubs.  The 'home' link will show the portal default page.  Find a club - using the Google maps. Top level categories from the Knowledgebase.";
$lang['block_description']['nav_kb'] = "This Web-part displays a list of the top level Knowledgebase categories.";
$lang['block_description']['maps2'] = "This Web-part calculates the positions and presents a Google Earth map showing all the clubs, and the map to be centered on your location.";
$lang['block_description']['kb_article'] = "This Web-part will import the text for one or more selected Knowledgebase articles.";
$lang['block_description']['help_wanted'] = "This Web-part presents the title and author of recent postings from a forum nominated by the webmaster. At least one posting, up to the portal defined maximum as long as they are more recent than old_postings.  Can be set to scroll or be static";
//$lang['block_description']['freerice'] = "This Web-part links to FreeRice.org which offers a vocabulary game and contributes rice to the UN world food program.";
$lang['block_description']['forum'] = "This Web-part presents recent postings from a forum nominated by the webmaster";
$lang['block_description']['e_wotd'] = "This Web-part presents a javascript Word of The Day with special print options - prepared by Toastmasters at easy-Speak.org.";
$lang['block_description']['district'] = "This Web-part will present all the training or contest events that are planned in the calendar on a single summary page. Enter the District number here. You may leave it blank if your installation has a default District entered in the Admin Control Panel. Otherwise events for the District of the currently logged in club is reported. Training events, Contests, and Exec meetings can be optionally shown.  A full list of Divisions and Areas will shown with any matching events in the last 30 days or next 150 days.  The webmaster may build pages for Training and Contests and enter the page numbers in 'Portal Page for Contest Events' and 'Portal Page for District Training Events' in the ACP to cause these items to list in the menu bar 'Information' for the whole site.";
$lang['block_description']['conference'] = "This Web-part presents Conference News with a link to see the full conference information or post to the Conference Q&A discussion.  Data are collected by looking in the selected forum for postings that are marked 'News'.  Entering a forum number for the Conference news and discussion. Conference news from more than one forum is possible.  Can be set to scroll or be static.";
$lang['block_description']['committee'] = "This Web-part lists the club committee details (similar presentation to the club data page)";
$lang['block_description']['district_o'] = "This Web-part lists the District Officer details (similar presentation to the club data page)";
$lang['block_description']['division_o'] = "This Web-part lists the Division Officer details (similar presentation to the club data page)";
$lang['block_description']['area_o'] = "This Web-part lists the Area Officer details (similar presentation to the club data page)";
$lang['block_description']['club_welcome'] = "Fetch a hiererarchy of information begining with the organisational unit that the user is logged in to and working up to District and finally site-wide.  Data are collected by looking in selected forum for postings that are marked 'Welcome'. (See also 'Page Welcome')  You may select Odd or Even topics only for this post (create another block in the next column to fetch the others). If you enter a number in the block parm it will be used to select ONLY the messages posted with that 'portal content' posting type in the forum.  Block Value: If you enter a forum number here it will over-ride the hierarchy and ONLY display the 'Welcome' messages from this one forum. (Use this to create a page with dynamic content - for example 'All about Our Club' or a page of information about the next Conference.)";
$lang['block_description']['club_news'] = "Fetch a hierarchy of news begining with the organisational unit that the user is logged in to and working up to District news and finally site-wide news.  Data are collected by looking in the selected forum for postings that are marked 'NEWS'.";
$lang['block_description']['invitation'] = "Invites guests to your next meeting, giving the club's normal address, and providing links to email a desgnated officer, and to the toastmasters member application.";
$lang['block_description']['gallery'] = "Fetch the club photo gallery of all members";
$lang['block_description']['affiliation'] = "Club name, number, division, district and area";
$lang['block_description']['global_forum'] = "A set of frequently used information including such things as the Toastmaster Mission, Why Toastmasters?, Easy-Seak Tips and Tricks, amongst others";
$lang['block_description']['directions'] = "The club' adddress, and driving directions on how to get to the club's default location (user-edited)";
$lang['block_description']['club_logo'] = "The logo of the club (uploaded via the club Control Panel) or if there is no club logo, then the easy-Speak logo.";
$lang['block_description']['club_sm'] = "The club Social Media links (uploaded via the club Control Panel). For example - 'Follow us on Twitter'";
$lang['block_description']['email'] = "This web-part is available to an un-registered user and sends an e-mail to a list of specified club officers";
$lang['block_description']['discussion_invite'] = "This web-part asks your members to submit comments or ideas through the club's discussion forum";
$lang['block_description']['register_club'] = "This Web-part allows the user to initiate a request for a new club to be put on the system, using the 'Add a Club' wizard";
$lang['block_description']['help'] = "A graphic is presented with links to the help page";
$lang['block_description']['dcp'] = "Current DCP status and up to ten years DCP history may be displayed.";
//Pathway overview
$lang['path']['1'] = "Dynamic Leadership";
$lang['path']['2'] = "Effective Coaching";
$lang['path']['3'] = "Innovative Planning";
$lang['path']['4'] = "Leadershp Development";
$lang['path']['5'] = "Motivational Strategies";
$lang['path']['6'] = "Persuasive Influence";
$lang['path']['7'] = "Presentation Mastery";
$lang['path']['8'] = "Strategic Relationships";
$lang['path']['9'] = "Team Collaboration";
$lang['path']['10'] = "Visionary Communications";
$lang['path']['11'] = "Engaging Humor";
$lang['path']['30'] = "Mentoring Project";
$lang['path']['31'] = "DTM Project???";

?>
