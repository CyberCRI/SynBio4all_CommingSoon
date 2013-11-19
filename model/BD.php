<?php
	class DB
	{
		private $_con;

		public function __construct() {
			$host = "localhost"; 
			$user = "synbio_comingsoon";
			$pass = "gosynbio"; 
			$db = "synbio_comingsoon"; 

			$this->_con = pg_connect("host=$host dbname=$db user=$user password=$pass")
				or die ("Could not connect to server\n");
		}

		public function sqlQuery($query){
			$res = pg_query($this->_con, $query) or die("Cannot execute query: $query\n"); 
			return $res;
		}
		
		public function close() {
			pg_close($this->_con);
		}
	}
?>