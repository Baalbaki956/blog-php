<?php  

header('Content-Type: application/xls');
//The Content-Type header is used to indicate the media type of the resource. The media type is a string sent
// along with the file indicating the format of the file.
// redirect to select_delete_update.php
header('Content-Disposition: attachment; filename=users_table.xls');
//In a standard HTTP response, the Content-Disposition header dictates whether the content is displayed
// in the browser or,instead, made available as an attachment to be downloaded to local storage.

?>