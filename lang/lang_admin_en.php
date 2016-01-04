<?php
// Ooodle

$lll["oodle"]="Process OODLE Ads";
$lll["oodleDescription"]="After entering all your settings, click this to manually process your OODLE Ads.";
$lll["oodleProperties"]="OODLE Settings";
$lll["enableOodle"] = "Enable OODLE Processing";
$lll["customfield_oodleField"]="OODLE Field";
$lll["itemfield_oodleField"]="OODLE Field";

$lll["oodleSerial"]="OODLE Serial Number";
$lll["oodleSerial_expl"]="An OODLE Serial number will be given to you upon signing up for an account. Please Contact Noah's Classifieds for details.";
$lll["oodleSerial_invalid"]="Invalid OODLE Serial Number.";
$lll["settings_oodleProperties"] = $lll["oodleProperties"];
$lll["settings_enableOodle"] = $lll["enableOodle"];
$lll["settings_enableOodle_expl"] = "Check this box to enable the processing of OODLE ads.";
$lll["settings_oodleLocation"] = "OODLE National Region";
$lll["settings_oodleLocation_expl"] = "Choose the National Region that the OODLE ads will be uploaded or downloaded from.";

$lll["category_oodleRegion"] = "Region";
$lll["category_oodleRegion_expl"] = "Choose the Region that the OODLE ads will be uploaded or downloaded from.";
$lll["category_oodleCategory"] = "Category";
$lll["category_oodleCategory_expl"] = "Choose the Category that the OODLE ads will be uploaded or downloaded from.";
$lll["category_oodleLocation"] = "Location";
$lll["category_oodleLocation_expl"] = "Optional.  Limits results to a specific location.  Free-form text for a location causes a search through our location database.  Value can be in any of the following formats:
<ul> 
<li>zip code / postal code (e.g. 90210)</li> 
<li>city, state (e.g. Palo Alto, CA)</li> 
<li>city name only (e.g. Chicago)</li> 
<li>Oodle city code (e.g. usa:ca:paloalto)</li> 
<li>lat/lon centerpoint (e.g. 41.9,-87.6)</li> 
<li>lat/lon box (e.g. 33.9,-118.4,36.1,-115.2) - SW Lat, SW Lon, NE Lat, NE Lon</li> 
</ul>";
$lll["category_oodleRadius"] = "Radius";
$lll["category_oodleRadius_expl"] = "Optional. Distance (in miles) from the specified location for which results should be returned. Default is 30. Setting a radius of 0 will result in listings being returned ONLY from your specific location.";

$lll["category_oodleSearch"] = "Search";
$lll["category_oodleSearch_expl"] = "Optional.  The query, or list of keywords, that must be present.  A limited amount of stemming is applied.  Additionally:
<ul> 
<li>The '+' modifier is accepted, but ignored.</li> 
<li>The '-' or 'NOT' operator is used to require that the modified keyword does not appear.</li> 
<li>The 'OR' operator allows a logical OR between keywords.</li> 
<li>Parantheses can be used for grouping terms.</li> 
<li>The double-quote character can be used for phrase matching.</li> 
</ul>";

$lll["category_oodleNum"] = "Number";
$lll["category_oodleNum_expl"] = "Optional. Declares the number of ads to download. Default is 10. Depending on your licnese agreement with NOAH you may be limited to 10 or 50 ads.";

$lll["settings_oodleLocation_canada"] = "Canada";
$lll["settings_oodleLocation_uk"] = "United Kingdom";
$lll["settings_oodleLocation_usa"] = "United States";
$lll["settings_oodleLocation_india"] = "India";
$lll["settings_oodleLocation_ireland"] = "Ireland";

// Installation:
$lll["mysql_found"]="Success! MySQL has been found.";
$lll["need_pw"]="MySQL requires the password for user %s.";
$lll["incorr_pw"]="The given MySQL password for %s is incorrect, please check it and try again.";
$lll["mysql_not_found"]="Oh no! MySQL not found! Please modify the parameters bellow to satisfy your MySQL configuration!";
$lll["db_installed"]="Database has been installed: %s";
$lll["cantcreatedb"]="Help! NOAH Cannot reach or create your database. User %s has no create database permission, or cannot reach the database. Change the name of the user or give it the appropriate rights!";
$lll["cantconnectdb"]=" Help! NOAH Cannot connect to database. Odds are there no rights or does not exist, trying to create.";
$lll["inst_create_table_err"]="Error while trying to create tables, %s already installed?";
$lll["db_created"]="Success!!! Your Database for NOAH %s has been created.";
$lll["tables_installed"]="The Database tables have been correctly installed.";
$lll["fill_table_err"]="Oh my! An Error occurred while trying to fill tables.";
$lll["tables_filled"]="Your NOAH Database tables has been filled with sample ads data.";
$lll["inst_click"]="Click here to access %s.";
$lll["createTableFailed"]="Ouch! Create table failed";
$lll["install"]="Install";
$lll["clickToInstall"]="Click on 'Install' to install %s!";
$lll["admin_ok"]="Administrator user has been created, username: admin, password: admin.";
$lll["create_file_ok"]="Awesome!!! Config has been successfully created.";
$lll["create_file_nok"]="Ouch! Config file have to be created manually, it happens.";
$lll["inst_params"]="MySQL database will be created with the following parameters:";
$lll["edit_params"]="Edit parameters";
$lll["acceptTerms"] = "I have read through and accept the below terms and conditions: <input type='checkbox' id='accept' name='accept'>";
$lll["youMustAcceptTerms"] = "You must accept the terms and conditions in order to continue!";
$lll["dbHostName"]=$lll["hostName"]="Hostname";
$lll["mysqluser"]="Mysql user name";
$lll["dbDbName"]=$lll["dbName"]="Database name";
$lll["dbSocket"]="Socket";
$lll["formtitle"]="MySQL Settings";
$lll["password"]="Password";
$lll["dbPort"]="Port";
$lll["cookieok"]="Cookies are enabled.";
$lll["cookienok"]="Please Enable cookies and start the install process again!";
$lll["conf_file_write_err"]="Hmmm. The config file cannot be opened for write";
$lll["compare_conf"]="Please Create a file with your favorite text editor named 'app/config.php' in the directory where your source is, and copy the following source code into it! Be sure not to write any new lines after the last line!";
$lll["afterwrconf"]="<u>After</u> writing the config file click the link below!";
$lll["move_inst_file"]="Please remove the install.php file from this directory!";
$lll["inst_ch_pw"]="Administrator settings - username: admin, password: admin, and don't forget to change the password!";
$lll["create_file_nok_ext"]="The server has no permission to create the config file. You have two choices:<br>\n#1: Create an empty file in the application directory with the name app/config.php, and give the server write permission to it. Under unix:<br>touch app/config.php;chmod 777 app/config.php<br>and click on the Reload/Refresh button.<br>#2: You Click on install and create the config file manually with your favorite text editor.<br>The program will show the text you should write into the file app/config.php.";
$lll["versionTooLow"]="Required minimum MySql version is %s. The current one is %s. Required minimum Php version is %s. The current one is %s.";
// register:
$lll["registerNoah"]="Register";
$lll["notRegistered"]="Not registered"; 
$lll["registerNoahTitle"]="Register Noah's Classifieds"; 
$lll["noahAlreadyRegistered"]="Your NOAH is already registered!";
$lll["noahRegistrationFalseResponse"]="Unable to send registration data to the Noah's server. Please, try again later!"; 
$lll["noahRegistrationSuccessfull"]="Thank you. Your NOAH is now registered!";
// update:
$lll["download"]="Download";
$lll["u_maintitle"]="Noah's Classifieds update process";
$lll["secure_copy"]="It is recommended to make a databse dump of your Noah's Classifieds before the update!";
$lll["ready_to_update"]="Ready to update data base %s to version %s?<br>";
$lll["invalid_version"]="hmm...The given version is invalid: %s";
$lll["updateSuccessful"]="The NOAH update successfully completed.";
$lll["updating"]="Updating from version %s to version %s...";
$lll["already_installed"]="The latest NOAH software version %s is already installed.";
$lll["picturesDirMustbeWritable"]="The '%s' directory must be writable by the program in order to perform the update! Update failed.";
$lll["updateAutomatic"]="Update";
$lll["updateManualZip"]="Download ZIP";
$lll["updateManualTgz"]="Download TGZ";
$lll["downloadFileNotExists"]="Download file '%s' not exists.";
$lll["updateFailed"]="The Update failed, because NOAH has no permission to create or modify files under the installation directory.";
$lll["currentVersionIs"]="The current NOAH version is: %s";
$lll["latestVersionIs"]="The latest NOAH version is: %s";
$lll["noNeedToUpdate"]="There is no need to update NOAH at this time.";
$lll["checkUpdates"]="Updates"; 
$lll["checkUpdatesDescription"]="Check out if a newer version of Noah's Classifieds has been released. You can even perform the update immediately, or download the update package with a single click!"; 
$lll["checkUpdatesTitle"]="Checking the Noah's Classifieds site for available updates"; 
$lll["nopermission"]="The NOAH program has no write permission under the following directories: %s<br>You must execute the following Unix command (in Unix systems, of course):<br><i>chmod 777 &lt;replace directory name&gt;</i>";
$lll["nopermission_expl"]="During it's operation, Noah's Classifieds has to save files in a few subdirectories, in order to upload pictures, log errors or create create cache files. You have to make sure the program has enough permission to do this.)";
$lll["nopermission_read"]="The program has no read permission under the following directories: %s<br>You must execute the following Unix command (in Unix systems, of course):<br><i>chmod 777 &lt;replace directory name&gt;</i>";
$lll["nopermission_read_expl"]="During it's operation, Noah's must read the content of these directories. You have to make sure the NOAH program has enough permission to do this.)";
$lll["backToIndex"]="Return to the classifieds.";
$lll["onlyFrom1.3"]="You have a version that is older than 1.3. This update script works only with the 1.3 version!";
$lll["cantGetVersionInfo"]="Couldn't get version information. Update failed.";
// checking configuration:
$lll["checkMailtestTitle"]="NOAH is sending out a test mail...";
$lll["triggerMailTest"]="Click here to test mail sending."; 
$lll["unableToConnectNoah"]="Unable to connect to the Noah's server. Please, try again later!"; 
$lll["itemNumbersRecalculated"]="The item numbers have been successfully recalculated"; 
$lll["dbPrefixExplanation"]="In case NOAH must share the database with tables of other applications, it's wise to specify a table prefix for the NOAH tables, in order to avoid table name collisions. E.g.: 'noah_'";
$lll["dbPrefix"]="Table prefix";
$lll["checkconf"]="Check";
$lll["checkconfDescription"]="Click here at any time to verify if the program has been set up correctly. In case of any problems being detected, the Check page gives useful hints how to solve them.";
$lll["mailok"]="The send mail test has been successfully completed. You will reveive a test email on %s";
$lll["mailerr"]="Ouch! The following error occured during sending out a test mail:<br>%s";
$lll["here1"]="click here";
$lll["confpreerr"]="There are some characters before the &lt;? in the config file! Please delete these characters (newlines and spaces too)!";
$lll["confposterr"]="There are some characters after the ?&gt; in the config file! Please delete these characters (newlines and spaces too)!";
$lll["conffileok"]="The config file seems to be ok.";
$lll["congrat"]="Congratulations! You have successfully installed you new Noah's Classifieds!";
$lll["confcheck"]="System configuration checking...";
$lll["confdisapp"]="If you want to begin to work with on your Noah's Classifieds and you want this page to disappear";
$lll["confclicheck"]="You can access this configuration checking page whenever you want if you click on the 'Check' link in the menubar.";
$lll["chadmemail"]="Your current email adress is admin@admin.admin. Please set it correctly clicking on the 'My profile' link on the menubar!";
$lll["chsyspass"]="Your system email address is not yet set. Please set it clicking on the 'Settings' link on the menubar!";
$lll["chsyspass_expl"]="NOAH cannot send out notification emails without the system email address that will populate the 'From' and 'Reply-to' fields of the notification emails.";
$lll["chadmpass"]="The default admin password is not changed yet! Please change it clicking on the 'My profile' link on the menu bar!";
$lll["settings_adminEmail"]="System email";
$lll["settings_adminEmail_expl"]="This will appear as the address in the 'From:' field of emails the program sends. If you leave this blank... NOAH may not be able send out email notifications! Note that you may not use an email address in this field!";
$lll["settings_replytoEmail"]="'Reply to' email";
$lll["settings_replytoEmail_expl"]="This will appear as the address in the 'Reply to:' field of emails the program sends.";
$lll["settings_replytoName"]="'Reply to' name";
$lll["settings_replytoName_expl"]="This will appear as the name in the ''Reply to:' field of email notifications the NOAH program sends out.";
$lll["nogd"]="Warning: your server doesn't have an installed GD library.";
$lll["nogd_expl"]="(This library is responsible in php programs for the image manipulation, so it might be anyway useful if you put it on your server. In our program it is called for creating thumbnail images to the full sized uploaded pictures. Without this support the program cannot generate thumbnail sized pictures, this way the browser have to shrink 'on-the-fly' each big image in each pages where thumbnails can appear. This method works, but it is far from effective (the page have to download every time every big image). )";
$lll["instFileRemove"]="In order to start using the NOAH program, the installation files have to be removed(%s).<br><a href='%s'>Click here to remove them!</a><span class='confexpl'> (If this message doesn't disappear after you clicked, it means the program has no permission to remove these files. In this case, the files need to be manually deleted.)</span>";
$lll["appFileRemoveExpl"]="From version 2.3.0, most of the php files that used to be directly under the installation directory, must reside under the htaccess-protected 'app' sub directory.
                           The installation root directory may only contain 'index.php' and 'initdir.php'.";
$lll["appFileRemove"]="In order to start using the program, you have to remove the following unnecessary php files from the installation root: <span class='confexpl'>%s.</span><br><br><a href='%s'>Click here to remove them!</a><span class='confexpl'> (If this message doesn't disappear after you clicked, it means the program has no permission to remove these files. In this case, you must delete them manually!)</span>";
$lll["backupFileRemoveExpl"]="From security reasons, the backup directories created by the automatic updates have to be deleted. If you still need them, save them somewhere above your web root!";
$lll["backupFileRemove"]="In order to start using the program, you have to remove the following backup directories from the installation root: <span class='confexpl'>%s.</span><br><br><a href='%s'>Click here to remove them!</a><span class='confexpl'> (If this message doesn't disappear after you clicked, it means the program has no permission to remove these files. In this case, you must delete them manually!)</span>";
$lll["systemConfCheck"]="System configuration checking...";
$lll["niceURLFeature"]="Nice URL feature:";
$lll["niceURLFeature_1"]="Noah's Classifieds supports using nice URLs. This means for example that the link of an ad details page can look like this:";
$lll["niceURLFeature_2"]="instead of the current solution:";
$lll["niceURLFeature_3"]="Besides that the former one is nicer, it is also said to be more search engine friendly.";
$lll["niceURLFeature_4"]="So that the nice URL feature works the Apache module called %s must be installed. It can't be find out for sure whether it is installed currently (Php is probably installed as a CGI binary).";
$lll["niceURLFeature_5"]="If %s is already installed, you should create a file under the classifieds installation directory called %s and put the following text in it, in order to enable nice URLs:";
$lll["niceURLFeature_6"]="If after doing this, the nice url feature still doesn't work, you should  <a href='http://noahsclassifieds.org/documentation/configuration/rewriterules' target='_blank'>click here to learn more about the possible troubleshooting!</a>";
$lll["niceURLFeature_9"]="So that the nice URL feature works the Apache module called %s must be installed. It's not installed currently.";
$lll["captchaTest"]="CAPTCHA test:";
$lll["captchaTest_1"]="You can use the CAPTCHA feature of the program, if you can see a proper CAPTCHA image below this text. If the image is not displayed, <a href='http://noahsclassifieds.org/documentation/configuration/captcha' target='_blank'>click here to learn more about the possible reasons</a>!<br><br>If the CAPTCHA feature doesn't work on your server, don't try to enable it - especially not in the login form - because it will block you from login as admin!";
$lll["proNotes"]="(Note: if you previously purchased the PRO version, don't worry - your installation hasn't been degraded to the Lite! It's just that we simply got rid of the PRO as a separate package (giving the Lite all the extra features of the PRO) and now, we have two packages: the Lite and the RSS. This is just a simple naming convention.)";
// Product registration:
$lll["reg_companyName"]="Company name";
$lll["reg_firstName"]="First name";
$lll["reg_lastName"]="Last name";
$lll["reg_email"]="Email";
$lll["reg_submit"]="Submit";
// RSS feed:
$lll["rss"]="RSS";
$lll["rssDescription"]="Set up the properties of the RSS feed the program generates.";
$lll["rss_modify_form"]="Modify RSS feed";
$lll["rss_language"]="Language";
$lll["rss_link"]="Link";
$lll["rss_link_expl"]="The URL of the classifeds site - e.g.: http://yoursite.com/classifieds";
$lll["rss_descField"]="Description field";
$lll["rss_descField_expl"]="the index of the variable field that serves as the 'Description' of a given ad in the RSS feed. In the default Classifieds installation, it is the 1st field. If you don't have such field, set ot to '0', and no ad description will be displayed in the feed.";
//globalsettings
$lll["settings"]="settings";
$lll["settings_modify_form"]="Modify settings";
$lll["settings_expNoticeBefore"]="Number of days the user must be informed about the expiration before";
$lll["settings_charLimit"]="Number of characters a post can have";
$lll["settings_charLimit_expl"]="'0' means no limit.";
$lll["settings_blockSize"]="Ads displayed per page";
$lll["settings_maxPicSize"]="Maximum picture size in bytes";
$lll["settings_maxPicWidth"]="Maximum picture width in pixels";
$lll["settings_maxPicHeight"]="Maximum picture height in pixels";
$lll["settings_maxPicSize_expl"]=$lll["settings_maxPicWidth_expl"]=$lll["settings_maxPicHeight_expl"]="'0' means unlimited.";
$lll["settings_downsizeWidth"]="Downsize width in pixels";
$lll["settings_downsizeWidth_expl"]="The uploaded pictures will be automatically downsized to this width. If you enter 0 both as the 'Downsize width' and 'Downsize height', the images will be stored in their original size. If you give a non-null value to only one of the dimensions, the other one will be proportionally calculated.";
$lll["settings_downsizeHeight"]="Downsize height in pixels";
$lll["settings_downsizeHeight_expl"]="The uploaded pictures will be automatically downsized to this height";
$lll["settings_adminFromName"]="System name";
$lll["settings_adminFromName_expl"]="This will appear as the name in the 'From:' field of email notifications the program sends out.";
$lll["settings_versionFooter"]="Version footer";
$lll["settings_titlePrefix"]="Title prefix"; 
$lll["settings_dateFormat"]="Date format"; 
$lll["settings_timeFormat"]="Time format"; 
$lll["settings_dateFormat_expl"]="For more information and examples on the available date specifiers, <a href='http://php.net/manual/en/function.date.php' target='_blank'>click here</a>"; 
$lll["settings_enableFavorities"]="Enable the 'Add to favorities' feature for"; 
$lll["settings_updateCheckInterval"]="Check for Noah's updates periodically"; 
$lll["settings_updateCheckInterval_expl"]="The program can check for updates automatically and when a new release is available, it 
                                              displays the update page for the administrator. This setting specifies the length of the checking period in days.
                                              If you want to disable the feature, set it to 0!"; 
$lll["mailProperties"]="Mail sending properties"; 
$lll["themeProperties"]="Theme support"; 
$lll["settings_defaultTheme"]="Default theme"; 
$lll["settings_allowedThemes"]="Allowed themes to select from"; 
$lll["settings_allowedThemes_expl"]="If you create a new subdirectory under 'themes' for your custom theme - e.g. 'my_new_theme', it will automatically appear in this list as a new item 'My new theme'!"; 
$lll["settings_allowSelectTheme"]="Allow others to change theme"; 
$lll["settings_allowSelectTheme_expl"]="If this is enabled, a selection drop down will be displayed on the pages that allows the immediate change of the program theme."; 
$lll["languageProperties"]="Language support"; 
$lll["settings_defaultLanguage"]="Default language"; 
$lll["settings_allowedLanguages"]="Allowed languages to select from"; 
$lll["settings_allowSelectLanguage"]="Allow others to change language"; 
$lll["settings_allowSelectLanguage_expl"]="If this is enabled, a selection drop down will be displayed on the pages that allows the immediate change of the program language."; 
$lll["settings_smtpServer"]="SMTP server name"; 
$lll["settings_smtpServer_expl"]="Use these fields if you want that the program sends out the notification emails through an SMTP server. Otherwise, the native Php mail function will be used."; 
$lll["settings_smtpUser"]="SMTP user name"; 
$lll["settings_smtpPass"]="SMTP password"; 
$lll["settings_smtpPort"]="SMTP port"; 
$lll["settings_smtpPort_expl"]="Set the remote port number to connect to. Leave it blank to apply the default port."; 
$lll["settings_smtpSecure"]="Use secure connection"; 
$lll["settings_smtpSecure_expl"]="Set the encryption level to use on the connection.<br><br>Note: PHP needs to have been compiled with OpenSSL for SSL and TLS to work.<br><br>Note: Some PHP installations will not have the TLS stream wrapper."; 
$lll["settings_smtpSecure_".SWIFT_SMTP_ENC_OFF]="No"; 
$lll["settings_smtpSecure_".SWIFT_SMTP_ENC_TLS]="TLS"; 
$lll["settings_smtpSecure_".SWIFT_SMTP_ENC_SSL]="SSL"; 
$lll["settings_swiftLog"]="SwiftMailer logging level"; 
$lll["settings_swiftLog_expl"]="If you're running into problems you may consider enabling the logging of SwiftMailer, so you can find out what's going on. The log messages will be written into 'logs/swift_log.txt'. Once you configured the notification sending properly, it is recommended to turn off logging."; 
$lll["settings_swiftLog_".SWIFT_LOG_NOTHING]="Off"; 
$lll["settings_swiftLog_".SWIFT_LOG_ERRORS]="Errors only"; 
$lll["settings_swiftLog_".SWIFT_LOG_FAILURES]="Failed deliveries"; 
$lll["settings_swiftLog_".SWIFT_LOG_NETWORK]="Network commands"; 
$lll["settings_swiftLog_".SWIFT_LOG_EVERYTHING]="Everything"; 
$lll["settings_fallBackNative"]="Fall back on native mail if SMTP fails"; 
$lll["settings_titlePrefix_expl"]="This text will preceed any title in the title bar of the browser. E.g.: you can set it to the name of your site."; 
$lll["seoProperties"]="Search engine optimization"; 
$lll["settings_mainTitle"]="Title tag"; 
$lll["settings_mainTitle_expl"]="The content of the TITLE, DESCRIPTION and KEYWORDS usually depends on which category list or 
                                 which ad details page is currently displayed - i.e. you can define this per category and the users 
                                 may define it per ad. These three fields, however, serve as the defaults for those cases when a page 
                                 is just not in a category or ad context (e.g. the start page itself)"; 
$lll["settings_mainDescription"]="Description meta tag"; 
$lll["settings_mainKeywords"]="Keywords meta tag"; 
$lll["settings_helpLink"]="'Help' link destination";
$lll["settings_helpLink_expl"]="The full URL of the help file. With this, you can define your own Help page. E.g.: http://yoursite/classifieds_dir/customhelp.html";
$lll["settings_maxMediaSize"]="Maximum uploadable media file size in bytes";
$lll["settings_maxMediaSize_expl"]="'0' means unlimited.<br><br>Note, however, that whatever you set here, there are two Php settings that can limit the maximum uploadable file size. They are 'upload_max_filesize' and 'post_max_size'. They can be set either in the 'php.ini' file, or in the 'httpd.conf', or in the '.htaccess' file per directory. Their default is usually 2MB. You can increase their values to say 50MB in the .htaccess file this way:<br><br>php_value upload_max_filesize \"50M\"<br>php_value post_max_size \"50M\" ";
$lll["settings_subscriptionType"]="Enable auto notify for";
$lll["settings_subscriptionType_expl"]="Users can subscribe for getting automatic notifications if new ads are submitted in a category.";
$lll["settings_menuPoints_expl"]="If 'Submit ad' is unchecked, the menu point will only be visible for admin (only admin can submit ads than). You can also disable or reorganize menu points by simply removing or moving their corresponding section in the 'layout.tpl.php' template file!";
$lll["settings_menuPoints"]="Menu points";
$lll["settings_menuPoints_".Settings_showLogout]="Logout";
$lll["settings_menuPoints_".Settings_showLogin]="Login";
$lll["settings_menuPoints_".Settings_showRegister]=$lll["registerNoah"];
$lll["settings_menuPoints_".Settings_showMyProfile]="Show My profile";
$lll["settings_menuPoints_".Settings_showMyAds]="My ads";
$lll["settings_menuPoints_".Settings_showSubmitAd]="Submit ad";
$lll["settings_menuPoints_".Settings_showSearch]="Search";
$lll["settings_menuPoints_".Settings_showHome]="Home";
$lll["settings_menuPoints_".Settings_displayHelp]="Help";
$lll["settings_logoImage"]="Upload new logo image";
$lll["settings_logoImage_expl"]="This can only work if the program has write access to the 'layout.tpl.php' file and the 'images' directory of the current theme!<br><br>
(note: the original logo image is 272x56 pixels)<br><br>This feature is not available in the Lite version of the program!";
$lll["settings_headerBackground"]="Upload new header background image";
$lll["settings_headerBackground_expl"]="This can only work if the program has write access to the 'layout.css' file and the 'images' directory of the current theme!<br><br>
After you changed the background image, you may have to click a Shift-Refresh to clear your browser cache, in order to see the change!<br><br>
(note: the original header background image is 833x108 pixels)<br><br>This feature is not available in the Lite version of the program!";
$lll["noPermissionDir"]="The program has probably no write permission to the following directory: %s. The image couldn't be uploaded.";
$lll["noPermissionFile"]="The program has probably no write permission to the following file: %s";
$lll["menuPointsSep"]="Layout customization";
$lll["expirationProperties"]="Expiration properties";
$lll["imageProperties"]="Image upload limitations";
$lll["otherProperties"]="Other settings";
$lll["adDisplayProperties"]="Ad display settings";
$lll["settings_renewal"]="Number of times the user is allowed to prolong his/her expired ads";
$lll["settings_allowModify"]="User is allowed to modify his/her own ads";
$lll["settings_extraHead"]="Additional HEAD content";
$lll["settings_extraHead_expl"]="With this, you can insert custom HTML right before the closing HEAD tag of the pages. This is usually a good place to insert additional style sheets, or JavaScript.<br><br>This feature is not available in the Lite version of the program!";
$lll["settings_extraBody"]="Additional BODY content";
$lll["settings_extraBody_expl"]="With this, you can insert custom HTML right after the opening BODY tag of the pages. E.g. you can insert a banner above all the pages here.<br><br>This feature is not available in the Lite version of the program!";
$lll["settings_extraTopContent"]="Additional top content";
$lll["settings_extraTopContent_expl"]="With this, you can insert custom HTML below the header section of the pages (status bar, menus).<br><br>This feature is not available in the Lite version of the program!";
$lll["settings_extraBottomContent"]="Additional bottom content";
$lll["settings_extraBottomContent_expl"]="With this, you can insert custom HTML above the powered footer of the pages.<br><br>This feature is not available in the Lite version of the program!";
$lll["settings_extraFooter"]="Additional footer content";
$lll["settings_extraFooter_expl"]="With this, you can insert custom HTML right before the closing BODY tag of the pages.<br><br>This feature is not available in the Lite version of the program!";
$lll["securityProperties"]="Security settings";
$lll["settings_captchaType"]="Select the CAPTCHA model to use";
$lll["settings_captchaType_".captcha_default]="NOAH CAPTCHA";
$lll["settings_captchaType_".captcha_recaptcha]="reCAPTCHA (<a href='http://recaptcha.net' target='_blank'>more info</a>)";
$lll["settings_recaptchaPublicKey"]="reCaptcha Public Key";
$lll["settings_recaptchaPublicKey_expl"]="Don't have a reCaptcha Key? <a href='http://recaptcha.net' target='_blank'>More information: http://recaptcha.net</a>";
$lll["settings_recaptchaPrivateKey"]="reCaptcha Private Key";
$lll["settings_recaptchaPrivateKey_expl"]="Don't have a reCaptcha Key? <a href='http://recaptcha.net' target='_blank'>More information: http://recaptcha.net</a>";

$lll["settings_applyCaptcha"]="Apply Spam protection (CAPTCHA) in the following forms";
$lll["settings_applyCaptcha_".Settings_response]="'Flag this posting','Reply to this posting' and 'Email this to a friend'";
$lll["settings_applyCaptcha_".Settings_login]="Login form";
$lll["settings_applyCaptcha_".Settings_register]="Register form";
$lll["settings_applyCaptcha_".Settings_submitAd]="Ad submission";
$lll["settings_joomlaLink"]="Joomla/Wordpress site";
$lll["settings_joomlaLink_expl"]="If you have installed the Joomla or Wordpress bridge, you can enter the URL of your main Joomla/Wordpress site here. If you do that, the login menu will contain a 'Main site' menu point that links to the URL.";
$lll["settings_loginLink"]="Show this as Login page";
$lll["settings_loginLink_expl"]="If you have installed the Joomla or Wordpress bridge, you can enter the URL of the Joomla/Wordpress Login page here.";
$lll["settings_registrationLink"]="Show this as Registration Page";
$lll["settings_registrationLink_expl"]="If you have installed the Joomla or Wordpress bridge, you can enter the URL of the Joomla/Wordpress Registration page here.";
$lll["enableUserSearch"]="Enable user search";
$lll["appsettings_modify_completed"]="The settings have been successfully modified";
$lll["settings_langDir"]="Language direction";
$lll["settings_langDir_expl"]="If you enable more languages - some with left to right direction and some with right to left, you should rather specify the direction in the lang file itself! E.g. if you have an Arabian language file, you can put a line like this in it, in order to override this setting in case of the Arabian language:<br><br>\$langDir='rtl';<br><br>Use 'rtl' for 'right to left' and 'ltr' for 'left to right'!";
$lll["settings_langDir_ltr"]="Left to right";
$lll["settings_langDir_rtl"]="Right to left";
$lll["settings_ecommerceEnabled"]="E-commerce enabled";
$lll["settings_ecommerceEnabled_".Settings_ecommDisabled]="Disabled";
$lll["settings_ecommerceEnabled_".Settings_ecommEnabled]="Enabled";
$lll["settings_ecommerceEnabled_".Settings_ecommTestMode]="Test mode";
$lll["settings_ecommerceEnabled_expl"]="You can hide every E-commerce related features if you disable it here. This is useful if your site is a free classifieds, but you still want to use all the non E-commerce related advantages of the top of the Noah's product line!<br><br>'Test mode' means, that you can configure all the E-commerce related features as admin just like in the Enabled mode, but the normal users will not see anything from this. You can log in, however, as special user called 'ecommtest' (pwd: a) if you want to test how the E-commerce will affect your users!";
$lll["settings_cascadingCategorySelect"]="Enable cascading category selection";
$lll["settings_cascadingCategorySelect_expl"]="If you have many categories and/or an especially deep category hierarchy, than the category drop-down lists in the ad submission form and in the search form can be very long and uncomfortable to use.<br><br>
If you enable this property, the category selection lists will always only contain categories from one level and if you select one, a further selection list appears with the sub-categories of the selected main category. And it can go this way right down to \"leaf\" element of the category tree.<br><br>This feature is not available in the Lite version of the program!";
$lll["settings_enablePermalinks"]="Enable permalinks";
$lll["settings_enablePermalinks_expl"]="Display the category names and/or the ad titles in the URL.<br><br>This feature is not available in the Lite version of the program!";
$lll["settings_ommitCatPermaLink"]="Ommit category names in the URLs of ad details pages";
$lll["settings_customAdListTemplate"]="Custom ad list template";
$lll["settings_customAdListTemplate_expl"]="Per default, all lists in Noah's use the 'default_list.tpl.php' template to display their content. With this, you can override the default template file and assign a custom list template to the ad lists. You can place your custom template file either under 'themes/<theme name>/templates' or 'themes/common_templates'.<br><br>Try this as an alternative ad list template: ad_list_pictures_left.tpl.php";
$lll["settings_templateDebug"]="Template debug mode";
$lll["settings_templateDebug_expl"]="If enabled, the template variables that can be used on a page will be all displayed in a popup window.";
$lll["settings_deleteAdsOnExpiry"]="Delete ads on expiry";
$lll["settings_deleteAdsOnExpiry_expl"]="If you uncheck this, the expired ads will not be deleted - only set to Inactive.";
$lll["linksAndDefaultPages"]="Pages and link locations";
$lll["settings_homeLocation"]="Show this as the Home page";
$lll["settings_homeLocation_expl"]="If it's not the list of the main categories that you want to display as the Home page of Noah's, you can enter here an other page location. Examples: <br><br>
To display the ad listing of Category 1 on the Home, enter this: list/1<br><br>
To display the Recent ad listing on the Home, enter this: customlist/3<br><br>
Note: you can still access the page of the list of main categories using a direct link - say: http://yoursite.com/path_to_noah/list/0";
$lll["settings_redirectFirstLogin"]="Redirect after first login";
$lll["settings_redirectFirstLogin_expl"]="The page users will be redirected after their first login.<br><br>
E.g. if you have a terms page you access this way http://yoursite.com/terms, than just enter 'terms' here and that page will be the first one your users will read after their first login!";
$lll["settings_redirectLogin"]="Redirect after login";
$lll["settings_redirectLogin_expl"]="The page users will be redirected after every subsequent logins.<br><br>
E.g. enter 'user/modify_form' to redirect them to their profile form after every login!";
$lll["settings_redirectAdminLogin"]="Redirect after admin login";
$lll["settings_redirectAdminLogin_expl"]="The page admin will be redirected after login.<br><br>
E.g. enter 'control_panel' for a quick access of the control panel right after you log in as admin!";
$lll["settings_enableCombine"]="Combine CSS and JavaScript files";
$lll["settings_enableCombine_expl"]="Combined files are a way to reduce the number of HTTP requests by combining all scripts into a single script, and similarly combining all CSS into a single stylesheet.
This is a key to faster pages.<br><br>
You should only disable this during the design customization of your site. You will much easier figure out which CSS declaration to change in which CSS file if the files are separate and uncompressed.<br><br>
Note, however, that there might be servers where combining doesn't work properly: if your server has been set up to put some content (typically, ads of the hosting service) automatically on the top of the pages that are served by Php, it can mess up the combined CSS and JavaScript.";
// Custom Fields
$lll["customfield"]="Custom field";
$lll["customfield_fixInfoText"]="This is a \"fix\" field which means that you can't delete it and you can only change some of its properties.";
$lll["customfield_addToSubcats"]="Add this field to all the sub categories, too";
$lll["customfield_addToSubcats_expl"]="This will add a Unique field with the same name to every sub categories of this category (if it has some). If a sub category has a field with this name already, it will be skipped.";
$lll["mustBeCommaSeparated"]="The possible values of the selection type fields must be defined as comma separated strings";
$lll["invalidDefaultValue"]="The default value of a selection type field must be one of the comma separated strings listed in the possible values field.";
$lll["descriptionDefaultLabel"]=$lll["description"]="Description";
$lll["privateField"]="Private";
$lll["customfield_type"."_".customfield_text]="Text";
$lll["customfield_type"."_".customfield_textarea]="Textarea";
$lll["customfield_type"."_".customfield_bool]="Boolean";
$lll["customfield_type"."_".customfield_selection]="Selection";
$lll["customfield_type"."_".customfield_multipleselection]="Multiple selection";
$lll["customfield_type"."_".customfield_separator]="Separator";
$lll["customfield_type"."_".customfield_checkbox]="Checkbox";
$lll["customfield_type"."_".customfield_picture]="Picture";
$lll["customfield_type"."_".customfield_media]="Media file";
$lll["customfield_type"."_".customfield_url]="Web link";
$lll["customfield_type"."_".customfield_date]="Date";
$lll["customfield_dateDefaultNow"]="Default date is the current day";
$lll["customfield_fromyear"]="From year";
$lll["customfield_fromyear_expl"]="The range of the date selector that populates this field will go from this year. 
                                   You can enter an actual year number like '1971', or you can enter 'now' that stands for the current year.
                                   You can also use a relative year: 'now-5' will mean the range will start from 5 years ago!";
$lll["customfield_toyear"]="To year";
$lll["customfield_toyear_expl"]="The range of the date selector that populates this field will go up to this year.
                                   You can enter an actual year number like '2010', or you can enter 'now' that stands for the current year.
                                   You can also use a relative year: 'now+5' will mean the range will end in 5 years from now!";
$lll["customfield_name"]="Name";
$lll["selectUserField"]="-- Select user field --";
$lll["customfield_userField"]="or select one of the user fields";
$lll["customfield_userField_expl"]="Instead of creating a completely new custom field by entering a Name for it above, you have the option to select one of the user fields for display. This way, the fields of the owner of an ad can be displayed directly in either the ad list or on the ad details page. <br><br>E.g. you can add the phone number of the owner of the ad to the ad details page. Or if you have a custom 'Zip code' user field, you can display it, too. Moreover, if you specify the Zip code as 'Searchable', users will be able to search for ads by zip code!";
$lll["userField"]="User field";
$lll["customfield_type"]="Type";
$lll["customfield_default_bool"]=
$lll["customfield_default_text"]=
$lll["customfield_default_textarea"]=
$lll["customfield_default_multiple"]="Default value";
$lll["customfield_active"]="Active";
$lll["customfield_separator"]="Column %s";
$lll["customfield_mandatory"]="Mandatory";
$lll["customfield_checkboxCols"]="Number of columns to display the checkboxes in";
$lll["customfield_showInList"]="Show in lists for";
$lll["customfield_values"]="Possible values";
$lll["customfield_values_expl"]="Use this tool to add, remove or modify the possible values! You can also change their order by drag-and-drop. Set the default value(s) using the checkboxes!";
$lll["customfield_innewline"]="Place in new line";
$lll["customfield_fieldExpirationDays"]="Field expiration";
$lll["customfield_fieldExpirationDays_expl"]="The number of days after which this field will \"expire\". Expiration means in this case that after this many days from the creation date of the ad, the value of this field will be automatically switched to the opposite one.<br><br>A typical use case can be a 'Just listed' field. You add a 'Just listed' custom field with 'Default'=checked. This way all the ads one creates will have a 'Just listed'=yes field. It is advisable to hide this field from the forms, so that the user can't manipulate it himself. If you add a 'Field expiration' to this custom field - say 7 days, it means that that after 7 days, the 'Just listed' field will be automatically flipped to 'no' by the program. You can disable this feature by entering '0'!";
$lll["customfield_customListPlacement"]="Custom placement in lists";
$lll["customfield_customListPlacement_expl"]="This property makes the list template customization more flexible. If you enable, the value of this field will be passed over to the list template, but unlike the other fields, it will not populate the 'cells', 'cellAttrs' and 'cellSpans' template variables. This makes it possible that you display the value of this field in the list in a custom way while leaving the placement of the other fields unaffected.<br><br>
The value of the field can be retrieved by name if you enable this property from the 'cellsByNames' template variable: e.g. \$this->cellsByNames[5]['Picture']";
$lll["customfield_customDetailsPlacement"]="Custom placement on the details page";
$lll["customfield_customDetailsPlacement_expl"]="This property makes the details template customization more flexible. If you enable, the value of this field will be passed over to the details template, but unlike the other fields, it will not populate the 'rows' template variables. This makes it possible that you display the value of this field on the details page in a custom way while leaving the placement of the other fields unaffected.<br><br>
The value of the field can be retrieved by name if you enable this property:e.g. \$this->['Picture']";
$lll["customfield_displayLabel"]="Display label";
$lll["customfield_displayLabel_expl"]="If checked off, the field label will not be displayed on the ad details page and the field value will span over the labels of the other fields.";
$lll["userfield_displayLabel_expl"]="If checked off, the field label will not be displayed on the user details page and the field value will span over the labels of the other fields.";
$lll["customfield_displaylength"]="List display length";
$lll["customfield_displaylength"."_expl"]="The maximum number of characters that are displayed on the ads list page. The appearance of the list view can be protected against displaying very long fields in a cell.";
$lll["userfield_displaylength"."_expl"]="The maximum number of characters that are displayed on the user list page. The appearance of the list view can be protected against displaying very long fields in a cell.";
$lll["customfield_searchable"]="Show in the search form for";
$lll["customfield_rangeSearch"]="Allow range search";
$lll["customfield_rangeSearch_expl"]="If this is checked than one can define e.g. '10-20' as a search condition to search for ads where the value of this field is between 10 and 20. Or one can enter a range of dates in case of Date fields.";
$lll["userfield_rangeSearch_expl"]="If this is checked than one can define e.g. '10-20' as a search condition to search for user where the value of this field is between 10 and 20.";
$lll["customfield_allowHtml"]="Allow HTML";
$lll["customfield_allowHtml_expl"]="This only allows 'safe' HTML tags, however! Some tags that would impose a security risk, or ruin the layout are excluded.<br><br>If you don't allow HTML, some simple rules will be still applied: line breaks in the text will be rendered as new lines, web links and email addresses will turn into clickable links.";
$lll["customfield_private"]="Allow to keep private";
$lll["customfield_subType"]="Treat this field as";
$lll["customfield_subType_expl"]="E.g. if you have a 'Price' field, it is wise to set it as a 'Float number', so that the sorting by the Price column and range search by the price field can properly work. You can then enter the necessary currency symbol prefix, precision and thousands separator settings under the 'Display formatting' section.";
$lll["userfield_subType_expl"]="";
$lll["customfield_subType_".customfield_alnum]="Text";
$lll["customfield_subType_".customfield_integer]="Integer number";
$lll["customfield_subType_".customfield_float]="Float number";
$lll["customfield_sortable"]="Allow sorting by this field";
$lll["customfield_expl"]="Explanation text";
$lll["customfield_expl"."_expl"]="Help text like the one you are just reading! A more detailed description of a form field.";
$lll["private_field"]="(private)";
$lll["itemfield_ttitle"]="Custom fields of category '%s'";
$lll["itemfield_ttitle_simple"]="Custom fields";
$lll["itemfield_ttitle_global"]="Common custom fields";
$lll["itemfield_ttitle_globalDescription"]="Configure the fields that appear in the non category specific lists.";
$lll["customfield_newitem"]="Add new custom field";
$lll["customfield_modify_form"]="Modify custom field";
$lll["customfield_create_form"]="Create custom field";
$lll["customfield_sortId"]="Sort";
$lll["customfield_sorthelp"]="Use the arrow icons in the 'Sort' column to re-arrange the list, then click on the 'Save sorting' button at the bottom!";
$lll["customfield_savesorting"]="Save sorting";
$lll["customfield_advanced_form"]="Advanced operations";
$lll["customfield_sortingsaved"]="The new custom field sorting has been successfully saved.";
$lll["customFields"]="List of custom fields";
$lll["customfield_rowspan"]="Spans rows";
$lll["customfield_seo"]=$lll["seoProperties"];
$lll["customfield_seo_0"]="No assignment";
$lll["customfield_seo_".customfield_title]="Use this field as the TITLE of the details page";
$lll["customfield_seo_".customfield_description]="Use this field as the DESCRIPTION of the details page";
$lll["customfield_seo_".customfield_keywords]="Use this field as the KEYWORDS of the details page";
$lll["customfield_mainPicture"]="Use this field as the main picture";
$lll["customfield_mainPicture_expl"]="To use this picture in non category specific lists and RSS feeds.";
$lll["userfield_mainPicture_expl"]=" ";
$lll["customfield_seo_expl"]="You can specify here which custom field of the item will serve as the content of the HTML TITLE tag, DESCRIPTION tag and KEYWORDS tag, respectively. 
                              Besides SEO, the content of the TITLE fields will appear in the title bar of the browser when one 
                              displays the ad, it will be used as the title of the ad in non category specific ad lists and in RSS feeds.";
$lll["userfield_seo_expl"]="You can specify here which custom field of the user will serve as the content of the HTML TITLE tag, DESCRIPTION tag and KEYWORDS tag, respectively."; 
$lll["customfield_innewline_expl"]="Instead of forming a new column, this setting makes the custom field value appear in a new line that spans over all the other columns horizontally and is placed below them.";
$lll["customfield_rowspan_expl"]="Use this in conjunction with the 'Place in new line' property of other custom fields. If there are other fields which has been placed in a new line, you can specify with this setting that this field spans over those new lines vertically.";
$lll["customfield_detailsPosition"]="Position";
$lll["customfield_detailsPosition_expl"]="The placement of the fields on the ad details page. The 'sidebar' is the right area of the details panel where the pictures reside (in the modern theme). You can place fields above the pictures area, or below them with this setting.";
$lll["userfield_detailsPosition_expl"]="The placement of the fields on the user details page. The 'sidebar' is the right area of the details panel where the pictures reside (in the modern theme). You can place fields above the pictures area, or below them with this setting.";
$lll["customfield_detailsPosition_".customfield_normal]="Normal";
$lll["customfield_detailsPosition_".customfield_topright]="Top of the sidebar";
$lll["customfield_detailsPosition_".customfield_bottomright]="Bottom of the sidebar";
$lll["formProperties"]="Form settings";
$lll["listProperties"]="List settings";
$lll["detailsProperties"]="Details page settings";
$lll["searchProperties"]="Search settings";
$lll["miscProperties"]="Miscellaneous settings";
$lll["customfield_showInForm"]="Show in forms for";
$lll["userfield_showInForm_expl"]="Note that in case of fix user fields, this setting has a limited meaning only! E.g. if you set the 'Name' field to be displayed for admin only, it only refers to the user modify form (i.e. you can't hide the 'Name' field from the registration and the login forms). Similarly, you can't hide the 'Email' field from the registration form.";
$lll["customfield_showInDetails"]="Displayed for";
$lll["settings_displayFlaggedLink_".customfield_forNone]=$lll["displayFlaggedLink_".customfield_forNone]=$lll["settings_displayFriendmailLink_".customfield_forNone]=$lll["settings_displayResponseLink_".customfield_forNone]=$lll["displayFriendmailLink_".customfield_forNone]=$lll["displayResponseLink_".customfield_forNone]=$lll["searchable_".customfield_forNone]                 =$lll["enableUserSearch_".customfield_forNone]=$lll["showInForm_".customfield_forNone]=$lll["showInList_".customfield_forNone]=$lll["showInDetails_".customfield_forNone]=$lll["enableFavorities_".customfield_forNone]=$lll["subscriptionType_".customfield_forNone]="none";
$lll["settings_displayFlaggedLink_".customfield_forAll]=$lll["displayFlaggedLink_".customfield_forAll]=$lll["settings_displayFriendmailLink_".customfield_forAll]=$lll["settings_displayResponseLink_".customfield_forAll]=$lll["displayFriendmailLink_".customfield_forAll]=$lll["displayResponseLink_".customfield_forAll]=$lll["customlist_displayedFor_".customfield_forAll]     =$lll["searchable_".customfield_forAll]=$lll["enableUserSearch_".customfield_forAll]=$lll["showInForm_".customfield_forAll]=$lll["showInList_".customfield_forAll]=$lll["showInDetails_".customfield_forAll]=$lll["enableFavorities_".customfield_forAll]=$lll["subscriptionType_".customfield_forAll]="all";
$lll["settings_displayFlaggedLink_".customfield_forLoggedin]=$lll["displayFlaggedLink_".customfield_forLoggedin]=$lll["settings_displayFriendmailLink_".customfield_forLoggedin]=$lll["settings_displayResponseLink_".customfield_forLoggedin]=$lll["displayFriendmailLink_".customfield_forLoggedin]=$lll["displayResponseLink_".customfield_forLoggedin]=$lll["customlist_displayedFor_".customfield_forLoggedin]=$lll["searchable_".customfield_forLoggedin]=$lll["enableUserSearch_".customfield_forLoggedin]=$lll["showInForm_".customfield_forLoggedin]=$lll["showInList_".customfield_forLoggedin]=$lll["showInDetails_".customfield_forLoggedin]=$lll["subscriptionType_".customfield_forLoggedin]=$lll["enableFavorities_".customfield_forLoggedin]="logged in users only";
$lll["settings_displayFlaggedLink_".customfield_forAdmin]=$lll["displayFlaggedLink_".customfield_forAdmin]=$lll["settings_displayFriendmailLink_".customfield_forAdmin]=$lll["settings_displayResponseLink_".customfield_forAdmin]=$lll["displayFriendmailLink_".customfield_forAdmin]=$lll["displayResponseLink_".customfield_forAdmin]=$lll["customlist_displayedFor_".customfield_forAdmin]   =$lll["searchable_".customfield_forAdmin]=$lll["enableUserSearch_".customfield_forAdmin]=$lll["showInForm_".customfield_forAdmin]=$lll["showInList_".customfield_forAdmin]=$lll["showInDetails_".customfield_forAdmin]=$lll["subscriptionType_".customfield_forAdmin]=$lll["enableFavorities_".customfield_forAdmin]="admin only";
$lll["settings_displayFlaggedLink_".customfield_forAllButAdmin]=$lll["displayFlaggedLink_".customfield_forAllButAdmin]=$lll["settings_displayFriendmailLink_".customfield_forAllButAdmin]=$lll["settings_displayResponseLink_".customfield_forAllButAdmin]=$lll["displayFriendmailLink_".customfield_forAllButAdmin]=$lll["displayResponseLink_".customfield_forAllButAdmin]=$lll["enableFavorities_".customfield_forAllButAdmin]    =$lll["subscriptionType_".customfield_forAllButAdmin]="all but admin";
$lll["showInForm_".customfield_forOwner]=$lll["showInList_".customfield_forOwner]=$lll["showInDetails_".customfield_forOwner]="owner of the ad only";
$lll["showInForm_".customfield_forAllInCreateButAdminInModify]="all in the create form, but admin only in the modify form";
$lll["settings_displayFlaggedLink_".customfield_forManager]=$lll["displayFlaggedLink_".customfield_forManager]=$lll["settings_displayFriendmailLink_".customfield_forManager]=$lll["settings_displayResponseLink_".customfield_forManager]=$lll["displayFriendmailLink_".customfield_forManager]=$lll["displayResponseLink_".customfield_forManager]=$lll["customlist_displayedFor_".customfield_forManager]   =$lll["searchable_".customfield_forManager]=$lll["enableUserSearch_".customfield_forManager]=$lll["showInForm_".customfield_forManager]=$lll["showInList_".customfield_forManager]=$lll["showInDetails_".customfield_forManager]=$lll["subscriptionType_".customfield_forManager]=$lll["enableFavorities_".customfield_forManager]="managers (and admin) only";
$lll["showInForm_".customfield_forAllInCreateButManagerInModify]="all in the create form, but managers only in the modify form";
$lll["formatSection"]="Display Formatting";
$lll["customfield_formatPrefix"]="Prefix";
$lll["formatPrefix_expl"]="Typical examples are a currency symbol, or percentage sign. Anything you enter here will preceed the values of this custom field.";
$lll["formatPostfix"]="Postfix";
$lll["formatPostfix_expl"]="E.g. you can add units to the numbers here. Anything you enter here will follow the values of this custom field.";
$lll["precision"]="Precision";
$lll["precision_expl"]="Floating point precision - sets the number of decimal points.";
$lll["precisionSeparator"]="Precision separator";
$lll["precisionSeparator_expl"]="Sets the separator for the decimal point";
$lll["thousandsSeparator"]="Thousands separator";
$lll["format"]="Display format";
$lll["format_expl"]="Advanced users can apply a C-style sprintf format string, too.";
$lll["customfield_useMarkitup"]="Use embedded HTML editor instead of a simple textarea";
$lll["customfield_useMarkitupSimple"]="Use embedded HTML editor simple mode";
$lll["customfield_useMarkitupSimple_expl"]="Use the trimmed down simple theme that so it's much more lightweight in terms of download size and number of features.";

$lll["customfield_isCommon"]="Scope of the field";
$lll["customfield_isCommon_colhead"]="Scope";
$lll["common"]="Common";
$lll["unique"]="Unique";
$lll["customfield_isCommon_expl"]="If you set the scope to common, the field will exist in every categories. E.g.: if you have a web shop, whatever categories you set up, a 'Price' field must probably belong to all of them, so the 'Price' is best to define as a common field. If you create a common field, or change a unique field to common, it will suddenly appear in all categories - not just there where you created it. If you delete a common field, it will dissappear from all the categories at once.<br><br>Even if a field is common, it can be differently set up in different categories. E.g. you can set it to appear on the ad details page in one category, but hide it in an other category. Only the 'Name' and the 'Type' properties have to be really equal in all categories.<br><br>You can even set up your classifieds program so that all the fields are common! In some cases, it can make a good sense: e.g. if you have cars and only cars in every categories, probably all the categories have just the same list of custom fileds. The strength of the common fields will really show up in defining custom ad lists! E.g. the 'Recent ads' list can contain ads from many different categories, but if you have common fields, you need not be restricted to show only the 'Title', 'Description', and 'Category' columns in the list any more - you can choose any common field to be a column in the list!";
$lll["customfield_isCommon_0"]="Unique to this category";
$lll["customfield_isCommon_1"]="Common to all the categories";
$lll["itemfield_create_completed"]=$lll["userfield_create_completed"]="The custom field has been successfully created.";
$lll["itemfield_columnIndex"]="Column index";
$lll["propagateLabel"]="Propagate the current value of this property into all the other fields with the same name!";
$lll["propagateConfirmationText"]="Click 'Ok' to propagate the current value of this property into all the other custom fields that have the same Name and Type in all the other categories!";
$lll["propagateLabel_subcat"]="Propagate the current value of this property into all the other fields with the same name under the sub categories!";
$lll["propagateConfirmationText_subcat"]="Click 'Ok' to propagate the current value of this property into all the other custom fields that have the same Name and Type in all the sub categories!";
$lll["propagateLabel_sorting"]="Propagate the sorting of this custom field list into all the other categories!";
$lll["propagateConfirmationText_sorting"]="Click 'Ok' to propagate the current sorting into all the other categories!";
$lll["propagateLabel_sorting_subcat"]="Propagate the sorting of this custom field list into all the sub categories!";
$lll["propagateConfirmationText_sorting_subcat"]="Click 'Ok' to propagate the current sorting into all the sub categories!";
$lll["propagateLabel_cat"]="Propagate the current value of this property into all the other categories that have the same Name!";
$lll["propagateConfirmationText_cat"]="Click 'Ok' to propagate the current value of this property into all the other categories that have the same Name!";
$lll["propagateLabel_cat_subcat"]="Propagate the current value of this property into all the sub categories!";
$lll["propagateConfirmationText_cat_subcat"]="Click 'Ok' to propagate the current value of this property into all the sub categories!";
$lll["itemfield_propagate_form"]="Propagate the current value of this property into all the other fields with the same name and type!";
$lll["successfullyPropagated"]="The value of the '%s' property has been successfully propagated into %s custom fields.";
$lll["sortingSuccessfullyPropagated"]="The custom field sorting has been successfully propagated.";
$lll["noPropagationOccured"]="There is no other custom field with the same Name and Type. No propagation occured.";
$lll["catSuccessfullyPropagated"]="The value of the '%s' property has been successfully propagated into %s categories.";
$lll["catNoPropagationOccured"]="There is no other category with the same Name. No propagation occured.";
$lll["orUploadValuesFromFile"]="Or select file:";
$lll["uploadValuesFromFileExpl"]="<br><br>You can also upload the possible values from a file all at once! In that case, one line in the file must represent one value (no need to use commas or other separators between the values!) You can designate the default values in the file by adding :default: to the given line. This is an example file with the countries of the world with USA set as the default value: <a href='upload/countries_example.txt'>countries</a>.";
$lll["customfield_default_textarea_expl"]="If you check in the above field, you can insert variables that will be substituted with the appropriate item values.<br><br>
You can use the following variables:
<ul>
<li>{Title}</li>
<li>{Description}</li>
<li>{Picture}</li>
<li>{Id}</li>
<li>{Category}</li>
<li>{Created}</li>
<li>{Views}</li>
<li>{Responses}</li>
<li>{Expiration}</li>
<li>{Status}</li>
<li>{and any other ad custom field...}</li>
</ul>
Tip: if you have a Picture field and you want it to appear in some other column of the listings than the last one, do the following: 
<ol>
<li>Create a new Textarea type field  with variable substitution enabled,</li>
<li>Enter this in the 'Default' property: {Picture}</li>
<li>Hide it from appearing in the forms and details page, but make it appear in lists</li>
<li>Modify the order of the custom fields so that this new one is displayed just in the position you want</li>
<li>Hide the original Picture field from the lists</li>
</ol>
";
$lll["customfield_useVariableSubstitution"]="Use variable substitution";
$lll["customfield_css"]="Custom CSS class";
$lll["customfield_css_expl"]="If you enter a CSS class name here, the TD-s of the values of this custom field will be generated with this class assigned. E.g.:<br><br>".
htmlspecialchars("<pre><td class='myClass'>Field value</td></pre>")."<br><br>
You can then add a CSS declaration of this class to the 'Additional HEAD content' field of the Content form. E.g.:<pre>".
htmlspecialchars(
'<style type="text/css" media="screen">
<!--
td.myClass {
    color: red;
}
-->
</style>')."</pre>";
// Custom fields of users:
$lll["userfield_ttitle"]="Custom fields of the users";
$lll["userfield_type"."_expl"] = "";
// Notifications:
$lll["notification"]="notification";
$lll["Notifications"]=$lll["notification_ttitle"]="Notifications";
$lll["NotificationsDescription"]="Manage the list of notifications here - the emails the program sends out automatically on certain actions.";
$lll["notification_subject"]="Email subject";
$lll["notification_body"]="Email body";
$lll["notification_body_expl"]="Click on 'Help' to find more details about how you can configure the email body and subject!";
$lll["notification_variables"]="Allowed variables";
$lll["notification_active"]="Active";
$lll["notification_modify_form"]="Modify notification";
$lll["notif_remindpass_tit"]="Contains a new password if the user forgot the old one.";
$lll["notif_remindpass_subj"]="New password";
$lll["notif_initpass_tit"]="Sent to the user after the registration, contains the initial password";
$lll["notif_initpass_subj"]="Initial password";
$lll["notification_cc"]="CC";
$lll["notification_cc_expl"]="Specify here the email adress the notification should be sent as a carbon copy.";
$lll["notification_active_expl"]="You can switch on and off the sending of this notification here.";
//Category:
$lll["category_expirationEnabled"]="Enable expiration";
$lll["category_expirationOverride"]="Allow expiration override for";
$lll["category_allowSubmitAdAdmin"]="Only admin can submit ads in this category";
$lll["category_expirationOverride_expl"]="If you enable this, the 'Number of days before the ad expire' field will appear in the ad create/modify form and the owner can enter a number. If you specified '0' in the above field, they can enter an arbitrary number. If you specified anything greater than null, it will serve as the default and in one as the maximum number of days the owner can enter.";
$lll["category_expirationOverride_".customfield_forNone]="None";
$lll["category_expirationOverride_".customfield_forLoggedin]="All users";
$lll["category_expirationOverride_".customfield_forAdmin]="Admin only";
$lll["category_expirationOverride_".customfield_forManager]="Managers (and admin) only";
$lll["category_organize"]="Organize categories";
$lll["category_restartExpOnModify"]="Restart expiration on modify";
$lll["category_restartExpOnModify_expl"]="You can use this as an alternative of the ad prolonging. If checked and the owner modifies his or her ad (and admin approves it if moderation has been enabled), the ad expiration will start again.";
$lll["category_inactivateOnModify"]="Inactivate on modify";
$lll["category_inactivateOnModify_expl"]="Whether an approved ad becomes pending again if the owner of the ad modifies it.";
$lll["category_renewOnModify"]="Renew on modify and prolong";
$lll["category_renewOnModify_expl"]="Whether the posting date of an ad is updated when the ad is modified or prolonged.";
$lll["category_displayResponseLink"]="Display the 'Response to this ad' link on the ad details pages.";
$lll["category_displayFriendmailLink"]="Display the 'Email to a friend' link on the ad details pages.";
$lll["category_displayFlaggedLink"]="Display the 'Flag this Ad' link on the ad details pages.";
$lll["settings_displayResponseLink"]="Display the 'Contact this user' link on the user details pages.";
$lll["settings_displayFlaggedLink"]="Display the 'Flag this user' link on the user details pages.";
$lll["settings_displayFriendmailLink"]="Display the 'Email to a friend' link on the user details pages.";
$lll["enableDisableProperties"]="Enable/disable features";
$lll["methods"]="Methods";
$lll["clone"]="clone";
$lll["exp"]="Expiration";
$lll["useDragAndDrop"]="Use drag-and-drop to reorganize the categories then click on 'Save order'!";
$lll["organizeSaveButton"]="Save order";
$lll["organizeSaveMessage"]="The category order has been successfully saved";
$lll["organizeSaveError"]="Could not send the data to the server.";
$lll["organizeLoadError"]="Could not load the data from the server.";
$lll["copyOfCategory"]="Copy of '%s'";
$lll["organizeNextPageDrop"]="Hover the mouse here when dragging to place the category in the next page.";
$lll["organizePreviousPageDrop"]="Hover the mouse here when dragging to place the category in the previous page.";
$lll["organizeNextItems"]="next categories &raquo;";
$lll["organizePreviousItems"]="&laquo; previous categories";
$lll["notificationLinksProperties"]="Links";
$lll["expirationAndModerationProperties"]="Expiration and moderation properties";
$lll["category_customAdMeta"]="Custom ad details page meta tags";
$lll["category_sortId"]="Sort index";
$lll["category_id"]="ID";
$lll["category_up"]="Parent ID";
$lll["category_depth"]="Depth";
$lll["alwaysUseAlternativeOrganizer"]="Always use this alternative organizer ";
$lll["updateHierarchy"]="Update hierarchy";
$lll["category_customAdMeta_expl"]="With this, you can overrule the TITLE tag and the DESCRIPTION and KEYWORDS meta tags the program generates for an ad details page. You can insert variables that will be replaced with the appropriate values. A full blown example:<br><br>".
nl2br(htmlspecialchars("<title>{Title} - {Site: Title prefix}: {Site: Title}</title>
<meta name=\"country\" content=\"{owner: Country}\">
<meta name=\"state\" content=\"{owner: State}\">
<meta name=\"city\" content=\"{owner:City}\">
<meta name=\"category\" content=\"{category: Title}\">
<meta name=\"description\" content=\"{Description}, {Category: Description}, {Site: Description}\">
<meta name=\"keywords\" content=\"{Category: Keywords}\">"))."<br><br>You can use the following variables:
<ul>
<li>Site global values (from the Settings form):
<ul>
<li>{site: Title}</li>
<li>{site: Title prefix}</li>
<li>{site: Description}</li>
<li>{site: Keywords}</li>
</ul></li>
<li>Category values (from the category modify form):
<ul>
<li>{category: Title}</li>
<li>{category: Description}</li>
<li>{category: Keywords}</li>
</ul></li>
<li>Fields of the owner of the ad:
<ul>
<li>{owner: Country}</li>
<li>{owner: State}</li>
<li>{owner: Address}</li>
<li>{owner: and any other user custom field...}</li>
</ul></li>
<li>Fields of the ad:
<ul>
<li>{item: Title}</li>
<li>{item: Description}</li>
<li>{item: Keywords}</li>
<li>{item: and any other ad custom field...}</li>
</ul></li>
</ul><br>
Note: in case of the ad fields, you can ommit the 'item:' prefix - e.g. {Title} stands for the title of the ad. The veriables are case insensitive.";
$lll["category_descriptionMeta"]="Meta and RSS Description";
$lll["category_descriptionMeta_expl"]="Used to populate the DESCRIPTION meta tag for SEO and the category description field of the RSS feed. If you leave it blank, the text of the above 'Description' field will be used! If the 'Description' field contains HTML, however, you should enter its HTML-stripped version into this field.";
$lll["category_customAdListTemplate"]="Custom ad list template";
$lll["category_customAdListTemplate_expl"]="Per default, all lists in Noah's use the 'default_list.tpl.php' template to display their content. With this, you can override the default template file on a per category basis. You can place your custom template file either under 'themes/<theme name>/templates' or 'themes/common_templates'.<br><br>Try this as an alternative ad list template: ad_list_pictures_left.tpl.php";
$lll["category_customAdDetailsTemplate"]="Custom ad details page template";
$lll["category_customAdDetailsTemplate_expl"]="Per default, the 'item_details.tpl.php' template is used to display the details pages of all ads in Noah's. With this, you can override the default template file on a per category basis. You can place your custom template file either under 'themes/<theme name>/templates' or 'themes/common_templates'.";
$lll["category_recursive"]="\"Deep\" listings";
$lll["category_recursive_expl"]="If this is enabled, the category listings and the search result lists of this category will contain all the ads of its sub categories, too.<br><br>
Note that this may not work in any case and whether it works or not, depends on the custom field configuration of the main and the sub categories! In Noah's, it is possible to define completely different custom fields in a sub category and in its main category. In such a case, the deep listing of the main category will lead to a wrong result, because the ads of the sub categories can't be reasonably placed in the same list as those of the main category (the columns mismatch!). Tips to avoid the column mismatch:<br>
<ul>
<li>If you create a new custom field in a category, check the 'Add this field to all the sub categories, too' option in the create form,</li>
<li>Try to set up a final custom field configuration for a category, before you create its sub categories (if you create a sub category, it \"inherits\" the fields of the main category)</li>
<li>Use the 'Clone into sub categories' option on the 'List of custom fields' page to \"harmonize\" the fields of a category with the fields of its sub categories.</li>
</ul>
";
// Fieldset:
$lll["fieldset_create_form"]="Advanced operations on the whole list of custom fields of the category (they don't work in the Lite version!)";
$lll["fieldset_deleteAll"]="Delete all fields";
$lll["fieldset_deleteAll_expl"]="This will delete all the unique custom fields of this category at once.<br><br>Please note that deleting custom fields causes data loss, because the corresponding ad field values will be deleted, too!";
$lll["fieldset_cloneToSubcats"]="Clone into sub categories";
$lll["fieldset_cloneToSubcats_expl"]="This list of custom fields will be applied in every sub categories of this category.<br><br>Please note that if the sub categories have custom fields already, they will be deleted first! So, this operation is mainly useful for setting up new categories, because it may cause data loss in categories that have ads already.";
$lll["fieldset_cloneToCats"]="Clone into categories";
$lll["fieldset_cloneToCats_expl"]="This list of custom fields will be applied in every category you select on the right (you can select more!).<br><br>Please note that if the categories have custom fields already, they will be deleted first! So, this operation is mainly useful for setting up new categories, because it may cause data loss in categories that have ads already.";
$lll["fieldset_cloneFromCat"]="Clone from category";
$lll["fieldset_cloneFromCat_expl"]="This is the opposite of the previous operation: it will replace all the existing custom fields of this category with the field list of an other category. The same is applied to this one, too: it can cause data loss if if this category has ads already!<br><br>Just to make it completely clear: none of the cloning operations actually copy ads or ad values! And they don't copy categories either! They copy custom field lists with all their properties. Relocating ads from one category into an other is possible with the 'move' feature on a per advertisement basis. If you want to create duplicates of whole categories (with all their custom fields, but without their ads and sub categories!), you can use the 'clone' feature under the 'Organize categories' menu point.";
$lll["fieldset_deleteAll_successful"]="The custom fields have been successfully deleted";
$lll["fieldset_cloneToSubcats_successful"]="The custom fields have been successfully cloned to the sub categories";
$lll["fieldset_cloneToCats_successful"]="The custom fields have been successfully cloned to the selected categories";
$lll["fieldset_cloneFromCat_successful"]="The custom fields of the selected category have been successfully cloned here";
$lll["fields"]="fields";
// ControlPanel:
$lll["controlPanel"]="Control panel";
$lll["controlpanel_ttitle"]="";
// Custom lists:
$lll["customlist_ttitle"]="Custom lists";
$lll["customlist"]="Custom list";
$lll["customlist_listTitle"]="Title";
$lll["customlist_listDescription"]="Description";
$lll["customlist_listDescription_expl"]="Some notes that can better describe what this custom list is all about. Only visible for admin.";
$lll["customlist_create_form"]="Create custom list";
$lll["customlist_modify_form"]="Modify custom list";
$lll["customlist_newitem"]="Add new custom list";
$lll["checkCustomLists"]="Whenever you delete a custom field, check all the custom lists where a search condition has been supplied by clicking on their Title, because they may become invalid if they referred to the just deleted custom field in their condition!";
$lll["listDisplayProperties"]="List display properties";
$lll["customlist_primarySort"]="Primary sort by";
$lll["customlist_primaryDir"]="Primary sort direction";
$lll["customlist_primaryDir_DESC"]=$lll["customlist_secondaryDir_DESC"]="Descending";
$lll["customlist_primaryDir_ASC"]=$lll["customlist_secondaryDir_ASC"]="Ascending";
$lll["customlist_primaryPersistent"]="Primary sort is persistent";
$lll["customlist_primaryPersistent_expl"]="If you leave this unchecked, the users can override the initial sorting of the list by clicking on the sorting icons in the list column headers. If you check this, however, you can force specific ads to always appear say on the top of the list however the users sort the list.<br><br>E.g. if you have a custom field called 'Sponsoring level' with values say 'Gold', 'Silver', 'Bronze' and 'None', you can create a custom list with a persistent sorting by 'Sponsoring level' descending. The Gold ads will always appear on the top of the list then and the non-sponsored ads on the bottom of the list.";
$lll["customlist_secondarySort"]="Secondary sort by";
$lll["customlist_secondaryDir"]="Secondary sort direction";
$lll["customlist_secondaryPersistent"]="Secondary sort is persistent";
$lll["customlist_limit"]="Limit";
$lll["customlist_limit_expl"]="You can limit the number of ads the list contains. Leave it blank for no limit. E.g. 10 means, the list will display only the first 10 ads in the given sorting order from all the matching ads. If you display this list as a scrollable widget, it is always a good idea to set a reasonable, not too high limit, so that the pages with widgets load faster and have less resource consumption both on the cient and on the server side!";
$lll["customlist_columns"]="Select columns to display";
$lll["customlist_columns_expl"]="If you select more than one, you can re-arrange them by drag-and-drop! 
The columns will be displayed in the order you specify here.<br><br>
So that a column is really displayed in a list, note that it is not enough that you add it here! 
The user who displays the list must have also permission to see that column! 
The visibility of a column can be set from two places depending on the scope of the given field:<br><br>
&nbsp;&nbsp;1. If you want to set the visibility of a column that is in a non-category specific list, 
you can do it from the 'Common custom fields' list (open the modify form and edit the 'Show in lists for' property),<br><br>
&nbsp;&nbsp;2. If you want to set the visibility of a column that is in a category specific list, 
you can do it from the 'List of custom fields of this category' list (open the modify form and edit the 'Show in lists for' property)";
$lll["customlist_displayedFor"]="Display list for";
$lll["customlist_displayedFor_expl"]="Whatever you select here, admin will always be able to view the list by clicking on its Title in the 'List of custom lists'!";
$lll["customlist_pages"]="Display on these pages";
$lll["customlist_pages_expl"]="You can specify a page with its link. E.g. '/item/1' is the details page of ad with ID 1. Use '/' to denote the start page. You can list more pages - one in every line. You can use the '*' wildcard to match more than one pages - e.g.: '/list/*' means all the category listing pages, '/item/*' means all the ad details pages. You can exclude pages by adding the '!' prefix. A more complex example: <br><br>/user/login_form<br>/item/create_form<br>/list/*<br>!/list/1<br>!/list/2<br>/item/4<br>/item/5<br><br>The above says \"display the list on the login page, on the ad submit page, on every category listing pages except of the category with ID 1 and 2, and on the details pages of ads with ID 4 and 5!\"<br><br>This feature does not work in the Lite version!";
$lll["customlist_categorySpecific"]="Content depends on the current category";
$lll["customlist_categorySpecific_expl"]="If you check this and the custom list is just displayed on a page that is in a \"category context\" (e.g. on a category listing page or ad details page), the custom list will only include the ads of the given category. <br><br>This is useful if you have a custom list called say 'Featured list' and you want to make this list to be context sensitive - so that when a user is just under the Cars category, it displays the featured cars and when the user is just under the 'Dating' category, it contains the featured dating ads.";
$lll["customlist_recursive"]="and includes ads from the current category AND any of its subcategories";
$lll["customlist_listStyle"]="List style";
$lll["customlist_listStyle_".customlist_normal]="Normal list";
$lll["customlist_listStyle_".customlist_scrollable]="Scrollable widget";
$lll["customlist_listStyle_expl"]="Visit the demo installation http://noahsclassifieds.org/v8rss/ to see how the 'Scrollable widget' style looks like!";
$lll["customlist_positionNormal"]=$lll["customlist_positionScrollable"]="Position";
$lll["customlist_positionNormal_expl"]=$lll["customlist_positionScrollable_expl"]="The place where the list appears on the page";
$lll["customlist_positionNormal_".customlist_aboveContent]=$lll["customlist_positionScrollable_".customlist_aboveContent]="Above the content";
$lll["customlist_positionNormal_".customlist_belowContent]=$lll["customlist_positionScrollable_".customlist_belowContent]="Below the content";
$lll["customlist_positionScrollable_".customlist_left]="On the left side of the page";
$lll["customlist_positionScrollable_".customlist_right]="On the right side of the page";
$lll["customlist_positionScrollable_".customlist_top]="On the top of the page";
$lll["customlist_positionScrollable_".customlist_bottom]="On the bottom of the page";
$lll["customlist_displayInMenu"]="Assign menu point in menu";
$lll["customlist_displayInMenu_expl"]="If you don't want that the list is displayed on some of the existing pages, you can assign a menu point to it, so that the users access the list on its separate page. E.g.: the good old 'Recent ads', 'Popular ads', 'Pending ads' and 'Approved ads' menu points are from now on just links to the corresponding custom lists!";
$lll["customlist_displayInMenu_0"]="None";
$lll["customlist_displayInMenu_".customlist_loginMenu]="Login menu";
$lll["customlist_displayInMenu_".customlist_userMenu]="User menu";
$lll["customlist_displayInMenu_".customlist_adminMenu]="Admin menu";
$lll["customlist_displayInMenu_".customlist_categoryMenu]="Category menu";
$lll["randomOrder"]="-- Random order --";
$lll["noDefaultSort"]="-- No sorting --";
$lll["selectField"]="-- Select field --";
$lll["currentUser"]="-- Current user --";
$lll["customlist_ownerName_expl"]="If you select 'Current user', the list will always only contain the ads of the currently logged in user. E.g. this has been used in the setup of the 'My ads' custom list!";
$lll["customlist_loop"]="Loop ads";
$lll["customlist_loop_expl"]="Whether scrolling starts over when last item is exceeded";
$lll["customlist_autoScroll"]="Auto scroll in every (seconds)";
$lll["customlist_autoScroll_expl"]="Use 0 to disable auto scroll";
$lll["customlist_cache"]="Cache list content and renew the cache in every (minutes)";
$lll["customlist_cache_expl"]="So that pages that display custom lists can be faster, it is possible to cache the content of the list on the server. Use 0 to disable caching!";
$lll["commonFieldAlreadyExists"]="A common field with this name and type already exists. Please, choose an other name!";
$lll["customFieldExists"]="A custom field with this name already exists. Please, choose an other name!";
$lll["exportProperties"]="Export properties";
$lll["customlist_exportFormat"]="Enable export";
$lll["customlist_exportFormat_expl"]="If you enable this, a new 'export' link will appear in the list of Custom Lists, which you can use to export the content of this custom list.<br><br>Note: this feature is not available in the Lite version of the program!";
$lll["customlist_exportFields"]="Export the following fields";
$lll["customlist_exportFields_expl"]="Note that you can set the order of the fields by drag and drop!";
$lll["customlist_xmlType_RSS2.0"]="RSS2.0";
$lll["customlist_xmlType_RSS1.0"]="RSS1.0";
$lll["customlist_xmlType_ATOM"]="ATOM";
$lll["customlist_xmlType"]="XML type";
$lll["export"]="export";
$lll["exportSavedAs"]="The list has been exported as %s.";
$lll["couldntOpenExportFile"]="Couldn't open the export file for writing. Check the permissions of the 'feedcreator' directory!";
$lll["customlist_customAdListTemplate"]="Custom ad list template";
$lll["customlist_customAdListTemplate_expl"]="Per default, all lists in Noah's use the 'default_list.tpl.php' template to display their content. With this, you can override the default template file and assign a custom list template to this custom ad lists. You can place your custom template file either under 'themes/<theme name>/templates' or 'themes/common_templates'.<br><br>Try this as an alternative ad list template: ad_list_pictures_left.tpl.php";
// CloneCat:
$lll["clonecat_create_form"]="Clone category";
$lll["clonecat_amount"]="Number of clones";
$lll["clonecat_amount_expl"]="Creating many clones - especially if you clone the sub categories and pictures, too - can take quite a long time and you should not close the browser during that!";
$lll["clonecat_name"]="Clone with name";
$lll["clonecat_name_expl"]="If you are creating more than one clones, you can apply numbering in their names if you insert '%d' here. E.g. 'Cars-%d' will result in the following clones: Cars-1, Cars2, Cars-3, etc.";
$lll["clonecat_recursive"]="Clone sub categories, too";
$lll["clonecat_withPictures"]="Clone the category pictures, too";
$lll["categoriesCloned"]="The categories have been successfully cloned.";
$lll["freeNotSupported"]="This feature is not supported in the Lite version of the program.";
// subscriptions:
$lll["subscription_cat_ttitle"]=$lll["catSubscriptions"]="Subscriptions on this category";
$lll["subscription_ttitle"]="Subscriptions";
$lll["subscription_unsub_ttitle"]="Unsubscribed email addresses";
$lll["subscription_ttitleDescription"]="View the list of subscriptions and add new email addresses.";
$lll["subscription"]="subscription";
$lll["subscription_newitem"]="Add new subscriptions";
$lll["subscription_create_form_admin"]="Create subscriptions";
$lll["subscription_email_expl_admin"]="You can add many email addresses at once. Just put everyone in a new line.<br><br>Note: email addresses that have been already unsubscribed will be skipped!";
$lll["subscription_creationtime"]="Date";
$lll["subscription_userName"]="User";
$lll["subscription_catName"]="Category name";
$lll["subscription_cid"]="Subscribe to this category";
?>
