<?php
namespace App\Models;
class Booking extends BaseModel{
    protected $table = 'booking';

    public function getBooking()
    {
        $sql = "select* from $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function addBooking($id, $ten_sp, $ngay_dat)
    {
        $sql = "insert into $this->table values (?,?,?)";
        $this->setQuery($sql);
        return $this->execute([$id, $ten_sp, $ngay_dat]);
    }

    public function getDetailBooking($id)
    {
        $sql = "select * from $this->table where id=?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }

    public function updateBooking($id, $ten_sp, $ngay_dat)
    {
        $sql = "update $this->table set ten_sp=?,ngay_dat=? where id=?";
        $this->setQuery($sql);
        return $this->execute([$ten_sp, $ngay_dat, $id]);

    }

    public function deleteProduct($id)
    {
        $sql = "delete from $this->table where id=?";
        $this->setQuery($sql);
        return $this->execute([$id]);

    }
}