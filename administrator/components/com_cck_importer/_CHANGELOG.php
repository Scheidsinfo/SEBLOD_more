<?php
/**
* @version 			SEBLOD Importer 1.x
* @package			SEBLOD Importer Add-on for SEBLOD 3.x
* @url				http://www.seblod.com
* @editor			Octopoos - www.octopoos.com
* @copyright		Copyright (C) 2013 SEBLOD. All Rights Reserved.
* @license 			GNU General Public License version 2 or later; see _LICENSE.php
**/

defined( '_JEXEC' ) or die;
?>

CHANGELOG:

Legend:

* -> Security Fix
# -> Bug Fix
$ -> Language fix or change
+ -> Addition
^ -> Change
- -> Removed
! -> Note

@ID is the ID on SEBLOD Tracker.

-------------------- 1.4.0 Initial Release [5-Jan-2014] ------------------

+ Update by Custom Key (custom field) added.
^ Implement JCckImporterVersion class.
^ SQL table storage engine switched from MyISAM to InnoDB in install.sql

# Force fieldnames to lowercase.

-------------------- 1.3.3 Upgrade Release [1-Dec-2014] ------------------

+ "CSV Length" added to SEBLOD Importer Options.

# CSV Length issue fixed.

-------------------- 1.3.2 Upgrade Release [29-Apr-2014] ------------------

! Download URL updated for SEBLOD 3.3.4

-------------------- 1.3.1 Upgrade Release [15-Apr-2014] ------------------

# cck.dev-3.2.0.min.js updated to cck.dev-3.3.0.min.js

-------------------- 1.3.0 Upgrade Release [24-Dec-2013] ------------------

! Joomla! 3.2 ready.
! Performance improvements and optimizations.

+ AJAX mode added.
+ "Force Password" parameter added. (Joomla! User)
+ "Reordering" parameter added. (Joomla! Article)

# Queries overloading issue fixed. (Joomla! Article)

-------------------- 1.2.0 Upgrade Release [12-Apr-2013] -------------

! Joomla! 3 ready.
+ Log added.
+ Sessions added.

+ Dynamic options (per Content Object) added.
+ Output options added on SEBLOD Importer configuration.

# Storages (#__cck_store_item..) fixed.
# Various improvements or issues fixed.

-------------------- 1.0.0 Initial Release [18-Jan-2012] ------------------

+ Initial Release