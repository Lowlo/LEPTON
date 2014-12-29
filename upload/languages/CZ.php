<?php

/**
 * This file is part of LEPTON Core, released under the GNU GPL
 * Please see LICENSE and COPYING files in your package for details, specially for terms and warranties.
 *
 * NOTICE:LEPTON CMS Package has several different licenses.
 * Please see the individual license in the header of each single file or info.php of modules and templates.
 *
 * @author          Website Baker Project, LEPTON Project
 * @copyright       2004-2010 Website Baker Project
 * @copyright       2010-2014 LEPTON Project
 * @link            http://www.LEPTON-cms.org
 * @license         http://www.gnu.org/licenses/gpl.html
 * @license_terms   please see LICENSE and COPYING files in your package
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
$language_code = 'CZ';
$language_name = 'Czech';
$language_version = '1.0';
$language_platform = '1.0.x';
$language_author = 'Ryan Djurovich, Aleš Kuklínek';
$language_license = 'GNU General Public License';
$language_guid = 'b6bb0738-b323-46b9-924e-3d068413653a';

$MENU = array(
	'ACCESS' 				=> 'Přístupová práva',
	'ADDON' 				=> 'Add-on',
	'ADDONS' 				=> 'Add-ony',
	'ADMINTOOLS' 			=> 'Admin-Tools',
	'BREADCRUMB' 			=> 'You are here: ',
	'FORGOT' 				=> 'Retrieve Login Details',
	'GROUP' 				=> 'Skupina',
	'GROUPS' 				=> 'Skupiny',
	'HELP' 					=> 'Nápověda',
	'LANGUAGES' 			=> 'Jazyky',
	'LOGIN' 				=> 'Login',
	'LOGOUT' 				=> 'Odhlásit',
	'MEDIA' 				=> 'Média',
	'MODULES' 				=> 'Moduly',
	'PAGES' 				=> 'Stránky',
	'PREFERENCES' 			=> 'Možnosti',
	'SETTINGS' 				=> 'Nastavení',
	'START' 				=> 'Start',
	'TEMPLATES' 			=> 'Šablony',
	'USERS' 				=> 'Uživatelé',
	'VIEW' 					=> 'Náhled',
	'SERVICE'				=> 'Servis'
); // $MENU

$TEXT = array(
	'ACCOUNT_SIGNUP' 		=> 'Přihlášení k účtu',
	'ACTION_NOT_SUPPORTED'	=> 'Akce není podporována',
	'ACTIONS' 				=> 'Akce',
	'ACTIVE' 				=> 'Aktivní',
	'ADD' 					=> 'Přidat',
	'ADDON' 				=> 'Add-On',
	'ADD_SECTION' 			=> 'Přidat sekci',
	'ADMIN' 				=> 'Admin',
	'ADMINISTRATION' 		=> 'Administrace',
	'ADMINISTRATION_TOOL' 	=> 'Nástroje administrátora',
	'ADMINISTRATOR' 		=> 'Administrator',
	'ADMINISTRATORS' 		=> 'Administrátoři',
	'ADVANCED' 				=> 'Pokročilé',
	'ALLOWED_FILETYPES_ON_UPLOAD' => 'Povolené typy souborů k uploadu',
	'ALLOWED_VIEWERS' 		=> 'Povoleni vidět',
	'ALLOW_MULTIPLE_SELECTIONS' => 'Povolení multi-sekce',
	'ALL_WORDS' 			=> 'Všechna slova',
	'ANCHOR' 				=> 'Kotva',
	'ANONYMOUS' 			=> 'Anonym',
	'ANY_WORDS' 			=> 'Jakékoliv slova',
	'APP_NAME' 				=> 'Jméno aplikace',
	'ARE_YOU_SURE' 			=> 'Opravdu jste si jistí?',
	'AUTHOR' 				=> 'Autor',
	'BACK' 					=> 'Zpět',
	'BACKUP' 				=> 'Záloha',
	'BACKUP_ALL_TABLES' 	=> 'Zálohovat všechny tabulky v databázi',
	'BACKUP_DATABASE' 		=> 'Záloha databáze',
	'BACKUP_MEDIA' 			=> 'Záloha médií',
	'BACKUP_WB_SPECIFIC' 	=> 'Zálohovat pouze WB specifické tabulky',
	'BASIC' 				=> 'Základ',
	'BLOCK' 				=> 'Blok',
	'BACKEND_TITLE'	=>	'Backendtitle',
	'CALENDAR' 				=> 'Kalendář',
	'CANCEL' 				=> 'Zrušit',
	'CAN_DELETE_HIMSELF' 	=> 'Chcete odtranit sám sebe',
	'CAPTCHA_VERIFICATION' 	=> 'Captcha ověření',
	'CAP_EDIT_CSS' 			=> 'Editovat CSS',
	'CHANGE' 				=> 'Změnit',
	'CHANGES' 				=> 'Změny',
	'CHANGE_SETTINGS' 		=> 'Změna nastevení',
	'CHARSET' 				=> 'Charset',
	'CHECKBOX_GROUP' 		=> 'Checkbox Group',
	'CLOSE' 				=> 'Zavřít',
	'CODE' 					=> 'Kód',
	'CODE_SNIPPET' 			=> 'Code-snippet',
	'COLLAPSE' 				=> 'Méně',
	'COMMENT' 				=> 'Kommentář',
	'COMMENTING' 			=> 'Komentování',
	'COMMENTS' 				=> 'Komentáře',
	'CREATE_FOLDER' 		=> 'Vytvořit složku',
	'CURRENT' 				=> 'Aktuální',
	'CURRENT_FOLDER' 		=> 'Aktuální složka',
	'CURRENT_PAGE' 			=> 'Aktuální stránka',
	'CURRENT_PASSWORD' 		=> 'Aktuální heslo',
	'CUSTOM' 				=> 'Custom',
	'DATABASE' 				=> 'Databáze',
	'DATE' 					=> 'Datum',
	'DATE_FORMAT' 			=> 'Formát data',
	'DEFAULT' 				=> 'Defaultní',
	'DEFAULT_CHARSET' 		=> 'Defaultní Charset',
	'DEFAULT_TEXT' 			=> 'Defaultní text',
	'DELETE' 				=> 'Vymazat',
	'DELETED' 				=> 'Smazáno',
	'DELETE_DATE' 			=> 'Smazat datum',
	'DELETE_ZIP' 			=> 'Smazat zip archív po rozbalení',
	'DESCRIPTION' 			=> 'Popisek',
	'DESIGNED_FOR' 			=> 'Vytvořeno pro',
	'DIRECTORIES' 			=> 'Adresáře',
	'DIRECTORY_MODE' 		=> 'Réžim adresáře',
	'DISABLED' 				=> 'Zakázáno',
	'DISPLAY_NAME' 			=> 'Zobrzované jméno',
	'EMAIL' 				=> 'Email',
	'EMAIL_ADDRESS' 		=> 'Emailová adresa',
	'EMPTY_TRASH' 			=> 'Prázdný koš',
	'ENABLE_JAVASCRIPT'		=> "Prosím povolte JavaScript k použití tohoto formuláře.",
	'ENABLED' 				=> 'Povoleno',
	'END' 					=> 'Konec',
	'ERROR' 				=> 'Chyba',
	'EXACT_MATCH' 			=> 'Přesná schoda',
	'EXECUTE' 				=> 'Provést',
	'EXPAND' 				=> 'Více',
	'EXTENSION' 			=> 'Rozšíření',
	'FIELD' 				=> 'Pole',
	'FILE' 					=> 'Soubor',
	'FILES' 				=> 'soubory',
	'FILESYSTEM_PERMISSIONS' => 'Souborový systém oprávnění',
	'FILE_MODE' 			=> 'File Mode',
	'FINISH_PUBLISHING' 	=> 'Dokončit publikování',
	'FOLDER' 				=> 'Složka',
	'FOLDERS' 				=> 'Složky',
	'FOOTER' 				=> 'Footer',
	'FORGOTTEN_DETAILS' 	=> 'Zapoměnli jste detaily?',
	'FORGOT_DETAILS' 		=> 'Zapomenuté přihlašovací údaje?',
	'FROM' 					=> 'Od',
	'FRONTEND' 				=> 'Front-end',
	'FULL_NAME' 			=> 'Celé jméno',
	'FUNCTION' 				=> 'Funkce',
	'GROUP' 				=> 'Skupina',
	'HEADER' 				=> 'Hlavička',
	'HEADING' 				=> 'Nadpisy',
	'HEADING_CSS_FILE' 		=> 'Aktualní modul souboru: ',
	'HEIGHT' 				=> 'Výška',
	'HELP_LEPTOKEN_LIFETIME'		=> 'sekund, 0 znamená žádná CSRF ocharana!',
	'HELP_MAX_ATTEMPTS'		=> 'Pokud toto bude překročeno více pokusů pro přihlášení nebude povoleno.',
	'HIDDEN' 				=> 'Skrytá',
	'HIDE' 					=> 'Skrýt',
	'HIDE_ADVANCED' 		=> 'Skrýt pokročilé nastavení',
	'HOME' 					=> 'Domů',
	'HOMEPAGE_REDIRECTION' 	=> 'Přesměrování domovské stránky',
	'HOME_FOLDER' 			=> 'Personální složka',
	'HOME_FOLDERS' 			=> 'Personální složky',
	'HOST' 					=> 'Host',
	'ICON' 					=> 'Ikona',
	'IMAGE' 				=> 'Obrázek',
	'INLINE' 				=> 'In-line',
	'INSTALL' 				=> 'Instalovat',
	'INSTALLATION' 			=> 'Instalace',
	'INSTALLATION_PATH' 	=> 'Instalační Path',
	'INSTALLATION_URL' 		=> 'Instalační URL',
	'INSTALLED' 			=> 'instalováno',
	'INTRO' 				=> 'Domovská stránka',
	'INTRO_PAGE' 			=> 'Domovská stránka',
	'INVALID_SIGNS' 		=> 'musí začínat písmenem, nebo jste zadali nesprávný znak',
	'KEYWORDS' 				=> 'Klíčová slova',
	'LANGUAGE' 				=> 'Jazyk',
	'LAST_UPDATED_BY' 		=> 'Naposledy aktualizoval',
	'LENGTH' 				=> 'Dělka',
	'LEPTOKEN_LIFETIME'		=> 'Leptoken Lifetime',
	'LEVEL' 				=> 'Level',
	'LIBRARY'				=> 'Knihovna',
	'LICENSE'				=> 'Odkaz',
	'LINUX_UNIX_BASED' 		=> 'založeno na Linux/Unix',
	'LIST_OPTIONS' 			=> 'List Options',
	'LOGGED_IN' 			=> 'Logged-In',
	'LOGIN' 				=> 'Login',
	'LONG' 					=> 'Délka',
	'LONG_TEXT' 			=> 'Dlouhý text',
	'LOOP' 					=> 'Smyčka',
	'MAIN' 					=> 'Halvní',
	'MANAGE' 				=> 'Spravovat',
	'MANAGE_GROUPS' 		=> 'Správa skupin',
	'MANAGE_USERS' 			=> 'Spravovat uživatele',
	'MATCH' 				=> 'Shoda',
	'MATCHING' 				=> 'Matching',
	'MAX_ATTEMPTS'		=> 'Špatné pokusy k přihlášení',
	'MAX_EXCERPT' 			=> 'Max. povoleno řádků',
	'MAX_SUBMISSIONS_PER_HOUR' => 'Max. ODESLÁNÍ za hodinu',
	'MEDIA_DIRECTORY' 		=> 'Adresář médií',
	'MENU' 					=> 'Menu',
	'MENU_ICON_0' 			=> 'Menu-Icon normal',
	'MENU_ICON_1' 			=> 'Menu-Icon hover',
	'MENU_TITLE' 			=> 'Titulek Menu',
	'MESSAGE' 				=> 'Zpráva',
	'MODIFY' 				=> 'Změnit',
	'MODIFY_CONTENT' 		=> 'Změna obsahu',
	'MODIFY_SETTINGS' 		=> 'Změna nastavení',
	'MODULE_ORDER' 			=> 'Module-order for searching',
	'MODULE_PERMISSIONS' 	=> 'Přístup k modulům',
	'MORE' 					=> 'Více',
	'MOVE_DOWN' 			=> 'Posunout dolů',
	'MOVE_UP' 				=> 'Posunout nahoru',
	'MULTIPLE_MENUS' 		=> 'Multiple Menus',
	'MULTISELECT' 			=> 'Multi-select',
	'NAME' 					=> 'Jméno',
	'NEED_CURRENT_PASSWORD' => 'potvrzení pomocí akt. hesla',
	'NEED_PASSWORD_TO_CONFIRM' => 'Prosím potvrďte změnu aktuálním heslem do systému',
	'NEED_TO_LOGIN' 		=> 'Potřebujete se přihlásit?',
	'NEW_PASSWORD' 			=> 'Nové heslo',
	'NEW_USER_HINT'			=> 'Minimální délka pro uživatelské jméno: %d znakům. Minimální délka pro heslo: %d znaků!',
	'NEW_WINDOW' 			=> 'Nové okno',
	'NEXT' 					=> 'Další',
	'NEXT_PAGE' 			=> 'Další strana',
	'NO' 					=> 'Ne',
	'NO_LEPTON_ADDON'  => 'Tento addon nemůže být použit LEPTON',
	'NONE' 					=> 'Žádná',
	'NONE_FOUND' 			=> 'Nic nenalezeno',
	'NOT_FOUND' 			=> 'Nenalezeno',
	'NOT_INSTALLED' 		=> 'nenainstalováno',
	'NO_RESULTS' 			=> 'Žádné výsledky',
	'OF' 					=> 'Of',
	'ON' 					=> 'On',
	'OPEN' 					=> 'Otevřít',
	'OPTION' 				=> 'Volby',
	'OTHERS' 				=> 'Ostatní',
	'OUT_OF' 				=> 'Mimo',
	'OVERWRITE_EXISTING' 	=> 'Přepsat existující',
	'PAGE' 					=> 'Strana',
	'PAGES_DIRECTORY' 		=> 'Adresa stránek',
	'PAGES_PERMISSION' 		=> 'Oprávnění stránky',
	'PAGES_PERMISSIONS' 	=> 'Oprávnění stránek',
	'PAGE_EXTENSION' 		=> 'Rozšíření stránky',
	'PAGE_ICON' 			=> 'Page Image',
	'PAGE_ID'      => 'ID stránky',
	'PAGE_LANGUAGES' 		=> 'Jazyky stránek',
	'PAGE_LEVEL_LIMIT' 		=> 'Limit úrovně stránek',
	'PAGE_SPACER' 			=> 'Oddělovač stránek',
	'PAGE_TITLE' 			=> 'Titulek stránky',
	'PAGE_TRASH' 			=> 'Koš stránek',
	'PARENT' 				=> 'Rodič',
	'PASSWORD' 				=> 'Heslo',
	'PATH' 					=> 'Path',
	'PHP_ERROR_LEVEL' 		=> 'PHP CHYBA Reporting Level',
	'PLEASE_LOGIN' 			=> 'Prosím přihlásit',
	'PLEASE_SELECT' 		=> 'Prosím vyberte',
	'POST' 					=> 'Příspěvek',
	'POSTS_PER_PAGE' 		=> 'Příspěvek na stránku',
	'POST_FOOTER' 			=> 'Post Footer',
	'POST_HEADER' 			=> 'Post Header',
	'PREVIOUS' 				=> 'Předchozí',
	'PREVIOUS_PAGE' 		=> 'Předchozí stránka',
	'PRIVATE' 				=> 'Soukromá',
	'PRIVATE_VIEWERS' 		=> 'Private Viewers',
	'PROFILES_EDIT' 		=> 'Změnit profil',
	'PUBLIC' 				=> 'Veřejná',
	'PUBL_END_DATE' 		=> 'Konečné datum',
	'PUBL_START_DATE' 		=> 'Počáteční datum',
	'RADIO_BUTTON_GROUP' 	=> 'Radio Button Group',
	'READ' 					=> 'Číst',
	'READ_MORE' 			=> 'Číst více',
	'REDIRECT_AFTER' 		=> 'Přesměrování po',
	'REGISTERED' 			=> 'Pro registrované',
	'REGISTERED_VIEWERS' 	=> 'Registered Viewers',
	'REGISTERED_CONTENT'	=> 'Pouze registrovaní uživatelé mají přístup k tomuto obsahu',
	'RELOAD' 				=> 'Obnovit',
	'REMEMBER_ME' 			=> 'Zapamatuj si mě',
	'RENAME' 				=> 'Přejmenovat',
	'RENAME_FILES_ON_UPLOAD' => 'Přejmenovat soubor po Uploadu',
	'REQUIRED' 				=> 'Povinné',
	'REQUIREMENT' 			=> 'Požadavek',
	'RESET' 				=> 'Resetovat',
	'RESIZE' 				=> 'Změnit velikost',
	'RESIZE_IMAGE_TO' 		=> 'Změnit velikost',
	'RESTORE' 				=> 'Onovit',
	'RESTORE_DATABASE' 		=> 'Obnovit databázi',
	'RESTORE_MEDIA' 		=> 'Obnovit Media',
	'RESULTS' 				=> 'Výsledky',
	'RESULTS_FOOTER' 		=> 'Footer výsledků',
	'RESULTS_FOR' 			=> 'Výsledky pro',
	'RESULTS_HEADER' 		=> 'Hlavička výsledků',
	'RESULTS_LOOP' 			=> 'Smyčky výsledků',
	'RETYPE_NEW_PASSWORD' 	=> 'Znovu nové heslo',
	'RETYPE_PASSWORD' 		=> 'Heslo znovu',
	'SAME_WINDOW' 			=> 'Stejné okno',
	'SAVE' 					=> 'Uložit',
	'SEARCH' 				=> 'Hledej',
	'SEARCH_FOR'  => 'Hledat dle',
	'SEARCHING' 			=> 'Hledání',
	'SECTION' 				=> 'Sekce',
	'SECTION_BLOCKS' 		=> 'Blok sekce',
	'SECTION_ID' => 'ID sekce',
	'SEC_ANCHOR' 			=> 'Section-Anchor text',
	'SELECT_BOX' 			=> 'Select Box',
	'SEND_DETAILS' 			=> 'Odeslat detaily',
	'SEPARATE' 				=> 'Oddělit',
	'SEPERATOR' 			=> 'Oddělovač',
	'SERVER_EMAIL' 			=> 'Emailový server',
	'SERVER_OPERATING_SYSTEM' => 'Serverový operační systém',
	'SESSION_IDENTIFIER' 	=> 'Identifikátor relace',
	'SETTINGS' 				=> 'Nastavení',
	'SHORT' 				=> 'Krátký',
	'SHORT_TEXT' 			=> 'Krátký text',
	'SHOW' 					=> 'Ukaž',
	'SHOW_ADVANCED' 		=> 'Zobrazit pokročilé nastavení',
	'SIGNUP' 				=> 'Sign-up',
	'SIZE' 					=> 'Velikost',
	'SMART_LOGIN' 			=> 'Chytrý Login',
	'START' 				=> 'Start',
	'START_PUBLISHING' 		=> 'Začít publikovat',
	'SUBJECT' 				=> 'Předmět',
	'SUBMISSIONS' 			=> 'Submissions',
	'SUBMISSIONS_STORED_IN_DATABASE' => 'Submissions uložerné v databázi',
	'SUBMISSION_ID' 		=> 'Submission ID',
	'SUBMITTED' 			=> 'Odesláno',
	'SUCCESS' 				=> 'V pořádku',
	'SYSTEM_DEFAULT' 		=> 'Systémová defaultní',
	'SYSTEM_PERMISSIONS' 	=> 'Přístup do systému',
	'TABLE_PREFIX' 			=> 'Table Prefix',
	'TARGET' 				=> 'Cíl',
	'TARGET_FOLDER' 		=> 'Cílová složka',
	'TEMPLATE' 				=> 'Šablona',
	'TEMPLATE_PERMISSIONS' 	=> 'Přístup k šablonám',
	'TEXT' 					=> 'Text',
	'TEXTAREA' 				=> 'Textarea',
	'TEXTFIELD' 			=> 'Textfield',
	'THEME' 				=> 'Admin-Šablona',
	'TIME' 					=> 'Čas',
	'TIMEZONE' 				=> 'Časová zóna',
	'TIME_FORMAT' 			=> 'Formát času',
	'TIME_LIMIT' 			=> 'Max. čas k získání modulů',
	'TITLE' 				=> 'Nadpis',
	'TO' 					=> 'To',
	'TOP_FRAME' 			=> 'Top Frame',
	'TRASH_EMPTIED' 		=> 'Koš vyprázdněn',
	'TXT_EDIT_CSS_FILE' 	=> 'Editujte CSS definici ve formuláři níže.',
	'TYPE' 					=> 'Typ',
	'UNINSTALL' 			=> 'Odinstalovat',
	'UNKNOWN' 				=> 'Neznámý',
	'UNLIMITED' 			=> 'Neomezený',
	'UNZIP_FILE' 			=> 'Nahrát a rozbalit zip archív',
	'UP' 					=> 'Nahoru',
	'UPGRADE' 				=> 'Upgrade',
	'UPLOAD_FILES' 			=> 'Nahrát soubor(y)',
	'URL' 					=> 'URL',
	'USER' 					=> 'Uživatel',
	'USERNAME' 				=> 'Uživatelské jméno',
	'USERS_ACTIVE' 			=> 'Uživatel je aktivní',
	'USERS_CAN_SELFDELETE' 	=> 'Uživatel může odstranit sám sebe',
	'USERS_CHANGE_SETTINGS' => 'Uživatel může změnit své vlastní nastavení',
	'USERS_DELETED' 		=> 'Uživatel je označkován jako smazaný',
	'USERS_FLAGS' 			=> 'User-Flags',
	'USERS_PROFILE_ALLOWED' => 'Uživatel může vytvořit rozšířený profil',
	'VERIFICATION' 			=> 'Ověření',
	'VERSION' 				=> 'Verze',
	'VIEW' 					=> 'Náhled',
	'VIEW_DELETED_PAGES' 	=> 'Ukázat smazané stránky',
	'VIEW_DETAILS' 			=> 'Ukázat detaily',
	'VISIBILITY' 			=> 'Viditelnost',
	'WBMAILER_DEFAULT_SENDER_MAIL' => 'Z emailu',
	'WBMAILER_DEFAULT_SENDER_NAME' => 'Jméno odesílatele',
	'WBMAILER_DEFAULT_SETTINGS_NOTICE' => 'Prosím specifikujte "FROM" adresu a "SENDER" jméno níže. Je doporučeno FROM adresu ve formátu: <strong>admin@yourdomain.com</strong>. Někteří poskytovatelé (např. <em>mail.com</em>) může emaily  z adresy jo <em>name@mail.com</em> zařadit do složky spam.<br /><br />Defaultní nastavení je pouze pro ukázku. Pokud Váš server podporuje <acronym title="Simple mail transfer protocol">SMTP</acronym>, můžete použít toto nastavení pro odeslané maily.',
	'WBMAILER_FUNCTION' 	=> 'Mail Routine',
	'WBMAILER_NOTICE' 		=> '<strong>SMTP Mailer Nastavení:</strong><br />Toto nastavení je vyžadováno pouze pokud  pokud posíláte emaily pomocí <acronym title="Simple mail transfer protocol">SMTP</acronym>. Pokud neznáte svého SMTP hosta nebo jsi nejste jisti s nastavením, jednosuše neměňte PHP nastavení: PHP MAIL.',
	'WBMAILER_PHP' 			=> 'PHP MAIL',
	'WBMAILER_SEND_TESTMAIL' => 'Poslat testovací eMail',
	'WBMAILER_SMTP' 		=> 'SMTP',
	'WBMAILER_SMTP_AUTH' 	=> 'SMTP Autentizace',
	'WBMAILER_SMTP_AUTH_NOTICE' => 'pouze aktivujte v případě, že SMTP hostitel požaduje autentizaci',
	'WBMAILER_SMTP_HOST' 	=> 'SMTP Host',
	'WBMAILER_SMTP_PASSWORD' => 'SMTP heslo',
	'WBMAILER_SMTP_USERNAME' => 'SMTP Uživatelské jméno',
  'WBMAILER_TESTMAIL_FAILED' => 'Testovací eMail nemohl být odeslán! Prosím zkontrolujte nastavení!',
	'WBMAILER_TESTMAIL_SUCCESS' => 'Testovací email byl v pořádku odeslán. Prosím zkontrolujet  vaši schránku.',
  'WBMAILER_TESTMAIL_TEXT' => 'This is the required test mail: php mailer is working',
	'WEBSITE' 				=> 'Website',
	'WEBSITE_DESCRIPTION' 	=> 'Popisek stránky',
	'WEBSITE_FOOTER' 		=> 'Footer webu',
	'WEBSITE_HEADER' 		=> 'Header webu',
	'WEBSITE_KEYWORDS' 		=> 'Klíčová slova',
	'WEBSITE_TITLE' 		=> 'Titulek webu',
	'WELCOME_BACK' 			=> 'Vítejte zpět',
	'WIDTH' 				=> 'Šířka',
	'WINDOW' 				=> 'Okno',
	'WINDOWS' 				=> 'Windows',
	'WORLD_WRITEABLE_FILE_PERMISSIONS' => 'Zapisovatelná přístupová práva',
	'WRITE' 				=> 'Napsat',
	'WYSIWYG_EDITOR' 		=> 'WYSIWYG Editor',
	'WYSIWYG_STYLE'	 		=> 'WYSIWYG Styl',
	'YES' 					=> 'Ano',
	'BASICS'	=> array(
		'day'		=> "den",		# day, singular
		'day_pl'	=> "dny",		# day, plural
		'hour'		=> "hodina", 		# hour, singular
		'hour_pl'	=> "hodiny",		# hour, plural
		'minute'	=> "minuta",	# minute, singular
		'minute_pl'	=> "minuty",	# minute, plural
	)
); // $TEXT

$HEADING = array(
	'ADDON_PRECHECK_FAILED' => 'Add-On požadavky nesplněny',
	'ADD_CHILD_PAGE' 		=> 'Přidat rodičovskou stránku',
	'ADD_GROUP' 			=> 'Přídat skupinu',
	'ADD_GROUPS' 			=> 'Přidat skupiny',
	'ADD_HEADING' 			=> 'Přidat nadpis',
	'ADD_PAGE' 				=> 'Přidat stránku',
	'ADD_USER' 				=> 'Přidat uživatele',
	'ADMINISTRATION_TOOLS' 	=> 'Admin nástroje',
	'BROWSE_MEDIA' 			=> 'Prohlížeč médií',
	'CREATE_FOLDER' 		=> 'Vytvoření složek',
	'DEFAULT_SETTINGS' 		=> 'Defaultní nastavení',
	'DELETED_PAGES' 		=> 'Vymazané stránky',
	'FILESYSTEM_SETTINGS' 	=> 'Nastavení souborového systému',
	'GENERAL_SETTINGS' 		=> 'Hlavní nastavení',
	'INSTALL_LANGUAGE' 		=> 'Nainstalovat jazyk',
	'INSTALL_MODULE' 		=> 'Nainstalovat modul',
	'INSTALL_TEMPLATE' 		=> 'Nainstalovat šablonu',
	'INVOKE_MODULE_FILES' 	=> 'Spustit modul souboru ručně',
	'LANGUAGE_DETAILS' 		=> 'Detail jazyku',
	'MANAGE_SECTIONS' 		=> 'Spravovat sekce',
	'MODIFY_ADVANCED_PAGE_SETTINGS' => 'Změnit pokročilé nastavení',
	'MODIFY_DELETE_GROUP' 	=> 'Změna/Smázání Skupin',
	'MODIFY_DELETE_PAGE' 	=> 'Přehled stránek',
	'MODIFY_DELETE_USER' 	=> 'Změna/Smázání uživatelů',
	'MODIFY_GROUP' 			=> 'Zěměnit skupinu',
	'MODIFY_GROUPS' 		=> 'Změnit skupiny',
	'MODIFY_INTRO_PAGE' 	=> 'Změnit Domovskou stránku',
	'MODIFY_PAGE' 			=> 'Úprava stránky',
	'MODIFY_PAGE_SETTINGS' 	=> 'Změna nastavení stránky',
	'MODIFY_USER' 			=> 'Správa uživatelů',
	'MODULE_DETAILS' 		=> 'Detail modulu',
	'MY_EMAIL' 				=> 'Můj Email',
	'MY_PASSWORD' 			=> 'Moje heslo',
	'MY_SETTINGS' 			=> 'Moje nastavení',
	'SEARCH_SETTINGS' 		=> 'Nastavení hledání',
	'SEARCH_PAGE' 			=> 'Search Page',
	'SECURITY_SETTINGS'		=> 'Nastavení bezpečnosti',
	'SERVER_SETTINGS' 		=> 'Nastavení serveru',
	'TEMPLATE_DETAILS' 		=> 'Detail šablony',
	'UNINSTALL_LANGUAGE' 	=> 'Odinstalovat jazyk',
	'UNINSTALL_MODULE' 		=> 'Odinstalovat modul',
	'UNINSTALL_TEMPLATE' 	=> 'Odinstalovt šablonu',
	'UPGRADE_LANGUAGE' 		=> 'jazyková registrace/aktualizování',
	'UPLOAD_FILES' 			=> 'Nahrávání souborů',
	'VISIBILITY' 			=> 'Viditelnost',
	'WBMAILER_SETTINGS' 	=> 'Nastavení Mailer'
); // $HEADING

$MESSAGE = array(
	'ADDON_ERROR_RELOAD' 	=> 'Chyba při aktualizaci Add-On informací.',
	'ADDON_GROUPS_MARKALL' => 'Označit / odznačit vše',
	'ADDON_LANGUAGES_RELOADED' => 'Jazyk byl aktualizován',
	'ADDON_MANUAL_FTP_LANGUAGE' => '<strong>POZOR!</strong> Z bezpečnostních důvodů nahrávání jazykových souborů  složka/languages/ pouze pomocí FTP a použijte Upgrade funkci pro registrování modulu.',
	'ADDON_MANUAL_FTP_WARNING' => 'Varování: Existující modulové databázové záznamy budou ztraceny.',
	'ADDON_MANUAL_INSTALLATION' => 'Když jsou moduly nahrávány přes FTP (nedoporučujeme), instalační funkce modulů <tt>instal</tt>, <tt>upgrade</tt> or <tt>odinastalovat</tt> nebudou vyknány automaticky. Tyto moduly nemusí pracovat v pořádku.<br /><br />Můžete spustit moduly níže, které jste nahráli pomocí FTP.',
	'ADDON_MANUAL_INSTALLATION_WARNING' => 'Varování: Existující modulové databázové záznamy budou ztraceny. Použijte poze pokud máte problém s přenosem skrze FTP.',
	'ADDON_MANUAL_RELOAD_WARNING' => 'Varování: Stávající položky modulu databáze se ztratí. ',
	'ADDON_MODULES_RELOADED' => 'Moduly byly obnoveny v pořádku',
	'ADDON_PRECHECK_FAILED' => 'Add-on instalace se nezdařila. Systém nesplňuje požadavky tohoto doplňku a proto se musíte přihlásit. Chcete-li doplněk fungoval ve vašem systému, prosím, opravit problémy shrnuty níže.',
	'ADDON_RELOAD' 			=> 'Aktualizace databáze s informacemi Add-on souborů (např. po FTP uploadu).',
	'ADDON_TEMPLATES_RELOADED' => 'Šablony byly obnoveny v pořádku',
	'ADMIN_INSUFFICIENT_PRIVELLIGES' => 'Nedostatečná priviliegia',
	'FORGOT_PASS_ALREADY_RESET' => 'Heslo nelze resetovat více než jednou za hodinu, je nám líto',
	'FORGOT_PASS_CANNOT_EMAIL' => 'Nelze odeslat heslo emailem, obraťte se na správce systému',
	'FORGOT_PASS_EMAIL_NOT_FOUND' => 'Vámi zadaný meil se nenachází v databázi serveru',
	'FORGOT_PASS_NO_DATA' 	=> 'Prosím, zadejte Vaši e-mailovou adresu',
	'FORGOT_PASS_PASSWORD_RESET' => 'Uživatelské jméno a heslo bylo odesláno na Vaši emailovou adresu',
	'FRONTEND_SORRY_NO_ACTIVE_SECTIONS' => 'Je nám líto, ale není žádný aktivní obsah pro zobrazení',
	'FRONTEND_SORRY_NO_VIEWING_PERMISSIONS' => 'Omlouváme se, ale nemáte povolení k prohlížení této stránky',
	'GENERIC_ALREADY_INSTALLED' => 'Již nainstalováno',
	'GENERIC_BAD_PERMISSIONS' => 'Nelze zapisovat do cílového adresáře',
	'GENERIC_CANNOT_UNINSTALL' => 'Nelze odinstalovat',
	'GENERIC_CANNOT_UNINSTALL_IN_USE' => 'Nelze odinstalovat: vybran soubor je používán',
	'GENERIC_CANNOT_UNINSTALL_IN_USE_TMPL' => '<br /><br />{{type}} <b>{{type_name}}</b> nelze odinstaloivat, protože je používán: {{pages}}.<br /><br />',
	'GENERIC_CANNOT_UNINSTALL_IN_USE_TMPL_PAGES' => 'tato stránka;tyto stránky',
	'GENERIC_CANNOT_UNINSTALL_IS_DEFAULT_TEMPLATE' => 'Nelze odinstalovat tuto šablonu <b>{{name}}</b>, protože je nastavena jako defaultní šablona!',
	'GENERIC_CANNOT_UNZIP' 	=> 'Nelze rozbali archiv',
	'GENERIC_CANNOT_UPLOAD' => 'Nelze nahrát soubor',
	'GENERIC_COMPARE' 		=> ' v pořádku',
	'GENERIC_ERROR_OPENING_FILE' => 'Chyba otevírání souboru.',
	'GENERIC_FAILED_COMPARE' => ' se nezdařilo',
	'GENERIC_FILE_TYPE' 	=> 'Vezměte prosím na vědomí, že soubor, který nahrávání musí být v následujícím formátu:',
	'GENERIC_FILE_TYPES' 	=> 'Vezměte prosím na vědomí, že soubor, který nahrávání musí být v jednom z následujících formátů:',
	'GENERIC_FILL_IN_ALL' 	=> 'Prosím, vraťte se zpět a vyplňte všechna pole',
	'GENERIC_INSTALLED' 	=> 'Nainstalováno úspěšně',
	'GENERIC_INVALID' 		=> 'Nahraný soubor je neplatný',
	'GENERIC_INVALID_ADDON_FILE' => 'Neplatný instalační soubor LEPTON. Zkontrolujte prosím soubor *. Formátu ZIP',
	'GENERIC_INVALID_LANGUAGE_FILE' => 'neplatný jazykový soubor LEPTONu. Podívejte se prosím do textového souboru.',
	'GENERIC_IN_USE' 		=> ' ale je použit ',
	'GENERIC_MODULE_VERSION_ERROR' => 'Modul není správně nainstalován!',
	'GENERIC_NOT_COMPARE' 	=> ' není možné',
	'GENERIC_NOT_INSTALLED' => 'Nenainstalováno',
	'GENERIC_NOT_UPGRADED' 	=> 'Aktualizace není možná',
	'GENERIC_PLEASE_BE_PATIENT' => 'Prosím buďte trpěliví, může to chvíli trvat.',
	'GENERIC_PLEASE_CHECK_BACK_SOON' => 'Prosím zkontrolujte to později...',
	'GENERIC_SECURITY_ACCESS'	=> 'Bezpečnost!!Přístup nepovolen',
	'GENERIC_SECURITY_OFFENSE'	=> 'Bezpečnost!! Ukládání dat bylo zamítnuto!!',
	'GENERIC_UNINSTALLED' 	=> 'V pořádku odinstalováno',
	'GENERIC_UPGRADED' 		=> 'Aktualizováno v pořádku',
	'GENERIC_VERSION_COMPARE' => 'Porovnání verzí',
	'GENERIC_VERSION_GT' 	=> 'Aktualizujte co nejdříve!',
	'GENERIC_VERSION_LT' 	=> 'Downgrade',
	'GENERIC_WEBSITE_UNDER_CONSTRUCTION' => 'Stránka je v rekonstrukci',
	'GROUPS_ADDED' 			=> 'Skupina byla v pořádku vytvořena',
	'GROUPS_CONFIRM_DELETE' => 'Opravdu chcete smazat truto skupinu (a uživatele v této skupině)?',
	'GROUPS_DELETED' => 'Skupina byla v pořádku vymazána',
	'GROUPS_GROUP_NAME_BLANK' => 'Jméno skupiny je prázdné',
	'GROUPS_GROUP_NAME_EXISTS' => 'Jméno skupiny je již použito',
	'GROUPS_NO_GROUPS_FOUND' => 'Žádná skupina nebyla nalezena',
	'GROUPS_SAVED' 			=> 'Skupina byla uložena v pořádku',
	'LANG_MISSING_PARTS_NOTICE' => 'Instalace jazyka se nezdařila, jeden (nebo více) z oproměnných chybí:<br />language_code<br />language_name<br />language_version<br />language_license',
	'LOGIN_AUTHENTICATION_FAILED' => 'Špatné jméno a heslo',
	'LOGIN_BOTH_BLANK' 		=> 'Zadejte níže uživatelské jméno a heslo',
	'LOGIN_PASSWORD_BLANK' 	=> 'prosím zadejte heslo',
	'LOGIN_PASSWORD_TOO_LONG' => 'Zadané heslo je příliš dlouhé',
	'LOGIN_PASSWORD_TOO_SHORT' => 'Zadané heslo je příliš krátké',
	'LOGIN_USERNAME_BLANK' 	=> 'Zadejte uživateslké jméno',
	'LOGIN_USERNAME_TOO_LONG' => 'Dodané uživatelské jméno je opříliš dlouhé',
	'LOGIN_USERNAME_TOO_SHORT' => 'Zadané jméno je příliš krátké',
	'MEDIA_BLANK_EXTENSION' => 'Nezadali jste příponu souboru',
	'MEDIA_BLANK_NAME' 		=> 'Nezadali jste uživatelské jméno',
	'MEDIA_CANNOT_DELETE_DIR' => 'Nemůžete smazat tuto složku',
	'MEDIA_CANNOT_DELETE_FILE' => 'Nemůžete smazat vybrané soubory',
	'MEDIA_CANNOT_RENAME' 	=> 'Přejmenováno v pořádku',
	'MEDIA_CONFIRM_DELETE' 	=> 'Opravdu chcete vymazat tento soubor a složky?',
	'MEDIA_CONFIRM_DELETE_FILE'	=> 'Opravdu chgcete vymazat tento soubor {name}?',
	'MEDIA_CONFIRM_DELETE_DIR'	=> 'Opravdu chcete vymazat tuto složku {name}?',
	'MEDIA_DELETED_DIR' 	=> 'Složka vymazána v pořádku',
	'MEDIA_DELETED_FILE' 	=> 'Soubor byl smazán v pořádku',
	'MEDIA_DIR_ACCESS_DENIED' => 'Zadaný název složky neexistuje nebo není povolen.',
	'MEDIA_DIR_DOES_NOT_EXIST' => 'Složka neexistuje',
	'MEDIA_DIR_DOT_DOT_SLASH' => 'NEMOHU ZAHRNOUT ../ ve jméně složky',
	'MEDIA_DIR_EXISTS' 		=> 'Název složky je již použit pro jinou složku',
	'MEDIA_DIR_MADE' 		=> 'Složka byla vytvořena v pořádku',
	'MEDIA_DIR_NOT_MADE' 	=> 'Nelze vytvořit složku',
	'MEDIA_FILE_EXISTS' 	=> 'Jméno souboru který jste zadali již existuje',
	'MEDIA_FILE_NOT_FOUND' 	=> 'Soubor nenalezen',
	'MEDIA_NAME_DOT_DOT_SLASH' => 'Nemohu zahrnout ../ ve jméně',
	'MEDIA_NAME_INDEX_PHP' 	=> 'Nelze použít index.php jako jméno souboru',
	'MEDIA_NONE_FOUND' 		=> 'Žádná média nebyla nalezena',
	'MEDIA_RENAMED' 		=> 'Přejmenování proběhlo v pořádku',
	'MEDIA_SINGLE_UPLOADED' => ' souor byl v pořádku nahrán',
	'MEDIA_TARGET_DOT_DOT_SLASH' => 'Nelze mít ../ ve stejné složce',
	'MEDIA_UPLOADED' 		=> ' soubory byly v prořádku nahrány',
	'MOD_MISSING_PARTS_NOTICE' => 'Instalace modulu "%s" se nezdařila, jeden (nebo více) z proměnných chybí:<br />module_directory<br />module_name<br />module_version<br />module_author<br />module_license<br />module_guid<br />module_function',
	'MOD_FORM_EXCESS_SUBMISSIONS' => 'Promiňte, tento formulář byl mockát odeslán během hodiny. Prosím zkuste to během další hodiny.',
	'MOD_FORM_INCORRECT_CAPTCHA' => 'Ověřovací kód (Captcha) který jste zadali je nesprávný. Pokud máte problém se čtením CATCHA, odešlete email: <a href="mailto:'.SERVER_EMAIL.'">'.SERVER_EMAIL.'</a>',
	'MOD_FORM_REQUIRED_FIELDS' => 'Musíte vložit detaily pro následující pole',
	'PAGES_ADDED' 			=> 'Stránka byla v pořádku vytvořena.',
	'PAGES_ADDED_HEADING' 	=> 'Nadpis strány vložen v pořádku',
	'PAGES_BLANK_MENU_TITLE' => 'Prosím vložte titulek menu',
	'PAGES_BLANK_PAGE_TITLE' => 'Prosím vložte titulek stránky',
	'PAGES_CANNOT_CREATE_ACCESS_FILE' => 'Chyba při vytvoření souboru díky privilegiím ve složce(page), (privilegia)',
	'PAGES_CANNOT_DELETE_ACCESS_FILE' => 'Chyba při mazání souboru díky privilegiím ve složce(page), (privilegia)',
	'PAGES_CANNOT_REORDER' 	=> 'Chyba při řazení stránek',
	'PAGES_DELETED' 		=> 'Stránka byla v pořádku vymazána',
	'PAGES_DELETE_CONFIRM' 	=> 'Chcete opravdu vymazat vybrané stránky &laquo;%s&raquo; (a všechny sub stránky)',
	'PAGES_INSUFFICIENT_PERMISSIONS' => 'Nemáte oprávnění ke změně tohoto souboru',
	'PAGES_INTRO_EMPTY' 		=> 'Prosím vložte obsah, prázdá titulní stránka nemůže být uložena.',
	'PAGES_INTRO_LINK' 		=> 'Klikněte ZDE k editaci titulní stránky',
	'PAGES_INTRO_NOT_WRITABLE' => 'Nelze zapisovat do page-directory/intro.php,',
	'PAGES_INTRO_SAVED' 	=> 'Domovská stránka byla uložena v pořádku',
	'PAGES_LAST_MODIFIED' 	=> 'Naposledy změnil',
	'PAGES_NOT_FOUND' 		=> 'Stránka nebyla nalezena',
	'PAGES_NOT_SAVED' 		=> 'Chyby při ukládání stránky',
	'PAGES_PAGE_EXISTS' 	=> 'Stránka se stejnm titulkem již existuje',
	'PAGES_REORDERED' 		=> 'Změns stránky proběhla v pořádku',
	'PAGES_RESTORED' 		=> 'Stránka byla v pořádku obnovena',
	'PAGES_RETURN_TO_PAGES' => 'Návrat na stránku',
	'PAGES_SAVED' 			=> 'Stránka byla v pořádku vytvořena',
	'PAGES_SAVED_SETTINGS' 	=> 'Nastavení stránky bylo uloženo v pořádku',
	'PAGES_SECTIONS_PROPERTIES_SAVED' => 'Nastavení sekcí bylo v pořádku uloženo',
	'PREFERENCES_CURRENT_PASSWORD_INCORRECT' => 'Aktuální heslo heslo, které jste zadali je nesprávné',
	'PREFERENCES_DETAILS_SAVED' => 'Detaily byly v pořádku aktualizovány',
	'PREFERENCES_EMAIL_UPDATED' => 'Email byl v pořádku aktualizován',
	'PREFERENCES_INVALID_CHARS' => 'Chybné znaky v hesle, validní znaky jsou: a-z\A-Z\0-9\_\-\!\#\*\+',
	'PREFERENCES_PASSWORD_CHANGED' => 'Heslo změněno v pořádku',
	'PREFERENCES_PASSWORD_MATCH' => 'Passwords do not match',	
	'RECORD_MODIFIED_FAILED' => 'Zaměna záznamu chybí.',
	'RECORD_MODIFIED_SAVED' => 'Změna záznamu byla v pořádku aktualizována.',
	'RECORD_NEW_FAILED' 	=> 'Vložení nového záznamu chybí.',
	'RECORD_NEW_SAVED' 		=> 'Nový záznam byl v pořádku vložen.',
	'SETTINGS_MODE_SWITCH_WARNING' => 'Prosíme pozor: Zmáčknutím tohoto tlačítka resetujete všechna neuložená nastavení',
	'SETTINGS_SAVED' 		=> 'Nastavení bylo v pořádku uloženo',
	'SETTINGS_UNABLE_OPEN_CONFIG' => 'Nelze otevřít konfigurační soubor',
	'SETTINGS_UNABLE_WRITE_CONFIG' => 'Nelze zapisovat do konfiguračního souboru',
	'SETTINGS_WORLD_WRITEABLE_WARNING' => 'Prosím pozor: toto je doporučeno pouze pro testovaní serveru',
	'SIGNUP2_ADMIN_INFO' 	=> '
Nový uživatel byl registrován.

Uživatelské jméno: {LOGIN_NAME}
UserId: {LOGIN_ID}
E-Mail: {LOGIN_EMAIL}
IP-Adresa: {LOGIN_IP}
Datum registrace: {SIGNUP_DATE}
----------------------------------------
Tato zpráva byla automaticky vygenerována!

',
	'SIGNUP2_BODY_LOGIN_FORGOT' => '
Ahoj {LOGIN_DISPLAY_NAME},

Tento mail byl odeslán díky \'forgot password\' funkcí, která byla spuštěna pro Váš účet.

Vaše nové \'{LOGIN_WEBSITE_TITLE}\' přihlašovací údaje:

Uživatel: {LOGIN_NAME}
Heslo: {LOGIN_PASSWORD}

Vaše heslo bylo obnoveno.
To znamená že staré heslo již nebude fungovat!
Pokud máte problém se přihlásit do systému
měli by jste kontaktovat admin team  \'{LOGIN_WEBSITE_TITLE}\'.
Prosím vymažde cache prohlížeče předtím než použijete nové heslo, aby jste zabránili nepříjemným problémům.

S pozdravem
------------------------------------
Tato zpráva byla automaticky vygenerována

',
	'SIGNUP2_BODY_LOGIN_INFO' => '
Hello {LOGIN_DISPLAY_NAME},

Vítejte v našem \'{LOGIN_WEBSITE_TITLE}\'.

Vaše \'{LOGIN_WEBSITE_TITLE}\' přihlašovací údaje:
Uživatelské jméno: {LOGIN_NAME}
Heslo: {LOGIN_PASSWORD}

S pozdravem

Prosíme:
pokud jste tento email s chybou smažte jej!
-------------------------------------
Tato zpráva byla automaticky generována!
',
	'SIGNUP2_SUBJECT_LOGIN_INFO' => 'Vaše přihlašovací údaje pro LEPTON...',
	'SIGNUP_NO_EMAIL' 		=> 'Musíte zadat emailovou adresu',
	'START_CURRENT_USER' 	=> 'Nyní jste přihlášen jako:',
	'START_INSTALL_DIR_EXISTS' => 'Upozornění. Instalační složka stále existuje!',
	'START_WELCOME_MESSAGE' => 'Vítejte v administraci LEPTONu',
	'SYSTEM_FUNCTION_DEPRECATED'=> 'Funkce <b>%s</b> nesouhlasí, použijte funkci <b>%s</b> namísto!',
	'SYSTEM_FUNCTION_NO_LONGER_SUPPORTED' => 'Nastavení <b>%s</b> není nadále podporováno a bude ignorováno!',
	'TEMPLATES_CHANGE_TEMPLATE_NOTICE' => 'Poznámka: Pokud chcete změnit šablonu musíte jít do sekce nastavení',
	'TEMPLATES_MISSING_PARTS_NOTICE' => 'Chyba při instalaci šablony, jedna nebo více následujících proměnných nenalezen:<br />template_directory<br />template_name<br />template_version<br />template_author<br />template_license<br />template_function ("theme" oder "template")',
	'USERS_ADDED' 			=> 'Uživatel byl přidán',
	'USERS_CANT_SELFDELETE' => 'Funkce zamítnuta, nelze odstranit sám sebe!',
	'USERS_CHANGING_PASSWORD' => 'Upozornění: Měli byste zadat pouze hodnoty ve výše uvedených oblastech, pokud chcete změnit heslo uživatele',
	'USERS_CONFIRM_DELETE' 	=> 'Chcete opravdu smazat tohoto uživatele?',
	'USERS_DELETED' 		=> 'Uživatel byl v pořádku smazán',
	'USERS_EMAIL_TAKEN' 	=> 'Zadaný email je již použit',
	'USERS_INVALID_EMAIL' 	=> 'Zadali jste neplatnou emilovou adresu',
	'USERS_NAME_INVALID_CHARS' => 'Chybně zadaný znak v uživatelském jméně',
	'USERS_NO_GROUP' 		=> 'Žádná skupina nebyla vybrána',
	'USERS_PASSWORD_MISMATCH' => 'Hesla, která jste zadali se neshodují',
	'USERS_PASSWORD_TOO_SHORT' => 'Heslo, které jste zadali, je příliš krátké',
	'USERS_SAVED' 			=> 'Uživatel byl v pořádku uložen',
	'USERS_USERNAME_TAKEN' 	=> 'Vaše zadané uživatelské jméno je již obsazeno',
	'USERS_USERNAME_TOO_SHORT' => 'Uživatelské jméno, které jste zadal je příliš krátké'
); // $MESSAGE

$OVERVIEW = array(
	'ADMINTOOLS' 			=> 'Přístup k administrátorským nástrojům...',
	'GROUPS' 				=> 'Spravovat uživatele a skupiny a jejich přístupových práv...',
	'HELP' 					=> 'Máte otázky? Najděte Vaši odpověď...',
	'LANGUAGES' 			=> 'Správa LEPTON jazyků...',
	'MEDIA' 				=> 'Spravujte soubory média uložené v knihovně...',
	'MODULES' 				=> 'Spravujte LEPTON moduly...',
	'PAGES' 				=> 'Spravovat Vaše webové stránky...',
	'PREFERENCES' 			=> 'Změna nastavení - emailové adresy, hesla, atd... ',
	'SETTINGS' 				=> 'Změna nastavení pro LEPTON...',
	'START' 				=> 'Admin přehled',
	'TEMPLATES' 			=> 'Změna vzhledu šablon...',
	'USERS' 				=> 'Správa uživatelů, kteří mají přístup do systému Lepron...',
	'VIEW' 					=> 'Rychlý náhled a prohlížet váš web v novém okně...'
);

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