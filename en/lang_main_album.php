<?php
/***************************************************************************
 *                          lang_main_album.php [English]
 *                              -------------------
 *     begin                : Sunday, February 02, 2003
 *     copyright            : (C) 2003 Smartor
 *     email                : smartor_xp@hotmail.com
 *
 *     $Id: lang_main_album.php,v 1.0.6 2003/03/05 20:12:38 ngoctu Exp $
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
// Album Index
//
$lang['Photo_Album'] = "Photo Album";
$lang['Pics'] = "Pics";
$lang['Last_Pic'] = "Last Picture";
$lang['Public_Categories'] = "Public Categories";
$lang['No_Pics'] = "No Pictures";
$lang['Users_Personal_Galleries'] = "Users' Personal Galleries";
$lang['Your_Personal_Gallery'] = "Your Personal Gallery";
$lang['Recent_Public_Pics'] = "Recent Public Pictures";

$lang['View'] = "Viewed";

//
// Category View
//
$lang['Category_not_exist'] = "This category does not exist";
$lang['Upload_Pic'] = "Upload Picture";
$lang['Pic_Title'] = "Picture Title";

$lang['Album_upload_can'] = "You <b>can</b> upload new pics in this category";
$lang['Album_upload_cannot'] = "You <b>cannot</b> upload new pics in this category";
$lang['Album_rate_can'] = "You <b>can</b> rate pics in this category";
$lang['Album_rate_cannot'] = "You <b>cannot</b> rate pics in this category";
$lang['Album_comment_can'] = "You <b>can</b> post comments to pics in this category";
$lang['Album_comment_cannot'] = "You <b>cannot</b> post comments to pics in this category";
$lang['Album_edit_can'] = "You <b>can</b> edit your pics and comments in this category";
$lang['Album_edit_cannot'] = "You <b>cannot</b> edit your pics and comments in this category";
$lang['Album_delete_can'] = "You <b>can</b> delete your pics and comments in this category";
$lang['Album_delete_cannot'] = "You <b>cannot</b> delete your pics and comments in this category";
$lang['Album_moderate_can'] = "You <b>can</b> %smoderate%s this category";
$lang['Pic_category'] = "Photo Category";
$lang['Pic_sub_category'] = "Sub Category";
$lang['Pic_comment'] = "Hover over a picture to read the description or click to view it full size. ";
$lang['Photo_Album_for'] = "Photo Album for";
$lang['Unapproved'] = "(There are %d pictures that have been uploaded and are waiting approval)";
$lang['Unapproved_s'] = "(There is one picture that has been uploaded and is waiting approval)";

$lang['Edit_pic'] = "Edit";
$lang['Delete_pic'] = "Delete";
$lang['Rating'] = "Rating";
$lang['New_Comment'] = "New Comment";

$lang['Not_rated'] = "<i>not rated</i>";

//
// Upload
//
$lang['Pic_Desc'] = "Picture Description";
$lang['Plain_text_only'] = "Plain text only";
$lang['Desc_explain'] = "The description will display when a user hovers over the thumbnail image";
$lang['Max_length'] = "Maximum characters";
$lang['Upload_pic_from_machine'] = "Upload a picture from your machine";
$lang['Upload_to_Category'] = "Upload to Category";
$lang['Upload_thumbnail_from_machine'] = "Upload its thumbnail from your machine (must be the same file type as your picture)";
$lang['Upload_thumbnail'] = "Upload a thumbnail image";
$lang['Upload_thumbnail_explain'] = "It must be of the same file type as your picture";
$lang['Thumbnail_size'] = "Thumbnail size (pixel)";
$lang['Filetype_and_thumbtype_do_not_match'] = "Your picture and your thumbnail must be the same file type";

$lang['Upload_no_title'] = "You must enter a title for your picture";
$lang['Upload_no_file'] = "You must enter your path and your filename";
$lang['Desc_too_long'] = "Your description is too long";

$lang['Max_file_size'] = "Maximum file size (bytes)";
$lang['Max_width'] = "Maximum image width (pixel)";
$lang['Max_height'] = "Maximum image height (pixel)";

$lang['JPG_allowed'] = "Allowed to upload JPG files";
$lang['PNG_allowed'] = "Allowed to upload PNG files";
$lang['GIF_allowed'] = "Allowed to upload GIF files";

$lang['Album_reached_quota'] = "This category has reached the quota of pictures. Now you cannot upload any more. Please delete some old pictures or contact the administrators for more information";
$lang['User_reached_pics_quota'] = "You have reached your quota of pics. Now you cannot upload any more. Please contact the administrators for more information";

//--- Multiple File Upload mod : begin
//--- version : 1.0.3
//--- moved to language/lang_english/lang_multiple_album.php
//$lang['Bad_upload_file_size'] = "Your uploaded file is too large or corrupted";
//--- Multiple File Upload mod : end
$lang['Not_allowed_file_type'] = "Your file type is not allowed";
$lang['Upload_image_size_too_big'] = "Your image dimension size is too large";
$lang['Upload_thumbnail_size_too_big'] = "Your thumbnail dimension size is too large";

$lang['Missed_pic_title'] = "You must enter your pic title";

//--- Multiple File Upload mod : begin
//--- version : 1.0.3
//--- moved to language/lang_english/lang_multiple_album.php
//$lang['Album_upload_successful'] = "Your pic has been uploaded successfully";
//$lang['Album_upload_need_approval'] = "Your pic has been uploaded successfully.<br /><br />But the feature Pic Approval has been enabled so your pic must be approved by a administrator or a moderator before posting";
//--- Multiple File Upload mod : end
$lang['Click_return_category'] = "Click %shere to return to the category%s";
$lang['Click_load_another'] = "Click %shere to upload another picture%s";
$lang['Click_return_album_index'] = "Click %shere to return to the Album Index%s";

// View Pic
$lang['Pic_not_exist'] = "This picture does not exist";

// Edit Pic
$lang['Edit_Pic_Info'] = "Edit Picture Information";
$lang['Pics_updated_successfully'] = "Your picture information has been updated successfully";

// Delete Pic
$lang['Album_delete_confirm'] = "Are you sure to delete these pictures?";
$lang['Pics_deleted_successfully'] = "These picture(s) have been deleted successfully";

//
// ModCP
//
$lang['Approval'] = "Approval";
$lang['Approve'] = "Approve";
$lang['Unapprove'] = "Unapprove";
$lang['Locked'] = "Locked";
$lang['Not_approved'] = "Not approved";
$lang['Approved'] = "Approved";
$lang['Move_to_Category'] = "Move to Category";
$lang['Pics_moved_successfully'] = "Your pic(s) have been moved successfully";
$lang['Pics_locked_successfully'] = "Your pic(s) have been locked successfully";
$lang['Pics_unlocked_successfully'] = "Your pic(s) have been unlocked successfully";
$lang['Pics_approved_successfully'] = "Your pic(s) have been approved successfully";
$lang['Pics_unapproved_successfully'] = "Your pic(s) have been unapproved successfully";

//
// Rate
//
$lang['Current_Rating'] = "Current Rating";
$lang['Please_Rate_It'] = "Please Rate It";
$lang['Already_rated'] = "You have already rated this picture";
$lang['Album_rate_successfully'] = "Your picture has been rated successfully";

//
// Comment
//
$lang['Comment_no_text'] = "Please enter your comment";
$lang['Comment_too_long'] = "Your comment is too long";
$lang['Comment_delete_confirm'] = "Are you sure you want to delete this comment?";
$lang['Pic_Locked'] = "Sorry, this picture is locked and you cannot post comments anymore";

//
// Personal Gallery
//
$lang['Personal_Gallery_Explain'] = "You can view the personal galleries of other members by clicking on the link in their profiles";
$lang['Personal_gallery_not_created'] = "The personal gallery of %s is empty or has not been created";
$lang['Not_allowed_to_create_personal_gallery'] = "Sorry, the administrators of this board do not allowed you to create your personal gallery";
$lang['Click_return_personal_gallery'] = "Click %shere to return to the personal gallery%s";

//--- Admin configuration
//--- version : 1.0.0
$lang['Max_Files_To_Upload'] = "Maximum number of files user can upload at a time";
//--- version : 1.0.3
$lang['Album_upload_settings'] = "Album Upload Settings";
$lang['Max_pregenerated_fields'] = "Maximum number of fields to pre-generate";
$lang['Dynamic_field_generation'] = "Enable dynamic adding of upload fields";
$lang['Pre_generate_fields'] = "Pre generate the upload fields";
$lang['Propercase_pic_title'] = "Propercase picture title e.g. <i>'This Is A Picture Title'</i><br>Setting it to 'NO' will result in this <i>'This is a picture title'</i>";


//--- Multiple File Upload mod : begin
//--- version : 1.0.3
//--- Upload page
//--- version : 1.0.1
$lang['Add_File'] = "Add File";
//--- version : 1.0.2
//--- NOTE : keep the <br> part of the messages PLEASE !
$lang['File_thumbnail_count_mismatch'] = "The number of uploaded pictures and thumbnails doesn't match";
$lang['No_thumbnail_for_picture_found'] = "The was no thumbnail found for the uploaded picture (named : %s)";
$lang['No_picture_for_thumbnail_found'] = "The was no picture found for the uploaded thumbnail (named : %s)";
$lang['Unknown_file_and_thumbnail_error_mismatch'] = "Uknown error got raised when uploading the picture and thumbnail<br>Picture named : %s and Thumbnail named : %s<br>";
$lang['Picture_exceeded_maximum_size_INI'] = "Picture named '%s' is to big. Picture is skipped.<br>";
$lang['Thumbnail_exceeded_maximum_size_INI'] = "Thumbnail named '%s' is to big. Picture and thubmnail are skipped.<br>"; ;
$lang['Execution_time_exceeded_skipping'] = "The maximum time alllowed for script execution has been exceeded. The following files was skipped:<br>";
$lang['Skipping_uploaded_picture_file'] = "%s<br/>";
$lang['Skipping_uploaded_picture_and_thumbnail_file'] = "%s (thumbnail: %s)<br/>";
$lang['Album_upload_not_successful'] = "None of your pictures has been uploaded successfully<br/><br/>";
$lang['Album_upload_partially_successful'] = "Only a part of your pictures has been uploaded successfully<br/><br/>";
$lang['No_pictures_selected_for_upload'] = "No pictures selected for upload or unknown error";

$lang['Bad_upload_file_size'] = "Your uploaded file (%s) is too large or corrupted";

$lang['Album_upload_successful'] = "Your picture(s) have been uploaded successfully";
$lang['Album_upload_need_approval'] = "Your picture(s) have been uploaded successfully and will be displayed after approval by an administrator";
$lang['Multi_file_explain'] = "You may upload up to %s files in a batch";

?>