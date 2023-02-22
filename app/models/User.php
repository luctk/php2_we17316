<?php
namespace App\Models;

class User extends BaseModel {
    protected $table= 'user';
    public function getUser(){
        $sql="select * from $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function addUser($id,$username,$password){
        $sql="insert into $this->table value (?,?,?)";
        $this->setQuery($sql);
        return $this->execute([$id,$username,$password]);
    }
    public function getDetailUser($id){
        $sql="select * from $this->table where id=?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }
    public function updateUser($id,$username,$password){
        $sql="update $this->table set username=?,password=? where id=?";
        $this->setQuery($sql);
        return $this->execute([$username,$password,$id]);
    }
    public function deleteUser($id){
        $sql="delete from $this->table where id=?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }
}