<?php

namespace App\Models;

use App\Models\BaseModel;

class Student extends BaseModel
{
    protected $table = 'sinh_vien';
    public function getListStudent()
    {
        $sql = "select * from $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}
 