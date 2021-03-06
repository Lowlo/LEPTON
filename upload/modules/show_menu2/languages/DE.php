<?php

/**
 * This file is part of an ADDON for use with LEPTON Core.
 * This ADDON is released under the GNU GPL.
 * Additional license terms can be seen in the info.php of this module.
 *
 * @module          show_menu2
 * @author          Brofield, LEPTON Project
 * @copyright       2006-2010 Brofield
 * @copyright       2010-2015 LEPTON Project
 * @link            http://www.LEPTON-cms.org/sm2/
 * @license         http://www.gnu.org/licenses/gpl.html
 * @license_terms   please see info.php of this module
 *
 */

// include class.secure.php to protect this file and the whole CMS!
if ( defined( 'LEPTON_PATH' ) )
{
				include( LEPTON_PATH . '/framework/class.secure.php' );
}
else
{
				$oneback = "../";
				$root    = $oneback;
				$level   = 1;
				while ( ( $level < 10 ) && ( !file_exists( $root . '/framework/class.secure.php' ) ) )
				{
								$root .= $oneback;
								$level += 1;
				}
				if ( file_exists( $root . '/framework/class.secure.php' ) )
				{
								include( $root . '/framework/class.secure.php' );
				}
				else
				{
								trigger_error( sprintf( "[ <b>%s</b> ] Can't include class.secure.php!", $_SERVER[ 'SCRIPT_NAME' ] ), E_USER_ERROR );
				}
}
// end include class.secure.php

 

// Deutsche Modulbeschreibung
$module_description = 'Dieses Modul integriert die erweiterte Men&uuml;funktion <code>show_menu2()</code> in LEPTON. Detailierte Informationen gibt es in der  <a href="http://lepton-cms.com/sm2/" target="_blank">Dokumentation</a> oder in der <a href="' .LEPTON_URL .'/modules/show_menu2/README.de.txt" target="_blank">readme</a> Datei.';

?>