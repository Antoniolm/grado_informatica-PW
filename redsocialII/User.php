<?php

class User {

    private $dbAccess;

    public function User($dbAccess) {
        $this->dbAccess = $dbAccess;
    }

    public function insertUserDB($name, $lastname,$nickname,$password,$image){
    	$this->dbAccess->Query("insert into user (name,lastname,nickname,password,image) values ('$name','$lastname','$nickname','$password','$image')");
    }

    public function updateUser($id,$name, $lastname,$nickname,$password,$image){
    	$this->dbAccess->Query("update user set name='$name', lastname='$lastname',nickname='$nickname',password='$password',image='$image' where ID_user='$id'");
    }

	public function searchUser($id){
    	$result=$this->dbAccess->Query("select * from user where ID_user='$id'");
    	$row= mysqli_fetch_array($result);
    	return $row;
    }  

    public function searchAllUser(){
    	$result=$this->dbAccess->Query("select * from user");
    	return $result;
    }  

    public function searchConnectedUser(){
        $result=$this->dbAccess->Query("select * from user where connected=true");
        return $result;
    }

    public function checkLogin($nickname,$password){
    	$result=$this->dbAccess->Query("select * from user where nickname='$nickname' and password='$password'");
    	$row= mysqli_fetch_array($result);
    	return $row;
    }

    public function loged($id,$value){
        $this->dbAccess->Query("update user set connected='$value' where ID_user='$id'");
    }   

}?>