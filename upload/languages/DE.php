<?php

/**
 * This file is part of LEPTON Core, released under the GNU GPL
 * Please see LICENSE and COPYING files in your package for details, specially for terms and warranties.
 *
 * NOTICE:LEPTON CMS Package has several different licenses.
 * Please see the individual license in the header of each single file or info.php of modules and templates.
 *
 * @author          Website Baker Project, LEPTON Project
 * @copyright       2004-2010, Website Baker Project
 * @copyright       2010-2014 LEPTON Project
 * @link            http://www.LEPTON-cms.org
 * @license         http://www.gnu.org/licenses/gpl.html
 * @license_terms   please see LICENSE and COPYING files in your package
 * @version         $Id: DE.php 1586 2012-01-03 09:49:34Z erpe $
 *
 */


// include class.secure.php to protect this file and the whole CMS!
if (defined('LEPTON_PATH')) {
	include(LEPTON_PATH.'/framework/class.secure.php');
} else {
	$oneback = "../";
	$root = $oneback;
	$level = 1;
	while (($level < 10) && (!file_exists($root.'/framework/class.secure.php'))) {
		$root .= $oneback;
		$level += 1;
	}
	if (file_exists($root.'/framework/class.secure.php')) {
		include($root.'/framework/class.secure.php');
	} else {
		trigger_error(sprintf("[ <b>%s</b> ] Can't include class.secure.php!", $_SERVER['SCRIPT_NAME']), E_USER_ERROR);
	}
}
// end include class.secure.php



// Define that this file is loaded
if(!defined('LANGUAGE_LOADED')) {
	define('LANGUAGE_LOADED', true);
}

// Set the language information
$language_code = 'DE';
$language_name = 'Deutsch';
$language_version = '1.0';
$language_platform = '1.0.x';
$language_author = 'Stefan Braunewell, Matthias Gallas';
$language_license = 'GNU General Public License';
$language_guid = 'f49419c8-eb27-4a69-bffb-af61fce6b0c9';

$MENU = array(
	'ACCESS' 				=> 'Benutzerverwaltung',
	'ADDON' 				=> 'Add-on',
	'ADDONS' 				=> 'Erweiterungen',
	'ADMINTOOLS' 			=> 'Admin-Tools',
	'BREADCRUMB' 			=> 'Sie sind hier: ',
	'FORGOT' 				=> 'Anmelde-Daten anfordern',
	'GROUP' 				=> 'Group',
	'GROUPS' 				=> 'Gruppen',
	'HELP' 					=> 'Hilfe',
	'LANGUAGES' 			=> 'Sprachen',
	'LOGIN' 				=> 'Anmeldung',
	'LOGOUT' 				=> 'Abmelden',
	'MEDIA' 				=> 'Medien',
	'MODULES' 				=> 'Module',
	'PAGES' 				=> 'Seiten',
	'PREFERENCES' 			=> 'Einstellungen',
	'SETTINGS' 				=> 'Optionen',
	'START' 				=> 'Start',
	'TEMPLATES' 			=> 'Designvorlagen',
	'USERS' 				=> 'Benutzer',
	'VIEW' 					=> 'Ansicht',
	'SERVICE'				=> 'Service'
);

$TEXT = array(
	'ACCOUNT_SIGNUP' 		=> 'Registrierung',
	'ACTION_NOT_SUPPORTED'	=> 'Action not supported',
	'ACTIONS' 				=> 'Aktionen',
	'ACTIVE' 				=> 'Aktiv',
	'ADD' 					=> 'Hinzuf&uuml;gen',
	'ADDON' 				=> 'Addon',
	'ADD_SECTION' 			=> 'Abschnitt hinzuf&uuml;gen',
	'ADMIN' 				=> 'Admin',
	'ADMINISTRATION' 		=> 'Verwaltung',
	'ADMINISTRATION_TOOL' 	=> 'Verwaltungsprogramme',
	'ADMINISTRATOR' 		=> 'Administrator',
	'ADMINISTRATORS' 		=> 'Administratoren',
	'ADVANCED' 				=> 'Erweitert',
	'ALLOWED_FILETYPES_ON_UPLOAD' => 'Erlaubte Dateitypen f&uuml;r Hochladen',
	'ALLOWED_VIEWERS' 		=> 'genehmigte Besucher',
	'ALLOW_MULTIPLE_SELECTIONS' => 'Mehrfachauswahl',
	'ALL_WORDS' 			=> 'Alle W&ouml;rter',
	'ANCHOR' 				=> 'Anker',
	'ANONYMOUS' 			=> 'Anonym',
	'ANY_WORDS' 			=> 'Einzelne W&ouml;rter',
	'APP_NAME' 				=> 'Verwaltungswerkzeuge',
	'ARE_YOU_SURE' 			=> 'Sind Sie sicher?',
	'AUTHOR' 				=> 'Autor',
	'BACK' 					=> 'Zur&uuml;ck',
	'BACKUP' 				=> 'Sichern',
	'BACKUP_ALL_TABLES' 	=> 'komplette Datenbank sichern',
	'BACKUP_DATABASE' 		=> 'Datenbank sichern',
	'BACKUP_MEDIA' 			=> 'Dateien sichern',
	'BACKUP_WB_SPECIFIC' 	=> 'nur WB Tabellen sichern',
	'BASIC' 				=> 'Einfach',
	'BLOCK' 				=> 'Block',
	'BACKEND_TITLE'	=>	'Backendtitel',
	'CALENDAR' 				=> 'Kalender',
	'CANCEL' 				=> 'Abbrechen',
	'CAN_DELETE_HIMSELF' 	=> 'Kann sich selber l&ouml;schen',
	'CAPTCHA_VERIFICATION' 	=> 'Captcha Pr&uuml;fziffer',
	'CAP_EDIT_CSS' 			=> 'Bearbeite CSS',
	'CHANGE' 				=> '&Auml;ndern',
	'CHANGES' 				=> '&Auml;nderungen',
	'CHANGE_SETTINGS' 		=> 'Einstellungen &auml;ndern',
	'CHARSET' 				=> 'Zeichensatz',
	'CHECKBOX_GROUP' 		=> 'Kontrollk&auml;stchen',
	'CLOSE' 				=> 'Schlie&szlig;en',
	'CODE' 					=> 'Code',
	'CODE_SNIPPET' 			=> 'Funktionserweiterung',
	'COLLAPSE' 				=> 'Reduzieren',
	'COMMENT' 				=> 'Kommentar',
	'COMMENTING' 			=> 'kommentieren',
	'COMMENTS' 				=> 'Kommentare',
	'CREATE_FOLDER' 		=> 'Ordner anlegen',
	'CURRENT' 				=> 'Aktuell',
	'CURRENT_FOLDER' 		=> 'Aktueller Ordner',
	'CURRENT_PAGE' 			=> 'Aktuelle Seite',
	'CURRENT_PASSWORD' 		=> 'Bisheriges Passwort',
	'CUSTOM' 				=> 'Benutzerdefiniert',
	'DATABASE' 				=> 'Datenbank',
	'DATE' 					=> 'Datum',
	'DATE_FORMAT' 			=> 'Datumsformat',
	'DEFAULT' 				=> 'Standard',
	'DEFAULT_CHARSET' 		=> 'Standard Zeichensatz',
	'DEFAULT_TEXT' 			=> 'Standardtext',
	'DELETE' 				=> 'Entfernen',
	'DELETED' 				=> 'Gel&ouml;scht',
	'DELETE_DATE' 			=> 'Datum l&ouml;schen',
	'DELETE_ZIP' 			=> 'Zip-Archiv nach dem entpacken l&ouml;schen',
	'DESCRIPTION' 			=> 'Beschreibung',
	'DESIGNED_FOR' 			=> 'Entworfen f&uuml;r',
	'DIRECTORIES' 			=> 'Verzeichnisse',
	'DIRECTORY_MODE' 		=> 'Verzeichnismodus',
	'DISABLED' 				=> 'Ausgeschaltet',
	'DISPLAY_NAME' 			=> 'Angezeigter Name',
	'EMAIL' 				=> 'E-Mail',
	'EMAIL_ADDRESS' 		=> 'E-Mail Adresse',
	'EMPTY_TRASH' 			=> 'M&uuml;lleimer leeren',
	'ENABLE_JAVASCRIPT'		=> "Bitte JavaScript einschalten.",
	'ENABLED' 				=> 'Eingeschaltet',
	'END' 					=> 'Ende',
	'ERROR' 				=> 'Fehler',
	'EXACT_MATCH' 			=> 'Genaue Wortfolge',
	'EXECUTE' 				=> 'Ausf&uuml;hren',
	'EXPAND' 				=> 'Erweitern',
	'EXTENSION' 			=> 'Extension',
	'FIELD' 				=> 'Feld',
	'FILE' 					=> 'Datei',
	'FILES' 				=> 'Dateien',
	'FILESYSTEM_PERMISSIONS' => 'Zugriffsrechte',
	'FILE_MODE' 			=> 'Dateimodus',
	'FINISH_PUBLISHING' 	=> 'Ende der Ver&ouml;ffentlichung',
	'FOLDER' 				=> 'Ordner',
	'FOLDERS' 				=> 'Ordner',
	'FOOTER' 				=> 'Fu&szlig;zeile',
	'FORGOTTEN_DETAILS' 	=> 'Haben Sie Ihre pers&ouml;nlichen Daten vergessen?',
	'FORGOT_DETAILS' 		=> 'Haben Sie Ihre pers&ouml;nlichen Daten vergessen?',
	'FROM' 					=> 'von',
	'FRONTEND' 				=> 'Frontend',
	'FULL_NAME' 			=> 'Voller Name',
	'FUNCTION' 				=> 'Funktion',
	'GROUP' 				=> 'Gruppe',
	'HEADER' 				=> 'Kopfzeile',
	'HEADING' 				=> '&Uuml;berschrift',
	'HEADING_CSS_FILE' 		=> 'Aktuelle Moduldatei: ',
	'HEIGHT' 				=> 'H&ouml;he',
	'HELP_LEPTOKEN_LIFETIME'		=> 'in Sekunden, 0 bedeutet kein CSRF-Schutz!',
	'HELP_MAX_ATTEMPTS'		=> 'Bei &Uuml;berschreiten der angegebenen Anzahl werden weitere Versuche f&uuml;r diese Session verhindert.',
	'HIDDEN' 				=> 'Versteckt',
	'HIDE' 					=> 'verstecken',
	'HIDE_ADVANCED' 		=> 'Erweiterte Optionen verdecken',
	'HOME' 					=> 'Home',
	'HOMEPAGE_REDIRECTION' 	=> 'URL Umleitung zur Homepage',
	'HOME_FOLDER' 			=> 'Pers&ouml;nlicher Ordner',
	'HOME_FOLDERS' 			=> 'Pers&ouml;nliche Ordner',
	'HOST' 					=> 'Host',
	'ICON' 					=> 'Symbol',
	'IMAGE' 				=> 'Bild',
	'INLINE' 				=> 'Integriert',
	'INSTALL' 				=> 'Installieren',
	'INSTALLATION' 			=> 'Installation',
	'INSTALLATION_PATH' 	=> 'Installationspfad',
	'INSTALLATION_URL' 		=> 'Installationsadresse(URL)',
	'INSTALLED' 			=> 'installiert',
	'INTRO' 				=> 'Eingangs',
	'INTRO_PAGE' 			=> 'Eingangsseite',
	'INVALID_SIGNS' 		=> 'muss mit einem Buchstaben beginnen oder hat ung&uuml;ltige Zeichen',
	'KEYWORDS' 				=> 'Schl&uuml;sselw&ouml;rter',
	'LANGUAGE' 				=> 'Sprache',
	'LAST_UPDATED_BY' 		=> 'zuletzt ge&auml;ndert von',
	'LENGTH' 				=> 'L&auml;nge',
	'LEPTOKEN_LIFETIME'		=> 'Leptoken-Lebensdauer',
	'LEVEL' 				=> 'Ebene',
	'LIBRARY'				=> 'Bibliothek',
	'LICENSE'				=> 'Lizenz',
	'LINK' 					=> 'Link',
	'LINUX_UNIX_BASED' 		=> 'Linux/Unix basierend',
	'LIST_OPTIONS' 			=> 'Auswahlliste',
	'LOGGED_IN' 			=> 'Angemeldet',
	'LOGIN' 				=> 'Anmeldung',
	'LONG' 					=> 'Lang',
	'LONG_TEXT' 			=> 'Langtext',
	'LOOP' 					=> 'Schleife',
	'MAIN' 					=> 'Hauptblock',
	'MANAGE' 				=> 'Verwalten Sie',
	'MANAGE_GROUPS' 		=> 'Gruppen verwalten',
	'MANAGE_USERS' 			=> 'Benutzer verwalten',
	'MATCH' 				=> '&Uuml;bereinstimmung',
	'MATCHING' 				=> 'passende',
	'MAX_ATTEMPTS'		=> 'Erlaubte Anzahl Anmeldeversuche',
	'MAX_EXCERPT' 			=> 'Max Anzahl Zitate pro Seite',
	'MAX_SUBMISSIONS_PER_HOUR' => 'Max. Eintragungen pro Stunde',
	'MEDIA_DIRECTORY' 		=> 'Medienverzeichnis',
	'MENU' 					=> 'Men&uuml;',
	'MENU_ICON_0' 			=> 'Men&uuml;-Icon normal',
	'MENU_ICON_1' 			=> 'Men&uuml;-Icon hover',
	'MENU_TITLE' 			=> 'Men&uuml;titel',
	'MESSAGE' 				=> 'Nachricht',
	'MODIFY' 				=> '&Auml;ndern',
	'MODIFY_CONTENT' 		=> 'Inhalt &auml;ndern',
	'MODIFY_SETTINGS'	 	=> 'Optionen &auml;ndern',
	'MODULE_ORDER' 			=> 'Modulreihenfolge f&uuml;r die Suche',
	'MODULE_PERMISSIONS' 	=> 'Modulberechtigungen',
	'MORE' 					=> 'Mehr',
	'MOVE_DOWN' 			=> 'Abw&auml;rts verschieben',
	'MOVE_UP' 				=> 'Aufw&auml;rts verschieben',
	'MULTIPLE_MENUS' 		=> 'Mehrere Men&uuml;s',
	'MULTISELECT' 			=> 'Mehrfachauswahl',
	'NAME' 					=> 'Name',
	'NEED_CURRENT_PASSWORD' => 'mit aktuellem Passwort best&auml;tigen',
	'NEED_PASSWORD_TO_CONFIRM' => 'Bitte die &Auml;nderungen mit aktuellem Passwort best&auml;tigen',
	'NEED_TO_LOGIN' 		=> 'M&ouml;chten Sie sich einloggen?',
	'NEW_PASSWORD' 			=> 'Neues Passwort',
	'NEW_USER_HINT'			=> 'Mindestl&auml;nge Benutzername: %d Buchstaben, Mindestl&auml;nge Passwort: %d Buchstaben!',
	'NEW_WINDOW' 			=> 'Neues Fenster',
	'NEXT' 					=> 'n&auml;chste',
	'NEXT_PAGE' 			=> 'n&auml;chste Seite',
	'NO' 					=> 'Nein',
	'NO_LEPTON_ADDON'  => 'Dieses Addon ist nicht f&uuml;r LEPTON geeignet',
	'NONE' 					=> 'Keine',
	'NONE_FOUND' 			=> 'Keine gefunden',
	'NOT_FOUND' 			=> 'Nicht gefunden',
	'NOT_INSTALLED' 		=> 'nicht installiert',
	'NO_RESULTS' 			=> 'Keine Ergebnisse',
	'OF' 					=> 'von',
	'ON' 					=> 'Am',
	'OPEN' 					=> '&Ouml;ffnen',
	'OPTION' 				=> 'Option',
	'OTHERS' 				=> 'Alle',
	'OUT_OF' 				=> 'von',
	'OVERWRITE_EXISTING' 	=> '&Uuml;berschreibe bestehende',
	'PAGE' 					=> 'Seite',
	'PAGES_DIRECTORY' 		=> 'Seitenverzeichnis',
	'PAGES_PERMISSION' 		=> 'Seitenberechtigung',
	'PAGES_PERMISSIONS' 	=> 'Seitenberechtigungen',
	'PAGE_EXTENSION' 		=> 'Dateiendungen',
	'PAGE_ICON' 			=> 'Seitenbild',
	'PAGE_ID'      => 'Seiten-ID',
	'PAGE_LANGUAGES' 		=> 'Seitensprache',
	'PAGE_LEVEL_LIMIT' 		=> 'Limit der Seitenebenen',
	'PAGE_SPACER' 			=> 'Leerzeichen',
	'PAGE_TITLE' 			=> 'Seitentitel',
	'PAGE_TRASH' 			=> 'Seiten M&uuml;lleimer',
	'PARENT' 				=> '&Uuml;bergeordnete Datei',
	'PASSWORD' 				=> 'Passwort',
	'PATH' 					=> 'Pfad',
	'PHP_ERROR_LEVEL' 		=> 'PHP Fehlerberichte',
	'PLEASE_LOGIN' 			=> 'Bitte anmelden',
	'PLEASE_SELECT' 		=> 'Bitte ausw&auml;hlen',
	'POST' 					=> 'Beitrag',
	'POSTS_PER_PAGE' 		=> 'Nachrichten pro Seite',
	'POST_FOOTER' 			=> 'Nachricht Fu&szlig;zeile',
	'POST_HEADER' 			=> 'Nachricht Kopfzeile',
	'PREVIOUS' 				=> 'vorherige',
	'PREVIOUS_PAGE' 		=> 'vorherige Seite',
	'PRIVATE' 				=> 'Privat',
	'PRIVATE_VIEWERS' 		=> 'Private Nutzer',
	'PROFILES_EDIT' 		=> 'Profil &auml;ndern',
	'PUBLIC' 				=> '&Ouml;ffentlich',
	'PUBL_END_DATE' 		=> 'End Datum',
	'PUBL_START_DATE' 		=> 'Start Datum',
	'RADIO_BUTTON_GROUP' 	=> 'Optionsfeld',
	'READ' 					=> 'Lesen',
	'READ_MORE' 			=> 'Weiterlesen',
	'REDIRECT_AFTER' 		=> 'Weiterleitung nach',
	'REGISTERED' 			=> 'registriert',
	'REGISTERED_VIEWERS' 	=> 'registrierter Besucher',
	'REGISTERED_CONTENT'	=> 'Auf diese Inhalte k&ouml;nnen nur registrierte Besucher der Website zugreifen',
	'RELOAD' 				=> 'Neu laden',
	'REMEMBER_ME' 			=> 'Passwort speichern',
	'RENAME' 				=> 'Umbenennen',
	'RENAME_FILES_ON_UPLOAD' => 'Datei nach Hochladen umbenennen',
	'REQUIRED' 				=> 'Erforderlich',
	'REQUIREMENT' 			=> 'Voraussetzung',
	'RESET' 				=> 'Zur&uuml;cksetzen',
	'RESIZE' 				=> 'Gr&ouml;&szlig,e &auml;ndern',
	'RESIZE_IMAGE_TO' 		=> 'Bildgr&ouml;&szlig;e ver&auml;ndern auf',
	'RESTORE' 				=> 'Wiederherstellen',
	'RESTORE_DATABASE' 		=> 'Datenbank wiederherstellen',
	'RESTORE_MEDIA' 		=> 'Dateien wiederherstellen',
	'RESULTS' 				=> 'Resultate',
	'RESULTS_FOOTER' 		=> 'Ergebnisse Fu&szlig;zeile',
	'RESULTS_FOR' 			=> 'Ergebnisse f&uuml;r',
	'RESULTS_HEADER' 		=> 'Ergebnisse &Uuml;berschrift',
	'RESULTS_LOOP' 			=> 'Ergebnisse Schleife',
	'RETYPE_NEW_PASSWORD' 	=> 'Neues Passwort wiederholen',
	'RETYPE_PASSWORD' 		=> 'Geben Sie bitte Ihr Passwort nochmal ein',
	'SAME_WINDOW' 			=> 'Gleiches Fenster',
	'SAVE' 					=> 'Speichern',
	'SEARCH' 				=> 'Suche',
	'SEARCH_FOR'  => 'Suche nach',
	'SEARCHING' 			=> 'suchen',
	'SECTION' 				=> 'Abschnitt',
	'SECTION_BLOCKS' 		=> 'Bl&ouml;cke',
	'SECTION_ID' => 'Sektion ID',
	'SEC_ANCHOR' 			=> 'Abschnitts-Anker Text',
	'SELECT_BOX' 			=> 'Auswahlliste',
	'SEND_DETAILS' 			=> 'Anfrage senden',
	'SEPARATE' 				=> 'Separat',
	'SEPERATOR' 			=> 'Separator',
	'SERVER_EMAIL' 			=> 'Server E-Mail',
	'SERVER_OPERATING_SYSTEM' => 'Server Betriebssystem',
	'SESSION_IDENTIFIER' 	=> 'Sitzungs ID',
	'SETTINGS' 				=> 'Optionen',
	'SHORT' 				=> 'Kurz',
	'SHORT_TEXT' 			=> 'Kurztext',
	'SHOW' 					=> 'zeigen',
	'SHOW_ADVANCED'	 		=> 'Erweiterte Optionen anzeigen',
	'SIGNUP' 				=> 'Registrierung',
	'SIZE' 					=> 'Gr&ouml;&szlig;e',
	'SMART_LOGIN' 			=> 'Intelligente Anmeldung',
	'START' 				=> 'Start',
	'START_PUBLISHING' 		=> 'Beginn der Ver&ouml;ffentlichung',
	'SUBJECT' 				=> 'Betreff',
	'SUBMISSIONS' 			=> 'Eintragungen',
	'SUBMISSIONS_STORED_IN_DATABASE' => 'Max. gespeicherte Eintragungen',
	'SUBMISSION_ID' 		=> 'Eintragungs-ID',
	'SUBMITTED' 			=> 'eingetragen',
	'SUCCESS' 				=> 'Erfolgreich',
	'SYSTEM_DEFAULT' 		=> 'Standardeinstellung',
	'SYSTEM_PERMISSIONS' 	=> 'Zugangsberechtigungen',
	'TABLE_PREFIX' 			=> 'TabellenPr&auml;fix',
	'TARGET' 				=> 'Ziel',
	'TARGET_FOLDER' 		=> 'Zielordner',
	'TEMPLATE' 				=> 'Template',
	'TEMPLATE_PERMISSIONS' 	=> 'Zugriffsrechte f&uuml;r Vorlagen',
	'TEXT' 					=> 'Text',
	'TEXTAREA' 				=> 'Langtext',
	'TEXTFIELD' 			=> 'Kurztext',
	'THEME' 				=> 'Backend-Theme',
	'TIME' 					=> 'Zeit',
	'TIMEZONE' 				=> 'Zeitzone',
	'TIME_FORMAT' 			=> 'Zeitformat',
	'TIME_LIMIT' 			=> 'Zeitlimit zur Erstellung der Zitate pro Modul',
	'TITLE' 				=> 'Titel',
	'TO' 					=> 'an',
	'TOP_FRAME' 			=> 'Frameset sprengen',
	'TRASH_EMPTIED' 		=> 'M&uuml;lleimer geleert',
	'TXT_EDIT_CSS_FILE' 	=> 'Bearbeite die CSS Definitionen im nachfolgenden Textfeld.',
	'TYPE' 					=> 'Art',
	'UNINSTALL' 			=> 'Deinstallieren',
	'UNKNOWN' 				=> 'Unbekannt',
	'UNLIMITED' 			=> 'Unbegrenzt',
	'UNZIP_FILE' 			=> 'Zip-Archiv hochladen und entpacken',
	'UP' 					=> 'Aufw&auml;rts',
	'UPGRADE' 				=> 'Aktualisieren',
	'UPLOAD_FILES' 			=> 'Datei(en) &uuml;bertragen',
	'URL' 					=> 'URL',
	'USER' 					=> 'Besitzer',
	'USERNAME' 				=> 'Benutzername',
	'USERS_ACTIVE' 			=> 'Benutzer ist aktiv',
	'USERS_CAN_SELFDELETE' 	=> 'Selbstl&ouml;schung m&ouml;glich',
	'USERS_CHANGE_SETTINGS' => 'Benutzer kann eigene Einstellungen &auml;ndern',
	'USERS_DELETED' 		=> 'Benutzer ist als gel&ouml;scht markiert',
	'USERS_FLAGS' 			=> 'Benutzerflags',
	'USERS_PROFILE_ALLOWED' => 'Benutzer kann erweitertes Profil anlegen',
	'VERIFICATION' 			=> 'Spamschutz',
	'VERSION' 				=> 'Version',
	'VIEW' 					=> 'Ansicht',
	'VIEW_DELETED_PAGES' 	=> 'gel&ouml;schte Seiten anschauen',
	'VIEW_DETAILS' 			=> 'Details',
	'VISIBILITY' 			=> 'Sichtbarkeit',
	'WBMAILER_DEFAULT_SENDER_MAIL' => 'Standard "VON" Adresse',
	'WBMAILER_DEFAULT_SENDER_NAME' => 'Standard Absender Name',
	'WBMAILER_DEFAULT_SETTINGS_NOTICE' => 'Bitte geben Sie eine Standard "VON" Adresse und einen Sendernamen an. Als Absender Adresse empfiehlt sich ein Format wie: <strong>admin@IhreWebseite.de</strong>. Manche E-Mail Provider (z.B. <em>mail.de</em>) stellen keine E-Mails zu, die nicht &uuml;ber den Provider selbst verschickt wurden, in der Absender Adresse aber den Namen des E-Mail Providers <em>name@mail.de</em> enthalten. Die Standard Werte werden nur verwendet, wenn keine anderen Werte von Lepton gesetzt wurden. Wenn Ihr Service Provider <acronym title="Simple Mail Transfer Protocol">SMTP</acronym> anbietet, sollten Sie diese Option f&uuml;r ausgehende E-Mails verwenden.',
	'WBMAILER_FUNCTION' 	=> 'E-Mail Routine',
	'WBMAILER_NOTICE' 		=> '<strong>SMTP Maileinstellungen:</strong><br />Die nachfolgenden Einstellungen m&uuml;ssen nur angepasst werden, wenn Sie E-Mail &uuml;ber <acronym title="Simple Mail Transfer Protocol">SMTP</acronym> verschicken wollen. Wenn Sie Ihren SMTP Server nicht kennen, oder Sie sich unsicher bei den Einstellungen sind, verwenden Sie einfach die Standard E-Mail Routine: PHP MAIL.',
	'WBMAILER_PHP' 			=> 'PHP MAIL',
  'WBMAILER_SEND_TESTMAIL' => 'Testmail verschicken',
	'WBMAILER_SMTP' 		=> 'SMTP',
	'WBMAILER_SMTP_AUTH' 	=> 'SMTP Authentifikation',
	'WBMAILER_SMTP_AUTH_NOTICE' => 'nur aktivieren, wenn SMTP Authentifikation ben&ouml;tigt wird',
	'WBMAILER_SMTP_HOST' 	=> 'SMTP Host',
	'WBMAILER_SMTP_PASSWORD' => 'SMTP Passwort',
	'WBMAILER_SMTP_USERNAME' => 'SMTP Benutzername',
  'WBMAILER_TESTMAIL_FAILED' => 'Das Versenden der Testmail ist fehlgeschlagen! Bitte die Einstellungen pr&uuml;fen!',
	'WBMAILER_TESTMAIL_SUCCESS' => 'Die Testmail wurde erfolgreich verschickt.',
  'WBMAILER_TESTMAIL_TEXT' => 'Dies ist die angeforderte Testmail: Die Maileinstellungen funktionieren',
	'WEBSITE' 				=> 'Webseite',
	'WEBSITE_DESCRIPTION' 	=> 'Webseitenbeschreibung',
	'WEBSITE_FOOTER' 		=> 'Fu&szlig;zeile',
	'WEBSITE_HEADER' 		=> 'Kopfzeile',
	'WEBSITE_KEYWORDS' 		=> 'Schl&uuml;sselw&ouml;rter',
	'WEBSITE_TITLE' 		=> 'Webseitentitel',
	'WELCOME_BACK' 			=> 'Willkommen zur&uuml;ck',
	'WIDTH' 				=> 'Breite',
	'WINDOW' 				=> 'Fenster',
	'WINDOWS' 				=> 'Windows',
	'WORLD_WRITEABLE_FILE_PERMISSIONS' => 'Einstellungen f&uuml;r Schreibrechte',
	'WRITE' 				=> 'Schreiben',
	'WYSIWYG_EDITOR' 		=> 'WYSIWYG Editor',
	'WYSIWYG_STYLE' 		=> 'WYSIWYG Stil',
	'YES' 					=> 'Ja',
	'BASICS'	=> array(
		'day'		=> "Tag",		# day, singular
		'day_pl'	=> "Tage",		# day, plural
		'hour'		=> "Stunde", 	# hour, singular
		'hour_pl'	=> "Stunden", 	# hour, plural
		'minute'	=> "Minute",	# minute, singular
		'minute_pl'	=> "Minuten",	# minute, plural
	)
);

$HEADING = array(
	'ADDON_PRECHECK_FAILED' => 'Add-On Voraussetzungen nicht erf&uuml;llt',
	'ADD_CHILD_PAGE' 		=> 'Unterseite hinzuf&uuml;gen',
	'ADD_GROUP' 			=> 'Gruppe hinzuf&uuml;gen',
	'ADD_GROUPS' 			=> 'Gruppen hinzuf&uuml;gen',
	'ADD_HEADING' 			=> 'Kopf hinzuf&uuml;gen',
	'ADD_PAGE' 				=> 'Seite hinzuf&uuml;gen',
	'ADD_USER' 				=> 'Benutzer hinzuf&uuml;gen',
	'ADMINISTRATION_TOOLS' 	=> 'Verwaltungsprogramme',
	'BROWSE_MEDIA' 			=> 'Medien durchsuchen',
	'CREATE_FOLDER' 		=> 'Ordner erstellen',
	'DEFAULT_SETTINGS' 		=> 'Standardeinstellungen',
	'DELETED_PAGES' 		=> 'gel&ouml;schte Seiten',
	'FILESYSTEM_SETTINGS' 	=> 'Dateisystemoptionen',
	'GENERAL_SETTINGS' 		=> 'Allgemeine Optionen',
	'INSTALL_LANGUAGE' 		=> 'Sprache hinzuf&uuml;gen',
	'INSTALL_MODULE' 		=> 'Modul installieren',
	'INSTALL_TEMPLATE' 		=> 'Designvorlage installieren',
	'INVOKE_MODULE_FILES' 	=> 'Moduldateien manuell aufrufen',
	'LANGUAGE_DETAILS' 		=> 'Details zur Sprache',
	'MANAGE_SECTIONS' 		=> 'Abschnitte verwalten',
	'MODIFY_ADVANCED_PAGE_SETTINGS' => 'Erweiterte Seitenoptionen &auml;ndern',
	'MODIFY_DELETE_GROUP' 	=> '&Auml;ndern/L&ouml;schen von Gruppen',
	'MODIFY_DELETE_PAGE' 	=> 'Seite &auml;ndern / Seite l&ouml;schen',
	'MODIFY_DELETE_USER' 	=> '&Auml;ndern / L&ouml;schen von Benutzern',
	'MODIFY_GROUP' 			=> 'Gruppe &auml;ndern',
	'MODIFY_GROUPS' 		=> 'Gruppen &auml;ndern',
	'MODIFY_INTRO_PAGE' 	=> 'Eingangsseite &auml;ndern',
	'MODIFY_PAGE' 			=> 'Seite &auml;ndern',
	'MODIFY_PAGE_SETTINGS' 	=> 'Seitenoptionen &auml;ndern',
	'MODIFY_USER' 			=> 'Benutzer &auml;ndern',
	'MODULE_DETAILS' 		=> 'Details zum Modul',
	'MY_EMAIL' 				=> 'E-Mail Adresse',
	'MY_PASSWORD' 			=> 'Passwort',
	'MY_SETTINGS' 			=> 'Einstellungen',
	'SEARCH_SETTINGS' 		=> 'Suchoptionen',
	'SEARCH_PAGE' 			=> 'Seite suchen',
	'SECURITY_SETTINGS'		=> 'Sicherheitseinstellungen',
	'SERVER_SETTINGS' 		=> 'Servereinstellungen',
	'TEMPLATE_DETAILS' 		=> 'Details zur Designvorlage',
	'UNINSTALL_LANGUAGE' 	=> 'Sprache l&ouml;schen',
	'UNINSTALL_MODULE' 		=> 'Modul deinstallieren',
	'UNINSTALL_TEMPLATE' 	=> 'Designvorlage deinstallieren',
	'UPGRADE_LANGUAGE' 		=> 'Sprache registrieren/aktualisieren',
	'UPLOAD_FILES' 			=> 'Datei(en) &uuml;bertragen',
	'VISIBILITY' 			=> 'Sichtbarkeit',
	'WBMAILER_SETTINGS' 	=> 'Maileinstellungen'
); // $HEADING

$MESSAGE = array(
	'ADDON_ERROR_RELOAD' 		=> 'Fehler beim Abgleich der Addon Informationen.',
	'ADDON_GROUPS_MARKALL' => 'Alle markieren',
	'ADDON_LANGUAGES_RELOADED' 	=> 'Sprachen erfolgreich geladen',
	'ADDON_MANUAL_FTP_LANGUAGE' => '<strong>ACHTUNG!</strong> &Uuml;berspielen Sie Sprachdateien aus Sicherheitsgr&uuml;nden nur &uuml;ber FTP in den Ordner /languages/ und benutzen die Upgrade Funktion zum Registrieren oder Aktualisieren.',
	'ADDON_MANUAL_FTP_WARNING' 	=> 'Warnung: <br />Eventuell vorhandene Datenbankeintr&auml;ge eines Moduls gehen verloren. ',
	'ADDON_MANUAL_INSTALLATION' => 'Beim Hochladen oder L&ouml;schen von Modulen per FTP (nicht empfohlen), werden eventuell vorhandene Modulfunktionen <tt>install</tt>, <tt>upgrade</tt> oder <tt>uninstall</tt> nicht automatisch ausgef&uuml;hrt. Solche Module funktionieren daher meist nicht richtig, oder hinterlassen Datenbankeintr&auml;ge beim L&ouml;schen per FTP.<br /><br /> Nachfolgend k&ouml;nnen die Modulfunktionen von per FTP hochgeladenen Modulen manuell ausgef&uuml;hrt werden.',
	'ADDON_MANUAL_INSTALLATION_WARNING' => 'Warnung: Eventuell vorhandene Datenbankeintr&auml;ge eines Moduls gehen verloren.<br />Bitte nur bei Problemen mit per FTP hochgeladenen Modulen verwenden. ',
	'ADDON_MANUAL_RELOAD_WARNING' => 'Warnung: Eventuell vorhandene Datenbankeintr&auml;ge eines Moduls gehen verloren. ',
	'ADDON_MODULES_RELOADED' 	=> 'Module erfolgreich geladen',
	'ADDON_PRECHECK_FAILED' 	=> 'Installation fehlgeschlagen. Ihr System erf&uuml;llt nicht alle Voraussetzungen die f&uuml;r diese Erweiterung ben&ouml;tigt werden. Um diese Erweiterung nutzen zu k&ouml;nnen, m&uuml;ssen nachfolgende Updates durchgef&uuml;hrt werden.',
	'ADDON_RELOAD' 				=> 'Abgleich der Datenbank mit den Informationen aus den Addon-Dateien (z.B. nach FTP Upload).',
	'ADDON_TEMPLATES_RELOADED' 	=> 'Designvorlagen erfolgreich geladen',
	'ADMIN_INSUFFICIENT_PRIVELLIGES' => 'Ungen&uuml;gende Zugangsberechtigungen',
	'FORGOT_PASS_ALREADY_RESET' => 'Das Passwort kann nur einmal pro Stunde zur&uuml;ckgesetzt werden',
	'FORGOT_PASS_CANNOT_EMAIL' 	=> 'Das Passwort konnte nicht versendet werden, bitte kontaktieren Sie den Systemadministrator',
	'FORGOT_PASS_EMAIL_NOT_FOUND' => 'Die angegebene E-Mail Adresse wurde nicht in der Datenbank gefunden',
	'FORGOT_PASS_NO_DATA' 		=> 'Bitte geben Sie nachfolgend Ihre E-Mail Adresse an',
	'FORGOT_PASS_PASSWORD_RESET' => 'Ihr Benutzername und Ihr Passwort wurden an Ihre E-Mail Adresse gesendet',
	'FRONTEND_SORRY_NO_ACTIVE_SECTIONS' => 'Kein aktiver Inhalt auf dieser Seite vorhanden',
	'FRONTEND_SORRY_NO_VIEWING_PERMISSIONS' => 'Sie sind nicht berechtigt, diese Seite zu sehen',
	'GENERIC_ALREADY_INSTALLED' => 'Bereits installiert.',
	'GENERIC_BAD_PERMISSIONS' 	=> 'Kann im Zielverzeichnis nicht schreiben.',
	'GENERIC_CANNOT_UNINSTALL' 	=> 'Deinstallation fehlgeschlagen.',
	'GENERIC_CANNOT_UNINSTALL_IN_USE' => 'Deinstallation nicht m&ouml;glich: Datei wird benutzt.',
	'GENERIC_CANNOT_UNINSTALL_IN_USE_TMPL' => '<br /><br />Das {{type}} <b>{{type_name}}</b> kann nicht deinstalliert werden, weil es auf {{pages}} benutzt wird:<br /><br />',
	'GENERIC_CANNOT_UNINSTALL_IN_USE_TMPL_PAGES' => 'folgender Seite;folgenden Seiten',
	'GENERIC_CANNOT_UNINSTALL_IS_DEFAULT_TEMPLATE' => 'Das Template <b>{{name}}</b> kann nicht deinstalliert werden, weil es das Standardtemplate ist!',
	'GENERIC_CANNOT_UNZIP' 		=> 'Fehler beim Entpacken!',
	'GENERIC_CANNOT_UPLOAD' 	=> 'Die Datei kann nicht &uuml;bertragen werden!',
	'GENERIC_COMPARE' 			=> ' erfolgreich',
	'GENERIC_ERROR_OPENING_FILE' => 'Fehler beim &Ouml;ffnen der Datei.',
	'GENERIC_FAILED_COMPARE' 	=> ' fehlgeschlagen',
	'GENERIC_FILE_TYPE' 		=> 'Bitte beachten Sie, dass Sie nur den folgenden Dateityp ausw&auml;hlen k&ouml;nnen:',
	'GENERIC_FILE_TYPES' 		=> 'Bitte beachten Sie, dass Sie nur folgende Dateitypen ausw&auml;hlen k&ouml;nnen:',
	'GENERIC_FILL_IN_ALL' 		=> 'Bitte alle Felder ausf&uuml;llen.',
	'GENERIC_INSTALLED' 		=> 'Erfolgreich installiert.',
	'GENERIC_INVALID' 			=> 'Die &uuml;bertragene Datei ist ung&uuml;ltig.',
	'GENERIC_INVALID_ADDON_FILE' => 'Ung&uuml;ltige Lepton Installationsdatei. Bitte *.zip Format pr&uuml;fen.',
	'GENERIC_INVALID_LANGUAGE_FILE' => 'Ung&uuml;ltige Lepton Sprachdatei. Bitte Textdatei pr&uuml;fen.',
	'GENERIC_IN_USE' 			=> ' aber benutzt in ',
	'GENERIC_MODULE_VERSION_ERROR' => 'Das Modul ist nicht ordnungsgem&auml;ss installiert!',
	'GENERIC_NOT_COMPARE' 		=> ' nicht m&ouml;glich',
	'GENERIC_NOT_INSTALLED' 	=> 'Nicht installiert.',
	'GENERIC_NOT_UPGRADED' 		=> 'Aktualisierung nicht m&ouml;glich.',
	'GENERIC_PLEASE_BE_PATIENT' => 'Die Datenbanksicherung kann je nach Gr&ouml;&szlig;e der Datenbank einige Zeit dauern.',
	'GENERIC_PLEASE_CHECK_BACK_SOON' => 'Bitte versuchen Sie es sp&auml;ter noch einmal ...',
	'GENERIC_SECURITY_ACCESS'	=> 'Sicherheitsverletzung!! Zugriff wurde verweigert!',
	'GENERIC_SECURITY_OFFENSE' 	=> 'Sicherheitsverletzung!! Das Speichern der Daten wurde verweigert!!',
	'GENERIC_UNINSTALLED' 		=> 'Erfolgreich deinstalliert.',
	'GENERIC_UPGRADED' 			=> 'Erfolgreich aktualisiert.',
	'GENERIC_VERSION_COMPARE' 	=> 'Versionsabgleich',
	'GENERIC_VERSION_GT' 		=> 'Upgrade erforderlich!',
	'GENERIC_VERSION_LT' 		=> 'Downgrade',
	'GROUPS_ADDED' 				=> 'Die Gruppe wurde erfolgreich hinzugef&uuml;gt.',
	'GROUPS_CONFIRM_DELETE' 	=> 'Sind Sie sicher, dass Sie die ausgew&auml;hlte Gruppe l&ouml;schen m&ouml;chten (und alle Benutzer, die dazugeh&ouml;ren)?',
	'GROUPS_DELETED' 			=> 'Die Gruppe wurde erfolgreich gel&ouml;scht.',
	'GROUPS_GROUP_NAME_BLANK' 	=> 'Der Gruppenname wurde nicht angegeben.',
	'GROUPS_GROUP_NAME_EXISTS' 	=> 'Der Gruppenname existiert bereits.',
	'GROUPS_NO_GROUPS_FOUND' 	=> 'Keine Gruppen gefunden.',
	'GROUPS_SAVED' 				=> 'Die Gruppe wurde erfolgreich gespeichert.',
	'LANG_MISSING_PARTS_NOTICE'	=> 'Sprachdatei installation fehlgeschlagen, eine oder mehrere der folgenden Variablen fehlen:<br />language_code<br />language_name<br />language_version<br />language_license',
	'LOGIN_AUTHENTICATION_FAILED' => 'Der Benutzername oder das Passwort ist nicht korrekt.',
	'LOGIN_BOTH_BLANK' 			=> 'Bitte geben Sie unten Ihren Benutzernamen und Passwort ein.',
	'LOGIN_PASSWORD_BLANK' 		=> 'Bitte geben Sie Ihr Passwort ein.',
	'LOGIN_PASSWORD_TOO_LONG' 	=> 'Das angegebene Passwort ist zu lang!',
	'LOGIN_PASSWORD_TOO_SHORT' 	=> 'Das angegebene Passwort ist zu kurz!',
	'LOGIN_USERNAME_BLANK' 		=> 'Bitte geben Sie Ihren Benutzernamen ein.',
	'LOGIN_USERNAME_TOO_LONG' 	=> 'Der angegebene Benutzername ist zu lang!',
	'LOGIN_USERNAME_TOO_SHORT' 	=> 'Der angegebene Benutzername ist zu kurz!',
	'MEDIA_BLANK_EXTENSION' 	=> 'Sie haben keine Dateiendung angegeben!',
	'MEDIA_BLANK_NAME' 			=> 'Sie haben keinen neuen Namen angegeben!',
	'MEDIA_CANNOT_DELETE_DIR' 	=> 'Das ausgew&auml;hlte Verzeichnis konnte nicht gel&ouml;scht werden.',
	'MEDIA_CANNOT_DELETE_FILE' 	=> 'Die ausgew&auml;hlte Datei konnte nicht gel&ouml;scht werden.',
	'MEDIA_CANNOT_RENAME' 		=> 'Das Umbenennen war nicht erfolgreich.',
	'MEDIA_CONFIRM_DELETE' 		=> 'Sind Sie sicher, dass Sie die folgende Datei oder Verzeichnis l&ouml;schen m&ouml;chten?',
	'MEDIA_CONFIRM_DELETE_FILE'	=> 'Sind Sie sicher, dass Sie die Datei \n\n{name}\n\nl&ouml;schen m&ouml;chten?',
	'MEDIA_CONFIRM_DELETE_DIR'	=> 'Sind Sie sicher, dass Sie das Verzeichnis \n\n{name}\n\nl&ouml;schen m&ouml;chten?',
	'MEDIA_DELETED_DIR' 		=> 'Das Verzeichnis wurde gel&ouml;scht.',
	'MEDIA_DELETED_FILE' 		=> 'Die Datei wurde gel&ouml;scht.',
	'MEDIA_DIR_ACCESS_DENIED' 	=> 'Verzeichnis existiert nicht oder Zugriff verweigert.',
	'MEDIA_DIR_DOES_NOT_EXIST' 	=> 'Verzeichnis existiert nicht!',
	'MEDIA_DIR_DOT_DOT_SLASH' 	=> 'Der Verzeichnisname darf nicht ../ enthalten!',
	'MEDIA_DIR_EXISTS' 			=> 'Ein Verzeichnis mit dem angegebenen Namen existiert bereits.',
	'MEDIA_DIR_MADE' 			=> 'Das Verzeichnis wurde erfolgreich angelegt.',
	'MEDIA_DIR_NOT_MADE' 		=> 'Das Verzeichnis konnte nicht angelegt werden.',
	'MEDIA_FILE_EXISTS' 		=> 'Eine Datei mit dem angegebenen Namen existiert bereits.',
	'MEDIA_FILE_NOT_FOUND' 		=> 'Die Datei konnte nicht gefunden werden.',
	'MEDIA_NAME_DOT_DOT_SLASH' 	=> 'Der Name darf nicht ../ enthalten!',
	'MEDIA_NAME_INDEX_PHP' 		=> 'Der Dateiname index.php kann nicht verwendet werden.',
	'MEDIA_NONE_FOUND' 			=> 'Keine Dateien im aktuellen Verzeichnis',
	'MEDIA_RENAMED' 			=> 'Das Umbenennen war erfolgreich',
	'MEDIA_SINGLE_UPLOADED' 	=> 'Datei wurde erfolgreich &uuml;bertragen',
	'MEDIA_TARGET_DOT_DOT_SLASH' => 'Der Name des Zielverzeichnisses darf nicht ../ enthalten',
	'MEDIA_UPLOADED' 			=> 'Dateien wurden erfolgreich &uuml;bertragen',
	'MOD_MISSING_PARTS_NOTICE'	=> 'Installation vom Modul "%s" fehlgeschlagen, eine oder mehrere der folgenden Variablen fehlen:<br />module_directory<br />module_name<br />module_version<br />module_author<br />module_license<br />module_guid<br />module_function',
	'MOD_FORM_EXCESS_SUBMISSIONS' => 'Dieses Formular wurde zu oft aufgerufen. Bitte versuchen Sie es in einer Stunde noch einmal.',
'MOD_FORM_INCORRECT_CAPTCHA' => 'Die eingegebene Pr&uuml;fziffer stimmt nicht &uuml;berein. Wenn Sie Probleme mit dem Lesen der Pr&uuml;fziffer haben, bitte schreiben Sie eine E-Mail an uns: <a href="mailto:'.SERVER_EMAIL.'">'.SERVER_EMAIL.'</a>',
	'MOD_FORM_REQUIRED_FIELDS' 	=> 'Bitte folgende Angaben erg&auml;nzen',
	'PAGES_ADDED' 				=> 'Die Seite wurde erfolgreich hinzugef&uuml;gt',
	'PAGES_ADDED_HEADING' 		=> 'Seitenkopf erfolgreich hinzugef&uuml;gt',
	'PAGES_BLANK_MENU_TITLE' 	=> 'Bitte geben Sie einen Men&uuml;titel ein',
	'PAGES_BLANK_PAGE_TITLE' 	=> 'Bitte geben Sie einen Titel f&uuml;r die Seite ein',
	'PAGES_CANNOT_CREATE_ACCESS_FILE' => 'Beim Anlegen der Zugangsdatei im Seitenverzeichnis (page) ist ein Fehler aufgetreten (Ungen&uuml;gende Zugangsrechte)',
	'PAGES_CANNOT_DELETE_ACCESS_FILE' => 'Beim L&ouml;schen der Zugangsdatei im Seitenverzeichnis (page) ist ein Fehler aufgetreten (Ungen&uuml;gende Zugangsrechte)',
	'PAGES_CANNOT_REORDER' 		=> 'Bei der Zusammenstellung der Seite ist ein Fehler aufgetreten',
	'PAGES_DELETED' 			=> 'Die Seite wurde erfolgreich gel&ouml;scht',
	'PAGES_DELETE_CONFIRM' 		=> 'Sind Sie sicher, dass Sie die ausgew&auml;hlte Seite &raquo;%s&laquo; l&ouml;schen m&ouml;chten',
	'PAGES_INSUFFICIENT_PERMISSIONS' => 'Sie haben keine Berechtigung, diese Seite zu &auml;ndern',
	'PAGES_INTRO_EMPTY' 		=> 'Bitte Content einf&uuml;gen, eine leere Introseite kann nicht gespeichert werden.',
	'PAGES_INTRO_LINK' 			=> 'Bitte klicken Sie HIER um die Eingangsseite zu &auml;ndern',
	'PAGES_INTRO_NOT_WRITABLE' 	=> 'Es konnte nicht in die Datei intro.php im Seitenverzeichnis (page) geschrieben werden (ungen&uuml;gende Zugangsrechte)',
	'PAGES_INTRO_SAVED' 		=> 'Eingangsseite wurde erfolgreich gespeichert',
	'PAGES_LAST_MODIFIED' 		=> 'Letzte &Auml;nderung:',
	'PAGES_NOT_FOUND' 			=> 'Die Seite konnte nicht gefunden werden',
	'PAGES_NOT_SAVED' 			=> 'Beim Speichern der Seite ist ein Fehler aufgetreten',
	'PAGES_PAGE_EXISTS' 		=> 'Eine Seite mit einem &auml;hnlichen oder demselben Titel existiert bereits',
	'PAGES_REORDERED' 			=> 'Die Seite wurde erfolgreich neu zusammengestellt',
	'PAGES_RESTORED' 			=> 'Die Seite wurde erfolgreich wiederhergestellt',
	'PAGES_RETURN_TO_PAGES' 	=> 'Zur&uuml;ck zum Seitenmen&uuml;',
	'PAGES_SAVED' 				=> 'Die Seite wurde erfolgreich gespeichert',
	'PAGES_SAVED_SETTINGS' 		=> 'Die Seiteneinstellungen wurden erfolgreich gespeichert',
	'PAGES_SECTIONS_PROPERTIES_SAVED' => 'Einstellungen f&uuml;r diesen Abschnitt erfolgreich gespeichert',
	'PREFERENCES_CURRENT_PASSWORD_INCORRECT' => 'Das alte Passwort, das Sie angegeben haben, ist ung&uuml;ltig',
	'PREFERENCES_DETAILS_SAVED' => 'Pers&ouml;nliche Daten wurden erfolgreich gespeichert',
	'PREFERENCES_EMAIL_UPDATED' => 'E-Mail Einstellung ge&auml;ndert',
	'PREFERENCES_INVALID_CHARS' => 'Es wurden ung&uuml;ltige Zeichen f&uuml;r des Passwort verwendet, g&uuml;ltig sind: a-z\A-Z\0-9\_\-\!\#\*\+',
	'PREFERENCES_PASSWORD_CHANGED' => 'Das Passwort wurde erfolgreich ge&auml;ndert',
	'RECORD_MODIFIED_FAILED' 	=> '&Auml;nderung des Datensatzes ist fehlgeschlagen.',
	'RECORD_MODIFIED_SAVED' 	=> 'Ge&auml;nderter Datensatz wurde erfolgreich aktualisiert.',
	'RECORD_NEW_FAILED' 		=> 'Hinzuf&uuml;gen eines neuen Datensatzes ist fehlgeschlagen.',
	'RECORD_NEW_SAVED' 			=> 'Neuer Datensatz wurde erfolgreich hinzugef&uuml;gt.',
	'SETTINGS_MODE_SWITCH_WARNING' => 'Bitte beachten Sie: Wenn Sie dieses Feld anklicken, werden alle ungespeicherten &Auml;nderungen zur&uuml;ckgesetzt',
	'SETTINGS_SAVED' 			=> 'Die Optionen wurden erfolgreich gespeichert',
	'SETTINGS_UNABLE_OPEN_CONFIG' => 'Konfigurationsdatei konnte nicht ge&ouml;ffnet werden',
	'SETTINGS_UNABLE_WRITE_CONFIG' => 'Die Konfigurationsdatei konnte nicht geschrieben werden',
	'SETTINGS_WORLD_WRITEABLE_WARNING' => 'Bitte beachten Sie: Dies wird nur zu Testzwecken empfohlen',
	'SIGNUP2_ADMIN_INFO' 		=> '
Es wurde ein neuer User regisriert.

Username: {LOGIN_NAME}
UserId: {LOGIN_ID}
E-Mail: {LOGIN_EMAIL}
IP-Adresse: {LOGIN_IP}
Anmeldedatum: {SIGNUP_DATE}
----------------------------------------
Diese E-Mail wurde automatisch erstellt!

',
	'SIGNUP2_BODY_LOGIN_FORGOT' => '
Hallo {LOGIN_DISPLAY_NAME},

Sie erhalten diese E-Mail, weil sie ein neues Passwort angefordert haben.

Ihre neuen Logindaten f&uuml;r {LOGIN_WEBSITE_TITLE} lauten:

Benutzername: {LOGIN_NAME}
Passwort: {LOGIN_PASSWORD}

Das bisherige Passwort wurde durch das neue Passwort oben ersetzt.

Sollten Sie kein neues Kennwort angefordert haben, l&ouml;schen Sie bitte diese E-Mail.

Mit freundlichen Gr&uuml;ssen
----------------------------------------
Diese E-Mail wurde automatisch erstellt!
',



	'SIGNUP2_BODY_LOGIN_INFO' => '
Hallo {LOGIN_DISPLAY_NAME},

Herzlich willkommen bei \'{LOGIN_WEBSITE_TITLE}\'

Ihre Logindaten f&uuml;r \'{LOGIN_WEBSITE_TITLE}\' lauten:
Benutzername: {LOGIN_NAME}
Passwort: {LOGIN_PASSWORD}

Vielen Dank f&uuml;r Ihre Registrierung

Wenn Sie dieses E-Mail versehentlich erhalten haben, l&ouml;schen Sie bitte diese E-Mail.
----------------------------------------
Diese E-Mail wurde automatisch erstellt!
',

	'SIGNUP2_SUBJECT_LOGIN_INFO' => 'Deine LEPTON Logindaten ...',
	'SIGNUP_NO_EMAIL' 			=> 'Bitte geben Sie Ihre E-Mail Adresse an',
	'START_CURRENT_USER' 		=> 'Sie sind momentan angemeldet als:',
	'START_INSTALL_DIR_EXISTS' 	=> 'Das Installations-Verzeichnis "/install" existiert noch! Dies stellt ein Sicherheitsrisiko dar. Bitte l&ouml;schen.',
	'START_WELCOME_MESSAGE' 	=> 'Willkommen in der Lepton Verwaltung',
	'SYSTEM_FUNCTION_DEPRECATED'=> 'Die Funktion <b>%s</b> ist veraltet, verwenden Sie die aktuelle Funktion <b>%s</b>!',
	'SYSTEM_FUNCTION_NO_LONGER_SUPPORTED' => 'Die Funktion <b>%s</b> ist veraltet und wird nicht mehr unterst&uuml;tzt!',
	'SYSTEM_SETTING_NO_LONGER_SUPPORTED' => 'Die Einstellung <b>%s</b> wird nicht mehr unterst&uuml;tzt und deshalb ignoriert!',
	'TEMPLATES_CHANGE_TEMPLATE_NOTICE' => 'Bitte beachten Sie: Um eine andere Designvorlage auszuw&auml;hlen, benutzen Sie den Bereich "Optionen"',
	'TEMPLATES_MISSING_PARTS_NOTICE' => 'Template Installation fehlgeschlagen, ein oder mehrere der folgenden Variablen fehlen:<br />template_directory<br />template_name<br />template_version<br />template_author<br />template_license<br />template_function ("theme" oder "template")',
	'USERS_ADDED' 				=> 'Der Benutzer wurde erfolgreich hinzugef&uuml;gt',
	'USERS_CANT_SELFDELETE' 	=> 'Funktion abgelehnt, Sie k&ouml;nnen sich nicht selbst l&ouml;schen!',
	'USERS_CHANGING_PASSWORD' 	=> 'Bitte beachten Sie: Sie sollten in die obigen Felder nur Werte eingeben, wenn Sie das Passwort dieses Benutzers &auml;ndern m&ouml;chten',
	'USERS_CONFIRM_DELETE' 		=> 'Sind Sie sicher, dass Sie den ausgew&auml;hlten Benutzer l&ouml;schen m&ouml;chten?',
	'USERS_DELETED' 			=> 'Der Benutzer wurde erfolgreich gel&ouml;scht',
	'USERS_EMAIL_TAKEN' 		=> 'Die angegebene E-Mail Adresse wird bereits verwendet',
	'USERS_INVALID_EMAIL' 		=> 'Die angegebene E-Mail Adresse ist ung&uuml;ltig',
	'USERS_NAME_INVALID_CHARS' 	=> 'Es wurden ung&uuml;ltige Zeichen f&uuml;r den Benutzernamen verwendet',
	'USERS_NO_GROUP' 			=> 'Es wurde keine Gruppe ausgew&auml;hlt',
	'USERS_PASSWORD_MISMATCH' 	=> 'Das angegebene Passwort ist ung&uuml;ltig',
	'USERS_PASSWORD_TOO_SHORT' 	=> 'Das eingegebene Passwort war zu kurz',
	'USERS_SAVED' 				=> 'Der Benutzer wurde erfolgreich gespeichert',
	'USERS_USERNAME_TAKEN' 		=> 'Der angegebene Benutzername wird bereits verwendet',
	'USERS_USERNAME_TOO_SHORT' 	=> 'Der eingegebene Benutzername war zu kurz'
); // $MESSAGE

$OVERVIEW = array(
	'ADMINTOOLS' 				=> 'Zugriff auf die Lepton Verwaltungsprogramme...',
	'GROUPS' 					=> 'Verwaltung von Gruppen und Ihrer Zugangsberechtigungen...',
	'HELP' 						=> 'Noch Fragen? Hier finden Sie Antworten',
	'LANGUAGES' 				=> 'Sprachen verwalten...',
	'MEDIA' 					=> 'Verwaltung der im Medienordner gespeicherten Dateien...',
	'MODULES' 					=> 'Verwaltung der Lepton Module...',
	'PAGES' 					=> 'Verwaltung Ihrer Webseiten...',
	'PREFERENCES' 				=> '&Auml;ndern pers&ouml;nlicher Einstellungen wie E-Mail Adresse, Passwort, usw.... ',
	'SETTINGS' 					=> '&Auml;ndern der Optionen f&uuml;r Lepton...',
	'START' 					=> '&Uuml;berblick &uuml;ber die Verwaltung',
	'TEMPLATES' 				=> '&Auml;ndern des Designs Ihrer Webseite mit Vorlagen...',
	'USERS' 					=> 'Verwaltung von Benutzern, die sich in Lepton einloggen d&uuml;rfen...',
	'VIEW' 						=> 'Ansicht Ihrer Webseite in einem neuen Fenster...'
); // OVERVIEW

/*
 * Create the old languages definitions only if specified in settings
 */
if (ENABLE_OLD_LANGUAGE_DEFINITIONS) {
	foreach ($MESSAGE as $key => $value) {
		$x = strpos($key, '_');
		$MESSAGE[substr($key, 0, $x)][substr($key, $x+1)] = $value;
	}
}
?>