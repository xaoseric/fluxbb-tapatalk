##
##
##        Mod title:  Example Mod
##
##      Mod version:  1.0
##  Works on FluxBB:  1.4, 1.4-rc3
##     Release date:  YYYY-MM-DD
##           Author:  Your name (you@example.com)
##
##      Description:  This mod does nothing useful!
##
##   Repository URL:  http://fluxbb.org/resources/mods/xxx
##
##   Affected files:  some_script.php
##                    include/foo.php
##
##       Affects DB:  Yes
##
##            Notes:  This is just a template. Don't try to install it! Rows
##                    in this header should be no longer than 78 characters
##                    wide. Edit this file and save it as readme.txt. Include
##                    the file in the archive of your mod. The mod disclaimer
##                    below this paragraph must be left intact. This space
##                    would otherwise be a good space to brag about your mad
##                    modding skills :)
##
##       DISCLAIMER:  Please note that "mods" are not officially supported by
##                    FluxBB. Installation of this modification is done at 
##                    your own risk. Backup your forum database and any and
##                    all applicable files before proceeding.
##
##


#
#---------[ 1. UPLOAD ]-------------------------------------------------------
#

install_mod.php to /

files/lang/English/mod_name.php to /lang/English/mod_name.php


#
#---------[ 2. RUN ]----------------------------------------------------------
#

install_mod.php


#
#---------[ 3. DELETE ]-------------------------------------------------------
#

install_mod.php


#
#---------[ 4. OPEN ]---------------------------------------------------------
#

some_script.php


#
#---------[ 5. FIND (line: 185) ]---------------------------------------------
#

	if ($cur_forum['moderators'] != '')
		$moderators = pun_htmlspecialchars($cur_forum['moderators']);
	else
		$moderators = ' ';


#
#---------[ 6. REPLACE WITH ]-------------------------------------------------
#

	$moderators = $lang_mod_name['no moderators needed'];


#
#---------[ 7. OPEN ]---------------------------------------------------------
#

include/foo.php


#
#---------[ 8. FIND (line: 303) ]---------------------------------------------
#

		$title = $lang_common['Administrator'];


#
#---------[ 9. AFTER, ADD ]---------------------------------------------------
#

		$title = $lang_mod_name['Admin title'];


#
#---------[ 10. FIND (line: 311) ]--------------------------------------------
#

	if (isset($_COOKIE['fluxbb_cookie']))


#
#---------[ 11. BEFORE, ADD ]-------------------------------------------------
#

	exit('This is a stupid mod.');


#
#---------[ 12. SAVE/UPLOAD ]-------------------------------------------------
#