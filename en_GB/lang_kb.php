<?php
/***************************************************************************
 *                                 lang_kb.php
 *                            -------------------
 *   begin                : Sunday, Mar 31, 2003
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: lang_kb.php,v 1.1 2005/04/12 19:30:56 jonohlsson Exp $
 *
 *
 ***************************************************************************/

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

$lang['Article'] = "Article";
$lang['Article_description'] = "Description";
$lang['Article_type'] = "Type";
$lang['Article_keywords'] = "Keywords";
$lang['Articles'] = "Articles";
$lang['Click_cat_to_add'] = "Select a Category to add Article";
$lang['KB_Home'] = "KB Home";
$lang['Article_title'] = "Article Name";
$lang['Article_text'] = "Article text";
$lang['Add_article'] = "Submit Article";
$lang['Read_article'] = "Reading Article";
$lang['Article_not_exsist'] = "Article doesn't exist";
$lang['Article_not_visible'] = "This Article is restricted or has not yet been approved";
$lang['Category_not_exsist'] = "Category doesn't exist";

$lang['Resync_KB'] = "Resync all Category counts";

$lang['Article_submitted_Approve'] = "Article Submitted Successfully.<br />An Administrator will review your article and decide whether to let user's view it or not.";
$lang['Article_submitted'] = "Article Submitted Successfully.";
$lang['Click_return_article'] = "Click %sHere to return to the Article%s";

$lang['Article_Edited_Approve'] = "Article Edited Successfully.<br />It need to be approved again before user's can view it.";
$lang['Article_Edited'] = "Article Edited Successfully.";
$lang['Edit_article'] = "Edit Article";

$lang['KB_art_description'] = "Here you can approve articles so users can view them or you can delete articles.";
$lang['Art_man'] = "Article Manager";
$lang['Cat_man'] = "Category Manager";
$lang['KB_cat_description'] = "Here you can add, edit, or delete categories in the Knowledge Base";
$lang['Art_action'] = "Action";

//approve
$lang['Art_edit'] = "Edited Articles";
$lang['Art_not_approved'] = "Not Approved";
$lang['Art_approved'] = "Approved";
$lang['Approve'] = "Approve";
$lang['Un_approve'] = "Un-Approve";
$lang['Article_approved'] = "Article is now Approved.";
$lang['Article_unapproved'] = "Article is now Not Approved.";

//delete
$lang['Confirm_art_delete'] = "Are you sure you want to delete this article?";
$lang['Confirm_art_delete_yes'] = "%sYes, I want to delete this article%s";
$lang['Confirm_art_delete_no'] = "%sNo, I don't want to delete this article%s";
$lang['Article_deleted'] = "Article Deleted Successfully.";

$lang['Click_return_article_manager'] = "Click %sHere to return to the Article Manager%s";

//cat manager
$lang['Create_cat'] = "Create New Category:";	//NTR
$lang['Create'] = "Create";		//NTR
$lang['Cat_settings'] = "Category Settings";		//NTR
$lang['Create_description'] = "Here you can change the name of the category and add a description to the new category.";		//NTR
$lang['Cat_created'] = "Category Created Successfully.";		//NTR
$lang['Click_return_cat_manager'] = "Click %sHere to return to the Category Manager%s";		//NTR
$lang['Edit_description'] = "Here you can edit the settings of your category";		//NTR
$lang['Edit_cat'] = "Edit Category";		//NTR
$lang['Cat_edited'] = "Category Edited Successfully.";		//NTR
$lang['Parent'] = "Parent";		//NTR

$lang['Cat_delete_title'] = "Delete Category";		//NTR
$lang['Cat_delete_desc'] = "Here you can delete a category and move all of the articles in it to a new category";		//NTR
$lang['Cat_deleted'] = "Category Deleted Successfully.";		//NTR
$lang['Delete_all_articles'] = "Delete Articles";		//NTR

//configuration
$lang['KB_config'] = "KB Configuration";		//NTR
$lang['Art_types'] = "Article Types";		//NTR
$lang['KB_config_title'] = "Knowledge Base Configuration";		//NTR
$lang['KB_config_explain'] = "Change the configuration of your Knowledge Base";		//NTR
$lang['New_title'] = "Allow New Articles";		//NTR
$lang['New_explain'] = "Let users post new articles on in your Knowledge Base";		//NTR
$lang['Edit_name'] = "Allow Editing";		//NTR
$lang['Edit_explain'] = "Allow users to edit their articles after posting them";		//NTR
$lang['Notify_name'] = "Notify me by";		//NTR
$lang['Notify_explain'] = "Choose which way to receive notices that new articles have been posted";		//NTR
$lang['PM'] = "PM";		//NTR
$lang['Admin_id_name'] = "Admin ID";		//NTR
$lang['Admin_id_explain'] = "This is the user id number that PM notifications will be sent to.";		//NTR
$lang['Approve_new_name'] = "Approve new Articles";		//NTR
$lang['Approve_new_explain'] = "Change whether <b />new</b /> articles need to be approved or not";		//NTR
$lang['Approve_edit_name'] = "Approve Edited Articles";		//NTR
$lang['Approve_edit_explain'] = "Change whether <b />edited</b /> articles need to be approved or not";		//NTR
$lang['Del_topic'] = "Delete Topic";		//NTR
$lang['Del_topic_explain'] = "When you delete an article, do you want its comments topic to be deleted also?";		//NTR

$lang['Use_comments'] = "Comments";
$lang['Use_comments_explain'] = "Enable comments for articles, to be inserted in the phpbb forum";		//NTR
$lang['Use_ratings'] = "Ratings";		//NTR
$lang['Use_ratings_explain'] = "Enable ratings for articles";		//NTR

$lang['Forum_id'] = "Forum ID";		//NTR
$lang['Forum_id_explain'] = "This is the forum that the article's comments will be kept";		//NTR


//
// Permissions
//
$lang['KB_Auth_Title'] = "KB Permissions";		//NTR
$lang['KB_Auth_Explain'] = "Here you can choose which usergroup(s) can be the moderators for each kb category or just has the private access";		//NTR
$lang['Select_a_Category'] = "Select a Category";		//NTR
$lang['Look_up_Category'] = "Look up Category";		//NTR
$lang['KB_Auth_successfully'] = "Auth has been updated successfully";		//NTR
$lang['Click_return_KB_auth'] = "Click %sHere to return to the KB Permissions%s";		//NTR

$lang['Upload'] = "Upload";		//NTR
$lang['Approval'] = "Approval";		//NTR
$lang['Approval_edit'] = "Approval Edit";		//NTR

$lang['Allow_rating'] = "Allow ratings";		//NTR
$lang['Allow_rating_explain'] = "Users are allowed to rate articles.";

$lang['Allow_anonymos_rating'] = "Allow anonymos ratings";		//NTR
$lang['Allow_anonymos_rating_explain'] = "If ratings is activated, allow anonymos users to add ratings to your articles";		//NTR

$lang['KB_config_updated'] = "Knowledge Base Configuration Updated Successfully.";		//NTR

$lang['KB_notify_subject_new'] = "New Article!";
$lang['KB_notify_subject_edited'] = "Edited Article!";
$lang['KB_notify_subject_approved'] = "Approved Article!";
$lang['KB_notify_subject_unapproved'] = "Unapproved Article!";
$lang['KB_notify_body'] = "An article has been submitted or modified:";

$lang['Category_Permissions'] = "Category Permissions";		//NTR
$lang['Category_Title'] = "Category Title";
$lang['Category_Desc'] = "Category Description";
$lang['View_level'] = "View Level";
$lang['Upload_level'] = "Upload Level";
$lang['Rate_level'] = "Rate Level";
$lang['Comment_level'] = "Comment Level";
$lang['Edit_level'] = " Edit Level";
$lang['Delete_level'] = "Delete Level";
$lang['Approval_level'] = "Approval Level";
$lang['Approval_edit_level'] = "Approval Edit Level";

$lang['KB_Rules_post_can'] = "You <b>can</b> post new articles in this category";
$lang['KB_Rules_post_cannot'] = "You <b>cannot</b> post new articles in this category";
$lang['KB_Rules_comment_can'] = "You <b>can</b> comment articles in this category";
$lang['KB_Rules_comment_cannot'] = "You <b>cannot</b> comment articles in this category";
$lang['KB_Rules_edit_can'] = "You <b>can</b> edit your articles in this category";
$lang['KB_Rules_edit_cannot'] = "You <b>cannot</b> edit your articles in this category";
$lang['KB_Rules_delete_can'] = "You <b>can</b> delete your articles in this category";
$lang['KB_Rules_delete_cannot'] = "You <b>cannot</b> delete your articles in this category";
$lang['KB_Rules_rate_can'] = "You <b>can</b> rate articles in this category";
$lang['KB_Rules_rate_cannot'] = "You <b>cannot</b> rate articles in this category";
$lang['KB_Rules_approval_can'] = "Articles <b>need no</b> approval in this category";
$lang['KB_Rules_approval_cannot'] = "Articles <b>need</b> approval in this category";
$lang['KB_Rules_approval_edit_can'] = "Article edits <b>need no</b> approval in this category";
$lang['KB_Rules_approval_edit_cannot'] = "Article edits <b>need</b> approval in this category";
$lang['KB_Rules_moderate'] = "You <b>can</b> %smoderate this category%s"; // %s replaced by a href links, do not remove!
$lang['KB_Rules_moderate_can'] = "You <b>can</b> moderate this category";

$lang['Comments_show'] = "Display article comments.";
$lang['Comments_show_explain'] = "- also displays comments in the article page";
$lang['Comments_show_title'] = "User comments";

$lang['Mod_group'] = "KB Moderator Group";		//NTR
$lang['Mod_group_explain'] = "- with KB Admin permissions!";		//NTR

$lang['Stats_list'] = "Show KB Stats";		//NTR
$lang['Stats_list_explain'] = "Show KB stats in the header.";		//NTR

$lang['Header_banner'] = "Show Top Logo";		//NTR
$lang['Header_banner_explain'] = "Show KB logo in the header.";		//NTR

$lang['Comment_info'] = "Comments settings";		//NTR
$lang['Rating_info'] = "Ratings settings";		//NTR


//types
$lang['Types_man'] = "Types Manager";		//NTR
$lang['KB_types_description'] = "Here you can add delete and edit the different article types";		//NTR
$lang['Create_type'] = "Create new Article Type:";		//NTR
$lang['Type_created'] = "Article Type Created Successfully.";		//NTR
$lang['Click_return_type_manager'] = "Click %sHere to return to the Types Manager%s";		//NTR

$lang['Edit_type'] = "Edit Type";		//NTR
$lang['Edit_type_description'] = "Here you can edit the name of the type";		//NTR
$lang['Type_edited'] = "Article Type Edited Successfully.";		//NTR

$lang['Type_delete_title'] = "Delete Article Type";		//NTR
$lang['Type_delete_desc'] = "Here you can change what the article type is of the articles that have the type you are deleting.";		//NTR
$lang['Change_type'] = "Change article's type to";		//NTR
$lang['Change_and_Delete'] = "Change and Delete";		//NTR
$lang['Type_deleted'] = "Article Type Deleted Successfully.";		//NTR

$lang['Pre_text_name'] = "Article Submission Instructions";		//NTR
$lang['Pre_text_header'] = "Article Submission Instructions Header";		//NTR
$lang['Pre_text_body'] = "Article Submission Instructions Body";		//NTR
$lang['Pre_text_explain'] = "This is text instructions displayed to users at the top of the submission forum.";		//NTR

$lang['Show'] = "Show";		//NTR
$lang['Hide'] = "Hide";		//NTR

$lang['Empty_fields'] = "Please fill out all parts of the form.";
$lang['Back_button'] = "Use the 'back button' to return to the form";
$lang['Empty_fields_return'] = "Click %sHere to return to the form.%s";
$lang['Empty_category'] = "You must choose a category";
$lang['Empty_type']= "You must choose a type";
$lang['Empty_article_name'] = "You must fill out the article name";
$lang['Empty_article_desc'] = "You must fill out the article description";

$lang['Read_full_article'] = ">>Read Full Article";

$lang['No_add'] = "You can't add a new article";
$lang['No_edit'] = "You can't edit this article!";
$lang['Post_comments'] = "Post your comments";

$lang['Category_sub'] = "Sub-Categories";
$lang['Quick_stats'] = "Quick Stats";

// added

$lang['Edited_Article_info'] = "Article updated by ";
$lang['No_Articles'] = "This category is empty!";
$lang['Not_authorized'] = "Sorry, you are not authorized!";
$lang['TOC'] = "Contents";

// Rate
$lang['Votes_label'] = "Rating ";		//NTR
$lang['Votes'] = "vote(s)";		//NTR
$lang['No_votes'] = "No votes";		//NTR
$lang['Rate'] = "Rate Article";		//NTR
$lang['ADD_RATING'] = "[Rate Article]";		//NTR		//NTR
$lang['Rerror'] = "Sorry, you have already rated this article.";
$lang['Rateinfo'] = "You are about to rate the article <i>{filename}</i>.<br />Please select a rating. 1 is the worst, 10 is the best.";		//NTR
$lang['Rconf'] = "You have given <i>{filename}</i> a rating of {rate}.<br />This makes the files new rating {newrating}/10.";		//NTR
$lang['R1'] = "1";    //NTR
$lang['R2'] = "2";    //NTR
$lang['R3'] = "3";    //NTR
$lang['R4'] = "4";    //NTR
$lang['R5'] = "5";    //NTR
$lang['R6'] = "6";    //NTR
$lang['R7'] = "7";    //NTR
$lang['R8'] = "8";    //NTR
$lang['R9'] = "9";    //NTR
$lang['R10'] = "10";  //NTR
$lang['Click_return_rate'] = "Click %sHere to return to article%s";

// Print version
$lang['Print_version'] = "[Printable version]";

// Stats
$lang['Top_toprated'] = "Toprated Articles";
$lang['Top_most_popular'] = "Most Popular";
$lang['Top_latest'] = "Latest Articles";

// Votes check
$lang['Votes_check_ip'] = "Validate ratings - ip";
$lang['Votes_check_ip_explain'] = "Only one vote per IP-adress is permitted.";

$lang['Votes_check_userid'] = "Validate ratings - user";
$lang['Votes_check_userid_explain'] = "Users may only vote once.";

$lang['Article_pag'] = "Article pagination";
$lang['Article_pag_explain'] = "The number of articles to show in a (stats) category before pagination.";

$lang['Comments_pag'] = "Comments pagination";
$lang['Comments_pag_explain'] = "The number of comments to show for the article before pagination.";

$lang['News_sort'] = "Article sort method";
$lang['News_sort_explain'] = "Define how articles are sorted within its category.";

$lang['News_sort_par'] = "ASC or DESC sorting";
$lang['News_sort_par_explain'] = "";            //NTR

//
// General strings from the news admin panel
//

$lang['News_settings'] = "KB Block Settings";
$lang['News_settings_short_explain'] = "Configure some options for the front-page news.";
$lang['News_settings_explain'] = "Here you can edit the configuration for the KB Block. This panel lets you extract what categories the block will display, thus you'll create subinstances of the module.";

//
// Update result messages
//

$lang['News_updated_return_settings'] = "KB block configuration updated successfully.<br /><br />Click %shere to return to main page.%s"; // %s's for URI params - DO NOT REMOVE
$lang['News_update_error'] = "Couldn't update KB block configuration.<br /><br />This mod is designed for MySQL so please contact the author if you have troubles. If you can offer a translation of the SQL into other database formats, please send them to:<br />";

// Custom Field
$lang['Fieldselecttitle'] = "Select what to do";
$lang['Afield'] = "Custom Field: Add";
$lang['Efield'] = "Custom Field: Edit";
$lang['Dfield'] = "Custom Field: Delete";
$lang['Mfieldtitle'] = "Custom Fields";
$lang['Afieldtitle'] = "Add Field";
$lang['Efieldtitle'] = "Edit Field";
$lang['Dfieldtitle'] = "Delete Field";
$lang['Fieldexplain'] = "You can use the custom fields management section to add, edit, and delete custom fields. You can use custom fields to add more information about an article.";
$lang['Fieldname'] = "Field Name";
$lang['Fieldnameinfo'] = "This is the name of the field, for example 'File Size'";
$lang['Fielddesc'] = "Field Description";
$lang['Fielddescinfo'] = "This is a description of the field, for example 'File Size in Megabytes'";
$lang['Fieldadded'] = "The custom field has been successfully added";
$lang['Fieldedited'] = "The custom field you selected has been successfully edited";
$lang['Dfielderror'] = "You didn't select any fields to delete";
$lang['Fieldsdel'] = "The custom fields you selected have been successfully deleted";

$lang['Field_data'] = "Options";
$lang['Field_data_info'] = "Enter the options that the user can choose from. Separate each option with a new-line (carriage return).";
$lang['Field_regex'] = "Regular Expression";
$lang['Field_regex_info'] = "You may require the input field to match a regular expression %s(PCRE)%s.";
$lang['Field_order'] = "Display Order";

//Fields Types

$lang['Field_Input'] = "Single-Line Text Box";		//NTR
$lang['Field_Textarea'] = "Multiple-Line Text Box";		//NTR
$lang['Field_Radio'] = "Single-Selection Radio Buttons";		//NTR
$lang['Field_Select'] = "Single-Selection Menu";		//NTR
$lang['Field_Select_multiple'] = "Multiple-Selection Menu";		//NTR
$lang['Field_Checkbox'] = "Multiple-Selection Checkbox";		//NTR

$lang['Click_return'] = "Click %sHere to return to the previous page%s";

// added
$lang['Cat_all'] = "All";

$lang['L_Pages'] = "Pages";
$lang['L_Pages_explain'] = "Use the '[pages]' command to split the article into pages";
$lang['L_Toc'] = "Table of contents (TOC)";
$lang['L_Toc_explain'] = "Use the '[toc]' command to add entry in the TOC";
$lang['L_Abstract'] = "Abstract";
$lang['L_Abstract_explain'] = "Use the '[abstract]...[/abstract]' environment to insert an abstract";

$lang['L_Title_Format'] = "Title";
$lang['L_Title_Format_explain'] = "Use the '[title]...[/title]' environment to insert a main title";

$lang['L_Subtitle_Format'] = "Subtitle";
$lang['L_Subtitle_Format_explain'] = "Use the '[subtitle]...[/subtitle]' environment to insert a subtitle";

$lang['L_Subsubtitle_Format_explain'] = "Use the '[subsubtitle]...[/subsubtitle]' environment to insert a small header";


$lang['Default_article_id'] = "Set default article, for the article viewer";

// Added for v. 2.0
$lang['KB_comment_prefix'] = "[ KB ] ";		//NTR

$lang['Wysiwyg'] = "Use wysiwyg editor";		//NTR
$lang['Wysiwyg_explain'] = "If enabled, the standard bbcode/html/smilies input dialog is replaced by a wysiwyg editor.";		//NTR

$lang['Wysiwyg_path'] = "Path to wysiwyg software";		//NTR
$lang['Wysiwyg_path_explain'] = "This is the path (from mxBB/phpBB root) to the wysiwyg software folder, eg 'modules/' if you have uploaded for example tinemce in modules/tinymce.";		//NTR

$lang['Formatting_fixup'] = "Fixup formatting";		//NTR
$lang['Formatting_fixup_explain'] = "I enabled, the article text is reformatted: wordwrapping, url truncates, img resizing, some bbcode reformatting etc";		//NTR

$lang['Addtional_field'] = "More information (optional)";

$lang['No_cat_comments_forum_id'] = "Comments are enabled but you have not specified the target phpBB forum category in the KB adminCP - Categories";		//NTR

// Quick Nav
$lang['Quick_jump'] = "Go";

?>
