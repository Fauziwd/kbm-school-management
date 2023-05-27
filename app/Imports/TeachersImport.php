<?php

namespace App\Imports;

use App\Teacher;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TeachersImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Teacher([
            'user_id' => $row['id'],
            'name' => $row['Nama'],
            'gender' => $row['gender'],
            'phone' => $row['No.HP'],
            'dateofbirth' => $row['TTL'],
            'current_address' => $row['Alamat'],
        ]);
    }
}
