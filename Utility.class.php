<?php

/*
	
	@Date			:			3 Dec 2019


*/



class Utility{
	private $db;


	public static function getFullNameByUserID($id){
		$fullname;

		$db = DataBase::getInstance();
		
		if(is_object($db)){

			$selsql = "SELECT * FROM ".TBL_USERS." WHERE iduser=".(int)$id;
			$row = $db->executeSingle($selsql);
			if(is_array($row)){
				$fullname = $row['fname'];
			}
		}

		return $fullname;
	}


}


?>