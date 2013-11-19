<?php
	class M_Mail
	{
		private $_mailAdd;
		
		//Contructor
		public function __construct($mailAdd) {
			$this->_mailAdd=$mailAdd;
		}
		
		//return the mailAddress of the object
		public function getMail_ClassAdd(){
			return $this->_mailAdd;
		}
		
		//read and return a mail address from the database
		public static function readAllMailAddress($database){
			$request = sprintf("SELECT * FROM mailAddress");
			$res=$database->sqlQuery($request);
			return M_Mail::resToObject($res);
		}
		
		//insert the mail object into database
		public function write($database){
			$request = sprintf("INSERT INTO mailaddress VALUES('%s')",$this->_mailAdd);
			return $database->sqlQuery($request);
		}
		
		//check if the mail object is in database
		public function isInDatabase($database){
			$request = sprintf("SELECT * FROM mailaddress WHERE mailAdd = '%s'", $this->_mailAdd);
			$res=$database->sqlQuery($request);
			$try = M_Mail::resToObject($res);
			if(count($try)>0){
				return true;
			}else{
				return false;
			}
		}
		
		//convert resource to object
		private static function resToObject($res){
			if (!$res) {
				die('Echec SQL');
			}
			while($mailData = pg_fetch_object ($res)){
				$mailArray[]= new M_Mail($mailData->mailAdd);
			}
			if(isset($mailArray[0])){
				return $mailArray;
			}
		}
	}
?>