<?php

namespace App\Imports;

use App\Models\testModel;
use Maatwebsite\Excel\Concerns\ToModel;

class Import implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new testModel([
            'id'   => $row[0],
            'name' => $row[1],
            'email' => $row[2]
        ]);
    }
}
