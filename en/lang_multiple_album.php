<?php
/***************************************************************************
 *                          lang_multiple_album.php [English]
 *                          ------------------------------------------------
 *     begin                : Wednesday, July 28, 2004
 *     copyright            : (C) 2004 IdleVoid
 *     email                : idlevoid@slater.dk
 *
 *     version              : 1.0.3 28/07/2004
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

//--- Admin configuration
//--- version : 1.0.0
$lang['Max_Files_To_Upload'] = "Maximum number of files user can upload at a time";
//--- version : 1.0.3
$lang['Album_upload_settings'] = "Album Upload Settings";
$lang['Max_pregenerated_fields'] = "Maximum number of fields to pre-generate";
$lang['Dynamic_field_generation'] = "Enable dynamic adding of upload fields";
$lang['Pre_generate_fields'] = "Pre generate the upload fields";
$lang['Propercase_pic_title'] = "Propercase picture title e.g. <i>'This Is A Picture Title'</i><br>Setting it to 'NO' will result in this <i>'This is a picture title'</i>";


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
$lang['Thumbnail_exceeded_maximum_size_INI'] = "Thumbnail named '%s' is to big. Picture and thubmnail are skipped.<br>";
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

//--------------------
?>