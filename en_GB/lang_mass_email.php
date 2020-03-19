<?php
if ( !defined('IN_PHPBB') )
{
        die("Hacking attempt");
}
//added to Custom mass email
$lang['Agenda_email_count']= "Sent to %d users who%s - using %s language"; //%d substituted with the number of recipents, %s substituted with the language used
$lang['Mass_email_count']= "Sent to %d users - using %s language"; //%d substituted with the number of recipents, %s substituted with the language used
$lang['Mass_email_total']= "In total sent to %d users, using %d e-mail";
$lang['Mass_email_wrong']= "<b>ATTENTION</b> the following users name have permanent errors in their e-mail address. Please contact the user to correct it <br/> %s";
$lang['Mass_email_none'] = "There are no users in this group with valid e-mail addresses";

$lang['Sendt_to']= "This is a list of the users who%s to which the e-mail has been sent using %s language"; //%s is substituted with 'replied' etc and the users language
$lang['Send1_to']= "This is a list of the users to which the e-mail has been sent using %s language"; //%s is substituted with the users language
$lang['Mass_email_explain'] = "Here you can create a message to all users of a specific group.  To do this, an e-mail will be sent out with a blind carbon copy sent to all recipients. <br />If you are e-mailing a large group of people please be patient after submitting and do not stop the page halfway through. It is normal for a mass e-mailing to take a long time, you will be notified when the script has completed.<br />E-mail is sent in batches.";
$lang['Compose'] = "Compose";

$lang['Recipients'] = "Recipients";
$lang['Gavel_clubs'] = "Include Gavel Clubs";
$lang['Gavel_only'] = "Gavel Clubs Only";
$lang['Status_clubs'] = "Include Active/Summary Clubs";
$lang['Active_status'] = "Only Active Clubs";
$lang['Summary_status'] = "Only Summary status Clubs";
$lang['All_status'] = "All Clubs";
$lang['Precharter_clubs'] = "Include Prospective Clubs";
$lang['Precharter_only'] = "Prospective Clubs Only";
$lang['Nothing_to_send'] = 'No mail to send';

$lang['Mass_email_not_allowed'] = "You have no permissions to mass e-mail any groups";

// Club mass email
$lang['Mail_year']= "Current or Incoming Officers?";
$lang['Club_email']= "Mass E-mail";
$lang['Both_years']= "Both Years";
$lang['Current']= "Current";
$lang['No_club_email']= "Either your connection timed out OR you are not authorised to use Mass E-mail for this organisation";
$lang['Club_email_extra'] = "In the normal course of events you should NOT e-mail ex-members.";
$lang['M_status'] = "Members status";
$lang['M_stat_explain'] = "If the members group is selected above - send this e-mail to members whose status with the club is:";
$lang['No_status_selected'] = "You must select at least one membership status to receive the mail<br />Use the 'back' button on your browser to return to the Mail selection page";
$lang['No_data_selected'] = "No data selected to receive the mail<br />Use the 'back' button on your browser to return to the Mail selection page";
$lang['No_country_selected'] = "You must select at least one country to receive the mailshot<br />Use the 'back' button on your browser to return to the Mail selection page";
$lang['No_message'] = "You must enter a subject and a message<br />Use the 'back' button on your browser to return to the mail selection page";
$lang['No_subject_or_message'] = "You must enter a subject and a message";
$lang['M_officer_explain'] = "Make the selection to send the e-mail or print labels for these officers:";
$lang['No_spam'] = 'You cannot spam old contacts through easy-Speak<br>Either re-confirm e-mail addresses and update contact details or move people to the appropriate status or change your selection for mail';

$lang['Select_recip'] = "Select Recipients for your message";
$lang['Club_l_email']= "Send Mass E-mail or Print Labels";
$lang['Org_email_explain'] = "Use this option to send an e-mail. Enter the Subject and Contents of your message. An e-mail will be sent with a blind carbon copy sent to all recipients.<br />E-mail is sent in batches.<br />If you are e-mailing a large group of people please be patient after submitting and do not stop the page halfway through. It is normal for a mass e-mailing to take a long time, you will be notified when the script has completed.";
$lang['Org_explain'] = "Make your selection and then press the E-mail or Labels button";
$lang['System_mail'] = "Send as System Mail";
$lang['Send_c_link'] = "Include a link to the Conference website";
$lang['Replyto'] = "Reply-to";
$lang['Send_as'] = "Send as this user";
$lang['Club_admin_setting'] = "The club admin setting";
$lang['No_user'] = "Could not locate information for requested user. Use the back button and try again";

// Label generator
// added by Kit
$lang['Label_explain']= "Use this option to create labels as a pdf document. After clicking on 'Make Labels' you will see a page of labels which can be saved and/or printed directly. It is designed to use Avery L7160 or equivalent labels.<br><b>TURN OFF all 'Scale to page' settings </b>when you send the file to your printer.";
$lang['Make_labels']= "Make Labels";
$lang['L_officer_explain']= "Create an address label for the officers selected";
$lang['Label_maker']= "Label Maker";
$lang['Print_country'] = "Print Country Name";
$lang['Print_blanks'] = "Print Name if address is blank";
$lang['Print_email'] = "Print even if e-mail is valid";
$lang['Country_select'] = "Select Countries";
$lang['Label_select'] = "Select";

// pdf generator
$lang['Pdf_explain'] = "Click here to open/download this page as a pdf file";

//COT email
$lang['COT_email_count']= "Sent to %d users - using %s language"; //%d substituted with the number of recipents, %s substituted with the language used
$lang['No_COT_email']= "You are not authorised to send COT mail for this organisation";
$lang['COT_resent'] = "CORRECTION or DUPLICATE e-mail";
$lang['COT_error'] = "There were no attendees at this training?";
$lang['Another_district'] = "NOTE that there were attendees from another District - Please forward the e-mail by hand to the appropriate officer";
$lang['Attendance_COT'] = "Attendance at Training";
$lang['Attendance_message'] = "The following Club Officers attended training organised by me on %s.";
$lang['Send_COT_email'] = "Send Training e-mail";
$lang['COT_email_explain'] = "This screen will send an e-mail reporting to your District Executive all Club Officers that attended this training.<br />The names and Club details will be filled in automatically but you may customise the covering message.<br />You will receive delivery confirmation is this is supported by the recipient's mail-server.<br />Please be patient after submitting and do not stop the page halfway through. You will be notified when the script has completed.";
$lang['COT_detail'] = "Click here for full details of the training";
//
?>