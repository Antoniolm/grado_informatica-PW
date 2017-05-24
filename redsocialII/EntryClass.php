<?php

class Entry {

    private $dbAccess;

    public function Entry($dbAccess) {
        $this->dbAccess = $dbAccess;
    }

    public function insertEntryDB($id_user, $title,$description,$date,$hour,$image){
    	$this->dbAccess->Query("insert into entry (ID_user,title,description,date,hour,image) values ('$id_user','$title','$description','$date','$hour','$image')");
    }

    public function updateEntryDB($id_entry,$id_user, $title,$description,$date){
    	$this->dbAccess->Query("update entry set ID_user='$id_user', title='$title', description='$description', date='$date' where ID_entry='$id_entry'");
    }

	public function searchEntry($id){
    	$result=$this->dbAccess->Query("select * from entry where ID_entry='$id' ORDER BY ID_entry DESC");
    	$row= mysqli_fetch_array($result);
    	return $row;
    }

    public function searchUserEntry($id){
        $result=$this->dbAccess->Query("select * from entry where ID_user='$id'  ORDER BY ID_entry DESC");
        return $result;
    }    

    public function searchNumEntry(){
        $result=$this->dbAccess->Query("select * from entry ORDER BY ID_entry DESC");
        $num_rows = mysqli_num_rows($result);
        return $num_rows;
    }  

    public function searchNumUserEntry($id){
        $result=$this->dbAccess->Query("select * from entry where ID_user='$id'  ORDER BY ID_entry DESC");
        $num_rows = mysqli_num_rows($result);
        return $num_rows;
    }  

    public function searchEntryLimit($Begin,$End){
        $result=$this->dbAccess->Query("select * from entry ORDER BY ID_entry DESC limit ".$Begin.",".$End);
        return $result;
    } 

    public function searchUserEntryLimit($id,$Begin,$End){
        $result=$this->dbAccess->Query("select * from entry where ID_user='$id' ORDER BY ID_entry DESC limit ".$Begin.",".$End);
        return $result;
    } 

    public function searchAllEntry(){
    	$result=$this->dbAccess->Query("select * from entry ORDER BY ID_entry DESC");
    	return $result;
    }  

}?>