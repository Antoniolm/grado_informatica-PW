<?php

class Entry {

    private $dbAccess;

    public function Entry($dbAccess) {
        $this->dbAccess = $dbAccess;
    }

    public function insertEntryDB($id_user, $title,$description,$date){
    	$this->dbAccess->Query("insert into entry (ID_user,title,description,date) values ('$id_user','$title','$description','$date')");
    }

    public function updateEntryDB($id_entry,$id_user, $title,$description,$date){
    	$this->dbAccess->Query("update entry set ID_user='$id_user', title='$title', description='$description', date='$date' where ID_entry='$id_entry'");
    }

	public function searchEntry($id){
    	$result=$this->dbAccess->Query("select * from entry where ID_entry='$id'");
    	$row= mysqli_fetch_array($result);
    	return $row;
    }

    public function searchUserEntry($id){
        $result=$this->dbAccess->Query("select * from entry where ID_user='$id'");
        return $result;
    }    

    public function searchAllEntry(){
    	$result=$this->dbAccess->Query("select * from entry");
    	return $result;
    }  

}?>