<?php

/**
 *	This file is part of an COREFILE for use with LEPTON Core.
 *	This COREFILE is released under the GNU GPL.
 *
 *	@file			class.lepton.filemanager.php
 *	@author          LEPTON Project
 *	@copyright       2010-2013, LEPTON Project
 *	@link            http://www.LEPTON-cms.org
 *	@license         http://www.gnu.org/licenses/gpl.html
 *	
 *
 *	Prolegomenon
 *
 *	As Lepton-CMS 1.x comes up within a class secure it was difficult to add new
 *	own written files to the "allowed" list. Or in other words - you had have to edit
 *	the file by hand.
 *		To get rid of this here is a simple class for adding/registering own backend-files
 *	to the class secure, e.g.:
 *
 *	$lepton_filemanager->register_file( __FILE__ );
 *
 *	If you have a couple of files to register you can also place a linear list of 
 *	the given filenames you want to use, e.g. inside a admin-tool modul:
 *
 *	$files = array("save_my_own.php", "save_my_comments.php", "you_dont_realy_need_this.php";
 *	$lepton_filemanager->register_file( $files );
 *
 *	04.02.2013 - Dietrich Roland Pehlke (Aldus)
 *
 */
 
class lepton_filemanager
{

	/**
	 *	Public array that holds the reg. filenames.
	 *
	 */
	public $filenames = array();
	
	/**
	 *	Constructor of the class
	 *
	 */
	public function __construct() {
	
	}
	
	/**
	 *	Destructor of the class
	 *
	 */
	public function __destruct() {
	
	}
	
	/**
	 *	Public function/method to "register" files.
	 *
	 *	@param	mixed	Could be a single filename (string) or an array within the names.
	 *
	 */
	public function register_file($filename) {
		if (true === is_array($filename)) {
			$this->filenames = array_merge($filename, $this->filenames);
		} else {
			$this->filenames[] = $filename;
		}
	}
	
	/**
	 *	Public function/method to "unregister" files.
	 *	
	 *	@param	string	A single filename.
	 *
	 */
	public function unregister_file($filename) {
		if (in_array($filename, $this->filenames)) unset($this->filenames[$filename]);
	}
}

global $lepton_filemanager;

if (!is_object($lepton_filemanager)) $lepton_filemanager = new lepton_filemanager();

?>