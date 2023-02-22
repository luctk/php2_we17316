<?php

namespace App\Models;
class Category extends BaseModel
{
    protected $table = 'category';

    public function getCategory()
    {
        $sql = "select * from $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();

    }

    public function addCategory($id, $ten_dm)
    {
        $sql = "insert into $this->table values (?,?)";
        $this->setQuery($sql);
        return $this->execute([$id, $ten_dm]);
    }
    public function getDetailCategory($id)
    {
        $sql = "select * from $this->table where id=?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }

    public function updateCategory($id, $ten_dm)
    {
        $sql = "update $this->table set ten_dm=? where id=?";
        $this->setQuery($sql);
        return $this->execute([$ten_dm, $id]);

    }
    public function  deleteCategory($id){
        $sql="delete from $this->table where id=?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }
}