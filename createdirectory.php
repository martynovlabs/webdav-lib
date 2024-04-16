<?php
//webDav login details if you have set above option true
define('WEBDAV_USER', 'xxxxxxx@inbox.ru');
define('WEBDAV_PASSWORD', 'xxxxxxxxxxxxx');

//Add forward slash at the end or you will break things
define('WEBDAV_BASE_URL', 'https://webdav.cloud.mail.ru');

//Create directory on Mail.ru cloud
$localfolder = new WebDAV(WEBDAV_BASE_URL,WEBDAV_USER,WEBDAV_PASSWORD);
$path="/your-folder-name";
$localfolder->createFolder($path);
?>
