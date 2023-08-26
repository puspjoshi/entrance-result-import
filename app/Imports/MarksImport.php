<?php

namespace App\Imports;

use App\Models\Mark;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MarksImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function model(array $row)
    {
        return new Mark([
            'name'      => $row['name'],
            'rank'      => $row['rank'],
            'rollno'    => $row['rollno'],
            'remark'    => $row['remark'],
            'category_id'      => $row['code']
        ]);
    }
}
