<?php
namespace App\Models;
class Comment extends BaseModel{
    public function getComment(){
        $sql="select * from comment";
        $this->setQuery($sql);
       return $this->loadAllRows();
    }
    public function addComment($id,$noi_dung){
        $sql="insert into comment values (?,?)";
        $this->setQuery($sql);
        return $this->execute([$id,$noi_dung]);
    }
    public function getDetailComment($id){
        $sql=" select * from comment where id=?";
        $this->setQuery($sql);
        return  $this->loadRow([$id]);
    }
    public function updateComment($id,$noi_dung){
        $sql="update comment set noi_dung=? where id=?";
        $this->setQuery($sql);
       return $this->execute([$noi_dung,$id]);
    }
    public function deleteComment($id){
        $sql="delete from comment where id=?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }
}