<?php

class Commentary {

    private $dbAccess;

    public function Commentary($dbAccess) {
        $this->dbAccess = $dbAccess;
    }

    public function insertCommentaryDB($id_entry,$id_user, $date,$description){
    	$this->dbAccess->Query("insert into commentary (ID_entry,ID_user,date,description) values ('$id_entry','$id_user','$date','$description')");
    }

    public function updateCommentaryDB($id_commentary ,$id_entry,$id_user, $date,$description){
    	$this->dbAccess->Query("update commentary set ID_entry='$id_entry' ID_user='$id_user', date='$date', description='$description' where ID_commentary='$id_commentary'");
    }

	public function searchCommentary($id){
    	$result=$this->dbAccess->Query("select * from commentary where ID_commentary='$id'");
    	$row= mysqli_fetch_array($result);
    	return $row;
    }

    public function searchEntryCommentary($id){
        $result=$this->dbAccess->Query("select * from commentary where ID_entry='$id'");
        return $result;
    }

    public function searchUserCommentary($id){
        $result=$this->dbAccess->Query("select * from commentary where ID_user='$id'");
        return $result;
    }    

    public function searchAllCommentary(){
    	$result=$this->dbAccess->Query("select * from commentary");
    	return $result;
    }  

}?>